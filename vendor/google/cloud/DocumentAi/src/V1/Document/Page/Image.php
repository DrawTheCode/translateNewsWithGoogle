<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document\Page;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Rendered image contents for this page.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.Page.Image</code>
 */
class Image extends \Google\Protobuf\Internal\Message
{
    /**
     * Raw byte content of the image.
     *
     * Generated from protobuf field <code>bytes content = 1;</code>
     */
    private $content = '';
    /**
     * Encoding mime type for the image.
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     */
    private $mime_type = '';
    /**
     * Width of the image in pixels.
     *
     * Generated from protobuf field <code>int32 width = 3;</code>
     */
    private $width = 0;
    /**
     * Height of the image in pixels.
     *
     * Generated from protobuf field <code>int32 height = 4;</code>
     */
    private $height = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $content
     *           Raw byte content of the image.
     *     @type string $mime_type
     *           Encoding mime type for the image.
     *     @type int $width
     *           Width of the image in pixels.
     *     @type int $height
     *           Height of the image in pixels.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Raw byte content of the image.
     *
     * Generated from protobuf field <code>bytes content = 1;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Raw byte content of the image.
     *
     * Generated from protobuf field <code>bytes content = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->content = $var;

        return $this;
    }

    /**
     * Encoding mime type for the image.
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * Encoding mime type for the image.
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * Width of the image in pixels.
     *
     * Generated from protobuf field <code>int32 width = 3;</code>
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Width of the image in pixels.
     *
     * Generated from protobuf field <code>int32 width = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkInt32($var);
        $this->width = $var;

        return $this;
    }

    /**
     * Height of the image in pixels.
     *
     * Generated from protobuf field <code>int32 height = 4;</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Height of the image in pixels.
     *
     * Generated from protobuf field <code>int32 height = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->height = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Image::class, \Google\Cloud\DocumentAI\V1\Document_Page_Image::class);

