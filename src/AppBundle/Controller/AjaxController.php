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
}
