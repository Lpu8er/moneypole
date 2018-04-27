<?php
namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of UserFixtures
 *
 * @author captivea-qch
 */
class UserFixtures extends Fixture implements ContainerAwareInterface {
    protected $container;
    
    public function load(ObjectManager $manager) {
        $toInsert = [
            'root' => [
                'email' => 'lpu8er@gmail.com',
                'pwd' => 'test',
                'displayName' => 'ROOT',
                'admin' => true,
                'bot' => false,
            ],
            /*'gaia' => [],*/
        ];
        foreach($toInsert as $ik => $ti) {
            $u = User::factory($ti);
            $u->setUsername($ik);
            $manager->persist($u);
            $manager->flush();
            $this->setReference('user-'.$ik, $u);
        }
    }
}