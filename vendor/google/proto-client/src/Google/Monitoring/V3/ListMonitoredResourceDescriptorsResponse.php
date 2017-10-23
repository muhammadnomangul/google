<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric_service.proto

namespace Google\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `ListMonitoredResourcDescriptors` response.
 *
 * Generated from protobuf message <code>google.monitoring.v3.ListMonitoredResourceDescriptorsResponse</code>
 */
class ListMonitoredResourceDescriptorsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The monitored resource descriptors that are available to this project
     * and that match `filter`, if present.
     *
     * Generated from protobuf field <code>repeated .google.api.MonitoredResourceDescriptor resource_descriptors = 1;</code>
     */
    private $resource_descriptors;
    /**
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `pageToken` in the next call to this method.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Monitoring\V3\MetricService::initOnce();
        parent::__construct();
    }

    /**
     * The monitored resource descriptors that are available to this project
     * and that match `filter`, if present.
     *
     * Generated from protobuf field <code>repeated .google.api.MonitoredResourceDescriptor resource_descriptors = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourceDescriptors()
    {
        return $this->resource_descriptors;
    }

    /**
     * The monitored resource descriptors that are available to this project
     * and that match `filter`, if present.
     *
     * Generated from protobuf field <code>repeated .google.api.MonitoredResourceDescriptor resource_descriptors = 1;</code>
     * @param \Google\Api\MonitoredResourceDescriptor[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourceDescriptors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\MonitoredResourceDescriptor::class);
        $this->resource_descriptors = $arr;

        return $this;
    }

    /**
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `pageToken` in the next call to this method.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `pageToken` in the next call to this method.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

