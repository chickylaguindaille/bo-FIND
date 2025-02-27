# Utiliser l'image PHP officielle pour Symfony avec la dernière version de PHP
FROM php:8.1-apache

# Installer les dépendances de base nécessaires pour compiler les extensions PHP et Symfony
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libxml2-dev \
    unzip \
    git \
    curl \
    libcurl4-openssl-dev \
    pkg-config \
    libssl-dev \
    zlib1g-dev \
    libonig-dev \
    libicu-dev \
    libssl-dev \
    libz-dev \
    build-essential \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Ajouter LD_LIBRARY_PATH pour résoudre les problèmes de bibliothèques partagées
ENV LD_LIBRARY_PATH=/usr/local/lib:$LD_LIBRARY_PATH

# Installer PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Définir les variables d'environnement nécessaires pour Symfony
ENV APP_ENV=prod
ENV DATABASE_URL="mysql://user:password@mysql_host/db_name"
ENV MONGODB_URL="mongodb+srv://user:password@host/database"

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer Symfony CLI (optionnel mais utile pour les commandes Symfony dans le conteneur)
RUN curl -sS https://get.symfony.com/cli/installer | bash
RUN mv /root/.symfony*/bin/symfony /usr/local/bin/symfony

# Installer l'extension MongoDB pour PHP
RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

# Installer Symfony Dotenv
RUN composer require symfony/dotenv

# Activer mod_rewrite pour supporter .htaccess
RUN a2enmod rewrite

# Copier le code source dans le conteneur
WORKDIR /var/www/html
COPY . /var/www/html

# Donner les bonnes permissions
RUN chmod -R 755 /var/www/html

# Installer les dépendances PHP via Composer
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Exposer le port sur lequel PHP écoutera
EXPOSE 9000

# Lancer le serveur PHP avec les bonnes configurations pour Railway
CMD echo "PORT is set to: $PORT" && php -S 0.0.0.0:$PORT -t public
