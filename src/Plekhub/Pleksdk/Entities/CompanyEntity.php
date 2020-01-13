<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of CompanyEntity
 *
 * @author cleomar
 */
class CompanyEntity {

    private $name;
    private $contactName;
    private $phone;

    function getName() {
        return $this->name;
    }

    function getContactName() {
        return $this->contactName;
    }

    function getPhone() {
        return $this->phone;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setContactName($contactName) {
        $this->contactName = $contactName;
    }

    function setPhone(PhoneEntity $phone = null) {
        if ($phone === null) {
            $phone = new PhoneEntity();
        }
        $this->phone = $phone;
        return $phone;
    }

}
