# Contribution Guide | Laravel 13.x - The clean stack for Artisans and agents

> **Fonte / Source:** https://laravel.com/framework/docs/contributions

---

[Skip to content](#main-content)

# Contribution Guide

- [Bug Reports](#bug-reports)
- [Support Questions](#support-questions)
- [Which Branch?](#which-branch)
- [Compiled Assets](#compiled-assets)
- [AI-Generated Contributions](#ai-generated-contributions)
- [Security Vulnerabilities](#security-vulnerabilities)
- [Coding Style](#coding-style)
  - [PHPDoc](#phpdoc)
  - [StyleCI](#styleci)
- [Code of Conduct](#code-of-conduct)

## [Bug Reports](#bug-reports)

To encourage active collaboration, Laravel strongly encourages pull requests that address problems, not GitHub issues. GitHub issues are disabled on most of our first-party packages.

If you discover a problem, please create a pull request that addresses the problem. Your pull request should contain a title and a clear description of the problem and its solution. You should also include as much relevant information as possible and a code sample that demonstrates the issue. The goal of a pull request is to make it easy for yourself - and others - to understand the problem and verify the fix.

If you do not know how to fix the problem, describe the issue to a coding agent and use it to attempt a pull request.

Pull requests will only be reviewed when marked as "ready for review" (not in the "draft" state) and all tests for new features are passing. Lingering, non-active pull requests left in the "draft" state will be closed after a few days.

The Laravel source code is managed on GitHub, and there are repositories for each of the Laravel projects:

- [Laravel AI SDK](https://github.com/laravel/ai)
- [Laravel Application](https://github.com/laravel/laravel)
- [Laravel Art](https://github.com/laravel/art)
- [Laravel Boost](https://github.com/laravel/boost)
- [Laravel Documentation](https://github.com/laravel/docs)
- [Laravel Dusk](https://github.com/laravel/dusk)
- [Laravel Cashier Stripe](https://github.com/laravel/cashier)
- [Laravel Cashier Paddle](https://github.com/laravel/cashier-paddle)
- [Laravel Echo](https://github.com/laravel/echo)
- [Laravel Envoy](https://github.com/laravel/envoy)
- [Laravel Folio](https://github.com/laravel/folio)
- [Laravel Framework](https://github.com/laravel/framework)
- [Laravel Horizon](https://github.com/laravel/horizon)
- [Laravel Passport](https://github.com/laravel/passport)
- [Laravel Pennant](https://github.com/laravel/pennant)
- [Laravel Pint](https://github.com/laravel/pint)
- [Laravel Prompts](https://github.com/laravel/prompts)
- [Laravel Reverb](https://github.com/laravel/reverb)
- [Laravel Sail](https://github.com/laravel/sail)
- [Laravel Sanctum](https://github.com/laravel/sanctum)
- [Laravel Scout](https://github.com/laravel/scout)
- [Laravel Socialite](https://github.com/laravel/socialite)
- [Laravel Telescope](https://github.com/laravel/telescope)
- [Laravel Starter Kits (Maestro)](https://github.com/laravel/maestro)

## [Support Questions](#support-questions)

Laravel's GitHub issue trackers are not intended to provide Laravel help or support. Instead, use one of the following channels:

- [GitHub Discussions](https://github.com/laravel/framework/discussions)
- [Laracasts Forums](https://laracasts.com/discuss)
- [Laravel.io Forums](https://laravel.io/forum)
- [StackOverflow](https://stackoverflow.com/questions/tagged/laravel)
- [Discord](https://discord.gg/laravel)
- [Larachat](https://larachat.co)
- [IRC](https://web.libera.chat/?nick=artisan&channels=#laravel)

## [Which Branch?](#which-branch)

**All** bug fixes should be sent to the latest version that supports bug fixes (currently `13.x`). Bug fixes should **never** be sent to the `master` branch unless they fix features that exist only in the upcoming release.

**Minor** features that are **fully backward compatible** with the current release may be sent to the latest stable branch (currently `13.x`).

**Major** new features or features with breaking changes should always be sent to the `master` branch, which contains the upcoming release.

## [Compiled Assets](#compiled-assets)

If you are submitting a change that will affect a compiled file, such as most of the files in `resources/css` or `resources/js` of the `laravel/laravel` repository, do not commit the compiled files. Due to their large size, they cannot realistically be reviewed by a maintainer. This could be exploited as a way to inject malicious code into Laravel. In order to defensively prevent this, all compiled files will be generated and committed by Laravel maintainers.

## [AI-Generated Contributions](#ai-generated-contributions)

We appreciate every pull request submitted to Laravel. However, substantial contributions that are primarily AI-generated without thoughtful human review and consideration are not acceptable.

If you choose to use AI tools to assist with large or complex contributions to the framework, the resulting code **must** be thoroughly reviewed, tested, and understood by you before submitting.

Pull request descriptions **must** be written entirely by the contributor. Pull requests with AI-generated descriptions will be closed.

**Mass opening issues or pull requests that are entirely AI-generated will not be tolerated.** Such pull requests will be closed without review, and the contributing user may be blocked from the repository.

We encourage contributors to familiarize themselves with the existing codebase, engage with the community, and submit pull requests that reflect their own understanding and careful consideration of the problem they are solving.

## [Security Vulnerabilities](#security-vulnerabilities)

If you discover a security vulnerability within Laravel, please email our security team at [[[email protected]](https://laravel.com/cdn-cgi/l/email-protection#b2c1d7d1c7c0dbc6cbf2ded3c0d3c4d7de9cd1dddf)](https://laravel.com/cdn-cgi/l/email-protection#d3a0b6b0a6a1baa7aa93bfb2a1b2a5b6bffdb0bcbe). All security vulnerabilities will be promptly addressed.

## [Coding Style](#coding-style)

Laravel follows the [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) coding standard and the [PSR-4](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md) autoloading standard.

### [PHPDoc](#phpdoc)

Below is an example of a valid Laravel documentation block. Note that the `@param` attribute is followed by two spaces, the argument type, two more spaces, and finally the variable name:

```
1/**

2 * Register a binding with the container.

3 *

4 * @param  string|array  $abstract

5 * @param  \Closure|string|null  $concrete

6 * @param  bool  $shared

7 * @return void

8 *

9 * @throws \Exception

10 */

11public function bind($abstract, $concrete = null, $shared = false)

12{

13    // ...

14}

/**
 * Register a binding with the container.
 *
 * @param  string|array  $abstract
 * @param  \Closure|string|null  $concrete
 * @param  bool  $shared
 * @return void
 *
 * @throws \Exception
 */
public function bind($abstract, $concrete = null, $shared = false)
{
    // ...
}
```

When the `@param` or `@return` attributes are redundant due to the use of native types, they can be removed:

```
1/**

2 * Execute the job.

3 *

4

5 */

6public function handle(AudioProcessor $processor): void

7{

8    // ...

9}

/**
 * Execute the job.
 *

 */
public function handle(AudioProcessor $processor): void
{
    // ...
}
```

However, when the native type is generic, please specify the generic type through the use of the `@param` or `@return` attributes:

```
1/**

2 * Get the attachments for the message.

3 *

4 * @return array<int, \Illuminate\Mail\Mailables\Attachment>

5 */

6public function attachments(): array

7{

8    return [

9        Attachment::fromStorage('/path/to/file'),

10    ];

11}

/**
 * Get the attachments for the message.
 *
 * @return array<int, \Illuminate\Mail\Mailables\Attachment>
 */
public function attachments(): array
{
    return [
        Attachment::fromStorage('/path/to/file'),
    ];
}
```

### [StyleCI](#styleci)

Don't worry if your code styling isn't perfect! [StyleCI](https://styleci.io/) will automatically merge any style fixes into the Laravel repository after pull requests are merged. This allows us to focus on the content of the contribution and not the code style.

## [Code of Conduct](#code-of-conduct)

The Laravel code of conduct is derived from the Ruby code of conduct. Any violations of the code of conduct may be reported to Taylor Otwell ([[email protected]](https://laravel.com/cdn-cgi/l/email-protection#2551445c494a5765494457445340490b464a48)):

- Participants will be tolerant of opposing views.
- Participants must ensure that their language and actions are free of personal attacks and disparaging personal remarks.
- When interpreting the words and actions of others, participants should always assume good intentions.
- Behavior that can be reasonably considered harassment will not be tolerated.

Copy as markdown

### On this page

- [Bug Reports](#bug-reports)
- [Support Questions](#support-questions)
- [Which Branch?](#which-branch)
- [Compiled Assets](#compiled-assets)
- [AI-Generated Contributions](#ai-generated-contributions)
- [Security Vulnerabilities](#security-vulnerabilities)
- [Coding Style](#coding-style)
  - [PHPDoc](#phpdoc)
  - [StyleCI](#styleci)
- [Code of Conduct](#code-of-conduct)

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

- [64 Robots](https://laravel.com/partners/64-robots)
- [Vehikl](https://laravel.com/partners/vehikl)
- [Jump24](https://laravel.com/partners/jump24)
- [Curotec](https://laravel.com/partners/curotec)
- [byte5](https://laravel.com/partners/byte5)
- [Threadable](https://laravel.com/partners/threadable)
- [Steadfast Collective](https://laravel.com/partners/steadfast-collective)
- [Redberry](https://laravel.com/partners/redberry)
- [UCodeSoft](https://laravel.com/partners/ucodesoft)
- [Kirschbaum](https://laravel.com/partners/kirschbaum)
- [See All](https://laravel.com/partners)
