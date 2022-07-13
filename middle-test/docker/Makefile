include ../.env

init: build start composer key-generate migrate seed npm npm-run npm-prod
restart: down up

build:
	docker-compose -f docker-compose.yaml --env-file=../.env build
remove:
	docker-compose -f docker-compose.yaml --env-file=../.env down -v --remove-orphans
start:
	docker-compose -f docker-compose.yaml --env-file=../.env up -d
down:
	docker-compose -f docker-compose.yaml --env-file=../.env down --remove-orphans
key-generate:
	docker-compose exec app php artisan key:generate
migrate:
	docker-compose exec app php artisan migrate

composer:
	docker-compose exec app cp json composer.json
	docker-compose exec app composer remove league/flysystem-dropbox
	docker-compose exec app composer require robthree/twofactorauth
npm:
	docker-compose exec app npm install
npm-build:
	docker-compose exec app npm run build
npm-prod:
	docker-compose exec app npm run prod
seed:
	docker-compose exec app php artisan db:seed
