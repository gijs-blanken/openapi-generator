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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


use OpenAPI\Server\Api\PetApiInterface;

class PetController extends Controller
{
    /**
     * Constructor
     */
    public function __construct(
        private readonly PetApiInterface $api,
        private readonly SerdeCommon $serde = new SerdeCommon(),
    )
    {
    }

    /**
     * Operation addPet
     *
     * Add a new pet to the store.
     *
     */
    public function addPet(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'pet' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {
            \Illuminate\Support\Facades\Log::warning("Failed to validate input for testInlineFreeformAdditionalProperties", $validator->errors()->toArray());
            return response()->json(['error' => 'Invalid input'], 400);
        }

        $pet = $this->serde->deserialize($request->get('pet'), from: 'array', to: \OpenAPI\Server\Model\Pet::class);

        if ($pet === null) {
            return response()->json(['error' => 'Invalid input'], 400);
        }

        try {
            $apiResult = $this->api->addPet($pet);
        } catch (\Exception $exception) {
            // This shouldn't happen
            return response()->json(['error' => $exception->getMessage()], 500);
        }

        if ($apiResult instanceof \OpenAPI\Server\Model\NoContent200) {
            $responseBody = $this->serde->serialize($apiResult, format: 'array');

            if ($responseBody === null) {
                return response()->json(['error' => 'Failed to parse api output'], 500);
            }

            if ($responseBody === []) {
                abort(200);
            }

            return response()->json($responseBody, 200);
        }

        if ($apiResult instanceof \OpenAPI\Server\Model\NoContent405) {
            $responseBody = $this->serde->serialize($apiResult, format: 'array');

            if ($responseBody === null) {
                return response()->json(['error' => 'Failed to parse api output'], 500);
            }

            if ($responseBody === []) {
                abort(405);
            }

            return response()->json($responseBody, 405);
        }


        // This shouldn't happen
        return response()->abort(500);
    }
    /**
     * Operation deletePet
     *
     * Deletes a pet.
     *
     */
    public function deletePet(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'petId' => [
                'required',
                'integer',
            ],
            'apiKey' => [
                'string',
            ],
        ]);

        if ($validator->fails()) {
            \Illuminate\Support\Facades\Log::warning("Failed to validate input for testInlineFreeformAdditionalProperties", $validator->errors()->toArray());
            return response()->json(['error' => 'Invalid input'], 400);
        }

        $petId = $request->integer('petId');

        $apiKey = $request->string('apiKey')->value();

        try {
            $apiResult = $this->api->deletePet($petId, $apiKey);
        } catch (\Exception $exception) {
            // This shouldn't happen
            return response()->json(['error' => $exception->getMessage()], 500);
        }

        if ($apiResult instanceof \OpenAPI\Server\Model\NoContent200) {
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
    /**
     * Operation findPetsByStatus
     *
     * Finds Pets by status.
     *
     */
    public function findPetsByStatus(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'status' => [
                'required',
                'array',
            ],
        ]);

        if ($validator->fails()) {
            \Illuminate\Support\Facades\Log::warning("Failed to validate input for testInlineFreeformAdditionalProperties", $validator->errors()->toArray());
            return response()->json(['error' => 'Invalid input'], 400);
        }

        $status = $request->get('status');

        try {
            $apiResult = $this->api->findPetsByStatus($status);
        } catch (\Exception $exception) {
            // This shouldn't happen
            return response()->json(['error' => $exception->getMessage()], 500);
        }

        if (is_array($apiResult)) {
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
    /**
     * Operation findPetsByTags
     *
     * Finds Pets by tags.
     *
     * @deprecated
     */
    public function findPetsByTags(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'tags' => [
                'required',
                'array',
            ],
        ]);

        if ($validator->fails()) {
            \Illuminate\Support\Facades\Log::warning("Failed to validate input for testInlineFreeformAdditionalProperties", $validator->errors()->toArray());
            return response()->json(['error' => 'Invalid input'], 400);
        }

        $tags = $request->get('tags');

        try {
            $apiResult = $this->api->findPetsByTags($tags);
        } catch (\Exception $exception) {
            // This shouldn't happen
            return response()->json(['error' => $exception->getMessage()], 500);
        }

        if (is_array($apiResult)) {
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
    /**
     * Operation getPetById
     *
     * Find pet by ID.
     *
     */
    public function getPetById(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'petId' => [
                'required',
                'integer',
            ],
        ]);

        if ($validator->fails()) {
            \Illuminate\Support\Facades\Log::warning("Failed to validate input for testInlineFreeformAdditionalProperties", $validator->errors()->toArray());
            return response()->json(['error' => 'Invalid input'], 400);
        }

        $petId = $request->integer('petId');

        try {
            $apiResult = $this->api->getPetById($petId);
        } catch (\Exception $exception) {
            // This shouldn't happen
            return response()->json(['error' => $exception->getMessage()], 500);
        }

        if ($apiResult instanceof \OpenAPI\Server\Model\Pet) {
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
     * Operation updatePet
     *
     * Update an existing pet.
     *
     */
    public function updatePet(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'pet' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {
            \Illuminate\Support\Facades\Log::warning("Failed to validate input for testInlineFreeformAdditionalProperties", $validator->errors()->toArray());
            return response()->json(['error' => 'Invalid input'], 400);
        }

        $pet = $this->serde->deserialize($request->get('pet'), from: 'array', to: \OpenAPI\Server\Model\Pet::class);

        if ($pet === null) {
            return response()->json(['error' => 'Invalid input'], 400);
        }

        try {
            $apiResult = $this->api->updatePet($pet);
        } catch (\Exception $exception) {
            // This shouldn't happen
            return response()->json(['error' => $exception->getMessage()], 500);
        }

        if ($apiResult instanceof \OpenAPI\Server\Model\NoContent200) {
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

        if ($apiResult instanceof \OpenAPI\Server\Model\NoContent405) {
            $responseBody = $this->serde->serialize($apiResult, format: 'array');

            if ($responseBody === null) {
                return response()->json(['error' => 'Failed to parse api output'], 500);
            }

            if ($responseBody === []) {
                abort(405);
            }

            return response()->json($responseBody, 405);
        }


        // This shouldn't happen
        return response()->abort(500);
    }
    /**
     * Operation updatePetWithForm
     *
     * Updates a pet in the store with form data.
     *
     */
    public function updatePetWithForm(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'petId' => [
                'required',
                'integer',
            ],
            'name' => [
                'string',
            ],
            'status' => [
                'string',
            ],
        ]);

        if ($validator->fails()) {
            \Illuminate\Support\Facades\Log::warning("Failed to validate input for testInlineFreeformAdditionalProperties", $validator->errors()->toArray());
            return response()->json(['error' => 'Invalid input'], 400);
        }

        $petId = $request->integer('petId');

        $name = $request->string('name')->value();

        $status = $request->string('status')->value();

        try {
            $apiResult = $this->api->updatePetWithForm($petId, $name, $status);
        } catch (\Exception $exception) {
            // This shouldn't happen
            return response()->json(['error' => $exception->getMessage()], 500);
        }

        if ($apiResult instanceof \OpenAPI\Server\Model\NoContent200) {
            $responseBody = $this->serde->serialize($apiResult, format: 'array');

            if ($responseBody === null) {
                return response()->json(['error' => 'Failed to parse api output'], 500);
            }

            if ($responseBody === []) {
                abort(200);
            }

            return response()->json($responseBody, 200);
        }

        if ($apiResult instanceof \OpenAPI\Server\Model\NoContent405) {
            $responseBody = $this->serde->serialize($apiResult, format: 'array');

            if ($responseBody === null) {
                return response()->json(['error' => 'Failed to parse api output'], 500);
            }

            if ($responseBody === []) {
                abort(405);
            }

            return response()->json($responseBody, 405);
        }


        // This shouldn't happen
        return response()->abort(500);
    }
    /**
     * Operation uploadFile
     *
     * uploads an image.
     *
     */
    public function uploadFile(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'petId' => [
                'required',
                'integer',
            ],
            'additionalMetadata' => [
                'string',
            ],
            'file' => [
                'file',
            ],
        ]);

        if ($validator->fails()) {
            \Illuminate\Support\Facades\Log::warning("Failed to validate input for testInlineFreeformAdditionalProperties", $validator->errors()->toArray());
            return response()->json(['error' => 'Invalid input'], 400);
        }

        $petId = $request->integer('petId');

        $additionalMetadata = $request->string('additionalMetadata')->value();

        $file = $request->file('file');

        try {
            $apiResult = $this->api->uploadFile($petId, $additionalMetadata, $file);
        } catch (\Exception $exception) {
            // This shouldn't happen
            return response()->json(['error' => $exception->getMessage()], 500);
        }

        if ($apiResult instanceof \OpenAPI\Server\Model\ApiResponse) {
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
     * Operation uploadFileWithRequiredFile
     *
     * uploads an image (required).
     *
     */
    public function uploadFileWithRequiredFile(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'petId' => [
                'required',
                'integer',
            ],
            'requiredFile' => [
                'file',
                'required',
            ],
            'additionalMetadata' => [
                'string',
            ],
        ]);

        if ($validator->fails()) {
            \Illuminate\Support\Facades\Log::warning("Failed to validate input for testInlineFreeformAdditionalProperties", $validator->errors()->toArray());
            return response()->json(['error' => 'Invalid input'], 400);
        }

        $petId = $request->integer('petId');

        $requiredFile = $request->file('requiredFile');

        $additionalMetadata = $request->string('additionalMetadata')->value();

        try {
            $apiResult = $this->api->uploadFileWithRequiredFile($petId, $requiredFile, $additionalMetadata);
        } catch (\Exception $exception) {
            // This shouldn't happen
            return response()->json(['error' => $exception->getMessage()], 500);
        }

        if ($apiResult instanceof \OpenAPI\Server\Model\ApiResponse) {
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
}
