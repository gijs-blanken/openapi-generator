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


namespace OpenAPI\Server\Api;


interface FakeApiInterface {


    /**
     * Operation fakeBigDecimalMap
     * @return \OpenAPI\Server\Model\FakeBigDecimalMap200Response
     */
    public function fakeBigDecimalMap(
    ):
        \OpenAPI\Server\Model\FakeBigDecimalMap200Response
    ;


    /**
     * Operation fakeHealthGet
     *
     * Health check endpoint
     * @return \OpenAPI\Server\Model\HealthCheckResult
     */
    public function fakeHealthGet(
    ):
        \OpenAPI\Server\Model\HealthCheckResult
    ;


    /**
     * Operation fakeHttpSignatureTest
     *
     * test http signature authentication
     * @param \OpenAPI\Server\Model\Pet $pet
     * @param null | string $query1
     * @param null | string $header1
     * @return \OpenAPI\Server\Model\NoContent200
     */
    public function fakeHttpSignatureTest(
            \OpenAPI\Server\Model\Pet $pet,
            ?string $query1,
            ?string $header1,
    ):
        \OpenAPI\Server\Model\NoContent200
    ;


    /**
     * Operation fakeOuterBooleanSerialize
     * @param null | bool $body
     * @return bool
     */
    public function fakeOuterBooleanSerialize(
            ?bool $body,
    ):
        bool
    ;


    /**
     * Operation fakeOuterCompositeSerialize
     * @param null | \OpenAPI\Server\Model\OuterComposite $outerComposite
     * @return \OpenAPI\Server\Model\OuterComposite
     */
    public function fakeOuterCompositeSerialize(
            ?\OpenAPI\Server\Model\OuterComposite $outerComposite,
    ):
        \OpenAPI\Server\Model\OuterComposite
    ;


    /**
     * Operation fakeOuterNumberSerialize
     * @param null | float $body
     * @return float
     */
    public function fakeOuterNumberSerialize(
            ?float $body,
    ):
        float
    ;


    /**
     * Operation fakeOuterStringSerialize
     * @param null | string $body
     * @return string
     */
    public function fakeOuterStringSerialize(
            ?string $body,
    ):
        string
    ;


    /**
     * Operation fakePropertyEnumIntegerSerialize
     * @param \OpenAPI\Server\Model\OuterObjectWithEnumProperty $outerObjectWithEnumProperty
     * @return \OpenAPI\Server\Model\OuterObjectWithEnumProperty
     */
    public function fakePropertyEnumIntegerSerialize(
            \OpenAPI\Server\Model\OuterObjectWithEnumProperty $outerObjectWithEnumProperty,
    ):
        \OpenAPI\Server\Model\OuterObjectWithEnumProperty
    ;


    /**
     * Operation testAdditionalPropertiesReference
     *
     * test referenced additionalProperties
     * @param array<string,mixed> $requestBody
     * @return \OpenAPI\Server\Model\NoContent200
     */
    public function testAdditionalPropertiesReference(
            array $requestBody,
    ):
        \OpenAPI\Server\Model\NoContent200
    ;


    /**
     * Operation testBodyWithBinary
     * @param \Illuminate\Http\UploadedFile $body
     * @return \OpenAPI\Server\Model\NoContent200
     */
    public function testBodyWithBinary(
            \Illuminate\Http\UploadedFile $body,
    ):
        \OpenAPI\Server\Model\NoContent200
    ;


    /**
     * Operation testBodyWithFileSchema
     * @param \OpenAPI\Server\Model\FileSchemaTestClass $fileSchemaTestClass
     * @return \OpenAPI\Server\Model\NoContent200
     */
    public function testBodyWithFileSchema(
            \OpenAPI\Server\Model\FileSchemaTestClass $fileSchemaTestClass,
    ):
        \OpenAPI\Server\Model\NoContent200
    ;


    /**
     * Operation testBodyWithQueryParams
     * @param string $query
     * @param \OpenAPI\Server\Model\User $user
     * @return \OpenAPI\Server\Model\NoContent200
     */
    public function testBodyWithQueryParams(
            string $query,
            \OpenAPI\Server\Model\User $user,
    ):
        \OpenAPI\Server\Model\NoContent200
    ;


    /**
     * Operation testClientModel
     *
     * To test \"client\" model
     * @param \OpenAPI\Server\Model\Client $client
     * @return \OpenAPI\Server\Model\Client
     */
    public function testClientModel(
            \OpenAPI\Server\Model\Client $client,
    ):
        \OpenAPI\Server\Model\Client
    ;


    /**
     * Operation testEndpointParameters
     *
     * Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트
     * @param float $number
     * @param float $double
     * @param string $patternWithoutDelimiter
     * @param string $byte
     * @param null | int $integer
     * @param null | int $int32
     * @param null | int $int64
     * @param null | float $float
     * @param null | string $string
     * @param null | \Illuminate\Http\UploadedFile $binary
     * @param null | \DateTime $date
     * @param null | \DateTime $dateTime
     * @param null | string $password
     * @param null | string $callback
     * @return \OpenAPI\Server\Model\NoContent400 | \OpenAPI\Server\Model\NoContent404
     */
    public function testEndpointParameters(
            float $number,
            float $double,
            string $patternWithoutDelimiter,
            string $byte,
            ?int $integer,
            ?int $int32,
            ?int $int64,
            ?float $float,
            ?string $string,
            ?\Illuminate\Http\UploadedFile $binary,
            ?\DateTime $date,
            ?\DateTime $dateTime,
            ?string $password,
            ?string $callback,
    ):
        \OpenAPI\Server\Model\NoContent400 | 
        \OpenAPI\Server\Model\NoContent404
    ;


