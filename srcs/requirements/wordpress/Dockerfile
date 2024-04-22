FROM debian:bullseye

RUN apt-get update && apt-get install -y wget \
    php \
    php-fpm \
    php-mysql \
    mariadb-client \
    curl

RUN wget https://wordpress.org/wordpress-6.0.tar.gz -P /var/www

RUN cd /var/www && tar -xvf wordpress-6.0.tar.gz && rm -rf wordpress-6.0.tar.gz

RUN chown -R root:root /var/www/wordpress

RUN cp /var/www/wordpress/wp-config-sample.php /var/www/wordpress/wp-config.php

COPY ./tools/script.sh /

RUN echo "listen = 9000" >> /etc/php/7.4/fpm/pool.d/www.conf

RUN service php7.4-fpm start 

EXPOSE 9000

CMD [ "bash", "script.sh" ] 