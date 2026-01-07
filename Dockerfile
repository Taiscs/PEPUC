FROM php:8.2-apache

# 1. Instala dependências do sistema e extensões PHP necessárias para o CI4
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install intl mysqli pdo_mysql zip

# 2. Habilita o mod_rewrite do Apache (essencial para URLs do CodeIgniter)
RUN a2enmod rewrite

# 3. Configura o DocumentRoot para a pasta 'public'
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# 4. Define o diretório de trabalho
WORKDIR /var/www/html

# 5. Copia todos os seus arquivos (app, images, public, etc.) para o container
COPY . .

# 6. Ajusta permissões para a pasta 'writable' (O CI4 precisa escrever logs e cache aqui)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/writable

EXPOSE 80

CMD ["apache2-foreground"]
