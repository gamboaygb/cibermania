<?php
/**
 * Created by PhpStorm.
 * User: yusmel
 * Date: 9/11/17
 * Time: 13:13
 */

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
 * @Route("/api")
 */
class ApiController
{

    /**
     * @Route("/",name="home")
     * @Method({"GET"})
     */
    public function indexAction(Request $request){


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

}