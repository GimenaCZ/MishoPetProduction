FROM php:8.1-apache

# Instalar dependencias y driver pdo_pgsql
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Copiar los archivos del proyecto al contenedor
COPY . /var/www/html/

# Activar mod_rewrite (si usas .htaccess o URLs limpias)
RUN a2enmod rewrite

# Dar permisos necesarios
RUN chown -R www-data:www-data /var/www/html

# Puerto de exposición
EXPOSE 80
