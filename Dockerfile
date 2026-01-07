FROM php:8.2-apache

# 1. Instala extensões (Otimizado)
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions intl mysqli pdo_mysql zip gd

RUN a2enmod rewrite

# 2. Configura DocumentRoot
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# 3. Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4. Copia os arquivos
WORKDIR /var/www/html
COPY . .

# 5. LISTAR ARQUIVOS (Para vermos o que foi copiado no log se falhar)
RUN ls -la

# 6. Tenta instalar (se o composer.json não estiver aqui, o comando acima 'ls' nos dirá onde ele está)
RUN composer install --no-dev --optimize-autoloader --no-interaction

# 7. Permissões
RUN mkdir -p /var/www/html/writable \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/writable

EXPOSE 80
