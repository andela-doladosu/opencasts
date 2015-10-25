## Opencasts

Opencasts is an awesome stopover for developers around the world who fancy well curated YouTube tutorial videos.
It is user-collated, and only gets populated with awesome content by awesome developers around the world!


## Installation

[PHP](https://php.net) 5.5+ and [Composer](https://getcomposer.org) are required.

1. Clone this repository: `git clone git@github.com:andela-doladosu/Opencasts.git Opencasts/`
2. `cd` into the Opencasts folder and run `composer install`
3. Run php -S localhost:8000 -t public
4. Visit localhost:8000 in your browser to see the app running.

## Database set-up

1. Create a mysql database with the name `Opencasts`
2. `cd` into the Opencasts folder and run `php artisan:migrate` to set up the required tables for the app.

## homestead

If you are using homestead which is *highly* recomended, here
are instructions to make the app available under `http://opencasts.app`.

1. edit your `~/.homestead/Homestead.yaml`:
- in the section for `sites`, add
```
    - map: opencasts.app
      to: /home/homestead/opencasts

```

- in the section for `databases`, add
```
    - opencasts
```

2. run `vagrant provision` in your Homestead directory.

3. edit your `/etc/hosts` and add the following:
```
192.168.10.10    Opencasts.app
```

## Contributing

Thank you for considering contributing to Opencasts! The contribution guide is as follows:

#### Submit a pull request in this format:

##### A new feature
[Opencasts][#Feat] *Short Description of the Feature*

##### A Fix for a bug
[Opencasts][#Fix] *Short Description of the Fix to a bug on the app*


## Inspiration

 * [Laracasts - THE BEST PHP SCREENCASTS ON THE WEB](http://www.laracasts.com)

## Contributors

Opencasts is being actively developed and maintained by Dara Oladosu

## License

The MIT License (MIT). Please see [License File](license.md) for more information.
