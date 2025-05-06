# Étape 1 : build des dépendances PHP
FROM composer:2.6 as vendor

WORKDIR /app

# Copie uniquement les fichiers nécessaires à composer install
COPY composer.json composer.lock ./

# Installe les dépendances dans le dossier vendor (prod uniquement)
RUN composer install --no-dev --prefer-dist --no-progress --optimize-autoloader

# Étape 2 : image d'exécution PHP
FROM php:8.2-fpm-alpine

# Install des extensions PHP et dépendances système
RUN apk add --no-cache \
        bash \
        icu-dev \
        libxml2-dev \
        oniguruma-dev \
        zlib-dev \
    && docker-php-ext-install intl pdo pdo_mysql xml opcache

# Définir le dossier de travail
WORKDIR /app

# Copie du code source de l’application
COPY . .

# Copie des vendors installés dans l'étape précédente
COPY --from=vendor /app/vendor /app/vendor

# Copier un fichier .env spécifique si nécessaire (ex: .env.prod ou .env.local)
# Ou créer un .env vide pour éviter l'erreur
RUN if [ ! -f .env ]; then cp .env.dist .env; fi

# Supprime le cache (si existant)
RUN php bin/console cache:clear --no-warmup || true

# Chmod pour éviter les problèmes de permission
RUN chmod -R 755 var

# Expose le port
EXPOSE 9000

# Commande par défaut
CMD ["php-fpm"]
