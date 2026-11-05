# Getting Started | PHP | External Applications | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/extapp/php/getting_started/

---

# Getting Started[¶](#getting-started "Permanent link")

This guide will show you how to get started with LSPHP, or PHP with LiteSpeed API, on your Linux machine.

We will cover:

- Different methods depending on operating system
- Compiling PHP from source
- Installing LSPHP on your control panel environments
- Configuring LSPHP with LiteSpeed Web Server

## Installation[¶](#installation "Permanent link")

### Native[¶](#native "Permanent link")

#### LiteSpeed repository[¶](#litespeed-repository "Permanent link")

The easiest way to get up and running with PHP is to use the LiteSpeed repository. The LiteSpeed repository comes with prebuilt PHP packages with LiteSpeed support built in.

Here is a list of some of the features you get when you use our LiteSpeed repository, instead of compiling PHP manually:

- PHP versions 7.1\*, 7.2\*, 7.3\*, 7.4\*, 8.0\*, 8.1, 8.2, 8.3, 8.4, and 8.5.
- CentOS and RHEL versions 7\*, 8, 9, and 10.
- Ubuntu versions 20.04\*, 22.04, 24.04, and 26.04.
- Debian versions 10\*, 11, 12, and 13.
- The most up-to-date versions of LSAPI. You do not have to wait for a new PHP version to be released.
- Easy installation of multiple versions of PHP, which are installed to different locations by default.
- All frequently used PHP packages.
- Multiple possible MySQL support packages, via native driver or client library.
- Multiple opcode caching options: APCu, XCache, and Zend OPcache.

Note

**\*** These PHP versions are dependent on the OS. Newer OSes might not support the older end-of-life (EOL) versions.

##### Prerequisites[¶](#litespeed-repo-prereqs "Permanent link")

Before you can install LSPHP, there are a couple of prerequisite packages and repositories that need to be installed via the operating system's package manager. This can be accomplished by running the following command in a terminal:

```
sudo wget -O - https://repo.litespeed.sh | sudo bash
```

##### Packages[¶](#litespeed-repo-search-packages "Permanent link")

It is not a requirement to search through the LSPHP packages and extensions we offer before installing, but it is handy to know what you can install and have the option to install everything at the same time. To find out all the LSPHP packages and extensions we offer, you can run the following:

CentOSUbuntu/Debian

```
sudo dnf search lsphp
```

```
sudo apt-cache search lsphp
```

##### Install[¶](#litespeed-repo-install-lsphp "Permanent link")

Now that you have installed the prerequisites, you can continue with the actual installation process.

If you searched our repository, then you can use the names of the packages and extensions you found to install what you need.

For example, to install LSPHP85 and `lsphp85-mysql` via the command line, you would run the following:

CentOSUbuntu/Debian

```
sudo dnf install lsphp85 lsphp85-common lsphp85-mysqlnd
```

```
sudo apt-get install lsphp85 lsphp85-common lsphp85-mysql
```

This will install `lsphp85` and `lsphp85-mysql` into the following location: `/usr/local/lsws/lsphp85/bin/lsphp`.

