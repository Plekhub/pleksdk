<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Methods;

/**
 * Description of PostContractMethod
 *
 * @author cleomar
 */
class PostContractMethod extends AMethod {

    protected $endpoint = "insurance-guarantee/contract";
    private $budget;
    private $insuranceCompany;
    private $choosenPlan;
    private $landLord;

    public function setBudget($budget) {
        $this->budget = $budget;
        return $this;
    }

    public function setInsuranceCompany($insuranceCompany) {
        $this->insuranceCompany = $insuranceCompany;
        return $this;
    }

    public function setChoosenPlan($choosenPlan) {
        $this->choosenPlan = $choosenPlan;
        return $this;
    }

    public function landLord(\Plekhub\Pleksdk\Entities\LandlordEntity $landLord = null){
        if($landLord === null){
            $landLord = new \Plekhub\Pleksdk\Entities\LandlordEntity();
        }
        $this->landLord = $landLord;
        return $landLord;
    }
    private function createBody() {
        $bodyArray = [];

        $bodyArray["Landlord"] = $this->landLord->toArray();

        return json_encode($bodyArray);
    }

    public function execute() {
        $this->requisition->setEndpoint($this->endpoint);
        $this->requisition->setBody($this->createBody());
        $this->requisition->setQuery(["budget"=> $this->budget,"insurance_company"=> $this->insuranceCompany,"choosen_plan"=> $this->choosenPlan]);
        $response = $this->requisition->request();
        $response = str_replace("-", "_", $response);
        $objectResponse = json_decode($response);
        if($objectResponse && $objectResponse->status =="success"){
            return true;
        }
        throw new \Plekhub\Pleksdk\Exceptions\ValidationException($objectResponse->message);
        
    }

}
