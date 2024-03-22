all:
	cd srcs && docker-compose up -d

stop:
	cd srcs && docker-compose down









# execute:
# 	docker exec -it $(shell docker ps -a -q) bash

# restart:
# 	docker restart $(shell docker ps -a -q)

# clean:
# 	docker stop $(shell docker ps -a -q)
# 	docker rm $(shell docker ps -a -q)
# 	docker rmi image1