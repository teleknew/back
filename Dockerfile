FROM bitnami/php-fpm:latest
RUN apt-get update && apt-get install -y autoconf zlib1g-dev php-dev php-pear
RUN pecl install grpc protobuf
RUN echo "extension=pdo_pgsql.so\nextension=grpc.so\nextension=protobuf.so" >> /opt/bitnami/php/etc/php.ini
WORKDIR /var/www/html
COPY ./ /var/www/html/
