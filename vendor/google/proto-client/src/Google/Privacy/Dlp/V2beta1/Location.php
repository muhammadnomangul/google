<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies the location of a finding within its source item.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.Location</code>
 */
class Location extends \Google\Protobuf\Internal\Message
{
    /**
     * Zero-based byte offsets within a content item.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.Range byte_range = 1;</code>
     */
    private $byte_range = null;
    /**
     * Character offsets within a content item, included when content type
     * is a text. Default charset assumed to be UTF-8.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.Range codepoint_range = 2;</code>
     */
    private $codepoint_range = null;
    /**
     * Location within an image's pixels.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.ImageLocation image_boxes = 3;</code>
     */
    private $image_boxes;
    /**
     * Key of the finding.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.RecordKey record_key = 4;</code>
     */
    private $record_key = null;
    /**
     * Field id of the field containing the finding.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.FieldId field_id = 5;</code>
     */
    private $field_id = null;
    /**
     * Location within a `ContentItem.Table`.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.TableLocation table_location = 6;</code>
     */
    private $table_location = null;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * Zero-based byte offsets within a content item.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.Range byte_range = 1;</code>
     * @return \Google\Privacy\Dlp\V2beta1\Range
     */
    public function getByteRange()
    {
        return $this->byte_range;
    }

    /**
     * Zero-based byte offsets within a content item.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.Range byte_range = 1;</code>
     * @param \Google\Privacy\Dlp\V2beta1\Range $var
     * @return $this
     */
    public function setByteRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\Range::class);
        $this->byte_range = $var;

        return $this;
    }

    /**
     * Character offsets within a content item, included when content type
     * is a text. Default charset assumed to be UTF-8.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.Range codepoint_range = 2;</code>
     * @return \Google\Privacy\Dlp\V2beta1\Range
     */
    public function getCodepointRange()
    {
        return $this->codepoint_range;
    }

    /**
     * Character offsets within a content item, included when content type
     * is a text. Default charset assumed to be UTF-8.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.Range codepoint_range = 2;</code>
     * @param \Google\Privacy\Dlp\V2beta1\Range $var
     * @return $this
     */
    public function setCodepointRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\Range::class);
        $this->codepoint_range = $var;

        return $this;
    }

    /**
     * Location within an image's pixels.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.ImageLocation image_boxes = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImageBoxes()
    {
        return $this->image_boxes;
    }

    /**
     * Location within an image's pixels.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.ImageLocation image_boxes = 3;</code>
     * @param \Google\Privacy\Dlp\V2beta1\ImageLocation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImageBoxes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Privacy\Dlp\V2beta1\ImageLocation::class);
        $this->image_boxes = $arr;

        return $this;
    }

    /**
     * Key of the finding.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.RecordKey record_key = 4;</code>
     * @return \Google\Privacy\Dlp\V2beta1\RecordKey
     */
    public function getRecordKey()
    {
        return $this->record_key;
    }

    /**
     * Key of the finding.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.RecordKey record_key = 4;</code>
     * @param \Google\Privacy\Dlp\V2beta1\RecordKey $var
     * @return $this
     */
    public function setRecordKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\RecordKey::class);
        $this->record_key = $var;

        return $this;
    }

    /**
     * Field id of the field containing the finding.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.FieldId field_id = 5;</code>
     * @return \Google\Privacy\Dlp\V2beta1\FieldId
     */
    public function getFieldId()
    {
        return $this->field_id;
    }

    /**
     * Field id of the field containing the finding.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.FieldId field_id = 5;</code>
     * @param \Google\Privacy\Dlp\V2beta1\FieldId $var
     * @return $this
     */
    public function setFieldId($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\FieldId::class);
        $this->field_id = $var;

        return $this;
    }

    /**
     * Location within a `ContentItem.Table`.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.TableLocation table_location = 6;</code>
     * @return \Google\Privacy\Dlp\V2beta1\TableLocation
     */
    public function getTableLocation()
    {
        return $this->table_location;
    }

    /**
     * Location within a `ContentItem.Table`.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.TableLocation table_location = 6;</code>
     * @param \Google\Privacy\Dlp\V2beta1\TableLocation $var
     * @return $this
     */
    public function setTableLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\TableLocation::class);
        $this->table_location = $var;

        return $this;
    }

}

