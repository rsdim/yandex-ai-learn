<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Yandex\Cloud\Operation;

/**
 * A set of methods for managing operations for asynchronous API requests.
 */
class OperationServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns the specified Operation resource.
     * @param \Yandex\Cloud\Operation\GetOperationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Get(\Yandex\Cloud\Operation\GetOperationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.operation.OperationService/Get',
        $argument,
        ['\Yandex\Cloud\Operation\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Cancels the specified operation.
     *
     * Note that currently Object Storage API does not support cancelling operations.
     * @param \Yandex\Cloud\Operation\CancelOperationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Cancel(\Yandex\Cloud\Operation\CancelOperationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/yandex.cloud.operation.OperationService/Cancel',
        $argument,
        ['\Yandex\Cloud\Operation\Operation', 'decode'],
        $metadata, $options);
    }

}
