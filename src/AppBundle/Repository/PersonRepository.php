<?php

namespace AppBundle\Repository;

/**
 * PersonRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PersonRepository extends \Doctrine\ORM\EntityRepository
{
	public function findByToken($token){
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
        SELECT u
        FROM AppBundle:Person u
        WHERE u.token = :token');
        $consulta->setParameter('token', $token);
        try{
            return $consulta->getSingleResult();
        }catch (\Exception $error){
            return false;
        }
    }
}
