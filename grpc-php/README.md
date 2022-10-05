# Пример PHP-клиента для работы с SL Graph

## Описание директорий и файлов проекта
- ./protoc - содержит всё необходимое для генерации protobuf-файлов
- ./sl_proto - содержит сгенерированные для PHP protobuf-файлы
- ./example_get_device.php - пример работы с gRPC-сервисом через сгенерированные файлы

## Настройка рабочего места

### Основное окружение PHP

* `linux` в данном случае испольвазовался Debian под WSL
* `php`
* `pecl`
* `composer`


## Установка _grpc_ расширений

```sh
$ [sudo] pecl install grpc
```

``` sh
$ [sudo] pecl install protobuf
```

После установки расширений, необходимо прописать их в `php.ini`
```sh
extension=grpc.so
extension=protobuf.so
```
Но лучше создать для каждого расширения отдельные файлы `{php-ini-dir}/mods-avalible/grpc.ini` и `{php-ini-dir}/mods-avalible/protobuf.ini` и активировать их:
```sh
[sudo] phpenmod grpc
[sudo] phpenmod protobuf
```

## Генерация PHP-классов (protobuf-файлов)
```
$ cd ./protoc
$ ./generate-protobuf-php.sh
```

Так как в proto-файлах не используется `package`, после генерации необходимо "руками" удалить невалидные строчки `namespace ;` в файлах, которые заканчиваются на *protoClient.php

### Composer

Установка runtime-зависимостей через `composer install`.

```sh
$ cd ..
$ composer install
```

### Запуск примера

Перед запуском в файле `./example_get_devices.php` в строчке 10 необходимо прописать актуальный IP-адрес gRPC-сервиса. Сохраняем изменений и запускаем пример:
```sh
$ php ./example_get_devices.php
```
Если всё было сделано правильно, то в консоли должно появится что-то вроде:
```sh
$ php ./example_get_devices.php
Входные устройства: 
1) Video/Audio test
2) FD SDI Capture
3) Gst UDP Source
4) FD ASI Capture
5) FD ASI Capture (Raw)
6) SL Network Source
7) SL Network Source (Raw)

Выходные устройства: 
1) Video/Audio test
2) FD SDI Capture
3) Gst UDP Source
4) FD ASI Capture
5) FD ASI Capture (Raw)
6) SL Network Source
7) SL Network Source (Raw)
```

## Примечания
1. proto-файлы лучшее вообще никакик не исправлять, так как потом могут возникнуть проблемы с десериализаций ответов от gRPC-сервиса.

## Послезные ссылки
- [grpc/README.md at v1.46.3 · grpc/grpc](https://github.com/grpc/grpc/blob/v1.46.3/src/php/README.md)
- [Клиент PHP для gRPC](https://russianblogs.com/article/30611025174/)
- [Releases · protocolbuffers/protobuf](https://github.com/protocolbuffers/protobuf/releases)