<?php
/**
 * Created by PhpStorm.
 * User: gamboa
 * Date: 13/07/17
 * Time: 23:13
 */

namespace AppBundle\Controller;
use AppBundle\Entity\User;
use AppBundle\Entity\Person;
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
use AppBundle\Service\Instagram\Instagram;
use AppBundle\Service\Yahoo\YahooOAuth2;
use AppBundle\Service\Twitter\TwitterOAuth;
//use AppBundle\Service\Linkedin\Linkedin;
use Symfony\Component\HttpFoundation\Session\Session;

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
            'instagram'=>$this->instaUrl(),
            'yahoo'=>$this->yahooUrl(),
	    	'twitter'=>$this->twtUrl(),
	    	//'linkedin'=>$this->linkedinUrl(),
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
            'instagram'=>$this->instaUrl(),
            'yahoo'=>$this->yahooUrl(),
            'twitter'=>$this->twtUrl(),
            //'linkedin'=>$this->linkedinUrl(),
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
    public function facebookLoginAction(Request $request){
    
        $facebook  = new Facebook(
            array('app_id'=>'305634546574211','app_secret'=>'cd99f07cc4561956f700c4d383eb1042')
        );

        $helper = $facebook->getRedirectLoginHelper();
        
        if (isset($_GET['state'])) {
            $helper->getPersistentDataHandler()->set('state', $_GET['state']);
        }

        $accessToken = $helper->getAccessToken('https://cibermania.es/app_dev.php/fb-callback/');




        if (! isset($accessToken)) {
            if ($helper->getError()) {
                header('HTTP/1.0 401 Unauthorized');
                echo "Error: " . $helper->getError() . "\n";
                echo "Error Code: " . $helper->getErrorCode() . "\n";
                echo "Error Reason: " . $helper->getErrorReason() . "\n";
                echo "Error Description: " . $helper->getErrorDescription() . "\n";
            } else {
                header('HTTP/1.0 400 Bad Request');
                echo 'Bad request';
            }
            exit;
        }else{

            $_SESSION['facebook_access_token'] = (string) $accessToken;
            $facebook->setDefaultAccessToken($_SESSION['facebook_access_token']);
            $oAuth2Client = $facebook->getOAuth2Client();
            $tokenMetadata = $oAuth2Client->debugToken($accessToken);
            $tokenMetadata->validateAppId('305634546574211');
            $tokenMetadata->validateExpiration();
            $longLivedAccessToken              = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
            $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
            // setting default access token to be used in script
            $facebook->setDefaultAccessToken($_SESSION['facebook_access_token']);
            $profile_request = $facebook->get('/me?fields=name,first_name,last_name,email,gender,age_range,quotes,link,locale,picture');
            $profile         = $profile_request->getGraphNode()->asArray();



            $em = $this->getDoctrine()->getManager();
            $user=$em->getRepository('AppBundle:User')->findByEmail($profile['email']);

            if($user){
                $token= new UsernamePasswordToken(
                    $user,
                    $user->getPassword(),
                    'frontend',
                    $user->getRoles()
                );

                $this->get('security.token_storage')->setToken($token);
                return $this->redirect($this->generateUrl('homepage'));

            }else{

                $person= new Person();


                if($profile['first_name']){
                    $person->setName($profile['first_name']);
                }else{
                    $person->setName($profile['name']);
                }

                if($profile['last_name']){
                    $person->setLastName($profile['last_name']);
                }else{
                    $person->setLastName($profile['name']);
                }

                $person->setCreatedDate(new  \DateTime());
                $person->setActivatedDate(new  \DateTime());
                $person->setPicture($profile['picture']['url']);
                $person->setToken('');
                $person->setUrlValidate($profile['link']);
                $person->setIpClient($request->getClientIp());


                $user= new User();
                $user->setEmail($profile['email']);

                $user->setPassword('hola');

                $encoder = $this->get('security.encoder_factory')->getEncoder($user);

                $encoded = $encoder->encodePassword($user->getPasswordClear(), null);
                $user->setPassword($encoded);
                $user->setPerson($person);


                
                $user->setRoles("ROLE_USER");
                $user->setActive(1);
                $user->setExpired(1);


                $em->persist($user);
                $em->flush();


                $em->persist($person);
                $em->flush();

                $token= new UsernamePasswordToken(
                    $user,
                    $user->getPassword(),
                    'frontend',
                    $user->getRoles()
                );
                $this->get('security.token_storage')->setToken($token);
                return $this->redirect($this->generateUrl('homepage'));
            }

        }

    }

    private function faceUrl(){
        /*facebook*/
        $facebook  = new Facebook(
            array('app_id'=>'305634546574211','app_secret'=>'cd99f07cc4561956f700c4d383eb1042')
        );
        $helper = $facebook->getRedirectLoginHelper();
        if (isset($_GET['state'])) {
            $helper->getPersistentDataHandler()->set('state', $_GET['state']);
        }
        $permissions = ['email', 'user_likes','public_profile'];
        $loginUrl = $helper->getLoginUrl('https://cibermania.es/app_dev.php/fb-callback/', $permissions);

        return $loginUrl;
    }


    private function instaUrl(){
        $instagram = new Instagram(array(
            'apiKey'      => '15b11f98a3c74c68b46743304e81e20b',
            'apiSecret'   => 'be149e6912164c16b55dc43a6d2b43e9',
            'apiCallback' => 'https://cibermania.es/in-callback',
        ));

        return $instagram->getLoginUrl();
    }


    /**
     *@Route("/in-callback",name="callback-instagram")
     *
     */
    public function loginInstagramAction(Request $request){

        $instagram = new Instagram(array(
            'apiKey'      => '15b11f98a3c74c68b46743304e81e20b',
            'apiSecret'   => 'be149e6912164c16b55dc43a6d2b43e9',
            'apiCallback' => 'https://cibermania.es/in-callback',
        ));

        $code = $request->get('code');
        $instagram_data = $instagram->getOAuthToken($code);

        /*here create a lo*/
        if($instagram_data->user){
            $em = $this->getDoctrine()->getManager();
            $tem_mail=$instagram_data->user->username."@cibermania.es";
            $user=$em->getRepository('AppBundle:User')->findByEmail($tem_mail);

            if(!$user){ 
                $person = new Person();

                $person->setName($instagram_data->user->username);  
                $person->setLastName($instagram_data->user->full_name);
                $person->setCreatedDate(new  \DateTime());
                $person->setActivatedDate(new  \DateTime());
                $person->setPicture($instagram_data->user->profile_picture);
                $person->setToken($instagram_data->user->id);
                $person->setUrlValidate($instagram_data->user->website);
                $person->setIpClient($request->getClientIp());


                $user= new User();
                $user->setEmail($tem_mail);

                $user->setPassword('hola');

                $encoder = $this->get('security.encoder_factory')->getEncoder($user);

                $encoded = $encoder->encodePassword($user->getPasswordClear(), null);
                $user->setPassword($encoded);
                $user->setPerson($person);


                
                $user->setRoles("ROLE_USER");
                $user->setActive(1);
                $user->setExpired(1);


                $em->persist($user);
                $em->flush();


                $em->persist($person);
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
                $token= new UsernamePasswordToken(
                    $user,
                    $user->getPassword(),
                    'frontend',
                    $user->getRoles()
                );

                $this->get('security.token_storage')->setToken($token);
                return $this->redirect($this->generateUrl('homepage'));
            }

        }
    }



    /**
    *@Route("/yh-callback", name="callback-yahoo");
    */
    public function yahooLoginAction(Request $request){

            $oauth2client=new YahooOAuth2();
            $redirect_uri="https://".$_SERVER['SERVER_NAME'] . $this->generateUrl('callback-yahoo');

        if ($request->get('code')){
	     $code=$request->get('code');
	     $apiClient='dj0yJmk9YXJZYmFRTXlsa2gyJmQ9WVdrOWN6ZFhVbVp1TXpJbWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmeD01Zg--';
             $apiKey='cfe7f5c6a6c1313a1b90b670a63e19e2e4f6b694';
            
             #access token is available. Do API calls.   

             $headers= array('Content-Type: application/x-www-form-urlencoded 
                               Authorization:Basic ZGoweUptazlZWEpaWW1GUlRYbHNhMmd5Sm1ROVdWZHJPV042WkZoVmJWcDFUWHBKYldOSGJ6bE5RUzB0Sm5NOVkyOXVjM1Z0WlhKelpXTnlaWFFtZUQwMVpnLS06Y2ZlN2Y1YzZhNmMxMzEzYTFiOTBiNjcwYTYzZTE5ZTJlNGY2YjY5NA
                            ');
                            
                            
	     $token=$oauth2client->get_access_token($apiClient,$apiKey,$redirect_uri,$code);
	    $t= $oauth2client->getdata($token->xoauth_yahoo_guid);
	    var_dump($token);
             var_dump( $t);
           exit;   
        }else {
         echo 'nada';
            exit;
                

        }

    }

   private function yahooUrl(){
       $oauth2client=new YahooOAuth2();
       $redirect_uri="https://".$_SERVER['SERVER_NAME'] . $this->generateUrl('callback-yahoo');
       return $oauth2client->getAuthorizationURL('dj0yJmk9YXJZYmFRTXlsa2gyJmQ9WVdrOWN6ZFhVbVp1TXpJbWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmeD01Zg--',$redirect_uri);

   }


     /**
     * @Route("/tw-callback",name="callback-twitter")
     */
    public function twitterCallBackAction(Request $request){
		
		$session=$this->get('session')->get('request_token');
		
		$twitter = new TwitterOAuth(
		        'ZYwL700BDyKrGeoYydMqybmr3',
		        'XOft2EaGebm7rV59xHLXtFDSI1GNiejYQlT8iEAqiR1yDRSTIN',
		        $session['oauth_token'],
		        $session['oauth_token_secret']);
		$oauth_verifier=$request->get('oauth_verifier');
		
		$access_token = $twitter->oauth("oauth/access_token", ["oauth_verifier" => $oauth_verifier]);
		$twitter = new TwitterOAuth(
		        'ZYwL700BDyKrGeoYydMqybmr3',
		        'XOft2EaGebm7rV59xHLXtFDSI1GNiejYQlT8iEAqiR1yDRSTIN',
		        $access_token['oauth_token'],
		        $access_token['oauth_token_secret']);
		        
		$user_data= $twitter->get("account/verify_credentials");
		
		/*We create the user*/
		
		
		
		if($user_data){
            $em = $this->getDoctrine()->getManager();
            $tem_mail=$user_data->screen_name."@cibermania.es";
            $user=$em->getRepository('AppBundle:User')->findByEmail($tem_mail);

            if(!$user){ 
                $person = new Person();

                $person->setName($user_data->name);  
                $person->setLastName($user_data->name);
                $person->setCreatedDate(new  \DateTime());
                $person->setActivatedDate(new  \DateTime());
                $person->setPicture($user_data->profile_image_url);
                $person->setToken($user_data->id_str);
                $person->setUrlValidate($user_data->url);
                $person->setIpClient($request->getClientIp());


                $user= new User();
                $user->setEmail($tem_mail);

                $user->setPassword('hola');

                $encoder = $this->get('security.encoder_factory')->getEncoder($user);

                $encoded = $encoder->encodePassword($user->getPasswordClear(), null);
                $user->setPassword($encoded);
                $user->setPerson($person);


                
                $user->setRoles("ROLE_USER");
                $user->setActive(1);
                $user->setExpired(1);


                $em->persist($user);
                $em->flush();


                $em->persist($person);
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
                $token= new UsernamePasswordToken(
                    $user,
                    $user->getPassword(),
                    'frontend',
                    $user->getRoles()
                );

                $this->get('security.token_storage')->setToken($token);
                return $this->redirect($this->generateUrl('homepage'));
            }

        }else{
        	return $this->redirect($this->generateUrl('homepage'));
        }
    }

   private function twtUrl(){

    $twitter = new TwitterOAuth(
            'ZYwL700BDyKrGeoYydMqybmr3',
            'XOft2EaGebm7rV59xHLXtFDSI1GNiejYQlT8iEAqiR1yDRSTIN',
            '964696968-V6N571eDYMHIF9hIxwKL7Bujbvh6Ha7DOrYsVG8Y',
            'vBWl7ZwPffUtscAru7rxcOhd6DIj86AITvtAfjQLeZSDm');

    $request_token = $twitter->oauth( 'oauth/request_token', ['oauth_callback' => 'https://cibermania.es/tw-callback']);
    $session = new Session();

	// set and get session attributes
	$session->set('request_token', $request_token);


    	return  $twitter->url("oauth/authorize", ['oauth_token' => $request_token['oauth_token']]);

    }
    
    
    
    /**
     * @Route("/ln-callback/",name="callback-linkedin")
     *
     
     public function linkedinCallbackAction(Request $request){
     	$linkedin= new Linkedin();
     	
     	if ($linkedin->isAuthenticated()) {
			//we know that the user is authenticated now. Start query the API
			$user=$linkedin->get('v1/people/~:(firstName,lastName)');
			
			var_dump($user);
			exit;
			
		} elseif ($linkedin->hasError()) {
			echo "El usuario ha cancelado la solicited.";
			exit();
		}
     }
     
     private function linkedinUrl(){
     	$linkedin= new Linkedin();
     	return $linkedin->getLoginUrl();
     }*/
    
    
    
    




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
