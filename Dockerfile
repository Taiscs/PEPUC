FROM php:8.2-apache

# 1. Instala dependências do sistema e extensões PHP para o CodeIgniter 4
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install intl mysqli pdo_mysql zip

# 2. Habilita o mod_rewrite do Apache
RUN a2enmod rewrite

# 3. Configura o DocumentRoot para a pasta 'public'
# Como o Dockerfile está na mesma pasta que 'public', o caminho no container será /var/www/html/public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# 4. Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 5. Define diretório e copia os arquivos
# O Docker considera a pasta PEPUC como a raiz do build agora
WORKDIR /var/www/html
COPY . .

# 6. Instala dependências (O composer.json estará aqui na raiz)
RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs

# 7. Permissões essenciais para o CodeIgniter
RUN mkdir -p /var/www/html/writable \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/writable

EXPOSE 80

CMD ["apache2-foreground"]
