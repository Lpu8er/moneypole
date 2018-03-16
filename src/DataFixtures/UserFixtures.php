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
class UserFixtures extends Fixture {
    public function load(ObjectManager $manager) {
        $toInsert = [
            'root' => [
                'email' => 'lpu8er@gmail.com',
                'pwd' => 'test',
                'displayName' => 'ROOT',
                'roles' => [
                    User::ROLE_ADMIN,
                ],
            ],
            /*'gaia' => [],*/
        ];
        foreach($toInsert as $ik => $ti) {
            $ti['roles'][] = User::ROLE_BOT;
            $u = User::factory($ti);
            $manager->persist($u);
            $manager->flush();
            $this->setReference('user-'.$ik, $u);
        }
    }
}
