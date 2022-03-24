<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/catalog_service.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message to show which branch is currently the default branch.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.GetDefaultBranchRequest</code>
 */
class GetDefaultBranchRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The parent catalog resource name, such as
     * `projects/&#42;&#47;locations/global/catalogs/default_catalog`.
     *
     * Generated from protobuf field <code>string catalog = 1 [(.google.api.resource_reference) = {</code>
     */
    private $catalog = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $catalog
     *           The parent catalog resource name, such as
     *           `projects/&#42;&#47;locations/global/catalogs/default_catalog`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\CatalogService::initOnce();
        parent::__construct($data);
    }

    /**
     * The parent catalog resource name, such as
     * `projects/&#42;&#47;locations/global/catalogs/default_catalog`.
     *
     * Generated from protobuf field <code>string catalog = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCatalog()
    {
        return $this->catalog;
    }

    /**
     * The parent catalog resource name, such as
     * `projects/&#42;&#47;locations/global/catalogs/default_catalog`.
     *
     * Generated from protobuf field <code>string catalog = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCatalog($var)
    {
        GPBUtil::checkString($var, True);
        $this->catalog = $var;

        return $this;
    }

}

