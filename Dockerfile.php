FROM bitnami/php-fpm:latest
RUN mkdir /php
COPY /php/index.php /php/
