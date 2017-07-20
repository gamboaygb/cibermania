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

      /*  $registro= new Register();

        $form = $this->createForm(RegisterType::class, $registro);


        $form->handleRequest($request);
        if($form->isSubmitted()){

            $user=$form->getData()->getUser();
            $person=$form->getData()->getPerson();
            $person->setIpClient($request->getClientIp());


            $encoder = $this->get('security.encoder_factory')->getEncoder($user);

            $encoded = $encoder->encodePassword($user->getPassword(), null);
            $user->setPassword($encoded);
            $user->setPerson($person);



            $em = $this->getDoctrine()->getManager();
            $em->persist($person);
            $em->flush();

            $em->persist($user);
            $em->flush();
            //$this->sendMailConfirmation($user);
            return $this->render('static/gracias.html.twig',array(
                'email'=>$user->getEmail(),
            ));
        }

        return $this->render('front/homepage/_create_acount.html.twig',array(
            'form'=>$form->createView(),
        ));*/

      return $this->render('front/homepage/_create_acount.html.twig');
    }
}