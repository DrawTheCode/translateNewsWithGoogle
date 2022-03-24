<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The parameters to
 * [GetCmekSettings][google.logging.v2.ConfigServiceV2.GetCmekSettings].
 * See [Enabling CMEK for Logs
 * Router](https://cloud.google.com/logging/docs/routing/managed-encryption) for
 * more information.
 *
 * Generated from protobuf message <code>google.logging.v2.GetCmekSettingsRequest</code>
 */
class GetCmekSettingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource for which to retrieve CMEK settings.
     *     "projects/[PROJECT_ID]/cmekSettings"
     *     "organizations/[ORGANIZATION_ID]/cmekSettings"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/cmekSettings"
     *     "folders/[FOLDER_ID]/cmekSettings"
     * Example: `"organizations/12345/cmekSettings"`.
     * Note: CMEK for the Logs Router can currently only be configured for GCP
     * organizations. Once configured, it applies to all projects and folders in
     * the GCP organization.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource for which to retrieve CMEK settings.
     *               "projects/[PROJECT_ID]/cmekSettings"
     *               "organizations/[ORGANIZATION_ID]/cmekSettings"
     *               "billingAccounts/[BILLING_ACCOUNT_ID]/cmekSettings"
     *               "folders/[FOLDER_ID]/cmekSettings"
     *           Example: `"organizations/12345/cmekSettings"`.
     *           Note: CMEK for the Logs Router can currently only be configured for GCP
     *           organizations. Once configured, it applies to all projects and folders in
     *           the GCP organization.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource for which to retrieve CMEK settings.
     *     "projects/[PROJECT_ID]/cmekSettings"
     *     "organizations/[ORGANIZATION_ID]/cmekSettings"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/cmekSettings"
     *     "folders/[FOLDER_ID]/cmekSettings"
     * Example: `"organizations/12345/cmekSettings"`.
     * Note: CMEK for the Logs Router can currently only be configured for GCP
     * organizations. Once configured, it applies to all projects and folders in
     * the GCP organization.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource for which to retrieve CMEK settings.
     *     "projects/[PROJECT_ID]/cmekSettings"
     *     "organizations/[ORGANIZATION_ID]/cmekSettings"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/cmekSettings"
     *     "folders/[FOLDER_ID]/cmekSettings"
     * Example: `"organizations/12345/cmekSettings"`.
     * Note: CMEK for the Logs Router can currently only be configured for GCP
     * organizations. Once configured, it applies to all projects and folders in
     * the GCP organization.
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

}

