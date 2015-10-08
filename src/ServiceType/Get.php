<?php

namespace Autovista\VinDeutch\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
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
     * Method to call the operation originally named GetVersion
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://ws-vinsearch.eurotaxglass.com
     * - SOAPHeaderTypes : \Autovista\VinDeutch\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * - documentation: Get version of Program, interne logic, IDD Dat
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\VinDeutch\StructType\VersionRequestInputType $versionRequest
     * @return \Autovista\VinDeutch\StructType\ETGversionInformationType|bool
     */
    public function GetVersion(\Autovista\VinDeutch\StructType\VersionRequestInputType $versionRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->GetVersion($versionRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCache
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://ws-vinsearch.eurotaxglass.com
     * - SOAPHeaderTypes : \Autovista\VinDeutch\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * - documentation: Internal function to fetch cached VINs. ServiceCode field dependend.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\VinDeutch\StructType\GetCache $getCache
     * @return \Autovista\VinDeutch\StructType\GetCacheResponse|bool
     */
    public function GetCache(\Autovista\VinDeutch\StructType\GetCache $getCache)
    {
        try {
            $this->setResult(self::getSoapClient()->GetCache($getCache));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMarkets
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://ws-vinsearch.eurotaxglass.com
     * - SOAPHeaderTypes : \Autovista\VinDeutch\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * - documentation: Get markets, available in VinSearch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\VinDeutch\StructType\GetMarkets $parameters
     * @return \Autovista\VinDeutch\StructType\GetMarketsResponse|bool
     */
    public function GetMarkets(\Autovista\VinDeutch\StructType\GetMarkets $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->GetMarkets($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Autovista\VinDeutch\StructType\ETGversionInformationType|\Autovista\VinDeutch\StructType\GetCacheResponse|\Autovista\VinDeutch\StructType\GetMarketsResponse
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
