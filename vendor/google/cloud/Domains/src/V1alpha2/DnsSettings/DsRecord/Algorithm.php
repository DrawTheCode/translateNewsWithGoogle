<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1alpha2/domains.proto

namespace Google\Cloud\Domains\V1alpha2\DnsSettings\DsRecord;

use UnexpectedValueException;

/**
 * List of algorithms used to create a DNSKEY. Certain
 * algorithms are not supported for particular domains.
 *
 * Protobuf type <code>google.cloud.domains.v1alpha2.DnsSettings.DsRecord.Algorithm</code>
 */
class Algorithm
{
    /**
     * The algorithm is unspecified.
     *
     * Generated from protobuf enum <code>ALGORITHM_UNSPECIFIED = 0;</code>
     */
    const ALGORITHM_UNSPECIFIED = 0;
    /**
     * RSA/MD5. Cannot be used for new deployments.
     *
     * Generated from protobuf enum <code>RSAMD5 = 1;</code>
     */
    const RSAMD5 = 1;
    /**
     * Diffie-Hellman. Cannot be used for new deployments.
     *
     * Generated from protobuf enum <code>DH = 2;</code>
     */
    const DH = 2;
    /**
     * DSA/SHA1. Not recommended for new deployments.
     *
     * Generated from protobuf enum <code>DSA = 3;</code>
     */
    const DSA = 3;
    /**
     * ECC. Not recommended for new deployments.
     *
     * Generated from protobuf enum <code>ECC = 4;</code>
     */
    const ECC = 4;
    /**
     * RSA/SHA-1. Not recommended for new deployments.
     *
     * Generated from protobuf enum <code>RSASHA1 = 5;</code>
     */
    const RSASHA1 = 5;
    /**
     * DSA-NSEC3-SHA1. Not recommended for new deployments.
     *
     * Generated from protobuf enum <code>DSANSEC3SHA1 = 6;</code>
     */
    const DSANSEC3SHA1 = 6;
    /**
     * RSA/SHA1-NSEC3-SHA1. Not recommended for new deployments.
     *
     * Generated from protobuf enum <code>RSASHA1NSEC3SHA1 = 7;</code>
     */
    const RSASHA1NSEC3SHA1 = 7;
    /**
     * RSA/SHA-256.
     *
     * Generated from protobuf enum <code>RSASHA256 = 8;</code>
     */
    const RSASHA256 = 8;
    /**
     * RSA/SHA-512.
     *
     * Generated from protobuf enum <code>RSASHA512 = 10;</code>
     */
    const RSASHA512 = 10;
    /**
     * GOST R 34.10-2001.
     *
     * Generated from protobuf enum <code>ECCGOST = 12;</code>
     */
    const ECCGOST = 12;
    /**
     * ECDSA Curve P-256 with SHA-256.
     *
     * Generated from protobuf enum <code>ECDSAP256SHA256 = 13;</code>
     */
    const ECDSAP256SHA256 = 13;
    /**
     * ECDSA Curve P-384 with SHA-384.
     *
     * Generated from protobuf enum <code>ECDSAP384SHA384 = 14;</code>
     */
    const ECDSAP384SHA384 = 14;
    /**
     * Ed25519.
     *
     * Generated from protobuf enum <code>ED25519 = 15;</code>
     */
    const ED25519 = 15;
    /**
     * Ed448.
     *
     * Generated from protobuf enum <code>ED448 = 16;</code>
     */
    const ED448 = 16;
    /**
     * Reserved for Indirect Keys. Cannot be used for new deployments.
     *
     * Generated from protobuf enum <code>INDIRECT = 252;</code>
     */
    const INDIRECT = 252;
    /**
     * Private algorithm. Cannot be used for new deployments.
     *
     * Generated from protobuf enum <code>PRIVATEDNS = 253;</code>
     */
    const PRIVATEDNS = 253;
    /**
     * Private algorithm OID. Cannot be used for new deployments.
     *
     * Generated from protobuf enum <code>PRIVATEOID = 254;</code>
     */
    const PRIVATEOID = 254;

    private static $valueToName = [
        self::ALGORITHM_UNSPECIFIED => 'ALGORITHM_UNSPECIFIED',
        self::RSAMD5 => 'RSAMD5',
        self::DH => 'DH',
        self::DSA => 'DSA',
        self::ECC => 'ECC',
        self::RSASHA1 => 'RSASHA1',
        self::DSANSEC3SHA1 => 'DSANSEC3SHA1',
        self::RSASHA1NSEC3SHA1 => 'RSASHA1NSEC3SHA1',
        self::RSASHA256 => 'RSASHA256',
        self::RSASHA512 => 'RSASHA512',
        self::ECCGOST => 'ECCGOST',
        self::ECDSAP256SHA256 => 'ECDSAP256SHA256',
        self::ECDSAP384SHA384 => 'ECDSAP384SHA384',
        self::ED25519 => 'ED25519',
        self::ED448 => 'ED448',
        self::INDIRECT => 'INDIRECT',
        self::PRIVATEDNS => 'PRIVATEDNS',
        self::PRIVATEOID => 'PRIVATEOID',
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

