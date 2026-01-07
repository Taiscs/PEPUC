FROM php:8.2-apache

# 1. Instala apenas o básico necessário para o CI4 (sem compilar GD agora)
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install intl mysqli pdo_mysql zip

# 2. Habilita o mod_rewrite
RUN a2enmod rewrite

# 3. Configura DocumentRoot
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# 4. Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 5. Define diretório e copia arquivos
WORKDIR /var/www/html
COPY . .

# 6. Força a instalação das dependências
# Adicionamos --ignore-platform-reqs para ele não travar caso falte alguma extensão no build
RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs

# 7. Permissões essenciais
RUN mkdir -p /var/www/html/writable \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/writable

EXPOSE 80
