<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Sl;

/**
 */
class SLGraphInstanceProtoClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Sl\SLEmptyProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function save_graph(\Sl\SLEmptyProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/save_graph',
        $argument,
        ['\Sl\SLGraphProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLGraphProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function load_graph(\Sl\SLGraphProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/load_graph',
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
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/get_input_device_list',
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
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/get_output_device_list',
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
    public function add_input_device(\Sl\SLDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/add_input_device',
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
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/delete_input_device',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
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
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/add_output_device',
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
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/delete_output_device',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_output_device_settings(\Sl\SLDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/set_output_device_settings',
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
    public function get_input_program_list(\Sl\SLDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/get_input_program_list',
        $argument,
        ['\Sl\SLInputProgramListProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLInputProgramProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_input_program_settings(\Sl\SLInputProgramProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/set_input_program_settings',
        $argument,
        ['\Sl\SLInputProgramProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLInputProgramProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function clone_input_program(\Sl\SLInputProgramProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/clone_input_program',
        $argument,
        ['\Sl\SLInputProgramProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLInputProgramDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_device_to_program(\Sl\SLInputProgramDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/add_device_to_program',
        $argument,
        ['\Sl\SLOutputProgramProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLInputProgramDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_device_from_program(\Sl\SLInputProgramDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/delete_device_from_program',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLInputProgramProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_output_program_list_from_program(\Sl\SLInputProgramProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/get_output_program_list_from_program',
        $argument,
        ['\Sl\SLOutputProgramListProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLOutputProgramProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_output_program_settings(\Sl\SLOutputProgramProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/set_output_program_settings',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLInputProgramEncoderProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_encoder_to_program(\Sl\SLInputProgramEncoderProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/add_encoder_to_program',
        $argument,
        ['\Sl\SLEncoderProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLInputProgramEncoderProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_encoder_from_program(\Sl\SLInputProgramEncoderProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/delete_encoder_from_program',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLInputProgramProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_encoder_list_from_program(\Sl\SLInputProgramProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/get_encoder_list_from_program',
        $argument,
        ['\Sl\SLEncoderListProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLEncoderProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function set_encoder_settings(\Sl\SLEncoderProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/set_encoder_settings',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLEncoderDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function add_device_to_encoder(\Sl\SLEncoderDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/add_device_to_encoder',
        $argument,
        ['\Sl\SLOutputProgramProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLEncoderDeviceProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function delete_device_from_encoder(\Sl\SLEncoderDeviceProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/delete_device_from_encoder',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLEncoderProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_output_program_list_from_encoder(\Sl\SLEncoderProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/get_output_program_list_from_encoder',
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
    public function get_state(\Sl\SLEmptyProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/get_state',
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
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/start',
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
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/stop',
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
    public function start_parsing(\Sl\SLEmptyProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/start_parsing',
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
    public function is_parsing_ready(\Sl\SLEmptyProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/is_parsing_ready',
        $argument,
        ['\Sl\SLParsingStateProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLEmptyProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function stop_parsing(\Sl\SLEmptyProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/stop_parsing',
        $argument,
        ['\Sl\SLEmptyProto', 'decode'],
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
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/get_device_statistics',
        $argument,
        ['\Sl\SLStatisticsProto', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Sl\SLEncoderProto $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function get_encoder_statistics(\Sl\SLEncoderProto $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/get_encoder_statistics',
        $argument,
        ['\Sl\SLStatisticsProto', 'decode'],
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
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/get_affinity_mask',
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
        return $this->_simpleRequest('/sl.SLGraphInstanceProto/set_affinity_mask',
        $argument,
        ['\Sl\SLAffinityMaskProto', 'decode'],
        $metadata, $options);
    }

}
