<?php

namespace App\Repository;

use App\Entity\ClientDeliveryAddress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ClientDeliveryAddress|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientDeliveryAddress|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientDeliveryAddress[]    findAll()
 * @method ClientDeliveryAddress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientDeliveryAddressRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ClientDeliveryAddress::class);
    }

    // /**
    //  * @return ClientDeliveryAddress[] Returns an array of ClientDeliveryAddress objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ClientDeliveryAddress
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
