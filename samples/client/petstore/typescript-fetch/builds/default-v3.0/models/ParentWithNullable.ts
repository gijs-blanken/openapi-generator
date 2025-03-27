/* tslint:disable */
/* eslint-disable */
/**
 * OpenAPI Petstore
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

import { mapValues } from '../runtime';
import { ChildWithNullable, ChildWithNullableFromJSONTyped, ChildWithNullableToJSON, ChildWithNullableToJSONTyped } from './ChildWithNullable';
/**
 * 
 * @export
 * @interface ParentWithNullable
 */
export interface ParentWithNullable {
    /**
     * 
     * @type {string}
     * @memberof ParentWithNullable
     */
    type?: ParentWithNullableTypeEnum;
    /**
     * 
     * @type {string}
     * @memberof ParentWithNullable
     */
    nullableProperty?: string | null;
}


/**
 * @export
 */
export const ParentWithNullableTypeEnum = {
    ChildWithNullable: 'ChildWithNullable'
} as const;
export type ParentWithNullableTypeEnum = typeof ParentWithNullableTypeEnum[keyof typeof ParentWithNullableTypeEnum];


/**
 * Check if a given object implements the ParentWithNullable interface.
 */
export function instanceOfParentWithNullable(value: object): value is ParentWithNullable {
    return true;
}

export function ParentWithNullableFromJSON(json: any): ParentWithNullable {
    return ParentWithNullableFromJSONTyped(json, false);
}

export function ParentWithNullableFromJSONTyped(json: any, ignoreDiscriminator: boolean): ParentWithNullable {
    if (json == null) {
        return json;
    }
    if (!ignoreDiscriminator) {
        if (json['type'] === 'ChildWithNullable') {
            return ChildWithNullableFromJSONTyped(json, ignoreDiscriminator);
        }
    }
    return {
        
        'type': json['type'] == null ? undefined : json['type'],
        'nullableProperty': json['nullableProperty'] == null ? undefined : json['nullableProperty'],
    };
}

export function ParentWithNullableToJSON(json: any): ParentWithNullable {
    return ParentWithNullableToJSONTyped(json, false);
}

export function ParentWithNullableToJSONTyped(value?: ParentWithNullable | null, ignoreDiscriminator: boolean = false): any {
    if (value == null) {
        return value;
    }

    if (!ignoreDiscriminator) {
        switch (value['type']) {
            case 'ChildWithNullable':
                return ChildWithNullableToJSONTyped(value as ChildWithNullable, ignoreDiscriminator);
            default:
                return value;
        }
    }

    return {
        
        'type': value['type'],
        'nullableProperty': value['nullableProperty'],
    };
}

