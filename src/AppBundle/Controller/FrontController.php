<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Util\Slugger;

class FrontController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $featured=$em->getRepository('AppBundle:Post')->findBylimit(3);
        $list_post=$em->getRepository('AppBundle:Post')->findBy([],['id'=>'DESC']);
        return $this->render('front/homepage/index.html.twig',[
            'featureds'=>$featured,
            'list'=>$list_post,
        ]);
    }

    public function footerAction(){
        $em = $this->getDoctrine()->getManager();
        $category_list=$em->getRepository('AppBundle:Category')->findBy([],['id'=>'DESC']);
        return $this->render('static/_category_list.html.twig',[
                'category_list'=>$category_list,
            ]);
    }

    /**
     * @Route("/seach/", name="search")
     */
    public function searchAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $slug=$request->get('data');
        $result=$em->getRepository('AppBundle:Post')->findBySearch($slug);

        return $this->render('static/_search_result.html.twig',[
            'result'=>$result,
        ]);
    }

   /**
     * @Route("/site/{pageName}/",
     *          defaults={"pageName"="ayuda"},
     *          requirements={"pageName"="ayuda|aviso|cibermania"},
     *          name="page"
     *       )
     */
    public function pageAction(Request $request,$pageName){
    	$pageName=Slugger::getSlug($pageName);
        return $this->render('static/'.$pageName.'.html.twig');
    }
    
    /**
     *@Route("/contact/", name="contact")
     *
     *
     */
    public function contactAction(Request $request){
		$defaultData = array('message' => '');
		$form = $this->createFormBuilder($defaultData)
		    ->add('name', TextType::class,array(
                                                    'attr'=> array('class' => 'form-control','placeholder'=>'Nombre Completo'),
                                                    'label'=>false
                                                    ))
		    ->add('email', EmailType::class,array(
                                                    'attr'=> array('class' => 'form-control','placeholder'=>'Correco Electrónico'),
                                                    ))
		    ->add('message',TextareaType::class,array(
                                                        'attr'=> array('class' => 'form-control','placeholder'=>'Contenido'),
                                                         'label'=>false
                                                    ))
		    ->add('send',SubmitType::class,array(
                'attr'=> array('class' => 'btn btn-success')))
                
		    ->getForm();
	 
		$form->handleRequest($request);
	 
		if ($form->isValid()) {
		    // data es un array con claves 'name', 'email', y 'message'
		    $data = $form->getData();
		    
		    
		    $message = \Swift_Message::newInstance()
            ->setSubject('Nuevo mensaje de '.$data['name'])
            ->setFrom('info@cibermania.es')
            ->setTo('soportecibermania@gmail.com')
            ->setBody($data['message'], 'text/html'
            )

        ;
        $this->get('mailer')->send($message);
        
        
        return $this->render('static/contact.html.twig',[
            'form'=>$form->createView(),
            'sent'=>'Mensaje enviado correctamente, pronto nos pondremos en contacto',
        ]);
		    
		    
		    
		}
		
		return $this->render('static/contact.html.twig',[
            'form'=>$form->createView(),
        ]);
		
		
    }
}
