#Compose Parinya Kunchai
FROM php:apache
RUN  docker-php-ext-install mysqli && docker-php-ext-enable mysqli 
COPY html /var/www/html
EXPOSE 80
