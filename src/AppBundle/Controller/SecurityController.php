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
use AppBundle\Service\Facebook\Facebook;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="user_login")
     */
    public function loginAction()
    {
	if($this->getUser()){
            return $this->redirectToRoute('homepage');
        }

        $authUtils = $this->get('security.authentication_utils');
        return $this->render('front/homepage/_singin.html.twig', array(
            'last_username' => $authUtils->getLastUsername(),
            'error' => $authUtils->getLastAuthenticationError(),
            'facebook'=>$this->faceUrl(),
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
            'facebook'=>$this->faceUrl(),
        ));
    }

    /**
     * @Route("/signup",name="create_account")
     */
    public function createAccountAction(Request $request){
        if($this->getUser()){
            return $this->redirectToRoute('homepage');
        }
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
                $person->setDescription($form->getData()->getDescription());


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

    /**
     * @Route("/fb-callback/", name="fcallback")
     */
    public function facebookLoginAction(){
        $facebook  = new Facebook(
            array('app_id'=>'305634546574211','app_secret'=>'cd99f07cc4561956f700c4d383eb1042')
        );
        var_dump($facebook);
        exit;

    }

    private function faceUrl(){
        /*facebook*/
        $facebook  = new Facebook(
            array('app_id'=>'305634546574211','app_secret'=>'cd99f07cc4561956f700c4d383eb1042')
        );
        $helper = $facebook->getRedirectLoginHelper();
        $permissions = ['email', 'user_likes','public_profile'];
        $loginUrl = $helper->getLoginUrl('http://www.cibermania.es/fb-callback', $permissions);

        return $loginUrl;
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

   /**
     *
     * @Route("/token/{token}", name="activate")
     */
    public function activateUserAction($token){
        $em = $this->getDoctrine()->getManager();
        $person=$em->getRepository('AppBundle:Person')->findByToken($token);



        if($person){
	    $user=$em->getRepository('AppBundle:User')->findByPerson($person);

	
            $user->setActive(1);
            $person->setToken("");
            $person->setActivatedDate(new \DateTime());

            
	    $em->persist($person);
            $em->flush();
            $em->persist($user);
            $em->flush();




            $token= new UsernamePasswordToken(
                $user,
                $user->getPassword(),
                'frontend',
                $user->getRoles()
            );


		

            $this->get('security.token_storage')->setToken($token);
          
	 	

            return $this->redirect($this->generateUrl('homepage'));
	   
		
        }else{
            return $this->redirect($this->generateUrl('caducada'));
        }
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
