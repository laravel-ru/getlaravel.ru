#!/bin/bash
base=${base:-/home/forge/laravel.com}
docs=${base}/resources/docs

cd ${docs}/6.x && git pull origin 6.x-ru
cd ${docs}/7.x && git pull origin 7.x-ru
cd ${docs}/8.x && git pull origin 8.x-ru

cd $base && php artisan docs:clear-cache
