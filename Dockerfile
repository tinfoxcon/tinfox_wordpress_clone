FROM wordpress:php8.3-apache

RUN a2enmod rewrite

COPY --chown=www-data:www-data . /var/www/html/

# Install FluentSMTP into the actual WordPress installation
RUN curl -L https://downloads.wordpress.org/plugin/fluent-smtp.latest-stable.zip -o /tmp/fluent-smtp.zip \
    && unzip /tmp/fluent-smtp.zip -d /var/www/html/wp-content/plugins/ \
    && rm /tmp/fluent-smtp.zip \
    && chown -R www-data:www-data /var/www/html/wp-content/plugins/fluent-smtp

EXPOSE 80