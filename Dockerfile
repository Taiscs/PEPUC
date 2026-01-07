FROM php:8.2-apache

# 1. Dependências do sistema
RUN apt-get update && apt-get install -y \
    libicu-dev libzip-dev zip unzip git \
    && docker-php-ext-install intl mysqli pdo_mysql zip

RUN a2enmod rewrite

# 2. Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# 3. Copia o composer.json e instala as dependências
# Fazemos isso ANTES de copiar o resto do código para garantir a pasta vendor
COPY composer.json ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs

# 4. Agora copia todo o seu código (app, public, etc)
COPY . .

# 5. Configura o Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# 6. Permissões
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/writable

EXPOSE 80
CMD ["apache2-foreground"]
