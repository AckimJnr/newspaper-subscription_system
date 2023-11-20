<p align="center"><a href="https://mwnation.com/" target="_blank"><img src="public/images/shortcut_image.png" width="400" alt="Laravel Logo"></a></p>


## About The News Paper Subscription System

The project is A client server architecture application developed in Laravel (API) and Bootstrap CSS and Javascript for the front end.

The following were the main deciding factores for this architecture

- Cross platform compatibility - The clients to consume the api can be developed in different technologies and in for various platforms
- Scalability - The Client will be scaled independently of the API and a likewise the API. Where load has increased to the api can be easily deployed on another machine and configure a loadbalancer to manage the increasing traffic load.


## Installation & local testing
Install composer on your machine, follow the following link for composer installation instructions on your local machine <a href="https://getcomposer.org/" target="_blank">Composer</a>

Now after successfully installing composer, install the application's depencies.
Open you cmd in window or terminal in linux and open the project's directory.
Run `composer install` to to install application dependencie's
The run `php artisan key:generate` to generate the application key
Instead of running the migrations in the migrations folder
Create a database called `newspaper-subscription_system` import the nss dumb that is found at the root of the project's folder
Now configure you .env file at the root of the projects folder with the database credentials where you have imported the dump.


## Deployment on a cloud server

To deploy on a cloud serve, following the installation instructions about.
After following the steps install a web server on your machine.

Route the trafick to the url and port that is running your laravel application

if Laravel decide to run on any other host other that 127.0.0.7:8000 edit [config_file](public/js/config.js) change the default url to match that on which laravel is running on

### Authentication testing

- user: user@gmail.com => password: 12345678
- user: admin@gmail.com => password: 12345678