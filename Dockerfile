FROM php:8.2-apache

# 1. Baixa o script que instala extensões PHP de forma otimizada
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions intl mysqli pdo_mysql zip gd

# 2. Habilita o mod_rewrite do Apache
RUN a2enmod rewrite

# 3. Configura o DocumentRoot para /public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# 4. Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 5. Copia o projeto
COPY . /var/www/html

# 6. Instala dependências e limpa o cache para diminuir o tamanho da imagem
RUN composer install --no-dev --optimize-autoloader

# 7. Permissões
RUN mkdir -p /var/www/html/writable \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/writable

EXPOSE 80
