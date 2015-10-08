<?php

namespace Autovista\VinDeutch\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EquipmentType StructType
 * @subpackage Structs
 */
class EquipmentType extends AbstractStructBase
{
    /**
     * The SoaCode
     * Meta informations extracted from the WSDL
     * - documentation: Soa Code (SA Code, ETG EQ Code) of this equipment
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SoaCode;
    /**
     * The ManufCode
     * Meta informations extracted from the WSDL
     * - documentation: Manufacturer internal code (ordercode)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ManufCode;
    /**
     * The PriceNetto
     * Meta informations extracted from the WSDL
     * - documentation: Price of option in production time
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var decimal
     */
    public $PriceNetto;
    /**
     * The PriceBrutto
     * Meta informations extracted from the WSDL
     * - documentation: Price of option in production time
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var decimal
     */
    public $PriceBrutto;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: description of equipment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Begin
     * Meta informations extracted from the WSDL
     * - documentation: Period of build
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Begin;
    /**
     * The End
     * Meta informations extracted from the WSDL
     * - documentation: Period of build
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $End;
    /**
     * The PackageFlag
     * Meta informations extracted from the WSDL
     * - documentation: 1 - this equipment is a package of other equipments0 - stand-alone equipment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PackageFlag;
    /**
     * The Esaco
     * Meta informations extracted from the WSDL
     * - documentation: Esaco codes of this equipment
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\VinDeutch\StructType\EsacoType
     */
    public $Esaco;
    /**
     * The Merchantability
     * Meta informations extracted from the WSDL
     * - documentation: merchantability
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var short
     */
    public $Merchantability;
    /**
     * The DeliveryFlag
     * Meta informations extracted from the WSDL
     * - documentation: 0 - Standart / serial equipment; 1 - Standart option / free; 2 - Option at extra charge; 3 - Option price not given; 4 - Option not available yet; 5 - Mandatory at extra charge;
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var short
     */
    public $DeliveryFlag;
    /**
     * Constructor method for EquipmentType
     * @uses EquipmentType::setSoaCode()
     * @uses EquipmentType::setManufCode()
     * @uses EquipmentType::setPriceNetto()
     * @uses EquipmentType::setPriceBrutto()
     * @uses EquipmentType::setDescription()
     * @uses EquipmentType::setBegin()
     * @uses EquipmentType::setEnd()
     * @uses EquipmentType::setPackageFlag()
     * @uses EquipmentType::setEsaco()
     * @uses EquipmentType::setMerchantability()
     * @uses EquipmentType::setDeliveryFlag()
     * @param int $soaCode
     * @param string $manufCode
     * @param decimal $priceNetto
     * @param decimal $priceBrutto
     * @param string $description
     * @param string $begin
     * @param string $end
     * @param string $packageFlag
     * @param \Autovista\VinDeutch\StructType\EsacoType $esaco
     * @param short $merchantability
     * @param short $deliveryFlag
     */
    public function __construct($soaCode = null, $manufCode = null, $priceNetto = null, $priceBrutto = null, $description = null, $begin = null, $end = null, $packageFlag = null, \Autovista\VinDeutch\StructType\EsacoType $esaco = null, $merchantability = null, $deliveryFlag = null)
    {
        $this
            ->setSoaCode($soaCode)
            ->setManufCode($manufCode)
            ->setPriceNetto($priceNetto)
            ->setPriceBrutto($priceBrutto)
            ->setDescription($description)
            ->setBegin($begin)
            ->setEnd($end)
            ->setPackageFlag($packageFlag)
            ->setEsaco($esaco)
            ->setMerchantability($merchantability)
            ->setDeliveryFlag($deliveryFlag);
    }
    /**
     * Get SoaCode value
     * @return int
     */
    public function getSoaCode()
    {
        return $this->SoaCode;
    }
    /**
     * Set SoaCode value
     * @param int $soaCode
     * @return \Autovista\VinDeutch\StructType\EquipmentType
     */
    public function setSoaCode($soaCode = null)
    {
        $this->SoaCode = $soaCode;
        return $this;
    }
    /**
     * Get ManufCode value
     * @return string|null
     */
    public function getManufCode()
    {
        return $this->ManufCode;
    }
    /**
     * Set ManufCode value
     * @param string $manufCode
     * @return \Autovista\VinDeutch\StructType\EquipmentType
     */
    public function setManufCode($manufCode = null)
    {
        $this->ManufCode = $manufCode;
        return $this;
    }
    /**
     * Get PriceNetto value
     * @return decimal|null
     */
    public function getPriceNetto()
    {
        return $this->PriceNetto;
    }
    /**
     * Set PriceNetto value
     * @param decimal $priceNetto
     * @return \Autovista\VinDeutch\StructType\EquipmentType
     */
    public function setPriceNetto($priceNetto = null)
    {
        $this->PriceNetto = $priceNetto;
        return $this;
    }
    /**
     * Get PriceBrutto value
     * @return decimal|null
     */
    public function getPriceBrutto()
    {
        return $this->PriceBrutto;
    }
    /**
     * Set PriceBrutto value
     * @param decimal $priceBrutto
     * @return \Autovista\VinDeutch\StructType\EquipmentType
     */
    public function setPriceBrutto($priceBrutto = null)
    {
        $this->PriceBrutto = $priceBrutto;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Autovista\VinDeutch\StructType\EquipmentType
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Begin value
     * @return string|null
     */
    public function getBegin()
    {
        return $this->Begin;
    }
    /**
     * Set Begin value
     * @param string $begin
     * @return \Autovista\VinDeutch\StructType\EquipmentType
     */
    public function setBegin($begin = null)
    {
        $this->Begin = $begin;
        return $this;
    }
    /**
     * Get End value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param string $end
     * @return \Autovista\VinDeutch\StructType\EquipmentType
     */
    public function setEnd($end = null)
    {
        $this->End = $end;
        return $this;
    }
    /**
     * Get PackageFlag value
     * @return string|null
     */
    public function getPackageFlag()
    {
        return $this->PackageFlag;
    }
    /**
     * Set PackageFlag value
     * @param string $packageFlag
     * @return \Autovista\VinDeutch\StructType\EquipmentType
     */
    public function setPackageFlag($packageFlag = null)
    {
        $this->PackageFlag = $packageFlag;
        return $this;
    }
    /**
     * Get Esaco value
     * @return \Autovista\VinDeutch\StructType\EsacoType|null
     */
    public function getEsaco()
    {
        return $this->Esaco;
    }
    /**
     * Set Esaco value
     * @param \Autovista\VinDeutch\StructType\EsacoType $esaco
     * @return \Autovista\VinDeutch\StructType\EquipmentType
     */
    public function setEsaco(\Autovista\VinDeutch\StructType\EsacoType $esaco = null)
    {
        $this->Esaco = $esaco;
        return $this;
    }
    /**
     * Get Merchantability value
     * @return short|null
     */
    public function getMerchantability()
    {
        return $this->Merchantability;
    }
    /**
     * Set Merchantability value
     * @param short $merchantability
     * @return \Autovista\VinDeutch\StructType\EquipmentType
     */
    public function setMerchantability($merchantability = null)
    {
        $this->Merchantability = $merchantability;
        return $this;
    }
    /**
     * Get DeliveryFlag value
     * @return short|null
     */
    public function getDeliveryFlag()
    {
        return $this->DeliveryFlag;
    }
    /**
     * Set DeliveryFlag value
     * @param short $deliveryFlag
     * @return \Autovista\VinDeutch\StructType\EquipmentType
     */
    public function setDeliveryFlag($deliveryFlag = null)
    {
        $this->DeliveryFlag = $deliveryFlag;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\VinDeutch\StructType\EquipmentType
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
