<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Methods;

/**
 * Description of GetBudgetMethod
 *
 * @author cleomar
 */
class GetBudgetMethod extends AMethod
{

    protected $endpoint = "insurance-guarantee/find";
    private $budgetId;
    private $insuranceCompany;

    function setBudgetId($budgetId)
    {
        $this->budgetId = $budgetId;
        return $this;
    }

    function setInsuranceCompany($insuranceCompany)
    {
        $this->insuranceCompany = $insuranceCompany;
        return $this;
    }

    public function execute()
    {
        $this->requisition->setEndpoint($this->endpoint);
        $this->requisition->setQuery(['insurance_budget_id' => $this->budgetId, 'insurance_company' => $this->insuranceCompany]);
        $response = $this->requisition->request();
        $objectResponse = json_decode($response);
        if ($objectResponse && $objectResponse->status == 'success' && $objectResponse->data) {
            $budgetData = $objectResponse->data;
            $bugdet = new \Plekhub\Pleksdk\Entities\BudgetsEntity();
            $bugdet->setInsuranceCompany($budgetData->insuranceCompany);

            if (isset($budgetData->errors)) {
                $bugdet->setErros($budgetData->errors);
                return $bugdet;
            }
            $bugdet->setId($budgetData->id);

            $coverage = new \Plekhub\Pleksdk\Entities\CoverageEntity();
            $coverage->setRent($budgetData->coverage->rent);
            $coverage->setCondominium($budgetData->coverage->condominium);
            $coverage->setEletric($budgetData->coverage->eletric);
            $coverage->setIptu($budgetData->coverage->iptu);
            $coverage->setWater($budgetData->coverage->water);
            $coverage->setGas($budgetData->coverage->gas);

            $bugdet->setCoverage($coverage);

            $prize = new \Plekhub\Pleksdk\Entities\PrizeEntity();
            $prize->setEmergencyValue($budgetData->prize->emergencyValue);
            $prize->setNetValue($budgetData->prize->netValue);
            $prize->setPolicyCost($budgetData->prize->policyCost);
            $prize->setIofValue($budgetData->prize->iofValue);
            $prize->setTotal($budgetData->prize->total);

            $bugdet->setPrize($prize);

            $installmentPlans = [];
            if (isset($budgetData->installmentPlans) && $budgetData->installmentPlans) {
                foreach ($budgetData->installmentPlans as $installmentPlan) {
                    $installmentPlanEntity = new \Plekhub\Pleksdk\Entities\InstallmentPlansEntity();
                    $installmentPlanEntity->setChargeValue($installmentPlan->chargeValue);
                    $installmentPlanEntity->setId($installmentPlan->id);
                    $installmentPlanEntity->setDescription($installmentPlan->description);
                    $installmentPlanEntity->setFirstInstallmentValue($installmentPlan->firstInstallmentValue);
                    $installmentPlanEntity->setInstallmentQuantity($installmentPlan->installmentQuantity);
                    $installmentPlanEntity->setInterestTax($installmentPlan->interestTax);
                    $installmentPlanEntity->setInterestValue($installmentPlan->interestValue);
                    $installmentPlanEntity->setIofValue($installmentPlan->iofValue);
                    $installmentPlanEntity->setPaymentType($installmentPlan->paymentType);
                    $installmentPlanEntity->setPolicyValue($installmentPlan->policyValue);
                    $installmentPlanEntity->setRemainingInstallmentsValue($installmentPlan->remainingInstallmentsValue);
                    $installmentPlanEntity->setTotalValue($installmentPlan->totalValue);
                    $installmentPlans[] = $installmentPlanEntity;
                }
            }
            $bugdet->setInstallmentPlans($installmentPlans);
            return $bugdet;
        }
    }

}
