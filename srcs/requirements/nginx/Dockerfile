FROM debian:bullseye

RUN apt-get update && apt-get install -y nginx openssl 

COPY tools/nginx.conf /etc/nginx/sites-enabled/nginx.conf

RUN mkdir /etc/nginx/ssl && openssl req -x509 -nodes -keyout /etc/nginx/ssl/inception.key -out /etc/nginx/ssl/inception.crt -subj "/C=FR/ST=IDF/L=Paris/O=42/OU=42/CN=rlarabi.42.fr/UID=rlarabi"

EXPOSE 443

VOLUME /var/html/wordpress

CMD [ "nginx", "-g", "daemon off;" ]
