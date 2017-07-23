<?php
/**
 * Created by PhpStorm.
 * User: gamboa
 * Date: 13/07/17
 * Time: 23:13
 */

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Firewall\ListenerInterface;
use Symfony\Component\Security\Core\Authentication\AuthenticationManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use AppBundle\Form\RegisterType;
use AppBundle\Entity\Register;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="user_login")
     */
    public function loginAction()
    {
        $authUtils = $this->get('security.authentication_utils');

        return $this->render('front/homepage/_login.html.twig', array(
            'last_username' => $authUtils->getLastUsername(),
            'error' => $authUtils->getLastAuthenticationError(),
        ));
    }
    /**
     * @Route("/login_check", name="user_login_check")
     */
    public function loginCheckAction()
    {
    }
    /**
     * @Route("/logout", name="user_logout")
     */
    public function logoutAction()
    {
    }

    public function boxloginAction()
    {
        $authUtils = $this->get('security.authentication_utils');

        return $this->render('front/homepage/_login.html.twig', array(
            'last_username' => $authUtils->getLastUsername(),
            'error' => $authUtils->getLastAuthenticationError(),
        ));
    }

    /**
     * @Route("/signup",name="create_account")
     */
    public function createAccountAction(Request $request){

        $registro= new Register();

        $form = $this->createForm(RegisterType::class, $registro,array(
            'register'=>'user_register',
            'validation_groups' => array('default', 'register'),
        ));


        $form->handleRequest($request);
        if($form->isSubmitted()){

            $user=$form->getData()->getUser();
            $person=$form->getData()->getPerson();
            $person->setIpClient($request->getClientIp());




            $encoder = $this->get('security.encoder_factory')->getEncoder($user);

            $encoded = $encoder->encodePassword($user->getPasswordClear(), null);
            $user->setPassword($encoded);
            $user->setPerson($person);



            $em = $this->getDoctrine()->getManager();
            $em->persist($person);
            $em->flush();

            $em->persist($user);
            $em->flush();
            $this->sendMailConfirmation($user);
            return $this->render('static/gracias.html.twig',array(
                'email'=>$user->getEmail(),
            ));
        }

        return $this->render('front/homepage/_create_acount.html.twig',array(
            'form'=>$form->createView(),
        ));

    }

    /**
     * @Route("profile/edit",name="edit_profile")
     */
    public function profileEditAction(Request $request){
        $user=$this->getUser();
        if($user){
            $user_profile=new Register();
            $user_profile->setUser($user);
            $user_profile->setPerson($user->getPerson());
            $form = $this->createForm(RegisterType::class, $user_profile,array(
                'register'=>'user_profile',
            ));


            $form->handleRequest($request);
            if($form->isSubmitted()){

                $user=$form->getData()->getUser();
                $person=$form->getData()->getPerson();


                if(null!==$user->getPasswordClear()){
                    $encoder = $this->get('security.encoder_factory')->getEncoder($user);
                    $encoded = $encoder->encodePassword($user->getPasswordClear(), null);
                    $user->setPassword($encoded);
                    $user->setPerson($person);
                }




                $em = $this->getDoctrine()->getManager();
                $em->persist($person);
                $em->flush();

                $em->persist($user);
                $em->flush();
                return $this->render('front/user/_profile.html.twig',[
                    'form'=>$form->createView(),
                    'action'=>'user_profile',
                ]);
            }




            return $this->render('front/user/_profile.html.twig',[
                'form'=>$form->createView(),
                'action'=>'user_profile',
            ]);
        }

    }


    private function sendMailConfirmation($usuario){
        $message = \Swift_Message::newInstance()
            ->setSubject('Bienvenido a CibErMaNia')
            ->setFrom('info@cibermania.es')
            ->setTo($usuario->getEmail())
            ->setBody(
                $this->renderView(
                    'Emails/registration.html.twig',
                    array('usuario' => $usuario)
                ),
                'text/html'
            )

        ;
        $this->get('mailer')->send($message);

    }


    private function notificationLogin($error){
        $message="";
        switch ($error->getCode()){
            case 0:
                $message="Su cuenta esta desabilitada pongase en contacto con nosotros";
                break;
        }

        return $message;
    }
}