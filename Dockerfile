FROM bitnami/php-fpm:latest
RUN echo "extension=pdo_pgsql.so" >> /opt/bitnami/php/etc/php.ini
RUN apt-get update && apt-get install -y autoconf zlib1g-dev php-dev php-pear
RUN pecl install grpc
RUN echo "extension=grpc.so" >> /opt/bitnami/php/etc/php.ini
