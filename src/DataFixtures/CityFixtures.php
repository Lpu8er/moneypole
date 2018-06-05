<?php
namespace App\DataFixtures;

use App\Entity\City;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

/**
 * Description of CityFixtures
 *
 * @author lpu8er
 */
class CityFixtures extends Fixture implements ContainerAwareInterface, DependentFixtureInterface {
    protected $container;
    
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    public function getDependencies() {
        return [
            CountryFixtures::class,
        ];
    }
    
    /**
     * 
     * @return array
     */
    protected static function getSizes() {
        return [
            'xsmall' => 10,
            'small' => 25,
            'medium' => 100,
            'large' => 2000,
            'xlarge' => 50000,
            'capital' => 2500000,
        ];
    }
    
    public function load(ObjectManager $manager) {
        $toInsert = [
            'washington' => [
                'name' => 'Washington',
                'country' => 'usa',
                'z' => 'capital',
                'gtax' => 0.,
                'btax' => 0.,
                'ltax' => 0.,
                'energy' => 0.,
                'available' => true,
                'lat' => 47.751076,
                'lng' => -120.740135,
            ],
            'paris' => [
                'name' => 'Paris',
                'country' => 'france',
                'z' => 'capital',
                'gtax' => 0.,
                'btax' => 0.,
                'ltax' => 0.,
                'energy' => 0.,
                'lat' => 48.864716,
                'lng' => 2.294694,
            ],
            'tokyo' => [
                'name' => 'Tokyo',
                'country' => 'japan',
                'z' => 'capital',
                'gtax' => 0.,
                'btax' => 0.,
                'ltax' => 0.,
                'energy' => 0.,
                'available' => true,
                'lat' => 35.652832,
                'lng' => 139.753372,
            ],
            'grenoble' => [
                'name' => 'Grenoble',
                'country' => 'france',
                'z' => 'xlarge',
                'gtax' => 0.,
                'btax' => 0.,
                'ltax' => 0.,
                'energy' => 0.,
                'available' => true,
                'lat' => 45.16667,
                'lng' => 5.71667,
            ],
        ];
        foreach($toInsert as $ik => $ti) {
            $z = static::getSizes()[$ti['z']];
            $c = new City;
            $c->setName($ti['name']);
            $c->setCountry($this->getReference('country-'.$ti['country']));
            $c->setSize($z);
            $c->setPopulation($z ** 2);
            $c->setGroundTax($ti['gtax']);
            $c->setBuildTax($ti['btax']);
            $c->setLivingTax($ti['ltax']);
            $c->setEnergyCost($ti['energy']);
            $c->setAvailableFound(!empty($ti['available']));
            $manager->persist($c);
            $manager->flush();
            $this->setReference('city-'.$ik, $c);
            if('capital' === $ti['z']) {
                $capitalOf = $this->getReference('country-'.$ti['country']);
                $capitalOf->setCapital($c);
                $manager->persist($capitalOf);
                $manager->flush();
            }
        }
    }
}
