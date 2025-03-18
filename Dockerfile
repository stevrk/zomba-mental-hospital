FROM php:8.2-fpm-alpine

# Set working directory
WORKDIR /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Update package list and install dependencies
RUN apk update && apk add --no-cache \
    bash \
    postgresql-dev \
    postgresql-libs \
    nodejs \
    npm \
    mysql-client \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev

# Install Yarn
RUN npm install -g yarn

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_pgsql pdo_mysql

# Copy application files
COPY . /var/www/html
