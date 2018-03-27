<?php
namespace App\Controller;

/**
 * Description of DashboardController
 *
 * @author captivea-qch
 */
class DashboardController extends InternalController {
    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function index() {
        $this->addMessage('Hello World', static::MSGLVL_ERROR, false);
        return [];
    }
}
