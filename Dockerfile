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
    && docker-php-ext-install pdo pdo_mysql zip intl xml gd bcmath opcache \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && rm -rf /var/lib/apt/lists/*

# Installer Symfony CLI
RUN curl -sS https://get.symfony.com/cli/installer | bash \
    && mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

# Copier Composer depuis l'image officielle de Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Créer un utilisateur non-root et changer les permissions pour éviter les erreurs de plugins root
RUN useradd -ms /bin/bash appuser
USER appuser

# Définir le dossier de travail
WORKDIR /app

# Copier les fichiers du projet
COPY . .

# Copier le fichier .env (important pour cache:clear et d'autres commandes)
COPY .env .env

# Installer les dépendances PHP avec Composer (en excluant les scripts qui nécessitent des plugins root)
RUN composer install --no-interaction --no-dev --optimize-autoloader --no-plugins
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql zip intl xml gd bcmath opcache

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install --no-interaction --no-dev --optimize-autoloader

CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
