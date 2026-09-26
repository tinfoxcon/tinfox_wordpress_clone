FROM wordpress:php8.3-apache

RUN a2enmod rewrite

COPY --chown=www-data:www-data . /var/www/html/

# Install required tools and FluentSMTP
RUN apt-get update \
    && apt-get install -y --no-install-recommends unzip \
    && curl -L https://downloads.wordpress.org/plugin/fluent-smtp.latest-stable.zip -o /tmp/fluent-smtp.zip \
    && unzip /tmp/fluent-smtp.zip -d /var/www/html/wp-content/plugins/ \
    && rm /tmp/fluent-smtp.zip \
    && chown -R www-data:www-data /var/www/html/wp-content/plugins/fluent-smtp \
    && apt-get purge -y unzip \
    && apt-get autoremove -y \
    && rm -rf /var/lib/apt/lists/*

EXPOSE 80