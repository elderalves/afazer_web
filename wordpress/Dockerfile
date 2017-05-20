FROM busybox

RUN mkdir -p /var/www/src/public && \ 
    mkdir -p /docker-entrypoint-initdb.d

COPY ./sql/wp_afazer.sql /docker-entrypoint-initdb.d
COPY . /var/www/src/public

VOLUME ["/var/www/src/public", "/docker-entrypoint-initdb.d"]