Once it has been installed, you can continue to the [Setup section](#setup).

#### portsnap[¶](#portsnap "Permanent link")

In this section, we will show you how to install LSPHP on FreeBSD using `portsnap`, which manages FreeBSD's Ports collection.

##### Setup[¶](#portsnap-setup "Permanent link")

Start by updating your FreeBSD server `ports` tree using the `portsnap` command:

```
sudo portsnap fetch update # This will fetch the ports and any updates
sudo portsnap extract # This will extract the ports to be compiled
sudo portsnap fetch update # This will make sure everything is up to date
```

##### Install[¶](#portsnap-install "Permanent link")

First, you will need to edit the `Makefile` for `make` to build the LSPHP binary. This can be achieved by running the following commands:

```
sudo cd /usr/ports/lang/php85 # Replace 85 with the version you wish to install
sudo nano Makefile # You can replace nano with your favorite text editor
# Find the line `--with-password-argon2=${LOCALBASE} \`
# Then, after it, add `--with-litespeed \`
sudo make
sudo make install
```

When you run the `make` commands, it may take a while, as it will compile multiple dependencies for you that PHP requires. Overall, it is a simple process of hitting `yes`. Once `make` is finished, it will install the LSPHP binary in the following location:

```
/usr/ports/lang/php85/work/stage/usr/local/bin/
```

Next, move it to a more suitable location for dealing with LiteSpeed. This is accomplished by running these commands:

```
sudo mkdir -p /usr/local/lsws/lsphp85/bin/
sudo cp /usr/ports/lang/php85/work/stage/usr/local/bin/lsphp /usr/local/lsws/lsphp85/bin/
```

The LSPHP binary will now be located at `/usr/local/lsws/lsphp85/bin/lsphp`.

After the LSPHP binary is fully compiled, you can continue to the [Setup section](#setup).

#### Source[¶](#source "Permanent link")

Here, we will take a look at how to compile PHP + LSAPI from source. This can be useful for custom setups and for platforms where our LiteSpeed repository is not available.

##### Prerequisites[¶](#source-prereqs "Permanent link")

PHP has many dependencies that are needed when compiling, and these often change depending on what extensions and functions you compile PHP with. Before you can compile, you will need to install some default packages that are needed for semi-feature-rich PHP.

At the command line, run the following:

CentOSUbuntu/Debian

```
sudo dnf install patch gcc glibc libstdc++ binutils libtool autoconf make bison pam-devel libcap-devel openssl-devel tcp_wrappers-devel bzip2-devel curl-devel db4-devel gmp-devel httpd-devel libstdc++-devel sqlite-devel sqlite2-devel liyuybedit-devel pcre-devel libtool gcc-c++ libtool-ltdl-devel libevent-devel libc-client-devel cyrus-sasl-devel openldap-devel mysql-devel postgresql-devel unixODBC-devel libxml2-devel net-snmp-devel libxslt-devel libxml2-devel libjpeg-devel libpng-devel freetype-devel libXpm-devel t1lib-devel libmcrypt-devel libtidy-devel freetds-devel aspell-devel recode-devel enchant-devel firebird-devel gdbm-devel tokyocabinet-devel
```

```
sudo apt-get install build-essential pkg-config openssl libssl-dev bison autoconf automake libtool re2c flex libxml2-dev libssl-dev libbz2-dev libcurl4-openssl-dev libdb++-dev libjpeg-dev libpng-dev libxpm-dev libfreetype-dev libgmp3-dev libc-client2007e-dev libldap2-dev libmcrypt-dev libmhash-dev freetds-dev zlib1g-dev libmysqlclient-dev libncurses-dev libpcre3-dev unixodbc-dev libsqlite3-dev libaspell-dev libreadline-dev librecode-dev libsnmp-dev libtidy-dev libxslt1-dev libkrb5-dev libc6-dev libonig-dev libzip-dev -y
```

This will install the basic dependencies for the semi-feature-rich PHP that you will compile in the next section.

##### Compile[¶](#source-compile "Permanent link")

Now that the dependencies have been installed, you can work on compiling PHP.

Info

You can change `8.5.5` in the following commands to the version of PHP you wish to compile.

First, you will need to download and extract PHP. This can be done by running the following at the command line:

```
sudo cd /tmp
sudo wget https://www.php.net/distributions/php-8.5.5.tar.gz
sudo tar -xf php-8.5.5.tar.gz
sudo cd php-8.5.5
```

Now that PHP has been downloaded and extracted, run `./configure` with `--enable-litespeed` and other configuration options in the source code folder. For example, you can run the following:

ConfigureArchive (PHP 7.3)

```
sudo ./configure --prefix=/usr/local/lsws/lsphp85 --enable-litespeed --with-mysqli --with-zlib --enable-gd --enable-shmop --enable-sockets --enable-sysvsem --enable-sysvshm --enable-mbstring --with-iconv --with-pdo-mysql --enable-ftp --with-zip --with-curl --enable-soap --enable-xml --with-openssl --enable-bcmath
```

```
sudo ./configure  '--prefix=/usr/local/lsws/lsphp73' '--with-libdir=lib64' '--with-zlib' '--with-gd' '--enable-shmop' '--enable-sockets' '--enable-sysvsem' '--enable-sysvshm' '--with-curl' '--with-openssl' '--with-gettext' '--with-mcrypt' '--enable-mbstring=all' '--enable-mbregex' '--with-png-dir=/usr' '--with-jpeg-dir=/usr' '--with-kerberos' '--enable-ftp' '--with-imap=/usr' '--with-imap-ssl' '--with-mysql=/usr' '--with-mysqli=/usr/bin/mysql_config' '--enable-pcntl' '--with-freetype-dir=/usr' '--with-pdo-mysql=/usr' '--with-litespeed'
```

Note

For PHP 7.3 and earlier, run `./configure` with `--with-litespeed`.

Note

It is absolutely required to run `./configure` with `--enable-litespeed` if you want to build PHP with LSAPI. The other options are not required, but we do recommend setting a `--prefix` so PHP does not install to the default location and break any system PHP installations you may already have installed. This `--prefix` can be changed to whatever you want the path to be.

Now that PHP is configured to be compiled, you can compile it. This is accomplished by running these commands in a terminal:

```
sudo make
sudo make install
```

Info

During the `make` process, it is possible to run into dependency issues depending on the configuration options you have set. We recommend searching [Stack Overflow](https://stackoverflow.com/) to install these missing dependencies, as this is a very common and operating system-specific issue that others have probably already solved.

Once `make install` is finished, LSPHP is all set to go. You can continue to the [Setup section](lsws__extapp__php.md).

## Setup[¶](#setup "Permanent link")

Setting up PHP on LiteSpeed Web Server is simple with the introduction of the PHP section starting in LSWS version 5.3. For control panel environments, PHP is auto-detected and, if needed, can be [overridden](lsws__extapp__php__how-to.md#override-auto-detected-php) on a per-setup basis. This setup will show you how to manually set up the PHP section to work with the binaries on your system to serve PHP files.

### Settings[¶](#php-settings "Permanent link")

Using the PHP method requires LiteSpeed Web Server 5.3 or higher. You will only need to set up all of your PHP rules in the new PHP section of LSWS. Here are the various settings to configure that we offer for each section.

#### PHP global configuration[¶](#php-setting-global-config "Permanent link")

| Title | Value | Description |
| --- | --- | --- |
| **Detached Mode** | `Yes` | Run PHP handler processes detached from the main LiteSpeed worker process. |
| **Default PHP Versions** | `Not Set` | A list of PHP versions to use as the default `.php` handler when a `.php` handler has not been explicitly set through a script handler or the **Handled Suffixes** configuration. |
| **Control Panel** | `Auto Detect` | Auto-detect PHP handlers based on the control panel used. |
| **CloudLinux Alt PHP** | `Not Set` | Detect CloudLinux Alt PHP handlers. |
| **suEXEC Handlers** | `Not Set` | List of file suffixes associated with handlers in suEXEC mode. |
| **Enable CRIU** | `No` | Enable Checkpoint/Restore In Userspace (CRIU) functionality. |
| **CRIU Dump Min Reqs** | `2` | Minimum number of requests before triggering a CRIU dump. |
| **CRIU Debug** | `Yes` | Turn on CRIU debug logging. |

Notes

**Enable CRIU** should be set to `No` unless you know how to troubleshoot CRIU.

#### PHP handlers[¶](#php-setting-handlers "Permanent link")

| Title | Value | Description |
| --- | --- | --- |
| **Handler ID** | `php85` | A unique ID used to associate this PHP handler's command to its handled suffixes. The ID itself will also be treated as a handled suffix. |
| **Command** | `/usr/local/lsws/lsphp85/bin/lsphp` | Command used to start the PHP handler. |
| **Handled Suffixes** | `php` | Extra file suffixes to be handled by this handler. |
| **Notes** | `blank` | Add notes for yourself. |

Notes

Each **Handler ID** value needs to be unique. **Handled Suffixes** should be unique as well.

**Notes** is not a required field.

#### PHP handler defaults[¶](#php-setting-handler-defaults "Permanent link")

| Title | Value | Description |
| --- | --- | --- |
| **Max Connections** | `35` | Specifies the maximum number of concurrent connections that can be established between the server and an external application. |
| **Environment** | `PHP_LSAPI_CHILDREN=35` | Specifies extra environment variables for the external application. |
| **Initial Request Timeout** | `60` | Specifies the maximum time in seconds the server will wait for the external application to respond to the first request over a newly established connection. |
| **Retry Timeout** | `0` | Specifies the period of time that the server waits before retrying an external application that had a prior communication problem. |
| **Connection Keepalive Timeout** | `1` | Specifies the maximum time in seconds to keep an idle persistent connection open. |
| **Response Buffering** | `No` | Specifies whether to buffer responses received from external applications. |
| **Back Log** | `100` | Specifies the backlog of the listening socket. Required if **Start By Server** is enabled. |
| **Run On Start Up** | `Yes (Detached mode)` | Specifies whether to start the external application at server startup. |
| **Max Idle Time** | `10` | Specifies the maximum idle time before an external application is stopped by the server, freeing idle resources. |
| **Priority** | `0` | Specifies the priority of the external application process. |
| **Memory Soft Limit** | `2047M` | Specifies the memory consumption limit in bytes for an external application process or an external application started by the server. |
| **Memory Hard Limit** | `2048M` | Much the same as **Memory Soft Limit**, except the soft limit can be raised up to the hard limit from within a user process. |
| **Process Soft Limit** | `400` | Limits the total number of processes that can be created on behalf of a user. |
| **Process Hard Limit** | `500` | Much the same as **Process Soft Limit**, except the soft limit can be raised up to the hard limit from within a user process. |

Notes

**Max Connections** and `PHP_LSAPI_CHILDREN` values need to match. In this case, both need to equal `35`.

### Set up PHP[¶](#set-up-php "Permanent link")

#### GUI[¶](#php-setup-gui "Permanent link")

Here are the step-by-step instructions for how to set up the PHP section via our GUI:

1. Go to your WebAdmin Console (`https://192.0.2.123:7080`) and log in.
2. Navigate to **Configuration > Server > PHP**.
3. While on this page, be sure to fill in all the required fields. For default values and recommended values, you can hover over the tooltip icon or refer to the [Settings section](#php-settings). Once everything is filled out, be sure to select **Save**. [![WebAdmin PHP configuration](../images/getting-started01.png)](https://docs.litespeedtech.com/lsws/extapp/php/images/getting-started01.png)
4. Now that everything has been set up, navigate to **Actions** and select the icons next to **Restart Detached PHP Processes** and **Apply Changes / Graceful Restart**.

PHP is now fully set up, and pages ending in the suffixes you put for your **PHP Handler** will use **PHP Handlers > Command** to process the page.

#### Command line[¶](#command-line "Permanent link")

It is possible to set up the use of the PHP section manually via a terminal. Open `/usr/local/lsws/conf/httpd_config.xml` with your favorite editor, such as `nano`, `vim`, or `emacs`. For example, when using `vi`:

```
sudo vi /usr/local/lsws/conf/httpd_config.xml
```

Then, in the main `<httpServerConfig></httpServerConfig>` block, add the following:

```
<phpConfig>
  <detachedMode>1</detachedMode>
  <controlPanel>auto</controlPanel>
  <criuEnabled>0</criuEnabled>
  <criuDumpReqs>2</criuDumpReqs>
  <criuDebug>1</criuDebug>
  <phpHandler>
    <id>php85</id>
    <command>/usr/local/lsws/lsphp85/bin/lsphp</command>
    <suffixes>php</suffixes>
  </phpHandler>
  <maxConns>35</maxConns>
  <env>PHP_LSAPI_CHILDREN=35</env>
  <initTimeout>60</initTimeout>
  <retryTimeout>0</retryTimeout>
  <pcKeepAliveTimeout>1</pcKeepAliveTimeout>
  <respBuffer>0</respBuffer>
  <backlog>100</backlog>
  <runOnStartUp>3</runOnStartUp>
  <extMaxIdleTime>60</extMaxIdleTime>
  <memSoftLimit>2047M</memSoftLimit>
  <memHardLimit>2048M</memHardLimit>
  <procSoftLimit>400</procSoftLimit>
  <procHardLimit>500</procHardLimit>
</phpConfig>
```

Notes

It is possible that the `<phpConfig></phpConfig>` block is already there inside `<httpServerConfig></httpServerConfig>`. In this case, change or append to this section using the values in the [Settings section](#php-settings).

Inside `<phpHandler></phpHandler>`, make sure each `<id></id>` is unique, or it can cause issues when you restart LiteSpeed Web Server.

To have the changes you have just made to `/usr/local/lsws/conf/httpd_config.xml` take effect inside LiteSpeed Web Server, run the following:

```
sudo touch /usr/local/lsws/admin/tmp/.lsphp_restart.txt
sudo systemctl restart lsws
```
