#!/bin/sh

#Need to add ping check if DB has fully started
#Adapt for mysql
#PSQL="psql -h localhost -p 5432 -U postgres -v ON_ERROR_STOP=1"
#until $PSQL -c "select version()" &> /dev/null
#do
#    echo "waiting for postgres container..."
#    sleep 2
#done

echo 'Waiting 20 seconds for mySql server to fully start'
sleep  20
echo 'starting migration'
php /var/www/laravel/artisan migrate
echo 'Setting initial state for data auto-generation'
php /var/www/laravel/artisan apply:auto-generate-state
echo 'Start up crond'
crond start
echo 'Start php-fpm server'
php-fpm
