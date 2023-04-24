FROM php:8.0
COPY ./main.php ./
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80"]