# Laravel Mix | Laravel 13.x - The clean stack for Artisans and agents

> **Fonte / Source:** https://laravel.com/framework/docs/mix

---

[Skip to content](#main-content)

# Laravel Mix

- [Introduction](#introduction)

## [Introduction](#introduction)

Laravel Mix is a legacy package that is no longer actively maintained. [Vite](vite.md) may be used as a modern alternative.

[Laravel Mix](https://github.com/laravel-mix/laravel-mix), a package developed by [Laracasts](https://laracasts.com) creator Jeffrey Way, provides a fluent API for defining [webpack](https://webpack.js.org) build steps for your Laravel application using several common CSS and JavaScript pre-processors.

In other words, Mix makes it a cinch to compile and minify your application's CSS and JavaScript files. Through simple method chaining, you can fluently define your asset pipeline. For example:

```
1mix.js('resources/js/app.js', 'public/js')

2    .postCss('resources/css/app.css', 'public/css');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css');
```

If you've ever been confused and overwhelmed about getting started with webpack and asset compilation, you will love Laravel Mix. However, you are not required to use it while developing your application; you are free to use any asset pipeline tool you wish, or even none at all.

Vite has replaced Laravel Mix in new Laravel installations. For Mix documentation, please visit the [official Laravel Mix](https://laravel-mix.com/) website. If you would like to switch to Vite, please see our [Vite migration guide](https://github.com/laravel/vite-plugin/blob/main/UPGRADE.md#migrating-from-laravel-mix-to-vite).

Copy as markdown

### On this page

- [Introduction](#introduction)

Laravel is the most productive way to  
 build, deploy, and monitor software.

First name

Last name

Email address

Stay updated

By submitting this form, you agree to our [terms](https://laravel.com/legal). You can opt-out anytime.

- © 2026 Laravel
- [Legal](https://laravel.com/legal)
- [Status](https://status.laravel.com/)

Products

- [Cloud](https://laravel.com/cloud)
- [Forge](https://forge.laravel.com)
- [Nightwatch](https://nightwatch.laravel.com)
- [Vapor](https://vapor.laravel.com)
- [Nova](https://nova.laravel.com)

Packages

- [Cashier](billing.md)
- [Dusk](dusk.md)
- [Horizon](horizon.md)
- [Octane](octane.md)
- [Scout](scout.md)
- [Pennant](pennant.md)
- [Pint](pint.md)
- [Sail](sail.md)
- [Sanctum](sanctum.md)
- [Socialite](socialite.md)
- [Telescope](telescope.md)
- [Pulse](pulse.md)
- [Reverb](reverb.md)
- [Echo](broadcasting.md)

Resources

- [Documentation](index.md)
- [Starter Kits](https://laravel.com/starter-kits)
- [Release Notes](releases.md)
- [Blog](https://laravel.com/blog)
- [News](https://laravel-news.com)
- [Community](https://laravel.com/community)
- [Larabelles](https://larabelles.com/)
- [Learn](https://laravel.com/learn)
- [Jobs](https://larajobs.com/?partner=5)
- [Careers](https://laravel.com/careers)
- [Trust](https://trust.laravel.com)

Partners

- [Steadfast Collective](https://laravel.com/partners/steadfast-collective)
- [Jump24](https://laravel.com/partners/jump24)
- [Vehikl](https://laravel.com/partners/vehikl)
- [CACI Limited](https://laravel.com/partners/caci-limited)
- [Redberry](https://laravel.com/partners/redberry)
- [64 Robots](https://laravel.com/partners/64-robots)
- [Tighten](https://laravel.com/partners/tighten)
- [byte5](https://laravel.com/partners/byte5)
- [Pixel](https://laravel.com/partners/pixel)
- [Threadable](https://laravel.com/partners/threadable)
- [See All](https://laravel.com/partners)
