<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Person;
use App\Entity\Company;

/**
 * Description of InternalController
 *
 * @author lpu8er
 * @Route("/game", name="game_redirect")
 */
class InternalController extends AbstractController {
    /**
     * @Route("/", name="game_redirect")
     */
    public function index() {
        return $this->redirectToRoute('game_dashboard');
    }
    
    /**
     * 
     * @return Person|null
     */
    protected function getCurrentPerson() {
        $user = $this->getUser();
        return empty($user)? null:$this->getDoctrine()->getRepository(Person::class)->findOneByUser($user->getId());
    }
    
    /**
     * 
     * @return array
     */
    protected function getCurrentCompanies() {
        $person = $this->getCurrentPerson();
        return empty($person)? []:$this->getDoctrine()->getRepository(Company::class)->findByBoss($person->getId());
    }
}
