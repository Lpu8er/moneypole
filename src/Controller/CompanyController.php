<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Request;

use App\Entity\City;
use App\Entity\Company;

/**
 * Description of CompanyController
 *
 * @author lpu8er
 * @Route("/game/company")
 */
class CompanyController extends InternalController {
    /**
     * @Route("/create", name="company_create")
     * @Template()
     */
    public function create() {
        return [
            'cities' => $this->getDoctrine()->getRepository(City::class)->findByAvailableFound(true),
        ];
    }
    
    /**
     * @Route("/create", name="company_save_create")
     * @Template()
     */
    public function saveCreate(Request $request) {
        $companies = $this->getCurrentCompanies();
        if(empty($companies)) {
            $companyName = $request->request->get('name');
            $companyCityId = $request->request->get('city');
            $companyCity = $this->getDoctrine()->getRepository(City::class)->find($companyCityId);
            if(!empty($companyCity) && $companyCity->getAvailableFound()) {
                $company = new Company();
                $company->setHqCity($companyCity);
                $company->setHqCountry($companyCity->getCountry());
                $company->setBoss($this->getCurrentPerson());
                $company->setName($companyName);
                $this->getDoctrine()->getManager()->persist($company);
                $this->getDoctrine()->getManager()->flush();
            }
        }
    }
}
