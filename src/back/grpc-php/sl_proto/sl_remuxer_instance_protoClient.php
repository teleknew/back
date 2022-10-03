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
     * @param \Sl_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_input_device(\Sl_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/add_input_device',
        $argument,
        ['\Sl_device_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_input_device(\Sl_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/delete_input_device',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_input_device_list(\Sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_input_device_list',
        $argument,
        ['\Sl_device_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_output_device(\Sl_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/add_output_device',
        $argument,
        ['\Sl_device_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_output_device(\Sl_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/delete_output_device',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_output_device_list(\Sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_output_device_list',
        $argument,
        ['\Sl_device_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_device_statistics(\Sl_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_device_statistics',
        $argument,
        ['\Sl_statistics_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_input_info(\Sl_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_input_info',
        $argument,
        ['\Sl_input_info_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * reserve
     * @param \Sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_reserve_info(\Sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_reserve_info',
        $argument,
        ['\Sl_reserve_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_reserve_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_reserve_info(\Sl_reserve_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/set_reserve_info',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * gochs
     * @param \Sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_gochs_info(\Sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_gochs_info',
        $argument,
        ['\Sl_reserve_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_reserve_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_gochs_info(\Sl_reserve_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/set_gochs_info',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_model(\Sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_model',
        $argument,
        ['\Sl_model_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_model_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_model(\Sl_model_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/set_model',
        $argument,
        ['\Sl_model_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_state(\Sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_state',
        $argument,
        ['\Sl_graph_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function start(\Sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/start',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function stop(\Sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/stop',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_affinity_mask(\Sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_affinity_mask',
        $argument,
        ['\Sl_affinity_mask_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_affinity_mask_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_affinity_mask(\Sl_affinity_mask_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/set_affinity_mask',
        $argument,
        ['\Sl_affinity_mask_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_remuxer_statistics(\Sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_remuxer_instance_proto/get_remuxer_statistics',
        $argument,
        ['\Sl_statistics_proto', 'decode'],
        $metadata, $options);
    }

}
