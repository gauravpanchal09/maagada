MAIN_CONTAINER:=HOSPITAL_PHP
DB_CONTAINER:=HOSPITAL_DB

all: env up composer-install keygen migrate
restart: down up

env:
	cat .env.example >> .env

up:
	docker-compose up -d

down:
	docker-compose down

composer-install:
	docker exec -it ${MAIN_CONTAINER} composer install

keygen:
	docker exec -it ${MAIN_CONTAINER} php artisan key:generate

migrate:
	docker exec -it ${MAIN_CONTAINER} php artisan migrate

migrate.seed:
	docker exec -it ${MAIN_CONTAINER} php artisan migrate --seed

migrate.fresh:
	docker exec -it ${MAIN_CONTAINER} php artisan migrate:fresh

migrate.fresh.seed:
	docker exec -it ${MAIN_CONTAINER} php artisan migrate:fresh --seed

shell:
	docker exec -it ${MAIN_CONTAINER} bash

shell.db:
	docker exec -it ${DB_CONTAINER} mysql -uroot -proot hospital

ps:
	docker-compose ps
