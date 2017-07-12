<?php


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\Post_commentType;
use AppBundle\Entity\Post_comment;




class PostController extends Controller
{
	
	/**
	 *@Route("/{slug}/",name="view_post")
	 *
	 */
	public function singlePostAction(Request $request,$slug){
        $em = $this->getDoctrine()->getManager();
        $id=$request->get('id');
        $single_post=$em->getRepository('AppBundle:Post')->findByTitle($slug,$id);
        $coments=$em->getRepository('AppBundle:Post_comment')->findByPost($single_post);

        if($single_post){
            $single_post->setViews($single_post->getViews()+1);
            $em->flush($single_post);
        }

		return $this->render('front/post/_single.html.twig', [
		    'single_post'=>$single_post,
            'comments'=>$coments,
        ]);
	}

	public function postCommentAction(Request $request){
        $comment= new Post_comment();
        $form = $this->createForm(Post_commentType::class, $comment);

        $form->handleRequest($request);
        if($form->isSubmitted()){

        }

        return $this->render('front/post/_comment.html.twig', [
            'form'=>$form->createView(),
        ]);

    }
}

