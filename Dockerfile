FROM php:8.2-apache

# Instalar extensões PHP
RUN apt-get update && apt-get install -y     zip unzip curl git libonig-dev libxml2-dev libzip-dev     && docker-php-ext-install pdo_mysql mbstring zip

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instalar Firebase Admin SDK via Composer
WORKDIR /var/www
COPY . .
RUN composer install

# Permissões
RUN chown -R www-data:www-data /var/www && chmod -R 755 /var/www

EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
