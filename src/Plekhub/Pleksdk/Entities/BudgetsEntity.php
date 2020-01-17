<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of BudgetsEntity
 *
 * @author cleomar
 */
class BudgetsEntity {

    private $insuranceCompany;
    private $id;
    private $coverage;
    private $prize;
    private $installmentPlans;
    private $erros;
    
    function getInsuranceCompany() {
        return $this->insuranceCompany;
    }

    function getId() {
        return $this->id;
    }
    /**
     * 
     * @return CoverageEntity
     */
    function getCoverage() {
        return $this->coverage;
    }
    /**
     * 
     * @return PrizeEntity
     */
    function getPrize() {
        return $this->prize;
    }
    /**
     * 
     * @return InstallmentPlansEntity[]
     */
    function getInstallmentPlans() {
        return $this->installmentPlans;
    }

    function setInsuranceCompany($insuranceCompany) {
        $this->insuranceCompany = $insuranceCompany;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCoverage(CoverageEntity $coverage) {
        $this->coverage = $coverage;
    }

    function setPrize(PrizeEntity $prize) {
        $this->prize = $prize;
    }

    function setInstallmentPlans(array $installmentPlans) {
        $this->installmentPlans = $installmentPlans;
    }
    function getErros() {
        return $this->erros;
    }

    function setErros($erros) {
        $this->erros = $erros;
    }




}
