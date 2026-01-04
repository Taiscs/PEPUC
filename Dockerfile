FROM php:8.2-apache

WORKDIR /var/www/html

# Copia o projeto inteiro
COPY . .

# Aponta o DocumentRoot para a pasta app
RUN sed -i 's|/var/www/html|/var/www/html/app|g' /etc/apache2/sites-available/000-default.conf

# Ativa mod_rewrite se precisar
RUN a2enmod rewrite
