<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: yandex/cloud/ai/tuning/v1/tuning_service.proto

namespace Yandex\Cloud\Ai\Tuning\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>yandex.cloud.ai.tuning.v1.GetMetricsUrlRequest</code>
 */
class GetMetricsUrlRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string task_id = 1 [(.yandex.cloud.required) = true];</code>
     */
    protected $task_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $task_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Yandex\Cloud\Ai\Tuning\V1\TuningService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string task_id = 1 [(.yandex.cloud.required) = true];</code>
     * @return string
     */
    public function getTaskId()
    {
        return $this->task_id;
    }

    /**
     * Generated from protobuf field <code>string task_id = 1 [(.yandex.cloud.required) = true];</code>
     * @param string $var
     * @return $this
     */
    public function setTaskId($var)
    {
        GPBUtil::checkString($var, True);
        $this->task_id = $var;

        return $this;
    }

}

