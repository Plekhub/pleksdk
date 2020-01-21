<?php

namespace Plekhub\Pleksdk;

/**
 * Description of Plekhub
 *
 * @author cleomar
 */
class Plekhub {
    private static $env = "PRODUCTION";
    
    public static function setProductionEnv(){
        self::$env = "PRODUCTION";
    }
    
    public static function setHomologationEnv(){
        self::$env = "HOMOLOGATION";
    }
    
    public static function getRequisition(){
        if(self::$env == "PRODUCTION"){
            return Requisition\Factory::getCurl(Config::URL_PRODUCTION);
        }
        return Requisition\Factory::getCurl(Config::URL_HOMOLOGATION);
    }
    
    public static function getEmploymentBondMethod(Authentication\IAuthentication $authentication){
        return new Methods\GetEmploymentBondMethod(self::getRequisition(), $authentication);
    }
    
    public static function getMaritalStatusMethod(Authentication\IAuthentication $authentication){
        return new Methods\GetMaritalStatusMethod(self::getRequisition(), $authentication);
    }
    public static function getPersonTypeMethod(Authentication\IAuthentication $authentication){
        return new Methods\GetPersonTypeMethod(self::getRequisition(), $authentication);
    }
    public static function getPropertyTypeMethod(Authentication\IAuthentication $authentication){
        return new Methods\GetPropertyTypeMethod(self::getRequisition(), $authentication);
    }
    public static function getReadjustmentIndexMethod(Authentication\IAuthentication $authentication){
        return new Methods\GetReadjustmentIndexMethod(self::getRequisition(), $authentication);
    }
    public static function getInsuranceCompanyMethod(Authentication\IAuthentication $authentication){
        return new Methods\GetInsuranceCompanyMethod(self::getRequisition(), $authentication);
    }
    public static function getRealEstateMethod(Authentication\IAuthentication $authentication){
        return new Methods\GetRealEstateMethod(self::getRequisition(), $authentication);
    }
    public static function getReasonRentMethod(Authentication\IAuthentication $authentication){
        return new Methods\GetReasonRentMethod(self::getRequisition(), $authentication);
    }
    public static function getStreetTypeMethod(Authentication\IAuthentication $authentication){
        return new Methods\GetStreetTypeMethod(self::getRequisition(), $authentication);
    }
    public static function postContractMethod(Authentication\IAuthentication $authentication){
        return new Methods\PostContractMethod(self::getRequisition(), $authentication);
    }
    public static function postInsuranceGuaranteeWithIdentifierMethod(Authentication\IAuthentication $authentication){
        return new Methods\PostInsuranceGuaranteeWithIdentifierMethod(self::getRequisition(), $authentication);
    }
    public static function postInsuranceGuaranteeWithoutIdentifierMethod(Authentication\IAuthentication $authentication){
        return new Methods\PostInsuranceGuaranteeWithoutIdentifierMethod(self::getRequisition(), $authentication);
    }
}
