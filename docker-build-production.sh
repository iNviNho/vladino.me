#!/usr/bin/env bash

rm -rf docker-build-production

mkdir docker-build-production
cd docker-build-production

git clone -b production git@github.com:iNviNho/vladinome.git .

docker build -t vladino.me:5000/vladinome:production -f ../docker/Dockerfile-production .
docker push vladino.me:5000/vladinome


rm -rf ../docker-build-production