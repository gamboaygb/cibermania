<?php

namespace AppBundle\Repository;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByFeatured($featured){
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
        SELECT u
        FROM AppBundle:Post u
        WHERE u.category = :featured');
        $consulta->setParameter('featured', $featured);

        try{
            return $consulta->getSingleResult();
        }catch (\Exception $error){
            return false;
        }
    }

    public function findBylimit($limit){
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
        SELECT u
        FROM AppBundle:Post u');
        $consulta->setMaxResults($limit);

        try{
            return $consulta->getResult();
        }catch (\Exception $error){
            return false;
        }
    }

    public function findByVisited($limit){
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
        SELECT u
        FROM AppBundle:Post u
        ORDER  by u.views DESC');
        $consulta->setMaxResults($limit);

        try{
            return $consulta->getResult();
        }catch (\Exception $error){
            return false;
        }
    }

    public function findByTitle($slug){
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
        SELECT u
        FROM AppBundle:Post u
        WHERE u.slug = :slug');
        $consulta->setParameter('slug', $slug);

        try{
            return $consulta->getSingleResult();
        }catch (\Exception $error){
            return false;
        }
    }

    public function findBySearch($slug){
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
        SELECT u
        FROM AppBundle:Post u
        WHERE u.content like :slug
        or u.title like :slug');
        $consulta->setParameter('slug', "%$slug%");
        $consulta->setParameter('slug',"%$slug%");

        try{
            return $consulta->getResult();
        }catch (\Exception $error){
            return false;
        }
    }
}
