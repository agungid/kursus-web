FROM chialab/php:7.2-apache

WORKDIR /var/www/html

COPY --chown=www-data:www-data . .

EXPOSE 80

CMD ["apache2-foreground"]