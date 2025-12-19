# Base PHP image
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    npm \
    nodejs \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy dependency manifests first for caching
COPY composer.json composer.lock ./
COPY package.json package-lock.json ./

# Install PHP & Node dependencies
RUN composer install --no-dev --optimize-autoloader
RUN npm install

# Copy the rest of the application
COPY . .

# Build Vue frontend
RUN npm run build

# Cache Laravel config & routes
RUN php artisan config:cache
RUN php artisan route:cache

# Expose port
EXPOSE 10000

# Start Laravel (in production, APP_KEY should come from environment variables)
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
