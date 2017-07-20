<?php
/**
 * Created by PhpStorm.
 * User: gamboa
 * Date: 11/07/17
 * Time: 2:05
 */

namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Post;


class Articulos implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for($i=0;$i<10;$i++){
            $p = new Post();
            $p->setTitle($this->titulos());
            $p->setCreatedDate(new \DateTime());
            $p->setContent($this->lorem());
            $p->setImgPost('3.jpg');
            $p->setShortContent($this->lorem_short());
            $p->setUpdateDate(new \DateTime());
            $p->setCategory($this->categorias());
            $p->setViews(0);
            $manager->persist($p);
        }
        $manager->flush();
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


    public function categorias(){
        $nombres = array(
            'Windows',
            'Linux',
            'Android',
            'IOS',
            'Internet',
            'Tecnología',
        );

        $num = rand(0, 5);

        return $nombres[$num];
    }

    public function lorem(){
        $stg='Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque 
        penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, 
        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
          Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
           porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, 
           viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
            Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper
             ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget 
             condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem 
             neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit 
             id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien 
             ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget 
             eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. 
             Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, 
             augue velit cursus nunc,';

        return $stg;
    }

    public function lorem_short(){
        $stg='Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque 
        penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, 
        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
         justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.';

        return $stg;
    }
}