<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime_service.proto

namespace GPBMetadata\Google\Monitoring\V3;

class UptimeService
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
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Monitoring\V3\Uptime::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
)google/monitoring/v3/uptime_service.protogoogle.monitoring.v3google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.proto!google/monitoring/v3/uptime.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
ListUptimeCheckConfigsRequestC
parent (	B3�A�A-+monitoring.googleapis.com/UptimeCheckConfig
	page_size (

page_token (	"�
ListUptimeCheckConfigsResponseE
uptime_check_configs (2\'.google.monitoring.v3.UptimeCheckConfig
next_page_token (	

total_size ("`
GetUptimeCheckConfigRequestA
name (	B3�A�A-
+monitoring.googleapis.com/UptimeCheckConfig"�
CreateUptimeCheckConfigRequestC
parent (	B3�A�A-+monitoring.googleapis.com/UptimeCheckConfigI
uptime_check_config (2\'.google.monitoring.v3.UptimeCheckConfigB�A"�
UpdateUptimeCheckConfigRequest/
update_mask (2.google.protobuf.FieldMaskI
uptime_check_config (2\'.google.monitoring.v3.UptimeCheckConfigB�A"c
DeleteUptimeCheckConfigRequestA
name (	B3�A�A-
+monitoring.googleapis.com/UptimeCheckConfig"B
ListUptimeCheckIpsRequest
	page_size (

page_token (	"t
ListUptimeCheckIpsResponse=
uptime_check_ips (2#.google.monitoring.v3.UptimeCheckIp
next_page_token (	2�

UptimeCheckService�
ListUptimeCheckConfigs3.google.monitoring.v3.ListUptimeCheckConfigsRequest4.google.monitoring.v3.ListUptimeCheckConfigsResponse";���,*/v3/{parent=projects/*}/uptimeCheckConfigs�Aparent�
GetUptimeCheckConfig1.google.monitoring.v3.GetUptimeCheckConfigRequest\'.google.monitoring.v3.UptimeCheckConfig"9���,*/v3/{name=projects/*/uptimeCheckConfigs/*}�Aname�
CreateUptimeCheckConfig4.google.monitoring.v3.CreateUptimeCheckConfigRequest\'.google.monitoring.v3.UptimeCheckConfig"d���A"*/v3/{parent=projects/*}/uptimeCheckConfigs:uptime_check_config�Aparent,uptime_check_config�
UpdateUptimeCheckConfig4.google.monitoring.v3.UpdateUptimeCheckConfigRequest\'.google.monitoring.v3.UptimeCheckConfig"q���U2>/v3/{uptime_check_config.name=projects/*/uptimeCheckConfigs/*}:uptime_check_config�Auptime_check_config�
DeleteUptimeCheckConfig4.google.monitoring.v3.DeleteUptimeCheckConfigRequest.google.protobuf.Empty"9���,**/v3/{name=projects/*/uptimeCheckConfigs/*}�Aname�
ListUptimeCheckIps/.google.monitoring.v3.ListUptimeCheckIpsRequest0.google.monitoring.v3.ListUptimeCheckIpsResponse"���/v3/uptimeCheckIps��Amonitoring.googleapis.com�A�https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/monitoring,https://www.googleapis.com/auth/monitoring.readB�
com.google.monitoring.v3BUptimeServiceProtoPZ>google.golang.org/genproto/googleapis/monitoring/v3;monitoring�Google.Cloud.Monitoring.V3�Google\\Cloud\\Monitoring\\V3�Google::Cloud::Monitoring::V3bproto3'
        , true);

        static::$is_initialized = true;
    }
}
