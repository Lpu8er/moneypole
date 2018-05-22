<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Description of DashboardController
 *
 * @author lpu8er
 * @Route("/game/dash")
 */
class DashboardController extends InternalController {
    /**
     * @Route("/", name="dashboard_index")
     * @Template()
     */
    public function index() {
        $companies = $this->getCurrentCompanies();
        // actually, only one company
        $company = empty($companies)? null:($companies[0]);
        $wallets = $this->getPersonalWallets();
        return [
            'company' => $company,
            'wallets' => $wallets,
            'mainWallet' => empty($company)? null:$this->getDoctrine()->getRepository(\App\Entity\Company::class)->getMainWallet($company),
        ];
    }
}
