#! /bin/bash
OUT_DIR="./../sl_proto"
protoc -I=. sl_graph_service.proto --php_out=$OUT_DIR --grpc_out=$OUT_DIR --plugin=protoc-gen-grpc=./grpc_php_plugin
protoc -I=. sl_graph_instance.proto --php_out=$OUT_DIR --grpc_out=$OUT_DIR --plugin=protoc-gen-grpc=./grpc_php_plugin
protoc -I=. sl_mpeg_ts.proto --php_out=$OUT_DIR --grpc_out=$OUT_DIR --plugin=protoc-gen-grpc=./grpc_php_plugin
protoc -I=. sl_remuxer_model.proto --php_out=$OUT_DIR --grpc_out=$OUT_DIR --plugin=protoc-gen-grpc=./grpc_php_plugin
protoc -I=. sl_remuxer_instance.proto --php_out=$OUT_DIR --grpc_out=$OUT_DIR --plugin=protoc-gen-grpc=./grpc_php_plugin
