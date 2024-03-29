<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/text_sentiment.proto

namespace GPBMetadata\Google\Cloud\Automl\V1;

class TextSentiment
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\Classification::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
+google/cloud/automl/v1/text_sentiment.protogoogle.cloud.automl.v1+google/cloud/automl/v1/classification.proto",
TextSentimentAnnotation
	sentiment ("�
TextSentimentEvaluationMetrics
	precision (
recall (
f1_score (
mean_absolute_error (
mean_squared_error (
linear_kappa (
quadratic_kappa (a
confusion_matrix (2G.google.cloud.automl.v1.ClassificationEvaluationMetrics.ConfusionMatrixB�
com.google.cloud.automl.v1BTextSentimentProtoPZ<google.golang.org/genproto/googleapis/cloud/automl/v1;automl�Google.Cloud.AutoML.V1�Google\\Cloud\\AutoMl\\V1�Google::Cloud::AutoML::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

