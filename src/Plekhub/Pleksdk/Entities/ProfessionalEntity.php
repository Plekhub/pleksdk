<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of ProfessionalEntity
 *
 * @author cleomar
 */
class ProfessionalEntity {

    private $monthlyIncome;
    private $otherIncome;
    private $code;
    private $admissionDate;
    private $employmentBondId;
    private $company;

    function getMonthlyIncome() {
        return $this->monthlyIncome;
    }

    function getOtherIncome() {
        return $this->otherIncome;
    }

    function getCode() {
        return $this->code;
    }

    function getAdmissionDate() {
        return $this->admissionDate;
    }

    function getEmploymentBondId() {
        return $this->employmentBondId;
    }

    function setMonthlyIncome($monthlyIncome) {
        $this->monthlyIncome = $monthlyIncome;
    }

    function setOtherIncome($otherIncome) {
        $this->otherIncome = $otherIncome;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setAdmissionDate($admissionDate) {
        $this->admissionDate = $admissionDate;
    }

    function setEmploymentBondId($employmentBondId) {
        $this->employmentBondId = $employmentBondId;
    }

    function getCompany() {
        return $this->company;
    }

    public function setCompany(CompanyEntity $company = null) {
        if ($company === null) {
            $company = new CompanyEntity();
        }
        $this->company = $company;
        return $company;
    }

    public function toArray() {
        $return = [
            "monthly_income" => $this->monthlyIncome,
            "other_income" => $this->otherIncome,
            "code" => $this->code,
            "admission_date" => $this->admissionDate,
            "employment_bond_id" => $this->employmentBondId
        ];
        if ($this->company) {
            $return["company"] = $this->company->toArray();
        }
        return $return;
    }

}
