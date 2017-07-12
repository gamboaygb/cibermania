<?php
/**
 * Created by PhpStorm.
 * User: gamboa
 * Date: 11/07/17
 * Time: 1:42
 */

namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Person;


class Personas implements  FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for($i=0;$i<5;$i++){
            $p = new Person();
            $p->setName($this->nombres());
            $p->setLastName($this->apellidos());
            $p->setToken(uniqid());
            $p->setActivatedDate(new \DateTime());
            $p->setCreatedDate(new \DateTime());
            $p->setIpClient('0.0.0.0');
            $p->setPicture('yus.png');
            $p->setUrlValidate('localhost');
            $manager->persist($p);

        }
        $manager->flush();
    }

    public function nombres(){
        $nombres = array(
            'Maria',
            'Padro ',
            'Yusmel',
            'Manuel',
            'Mariajo',
            'Teresa',
        );

        $num = rand(0, 5);

        return $nombres[$num];
    }

    public function apellidos(){
        $apellidos = array(
            'Gomez Perez',
            'Gonzales chacon',
            'Gamboa benitez',
            'Blanco perez',
            'Vazquez Benitez',
            'Olivar Arias',
        );

        $num = rand(0, 5);

        return $apellidos[$num];
    }
}