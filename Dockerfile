FROM php:8.4-cli

WORKDIR /app

COPY . .

CMD ["php", "vendor/bin/phpunit", "tests"]