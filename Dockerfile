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
    curl \
    && docker-php-ext-install pdo pdo_mysql zip intl xml gd bcmath opcache \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && rm -rf /var/lib/apt/lists/*

# Installer le binaire Symfony CLI (nécessaire pour symfony-cmd)
RUN curl -sS https://get.symfony.com/cli/installer | bash \
    && mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

# Copier Composer depuis l'image officielle
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Définir le dossier de travail
WORKDIR /app

# Copier les fichiers du projet
COPY . .

# Installer les dépendances PHP (prod uniquement) sans exécuter les scripts bloquants
RUN composer install --no-interaction --no-dev --optimize-autoloader 

# Commande de démarrage (serveur PHP natif)
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
