#!/bin/bash
docker-compose -f docker-compose-local.yml pull && \
docker-compose -f docker-compose-local.yml up -d
