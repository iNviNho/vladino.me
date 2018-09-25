#!/bin/sh
cd /var/www/vladinome/ && \
git pull origin production && \
./deploy-production.sh
