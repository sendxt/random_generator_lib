# Symfony dependency injection component with docker containers

The instruction understands what you have installed on your pc docker and docker-compose

```
git clone git@github.com:sendxt/random_generator_lib.git

cd random_generator_lib

docker-compose up -d
```
### PHP (PHP-FPM)

Composer is included

```
docker-compose run php vendor/bin/phpstan analyse src tests

docker-compose run php vendor/bin/phpunit tests

docker-compose run php vendor/bin/php-cs-fixer fix src
```

### Webserver (Nginx)

...

Open your browser and page localhost:8080 you'll see var_dump result of generators with applied random converter to them
