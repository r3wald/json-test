symfony new json-test
cd json-test
vim .env
vim .docker-compose.yml
composer require symfony/maker-bundle --dev
composer require orm
bin/console make:entity
bin/console make:migration

bin/console make:controller
