<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: yandex/cloud/ai/tuning/v1/tuning_service.proto

namespace Yandex\Cloud\Ai\Tuning\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>yandex.cloud.ai.tuning.v1.ListErrorsResponse</code>
 */
class ListErrorsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .yandex.cloud.ai.tuning.v1.TuningError tuning_error = 1;</code>
     */
    private $tuning_error;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Yandex\Cloud\Ai\Tuning\V1\TuningError>|\Google\Protobuf\Internal\RepeatedField $tuning_error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Yandex\Cloud\Ai\Tuning\V1\TuningService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .yandex.cloud.ai.tuning.v1.TuningError tuning_error = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTuningError()
    {
        return $this->tuning_error;
    }

    /**
     * Generated from protobuf field <code>repeated .yandex.cloud.ai.tuning.v1.TuningError tuning_error = 1;</code>
     * @param array<\Yandex\Cloud\Ai\Tuning\V1\TuningError>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTuningError($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Yandex\Cloud\Ai\Tuning\V1\TuningError::class);
        $this->tuning_error = $arr;

        return $this;
    }

}

