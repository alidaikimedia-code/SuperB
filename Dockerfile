FROM php:8.4-apache

# Disable all MPMs first, then enable only prefork to avoid conflict
RUN a2dismod mpm_event mpm_worker 2>/dev/null; a2enmod mpm_prefork

# Enable required Apache modules
RUN a2enmod rewrite expires deflate headers

# Set Apache to listen on Railway's PORT (default 80 as fallback)
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Allow .htaccess overrides
RUN sed -i '/<Directory \/var\/www\/html>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Copy project files
COPY . /var/www/html/

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
