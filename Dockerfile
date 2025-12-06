FROM wordpress:6.9.0-php8.3-apache

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Install WP-CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x wp-cli.phar \
    && mv wp-cli.phar /usr/local/bin/wp

# Remove default WordPress plugins
RUN rm -rf /usr/src/wordpress/wp-content/plugins/* && \
    rm -rf /var/www/html/wp-content/plugins/*

# Remove default WordPress themes (keep directory structure)
RUN rm -rf /usr/src/wordpress/wp-content/themes/* && \
    rm -rf /var/www/html/wp-content/themes/*

