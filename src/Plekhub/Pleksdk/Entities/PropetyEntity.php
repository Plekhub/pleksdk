<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of PropetyWithIdentifierEntity
 *
 * @author cleomar
 */
class PropetyEntity {

    private $typeId;
    private $address;
    private $coverages;
    private $rentValue;
    private $condominumValue;
    private $iptuValue;
    private $waterValue;
    private $gasValue;
    private $electricalValue;
    private $validityDuration;
    private $readjustmentIndexId;
    private $reasonRentId;
    private $realEstateId;

    function getTypeId() {
        return $this->typeId;
    }

    function getRentValue() {
        return $this->rentValue;
    }

    function getCondominumValue() {
        return $this->condominumValue;
    }

    function getIptuValue() {
        return $this->iptuValue;
    }

    function getWaterValue() {
        return $this->waterValue;
    }

    function getGasValue() {
        return $this->gasValue;
    }

    function getElectricalValue() {
        return $this->electricalValue;
    }

    function getValidityDuration() {
        return $this->validityDuration;
    }

    function getReadjustmentIndexId() {
        return $this->readjustmentIndexId;
    }

    function getReasonRentId() {
        return $this->reasonRentId;
    }

    function getRealEstateId() {
        return $this->realEstateId;
    }

    function setTypeId($typeId) {
        $this->typeId = $typeId;
    }

    function setRentValue($rentValue) {
        $this->rentValue = $rentValue;
    }

    function setCondominumValue($condominumValue) {
        $this->condominumValue = $condominumValue;
    }

    function setIptuValue($iptuValue) {
        $this->iptuValue = $iptuValue;
    }

    function setWaterValue($waterValue) {
        $this->waterValue = $waterValue;
    }

    function setGasValue($gasValue) {
        $this->gasValue = $gasValue;
    }

    function setElectricalValue($electricalValue) {
        $this->electricalValue = $electricalValue;
    }

    function setValidityDuration($validityDuration) {
        $this->validityDuration = $validityDuration;
    }

    function setReadjustmentIndexId($readjustmentIndexId) {
        $this->readjustmentIndexId = $readjustmentIndexId;
    }

    function setReasonRentId($reasonRentId) {
        $this->reasonRentId = $reasonRentId;
    }

    function setRealEstateId($realEstateId) {
        $this->realEstateId = $realEstateId;
    }

    function getAddress() {
        return $this->address;
    }

    function getCoverages() {
        return $this->coverages;
    }

    public function setCoverages(CoveragesEntity $coverages = null) {
        if ($coverages === null) {
            $coverages = new CoveragesEntity();
        }
        $this->coverages = $coverages;
        return $coverages;
    }

    public function setAddress(AddressEntity $address = null) {
        if ($address === null) {
            $address = new AddressEntity();
        }
        $this->address = $address;
        return $address;
    }

    function toArray() {
        $return = [
            "type_id" => $this->typeId,
            "rent_value" => $this->rentValue,
            "condominum_value" => $this->condominumValue,
            "iptu_value" => $this->iptuValue,
            "water_value" => $this->waterValue,
            "gas_value" => $this->gasValue,
            "electrical_value" => $this->electricalValue,
            "validity_duration" => $this->validityDuration,
            "readjustment_index_id" => $this->readjustmentIndexId,
            "reason_rent_id" => $this->reasonRentId,
            "real_estate_id" => $this->realEstateId,
        ];
        if ($this->address) {
            $return["address"] = $this->address->toArray();
        }
        if ($this->coverages) {
            $return["coverages"] = $this->coverages->toArray();
        }
        return $return;
    }

}
