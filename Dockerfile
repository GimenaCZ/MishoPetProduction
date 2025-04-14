FROM php:8.1-apache

# Copiar los archivos del proyecto al contenedor
COPY . /var/www/html/

# Activar mod_rewrite (si usas .htaccess o URLs limpias)
RUN a2enmod rewrite

# Dar permisos necesarios
RUN chown -R www-data:www-data /var/www/html

# Puerto de exposición
EXPOSE 80
