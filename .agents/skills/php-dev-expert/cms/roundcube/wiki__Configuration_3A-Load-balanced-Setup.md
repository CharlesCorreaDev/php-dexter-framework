# Configuration: Load balanced Setup · roundcube/roundcubemail Wiki · GitHub

> **Fonte / Source:** https://github.com/roundcube/roundcubemail/wiki/Configuration%3A-Load-balanced-Setup

---

# Roundcube in a load-balanced multi-server setup

The default config shipped with the Roundcube packages is primarily set to be used on a single host. But Roundcube has capabilities to be run on multiple servers behind a load balancer or reverse proxy to serve a high-performance webmail service. And these are the bits that needs to be adjusted when running multiple front-end servers:

- Database access
- Shared session data storage
- Shared access to attachment uploads

## Database configuration

Roundcube uses a database to store user preferences, address books and caches. We recommend to run a dedicated database server (master) which all the Roundcube instances access via TCP. For performance improvements, you can set up replicated slaves on the Roundcube hosts and define two database connections for read and write access in Roundcube's config:

```
// PEAR database DSN for read/write operations
$config['db_dsnw'] = 'mysql://roundcube:********@dbmasterhost/roundcubemail';

// PEAR database DSN for read only operations (if empty write database will be used)
$config['db_dsnr'] = 'mysql://roundcube:********@localhost/roundcubemail';
```

## Shared session data storage

By default, Roundcube uses the database to store session data. Thus without further modification this will also work in a multi-server setup with a dedicated database server. Although when replication with local slaves is in place the latency of the replication process can cause unexpected behavior when a Roundcube client reads outdated data from the local slave.

Roundcube therefore provides alternative options for session storage: *`memcache`* or native *`php`* configurable with the `session_storage` config option.

### Memcache

[Memcached](http://memcached.org/) is a distributed caching daemon that can store data in memory redundantly on multiple hosts. In order to use it for session storage in Roundcube you first need to install and configure one or multiple memcache hosts. Then the [Memcache extension](http://pecl.php.net/package/memcache) (version >= 2.0.0) for PHP needs to be installed. You'll find various tutorials describing how to setup memcache with php on the net. Finally, adjust Roundcube's configuration accordingly:

```
// Backend to use for session storage. Can either be 'db' (default), 'memcache' or 'php'
$config['session_storage'] = 'memcache';

// Use these hosts for accessing memcached
// Define any number of hosts in the form of hostname:port or unix:///path/to/socket.file
$config['memcache_hosts'] = array( 'localhost:11211', '192.168.1.12:11211');
```

### Native PHP

PHP natively allows you to configure [different backends for session storage](http://www.php.net/manual/en/session.configuration.php#ini.session.save-handler), some of them are designed for sharing session data amongst multiple web servers. While Roundcube by default registers its own session handlers to store sessions in database or memcache, there are cases where you'd prefer to use the session storage configuration from your exissting PHP environment. With the following configuration you disable Roundcube's custom session save handlers and fall back to PHP's default session handling:

```
$config['session_storage'] = 'php';
```

## Sharing attachment upload files

The last part that needs to be addressed in a multi-server setup is the storage of files uploaded for being attached to outgoing messages. These by default are saved in a temporary folder on the local file system. When using round-robin load balancing that obviously doesn't work reliably and leads to missing attachments files when the "message send" operation hits another Roundcube instance than the upload did. Thus attachment files need to be stored in a place where all the Roundcube instances have read and write access to. This could be a

- Network storage device
- Database table
- Custom solution

### Saving temp files on a network share

The simplest way to have shared access to attachment files is to mount a network share (e.g. via NFS) and configure Roundcube to use that instead of the local temp folder:

```
// use this folder to store temp files (must be writeable for apache user)
$config['temp_dir'] = '/mnt/some-network-mounted-volume/';
```

### Storing attachments in database

Uploaded files can also be stored in Roundcube's database which already is accessible for all instances. Therefore Roundcube by default ships a plugin named `database_attachments` which just needs to be enabled and configured. Read how to [enable plugins](wiki__Plugin-API.md) in our wiki. That plugin itself has some more configuration options that'll let you store attachments in memcache instead of the database.

To take this one step further, another plugin named *redundant\_attachments* can be chosen over the 'database\_attachments' plugin. This one provides a more fail-safe solution by storing attachments in both, the database and the local file system with an additional fall-back to memcache in case the database write-master is unavailable.

### Implement a custom storage plugin

Temporary attachment file storage is entirely handled by plugins in Roundcube. Even the default storage in the local file system is done by a plugin. This makes it very easy to add a custom storage method for these file. Read [How to Write a Plugin](wiki__Plugin-API.md) and have a look at the existing implementations in either one of the default plugins: [filesystem\_attachments](https://github.com/roundcube/roundcubemail/tree/master/plugins/filesystem_attachments), [database\_attachments](https://github.com/roundcube/roundcubemail/tree/master/plugins/database_attachments) or [redundant\_attachments](https://github.com/roundcube/roundcubemail/tree/master/plugins/redundant_attachments).

The only requirement for integrating your custom attachment handler plugin is to extend the `filesystem_attachments` plugin class. Then just override the methods defined in that plugin class.
