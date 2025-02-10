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


namespace OpenAPI\Server\Api;


interface StoreApiInterface {


    /**
     * Operation deleteOrder
     *
     * Delete purchase order by ID
     * @param string $orderId
     * @return \OpenAPI\Server\Model\NoContent400 | \OpenAPI\Server\Model\NoContent404
     */
    public function deleteOrder(
            string $orderId,
    ):
        \OpenAPI\Server\Model\NoContent400 | 
        \OpenAPI\Server\Model\NoContent404
    ;


    /**
     * Operation getInventory
     *
     * Returns pet inventories by status
     * @return array<string,int>
     */
    public function getInventory(
    ):
        array
    ;


    /**
     * Operation getOrderById
     *
     * Find purchase order by ID
     * @param int $orderId
     * @return \OpenAPI\Server\Model\Order | \OpenAPI\Server\Model\NoContent400 | \OpenAPI\Server\Model\NoContent404
     */
    public function getOrderById(
            int $orderId,
    ):
        \OpenAPI\Server\Model\Order | 
        \OpenAPI\Server\Model\NoContent400 | 
        \OpenAPI\Server\Model\NoContent404
    ;


    /**
     * Operation placeOrder
     *
     * Place an order for a pet
     * @param \OpenAPI\Server\Model\Order $order
     * @return \OpenAPI\Server\Model\Order | \OpenAPI\Server\Model\NoContent400
     */
    public function placeOrder(
            \OpenAPI\Server\Model\Order $order,
    ):
        \OpenAPI\Server\Model\Order | 
        \OpenAPI\Server\Model\NoContent400
    ;

}
