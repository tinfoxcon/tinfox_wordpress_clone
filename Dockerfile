FROM wordpress:php8.3-apache

RUN a2enmod rewrite

COPY --chown=www-data:www-data . /var/www/html/

EXPOSE 80
