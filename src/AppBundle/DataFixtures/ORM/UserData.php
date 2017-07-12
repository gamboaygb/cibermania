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


class UserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for($i=0;$i<5;$i++){
            $user=new User();
            $user->setActive(1);
            $user->setEmail($i.'@localhost.com');
            $user->setPassword($i);
            $user->setRoles('ROLE_USER');
            if ($i==1)
                $user->setRoles('ROLE_ADMIN');
            $manager->persist($user);

        }
        $manager->flush();
    }
}