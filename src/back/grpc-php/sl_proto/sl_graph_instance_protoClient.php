<?php
// GENERATED CODE -- DO NOT EDIT!

/**
 */
class sl_graph_instance_protoClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function save_graph(\Sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/save_graph',
        $argument,
        ['\Sl_graph_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function load_graph(\Sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/load_graph',
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
        return $this->_simpleRequest('/sl_graph_instance_proto/get_input_device_list',
        $argument,
        ['\Sl_device_list_proto', 'decode'],
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
        return $this->_simpleRequest('/sl_graph_instance_proto/get_output_device_list',
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
    public function add_input_device(\Sl_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/add_input_device',
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
        return $this->_simpleRequest('/sl_graph_instance_proto/delete_input_device',
        $argument,
        ['\Sl_empty_proto', 'decode'],
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
        return $this->_simpleRequest('/sl_graph_instance_proto/add_output_device',
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
        return $this->_simpleRequest('/sl_graph_instance_proto/delete_output_device',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_output_device_settings(\Sl_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/set_output_device_settings',
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
    public function get_input_program_list(\Sl_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/get_input_program_list',
        $argument,
        ['\Sl_input_program_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_input_program_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_input_program_settings(\Sl_input_program_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/set_input_program_settings',
        $argument,
        ['\Sl_input_program_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_input_program_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function clone_input_program(\Sl_input_program_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/clone_input_program',
        $argument,
        ['\Sl_input_program_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_input_program_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_device_to_program(\Sl_input_program_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/add_device_to_program',
        $argument,
        ['\Sl_output_program_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_input_program_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_device_from_program(\Sl_input_program_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/delete_device_from_program',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_input_program_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_output_program_list_from_program(\Sl_input_program_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/get_output_program_list_from_program',
        $argument,
        ['\Sl_output_program_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_output_program_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_output_program_settings(\Sl_output_program_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/set_output_program_settings',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_input_program_encoder_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_encoder_to_program(\Sl_input_program_encoder_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/add_encoder_to_program',
        $argument,
        ['\Sl_encoder_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_input_program_encoder_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_encoder_from_program(\Sl_input_program_encoder_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/delete_encoder_from_program',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_input_program_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_encoder_list_from_program(\Sl_input_program_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/get_encoder_list_from_program',
        $argument,
        ['\Sl_encoder_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_encoder_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_encoder_settings(\Sl_encoder_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/set_encoder_settings',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_encoder_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_device_to_encoder(\Sl_encoder_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/add_device_to_encoder',
        $argument,
        ['\Sl_output_program_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_encoder_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_device_from_encoder(\Sl_encoder_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/delete_device_from_encoder',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_encoder_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_output_program_list_from_encoder(\Sl_encoder_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/get_output_program_list_from_encoder',
        $argument,
        ['\Sl_output_program_list_proto', 'decode'],
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
        return $this->_simpleRequest('/sl_graph_instance_proto/get_state',
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
        return $this->_simpleRequest('/sl_graph_instance_proto/start',
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
        return $this->_simpleRequest('/sl_graph_instance_proto/stop',
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
    public function start_parsing(\Sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/start_parsing',
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
    public function is_parsing_ready(\Sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/is_parsing_ready',
        $argument,
        ['\Sl_parsing_state_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_empty_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function stop_parsing(\Sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/stop_parsing',
        $argument,
        ['\Sl_empty_proto', 'decode'],
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
        return $this->_simpleRequest('/sl_graph_instance_proto/get_device_statistics',
        $argument,
        ['\Sl_statistics_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_encoder_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_encoder_statistics(\Sl_encoder_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_instance_proto/get_encoder_statistics',
        $argument,
        ['\Sl_statistics_proto', 'decode'],
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
        return $this->_simpleRequest('/sl_graph_instance_proto/get_affinity_mask',
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
        return $this->_simpleRequest('/sl_graph_instance_proto/set_affinity_mask',
        $argument,
        ['\Sl_affinity_mask_proto', 'decode'],
        $metadata, $options);
    }

}
