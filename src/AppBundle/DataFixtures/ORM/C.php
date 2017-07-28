<?php
/**
 * Created by PhpStorm.
 * User: gamboa
 * Date: 24/07/17
 * Time: 1:23
 */

namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Category;


class C implements  FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i=0;$i<count($this->categorias());$i++){
            $c = new Category();
            $c->setName($this->categorias()[$i]);
            $manager->persist($c);
        }
        $manager->flush();
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

        return $nombres;
    }
}