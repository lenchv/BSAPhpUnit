FROM ubuntu:trusty

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update -y
RUN apt-get install -y software-properties-common python-software-properties
RUN add-apt-repository -y ppa:ondrej/php
RUN apt-get update -y && apt-get install -y --force-yes \
    php7.2 \
    php7.2-intl \
    php7.2-opcache \
    php7.2-mbstring \
    php7.2-json \
    php7.2-dev \
    php7.2-curl \
    php7.2-cli
