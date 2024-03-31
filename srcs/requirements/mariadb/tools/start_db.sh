service mariadb start;

mysql -e "CREATE DATABASE IF NOT EXISTS ${SQL_DATABASE};";

mysql -e "CREATE USER IF NOT EXISTS '${SQL_USERNAME}'@'loaclhost' IDENTIFIED BY '${SQL_PASSWORD}';";

mysql -e "GRANT ALL PRIVILEGES ON ${SQL_DATABASE}.* TO ${SQL_USERNAME}@'localhost';";

mysql -e "FLUSH PRIVILEGES;";

service mariadb stop;

# mysqld_safe ;