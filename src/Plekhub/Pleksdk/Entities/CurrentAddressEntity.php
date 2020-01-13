<?php

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of CurrentAddressEntity
 *
 * @author cleomar
 */
class CurrentAddressEntity extends AddressEntity {

    private $residenceTime;
    private $situationId;
    private $owner;

    function setResidenceTime($residenceTime) {
        $this->residenceTime = $residenceTime;
    }

    function setSituationId($situationId) {
        $this->situationId = $situationId;
    }

    function getResidenceTime() {
        return $this->residenceTime;
    }

    function getSituationId() {
        return $this->situationId;
    }

    function getOwner() {
        return $this->owner;
    }

    public function setOwner(OwnerEntity $owner = null) {
        if ($owner === null) {
            $owner = new OwnerEntity();
        }
        $this->owner = $owner;
        return $owner;
    }

    public function toArray() {
        $return = [
            "street_type_id" => $this->streetTypeId,
            "street" => $this->street,
            "number" => $this->number,
            "complement" => $this->complement,
            "neighborhood" => $this->neighborhood,
            "city" => $this->city,
            "state" => $this->state,
            "zip_code" => $this->zipCode,
            "country" => $this->country,
            "residence_time" => $this->residenceTime,
            "situation_id" => $this->situationId
        ];
        if ($this->owner) {
            $return["owner"] = $this->owner->toArray();
        }
        return $return;
    }

}
