<?php
namespace App\DataFixtures;

use App\Entity\Country;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

/**
 * Description of CountryFixtures
 *
 * @author captivea-qch
 */
class CountryFixtures extends Fixture implements ContainerAwareInterface, DependentFixtureInterface {
    protected $container;
    
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    public function getDependencies() {
        return [
            CurrencyFixtures::class,
        ];
    }
    
    public function load(ObjectManager $manager) {
        $toInsert = [
            'usa' => [
                'name' => 'United States',
                'gtax' => 0.00,
                'ltax' => 0.00,
                'start' => true,
                'currency' => 'usd',
            ],
            'france' => [
                'name' => 'France',
                'gtax' => 0.00,
                'ltax' => 0.00,
                'start' => true,
                'currency' => 'eur',
            ],
            'japan' => [
                'name' => 'Japan',
                'gtax' => 0.00,
                'ltax' => 0.00,
                'start' => true,
                'currency' => 'yen',
            ],
        ];
        foreach($toInsert as $ik => $ti) {
            $c = new Country;
            $c->setName($ti['name']);
            $c->setGroundTax($ti['gtax']);
            $c->setLivingTax($ti['ltax']);
            $c->setAvailableStart(!!$ti['start']);
            $c->setCurrency($this->getReference('currency-'.$ti['currency']));
            $manager->persist($c);
            $manager->flush();
            $this->setReference('country-'.$ik, $c);
        }
    }
}
