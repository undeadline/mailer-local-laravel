Local mailer for Laravel
=========================

## Installing guide

The recommended way to install YW is through
[Composer](https://getcomposer.org/).

```bash
composer require undeadline/mailer-local-laravel
```

After composer require you need use this command
```bash
php artisan vendor:publish --tag=config
```

Now you can edit 'config/local-mail.php' file and set email and
name for local environment what will use by default