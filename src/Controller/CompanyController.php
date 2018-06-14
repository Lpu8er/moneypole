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
     * @Route("/save", name="company_save_create")
     * @Template()
     */
    public function saveCreate(Request $request) {
        $redirectRoute = 'company_create';
        $companies = $this->getCurrentCompanies();
        if(empty($companies)) {
            $companyName = $request->request->get('name');
            $companyCityId = $request->request->get('city');
            try {
                $companyCity = $this->getDoctrine()->getRepository(City::class)->find($companyCityId);
            } catch(\Exception $e){}
            if(!empty($companyCity) && $companyCity->getAvailableFound()) {
                $company = new Company();
                $company->setHqCity($companyCity);
                $company->setHqCountry($companyCity->getCountry());
                $company->setBoss($this->getCurrentPerson());
                $company->setName($companyName);
                $this->getDoctrine()->getManager()->persist($company);
                $this->getDoctrine()->getManager()->flush();
                $this->success('Société bien créée !', false);
                $redirectRoute = 'dashboard_index';
            } else {
                $this->error('Impossible de créer cette société basée à cet emplacement !', false);
            }
        } else {
            $this->error('Vous possédez déjà une société.', false);
        }
        return $this->redirectToRoute($redirectRoute);
    }
    
    /**
     * @Route("/{company}", name="company_detail", requirements={"company"="\d+"})
     * @Template()
     */
    public function detail($company) {
        try {
            $companyDetails = $this->getDoctrine()->getRepository(Company::class)->find($company);
            if(!empty($companyDetails)) {
                $returns = [
                    'company' => $companyDetails,
                ];
            } else {
                $returns = $this->redirectToRoute('error_404');
            }
        } catch (Exception $ex) {
            $returns = $this->redirectToRoute('error_404');
        }
        return $returns;
    }
    
}
