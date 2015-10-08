<?php

namespace Autovista\VinDeutch\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OriginatorType StructType
 * @subpackage Structs
 */
class OriginatorType extends AbstractStructBase
{
    /**
     * The Signature
     * Meta informations extracted from the WSDL
     * - documentation: ETG-wide unique user ID / user signature
     * @var string
     */
    public $Signature;
    /**
     * The LoginData
     * Meta informations extracted from the WSDL
     * - documentation: User authentication data
     * @var \Autovista\VinDeutch\StructType\LoginDataType
     */
    public $LoginData;
    /**
     * Constructor method for OriginatorType
     * @uses OriginatorType::setSignature()
     * @uses OriginatorType::setLoginData()
     * @param string $signature
     * @param \Autovista\VinDeutch\StructType\LoginDataType $loginData
     */
    public function __construct($signature = null, \Autovista\VinDeutch\StructType\LoginDataType $loginData = null)
    {
        $this
            ->setSignature($signature)
            ->setLoginData($loginData);
    }
    /**
     * Get Signature value
     * @return string|null
     */
    public function getSignature()
    {
        return $this->Signature;
    }
    /**
     * Set Signature value
     * @param string $signature
     * @return \Autovista\VinDeutch\StructType\OriginatorType
     */
    public function setSignature($signature = null)
    {
        $this->Signature = $signature;
        return $this;
    }
    /**
     * Get LoginData value
     * @return \Autovista\VinDeutch\StructType\LoginDataType|null
     */
    public function getLoginData()
    {
        return $this->LoginData;
    }
    /**
     * Set LoginData value
     * @param \Autovista\VinDeutch\StructType\LoginDataType $loginData
     * @return \Autovista\VinDeutch\StructType\OriginatorType
     */
    public function setLoginData(\Autovista\VinDeutch\StructType\LoginDataType $loginData = null)
    {
        $this->LoginData = $loginData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinDeutch\StructType\OriginatorType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
