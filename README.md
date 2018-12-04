# Everything but the baby

This is the final project for my Web Development Bootcamp at Awesome Inc. This site is a blend of social media and online classified advertisement with the hope of building community. Users can rent and list baby gear with one another.

Project Repository: https://github.com/maymeclayton/final-final

### Author
**Mayme Clayton** - https://github.com/maymeclayton

## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development.

### Installing

Clone to your local machine.

```
$ composer install            #installs PHP dependencies
$ npm install                 #installs JavaScript dependencies
$ cp .env.example .env        #creates local environment file
$ php artisan key:generate    #creates local app key
```
Start development server at to http://localhost:8000
```
$ php artisan serve
```
## Built with
* [Laravel](https://laravel.com/docs/5.7) - framework used

## Deployment
Everything but the baby is hosted on Heroku at https://everythingbutthebaby.herokuapp.com/. For additional documentation on Laravel on Heroku go [here](https://devcenter.heroku.com/articles/getting-started-with-laravel). Steps to deploy:
1. Create a `Procfile` that configures the correct document root.
1. Configure the environment settings on Heroku in the Config Vars within Settings:
  - Set the APP_KEY
  - Set APP_ENV to production
1. Run `npm run prod` to prepare assets for production.
1. Create a new application on Heroku.
1. Install the Heroku CLI if needed and initialize a Heroku repository.
1. Commit all changes and push to Git and Heroku.
