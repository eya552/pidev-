<?php

namespace App\Repository;

use App\Entity\BilanDeSoin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BilanDeSoin>
 *
 * @method BilanDeSoin|null find($id, $lockMode = null, $lockVersion = null)
 * @method BilanDeSoin|null findOneBy(array $criteria, array $orderBy = null)
 * @method BilanDeSoin[]    findAll()
 * @method BilanDeSoin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BilanDeSoinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BilanDeSoin::class);
    }

    public function save(BilanDeSoin $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BilanDeSoin $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }


    public function findByIdClient ($value){
        $query=$this->createQueryBuilder('b')
                    ->Where( 'b.IdClient = :value')
                    ->setParameter('value', $value)
                    ->getQuery();
        return $query->getResult();
    }

    public function findByIdVeterinaire ($value){
        $query=$this->createQueryBuilder('b')
                    ->Where( 'b.IdVeterinaire = :value')
                    ->setParameter('value', $value)
                    ->getQuery();
        return $query->getResult();
    }
    public function findByAnimal ($value){
        $query=$this->createQueryBuilder('b')
                    ->Where( 'b.Animal = :value')
                    ->setParameter('value', $value)
                    ->getQuery();
        return $query->getResult();
    }

//    /**
//     * @return BilanDeSoin[] Returns an array of BilanDeSoin objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?BilanDeSoin
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
