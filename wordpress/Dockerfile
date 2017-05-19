FROM busybox

RUN mkdir -p /var/www/src/public && \ 
    mkdir -p /docker-entrypoint-initdb.d

COPY afazer_20170519.sql /docker-entrypoint-initdb.d
COPY wordpress/ /var/www/src/public

VOLUME ["/var/www/src/public", "/docker-entrypoint-initdb.d"]
