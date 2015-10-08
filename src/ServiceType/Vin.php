<?php

namespace Autovista\VinDeutch\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Vin ServiceType
 * @subpackage Services
 */
class Vin extends AbstractSoapClientBase
{
    /**
     * Sets the ETGHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Autovista\VinDeutch\StructType\ETGHeaderType $eTGHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderETGHeader(\Autovista\VinDeutch\StructType\ETGHeaderType $eTGHeader, $nameSpace = 'http://ws-vinsearch.eurotaxglass.com', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'ETGHeader', $eTGHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named VinDecode
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://ws-vinsearch.eurotaxglass.com
     * - SOAPHeaderTypes : \Autovista\VinDeutch\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * - documentation: Main function to map VIN code to ETG dat
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\VinDeutch\StructType\VinDecodeInputType $vinRequest
     * @return \Autovista\VinDeutch\StructType\VinDecodeOutputType|bool
     */
    public function VinDecode(\Autovista\VinDeutch\StructType\VinDecodeInputType $vinRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->VinDecode($vinRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Autovista\VinDeutch\StructType\VinDecodeOutputType
     */
    public function getResult()
    {
        return parent::getResult();
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
