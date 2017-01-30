# Dockerfile
FROM nimmis/apache-php5

MAINTAINER Louis SUO <kpsesuo@gmail.com>

RUN ln -s /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/rewrite.load

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
RUN mkdir -p /var/www/public
COPY public /var/www/public

EXPOSE 80
EXPOSE 443

ENV APACHE_LOG_DIR=/var/log/apache2/
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
