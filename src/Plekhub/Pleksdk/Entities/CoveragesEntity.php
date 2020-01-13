<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of CoveragesEntity
 *
 * @author cleomar
 */
class CoveragesEntity {

    private $innerPainting;
    private $outerPainting;
    private $propertyDamage;
    private $contractTerminationFee;

    function getInnerPainting() {
        return $this->innerPainting;
    }

    function getOuterPainting() {
        return $this->outerPainting;
    }

    function getPropertyDamage() {
        return $this->propertyDamage;
    }

    function getContractTerminationFee() {
        return $this->contractTerminationFee;
    }

    function setInnerPainting($innerPainting) {
        $this->innerPainting = $innerPainting;
    }

    function setOuterPainting($outerPainting) {
        $this->outerPainting = $outerPainting;
    }

    function setPropertyDamage($propertyDamage) {
        $this->propertyDamage = $propertyDamage;
    }

    function setContractTerminationFee($contractTerminationFee) {
        $this->contractTerminationFee = $contractTerminationFee;
    }

    function toArray() {
        return [
            "inner_painting",
            "outer_painting",
            "property_damage",
            "contract_termination_fee",
        ];
    }

}
