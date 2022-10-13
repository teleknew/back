FROM bitnami/php-fpm:latest
RUN apt-get update && apt-get install -y autoconf build-essential
RUN pecl install postgresql
RUN echo "extension=pdo_pgsql.so" >> /opt/bitnami/php/etc/php.ini
