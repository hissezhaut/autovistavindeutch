<?php

namespace Autovista\VinDeutch;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'VersionRequestInputType' => 'Autovista\VinDeutch\StructType\VersionRequestInputType',
            'VinDecodeInputType' => 'Autovista\VinDeutch\StructType\VinDecodeInputType',
            'VinDecodeOutputType' => 'Autovista\VinDeutch\StructType\VinDecodeOutputType',
            'VehicleType' => 'Autovista\VinDeutch\StructType\VehicleType',
            'ETGsettingType' => 'Autovista\VinDeutch\StructType\ETGsettingType',
            'ETGversionInformationType' => 'Autovista\VinDeutch\StructType\ETGversionInformationType',
            'ETGdateType' => 'Autovista\VinDeutch\StructType\ETGdateType',
            'LoginDataType' => 'Autovista\VinDeutch\StructType\LoginDataType',
            'OriginatorType' => 'Autovista\VinDeutch\StructType\OriginatorType',
            'FailureType' => 'Autovista\VinDeutch\StructType\FailureType',
            'SuccessType' => 'Autovista\VinDeutch\StructType\SuccessType',
            'ResponseType' => 'Autovista\VinDeutch\StructType\ResponseType',
            'StatisticsType' => 'Autovista\VinDeutch\StructType\StatisticsType',
            'ETGStatus' => 'Autovista\VinDeutch\StructType\ETGStatus',
            'ETGHeaderType' => 'Autovista\VinDeutch\StructType\ETGHeaderType',
            'EquipmentType' => 'Autovista\VinDeutch\StructType\EquipmentType',
            'EsacoType' => 'Autovista\VinDeutch\StructType\EsacoType',
            'ValuationBasicType' => 'Autovista\VinDeutch\StructType\ValuationBasicType',
            'ValuationResponseType' => 'Autovista\VinDeutch\StructType\ValuationResponseType',
            'PeriodOfBuildDetailsType' => 'Autovista\VinDeutch\StructType\PeriodOfBuildDetailsType',
            'ManufacturerInfoType' => 'Autovista\VinDeutch\StructType\ManufacturerInfoType',
            'GetCache' => 'Autovista\VinDeutch\StructType\GetCache',
            'GetCacheResponse' => 'Autovista\VinDeutch\StructType\GetCacheResponse',
            'GetLog' => 'Autovista\VinDeutch\StructType\GetLog',
            'GetLogResponse' => 'Autovista\VinDeutch\StructType\GetLogResponse',
            'GetMarkets' => 'Autovista\VinDeutch\StructType\GetMarkets',
            'GetMarketsResponse' => 'Autovista\VinDeutch\StructType\GetMarketsResponse',
        );
    }
}
