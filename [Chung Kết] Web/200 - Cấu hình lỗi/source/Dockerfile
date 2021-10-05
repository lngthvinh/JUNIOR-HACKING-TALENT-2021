FROM php:7.3-apache
COPY ./config/apache2.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html/
COPY ./html .

RUN chown -R root:www-data . &&\
    chmod 750 .

RUN find . -type f -exec chmod 640 {} \;
RUN find . -type d -exec chmod 750 {} \;

RUN mkdir /var/www/internal/
WORKDIR /var/www/internal/
COPY ./internal .

RUN chown -R root:www-data . &&\
    chmod 750 .

RUN find . -type f -exec chmod 640 {} \;
RUN find . -type d -exec chmod 750 {} \;
