<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Service\Facebook\Facebook;

/**
 * @Route("/ajax")
 */

class AjaxController extends Controller
{


    /**
     * @Route("/" ,name="homeajax")
     */

    public function indexAction(Request $request){
        return $this->render('front/general/_index_ajax.html.twig');
    }


    /**
     * @Route("/list-post/",name="post_ajax")
     * @Method({"GET"})
     */
    public function postAction(Request $request){


        if($request->isXmlHttpRequest())
        {
            $encoder = new JsonEncoder();
            $normalizer = new ObjectNormalizer();

            $normalizer->setCircularReferenceHandler(function ($object) {
                return $object->getId();
            });

            $serializer = new Serializer(array($normalizer), array($encoder));


            $em = $this->getDoctrine()->getManager();
            $posts =  $em->getRepository('AppBundle:Post')->findAll();


            $response = new JsonResponse(array(
                'response' => 'success',
                'posts' => $serializer->serialize($posts, 'json')
            ),200);

            return $response;
        }


    }
    
    /**
     * @Route("/post-info/{id}",name="post_info")
     * @Method({"GET"})
     */
    public function postInfoAction(Request $request,$id){


        if($request->isXmlHttpRequest())
        {
            $encoder = new JsonEncoder();
            $normalizer = new ObjectNormalizer();

            $normalizer->setCircularReferenceHandler(function ($object) {
                return $object->getId();
            });

            $serializer = new Serializer(array($normalizer), array($encoder));


            $em = $this->getDoctrine()->getManager();
            $post =  $em->getRepository('AppBundle:Post')->findOneById($id);
            $_SESSION['link']='https://cibermania.es/'.$post->getSlug();

			$this->shareFacebookAction($request);
            $response = new JsonResponse(array(
                'response' => 'success',
                'post' => $serializer->serialize($_SESSION['facebook_access_token'], 'json')
            ),200);

            return $response;
        }


    }
    
    
    /**
     * @Route("/share-facebook/",name="share_face")
     */
    public function shareFacebookAction(Request $request){



            $em = $this->getDoctrine()->getManager();
            
             $facebook  = new Facebook(
                    array('app_id'=>'305634546574211','app_secret'=>'cd99f07cc4561956f700c4d383eb1042')
                 );
                 
                 if($_SESSION['facebook_access_token']){
                 
		             	$linkData = [
						  'link' => $_SESSION['link'],
						  'message' => 'User provided message',
						  ];

						try {
						  // Returns a `Facebook\FacebookResponse` object
						  $response = $facebook->post('/me/feed', $linkData, $_SESSION['facebook_access_token']);
						} catch(Facebook\Exceptions\FacebookResponseException $e) {
						  echo 'Graph returned an error: ' . $e->getMessage();
						  exit;
						} catch(Facebook\Exceptions\FacebookSDKException $e) {
						  echo 'Facebook SDK returned an error: ' . $e->getMessage();
						  exit;
						}
                 		 $graphNode = $response->getGraphNode();
                 		 echo 'Posted with id: ' . $graphNode['id'];
                 }else{
                 	echo 'Posted with id';
                 
                 }
            
        }


    
}
