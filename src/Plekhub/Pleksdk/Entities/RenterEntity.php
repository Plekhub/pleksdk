<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of RenterWithIdentifierEntity
 *
 * @author cleomar
 */
class RenterEntity {

    private $cpf;
    private $name;
    private $resideProperty;
    private $maritalStatusId;
    private $birthDate;
    private $emanciped;
    private $spouse;
    private $phone;
    private $cellphone;
    private $email;
    private $company;
    private $publicPerson;
    private $currentAddress;
    private $professional;

    function getCpf() {
        return $this->cpf;
    }

    function getName() {
        return $this->name;
    }

    function getResideProperty() {
        return $this->resideProperty;
    }

    function getMaritalStatusId() {
        return $this->maritalStatusId;
    }

    function getBirthDate() {
        return $this->birthDate;
    }

    function getEmanciped() {
        return $this->emanciped;
    }

    function getCellphone() {
        return $this->cellphone;
    }

    function getEmail() {
        return $this->email;
    }

    function getPublicPerson() {
        return $this->publicPerson;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setResideProperty($resideProperty) {
        $this->resideProperty = $resideProperty;
    }

    function setMaritalStatusId($maritalStatusId) {
        $this->maritalStatusId = $maritalStatusId;
    }

    function setBirthDate($birthDate) {
        $this->birthDate = $birthDate;
    }

    function setEmanciped($emanciped) {
        $this->emanciped = $emanciped;
    }


    function setEmail($email) {
        $this->email = $email;
    }

    function setPublicPerson($publicPerson) {
        $this->publicPerson = $publicPerson;
    }

    public function setSpouse(SpouseEntity $spouse = null) {
        if ($spouse === null) {
            $spouse = new SpouseEntity();
        }
        $this->spouse = $spouse;
        return $spouse;
    }

    public function setPhone(PhoneEntity $phone = null) {
        if ($phone === null) {
            $phone = new PhoneEntity();
        }
        $this->phone = $phone;
        return $phone;
    }

    public function setCellphone(PhoneEntity $phone = null) {
        if ($phone === null) {
            $phone = new PhoneEntity();
        }
        $this->cellphone = $phone;
        return $phone;
    }

    public function setCompany(CompanyEntity $company = null) {
        if ($company === null) {
            $company = new CompanyEntity();
        }
        $this->company = $company;
        return $company;
    }

    public function setCurrentAddress(CurrentAddressEntity $currentAddress = null) {
        if ($currentAddress === null) {
            $currentAddress = new CurrentAddressEntity();
        }
        $this->currentAddress = $currentAddress;
        return $currentAddress;
    }

    public function setProfessional(ProfessionalEntity $professional = null) {
        if ($professional === null) {
            $professional = new ProfessionalEntity();
        }
        $this->professional = $professional;
        return $professional;
    }

    public function toArray() {
        $retorno = [
            "cpf" => $this->cpf,
            "name" => $this->name,
            "reside_property" => $this->resideProperty,
            "marital_status_id" => $this->maritalStatusId,
            "birth_date" => $this->birthDate,
            "emanciped" => $this->emanciped,
            "email" => $this->email,
            "public_person" => $this->publicPerson
        ];
        if ($this->phone) {
            $retorno['phone'] = $this->phone->toArray();
        }
        if ($this->cellphone) {
            $retorno['cellphone'] = $this->cellphone->toArray();
        }
        if ($this->spouse) {
            $retorno['spouse'] = $this->spouse->toArray();
        }
        if ($this->company) {
            $retorno['company'] = $this->company->toArray();
        }
        if ($this->currentAddress) {
            $retorno['current_address'] = $this->currentAddress->toArray();
        }
    }

}
