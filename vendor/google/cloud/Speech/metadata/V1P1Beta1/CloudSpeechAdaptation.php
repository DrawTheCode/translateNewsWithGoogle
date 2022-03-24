<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1p1beta1/cloud_speech_adaptation.proto

namespace GPBMetadata\Google\Cloud\Speech\V1P1Beta1;

class CloudSpeechAdaptation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Speech\V1P1Beta1\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
;google/cloud/speech/v1p1beta1/cloud_speech_adaptation.protogoogle.cloud.speech.v1p1beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto,google/cloud/speech/v1p1beta1/resource.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
CreatePhraseSetRequest7
parent (	B\'�A�A!speech.googleapis.com/PhraseSet


phrase_set (2(.google.cloud.speech.v1p1beta1.PhraseSetB�A"�
UpdatePhraseSetRequestA

phrase_set (2(.google.cloud.speech.v1p1beta1.PhraseSetB�A/
update_mask (2.google.protobuf.FieldMask"L
GetPhraseSetRequest5
name (	B\'�A�A!
speech.googleapis.com/PhraseSet"v
ListPhraseSetRequest7
parent (	B\'�A�A!speech.googleapis.com/PhraseSet
	page_size (

page_token (	"o
ListPhraseSetResponse=
phrase_sets (2(.google.cloud.speech.v1p1beta1.PhraseSet
next_page_token (	"O
DeletePhraseSetRequest5
name (	B\'�A�A!
speech.googleapis.com/PhraseSet"�
CreateCustomClassRequest9
parent (	B)�A�A#!speech.googleapis.com/CustomClass
custom_class_id (	B�AE
custom_class (2*.google.cloud.speech.v1p1beta1.CustomClassB�A"�
UpdateCustomClassRequestE
custom_class (2*.google.cloud.speech.v1p1beta1.CustomClassB�A/
update_mask (2.google.protobuf.FieldMask"P
GetCustomClassRequest7
name (	B)�A�A#
!speech.googleapis.com/CustomClass"|
ListCustomClassesRequest9
parent (	B)�A�A#!speech.googleapis.com/CustomClass
	page_size (

page_token (	"x
ListCustomClassesResponseB
custom_classes (2*.google.cloud.speech.v1p1beta1.CustomClass
next_page_token (	"S
DeleteCustomClassRequest7
name (	B)�A�A#
!speech.googleapis.com/CustomClass2�

Adaptation�
CreatePhraseSet5.google.cloud.speech.v1p1beta1.CreatePhraseSetRequest(.google.cloud.speech.v1p1beta1.PhraseSet"b���:"5/v1p1beta1/{parent=projects/*/locations/*}/phraseSets:*�Aparent,phrase_set,phrase_set_id�
GetPhraseSet2.google.cloud.speech.v1p1beta1.GetPhraseSetRequest(.google.cloud.speech.v1p1beta1.PhraseSet"D���75/v1p1beta1/{name=projects/*/locations/*/phraseSets/*}�Aname�

UpdatePhraseSet5.google.cloud.speech.v1p1beta1.UpdatePhraseSetRequest(.google.cloud.speech.v1p1beta1.PhraseSet"m���N2@/v1p1beta1/{phrase_set.name=projects/*/locations/*/phraseSets/*}:
phrase_set�Aphrase_set,update_mask�
DeletePhraseSet5.google.cloud.speech.v1p1beta1.DeletePhraseSetRequest.google.protobuf.Empty"D���7*5/v1p1beta1/{name=projects/*/locations/*/phraseSets/*}�Aname�
CreateCustomClass7.google.cloud.speech.v1p1beta1.CreateCustomClassRequest*.google.cloud.speech.v1p1beta1.CustomClass"i���="8/v1p1beta1/{parent=projects/*/locations/*}/customClasses:*�A#parent,custom_class,custom_class_id�
GetCustomClass4.google.cloud.speech.v1p1beta1.GetCustomClassRequest*.google.cloud.speech.v1p1beta1.CustomClass"G���:8/v1p1beta1/{name=projects/*/locations/*/customClasses/*}�Aname�
ListCustomClasses7.google.cloud.speech.v1p1beta1.ListCustomClassesRequest8.google.cloud.speech.v1p1beta1.ListCustomClassesResponse"I���:8/v1p1beta1/{parent=projects/*/locations/*}/customClasses�Aparent�
UpdateCustomClass7.google.cloud.speech.v1p1beta1.UpdateCustomClassRequest*.google.cloud.speech.v1p1beta1.CustomClass"v���U2E/v1p1beta1/{custom_class.name=projects/*/locations/*/customClasses/*}:custom_class�Acustom_class,update_mask�
DeleteCustomClass7.google.cloud.speech.v1p1beta1.DeleteCustomClassRequest.google.protobuf.Empty"G���:*8/v1p1beta1/{name=projects/*/locations/*/customClasses/*}�AnameI�Aspeech.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
!com.google.cloud.speech.v1p1beta1BSpeechAdaptationProtoPZCgoogle.golang.org/genproto/googleapis/cloud/speech/v1p1beta1;speech��GCSbproto3'
        , true);

        static::$is_initialized = true;
    }
}
