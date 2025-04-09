#!/bin/bash

echo "Iniciando ambiente Laravel + MySQL + Firebase..."
docker-compose build
docker-compose up -d

echo "Aguardando containers..."
sleep 10

echo "Executando migrações..."
docker exec -it $(docker ps -qf "ancestor=php:8.2-apache") php artisan migrate

echo "✅ Ambiente pronto em http://localhost:8000"
