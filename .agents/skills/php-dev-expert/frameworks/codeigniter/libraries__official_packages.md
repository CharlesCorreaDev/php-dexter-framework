# Official Packages — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/libraries/official_packages.html

---

# Official Packages[](#official-packages "Link to this heading")

The CodeIgniter framework cannot solve all of the problems that developers will encounter.
Many users have said they love how small and fast the framework is, so we don’t want to
bloat the core framework. To bridge the gap we are releasing official packages to provide
additional functionality that not every site will need or want.

## [Shield](#id3)[](#shield "Link to this heading")

[CodeIgniter Shield](https://shield.codeigniter.com/) is an authentication
and authorization framework for CodeIgniter 4. It is designed to be secure, flexible,
and easily extendable to meet the needs of many different types of websites.
Among the many features, it includes:

- Session-based authentication
- Personal access token authentication
- framework for after login/register “actions” (like Two Factor Authentication, etc)
- Role-Based Access Control with simple, flexible permissions.
- Per-user permission overrides,
- and more…

## [Settings](#id4)[](#settings "Link to this heading")

[CodeIgniter Settings](https://settings.codeigniter.com) is a wrapper around
the configuration files that allows any configuration setting to saved to the database,
while defaulting to the config files when not custom value has been stored. This allows
an application to ship with the default config values, but adapt as the project grows
or moves servers, without having to touch the code.

## [Tasks](#id5)[](#tasks "Link to this heading")

[CodeIgniter Tasks](https://tasks.codeigniter.com) is a simple task scheduler
for CodeIgniter 4. It allows you to schedule tasks to run at specific times, or
on a recurring basis. It is designed to be simple to use, but flexible enough to
handle most use cases.

## [Queue](#id6)[](#queue "Link to this heading")

[CodeIgniter Queue](https://queue.codeigniter.com) is a simple queue system
for CodeIgniter 4. It allows you to queue up tasks to be run later.

## [Cache](#id7)[](#cache "Link to this heading")

We provide a library with [PSR-6 and PSR-16 Cache Adapters](https://github.com/codeigniter4/cache)
for CodeIgniter 4. This is not required for use, since CodeIgniter 4 comes with a fully-
functional cache component. This module is only for integrating third-party packages
that rely on the PSR interface provisions.

## [DevKit](#id8)[](#devkit "Link to this heading")

[CodeIgniter DevKit](https://github.com/codeigniter4/devkit) provides all of the
development tools that CodeIgniter uses to help ensure quality code, including
our coding standard, static analysis tools and rules, unit testing, data generation,
file-system mocking, security advisories, and more. This can be used in any of
your personal projects or libraries to get you rapidly setup with 17 different tools.

## [Coding Standard](#id9)[](#coding-standard "Link to this heading")

The [CodeIgniter Coding Standard](https://github.com/CodeIgniter/coding-standard)
holds the official coding standards of CodeIgniter based on PHP CS Fixer and powered by
Nexus CS Config. This can be used in your own projects to form the basis of a
consistent set of style rules that can be automatically applied to your code.
