# Handling Multiple Environments — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/general/environments.html

---

# Handling Multiple Environments[](#handling-multiple-environments "Link to this heading")

Developers often desire different system behavior depending on whether
an application is running in a development or production environment.
For example, verbose error output is something that would be useful
while developing an application, but it may also pose a security issue
when “live”. In development environments, you might want additional
tools loaded that you don’t in production environments, etc.

## [The Defined Environments](#id2)[](#the-defined-environments "Link to this heading")

By default, CodeIgniter has three environments defined.

- `production` for production
- `development` for development
- `testing` for PHPUnit testing

Important

The environment `testing` is reserved for PHPUnit testing. It
has special conditions built into the framework at various places to assist
with that. You can’t use it for your development.

If you want another environment, e.g., for staging, you can add custom environments.
See [Adding Environments](#adding-environments).

## [Setting Environment](#id3)[](#setting-environment "Link to this heading")

### [The ENVIRONMENT Constant](#id4)[](#the-environment-constant "Link to this heading")

To set your environment, CodeIgniter comes with the `ENVIRONMENT` constant.
If you set `$_SERVER['CI_ENVIRONMENT']`, the value will be used,
otherwise defaulting to `production`.

This can be set in several ways depending on your server setup.

#### [.env](#id5)[](#env "Link to this heading")

The simplest method to set the variable is in your [.env file](general__configuration.md#dotenv-file).

```
CI_ENVIRONMENT = development
```

Note

You can change the `CI_ENVIRONMENT` value in **.env** file by `spark env` command:

```
php spark env production
```

#### [Apache](#id6)[](#apache "Link to this heading")

This server variable can be set in your **.htaccess** file or Apache
config using [SetEnv](https://httpd.apache.org/docs/2.4/mod/mod_env.html#setenv).

```
SetEnv CI_ENVIRONMENT development
```

#### [nginx](#id7)[](#nginx "Link to this heading")

Under nginx, you must pass the environment variable through the `fastcgi_params`
in order for it to show up under the `$_SERVER` variable. This allows it to work on the
virtual-host level, instead of using env to set it for the entire server, though that
would work fine on a dedicated server. You would then modify your server config to something
like:

```
server {
    server_name localhost;
    include     conf/defaults.conf;
    root        /var/www;

    location    ~* \.php$ {
        fastcgi_param CI_ENVIRONMENT "production";
        include conf/fastcgi-php.conf;
    }
}
```

Alternative methods are available for nginx and other servers, or you can
remove this logic entirely and set the constant based on the server’s IP address
(for instance).

In addition to affecting some basic framework behavior (see the next
section), you may use this constant in your own development to
differentiate between which environment you are running in.

## [Adding Environments](#id8)[](#adding-environments "Link to this heading")

To add custom environments, you just need to add boot files for them.

### [Boot Files](#id9)[](#boot-files "Link to this heading")

CodeIgniter requires that a PHP script matching the environment’s name is located
under **APPPATH/Config/Boot**. These files can contain any customizations that
you would like to make for your environment, whether it’s updating the error display
settings, loading additional developer tools, or anything else. These are
automatically loaded by the system. The following files are already created in
a fresh install:

- development.php
- production.php
- testing.php

For example, if you want to add `staging` environment for staging, all you need
to do is:

1. copy **APPPATH/Config/Boot/production.php** to **staging.php**.
2. customize settings in **staging.php** if you want.

## [Confirming the Current Environment](#id10)[](#confirming-the-current-environment "Link to this heading")

To confirm the current environment, simply echo the constant `ENVIRONMENT`.

You can also check the current environment by `spark env` command:

```
php spark env
```

## [Effects on Default Framework Behavior](#id11)[](#effects-on-default-framework-behavior "Link to this heading")

There are some places in the CodeIgniter system where the `ENVIRONMENT`
constant is used. This section describes how default framework behavior
is affected.

### [Error Reporting](#id12)[](#error-reporting "Link to this heading")

Setting the `ENVIRONMENT` constant to a value of `development` will cause
all PHP errors to be rendered to the browser when they occur.
Conversely, setting the constant to `production` will disable all error
output. Disabling error reporting in production is a
[good security practice](concepts__security.md).
