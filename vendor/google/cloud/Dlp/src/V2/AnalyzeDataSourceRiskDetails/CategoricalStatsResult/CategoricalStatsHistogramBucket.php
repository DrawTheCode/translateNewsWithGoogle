<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\CategoricalStatsResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Histogram of value frequencies in the column.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.CategoricalStatsResult.CategoricalStatsHistogramBucket</code>
 */
class CategoricalStatsHistogramBucket extends \Google\Protobuf\Internal\Message
{
    /**
     * Lower bound on the value frequency of the values in this bucket.
     *
     * Generated from protobuf field <code>int64 value_frequency_lower_bound = 1;</code>
     */
    private $value_frequency_lower_bound = 0;
    /**
     * Upper bound on the value frequency of the values in this bucket.
     *
     * Generated from protobuf field <code>int64 value_frequency_upper_bound = 2;</code>
     */
    private $value_frequency_upper_bound = 0;
    /**
     * Total number of values in this bucket.
     *
     * Generated from protobuf field <code>int64 bucket_size = 3;</code>
     */
    private $bucket_size = 0;
    /**
     * Sample of value frequencies in this bucket. The total number of
     * values returned per bucket is capped at 20.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.ValueFrequency bucket_values = 4;</code>
     */
    private $bucket_values;
    /**
     * Total number of distinct values in this bucket.
     *
     * Generated from protobuf field <code>int64 bucket_value_count = 5;</code>
     */
    private $bucket_value_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $value_frequency_lower_bound
     *           Lower bound on the value frequency of the values in this bucket.
     *     @type int|string $value_frequency_upper_bound
     *           Upper bound on the value frequency of the values in this bucket.
     *     @type int|string $bucket_size
     *           Total number of values in this bucket.
     *     @type \Google\Cloud\Dlp\V2\ValueFrequency[]|\Google\Protobuf\Internal\RepeatedField $bucket_values
     *           Sample of value frequencies in this bucket. The total number of
     *           values returned per bucket is capped at 20.
     *     @type int|string $bucket_value_count
     *           Total number of distinct values in this bucket.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Lower bound on the value frequency of the values in this bucket.
     *
     * Generated from protobuf field <code>int64 value_frequency_lower_bound = 1;</code>
     * @return int|string
     */
    public function getValueFrequencyLowerBound()
    {
        return $this->value_frequency_lower_bound;
    }

    /**
     * Lower bound on the value frequency of the values in this bucket.
     *
     * Generated from protobuf field <code>int64 value_frequency_lower_bound = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setValueFrequencyLowerBound($var)
    {
        GPBUtil::checkInt64($var);
        $this->value_frequency_lower_bound = $var;

        return $this;
    }

    /**
     * Upper bound on the value frequency of the values in this bucket.
     *
     * Generated from protobuf field <code>int64 value_frequency_upper_bound = 2;</code>
     * @return int|string
     */
    public function getValueFrequencyUpperBound()
    {
        return $this->value_frequency_upper_bound;
    }

    /**
     * Upper bound on the value frequency of the values in this bucket.
     *
     * Generated from protobuf field <code>int64 value_frequency_upper_bound = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setValueFrequencyUpperBound($var)
    {
        GPBUtil::checkInt64($var);
        $this->value_frequency_upper_bound = $var;

        return $this;
    }

    /**
     * Total number of values in this bucket.
     *
     * Generated from protobuf field <code>int64 bucket_size = 3;</code>
     * @return int|string
     */
    public function getBucketSize()
    {
        return $this->bucket_size;
    }

    /**
     * Total number of values in this bucket.
     *
     * Generated from protobuf field <code>int64 bucket_size = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBucketSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->bucket_size = $var;

        return $this;
    }

    /**
     * Sample of value frequencies in this bucket. The total number of
     * values returned per bucket is capped at 20.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.ValueFrequency bucket_values = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBucketValues()
    {
        return $this->bucket_values;
    }

    /**
     * Sample of value frequencies in this bucket. The total number of
     * values returned per bucket is capped at 20.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.ValueFrequency bucket_values = 4;</code>
     * @param \Google\Cloud\Dlp\V2\ValueFrequency[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBucketValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\ValueFrequency::class);
        $this->bucket_values = $arr;

        return $this;
    }

    /**
     * Total number of distinct values in this bucket.
     *
     * Generated from protobuf field <code>int64 bucket_value_count = 5;</code>
     * @return int|string
     */
    public function getBucketValueCount()
    {
        return $this->bucket_value_count;
    }

    /**
     * Total number of distinct values in this bucket.
     *
     * Generated from protobuf field <code>int64 bucket_value_count = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBucketValueCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->bucket_value_count = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CategoricalStatsHistogramBucket::class, \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails_CategoricalStatsResult_CategoricalStatsHistogramBucket::class);

