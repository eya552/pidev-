<?php

namespace App\Repository;

use App\Entity\Animals;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Twilio\Rest\Client;


/**
 * @extends ServiceEntityRepository<Animals>
 *
 * @method Animals|null find($id, $lockMode = null, $lockVersion = null)
 * @method Animals|null findOneBy(array $criteria, array $orderBy = null)
 * @method Animals[]    findAll()
 * @method Animals[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnimalsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Animals::class);
    }

    public function save(Animals $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Animals $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getPaginatedAnimals($page,$limit)
    {
       $query=$this->createQueryBuilder('e')
       ->orderBy('e.NomAnimal')
       ->setFirstResult(($page * $limit) - $limit)
       ->setMaxResults($limit);
       return $query->getQuery()->getResult();
    }
    public function getTotalAnimals(){
        $query=$this->createQueryBuilder('e')
        ->select('COUNT(e)');
        return $query->getQuery()->getSingleScalarResult();
    }
    public function searchAnimals($query)
    {
        $qb = $this->createQueryBuilder('e');
        $qb->where($qb->expr()->orX(
            $qb->expr()->like('e.NomAnimal', ':query'),
            $qb->expr()->like('e.GenreAnimal', ':query')
        ));
        $qb->setParameter('query', '%'.$query.'%');

        return $qb->getQuery()->getResult();
    }

    public function TrieparDate(): array
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.DateDeNaissance', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    public  function sms(){
        // Your Account SID and Auth Token from twilio.com/console
                $sid = 'ACc43f4ec80f6ee0adeb4c3eed0eb32068';
                $auth_token = '8ef5f0b5c5beffa06a4681e506be67df';
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]
        // A Twilio number you own with SMS capabilities
                $twilio_number = "+15674062774";
        
                $client = new Client($sid, $auth_token);
                $client->messages->create(
                // the number you'd like to send the message to
                    '+21625968137',
                    [
                        // A Twilio phone number you purchased at twilio.com/console
                        'from' => '+15674062774',
                        // the body of the text message you'd like to send
                        'body' => 'votre animal a été ajouter , merci de nous contacter pour plus de détails!'
                    ]
                );
            }
//    /**
//     * @return Animals[] Returns an array of Animals objects
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

//    public function findOneBySomeField($value): ?Animals
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
