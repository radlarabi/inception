FROM debian:bullseye

RUN apt-get update && apt-get install -y wget \
    php \
    php-fpm \
    php-mysql \
    mariadb-client

RUN wget https://wordpress.org/wordpress-6.0.tar.gz -P /var/www

RUN cd /var/www && tar -xvf wordpress-6.0.tar.gz && rm -rf wordpress-6.0.tar.gz

RUN chown -R root:root /var/www/wordpress

COPY ./tools/wp-config.php /var/www/wordpress/wp-config.php

RUN sed -i 's/;listen = .*/listen = 127.0.0.1:9000/' /etc/php/7.4/fpm/pool.d/www.conf

RUN service php7.4-fpm start 

EXPOSE 9000

VOLUME /var/www/wordpress

CMD [ "php-fpm7.4", "-F" ] 