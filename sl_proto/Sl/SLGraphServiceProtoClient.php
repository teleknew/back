<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Sl;

/**
 */
class SLGraphServiceProtoClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Sl\SLGraphProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function create_graph(\Sl\SLGraphProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/create_graph',
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
    public function get_graph_list(\Sl\SLEmptyProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_graph_list',
        $argument,
        ['\Sl\SLGraphListProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_graph(\Sl\SLGraphProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/delete_graph',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * encoder & decoder
     * @param \Sl\SLGraphProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_graph_input_device_list(\Sl\SLGraphProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_graph_input_device_list',
        $argument,
        ['\Sl\SLDeviceListProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_graph_output_device_list(\Sl\SLGraphProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_graph_output_device_list',
        $argument,
        ['\Sl\SLDeviceListProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_input_device_to_graph(\Sl\SLGraphDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/add_input_device_to_graph',
        $argument,
        ['\Sl\SLDeviceProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_input_device_from_graph(\Sl\SLGraphDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/delete_input_device_from_graph',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_output_device_to_graph(\Sl\SLGraphDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/add_output_device_to_graph',
        $argument,
        ['\Sl\SLDeviceProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_output_device_from_graph(\Sl\SLGraphDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/delete_output_device_from_graph',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_output_device_settings(\Sl\SLGraphDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/set_output_device_settings',
        $argument,
        ['\Sl\SLDeviceProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_input_program_list(\Sl\SLGraphDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_input_program_list',
        $argument,
        ['\Sl\SLInputProgramListProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphInputProgramProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_input_program_settings(\Sl\SLGraphInputProgramProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/set_input_program_settings',
        $argument,
        ['\Sl\SLInputProgramProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphInputProgramProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function clone_input_program(\Sl\SLGraphInputProgramProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/clone_input_program',
        $argument,
        ['\Sl\SLInputProgramProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphProgramDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_device_to_program(\Sl\SLGraphProgramDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/add_device_to_program',
        $argument,
        ['\Sl\SLOutputProgramProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphProgramDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_device_from_program(\Sl\SLGraphProgramDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/delete_device_from_program',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphInputProgramProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_output_program_list_from_program(\Sl\SLGraphInputProgramProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_output_program_list_from_program',
        $argument,
        ['\Sl\SLOutputProgramListProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphOutputProgramProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_output_program_settings(\Sl\SLGraphOutputProgramProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/set_output_program_settings',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphProgramEncoderProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_encoder_to_program(\Sl\SLGraphProgramEncoderProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/add_encoder_to_program',
        $argument,
        ['\Sl\SLEncoderProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphProgramEncoderProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_encoder_from_program(\Sl\SLGraphProgramEncoderProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/delete_encoder_from_program',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphInputProgramProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_encoder_list_from_program(\Sl\SLGraphInputProgramProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_encoder_list_from_program',
        $argument,
        ['\Sl\SLEncoderListProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphEncoderProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_encoder_settings(\Sl\SLGraphEncoderProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/set_encoder_settings',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphEncoderDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_device_to_encoder(\Sl\SLGraphEncoderDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/add_device_to_encoder',
        $argument,
        ['\Sl\SLOutputProgramProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphEncoderDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_device_from_encoder(\Sl\SLGraphEncoderDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/delete_device_from_encoder',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphEncoderProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_output_program_list_from_encoder(\Sl\SLGraphEncoderProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_output_program_list_from_encoder',
        $argument,
        ['\Sl\SLOutputProgramListProto', 'decode'],
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
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_input_device_list',
        $argument,
        ['\Sl\SLDeviceListProto', 'decode'],
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
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_output_device_list',
        $argument,
        ['\Sl\SLDeviceListProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function start_graph(\Sl\SLGraphProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/start_graph',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function stop_graph(\Sl\SLGraphProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/stop_graph',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function start_parsing(\Sl\SLGraphProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/start_parsing',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function is_parsing_ready(\Sl\SLGraphProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/is_parsing_ready',
        $argument,
        ['\Sl\SLParsingStateProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function stop_parsing(\Sl\SLGraphProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/stop_parsing',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_device_statistics(\Sl\SLGraphDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_device_statistics',
        $argument,
        ['\Sl\SLStatisticsProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphEncoderProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_encoder_statistics(\Sl\SLGraphEncoderProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_encoder_statistics',
        $argument,
        ['\Sl\SLStatisticsProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_affinity_mask(\Sl\SLGraphProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_affinity_mask',
        $argument,
        ['\Sl\SLAffinityMaskProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphAffinityMaskProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_affinity_mask(\Sl\SLGraphAffinityMaskProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/set_affinity_mask',
        $argument,
        ['\Sl\SLAffinityMaskProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_graph_log(\Sl\SLGraphProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_graph_log',
        $argument,
        ['\Sl\SLLogProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function clear_log(\Sl\SLGraphProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/clear_log',
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
    public function get_encoder_support(\Sl\SLEmptyProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_encoder_support',
        $argument,
        ['\Sl\SLEncoderSupportProto', 'decode'],
        $metadata, $options);
    }

    /**
     * remuxer
     * @param \Sl\SLGraphDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_remuxer_input_info(\Sl\SLGraphDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_remuxer_input_info',
        $argument,
        ['\Sl\SLInputInfoProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_remuxer_reserve(\Sl\SLGraphProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_remuxer_reserve',
        $argument,
        ['\Sl\SLReserveListProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphReserveProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_remuxer_reserve(\Sl\SLGraphReserveProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/set_remuxer_reserve',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * gochs
     * @param \Sl\SLGraphProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_remuxer_gochs(\Sl\SLGraphProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_remuxer_gochs',
        $argument,
        ['\Sl\SLReserveListProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphReserveProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_remuxer_gochs(\Sl\SLGraphReserveProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/set_remuxer_gochs',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_remuxer_model(\Sl\SLGraphProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_remuxer_model',
        $argument,
        ['\Sl\SLModelProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphRemuxerModelProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_remuxer_model(\Sl\SLGraphRemuxerModelProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/set_remuxer_model',
        $argument,
        ['\Sl\SLModelProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_remuxer_statistics(\Sl\SLGraphProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphServiceProto/get_remuxer_statistics',
        $argument,
        ['\Sl\SLStatisticsProto', 'decode'],
        $metadata, $options);
    }

}
