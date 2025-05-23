<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: yandex/cloud/ai/dataset/v1/dataset_service.proto

namespace Yandex\Cloud\Ai\Dataset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>yandex.cloud.ai.dataset.v1.StartMultipartUploadDraftRequest</code>
 */
class StartMultipartUploadDraftRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the dataset to multipart upload.
     *
     * Generated from protobuf field <code>string dataset_id = 1 [(.yandex.cloud.required) = true];</code>
     */
    protected $dataset_id = '';
    /**
     * Size in bytes of the dataset to upload.
     *
     * Generated from protobuf field <code>int64 size_bytes = 2 [(.yandex.cloud.value) = ">0"];</code>
     */
    protected $size_bytes = 0;
    /**
     * Number of parts in multipart upload. Optional.
     * Dataset's part size should be between 5MB and 5GB.
     * If not specified will be configured automatically.
     *
     * Generated from protobuf field <code>int64 parts = 3;</code>
     */
    protected $parts = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dataset_id
     *           ID of the dataset to multipart upload.
     *     @type int|string $size_bytes
     *           Size in bytes of the dataset to upload.
     *     @type int|string $parts
     *           Number of parts in multipart upload. Optional.
     *           Dataset's part size should be between 5MB and 5GB.
     *           If not specified will be configured automatically.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Yandex\Cloud\Ai\Dataset\V1\DatasetService::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of the dataset to multipart upload.
     *
     * Generated from protobuf field <code>string dataset_id = 1 [(.yandex.cloud.required) = true];</code>
     * @return string
     */
    public function getDatasetId()
    {
        return $this->dataset_id;
    }

    /**
     * ID of the dataset to multipart upload.
     *
     * Generated from protobuf field <code>string dataset_id = 1 [(.yandex.cloud.required) = true];</code>
     * @param string $var
     * @return $this
     */
    public function setDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_id = $var;

        return $this;
    }

    /**
     * Size in bytes of the dataset to upload.
     *
     * Generated from protobuf field <code>int64 size_bytes = 2 [(.yandex.cloud.value) = ">0"];</code>
     * @return int|string
     */
    public function getSizeBytes()
    {
        return $this->size_bytes;
    }

    /**
     * Size in bytes of the dataset to upload.
     *
     * Generated from protobuf field <code>int64 size_bytes = 2 [(.yandex.cloud.value) = ">0"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSizeBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->size_bytes = $var;

        return $this;
    }

    /**
     * Number of parts in multipart upload. Optional.
     * Dataset's part size should be between 5MB and 5GB.
     * If not specified will be configured automatically.
     *
     * Generated from protobuf field <code>int64 parts = 3;</code>
     * @return int|string
     */
    public function getParts()
    {
        return $this->parts;
    }

    /**
     * Number of parts in multipart upload. Optional.
     * Dataset's part size should be between 5MB and 5GB.
     * If not specified will be configured automatically.
     *
     * Generated from protobuf field <code>int64 parts = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setParts($var)
    {
        GPBUtil::checkInt64($var);
        $this->parts = $var;

        return $this;
    }

}

