# Ruby on Rails | External Applications | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/extapp/ruby/

---

# Ruby On Rails[¶](#ruby-on-rails "Permanent link")

LiteSpeed Web Server supports Ruby on Rails. This article covers setup for LSWS Native mode. For a shared hosting control panel environment with CloudLinux, please refer to [this article](lsws__cp__cpanel__cloudlinux.md#rubypythonnodejs-selector) to enable CloudLinux Ruby and Python selector.

## Why Ruby LSAPI?[¶](#why-ruby-lsapi "Permanent link")

There are five options Rails application setup with LiteSpeed Web Server:

- Ruby LiteSpeed API ([Ruby LSAPI](https://www.litespeedtech.com/products/litespeed-sapi/ruby))
- LiteSpeed RubyRunner (Run CGI in persistent interpreter like mod\_perl to perl)
- FastCGI
- Mongrel
- CGI

In order to maximize the performance of a Rails application, LiteSpeed Technologies developed our own Ruby interface module using our LiteSpeed API protocol, also known as [LSAPI](https://www.litespeedtech.com/lsapi/). LSAPI is a highly optimized IPC protocol between LiteSpeed web server and a standalone process which yields the best possible performance.

LiteSpeed RubyRunner is an add-on to Ruby LiteSpeed API which allows running plain Ruby CGI in a persistent interpreter without the cost of starting a new ruby process for each CGI script. However, RubyRunner is not as fast as a plain LSAPI script because Ruby interpreter has to do extra work to shield the run-time environment for each CGI script execution. RubyRunner is for running plain ruby CGI scripts unchanged. For Rails applications, Ruby LSAPI is preferred.

For running Rails application, Ruby LSAPI should give you the best performance as well as the least configuration complexity. We will focus on LSAPI for the rest of this guide.

## Requirements[¶](#requirements "Permanent link")

Before you can set up Ruby on Rails with LiteSpeed Web Server you should have finished the following steps:

1. Latest version of LiteSpeed Web Server
2. Latest [Ruby LSAPI](https://www.litespeedtech.com/products/litespeed-sapi/ruby)
3. A working Ruby application installation

## Install Ruby LiteSpeed API extension[¶](#install-ruby-litespeed-api-extension "Permanent link")

You can install the Ruby LSAPI extension using RubyGem, like so:

```
gem install ruby-lsapi
```

Or, you can download, unpack, and install from source code, like so:

Download Ruby LSAPI from [here](https://www.litespeedtech.com/index.php/products/litespeed-sapi/download).

Unpack:

```
tar zxvf ruby-lsapi.tar.gz
cd ruby-lsapi
```

Install Ruby LSAPi:

```
ruby setup.rb config
ruby setup.rb setup
ruby setup.rb install
```

Warning

Do not mix manual and gem installation together. Pick one installation method, and stick to it. Manual installations have higher priority and override gem installations.

## LiteSpeed Server Config[¶](#litespeed-server-config "Permanent link")

### Step 1[¶](#step-1 "Permanent link")

In the WebAdmin Console, navigate to **Server > Rails** to configure server-level Ruby on Rails settings. Set the following:

- **Ruby Path**: `/usr/local/bin/ruby` (path to the Ruby executable)
- **Rails Environment**: `Production`
- **Max Connections**: `10`
- **Run On Start Up**: `Yes` (spawn at server-start to decrease 1st page response time)

### Step 2[¶](#step-2 "Permanent link")

Next, create a virtual host. In this example, our vhost is called "RubyVhost." If you want to run Rails dispatchers in SuEXEC mode, set **CGI Set UID Mode** to `DocRoot UID`. Otherwise, set it to `Server UID`.

### Step 3[¶](#step-3 "Permanent link")

In RubyVhost's **Contexts** tab, create a new "Rails" context, and set the following values:

- **URI**: `/` (an arbitrary URL like `/blog/` can be used as long as your Rails app has been configured to work that way)
- **Location**: `/myrailapp/` (Rails application root directory)
- **Rails Environment**: `Production` (overrides server-level Rails environment default value)

Note

`/myrailapp/` should be the root directory of the Rails application which contains the `public/` sub-directory.

### Step 4[¶](#step-4 "Permanent link")

**HT Access** should be disabled in RubyVhost's **General** tab, if you don't need it for maximum performance. When using "Rails Context," dispatching rules within `/myrailapp/public/.htaccess` will be ignored.

- **Allow Override**: `None` (either check `None` or don't check anything at all)

### Step 5[¶](#step-5 "Permanent link")

**Optional but recommended**: Add rewrite rules. The following rules must be added to the RubyVhost's **Rewrite** tab, to fully enable caching. Using the standard Rails directive `caches_page :action` will leave `.html` files in your public directory, but the rules below are necessary for LiteSpeed to pick those up.

```
RewriteRule ^(.*)/$ $1/index.html [QSA]
RewriteRule ^([^.]+)$ $1.html [QSA]
```

Also remember to **Enable Rewrite**. Save your changes and restart the web server.

By default, LSWS uses the 404 handler to forward a request to a backend Rails application. It will serve the static (cached) version of the page if available. If you want to have the page served by the backend application based on a request component other than URL, like a request header, you should use a URL rewrite at the virtual-host level. For example, to serve an AJAX call with a Rails application based on a special header, you can use a rewrite rule like this:

```
RewriteCond %{HTTP:X-Requested-With} !^$ 
RewriteRule ^/      /dispatch.lsapi   [QSA,L]
```

## Using a Template[¶](#using-a-template "Permanent link")

LiteSpeed Web Server ships with a virtual host template called "EasyRailsWithSuEXEC," which is meant to be used for simple Rails application configuration. The XML template is located in the `/lswsinstall/conf/templates/` directory. If you run one Rails application per virtual host and the root URL of your Rails application is `/`, steps 2 through 4 above can be replaced by adding a member to the template.

For example, you can configure the server-level Rails settings as described in [LiteSpeed Server Config](#litespeed-server-config) Step 1, add a member to the EasyRailsWithSuEXEC template, and continue with Step 5.

To get the same results as above, add a member with the following settings:

- **Virtual Host Name**: `RubyVHost`
- **Domain**: the vhost's domain name
- **Aliases**: the vhost's aliases if there are any
- **Virtual Host Root**: `/myrailapp/` (the Rails application root directory)

Note

`/myrailapp/` should be the root directory of the Rails application which contains the `public/` sub-directory.

If you need to further customize the virtual host, just click the **Instantiate** link to generate a dedicated vhost configuration.

Note

Rails applications configured via the template run in SuEXEC mode, under the UID/GID of the owner of the `public/` folder of your Rails application. You should pay attention to that.

Tip

Under the **Context** tab for the virtual host don't forget to set your **Rails Environment** to either `Production`(default) or `Development`.
