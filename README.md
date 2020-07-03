# Time-Chips-Website
Site vitrine du restaurant Time Chips &amp; Grills de Raismes

# Installation

- git clone https://github.com/Lothaerym/Time-Chips-Website.git

- cd Time-Chips-Website

- composer install

- "Configure DATABASE_URL in .env"

- php bin/console doctrine:migrations:migrate

- php -S localhost:8000 -t public

# Administrator connection

- php bin/console doctrine:fixtures:load --append

- Go to "localhost:8000/login" -> name:"test" password:"test"

- Go to "localhost:8000/logout" for disconnect
