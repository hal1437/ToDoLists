
FROM ubuntu
RUN apt-get update
RUN apt-get install -y \
        composer \
        curl \
        php \
        php-intl \
        php-mbstring \
        php-mysql \
        php-xml \
        unzip \
        zip

RUN mkdir /code
WORKDIR /code
ADD . /code/
CMD composer install
