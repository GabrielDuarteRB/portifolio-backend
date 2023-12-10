FROM php:8.0-apache

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Inicio Wordpress Config

WORKDIR /var/www/html/admin/

RUN apt-get update && \
    apt autoremove && \
    apt-get install -y \
    vim \
    wget \
    mariadb-client \
    less

RUN docker-php-ext-install mysqli

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp

RUN wp --allow-root --path=/var/www/html/admin core download

VOLUME /var/www/html/admin/wp-content

RUN chown -R www-data:www-data /var/www/html/admin/wp-content/
RUN chmod -R 755 /var/www/html/admin/wp-content/

# Inicio Laravel Config

WORKDIR /var/www/html/api/

RUN apt-get update && \
    apt-get install -y \
    zip \
    unzip \
    p7zip-full \
    git 

RUN docker-php-ext-install pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


RUN a2enmod rewrite

RUN chmod -R 755 /var/www/html/
RUN chmod -R 755 /var/www/html/api

COPY ./config/000-default.conf /etc/apache2/sites-available/000-default.conf

# Entrypoint

COPY ./config/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# htaccess

COPY ./config/.htaccess /var/www/html/.htaccess


CMD ["entrypoint.sh"]