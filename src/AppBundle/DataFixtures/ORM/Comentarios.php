<?php
/**
 * Created by PhpStorm.
 * User: gamboa
 * Date: 11/07/17
 * Time: 2:14
 */

namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Post_comment;

class Comentarios implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $post_all=$manager->getRepository('AppBundle:Post')->findAll();

        foreach ($post_all as $post){
            $p = new Post_comment();
            $p->setUpdateDate(new \DateTime());
            $p->setComment($this->comment_short());
            $p->setCommentDate(new \DateTime());
            $p->setCommentTitle($this->titulos());
            $p->setPost($post);
            $manager->persist($p);
        }
        $manager->flush();
    }

    public function comment_short(){
        $stg='Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque 
        penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, 
        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.';

        return $stg;
    }

    public function titulos(){
        $nombres = array(
            'Real madrid ficha',
            'Titulos de noticia',
            'Whatapps caduca este mes',
            'Facebook fake',
            'Google lanza nueva apps',
            'Amazon lo peta',
        );

        $num = rand(0, 5);

        return $nombres[$num];
    }
}