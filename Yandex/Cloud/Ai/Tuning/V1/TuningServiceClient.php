<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Yandex\Cloud\Ai\Tuning\V1;

/**
 */
class TuningServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Yandex\Cloud\Ai\Tuning\V1\TuningRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Tune(\Yandex\Cloud\Ai\Tuning\V1\TuningRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.tuning.v1.TuningService/Tune',
        $argument,
        ['\Yandex\Cloud\Operation\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yandex\Cloud\Ai\Tuning\V1\ListTuningsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function List(\Yandex\Cloud\Ai\Tuning\V1\ListTuningsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.tuning.v1.TuningService/List',
        $argument,
        ['\Yandex\Cloud\Ai\Tuning\V1\ListTuningsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yandex\Cloud\Ai\Tuning\V1\DescribeTuningRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Describe(\Yandex\Cloud\Ai\Tuning\V1\DescribeTuningRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.tuning.v1.TuningService/Describe',
        $argument,
        ['\Yandex\Cloud\Ai\Tuning\V1\DescribeTuningResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yandex\Cloud\Ai\Tuning\V1\CancelTuningRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Cancel(\Yandex\Cloud\Ai\Tuning\V1\CancelTuningRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.tuning.v1.TuningService/Cancel',
        $argument,
        ['\Yandex\Cloud\Ai\Tuning\V1\CancelTuningResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yandex\Cloud\Ai\Tuning\V1\GetMetricsUrlRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMetricsUrl(\Yandex\Cloud\Ai\Tuning\V1\GetMetricsUrlRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.tuning.v1.TuningService/GetMetricsUrl',
        $argument,
        ['\Yandex\Cloud\Ai\Tuning\V1\GetMetricsUrlResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yandex\Cloud\Ai\Tuning\V1\GetOptionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOptions(\Yandex\Cloud\Ai\Tuning\V1\GetOptionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.tuning.v1.TuningService/GetOptions',
        $argument,
        ['\Yandex\Cloud\Ai\Tuning\V1\GetOptionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yandex\Cloud\Ai\Tuning\V1\ListErrorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListErrors(\Yandex\Cloud\Ai\Tuning\V1\ListErrorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.tuning.v1.TuningService/ListErrors',
        $argument,
        ['\Yandex\Cloud\Ai\Tuning\V1\ListErrorsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yandex\Cloud\Ai\Tuning\V1\CreateTuningDraftRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateDraft(\Yandex\Cloud\Ai\Tuning\V1\CreateTuningDraftRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.tuning.v1.TuningService/CreateDraft',
        $argument,
        ['\Yandex\Cloud\Ai\Tuning\V1\CreateTuningDraftResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yandex\Cloud\Ai\Tuning\V1\UpdateTuningDraftRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateDraft(\Yandex\Cloud\Ai\Tuning\V1\UpdateTuningDraftRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.tuning.v1.TuningService/UpdateDraft',
        $argument,
        ['\Yandex\Cloud\Ai\Tuning\V1\UpdateTuningDraftResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yandex\Cloud\Ai\Tuning\V1\DeleteTuningDraftRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteDraft(\Yandex\Cloud\Ai\Tuning\V1\DeleteTuningDraftRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.tuning.v1.TuningService/DeleteDraft',
        $argument,
        ['\Yandex\Cloud\Ai\Tuning\V1\DeleteTuningDraftResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Yandex\Cloud\Ai\Tuning\V1\TuneDraftRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TuneDraft(\Yandex\Cloud\Ai\Tuning\V1\TuneDraftRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.ai.tuning.v1.TuningService/TuneDraft',
        $argument,
        ['\Yandex\Cloud\Operation\Operation', 'decode'],
        $metadata, $options);
    }

}
