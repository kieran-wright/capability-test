# Set-up

### Composer update from terminal

```
$ composer update
```

### Generate new key

```
$ php artisan key:generate
```

### Setup .env with database credentials

### Migrate and seed database

```
$ php artisan migrate --seed
```

### Load project in browser


# Capability Test

This repository contains a Laravel installation which is broken in a variety of straightforward ways.

### To Pass

* Fork this repository and amend to make the installation functional. All migration and seed files are provided.
* Provide step-by-step instructions on how we would set up your fork to verify everything works.
* Provide a rough estimate of the time it took you to complete.

### Bonus Points

* The end result will be very basic by default. It is not required to pass, but feel free to add any additional flair 
to the front/backend as you see fit.
* Set up browser tests in the frontend
* Set up phpunit tests in the backend
* Provide the your working version as a public Docker image
