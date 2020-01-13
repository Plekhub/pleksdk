<?php

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of OwnerEntity
 *
 * @author cleomar
 */
class OwnerEntity {

    private $name;
    private $telephone;

    function getTelephone() {
        return $this->telephone;
    }

    public function setTelephone(PhoneEntity $phone = null) {
        if ($phone === null) {
            $phone = new PhoneEntity();
        }
        $this->telephone = $phone;
        return $phone;
    }

    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

}
