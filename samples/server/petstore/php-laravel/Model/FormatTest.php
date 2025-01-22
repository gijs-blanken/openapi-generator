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
 * FormatTest
 */
namespace OpenAPI\Server\Model;

/**
 * FormatTest
 */
class FormatTest
{
    /**
    * 
    */
    public int $integer;
    /**
    * 
    */
    public int $int32;
    /**
    * 
    */
    public int $int64;
    /**
    * 
    */
    public float $number;
    /**
    * 
    */
    public float $float;
    /**
    * 
    */
    public float $double;
    /**
    * 
    */
    public float $decimal;
    /**
    * 
    */
    public \Illuminate\Support\Stringable $string;
    /**
    * 
    */
    public \Illuminate\Support\Stringable $byte;
    /**
    * 
    */
    public \Illuminate\Http\UploadedFile $binary;
    /**
    * 
    */
    public \DateTime $date;
    /**
    * 
    */
    public \DateTime $dateTime;
    /**
    * 
    */
    public \Illuminate\Support\Stringable $uuid;
    /**
    * 
    */
    public \Illuminate\Support\Stringable $password;
    /**
    * A string that is a 10 digit number. Can have leading zeros.
    */
    public \Illuminate\Support\Stringable $patternWithDigits;
    /**
    * A string starting with &#39;image_&#39; (case insensitive) and one to three digits following i.e. Image_01.
    */
    public \Illuminate\Support\Stringable $patternWithDigitsAndDelimiter;
}

