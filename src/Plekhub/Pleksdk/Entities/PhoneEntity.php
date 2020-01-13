<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of PhoneEntity
 *
 * @author cleomar
 */
class PhoneEntity {

    private $ddd;
    private $number;

    function getDdd() {
        return $this->ddd;
    }

    function getNumber() {
        return $this->number;
    }

    function setDdd($ddd) {
        $this->ddd = $ddd;
        return $this;
    }

    function setNumber($number) {
        $this->number = $number;
        return $this;
    }
    public function toArray(){
        return [
            "ddd"=> $this->ddd,
            "number"=> $this->number
        ];
    }

}
