# Dockerfile
FROM nimmis/apache-php5

MAINTAINER SemaphoreCI <dev@semaphoreci.com>

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
RUN mkdir -p /var/www/public
COPY public /var/www/public

EXPOSE 80
EXPOSE 443

ENV APACHE_LOG_DIR=/var/log/apache2/
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
