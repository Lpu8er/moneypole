<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\NamedEntity;
use App\Entity\Currency;

/**
 * Description of WalletController
 *
 * @author lpu8er
 * @Route("/game/wallet")
 */
class WalletController extends InternalController {
    /**
     * @Route("/from/{from}/to/{to}", name="wallet_move", requirements={"from"="\d+", "to"="\d+"})
     * @Template()
     */
    public function move(Request $request, $from, $to) {
        $fromEntity = $this->getDoctrine()->getRepository(NamedEntity::class)->find($from);
        $toEntity = $this->getDoctrine()->getRepository(NamedEntity::class)->find($to);
        $currencies = $this->getDoctrine()->getRepository(Currency::class)->findAll();
        // check if from entity belongs to current user
        //if(!empty($fromEntity) && !empty($toEntity))
        // do we have a predefined currency ? If so, preselect the wallet if exists
        //if($request->request)
    }
    
    /**
     * @Route("/bfrom/{from}/to/{to}", name="wallet_move_building", requirements={"from"="\d+", "to"="\d+"})
     * @Template()
     */
    public function moveFromBuilding() {
        
    }
    
    /**
     * @Route("/from/{from}/bto/{to}", name="wallet_move_to_building", requirements={"from"="\d+", "to"="\d+"})
     * @Template()
     */
    public function moveToBuilding() {
        
    }
    
    /**
     * @Route("/bfrom/{from}/bto/{to}", name="wallet_move_b2b", requirements={"from"="\d+", "to"="\d+"})
     * @Template()
     */
    public function moveb2b() {
        
    }
    
    public function confirmMove() {
        
    }
    
    public function performMove() {
        
    }
}
