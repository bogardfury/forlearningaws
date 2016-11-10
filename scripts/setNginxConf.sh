#!/bin/bash
rm -rf /etc/nginx/nginx.conf
mv /var/www/html/nginxConf.conf /etc/nginx/nginx.conf
rm -rf /var/cache/nginx/fastcgi_temp/*