<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/vulnerability.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Common Vulnerability Scoring System version 3.
 * For details, see https://www.first.org/cvss/specification-document
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.CVSSv3</code>
 */
class CVSSv3 extends \Google\Protobuf\Internal\Message
{
    /**
     * The base score is a function of the base metric scores.
     * https://www.first.org/cvss/specification-document#Base-Metrics
     *
     * Generated from protobuf field <code>float base_score = 1;</code>
     */
    private $base_score = 0.0;
    /**
     * The Exploitability sub-score equation is derived from the Base
     * Exploitability metrics.
     * https://www.first.org/cvss/specification-document#2-1-Exploitability-Metrics
     *
     * Generated from protobuf field <code>float exploitability_score = 2;</code>
     */
    private $exploitability_score = 0.0;
    /**
     * The Impact sub-score equation is derived from the Base Impact metrics.
     *
     * Generated from protobuf field <code>float impact_score = 3;</code>
     */
    private $impact_score = 0.0;
    /**
     * This metric reflects the context by which vulnerability exploitation is
     * possible.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.AttackVector attack_vector = 5;</code>
     */
    private $attack_vector = 0;
    /**
     * This metric describes the conditions beyond the attacker's control that
     * must exist in order to exploit the vulnerability.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.AttackComplexity attack_complexity = 6;</code>
     */
    private $attack_complexity = 0;
    /**
     * This metric describes the level of privileges an attacker must possess
     * before successfully exploiting the vulnerability.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.PrivilegesRequired privileges_required = 7;</code>
     */
    private $privileges_required = 0;
    /**
     * This metric captures the requirement for a human user, other than the
     * attacker, to participate in the successful compromise of the vulnerable
     * component.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.UserInteraction user_interaction = 8;</code>
     */
    private $user_interaction = 0;
    /**
     * The Scope metric captures whether a vulnerability in one vulnerable
     * component impacts resources in components beyond its security scope.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.Scope scope = 9;</code>
     */
    private $scope = 0;
    /**
     * This metric measures the impact to the confidentiality of the information
     * resources managed by a software component due to a successfully exploited
     * vulnerability.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.Impact confidentiality_impact = 10;</code>
     */
    private $confidentiality_impact = 0;
    /**
     * This metric measures the impact to integrity of a successfully exploited
     * vulnerability.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.Impact integrity_impact = 11;</code>
     */
    private $integrity_impact = 0;
    /**
     * This metric measures the impact to the availability of the impacted
     * component resulting from a successfully exploited vulnerability.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.Impact availability_impact = 12;</code>
     */
    private $availability_impact = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $base_score
     *           The base score is a function of the base metric scores.
     *           https://www.first.org/cvss/specification-document#Base-Metrics
     *     @type float $exploitability_score
     *           The Exploitability sub-score equation is derived from the Base
     *           Exploitability metrics.
     *           https://www.first.org/cvss/specification-document#2-1-Exploitability-Metrics
     *     @type float $impact_score
     *           The Impact sub-score equation is derived from the Base Impact metrics.
     *     @type int $attack_vector
     *           This metric reflects the context by which vulnerability exploitation is
     *           possible.
     *     @type int $attack_complexity
     *           This metric describes the conditions beyond the attacker's control that
     *           must exist in order to exploit the vulnerability.
     *     @type int $privileges_required
     *           This metric describes the level of privileges an attacker must possess
     *           before successfully exploiting the vulnerability.
     *     @type int $user_interaction
     *           This metric captures the requirement for a human user, other than the
     *           attacker, to participate in the successful compromise of the vulnerable
     *           component.
     *     @type int $scope
     *           The Scope metric captures whether a vulnerability in one vulnerable
     *           component impacts resources in components beyond its security scope.
     *     @type int $confidentiality_impact
     *           This metric measures the impact to the confidentiality of the information
     *           resources managed by a software component due to a successfully exploited
     *           vulnerability.
     *     @type int $integrity_impact
     *           This metric measures the impact to integrity of a successfully exploited
     *           vulnerability.
     *     @type int $availability_impact
     *           This metric measures the impact to the availability of the impacted
     *           component resulting from a successfully exploited vulnerability.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\Vulnerability::initOnce();
        parent::__construct($data);
    }

    /**
     * The base score is a function of the base metric scores.
     * https://www.first.org/cvss/specification-document#Base-Metrics
     *
     * Generated from protobuf field <code>float base_score = 1;</code>
     * @return float
     */
    public function getBaseScore()
    {
        return $this->base_score;
    }

    /**
     * The base score is a function of the base metric scores.
     * https://www.first.org/cvss/specification-document#Base-Metrics
     *
     * Generated from protobuf field <code>float base_score = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setBaseScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->base_score = $var;

        return $this;
    }

    /**
     * The Exploitability sub-score equation is derived from the Base
     * Exploitability metrics.
     * https://www.first.org/cvss/specification-document#2-1-Exploitability-Metrics
     *
     * Generated from protobuf field <code>float exploitability_score = 2;</code>
     * @return float
     */
    public function getExploitabilityScore()
    {
        return $this->exploitability_score;
    }

    /**
     * The Exploitability sub-score equation is derived from the Base
     * Exploitability metrics.
     * https://www.first.org/cvss/specification-document#2-1-Exploitability-Metrics
     *
     * Generated from protobuf field <code>float exploitability_score = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setExploitabilityScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->exploitability_score = $var;

        return $this;
    }

    /**
     * The Impact sub-score equation is derived from the Base Impact metrics.
     *
     * Generated from protobuf field <code>float impact_score = 3;</code>
     * @return float
     */
    public function getImpactScore()
    {
        return $this->impact_score;
    }

    /**
     * The Impact sub-score equation is derived from the Base Impact metrics.
     *
     * Generated from protobuf field <code>float impact_score = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setImpactScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->impact_score = $var;

        return $this;
    }

    /**
     * This metric reflects the context by which vulnerability exploitation is
     * possible.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.AttackVector attack_vector = 5;</code>
     * @return int
     */
    public function getAttackVector()
    {
        return $this->attack_vector;
    }

    /**
     * This metric reflects the context by which vulnerability exploitation is
     * possible.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.AttackVector attack_vector = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setAttackVector($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\CVSSv3\AttackVector::class);
        $this->attack_vector = $var;

        return $this;
    }

    /**
     * This metric describes the conditions beyond the attacker's control that
     * must exist in order to exploit the vulnerability.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.AttackComplexity attack_complexity = 6;</code>
     * @return int
     */
    public function getAttackComplexity()
    {
        return $this->attack_complexity;
    }

    /**
     * This metric describes the conditions beyond the attacker's control that
     * must exist in order to exploit the vulnerability.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.AttackComplexity attack_complexity = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setAttackComplexity($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\CVSSv3\AttackComplexity::class);
        $this->attack_complexity = $var;

        return $this;
    }

    /**
     * This metric describes the level of privileges an attacker must possess
     * before successfully exploiting the vulnerability.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.PrivilegesRequired privileges_required = 7;</code>
     * @return int
     */
    public function getPrivilegesRequired()
    {
        return $this->privileges_required;
    }

    /**
     * This metric describes the level of privileges an attacker must possess
     * before successfully exploiting the vulnerability.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.PrivilegesRequired privileges_required = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setPrivilegesRequired($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\CVSSv3\PrivilegesRequired::class);
        $this->privileges_required = $var;

        return $this;
    }

    /**
     * This metric captures the requirement for a human user, other than the
     * attacker, to participate in the successful compromise of the vulnerable
     * component.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.UserInteraction user_interaction = 8;</code>
     * @return int
     */
    public function getUserInteraction()
    {
        return $this->user_interaction;
    }

    /**
     * This metric captures the requirement for a human user, other than the
     * attacker, to participate in the successful compromise of the vulnerable
     * component.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.UserInteraction user_interaction = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setUserInteraction($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\CVSSv3\UserInteraction::class);
        $this->user_interaction = $var;

        return $this;
    }

    /**
     * The Scope metric captures whether a vulnerability in one vulnerable
     * component impacts resources in components beyond its security scope.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.Scope scope = 9;</code>
     * @return int
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * The Scope metric captures whether a vulnerability in one vulnerable
     * component impacts resources in components beyond its security scope.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.Scope scope = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\CVSSv3\Scope::class);
        $this->scope = $var;

        return $this;
    }

    /**
     * This metric measures the impact to the confidentiality of the information
     * resources managed by a software component due to a successfully exploited
     * vulnerability.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.Impact confidentiality_impact = 10;</code>
     * @return int
     */
    public function getConfidentialityImpact()
    {
        return $this->confidentiality_impact;
    }

    /**
     * This metric measures the impact to the confidentiality of the information
     * resources managed by a software component due to a successfully exploited
     * vulnerability.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.Impact confidentiality_impact = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setConfidentialityImpact($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\CVSSv3\Impact::class);
        $this->confidentiality_impact = $var;

        return $this;
    }

    /**
     * This metric measures the impact to integrity of a successfully exploited
     * vulnerability.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.Impact integrity_impact = 11;</code>
     * @return int
     */
    public function getIntegrityImpact()
    {
        return $this->integrity_impact;
    }

    /**
     * This metric measures the impact to integrity of a successfully exploited
     * vulnerability.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.Impact integrity_impact = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setIntegrityImpact($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\CVSSv3\Impact::class);
        $this->integrity_impact = $var;

        return $this;
    }

    /**
     * This metric measures the impact to the availability of the impacted
     * component resulting from a successfully exploited vulnerability.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.Impact availability_impact = 12;</code>
     * @return int
     */
    public function getAvailabilityImpact()
    {
        return $this->availability_impact;
    }

    /**
     * This metric measures the impact to the availability of the impacted
     * component resulting from a successfully exploited vulnerability.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.CVSSv3.Impact availability_impact = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setAvailabilityImpact($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\CVSSv3\Impact::class);
        $this->availability_impact = $var;

        return $this;
    }

}

