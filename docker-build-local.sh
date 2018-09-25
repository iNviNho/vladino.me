#!/usr/bin/env bash

rm -rf docker-build

mkdir docker-build
cd docker-build

git clone -b master git@github.com:iNviNho/vladinome.git .

docker build -t vladino.me:5000/vladinome:local -f ../docker/Dockerfile-local .
docker push vladino.me:5000/vladinome


rm -rf ../docker-build