FROM php:7.3-apache

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libmcrypt-dev \
    libmagickwand-dev \
    git \
    curl \
    zip \
    unzip
RUN docker-php-ext-install intl
RUN docker-php-ext-configure intl
RUN docker-php-ext-install \
    pdo \
    pdo_pgsql \
    bz2 \
    intl \
    bcmath \
    opcache \
    calendar \
    mbstring
RUN pecl install imagick
RUN docker-php-ext-enable imagick
RUN a2enmod rewrite
RUN service apache2 restart

RUN apt-get update
RUN apt-get install -y postgresql-client

# 2. set up document root for apache
COPY apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# 3. mod_rewrite for URL rewrite and mod_headers for .htaccess extra headers like Access-Control-Allow-Origin-
RUN a2enmod rewrite headers

# 4. start with base php config, then add extensions
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

# 5. Composer
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN chmod +x /usr/local/bin/composer
RUN composer self-update

# 6. wait for postgres to be available
COPY apache/wait-for-postgres.sh /var/www/wait-for-postgres.sh
RUN chmod +x /var/www/wait-for-postgres.sh

# Set user and group
ARG user=appuser
ARG group=appuser
ARG uid=1000
ARG gid=1000
RUN groupadd -g ${gid} ${group}
RUN useradd -u ${uid} -g ${group} -s /bin/sh -m ${user} # <--- the '-m' create a user home directory

# Switch to user
USER ${uid}:${gid}

COPY src/ /var/www/html
WORKDIR /var/www/html

USER root
RUN composer install --ignore-platform-reqs
RUN chown -R www-data:${uid} /var/www/html
RUN chmod -R 775 /var/www/html

USER ${uid}:${gid}
EXPOSE 80