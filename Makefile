build:
	docker-compose build

start:
	docker-compose up -d

stop:
	docker-compose down --remove-orphans

restart:
	make stop && make start

rebuild:
	make stop && make build && make start

cc:
	docker-compose exec web bin/console cache:clear

ci:
	docker-compose exec web composer install

cu:
	docker-compose exec web composer update

exec:
	docker-compose exec web bash
