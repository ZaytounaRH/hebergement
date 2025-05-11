# Utiliser une image officielle PHP avec Apache
FROM php:8.2-apache

# Copier tous les fichiers du projet dans le répertoire web du conteneur
COPY . /var/www/html/

# Donner les bons droits d’accès
RUN chown -R www-data:www-data /var/www/html

# Exposer le port 80 (utilisé par Apache)
EXPOSE 80
