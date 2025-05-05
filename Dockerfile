FROM php:8.2-cli

# Installer les extensions système requises
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    zlib1g-dev \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    libxslt-dev \
    libjpeg-dev \
    libfreetype6-dev \
    wkhtmltopdf \
    && docker-php-ext-install pdo pdo_mysql zip intl xml gd bcmath opcache \
    && docker-php-ext-configure gd --with-freetype --with-jpeg

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copier les fichiers
WORKDIR /app
COPY . .

# Installer les dépendances PHP (prod uniquement)
RUN composer install --no-interaction --no-dev --optimize-autoloader

# Commande de démarrage
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
