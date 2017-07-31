<?php


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Form\Post_commentType;
use AppBundle\Entity\Post_comment;
use AppBundle\Entity\Post;
use AppBundle\Form\PostType;




class PostController extends Controller
{
	
	/**
	 *@Route("/post/{slug}/",name="view_post")
	 *
	 */
	public function singlePostAction(Request $request,$slug){
        $em = $this->getDoctrine()->getManager();
        $single_post=$em->getRepository('AppBundle:Post')->findByTitle($slug);
        $coments=$em->getRepository('AppBundle:Post_comment')->findByPost($single_post);
        $post_by_category=$em->getRepository('AppBundle:Post')->findByCategory($single_post->getCategory());
        $more_visited=$em->getRepository('AppBundle:Post')->findByVisited(5);


        if($single_post){
            $single_post->setViews($single_post->getViews()+1);
            $em->flush($single_post);
        }

		return $this->render('front/post/_single.html.twig', [
		    'single_post'=>$single_post,
            'comments'=>$coments,
            'post_by_category'=>$post_by_category,
            'more_visited'=>$more_visited
        ]);
	}

    /**
     * @Route("/insert/comment/",name="post_comment")
     */
	public function postCommentAction(Request $request,$id=null){

        $comment= new Post_comment();
        $form = $this->createForm(Post_commentType::class, $comment,[
            'action'=>$this->generateUrl('post_comment'),
        ]);

        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $id=$request->get('id_post');
            $comment=$form->getData();
            $comment->setCommentDate(new \DateTime());
            $comment->setUpdateDate(new \DateTime());
            $comment->setPerson($this->getUser()->getPerson());
            $post=$em->getRepository('AppBundle:Post')->find($id);
            $comment->setPost($post);

            $em->persist($comment);

            $em->flush();

            return $this->redirect($request->headers->get('referer'));
        }

        return $this->render('front/post/_comment.html.twig', [
            'form'=>$form->createView(),
            'id_post'=>$id,
        ]);

    }

    /**
     *@Route("/my-post-list/",name="my_post")
     *
     */
    public function myPostListAction(Request $request){
        $user=$this->getUser();
        if($user){
            $em = $this->getDoctrine()->getManager();
            $my_list=$em->getRepository('AppBundle:Post')->findByPerson($user->getPerson());
            if(count($my_list)==0){
                $my_list=null;
            }

            return $this->render('front/post/_mylist.html.twig',[
                'my_list'=>$my_list,
            ]);

        }else{
            return $this->redirectToRoute('user_login');
        }

    }

    /**
     * @Route("/create-post/",name="create_post")
     */

    public function createPostAction(Request $request){
        $user=$this->getUser();

        if($user){
            $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'No Tienes permisos para crear post!');
            $post = new Post();
            $form = $this->createForm(PostType::class,$post);

            $form->handleRequest($request);
            if($form->isSubmitted()){
                $post=$form->getData();
                $post->setShortContent($this->getExcerpt($post->getContent()));
                $post->setCreatedDate(new \DateTime());
                $post->setUpdateDate(new \DateTime());
                $post->setPerson($user->getPerson());
                $post->setViews(0);
                $post->setChecked(false);

                $em = $this->getDoctrine()->getManager();
                $em->persist($post);
                $em->flush();
                return $this->redirectToRoute('my_post');
            }
            return $this->render('front/post/_create_post.html.twig',[
               'form'=>$form->createView(),
            ]);

        }else{
            return $this->redirectToRoute('user_login');
        }

    }

    private function getExcerpt($str, $startPos=0, $maxLength=100) {
        if(strlen($str) > $maxLength) {
            $excerpt   = substr($str, $startPos, $maxLength-3);
            $lastSpace = strrpos($excerpt, ' ');
            $excerpt   = substr($excerpt, 0, $lastSpace);
            $excerpt  .= '...';
        } else {
            $excerpt = $str;
        }

        return strip_tags($excerpt);
    }
}

