FROM php:8.3-cli

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apt-get update -y \
    && apt-get install -y \
    git \
    unzip \
    zip

ENTRYPOINT /bin/bash
