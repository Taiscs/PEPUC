# Escolhe a imagem oficial do PHP com Apache
FROM php:8.2-apache

# Ativa extensões necessárias do PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli pdo pdo_mysql

# Copia o código do projeto para o container
COPY . /var/www/html/

# Define a pasta pública do CI como root do Apache
WORKDIR /var/www/html
RUN chown -R www-data:www-data /var/www/html/writable
RUN chmod -R 755 /var/www/html/writable

# Ativa mod_rewrite para CodeIgniter
RUN a2enmod rewrite

# Expondo porta padrão do Apache
EXPOSE 80

# Comando padrão do container
CMD ["apache2-foreground"]
