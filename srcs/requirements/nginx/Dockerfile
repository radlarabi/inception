FROM debian:bullseye

RUN apt-get update && apt-get install -y nginx

COPY tools/nginx.conf /etc/nginx/sites-enabled/nginx.conf

EXPOSE 433

VOLUME /var/html/wordpress

CMD [ "nginx", "-g", "daemon off;" ]
