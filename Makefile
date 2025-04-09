# Makefile - Orquestração de Comandos

up:
	docker-compose up -d

down:
	docker-compose down

build:
	docker-compose build

logs:
	docker-compose logs -f

migrate:
	docker exec -it $(docker ps -qf "ancestor=php:8.2-apache") php artisan migrate

seed:
	docker exec -it $(docker ps -qf "ancestor=php:8.2-apache") php artisan db:seed

artisan:
	docker exec -it $(docker ps -qf "ancestor=php:8.2-apache") php artisan

bash:
	docker exec -it $(docker ps -qf "ancestor=php:8.2-apache") bash

keygen:
	docker exec -it $(docker ps -qf "ancestor=php:8.2-apache") php artisan key:generate

refresh:
	make down && make up && make migrate
