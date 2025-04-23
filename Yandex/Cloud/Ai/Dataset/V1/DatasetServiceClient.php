<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Yandex\Cloud\Ai\Dataset\V1;

/**
 * A set of methods for managing datasets.
 */
class DatasetServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns dataset information by dataset id.
     * @param \Yandex\Cloud\Ai\Dataset\V1\DescribeDatasetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Describe(\Yandex\Cloud\Ai\Dataset\V1\DescribeDatasetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.dataset.v1.DatasetService/Describe',
        $argument,
        ['\Yandex\Cloud\Ai\Dataset\V1\DescribeDatasetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Starts dataset validation process.
     * @param \Yandex\Cloud\Ai\Dataset\V1\ValidateDatasetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Validate(\Yandex\Cloud\Ai\Dataset\V1\ValidateDatasetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.dataset.v1.DatasetService/Validate',
        $argument,
        ['\Yandex\Cloud\Operation\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates dataset.
     * @param \Yandex\Cloud\Ai\Dataset\V1\CreateDatasetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Create(\Yandex\Cloud\Ai\Dataset\V1\CreateDatasetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.dataset.v1.DatasetService/Create',
        $argument,
        ['\Yandex\Cloud\Ai\Dataset\V1\CreateDatasetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates dataset.
     * @param \Yandex\Cloud\Ai\Dataset\V1\UpdateDatasetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Update(\Yandex\Cloud\Ai\Dataset\V1\UpdateDatasetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.dataset.v1.DatasetService/Update',
        $argument,
        ['\Yandex\Cloud\Ai\Dataset\V1\UpdateDatasetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes dataset.
     * @param \Yandex\Cloud\Ai\Dataset\V1\DeleteDatasetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Delete(\Yandex\Cloud\Ai\Dataset\V1\DeleteDatasetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.dataset.v1.DatasetService/Delete',
        $argument,
        ['\Yandex\Cloud\Ai\Dataset\V1\DeleteDatasetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists datasets in specified folder.
     * @param \Yandex\Cloud\Ai\Dataset\V1\ListDatasetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function List(\Yandex\Cloud\Ai\Dataset\V1\ListDatasetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.dataset.v1.DatasetService/List',
        $argument,
        ['\Yandex\Cloud\Ai\Dataset\V1\ListDatasetsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @deprecated
     * Deprecated. Use ListUploadSchemas.
     * @param \Yandex\Cloud\Ai\Dataset\V1\ListUploadFormatsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUploadFormats(\Yandex\Cloud\Ai\Dataset\V1\ListUploadFormatsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.dataset.v1.DatasetService/ListUploadFormats',
        $argument,
        ['\Yandex\Cloud\Ai\Dataset\V1\ListUploadFormatsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists supported dataset upload formats types and schemas for the specified dataset task type.
     * @param \Yandex\Cloud\Ai\Dataset\V1\ListUploadSchemasRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUploadSchemas(\Yandex\Cloud\Ai\Dataset\V1\ListUploadSchemasRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.dataset.v1.DatasetService/ListUploadSchemas',
        $argument,
        ['\Yandex\Cloud\Ai\Dataset\V1\ListUploadSchemasResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns an S3 presigned URL for dataset upload.
     * This method only applicable if the dataset size does not exceed 5GB.
     * @param \Yandex\Cloud\Ai\Dataset\V1\GetUploadDraftUrlRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUploadDraftUrl(\Yandex\Cloud\Ai\Dataset\V1\GetUploadDraftUrlRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.dataset.v1.DatasetService/GetUploadDraftUrl',
        $argument,
        ['\Yandex\Cloud\Ai\Dataset\V1\GetUploadDraftUrlResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get urls to download dataset
     * @param \Yandex\Cloud\Ai\Dataset\V1\GetDownloadUrlsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDownloadUrls(\Yandex\Cloud\Ai\Dataset\V1\GetDownloadUrlsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.dataset.v1.DatasetService/GetDownloadUrls',
        $argument,
        ['\Yandex\Cloud\Ai\Dataset\V1\GetDownloadUrlsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns a list of S3 presigned URLs for multipart upload of dataset.
     * @param \Yandex\Cloud\Ai\Dataset\V1\StartMultipartUploadDraftRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function StartMultipartUploadDraft(\Yandex\Cloud\Ai\Dataset\V1\StartMultipartUploadDraftRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.dataset.v1.DatasetService/StartMultipartUploadDraft',
        $argument,
        ['\Yandex\Cloud\Ai\Dataset\V1\StartMultipartUploadDraftResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Finishes multipart upload of the dataset.
     * @param \Yandex\Cloud\Ai\Dataset\V1\FinishMultipartUploadDraftRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FinishMultipartUploadDraft(\Yandex\Cloud\Ai\Dataset\V1\FinishMultipartUploadDraftRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.dataset.v1.DatasetService/FinishMultipartUploadDraft',
        $argument,
        ['\Yandex\Cloud\Ai\Dataset\V1\FinishMultipartUploadDraftResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns a list of dataset types
     * @param \Yandex\Cloud\Ai\Dataset\V1\ListTypesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListTypes(\Yandex\Cloud\Ai\Dataset\V1\ListTypesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.dataset.v1.DatasetService/ListTypes',
        $argument,
        ['\Yandex\Cloud\Ai\Dataset\V1\ListTypesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns a preview of dataset types
     * @param \Yandex\Cloud\Ai\Dataset\V1\GetDatasetPreviewRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPreview(\Yandex\Cloud\Ai\Dataset\V1\GetDatasetPreviewRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.dataset.v1.DatasetService/GetPreview',
        $argument,
        ['\Yandex\Cloud\Ai\Dataset\V1\GetDatasetPreviewResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yandex\Cloud\Ai\Dataset\V1\ListOperationsIdsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOperationsIds(\Yandex\Cloud\Ai\Dataset\V1\ListOperationsIdsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.dataset.v1.DatasetService/ListOperationsIds',
        $argument,
        ['\Yandex\Cloud\Ai\Dataset\V1\ListOperationsIdsResponse', 'decode'],
        $metadata, $options);
    }

}
