<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_profile.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The type of Human Agent Assistant API suggestion to perform, and the maximum
 * number of results to return for that type. Multiple `Feature` objects can
 * be specified in the `features` list.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.SuggestionFeature</code>
 */
class SuggestionFeature extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of Human Agent Assistant API feature to request.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SuggestionFeature.Type type = 1;</code>
     */
    private $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Type of Human Agent Assistant API feature to request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of Human Agent Assistant API feature to request.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SuggestionFeature.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of Human Agent Assistant API feature to request.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SuggestionFeature.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\SuggestionFeature\Type::class);
        $this->type = $var;

        return $this;
    }

}

