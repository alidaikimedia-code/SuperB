FROM php:8.4-cli

COPY . /var/www/html/
WORKDIR /var/www/html

EXPOSE 80

CMD php -S 0.0.0.0:${PORT:-80} -t /var/www/html
