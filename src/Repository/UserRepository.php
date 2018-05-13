<?php

namespace App\Repository;

use App\Entity\User;
use App\Entity\Person;
use App\Entity\Country;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry) {
        parent::__construct($registry, User::class);
    }
    
    /**
     * 
     * @param User $user
     * @param Country $country
     * @return Person
     */
    public function generatePerson(User $user, Country $country) {
        $existing = $this->getEntityManager()->getRepository(Person::class)->findOneByUser($user->getId());
        if(empty($existing)) {
            $existing = new Person();
            $existing->setName('Anonymous');
            $existing->setNationality($country);
            $existing->setUser($user);
            $this->getEntityManager()->persist($existing);
            $this->getEntityManager()->flush();
        }
        return $existing;
    }
}
