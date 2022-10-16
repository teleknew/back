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
     * @param \sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function create_graph(\sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/create_graph',
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
    public function get_graph_list(\sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_graph_list',
        $argument,
        ['\sl_graph_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_graph(\sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/delete_graph',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * encoder & decoder
     * @param \sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_graph_input_device_list(\sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_graph_input_device_list',
        $argument,
        ['\sl_device_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_graph_output_device_list(\sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_graph_output_device_list',
        $argument,
        ['\sl_device_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_input_device_to_graph(\sl_graph_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/add_input_device_to_graph',
        $argument,
        ['\sl_device_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_input_device_from_graph(\sl_graph_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/delete_input_device_from_graph',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_output_device_to_graph(\sl_graph_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/add_output_device_to_graph',
        $argument,
        ['\sl_device_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_output_device_from_graph(\sl_graph_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/delete_output_device_from_graph',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_output_device_settings(\sl_graph_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/set_output_device_settings',
        $argument,
        ['\sl_device_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_input_program_list(\sl_graph_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_input_program_list',
        $argument,
        ['\sl_input_program_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_input_program_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_input_program_settings(\sl_graph_input_program_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/set_input_program_settings',
        $argument,
        ['\sl_input_program_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_input_program_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function clone_input_program(\sl_graph_input_program_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/clone_input_program',
        $argument,
        ['\sl_input_program_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_program_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_device_to_program(\sl_graph_program_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/add_device_to_program',
        $argument,
        ['\sl_output_program_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_program_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_device_from_program(\sl_graph_program_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/delete_device_from_program',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_input_program_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_output_program_list_from_program(\sl_graph_input_program_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_output_program_list_from_program',
        $argument,
        ['\sl_output_program_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_output_program_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_output_program_settings(\sl_graph_output_program_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/set_output_program_settings',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_program_encoder_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_encoder_to_program(\sl_graph_program_encoder_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/add_encoder_to_program',
        $argument,
        ['\sl_encoder_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_program_encoder_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_encoder_from_program(\sl_graph_program_encoder_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/delete_encoder_from_program',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_input_program_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_encoder_list_from_program(\sl_graph_input_program_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_encoder_list_from_program',
        $argument,
        ['\sl_encoder_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_encoder_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_encoder_settings(\sl_graph_encoder_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/set_encoder_settings',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_encoder_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_device_to_encoder(\sl_graph_encoder_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/add_device_to_encoder',
        $argument,
        ['\sl_output_program_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_encoder_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_device_from_encoder(\sl_graph_encoder_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/delete_device_from_encoder',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_encoder_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_output_program_list_from_encoder(\sl_graph_encoder_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_output_program_list_from_encoder',
        $argument,
        ['\sl_output_program_list_proto', 'decode'],
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
        return $this->_simpleRequest('/sl_graph_service_proto/get_input_device_list',
        $argument,
        ['\sl_device_list_proto', 'decode'],
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
        return $this->_simpleRequest('/sl_graph_service_proto/get_output_device_list',
        $argument,
        ['\sl_device_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function start_graph(\sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/start_graph',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function stop_graph(\sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/stop_graph',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function start_parsing(\sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/start_parsing',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function is_parsing_ready(\sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/is_parsing_ready',
        $argument,
        ['\sl_parsing_state_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function stop_parsing(\sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/stop_parsing',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_device_statistics(\sl_graph_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_device_statistics',
        $argument,
        ['\sl_statistics_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_encoder_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_encoder_statistics(\sl_graph_encoder_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_encoder_statistics',
        $argument,
        ['\sl_statistics_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_affinity_mask(\sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_affinity_mask',
        $argument,
        ['\sl_affinity_mask_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_affinity_mask_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_affinity_mask(\sl_graph_affinity_mask_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/set_affinity_mask',
        $argument,
        ['\sl_affinity_mask_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_graph_log(\sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_graph_log',
        $argument,
        ['\sl_log_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function clear_log(\sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/clear_log',
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
    public function get_encoder_support(\sl_empty_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_encoder_support',
        $argument,
        ['\sl_encoder_support_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * remuxer
     * @param \sl_graph_device_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_remuxer_input_info(\sl_graph_device_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_remuxer_input_info',
        $argument,
        ['\sl_input_info_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_remuxer_reserve(\sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_remuxer_reserve',
        $argument,
        ['\sl_reserve_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_reserve_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_remuxer_reserve(\sl_graph_reserve_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/set_remuxer_reserve',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * gochs
     * @param \sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_remuxer_gochs(\sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_remuxer_gochs',
        $argument,
        ['\sl_reserve_list_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_reserve_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_remuxer_gochs(\sl_graph_reserve_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/set_remuxer_gochs',
        $argument,
        ['\sl_empty_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_remuxer_model(\sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_remuxer_model',
        $argument,
        ['\sl_model_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_remuxer_model_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_remuxer_model(\sl_graph_remuxer_model_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/set_remuxer_model',
        $argument,
        ['\sl_model_proto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \sl_graph_proto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_remuxer_statistics(\sl_graph_proto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl_graph_service_proto/get_remuxer_statistics',
        $argument,
        ['\sl_statistics_proto', 'decode'],
        $metadata, $options);
    }

}
