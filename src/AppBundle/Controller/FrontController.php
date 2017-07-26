<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FrontController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $featured=$em->getRepository('AppBundle:Post')->findBylimit(3);
        $list_post=$em->getRepository('AppBundle:Post')->findAll();
        return $this->render('front/homepage/index.html.twig',[
            'featureds'=>$featured,
            'list'=>$list_post,
        ]);
    }

    public function footerAction(){
        $em = $this->getDoctrine()->getManager();
        $category_list=$em->getRepository('AppBundle:Category')->findAll();
        return $this->render('static/_category_list.html.twig',[
                'category_list'=>$category_list,
            ]);
    }

    /**
     * @Route("/{nombrePagina}/",
     * defaults={ "nombrePagina" = "ayuda" },
     * requirements={ "nombrePagina"="ayuda|privacidad|sobre_nosotros|politicas" },
     * name="pagina" )
     */
    public function pageAction($nombrePagina){
        return $this->render('static/'.$nombrePagina.'.html.twig');
    }
}
