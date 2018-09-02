#!/bin/bash
cp -r /deploy/vendor /var/www/html && \
chmod -R 777 /var/www/html/storage/logs && \
php composer.phar install && \
apache2-foreground
