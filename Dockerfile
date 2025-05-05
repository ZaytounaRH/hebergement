# Dockerfile
FROM php:8.2-cli

# Extensions système
RUN apt-get update && apt-get install -y \
    unzip git zlib1g-dev libzip-dev libpng-dev libonig-dev libxml2-dev \
    libicu-dev libxslt-dev libjpeg-dev libfreetype6-dev wkhtmltopdf curl \
    && docker-php-ext-install pdo pdo_mysql zip intl xml gd bcmath opcache \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && rm -rf /var/lib/apt/lists/*

# Symfony CLI
RUN curl -sS https://get.symfony.com/cli/installer | bash \
    && mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Dossier de travail
WORKDIR /app

# Copier les fichiers
COPY . .

# Copier le fichier .env (important pour cache:clear)
COPY .env .env

# Installer les dépendances PHP avec scripts
RUN composer install --no-interaction --no-dev --optimize-autoloader

# Commande de démarrage
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
