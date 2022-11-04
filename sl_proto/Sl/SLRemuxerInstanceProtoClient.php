<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Sl;

/**
 */
class SLRemuxerInstanceProtoClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Sl\SLDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_input_device(\Sl\SLDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/add_input_device',
        $argument,
        ['\Sl\SLDeviceProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_input_device(\Sl\SLDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/delete_input_device',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLEmptyProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_input_device_list(\Sl\SLEmptyProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/get_input_device_list',
        $argument,
        ['\Sl\SLDeviceListProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_output_device(\Sl\SLDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/add_output_device',
        $argument,
        ['\Sl\SLDeviceProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_output_device(\Sl\SLDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/delete_output_device',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLEmptyProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_output_device_list(\Sl\SLEmptyProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/get_output_device_list',
        $argument,
        ['\Sl\SLDeviceListProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_device_statistics(\Sl\SLDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/get_device_statistics',
        $argument,
        ['\Sl\SLStatisticsProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_input_info(\Sl\SLDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/get_input_info',
        $argument,
        ['\Sl\SLInputInfoProto', 'decode'],
        $metadata, $options);
    }

    /**
     * reserve
     * @param \Sl\SLEmptyProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_reserve_info(\Sl\SLEmptyProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/get_reserve_info',
        $argument,
        ['\Sl\SLReserveListProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLReserveProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_reserve_info(\Sl\SLReserveProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/set_reserve_info',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * gochs
     * @param \Sl\SLEmptyProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_gochs_info(\Sl\SLEmptyProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/get_gochs_info',
        $argument,
        ['\Sl\SLReserveListProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLReserveProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_gochs_info(\Sl\SLReserveProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/set_gochs_info',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLEmptyProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_model(\Sl\SLEmptyProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/get_model',
        $argument,
        ['\Sl\SLModelProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLModelProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_model(\Sl\SLModelProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/set_model',
        $argument,
        ['\Sl\SLModelProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLEmptyProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_state(\Sl\SLEmptyProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/get_state',
        $argument,
        ['\Sl\SLGraphProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLEmptyProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function start(\Sl\SLEmptyProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/start',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLEmptyProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function stop(\Sl\SLEmptyProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/stop',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLEmptyProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_affinity_mask(\Sl\SLEmptyProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/get_affinity_mask',
        $argument,
        ['\Sl\SLAffinityMaskProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLAffinityMaskProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_affinity_mask(\Sl\SLAffinityMaskProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/set_affinity_mask',
        $argument,
        ['\Sl\SLAffinityMaskProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLEmptyProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_remuxer_statistics(\Sl\SLEmptyProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLRemuxerInstanceProto/get_remuxer_statistics',
        $argument,
        ['\Sl\SLStatisticsProto', 'decode'],
        $metadata, $options);
    }

}
