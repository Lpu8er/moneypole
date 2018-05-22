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
    
    /**
     * 
     * @param string $strKey
     * @param float $value
     * @return History
     */
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
    
    /**
     * Retrieve the maximum delta
     * @param string $filter
     * @param string $interval
     * @param bool $reverse
     * @param int $nb
     * @return array
     */
    public function retrieveMax(string $filter, string $interval = 'P1D', bool $reverse = false, int $nb = 1) {
        $dte = new \DateTime;
        $dts = clone $dte;
        $dts->sub(new \DateInterval($interval));
        $dql = <<<'DQL'
select h1.val, h2.val, (h1.val - h2.val) as delta
from App:History h1
left join App:History h2
with h2.strkey=h1.strkey
where h1.strkey like :k
and h1.dateHistory = :de
and h2.dateHistory = :ds
order by delta
DQL;
        if($reverse) { $dql.= ' desc'; }
        $q = $this->getEntityManager()->createQuery($dql)
            ->setParameter('k', $filter)
            ->setParameter('ds', $dts)
            ->setParameter('de', $dte)
            ->setMaxResults($nb);
        return $q->getArrayResult();
    }
}
