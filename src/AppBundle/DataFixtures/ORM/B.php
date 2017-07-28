<?php
/**
 * Created by PhpStorm.
 * User: gamboa
 * Date: 11/07/17
 * Time: 0:54
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;


class B implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $persons=$manager->getRepository('AppBundle:Person')->findAll();
        $i=0;
        foreach ($persons as $person){
            $user=new User();
            $user->setActive(1);
            $user->setEmail($i.'@localhost.com');
            $user->setPassword($i);
            $user->setRoles('ROLE_USER');
            $user->setActive(false);
            $user->setExpired(false);
            $user->setPerson($person);
            if ($i==1)
                $user->setRoles('ROLE_ADMIN');
            $manager->persist($user);
            $i++;

        }
        $manager->flush();
    }
}