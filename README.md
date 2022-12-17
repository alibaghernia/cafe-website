# cafe-website


## Table of content

- [cafe-website](#cafe-website)
  - [Table of content](#table-of-content)
  - [Installation](#installation)

## Installation

First, clone the project

```bash
git clone https://github.com/alibaghernia/cafe-website.git
```

After cloning the project, enter the created folder

```bash
cd cafe-website
```

Now you need to install dependencies and libraries.

To install php dependencies.

```bash
composer install
```

To install npm dependencies.

```bash
npm install
```

Now copy file .env.example and name it .env

```bash
cp .env.emaple .env
```

open file and change env varibales.

for genrate APP_KEY run this
```bash
php artisan key:generate
```

for run migrations and seed seeders

```bahs
php artisan migrate:fresh --seed
```

now for run project enter these commands

for php server

```bash
php artisan serve
```

for run vite server

```bash
npm run dev
```
