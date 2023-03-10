<?php

namespace App\Repository;

use App\Entity\Actualite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Actualite>
 *
 * @method Actualite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Actualite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Actualite[]    findAll()
 * @method Actualite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActualiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Actualite::class);
    }

    public function save(Actualite $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Actualite $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    //    /**
    //     * @return Actualite[] Returns an array of Actualite objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Actualite
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    // public function SortByTitreActualite()
    // {
    //     return $this->createQueryBuilder('e')
    //         ->orderBy('e.titre', 'ASC')
    //         ->getQuery()
    //         ->getResult();
    // }

    // public function SortByContenuActualite()
    // {
    //     return $this->createQueryBuilder('e')
    //         ->orderBy('e.contenu', 'ASC')
    //         ->getQuery()
    //         ->getResult();
    // }


    // public function SortByDateActualite()
    // {
    //     return $this->createQueryBuilder('e')
    //         ->orderBy('e.dateActualite', 'ASC')
    //         ->getQuery()
    //         ->getResult();
    // }

    public function findByTitreActualite($titre)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.titre LIKE :titre')
            ->setParameter('titre', '%' . $titre . '%')
            ->getQuery()
            ->execute();
    }

    public function findByContenuActualite($contenu)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.contenu LIKE :contenu')
            ->setParameter('titre', '%' . $contenu . '%')
            ->getQuery()
            ->execute();
    }

    public function getPaginatedActualites($page,$limit)
    {
       $query=$this->createQueryBuilder('e')
       ->orderBy('e.titre')
       ->setFirstResult(($page * $limit) - $limit)
       ->setMaxResults($limit);
       return $query->getQuery()->getResult();
    }
    public function getTotalActualites(){
        $query=$this->createQueryBuilder('e')
        ->select('COUNT(e)');
        return $query->getQuery()->getSingleScalarResult();

    }


    public function findAllActualities($sortBy = null)
    {
        $query =  $this->createQueryBuilder('e');
        if($sortBy == 'titreActualite'){
            $query->orderBy('e.titre', 'ASC');
        }elseif($sortBy == 'typeContent'){
            $query->orderBy('e.contenu', 'ASC');
        }elseif($sortBy == 'typeDate'){
            $query->orderBy('e.dateActualite', 'DESC');
        }
           
        return $query ->getQuery()
        ->execute();
    }

    // public function findByAllActualities($choix = null , $mots=null)
    // {
    //     $query =  $this->createQueryBuilder('e');
    //     if($choix == 'titreActualite'){
    //         $query->andWhere('e.mots LIKE :titre')
    //         ->setParameter('titre', '%' . $mots . '%')
    //         ->getQuery()
    //         ->execute();
    //     }elseif($choix == 'contenuActaulite'){
    //         $query->andWhere('e.mots LIKE :titre')
    //         ->setParameter('contenu', '%' . $mots . '%')
    //         ->getQuery()
    //         ->execute();
    //     }
           
    //     return $query ->getQuery()
    //     ->execute();
    // }


    // public function findByContenuActualite($contenu)
    // {
    //     return $this->createQueryBuilder('e')
    //         ->andWhere('e.contenu LIKE :contenu')
    //         ->setParameter('lieuEvenement', '%' . $contenu . '%')
    //         ->getQuery()
    //         ->execute();
    // }
}
