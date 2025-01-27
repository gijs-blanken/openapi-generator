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

interface UserApiInterface {


    /**
     * Operation createUser
     *
     * Create user
     * @param \OpenAPI\Server\Model\User $user
     * @return \OpenAPI\Server\Model\NoContentDefault
     */
    public function createUser(
            \OpenAPI\Server\Model\User $user,
    ):
        \OpenAPI\Server\Model\NoContentDefault
    ;


    /**
     * Operation createUsersWithArrayInput
     *
     * Creates list of users with given input array
     * @param \OpenAPI\Server\Model\User[] $user
     * @return \OpenAPI\Server\Model\NoContentDefault
     */
    public function createUsersWithArrayInput(
            array $user,
    ):
        \OpenAPI\Server\Model\NoContentDefault
    ;


    /**
     * Operation createUsersWithListInput
     *
     * Creates list of users with given input array
     * @param \OpenAPI\Server\Model\User[] $user
     * @return \OpenAPI\Server\Model\NoContentDefault
     */
    public function createUsersWithListInput(
            array $user,
    ):
        \OpenAPI\Server\Model\NoContentDefault
    ;


    /**
     * Operation deleteUser
     *
     * Delete user
     * @param string $username
     * @return \OpenAPI\Server\Model\NoContent400 | \OpenAPI\Server\Model\NoContent404
     */
    public function deleteUser(
            string $username,
    ):
        \OpenAPI\Server\Model\NoContent400 | 
        \OpenAPI\Server\Model\NoContent404
    ;


    /**
     * Operation getUserByName
     *
     * Get user by user name
     * @param string $username
     * @return \OpenAPI\Server\Model\User | \OpenAPI\Server\Model\NoContent400 | \OpenAPI\Server\Model\NoContent404
     */
    public function getUserByName(
            string $username,
    ):
        \OpenAPI\Server\Model\User | 
        \OpenAPI\Server\Model\NoContent400 | 
        \OpenAPI\Server\Model\NoContent404
    ;


    /**
     * Operation loginUser
     *
     * Logs user into the system
     * @param string $username
     * @param string $password
     * @return string | \OpenAPI\Server\Model\NoContent400
     */
    public function loginUser(
            string $username,
            string $password,
    ):
        string | 
        \OpenAPI\Server\Model\NoContent400
    ;


    /**
     * Operation logoutUser
     *
     * Logs out current logged in user session
     * @return \OpenAPI\Server\Model\NoContentDefault
     */
    public function logoutUser(
    ):
        \OpenAPI\Server\Model\NoContentDefault
    ;


    /**
     * Operation updateUser
     *
     * Updated user
     * @param string $username
     * @param \OpenAPI\Server\Model\User $user
     * @return \OpenAPI\Server\Model\NoContent400 | \OpenAPI\Server\Model\NoContent404
     */
    public function updateUser(
            string $username,
            \OpenAPI\Server\Model\User $user,
    ):
        \OpenAPI\Server\Model\NoContent400 | 
        \OpenAPI\Server\Model\NoContent404
    ;

}
