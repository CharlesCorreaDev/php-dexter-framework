# Composer installation — Elgg master documentation

> **Fonte / Source:** https://learn.elgg.org/en/stable/admin/composer.html

---

# Composer installation[](#composer-installation "Permalink to this heading")

The easiest way to keep your Elgg site up-to-date is by using [Composer](https://getcomposer.org/). Composer will take care of installing all the required dependencies
of all plugins and Elgg, while also keeping those depencies up-to-date without having conflicts.

Contents

- [Install Composer](#install-composer)
- [Install Elgg as a Composer Project](#install-elgg-as-a-composer-project)
- [Setup version controls](#setup-version-controls)
- [Install plugins](#install-plugins)
- [Commit](#commit)
- [Deploy to production](#deploy-to-production)

## [Install Composer](#id1)[](#install-composer "Permalink to this heading")

<https://getcomposer.org/download/>

## [Install Elgg as a Composer Project](#id2)[](#install-elgg-as-a-composer-project "Permalink to this heading")

```
composer self-update
composer create-project elgg/starter-project:dev-master ./path/to/my/project
cd ./path/to/my/project
composer install
```

This will create a composer.json file based of the [Elgg starter project](https://github.com/Elgg/starter-project) which has the basics of installing Elgg.

### Open your browser[](#open-your-browser "Permalink to this heading")

Go to your browser and install Elgg via the installation interface

## [Setup version controls](#id3)[](#setup-version-controls "Permalink to this heading")

This step is optional but highly recommended. It’ll allow you to easily manage the installation of the same plugin versions between environments
(development/testing/production).

```
cd ./path/to/my/project
git init
git add .
git commit -a -m 'Initial commit'
git remote add origin <git repository url>
git push -u origin master
```

## [Install plugins](#id4)[](#install-plugins "Permalink to this heading")

Install plugins as Composer depencies. This assumes that a plugin has been registered on [Packagist](https://packagist.org/)

```
composer require hypejunction/hypefeed
composer require hypejunction/hypeinteractions
# whatever else you need
```

## [Commit](#id5)[](#commit "Permalink to this heading")

Make sure `composer.lock` is not ignored in `.gitignore`

```
git add .
git commit -a -m 'Add new plugins'
git push origin master
```

## [Deploy to production](#id6)[](#deploy-to-production "Permalink to this heading")

### Initial Deploy[](#initial-deploy "Permalink to this heading")

```
cd ./path/to/www

# you can also use git clone
git init
git remote add origin <git repository url>
git pull origin master

composer install
```

### Subsequent Deploys[](#subsequent-deploys "Permalink to this heading")

```
cd ./path/to/www
git pull origin master

# never run composer update in production
composer install
```
