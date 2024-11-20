## About This Test

This is a simple test to show that custom component prefixes do not work within this env/setup.

This is a fresh install of Laravel 11, Sail, Jetstream with Livewire & Teams and TailwindUI.
TailwindUI is using the .env TALLSTACKUI_PREFIX="ts" to prefix the components and avoind clashes with Jetstream or other third-party components.

The welcome page has a simple form to create a post.
When the inputs use `<x-input ... />` the form displays using jetstream's style. However, when you change the input fields to `<x-ts-input ... />` Laravel throws an error: "Unable to locate a class or view for component [ts-input]."

## Installing

configure .env file as required.
run `composer install`
run `npm install && npm run dev`
run `sail build && sail up -d`
run `sail artisan migrate`
visit `localhost` in your browser

# Edit form inputs

open /resources/views/livewire/create-post.blade.php
find & replace `x-input`with`x-ts-input`
run `sail artisan optimize:clear`

you may now run `sail artisan optimize` which with throw the error "Unable to locate a class or view for component [ts-input]."
