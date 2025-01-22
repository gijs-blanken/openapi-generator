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


namespace OpenAPI\Server\Http\Controllers;

use Crell\Serde\SerdeCommon;
use Illuminate\Routing\Controller;
use Illuminate\Http\JsonResponse;

use OpenAPI\Server\Api\StoreApiInterface;

class StoreController extends Controller
{
    /**
     * Constructor
     */
    public function __construct(
        private readonly StoreApiInterface $api,
        private readonly SerdeCommon $serde = new SerdeCommon(),
    )
    {
    }

    /**
     * Operation deleteOrder
     *
     * Delete purchase order by ID.
     *
     */
    public function deleteOrder(\OpenAPI\Server\Http\Requests\StoreRequest $request): JsonResponse
    {
        $orderId = $request->string('orderId');

        try {
            $apiResult = $this->api->deleteOrder($orderId);
        } catch (\Exception $exception) {
            // This shouldn't happen
            return response()->json(['error' => $exception->getMessage()], 500);
        }

        if ($apiResult instanceof \OpenAPI\Server\Model\NoContent400) {
            $responseBody = $this->serde->serialize($apiResult, format: 'array');

            if ($responseBody === null) {
                return response()->json(['error' => 'Failed to parse api output'], 500);
            }

            if ($responseBody === []) {
                abort(400);
            }

            return response()->json($responseBody, 400);
        }
        if ($apiResult instanceof \OpenAPI\Server\Model\NoContent404) {
            $responseBody = $this->serde->serialize($apiResult, format: 'array');

            if ($responseBody === null) {
                return response()->json(['error' => 'Failed to parse api output'], 500);
            }

            if ($responseBody === []) {
                abort(404);
            }

            return response()->json($responseBody, 404);
        }

        // This shouldn't happen
        return response()->abort(500);
    }
    /**
     * Operation getInventory
     *
     * Returns pet inventories by status.
     *
     */
    public function getInventory(\OpenAPI\Server\Http\Requests\StoreRequest $request): JsonResponse
    {
        try {
            $apiResult = $this->api->getInventory();
        } catch (\Exception $exception) {
            // This shouldn't happen
            return response()->json(['error' => $exception->getMessage()], 500);
        }

        if ($apiResult instanceof array&lt;string,int&gt;) {
            $responseBody = $this->serde->serialize($apiResult, format: 'array');

            if ($responseBody === null) {
                return response()->json(['error' => 'Failed to parse api output'], 500);
            }

            if ($responseBody === []) {
                abort(200);
            }

            return response()->json($responseBody, 200);
        }

        // This shouldn't happen
        return response()->abort(500);
    }
    /**
     * Operation getOrderById
     *
     * Find purchase order by ID.
     *
     */
    public function getOrderById(\OpenAPI\Server\Http\Requests\StoreRequest $request): JsonResponse
    {

        try {
            $apiResult = $this->api->getOrderById($orderId);
        } catch (\Exception $exception) {
            // This shouldn't happen
            return response()->json(['error' => $exception->getMessage()], 500);
        }

        if ($apiResult instanceof \OpenAPI\Server\Model\Order) {
            $responseBody = $this->serde->serialize($apiResult, format: 'array');

            if ($responseBody === null) {
                return response()->json(['error' => 'Failed to parse api output'], 500);
            }

            if ($responseBody === []) {
                abort(200);
            }

            return response()->json($responseBody, 200);
        }
        if ($apiResult instanceof \OpenAPI\Server\Model\NoContent400) {
            $responseBody = $this->serde->serialize($apiResult, format: 'array');

            if ($responseBody === null) {
                return response()->json(['error' => 'Failed to parse api output'], 500);
            }

            if ($responseBody === []) {
                abort(400);
            }

            return response()->json($responseBody, 400);
        }
        if ($apiResult instanceof \OpenAPI\Server\Model\NoContent404) {
            $responseBody = $this->serde->serialize($apiResult, format: 'array');

            if ($responseBody === null) {
                return response()->json(['error' => 'Failed to parse api output'], 500);
            }

            if ($responseBody === []) {
                abort(404);
            }

            return response()->json($responseBody, 404);
        }

        // This shouldn't happen
        return response()->abort(500);
    }
    /**
     * Operation placeOrder
     *
     * Place an order for a pet.
     *
     */
    public function placeOrder(\OpenAPI\Server\Http\Requests\StoreRequest $request): JsonResponse
    {
        $order = $this->serde->deserialize($request->get('order'), from: 'array', to: \OpenAPI\Server\Model\Order::class);

        if ($order === null) {
            return response()->json(['error' => 'Invalid input'], 400);
        }

        try {
            $apiResult = $this->api->placeOrder($order);
        } catch (\Exception $exception) {
            // This shouldn't happen
            return response()->json(['error' => $exception->getMessage()], 500);
        }

        if ($apiResult instanceof \OpenAPI\Server\Model\Order) {
            $responseBody = $this->serde->serialize($apiResult, format: 'array');

            if ($responseBody === null) {
                return response()->json(['error' => 'Failed to parse api output'], 500);
            }

            if ($responseBody === []) {
                abort(200);
            }

            return response()->json($responseBody, 200);
        }
        if ($apiResult instanceof \OpenAPI\Server\Model\NoContent400) {
            $responseBody = $this->serde->serialize($apiResult, format: 'array');

            if ($responseBody === null) {
                return response()->json(['error' => 'Failed to parse api output'], 500);
            }

            if ($responseBody === []) {
                abort(400);
            }

            return response()->json($responseBody, 400);
        }

        // This shouldn't happen
        return response()->abort(500);
    }
}
