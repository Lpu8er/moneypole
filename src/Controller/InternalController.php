<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

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
}
