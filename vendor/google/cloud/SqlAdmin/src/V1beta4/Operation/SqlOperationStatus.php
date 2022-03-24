<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4\Operation;

use UnexpectedValueException;

/**
 * The status of an operation.
 *
 * Protobuf type <code>google.cloud.sql.v1beta4.Operation.SqlOperationStatus</code>
 */
class SqlOperationStatus
{
    /**
     * The state of the operation is unknown.
     *
     * Generated from protobuf enum <code>SQL_OPERATION_STATUS_UNSPECIFIED = 0;</code>
     */
    const SQL_OPERATION_STATUS_UNSPECIFIED = 0;
    /**
     * The operation has been queued, but has not started yet.
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * The operation is running.
     *
     * Generated from protobuf enum <code>RUNNING = 2;</code>
     */
    const RUNNING = 2;
    /**
     * The operation completed.
     *
     * Generated from protobuf enum <code>DONE = 3;</code>
     */
    const DONE = 3;

    private static $valueToName = [
        self::SQL_OPERATION_STATUS_UNSPECIFIED => 'SQL_OPERATION_STATUS_UNSPECIFIED',
        self::PENDING => 'PENDING',
        self::RUNNING => 'RUNNING',
        self::DONE => 'DONE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


