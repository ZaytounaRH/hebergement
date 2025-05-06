FROM php:8.2-cli

# Installer les extensions système nécessaires
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
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql zip intl xml gd bcmath opcache \
    && rm -rf /var/lib/apt/lists/*

# Installer Symfony CLI
RUN curl -sS https://get.symfony.com/cli/installer | bash \
    && mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

# Copier Composer depuis l'image officielle
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Créer un utilisateur non-root
RUN useradd -ms /bin/bash appuser

# Définir le répertoire de travail
WORKDIR /app

# Copier les fichiers du projet
COPY --chown=appuser:appuser . .

# Passer à l'utilisateur appuser
USER appuser

# Installer les dépendances PHP avec Composer
RUN composer install --no-interaction --no-dev --optimize-autoloader -vvv || cat /app/composer.json

# Exposer le port (facultatif mais conseillé si tu veux accéder en dehors du conteneur)
EXPOSE 8000

# Démarrer le serveur PHP
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
