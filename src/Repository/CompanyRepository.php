<?php

namespace App\Repository;

use App\Entity\Company;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

use App\Entity\Wallet;

/**
 * @method Company|null find($id, $lockMode = null, $lockVersion = null)
 * @method Company|null findOneBy(array $criteria, array $orderBy = null)
 * @method Company[]    findAll()
 * @method Company[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompanyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Company::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('c')
            ->where('c.something = :value')->setParameter('value', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
    
    /**
     * 
     * @param Company $company Description
     * @return Wallet Description
     */
    public function getMainWallet(Company $company) {
        $returns = null;
        try {
            $mainCurrency = $company->getHqCountry()->getCurrency();
            $returns = $this->getEntityManager()->getRepository(Wallet::class)->findOneBy([
                'company' => $company->getId(),
                'currency' => $mainCurrency->getId(),
            ]);
        } catch(\Exception $e){}
        return $returns;
    }
}
