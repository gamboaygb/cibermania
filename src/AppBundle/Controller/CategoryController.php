<?php
/**
 * Created by PhpStorm.
 * User: gamboa
 * Date: 24/07/17
 * Time: 23:43
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/category")
 */
class CategoryController extends Controller
{
    /**
     * @Route("/{slug}/", name="category_post_list")
     */
    public function listCategoryAction(Request $request,$slug ){
        $em = $this->getDoctrine()->getManager();
        $post_list = $em->getRepository('AppBundle:Category')->findOneBy(['name'=>$slug]);

        return $this->render('front/homepage/category.html.twig',[
            'post_list'=>$post_list,
        ]);
    }
}