<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of LandlordEntity
 *
 * @author cleomar
 */
class LandlordEntity {

    private $name;
    private $phone;
    private $address;
    private $company;
    private $email;
    private $personTypeId;
    private $publicPerson;
    private $cpf;
    private $birthDate;
    private $professional;
    private $category;
    private $economicActivity;
    private $cnpj;

    function getCompany() {
        return $this->company;
    }

    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getPersonTypeId() {
        return $this->personTypeId;
    }

    function getPublicPerson() {
        return $this->publicPerson;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getBirthDate() {
        return $this->birthDate;
    }

    function getCategory() {
        return $this->category;
    }



    function getCnpj() {
        return $this->cnpj;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPersonTypeId($personTypeId) {
        $this->personTypeId = $personTypeId;
    }

    function setPublicPerson($publicPerson) {
        $this->publicPerson = $publicPerson;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setBirthDate($birthDate) {
        $this->birthDate = $birthDate;
    }

    function setCategory($category) {
        $this->category = $category;
    }


    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function getPhone() {
        return $this->phone;
    }

    function getAddress() {
        return $this->address;
    }

    function getProfessional() {
        return $this->professional;
    }

    public function setPhone(PhoneEntity $phone = null) {
        if ($phone === null) {
            $phone = new PhoneEntity();
        }
        $this->phone = $phone;
        return $phone;
    }

    public function setCompany(CompanyEntity $company = null) {
        if ($company === null) {
            $company = new CompanyEntity();
        }
        $this->company = $company;
        return $company;
    }

    public function setAddress(AddressEntity $address = null) {
        if ($address === null) {
            $address = new ddressEntity();
        }
        $this->address = $address;
        return $address;
    }

    public function setProfessional(ProfessionalEntity $professional = null) {
        if ($professional === null) {
            $professional = new ProfessionalEntity();
        }
        $this->professional = $professional;
        return $professional;
    }

    public function toArray() {
        $return = [
            "name" => $this->name,
            "email" => $this->email,
            "person_type_id" => $this->personTypeId,
            "public_person" => $this->publicPerson,
            "cpf" => $this->cpf,
            "birth_date" => $this->birthDate,
            "category" => $this->category,
            "economic_activity"=> $this->economicActivity,
            "cnpj"=> $this->cnpj
        ];
        if ($this->company) {
            $return['company'] = $this->company->toArray();
        }
        if ($this->address) {
            $return['address'] = $this->address->toArray();
        }
        if ($this->professional) {
            $return['professional'] = $this->professional->toArray();
        }
        if ($this->phone) {
            $return['phone'] = $this->phone->toArray();
        }
        return $return;
    }

}
