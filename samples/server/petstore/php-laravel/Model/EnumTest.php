<?php declare(strict_types=1);

/**
 * OpenAPI Petstore
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * PHP version 8.3
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI-Generator
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 * Source files are located at:
 *
 * > https://github.com/OpenAPITools/openapi-generator/blob/master/modules/openapi-generator/src/main/resources/php-laravel/
 */


/**
 * EnumTest
 */
namespace OpenAPI\Server\Model;

/**
 * EnumTest
 */
class EnumTest
{
    /**
    * 
    * @param string $enumString
    * 
    * @param string $enumStringRequired
    * 
    * @param int $enumInteger
    * 
    * @param float $enumNumber
    * 
    * @param null | \OpenAPI\Server\Model\OuterEnum $outerEnum
    * 
    * @param \OpenAPI\Server\Model\OuterEnumInteger $outerEnumInteger
    * 
    * @param \OpenAPI\Server\Model\OuterEnumDefaultValue $outerEnumDefaultValue
    * 
    * @param \OpenAPI\Server\Model\OuterEnumIntegerDefaultValue $outerEnumIntegerDefaultValue
    */

    public function __construct(
        public string $enumString,
        public string $enumStringRequired,
        public int $enumInteger,
        public float $enumNumber,
        public ?\OpenAPI\Server\Model\OuterEnum $outerEnum = null,
        public \OpenAPI\Server\Model\OuterEnumInteger $outerEnumInteger,
        public \OpenAPI\Server\Model\OuterEnumDefaultValue $outerEnumDefaultValue,
        public \OpenAPI\Server\Model\OuterEnumIntegerDefaultValue $outerEnumIntegerDefaultValue,
    ) {}
}

