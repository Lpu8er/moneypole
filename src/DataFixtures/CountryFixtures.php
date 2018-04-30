<?php
namespace App\DataFixtures;

use App\Entity\Country;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Description of CountryFixtures
 *
 * @author captivea-qch
 */
class CountryFixtures extends Fixture implements ContainerAwareInterface {
    protected $container;
    
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager) {
        $toInsert = [
            'usa' => [
                'name' => 'United States',
                'gtax' => 0.00,
                'ltax' => 0.00,
                'start' => true,
            ],
        ];
        foreach($toInsert as $ik => $ti) {
            $c = new Country;
            $c->setName($ti['name']);
            $c->setGroundTax($ti['gtax']);
            $c->setLivingTax($ti['ltax']);
            $c->setAvailableStart(!!$ti['start']);
            $manager->persist($c);
            $manager->flush();
            $this->setReference('country-'.$ik, $c);
        }
    }
}
