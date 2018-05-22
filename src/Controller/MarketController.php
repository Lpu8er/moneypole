<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use App\Entity\History;

/**
 * Description of MarketController
 *
 * @author lpu8er
 * @Route("/game/market")
 */
class MarketController extends InternalController {
    /**
     * @Route("/", name="market_index")
     * @Template()
     */
    public function index() {
        
        return [
            'best' => $this->getDoctrine()->getRepository(History::class)->retrieveMax('%'),
            'worst' => $this->getDoctrine()->getRepository(History::class)->retrieveMax('%', 'P1D', true),
        ];
    }
}
