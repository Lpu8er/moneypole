<?php
namespace App\DataFixtures;

use App\Entity\Natural;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Description of NaturalFixtures
 *
 * @author lpu8er
 */
class NaturalFixtures extends Fixture implements ContainerAwareInterface {
    protected $container;
    
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager) {
        $toInsert = [
            'wooden_log' => [
                'name' => 'Wooden log',
                'size' => 1.00,
                'happiness' => 0,
                'pollution' => 0,
                'firerisk' => 0,
                'hazardness' => 0,
                'universalStartValue' => 0,
            ],
            'copper' => [
                'name' => 'Copper',
                'size' => 1.00,
                'happiness' => 0,
                'pollution' => 0,
                'firerisk' => 0,
                'hazardness' => 0,
                'universalStartValue' => 0,
            ],
            'iron' => [
                'name' => 'Iron',
                'size' => 1.00,
                'happiness' => 0,
                'pollution' => 0,
                'firerisk' => 0,
                'hazardness' => 0,
                'universalStartValue' => 0,
            ],
            'gold' => [
                'name' => 'Gold',
                'size' => 1.00,
                'happiness' => 0,
                'pollution' => 0,
                'firerisk' => 0,
                'hazardness' => 0,
                'universalStartValue' => 0,
            ],
            'Oil' => [
                'name' => 'Oil',
                'size' => 1.00,
                'happiness' => 0,
                'pollution' => 0,
                'firerisk' => 0,
                'hazardness' => 0,
                'universalStartValue' => 0,
            ],
            'fruit' => [
                'name' => 'Fruit',
                'size' => 1.00,
                'happiness' => 0,
                'pollution' => 0,
                'firerisk' => 0,
                'hazardness' => 0,
                'universalStartValue' => 0,
            ],
            'vegetable' => [
                'name' => 'Vegetable',
                'size' => 1.00,
                'happiness' => 0,
                'pollution' => 0,
                'firerisk' => 0,
                'hazardness' => 0,
                'universalStartValue' => 0,
            ],
            'cereal' => [
                'name' => 'Cereal',
                'size' => 1.00,
                'happiness' => 0,
                'pollution' => 0,
                'firerisk' => 0,
                'hazardness' => 0,
                'universalStartValue' => 0,
            ],
            'raw_meat' => [
                'name' => 'Raw Meat',
                'size' => 1.00,
                'happiness' => 0,
                'pollution' => 0,
                'firerisk' => 0,
                'hazardness' => 0,
                'universalStartValue' => 0,
            ],
            'raw_fish' => [
                'name' => 'Raw Fish',
                'size' => 1.00,
                'happiness' => 0,
                'pollution' => 0,
                'firerisk' => 0,
                'hazardness' => 0,
                'universalStartValue' => 0,
            ],
            'water' => [
                'name' => 'Water',
                'size' => 1.00,
                'happiness' => 0,
                'pollution' => 0,
                'firerisk' => 0,
                'hazardness' => 0,
                'universalStartValue' => 0,
            ],
            'aluminium' => [
                'name' => 'Aluminium',
                'size' => 1.00,
                'happiness' => 0,
                'pollution' => 0,
                'firerisk' => 0,
                'hazardness' => 0,
                'universalStartValue' => 0,
            ],
            'coffee_bean' => [
                'name' => 'Coffee bean',
                'size' => 1.00,
                'happiness' => 0,
                'pollution' => 0,
                'firerisk' => 0,
                'hazardness' => 0,
                'universalStartValue' => 0,
            ],
            'titanium' => [
                'name' => 'Titanium',
                'size' => 1.00,
                'happiness' => 0,
                'pollution' => 0,
                'firerisk' => 0,
                'hazardness' => 0,
                'universalStartValue' => 0,
            ],
            'mud' => [
                'name' => 'Mud',
                'size' => 1.00,
                'happiness' => 0,
                'pollution' => 0,
                'firerisk' => 0,
                'hazardness' => 0,
                'universalStartValue' => 0,
            ],
            'coal' => [
                'name' => 'Coal',
                'size' => 1.00,
                'happiness' => 0,
                'pollution' => 0,
                'firerisk' => 0,
                'hazardness' => 0,
                'universalStartValue' => 0,
            ],
            'uranium' => [
                'name' => 'Uranium',
                'size' => 1.00,
                'happiness' => 0,
                'pollution' => 0,
                'firerisk' => 0,
                'hazardness' => 0,
                'universalStartValue' => 0,
            ],
            'lead' => [
                'name' => 'Lead',
                'size' => 1.00,
                'happiness' => 0,
                'pollution' => 0,
                'firerisk' => 0,
                'hazardness' => 0,
                'universalStartValue' => 0,
            ],
        ];
        foreach($toInsert as $nk => $ti) {
            $n = new Natural;
            $n->setTechnical($nk);
            $n->setName($ti['name']);
            $n->setSize($ti['size']);
            $n->setHappiness($ti['happiness']);
            $n->setPollution($ti['pollution']);
            $n->setFirerisk($ti['firerisk']);
            $n->setHazardness($ti['hazardness']);
            $n->setUniversalStartValue($ti['universalStartValue']);
            $manager->persist($n);
            $manager->flush();
            $this->setReference('natural-'.$nk, $n);
        }
    }
}
