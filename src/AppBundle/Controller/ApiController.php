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
class ApiController extends Controller
{

    /**
     * @Route("/",name="home")
     * @Method({"GET"})
     */
    public function indexAction(Request $request){


            //var_dump($request->server->get('HTTP_USER_AGENT'));
           // exit;
        if($request->isMethod('GET')){
            $encoder = new JsonEncoder();
            $normalizer = new ObjectNormalizer();



            $normalizer->setCircularReferenceHandler(function ($object) {
                return $object->getId();
            });

            $serializer = new Serializer(array($normalizer), array($encoder));


            $em = $this->getDoctrine()->getManager();

            $posts =  $em->getRepository('AppBundle:Post')->findByAllPost();


            $response = new JsonResponse(array(
                'response' => 'success',
                'posts' => $serializer->serialize($posts, 'json')
            ),200);

            //$this->m_log("Llega bien");



            return $response;

        }

    }

    /**
     * @Route("/post/",name="post_info")
     * @Method({"GET"})
     */
    public function postInfoAction(Request $request){

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

        $this->console_log('todo cool');

        return $response;



    }


    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }


   private  function m_log($arMsg)
    {
        //creamos una variable vacía
        $stEntry="";
        //coje el evento en el momento que ocurre
        $arLogData['event_datetime']='['.date('D Y-m-d h:i:s A').'] [client '.$_SERVER['REMOTE_ADDR'].']';
        //si el mensahe es de tipo array
        if(is_array($arMsg)){
            //recorremos el array y lo concatenamos con la hora
            foreach($arMsg as $clave => $value)
                $stEntry.=$clave.":".$value.'rn';
        }else{   //concatenamos mensaje con la hora

            $stEntry.=$arMsg."rn";
        }
        //creamos un archivo con el nombre log_mas fecha
        $stCurLogFileName='log_'.date('Ymd').'.txt';
        //abrimos el archivo y concatenamos
        $fHandler=fopen(LOG_PATH.$stCurLogFileName,'a+');
        //escribimos en el archivo
        fwrite($fHandler,$stEntry);
        //cerramos en manejador
        fclose($fHandler);
    }

}