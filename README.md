Yii 2 Basic API Template
===============================

Yii 2 Basic API Template is a skeleton [Yii 2](http://www.yiiframework.com) application best for rapidly
creating small API applications.

The template is designed to work in a team development environment. 
It supports deploying the application in different environments.

INSTALLATION
------------

## Install via Composer

Run the [Composer](http://getcomposer.org) commands to install:

```bash
composer global require fxp/composer-asset-plugin ~1.1.1
composer create-project --prefer-dist frostealth/yii2-api-basic my-api
```

## Preparing application

After you install the application, you have to copy the `.env.example` file to `.env` and fill-in their own values.

DIRECTORY STRUCTURE
-------------------

```
commands/                contains console controllers (commands)
common
    controllers/         contains shared api-specific controllers
    models/              contains shared api-specific model classes
config/                  contains application configurations
mail/                    contains view files for e-mails
runtime/                 contains files generated during runtime
versions                 contains api versions as modules
    v1/
        controllers/     contains version-specific controllers
        models/          contains version-specific model classes
web/                     contains the entry script
vendor/                  contains dependent 3rd-party packages
```
