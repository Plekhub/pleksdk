<?php

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of AddressEntity
 *
 * @author cleomar
 */
class AddressEntity {

    protected $streetTypeId;
    protected $street;
    protected $number;
    protected $complement;
    protected $neighborhood;
    protected $city;
    protected $state;
    protected $zipCode;
    protected $country;

    function getStreetTypeId() {
        return $this->streetTypeId;
    }

    function getStreet() {
        return $this->street;
    }

    function getNumber() {
        return $this->number;
    }

    function getComplement() {
        return $this->complement;
    }

    function getNeighborhood() {
        return $this->neighborhood;
    }

    function getCity() {
        return $this->city;
    }

    function getState() {
        return $this->state;
    }

    function getZipCode() {
        return $this->zipCode;
    }

    function getCountry() {
        return $this->country;
    }

    function setStreetTypeId($streetTypeId) {
        $this->streetTypeId = $streetTypeId;
    }

    function setStreet($street) {
        $this->street = $street;
    }

    function setNumber($number) {
        $this->number = $number;
    }

    function setComplement($complement) {
        $this->complement = $complement;
    }

    function setNeighborhood($neighborhood) {
        $this->neighborhood = $neighborhood;
    }

    function setCity($city) {
        $this->city = $city;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setZipCode($zipCode) {
        $this->zipCode = $zipCode;
    }

    function setCountry($country) {
        $this->country = $country;
    }

    public function toArray() {
        return [
            "street_type_id" => $this->streetTypeId,
            "street" => $this->street,
            "number" => $this->number,
            "complement" => $this->complement,
            "neighborhood" => $this->neighborhood,
            "city" => $this->city,
            "state" => $this->state,
            "zip_code" => $this->zipCode,
            "country" => $this->country
        ];
    }

}
