# Étape 1 : Image de base PHP avec extensions nécessaires
FROM php:8.1-cli

# Installation des dépendances système nécessaires
RUN apt-get update && apt-get install -y \
    git unzip zip curl libzip-dev libicu-dev libonig-dev libxml2-dev \
    libpng-dev libjpeg-dev libfreetype6-dev libpq-dev \
    wkhtmltopdf \
    && docker-php-ext-install intl pdo pdo_mysql zip opcache \
    && pecl install xdebug && docker-php-ext-enable xdebug

# Installation de Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Configuration du dossier de travail
WORKDIR /var/www/html

# Copie du projet Symfony
COPY . .

# Installation des dépendances PHP
RUN composer install --no-interaction --no-dev --optimize-autoloader

# Permissions
RUN chmod -R 755 var && chmod -R 755 public

# Port par défaut (facultatif)
EXPOSE 8000

# Commande par défaut
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
