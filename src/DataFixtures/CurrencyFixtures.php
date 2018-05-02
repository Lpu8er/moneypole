<?php
namespace App\DataFixtures;

use App\Entity\Currency;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Description of CurrencyFixtures
 *
 * @author lpu8er
 */
class CurrencyFixtures extends Fixture implements ContainerAwareInterface {
    protected $container;
    
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager) {
        $toInsert = [
            'usd' => [
                'name' => 'US Dollar',
                'rate' => 1.00,
                'symbol' => '$',
            ],
            'eur' => [
                'name' => 'Euro',
                'rate' => 0.65,
                'symbol' => '€',
            ],
            'yen' => [
                'name' => 'JP Yen',
                'rate' => 18.00,
                'symbol' => '¥',
            ],
        ];
        foreach($toInsert as $ik => $ti) {
            $c = new Currency;
            $c->setName($ti['name']);
            $c->setConvertRate($ti['rate']);
            $c->setSymbol($ti['symbol']);
            $manager->persist($c);
            $manager->flush();
            $this->setReference('currency-'.$ik, $c);
        }
    }
}
