FROM debian:bullseye

RUN apt-get update && apt-get install -y mariadb-server

COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

COPY ./tools/start_db.sh .

RUN chmod +x start_db.sh

# RUN ./start_db.sh

EXPOSE 3306

CMD ["bash", "./start_db.sh" ]
# CMD [ "mysqld" ]