FROM php:8.2-apache

# 1. Instala dependências do sistema e extensões PHP necessárias para o CI4
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl mysqli pdo pdo_mysql zip

# 2. Habilita o mod_rewrite do Apache
RUN a2enmod rewrite

# 3. Configura o DocumentRoot para a pasta /public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# 4. Instala o Composer globalmente no container
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 5. Copia os arquivos do projeto para o container
COPY . /var/www/html

# 6. Instala as dependências do PHP (Cria a pasta vendor)
RUN composer install --no-dev --optimize-autoloader

# 7. Garante as permissões na pasta writable
RUN mkdir -p /var/www/html/writable \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/writable

EXPOSE 80
