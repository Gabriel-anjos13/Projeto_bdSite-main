FROM php:8.3.12-apache
COPY . /var/www/html/
EXPOSE 80
CMD ["apache2-foreground"]