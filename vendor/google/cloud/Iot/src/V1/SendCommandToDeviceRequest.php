<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/device_manager.proto

namespace Google\Cloud\Iot\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for `SendCommandToDevice`.
 *
 * Generated from protobuf message <code>google.cloud.iot.v1.SendCommandToDeviceRequest</code>
 */
class SendCommandToDeviceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the device. For example,
     * `projects/p0/locations/us-central1/registries/registry0/devices/device0` or
     * `projects/p0/locations/us-central1/registries/registry0/devices/{num_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The command data to send to the device.
     *
     * Generated from protobuf field <code>bytes binary_data = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $binary_data = '';
    /**
     * Optional subfolder for the command. If empty, the command will be delivered
     * to the /devices/{device-id}/commands topic, otherwise it will be delivered
     * to the /devices/{device-id}/commands/{subfolder} topic. Multi-level
     * subfolders are allowed. This field must not have more than 256 characters,
     * and must not contain any MQTT wildcards ("+" or "#") or null characters.
     *
     * Generated from protobuf field <code>string subfolder = 3;</code>
     */
    private $subfolder = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the device. For example,
     *           `projects/p0/locations/us-central1/registries/registry0/devices/device0` or
     *           `projects/p0/locations/us-central1/registries/registry0/devices/{num_id}`.
     *     @type string $binary_data
     *           Required. The command data to send to the device.
     *     @type string $subfolder
     *           Optional subfolder for the command. If empty, the command will be delivered
     *           to the /devices/{device-id}/commands topic, otherwise it will be delivered
     *           to the /devices/{device-id}/commands/{subfolder} topic. Multi-level
     *           subfolders are allowed. This field must not have more than 256 characters,
     *           and must not contain any MQTT wildcards ("+" or "#") or null characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iot\V1\DeviceManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the device. For example,
     * `projects/p0/locations/us-central1/registries/registry0/devices/device0` or
     * `projects/p0/locations/us-central1/registries/registry0/devices/{num_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the device. For example,
     * `projects/p0/locations/us-central1/registries/registry0/devices/device0` or
     * `projects/p0/locations/us-central1/registries/registry0/devices/{num_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The command data to send to the device.
     *
     * Generated from protobuf field <code>bytes binary_data = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBinaryData()
    {
        return $this->binary_data;
    }

    /**
     * Required. The command data to send to the device.
     *
     * Generated from protobuf field <code>bytes binary_data = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBinaryData($var)
    {
        GPBUtil::checkString($var, False);
        $this->binary_data = $var;

        return $this;
    }

    /**
     * Optional subfolder for the command. If empty, the command will be delivered
     * to the /devices/{device-id}/commands topic, otherwise it will be delivered
     * to the /devices/{device-id}/commands/{subfolder} topic. Multi-level
     * subfolders are allowed. This field must not have more than 256 characters,
     * and must not contain any MQTT wildcards ("+" or "#") or null characters.
     *
     * Generated from protobuf field <code>string subfolder = 3;</code>
     * @return string
     */
    public function getSubfolder()
    {
        return $this->subfolder;
    }

    /**
     * Optional subfolder for the command. If empty, the command will be delivered
     * to the /devices/{device-id}/commands topic, otherwise it will be delivered
     * to the /devices/{device-id}/commands/{subfolder} topic. Multi-level
     * subfolders are allowed. This field must not have more than 256 characters,
     * and must not contain any MQTT wildcards ("+" or "#") or null characters.
     *
     * Generated from protobuf field <code>string subfolder = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSubfolder($var)
    {
        GPBUtil::checkString($var, True);
        $this->subfolder = $var;

        return $this;
    }

}

