<?php
// GENERATED CODE -- DO NOT EDIT!

/**
 */
class sl_remuxer_instance_protoClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \sl_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_input_device(\sl_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/add_input_device',
        $argument,
        ['\sl_device_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_input_device(\sl_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/delete_input_device',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_input_device_list(\sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_input_device_list',
        $argument,
        ['\sl_device_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_output_device(\sl_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/add_output_device',
        $argument,
        ['\sl_device_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_output_device(\sl_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/delete_output_device',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_output_device_list(\sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_output_device_list',
        $argument,
        ['\sl_device_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_device_statistics(\sl_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_device_statistics',
        $argument,
        ['\sl_statistics_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_input_info(\sl_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_input_info',
        $argument,
        ['\sl_input_info_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * reserve
     * @param \sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_reserve_info(\sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_reserve_info',
        $argument,
        ['\sl_reserve_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_reserve_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_reserve_info(\sl_reserve_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/set_reserve_info',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * gochs
     * @param \sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_gochs_info(\sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_gochs_info',
        $argument,
        ['\sl_reserve_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_reserve_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_gochs_info(\sl_reserve_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/set_gochs_info',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_model(\sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_model',
        $argument,
        ['\sl_model_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_model_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_model(\sl_model_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/set_model',
        $argument,
        ['\sl_model_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_state(\sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_state',
        $argument,
        ['\sl_graph_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function start(\sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/start',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function stop(\sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/stop',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_affinity_mask(\sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_affinity_mask',
        $argument,
        ['\sl_affinity_mask_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_affinity_mask_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_affinity_mask(\sl_affinity_mask_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/set_affinity_mask',
        $argument,
        ['\sl_affinity_mask_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_remuxer_statistics(\sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_remuxer_statistics',
        $argument,
        ['\sl_statistics_proto', 'decode'],
        $metadata, $options);
    }

}
