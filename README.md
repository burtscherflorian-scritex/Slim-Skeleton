# Slim Framework 3 Skeleton Application

Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application. This application uses the latest Slim 3 with the PHP-View template renderer. It also uses the Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Install the Application

### Install with composer.phar

Run this command from the directory in which you want to install your new Slim Framework application.

    php composer.phar create-project burtscherflorian-scritex/slim-skeleton [my-app-name]

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can also run this command. 

	php composer.phar start

Run this command to run the test suite

	php composer.phar test

That's it! Now go build something cool.

### Install directly

ONLY WORKS IF COMPOSER IS INSTALLED ON YOUR SYSTEM

Read the docs on <link>https://getcomposer.org/</link> to add composer dependency manager to your system.

Run this command from the directory in which you want to install your new Slim Framework application.

    composer create-project burtscherflorian-scritex/slim-skeleton [my-app-name]

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can also run this command. 

	composer start

Run this command to run the test suite

	composer test

That's it! Now go build something cool.

## Extensions

The docs for application extensions are coming soon.
 