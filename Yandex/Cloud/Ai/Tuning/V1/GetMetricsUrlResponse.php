<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: yandex/cloud/ai/tuning/v1/tuning_service.proto

namespace Yandex\Cloud\Ai\Tuning\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>yandex.cloud.ai.tuning.v1.GetMetricsUrlResponse</code>
 */
class GetMetricsUrlResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string load_url = 1;</code>
     */
    protected $load_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $load_url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Yandex\Cloud\Ai\Tuning\V1\TuningService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string load_url = 1;</code>
     * @return string
     */
    public function getLoadUrl()
    {
        return $this->load_url;
    }

    /**
     * Generated from protobuf field <code>string load_url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLoadUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->load_url = $var;

        return $this;
    }

}

