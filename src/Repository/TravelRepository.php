<?php

namespace App\Repository;

use App\Entity\Travel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use App\Entity\Building;
use App\Entity\Company;

/**
 * @method Travel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Travel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Travel[]    findAll()
 * @method Travel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TravelRepository extends ServiceEntityRepository {

    public function __construct(RegistryInterface $registry) {
        parent::__construct($registry, Travel::class);
    }

    public function generate(Building $source, Building $target, Company $owner = null, $reallyCreate = false) {
        // search cities
        $sourceCity = $source->getCity();
        $targetCity = $target->getCity();
        // compute distances
        $distance = $this->distance($sourceCity->getLat(), $sourceCity->getLng(), $targetCity->getLat(), $targetCity->getLng());
        // compute cost
        $cost = $distance; // @TODO
        
    }
    
    /**
     * 
     * @param float $lat_a
     * @param float $lng_a
     * @param float $lat_b
     * @param float $lng_b
     * @return float
     */
    protected function distance(float $lat_a, float $lng_a, float $lat_b, float $lng_b): float {
        $earthRadius = 3958.75;
        $latDiff = deg2rad($lat_b - $lat_a);
        $lngDiff = deg2rad($lng_b - $lng_a);
        $a = sin($latDiff / 2) * sin($latDiff / 2) +
            cos(deg2rad($lat_a)) * cos(deg2rad($lat_b)) *
            sin($lngDiff / 2) * sin($lngDiff / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $distance = $earthRadius * $c;

        $meterConversion = 1609;

        return ($distance * $meterConversion);
    }

}
