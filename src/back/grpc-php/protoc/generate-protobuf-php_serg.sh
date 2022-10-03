#! /bin/bash

OUT_DIR="./../sl_proto"
PROTOC=/usr/bin/protoc
PLUGIN=protoc-gen-grpc=/home/oem/nikita/grpc-php/protoc/grpc_php_plugin
#PLUGIN=protoc-gen-grpc=cmake/build/grpc_php_plugin


$PROTOC -I=. sl_graph_service.proto \
        --php_out=$OUT_DIR \
        --grpc_out=$OUT_DIR \
        --plugin=$PLUGIN

$PROTOC -I=. sl_graph_instance.proto \
        --php_out=$OUT_DIR \
        --grpc_out=$OUT_DIR \
        --plugin=$PLUGIN
        
$PROTOC -I=. sl_mpeg_ts.proto \
        --php_out=$OUT_DIR \
        --grpc_out=$OUT_DIR \
        --plugin=$PLUGIN
        
$PROTOC -I=. sl_remuxer_model.proto \
        --php_out=$OUT_DIR \
        --grpc_out=$OUT_DIR \
        --plugin=$PLUGIN
        
$PROTOC -I=. sl_remuxer_instance.proto \
        --php_out=$OUT_DIR \
        --grpc_out=$OUT_DIR \
        --plugin=$PLUGIN
