<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of SpouseEntity
 *
 * @author cleomar
 */
class SpouseEntity {

    private $cpf;
    private $name;
    private $birthDate;
    private $resideProperty;
    private $monthlyIncome;
    private $composeIncome;

    function getCpf() {
        return $this->cpf;
    }

    function getName() {
        return $this->name;
    }

    function getBirthDate() {
        return $this->birthDate;
    }

    function getResideProperty() {
        return $this->resideProperty;
    }

    function getMonthlyIncome() {
        return $this->monthlyIncome;
    }

    function getComposeIncome() {
        return $this->composeIncome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setBirthDate($birthDate) {
        $this->birthDate = $birthDate;
    }

    function setResideProperty($resideProperty) {
        $this->resideProperty = $resideProperty;
    }

    function setMonthlyIncome($monthlyIncome) {
        $this->monthlyIncome = $monthlyIncome;
    }

    function setComposeIncome($composeIncome) {
        $this->composeIncome = $composeIncome;
    }

    public function toArray() {

        return [
            "cpf" => $this->cpf,
            "name" => $this->name,
            "birth_date" => $this->birthDate,
            "reside_property" => $this->resideProperty,
            "monthly_income" => $this->monthlyIncome,
            "compose_income" => $this->composeIncome
        ];
    }

}
