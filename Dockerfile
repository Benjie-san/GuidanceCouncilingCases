FROM php:8.1-apache
RUN docker-php-ext-install mysqli
COPY . /var/www/html
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80"]