<?php declare(strict_types=1);

/**
 * OpenAPI Petstore
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * PHP version 8.1
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
 * ParentWithNullable
 */
namespace OpenAPI\Server\Model;

/**
 * ParentWithNullable
 */
use Crell\Serde\Renaming\Cases;
use Crell\Serde\Attributes as Serde;

#[Serde\ClassSettings(renameWith: Cases::snake_case)]
class ParentWithNullable
{
    /**
    *
    * 
    * @param \OpenAPI\Server\Model\ParentWithNullableType $type
    *
    * 
    * @param null | string $nullableProperty
    */

    public function __construct(
        public \OpenAPI\Server\Model\ParentWithNullableType $type,
        public ?string $nullableProperty = null,
    ) {}
}

