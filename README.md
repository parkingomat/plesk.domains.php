# parkingomat/plesk.domains.php
Plesk api client to get all domains

[parkingomat/plesk.domains.php: PLesk api client to get all domains](https://github.com/parkingomat/plesk.domains.php)


# api
API with OpenApi (Swagger)  documentation based on Nodejs

## Functions
+ user auth
+ obsluga API github
+ komunikacja z github
+ komunikacja z PLESK
+ deploy from github to plesk


Statystyki:

Lista ostatnio wygenerowanych paczek

Lista plikow uzywanchy i wersji



podpowiedzi

Gdzie mozna dodac nowa wersje

Testowanie jakosci kodu

Mozliwosc za pomoca jednego klineiecia

Lub podania pliku

Oda razu og edytowac



## TODO

+ support by PROMAGEN

one file to start promagen project


## API foundation

.promagen - web management dla devops
.apicra - skrypty do instalacji env
.apifunc - funkcje, implementacja apiunit
.apiunit - metadane potrzebne do stworzenia aplikacji
.apibuild - budowanie plaikacji, deployment



# First Steps

start by composer

    php composer.phar start

## on linux

### install
    sh .apicra/install

### start
    sh .apicra/start

### open in browser
    sh .apicra/browser

## on windows

### install
    .apicra\install.bat

### start
    .apicra\start.bat


### open in browser
    .apicra\browser.bat


## packagist
[parkingomat/plesk.domains.php - Packagist](https://packagist.org/packages/parkingomat/plesk.domains.php)
https://packagist.org/packages/parkingomat/plesk.domains.php


## composer package name

    "parkingomat/plesk.domains.php"



TODO:

.apiterminal

## package install


## Install on raspbian

Raspbian config

https://www.tomshardware.com/reviews/raspberry-pi-headless-setup-how-to,6028.html

Clean

    apt-get autoremove -y

Update

    sudo apt update -y

Upgrade

    sudo apt-get upgrade --yes

GIT INSTALL

    sudo apt install -y git

GIT CLONE

    git clone https://github.com/parkingomat/plesk.domains.php.git && cd plesk.domains.php


### Install PHP 7 and common modules
Install PHP
```
sudo apt install -y php
php -v
```

Install modules
```
sudo apt install -y php7.3-cli php7.3-fpm \
php7.3-opcache php7.3-curl php7.3-mbstring \
php7.3-pgsql php7.3-zip php7.3-xml php7.3-gd
```

Update composer dependencies

```
php composer.phar install

sh .apicra/install

sudo php -S 0.0.0.0:8080 -t src

sh .apicra/start
```

raspberrypi:8080

raspberrypi:8080/domains.php

Config
    
    sudo nano /etc/php/7.3/cli/php.ini


NOTICE: To enable PHP 7.3 FPM in Apache2 do:
NOTICE: a2enmod proxy_fcgi setenvif
NOTICE: a2enconf php7.3-fpm

### Add the PHP repository

So how to get a fresh version of PHP then ? Luckily the Debian PHP maintainer hosts a repository with fresh version of PHP and it includes armhf (armv7 only!) versions too. Lets start by adding the repository PGP key:
```
wget -q https://packages.sury.org/php/apt.gpg -O- | sudo apt-key add -
```
And add the PHP repository to your apt sources
```
echo "deb https://packages.sury.org/php/ buster main" | sudo tee /etc/apt/sources.list.d/php7.list
```
Update repository pacakge index
```
sudo apt update
```
In case apt complains about "The method driver /usr/lib/apt/methods/https could not be found", install the following optional packages:
```
sudo apt install ca-certificates apt-transport-https
```

Install Apache and FastCGI module

Next we will install Apache and the required extra module for FastCGI support:

```
sudo apt install apache2 libapache2-mod-fcgid
```

## Apache 2

Enable fpm proxy moudle and php-fpm configuration

```
sudo a2enmod proxy_fcgi
sudo a2enconf php7.3-fpm
```

And reload Apache

```
sudo systemctl reload apache2
```

## install on windows

with local composer.phar file

    php composer.phar require parkingomat/plesk.domains.php

global installed composer in system

    composer require parkingomat/plesk.domains.php


## composer install

    php composer.phar install


---

+ [edit](https://github.com/parkingomat/plesk.domains.php/edit/main/README.md)
