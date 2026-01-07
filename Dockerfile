FROM php:8.2-apache

# 1. Instala dependências do sistema e extensões PHP necessárias para o CI4
# Removi a compilação pesada do GD para evitar que o build trave no Render
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install intl mysqli pdo_mysql zip

# 2. Habilita o mod_rewrite do Apache (essencial para as rotas do CodeIgniter)
RUN a2enmod rewrite

# 3. Configura o DocumentRoot para a pasta 'public' do CodeIgniter
# Como vamos copiar o conteúdo de 'pepuc' para a raiz, o caminho será /var/www/html/public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# 4. Instala o Composer vindo da imagem oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 5. Define o diretório de trabalho
WORKDIR /var/www/html

# 6. COPIA O CONTEÚDO DA SUBPASTA 'pepuc' PARA A RAIZ DO DOCKER
# Isso resolve o erro "Composer could not find a composer.json"
COPY pepuc/ .

# 7. Instala as dependências do projeto
# O --ignore-platform-reqs garante que o build não pare se faltar o GD ou extensões similares
RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs

# 8. Ajusta permissões para a pasta 'writable' (exigência do CodeIgniter)
RUN mkdir -p /var/www/html/writable \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/writable

# 9. Expõe a porta 80
EXPOSE 80

CMD ["apache2-foreground"]
