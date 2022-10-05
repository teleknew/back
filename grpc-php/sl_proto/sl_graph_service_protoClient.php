<?php
// GENERATED CODE -- DO NOT EDIT!

/**
 */
class sl_graph_service_protoClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function create_graph(\Sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/create_graph',
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
    public function get_graph_list(\Sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_graph_list',
        $argument,
        ['\Sl_graph_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_graph(\Sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/delete_graph',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * encoder & decoder
     * @param \Sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_graph_input_device_list(\Sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_graph_input_device_list',
        $argument,
        ['\Sl_device_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_graph_output_device_list(\Sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_graph_output_device_list',
        $argument,
        ['\Sl_device_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_input_device_to_graph(\Sl_graph_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/add_input_device_to_graph',
        $argument,
        ['\Sl_device_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_input_device_from_graph(\Sl_graph_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/delete_input_device_from_graph',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_output_device_to_graph(\Sl_graph_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/add_output_device_to_graph',
        $argument,
        ['\Sl_device_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_output_device_from_graph(\Sl_graph_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/delete_output_device_from_graph',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_output_device_settings(\Sl_graph_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/set_output_device_settings',
        $argument,
        ['\Sl_device_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_input_program_list(\Sl_graph_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_input_program_list',
        $argument,
        ['\Sl_input_program_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_input_program_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_input_program_settings(\Sl_graph_input_program_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/set_input_program_settings',
        $argument,
        ['\Sl_input_program_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_input_program_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function clone_input_program(\Sl_graph_input_program_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/clone_input_program',
        $argument,
        ['\Sl_input_program_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_program_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_device_to_program(\Sl_graph_program_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/add_device_to_program',
        $argument,
        ['\Sl_output_program_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_program_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_device_from_program(\Sl_graph_program_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/delete_device_from_program',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_input_program_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_output_program_list_from_program(\Sl_graph_input_program_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_output_program_list_from_program',
        $argument,
        ['\Sl_output_program_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_output_program_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_output_program_settings(\Sl_graph_output_program_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/set_output_program_settings',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_program_encoder_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_encoder_to_program(\Sl_graph_program_encoder_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/add_encoder_to_program',
        $argument,
        ['\Sl_encoder_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_program_encoder_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_encoder_from_program(\Sl_graph_program_encoder_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/delete_encoder_from_program',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_input_program_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_encoder_list_from_program(\Sl_graph_input_program_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_encoder_list_from_program',
        $argument,
        ['\Sl_encoder_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_encoder_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_encoder_settings(\Sl_graph_encoder_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/set_encoder_settings',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_encoder_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_device_to_encoder(\Sl_graph_encoder_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/add_device_to_encoder',
        $argument,
        ['\Sl_output_program_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_encoder_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_device_from_encoder(\Sl_graph_encoder_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/delete_device_from_encoder',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_encoder_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_output_program_list_from_encoder(\Sl_graph_encoder_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_output_program_list_from_encoder',
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
    public function get_input_device_list(\Sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_input_device_list',
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
        return $this->_simpleRequest('/sl_graph_service_proto/get_output_device_list',
        $argument,
        ['\Sl_device_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function start_graph(\Sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/start_graph',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function stop_graph(\Sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/stop_graph',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function start_parsing(\Sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/start_parsing',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function is_parsing_ready(\Sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/is_parsing_ready',
        $argument,
        ['\Sl_parsing_state_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function stop_parsing(\Sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/stop_parsing',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_device_statistics(\Sl_graph_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_device_statistics',
        $argument,
        ['\Sl_statistics_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_encoder_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_encoder_statistics(\Sl_graph_encoder_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_encoder_statistics',
        $argument,
        ['\Sl_statistics_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_affinity_mask(\Sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_affinity_mask',
        $argument,
        ['\Sl_affinity_mask_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_affinity_mask_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_affinity_mask(\Sl_graph_affinity_mask_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/set_affinity_mask',
        $argument,
        ['\Sl_affinity_mask_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_graph_log(\Sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_graph_log',
        $argument,
        ['\Sl_log_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function clear_log(\Sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/clear_log',
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
    public function get_encoder_support(\Sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_encoder_support',
        $argument,
        ['\Sl_encoder_support_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * remuxer
     * @param \Sl_graph_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_remuxer_input_info(\Sl_graph_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_remuxer_input_info',
        $argument,
        ['\Sl_input_info_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_remuxer_reserve(\Sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_remuxer_reserve',
        $argument,
        ['\Sl_reserve_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_reserve_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_remuxer_reserve(\Sl_graph_reserve_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/set_remuxer_reserve',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * gochs
     * @param \Sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_remuxer_gochs(\Sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_remuxer_gochs',
        $argument,
        ['\Sl_reserve_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_reserve_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_remuxer_gochs(\Sl_graph_reserve_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/set_remuxer_gochs',
        $argument,
        ['\Sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_remuxer_model(\Sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_remuxer_model',
        $argument,
        ['\Sl_model_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_remuxer_model_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_remuxer_model(\Sl_graph_remuxer_model_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/set_remuxer_model',
        $argument,
        ['\Sl_model_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_remuxer_statistics(\Sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_remuxer_statistics',
        $argument,
        ['\Sl_statistics_proto', 'decode'],
        $metadata, $options);
    }

}
