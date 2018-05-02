<?php
namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Description of UserFixtures
 *
 * @author lpu8er
 */
class UserFixtures extends Fixture implements ContainerAwareInterface {
    protected $container;
    
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }
    
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
            $encoder = $this->container->get('security.password_encoder');
            $u = new User;
            $u->setEmail($ti['email']);
            $u->setDisplayName($ti['displayName']);
            $u->setUsername($ik);
            $u->setPwd($encoder->encodePassword($u, $ti['pwd']));
            $u->setAdmin(!empty($ti['admin']));
            $u->setBot(!empty($ti['bot']));
            $manager->persist($u);
            $manager->flush();
            $this->setReference('user-'.$ik, $u);
        }
    }
}
