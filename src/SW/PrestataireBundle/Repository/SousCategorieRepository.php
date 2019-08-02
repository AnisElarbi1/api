<?php

namespace SW\PrestataireBundle\Repository;
use Doctrine\ORM\QueryBuilder;
/**
 * SousCategorieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SousCategorieRepository extends \Doctrine\ORM\EntityRepository
{
    public function listSousCategories_By_Categorie($categorie)
    {
        $qb = $this->createQueryBuilder('sc');

        $qb->where('sc.categorie= :id')
            ->setParameter('id', $categorie)
            ->select('sc.id,sc.nom,sc.description,sc.total,sc.icone')
        ;

        return $qb
            ->getQuery()
            ->getResult()
            ;
    }
    public function listIdSousCategories_By_Categorie($categorie)
    {
        $qb = $this->createQueryBuilder('sc');

        $qb->where('sc.categorie= :id')
            ->setParameter('id', $categorie)
            ->select('sc.id')
        ;

        return $qb
            ->getQuery()
            ->getResult()
            ;
    }
    public function deleteListSousCategories_By_Categorie($id)
    {
        $qb = $this->createQueryBuilder('sc');

        $qb->where('sc.categorie= :id')
            ->setParameter('id', $id)
            ->delete('')
        ;

        return $qb
            ->getQuery()
            ->getResult()
            ;
    }
}