    /**
     * Operation testEnumParameters
     *
     * To test enum parameters
     * @param null | \OpenAPI\Server\Model\TestEnumParametersRequestEnumFormStringArrayInner[] $enumHeaderStringArray
     * @param null | \OpenAPI\Server\Model\TestEnumParametersEnumHeaderStringParameter $enumHeaderString
     * @param null | \OpenAPI\Server\Model\TestEnumParametersRequestEnumFormStringArrayInner[] $enumQueryStringArray
     * @param null | \OpenAPI\Server\Model\TestEnumParametersEnumHeaderStringParameter $enumQueryString
     * @param null | \OpenAPI\Server\Model\TestEnumParametersEnumQueryIntegerParameter $enumQueryInteger
     * @param null | \OpenAPI\Server\Model\TestEnumParametersEnumQueryDoubleParameter $enumQueryDouble
     * @param null | \OpenAPI\Server\Model\EnumClass[] $enumQueryModelArray
     * @param null | \OpenAPI\Server\Model\TestEnumParametersRequestEnumFormStringArrayInner[] $enumFormStringArray
     * @param null | \OpenAPI\Server\Model\TestEnumParametersRequestEnumFormString $enumFormString
     * @return \OpenAPI\Server\Model\NoContent400 | \OpenAPI\Server\Model\NoContent404
     */
    public function testEnumParameters(
            ?array $enumHeaderStringArray,
            ?\OpenAPI\Server\Model\TestEnumParametersEnumHeaderStringParameter $enumHeaderString,
            ?array $enumQueryStringArray,
            ?\OpenAPI\Server\Model\TestEnumParametersEnumHeaderStringParameter $enumQueryString,
            ?\OpenAPI\Server\Model\TestEnumParametersEnumQueryIntegerParameter $enumQueryInteger,
            ?\OpenAPI\Server\Model\TestEnumParametersEnumQueryDoubleParameter $enumQueryDouble,
            ?array $enumQueryModelArray,
            ?array $enumFormStringArray,
            ?\OpenAPI\Server\Model\TestEnumParametersRequestEnumFormString $enumFormString,
    ):
        \OpenAPI\Server\Model\NoContent400 | 
        \OpenAPI\Server\Model\NoContent404
    ;


    /**
     * Operation testGroupParameters
     *
     * Fake endpoint to test group parameters (optional)
     * @param int $requiredStringGroup
     * @param bool $requiredBooleanGroup
     * @param int $requiredInt64Group
     * @param null | int $stringGroup
     * @param null | bool $booleanGroup
     * @param null | int $int64Group
     * @return \OpenAPI\Server\Model\NoContent400
     */
    public function testGroupParameters(
            int $requiredStringGroup,
            bool $requiredBooleanGroup,
            int $requiredInt64Group,
            ?int $stringGroup,
            ?bool $booleanGroup,
            ?int $int64Group,
    ):
        \OpenAPI\Server\Model\NoContent400
    ;


    /**
     * Operation testInlineAdditionalProperties
     *
     * test inline additionalProperties
     * @param array<string,string> $requestBody
     * @return \OpenAPI\Server\Model\NoContent200
     */
    public function testInlineAdditionalProperties(
            array $requestBody,
    ):
        \OpenAPI\Server\Model\NoContent200
    ;


    /**
     * Operation testInlineFreeformAdditionalProperties
     *
     * test inline free-form additionalProperties
     * @param \OpenAPI\Server\Model\TestInlineFreeformAdditionalPropertiesRequest $testInlineFreeformAdditionalPropertiesRequest
     * @return \OpenAPI\Server\Model\NoContent200
     */
    public function testInlineFreeformAdditionalProperties(
            \OpenAPI\Server\Model\TestInlineFreeformAdditionalPropertiesRequest $testInlineFreeformAdditionalPropertiesRequest,
    ):
        \OpenAPI\Server\Model\NoContent200
    ;


    /**
     * Operation testJsonFormData
     *
     * test json serialization of form data
     * @param string $param
     * @param string $param2
     * @return \OpenAPI\Server\Model\NoContent200
     */
    public function testJsonFormData(
            string $param,
            string $param2,
    ):
        \OpenAPI\Server\Model\NoContent200
    ;


    /**
     * Operation testNullable
     *
     * test nullable parent property
     * @param \OpenAPI\Server\Model\ChildWithNullable $childWithNullable
     * @return \OpenAPI\Server\Model\NoContent200
     */
    public function testNullable(
            \OpenAPI\Server\Model\ChildWithNullable $childWithNullable,
    ):
        \OpenAPI\Server\Model\NoContent200
    ;


    /**
     * Operation testQueryParameterCollectionFormat
     * @param string[] $pipe
     * @param string[] $ioutil
     * @param string[] $http
     * @param string[] $url
     * @param string[] $context
     * @param string $allowEmpty
     * @param null | array<string,string> $language
     * @return \OpenAPI\Server\Model\NoContent200
     */
    public function testQueryParameterCollectionFormat(
            array $pipe,
            array $ioutil,
            array $http,
            array $url,
            array $context,
            string $allowEmpty,
            ?array $language,
    ):
        \OpenAPI\Server\Model\NoContent200
    ;


    /**
     * Operation testStringMapReference
     *
     * test referenced string map
     * @param array<string,string> $requestBody
     * @return \OpenAPI\Server\Model\NoContent200
     */
    public function testStringMapReference(
            array $requestBody,
    ):
        \OpenAPI\Server\Model\NoContent200
    ;

}
