<?php
namespace App\Repository;

use App\Entity\History;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Description of HistoryRepository
 *
 * @method History|null find($id, $lockMode = null, $lockVersion = null)
 * @method History|null findOneBy(array $criteria, array $orderBy = null)
 * @method History[]    findAll()
 * @method History[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 * @author lpu8er
 */
class HistoryRepository extends ServiceEntityRepository {
    public function __construct(RegistryInterface $registry) {
        parent::__construct($registry, History::class);
    }
    
    public function instant($strKey, $value) {
        $returns = null;
        try {
            $history = new History;
            $history->setDateHistory(new \DateTime());
            $history->setStrkey($strKey);
            $history->setVal($value);
            $this->getEntityManager()->persist($history);
            $this->getEntityManager()->flush();
            $returns = $history;
        } catch(\Exception $e) {}
        return $returns;
    }
}
