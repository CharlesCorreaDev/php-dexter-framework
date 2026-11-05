# Namespace Containers | Configuration | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/namespaces/

---

# Namespace Containers[¶](#namespace-containers "Permanent link")

Namespaces in Linux are often used to implement containers and are great at implementing sandboxes where files, users, processes and just about all system resources are separated from all other processes.

This feature in LiteSpeed is modeled after [bubblewrap](lsws__bubblewrap.md) and uses a number of similar parameters. However, it uses the native namespace features in Linux and does not require any additional packages to be installed. It takes many fewer resources and runs faster than bubblewrap, as it is optimized for LiteSpeed.

## Why use Namespace Containers[¶](#why-use-namespace-containers "Permanent link")

LiteSpeed Web Server performs the full implementation of namespace containers and is intended to be a replacement for bubblewrap for the web server. Bubblewrap is a general purpose tool for the sandboxing of data and can still be used, but there are advantages in using the namespace container facility:

- Full integration into the product. No other tools need to be installed. All you need is what is included on your Linux system.
- No overhead of having to run a secondary program.
- Persistence. When a set of namespace containers is created for a program it is mounted in `/var/lsns/(user ID)`. When a later program needs to use the same environment, it does not need to create it. The later program can simply attach to it. This is similar to the program `nsenter` (described in our [bubblewrap documentation](lsws__bubblewrap.md#troubleshooting)) and a dramatic reduction in time and system resources.
- LiteSpeed-specific features. Bubblewrap creates all temporary file systems as `tmpfs` file systems which are backed by real memory. LiteSpeed offers `tmpfs` as well, but it’s default type for root (`/`) and `/tmp` is a disk-backed system, which will not exhaust your system’s memory.

## Configuration[¶](#configuration "Permanent link")

To use namespace containers you must configure LiteSpeed to use it. In the LiteSpeed configuration, **Security** tab, **Containers** group there are two fields:

- **Namespace Container**. Must be set to `Enabled` to enable namespace container sandbox isolation. Other options are `Not Set` (disabled) and `Off`. `Not Set` is the default.  The configuration file name of this parameter is `namespace` and legal values are `0`: not set (disabled), `1`: off and `2`: enabled. Using Apache you can controll all Apache VHosts using the VHost Apache directive `LsNamespaces` (see below).
- **Namespace Template File**: Lets you point to an existing file which contains a list of directories to be mounted as well as the way they are mounted.  The file name can be an absolute path or a relative path using `$SERVER_ROOT`. The configuration file name of this parameter is `namespaceConf`. There is no Apache equivalent for this value so it must be specified using the native interface.

If you set **Namespace Containers** and then do not set a **Namespace Template File** it will use a default, which is the same in execution, but is specified somewhat differently than in bubblewrap (see **Creating the Namespace Template File(s)** below). The contents of the defaults (if you don't specify a file) are as follows:

```
$HOMEDIR/.lsns/tmp /tmp,tmp
/usr,ro-bind
/lib,ro-bind
/lib64,ro-bind-try
/bin,ro-bind
/sbin,ro-bind
/var,dir
/var/www,ro-bind-try
/proc,proc
../tmp var/tmp,symlink
/dev,dev
/etc/localtime,ro-bind-try
/etc/ld.so.cache,ro-bind-try
/etc/resolv.conf,ro-bind-try
/etc/ssl,ro-bind-try
/etc/pki,ro-bind-try
/etc/man_db.conf,ro-bind-try
/usr/local/bin/msmtp /etc/alternatives/mta,ro-bind-try
/usr/local/bin/msmtp /usr/sbin/exim,ro-bind-try
$HOMEDIR,bind-try
/var/lib/mysql/mysql.sock,bind-try
/home/mysql/mysql.sock,bind-try
/tmp/mysql.sock,bind-try
/run/mysqld/mysqld.sock,bind-try
/var/run/mysqld.sock,bind-try
/run/user/$UID,bind-try
$PASSWD
$GROUP
/etc/exim.jail/$USER.conf $HOMEDIR/.msmtprc,copy-try
/etc/php.ini,ro-bind-try
/etc/php-fpm.conf,ro-bind-try
/etc/php-fpm.d,ro-bind-try
/var/run,ro-bind-try
/var/lib,ro-bind-try
/etc/imunify360/user_config/,ro-bind-try
/etc/sysconfig/imunify360,ro-bind-try
/opt/plesk/php,ro-bind-try
/opt/alt,bind-try
/opt/cpanel,bind-try
/opt/psa,bind-try
/var/lib/php/sessions,bind-try
/var/lib/php/session,bind-try
```

This particular default is intended to give you a very secure environment to run your scripts from.

## Vhosts[¶](#vhosts "Permanent link")

In a vhost definition you can specify both **Namespace Containers** and **Additional Namespace Template File** but they have slightly different meanings than for the server definition:

- **Namespace Containers**: If set to `Not Set` then the server level definition is used (the default). Can be set to `Enabled`, which will override the server level unless it is Disabled at the server level and `Off`, which always turns off namespace container support. The configuration file name of this parameter is `namespace` and legal values are `0`: server level is used, `1`: off and `2`: enabled. The Apache directive is `LsNamespaces` and must have the values `on` or `off`.
- **Additional Namespace Template File**: Lets you point to an existing file which contains a list of directories to be mounted as well as the way they are mounted. The file name can be an absolute path, a relative path using `$SERVER_ROOT` or a relative path using `$VH_ROOT`. If you specify a namespace template file at both the server level and the vhost level, they are BOTH used. The configuration file name of this parameter is `namespaceConfVhAdd`. The Apache directive is `LsNsConf2`.

Note

When specifying a vhost configuration or vhost template you must set the **External App Set UID Mode** to `DocRoot UID`. This allows namespaces to run at all and then run as the user owning the doc root.

## Creating the Namespace Template File(s)[¶](#creating-the-namespace-template-files "Permanent link")

Typically the namespace template file will be created in the `$SERVER_ROOT/conf` directory, an example name might be `nsconf.conf`. Each line in the file is a single namespace command

- Typically a directory or a symbol. Examples from above include the `/usr` directory.
- If the command supports source and destination, they can be specified separated by a space or a comma, source followed by destination. If the directory has a space or comma in it, it must be quoted (either with single quotes or double quotes). If the destination is not specified, then the source is used as the destination.
- The final parameter on a line is the command. It is exactly the same as a bubblewrap command, but without the leading double-dashes (--). If you do not specify a command, then ro-bind-try is used.
- A '#' in the first column is used as a comment

### Commands[¶](#commands "Permanent link")

Valid commands are:

- `bind`: Mounts a specified source file or directory to an optional destination in read-write mode. The source must exist.
- `bind-try`: Mounts a specified source file or directory to an optional destination in read-write mode. The source does not have to exist.
- `copy`: Copies a file from a specified source file to an optional destination file. The advantage of this over bind is that the permissions from the source file are preserved. The source must exist. This command replaces `$COPY` in the bubblewrap implementation of LiteSpeed.
- `copy-try`: Exactly the same as copy, except that if the source doesn’t exist the operation is skipped.
- `dev`: Mounts a device directory (almost always `/dev`) to a specified mount point. Only specify one directory.
- `dev-bind`: Mounts a specified source file or directory to an optional destination allowing device access. The source must exist.
- `dev-bind-try`: Mounts a specified source file or directory to an optional destination allowing device access. The source does not have to exist.
- `dir`: Creates the specified directory name.
- `mqueue`: Creates the specified message queue.
- `proc`: Creates the proc mount. Almost always specify the `/proc` directory.
- `remount-ro`: Remounts the specified file or directory read-only.
- `ro-bind`: Mounts a specified source file or directory to an optional destination in read-only mode. The source must exist.
- `ro-bind-try`: Mounts a specified source file or directory to an optional destination in read-only mode. The source does not have to exist.
- `symlink`: Using the source file or directory, creates a destination file or directory.
- `tmp`: Creates a temporary directory, backed by disk, at the specified destination directory. Note that in bubblewrap, all temporary directories are of type `tmpfs` including root (`/`) and `/tmp`.
- `tmpfs`: Mount a temporary file system on the specified directory of type `tmpfs` (backed by memory).
- `no-unshare-user`: Disables the unsharing of the user namespace container. See below for a description of user namespace containers and why you might want to disable them.

### Excluding a Directory[¶](#excluding-a-directory "Permanent link")

If you specify a directory be bind mounted, you can exclude a given directory by specifying:

```
!directory
```

For example, if you had bind-mounted `/lib` and you wanted to exclude the contents of `/lib/cups`, specify on a line in your namespace template file AFTER the line that bind mounts the /lib directory:

```
!/lib/cups
```

No commands can be specified in an exclude.

### Symbols[¶](#symbols "Permanent link")

Valid symbols are:

- `$GID`: The active gid
- `$GROUP`: See below for specifying the group file
- `$HOMEDIR`: The home directory of the user. Can be specified by itself, in which case it will use the default of ro-bind-try in its original location.
- `$PASSWD`: See below for specifying the passwd file.
- `$UID`: The active uid.
- `$USER`: The active user name.

The LiteSpeed specific symbol `$COPY` is not a valid symbol for namespace containers as the command `copy` performs the same function.

### The /etc/passwd and /etc/group files[¶](#the-etcpasswd-and-etcgroup-files "Permanent link")

If you wish to have a customized `/etc/passwd` file, use the symbol `$PASSWD`; for a customized `/etc/group` file, use the symbol `$GROUP`. This will automatically create a `/etc/passwd` or `/etc/group` file with just the active user/group in it. To add additional users, follow it by a comma, and the comma separated names you wish to include. These names must exist in the source file. For example, to create an `/etc/passwd` file with the users `nobody` and `root`, specify in your namespace template file:

```
$PASSWD,nobody,root
```

### Is it working?[¶](#is-it-working "Permanent link")

You can use the same technique described for LiteSpeed BubbleWrap to determine if [it's working](lsws__bubblewrap.md#is-it-working).

## Persistence[¶](#persistence "Permanent link")

To improve performance, namespace containers are bind-mounted on your source system in the `/var/lsns` directory structure. It follows the pattern of `/var/lsns/<UID number>`. In most cases you will not need to touch this directory. The best way to see what is persisted is to use the `mount` command (as root, with no parameters). To see if the user number 1000 is persisted, run:

```
sudo mount | grep 1000
```

. ..and you should see a number of lines in the `/var/lsns` referencing mounts.

There are several ways to restart persistence of mounts:

- Gracefully restart LiteSpeed. All running tasks will continue to run and new tasks will get a separate mount space.
- You can force the use of a separate mount space with `unmount_ns`.

Also note that all persisted namespace containers are removed in a reboot.

Because of persistence, if you change a namespace container configuration file or the name of a namespace container configuration file in the configuration, you will want to either do an unmount for all users or a graceful restart of LiteSpeed.

### unmount\_ns[¶](#unmount_ns "Permanent link")

This is a custom program, included with LiteSpeed specifically to remove persistent mounts in a safe manner. Command line parameters for this program (the program is in the `$SERVER_ROOT/lsns/bin` directory):

- `-u <user id number or user name>`. For example to remove the persisted namespace containers for user ID #1000, specify:

  ```
  sudo ./unmount_ns -u 1000
  ```

  Or for the user named `user1`

  ```
  sudo ./unmount_ns -u user1
  ```
- `-s <vhost name>`. Only valid with `-u`, allows you to specify a specific vhost to dismount for that user.
- `-a`. Removes all persisted namespace containers, for all users in all vhosts. For example:

  ```
  sudo ./unmount_ns -a
  ```
- `-v`. Verbose mode. Can be used with any option above.

Note that this program will not dismount the mounts if there are any CGI, PHP or other processes running which use the persisted mounts - it creates a separate namespace for them.

## Problem Programs[¶](#problem-programs "Permanent link")

There are some programs that simply can't run in a namespace, like `sendmail` or `passwd`. To deal with this problem, LiteSpeed has its `hostexec` facility, which lets you list programs which will be run outside the Namespace Container. Note that these programs still run as the user, and access to this is under control of a file that you can set to have permissions you limit.

To specify programs you wish to use this facility, create a file named `/usr/local/lsws/lsns/conf/hostexec.conf`. Each line in the file is a fully qualified name for one program to be run outside of the namespace. So a simple example would be:

```
/usr/sbin/sendmail
```

To activate changes in this file, you must do the following:

1. Restart LiteSpeed (a graceful restart will do)
2. Run `unmount_ns -a` to unmount any persisted namespaces, or use the **Unmount** button in the LiteSpeed plugin
3. Restart all PHP instances

## Managing Namespaces[¶](#managing-namespaces "Permanent link")

LiteSpeed includes a program to help you manage namespaces at run-time: `lsnsctl`. It provides access to a number of features including:

- The ability to disable namespace management for a user that is configured to use it. This is particularly useful if you have enabled namespaces at the global level and want to exclude specific users.
- The ability to set a minimum UID to be examined (`set-min-uid`). Until you do this, the LiteSpeed Containers API programs, including this one will complain that this has not been done.
- unmount one or all users.

### lsnsctl[¶](#lsnsctl "Permanent link")

`lsnsctl` is stored in the `$SERVER_ROOT/lsns/bin` directory. Zero or more options may be specified, and exactly one command.

| Command | Description |
| --- | --- |
| `disable-uid` | Disables a configured user for namespaces. You must specify a `-–uid` UID option. |
| `enable-uid` | Enables a configured user previously disabled. You must specify a`–-uid` UID option. |
| `get-min-uid` | Display current `MIN_UID` setting. |
| `list-disabled-uids` | Lists the configured disabled users as a JSON array. |
| `list-mount` | Lists users mounted and the directories mounted for them in JSON form. Can have an optional UID. |
| `set-min-uid` | Sets/modifies the`min_uid` value in `uid.conf` file. |
| `unmount` | Unmounts the mounts mounted for a container by UID mounted by a namespace. |
| `unmount-all` | Unmounts all mounts for all namespaced containers. |
| `version` | The version number of the API program. |

Options include:

| Option | Commands | Description |
| --- | --- | --- |
| `-h`, `–help` | All | Show usage information |
| `-l`, `–log LEVEL` | All | `10`=debug, `20`=info (default), `30`=warning, `40`=error. |
| `-–uid UID` or `USERNAME` | `disable-uid`, `enable-uid`, `list-disabled-uids`, `list-mount`, `set-min-uid`, `unmount` | See description for the commands. |

See [Namespaces and cgroups CLI](lsws__cli-cgroups.md#lsnsctl) for more details about this program.

## Troubleshooting[¶](#troubleshooting "Permanent link")

An early step in troubleshooting is to verify that what you are doing doesn't fall into the case of [Problem Programs](#problem-programs).

If you have a problem that won't go away after several changes, you may be dealing with a perisisted namespace and need to run the [unmount\_ns](#unmount_ns) program.

Troubleshooting is similar to bubblewrap in LiteSpeed with some additions specific to persistence.

As always, the best places to look for resolution to namespace problems are the `error.log` and `stderr.log` in the LiteSpeed logs directory.

Note

After every configuration change, including changes to the namespace template files, if your application uses PHP, you will need to kill `lsphp` so it does not continue using the old configuration.

Note

If you are using caching, you may see an error like: `wp-cache.php is not writable` preceded by a directory. If this is the case, then you will need to note that directory and create a namespace template file which includes the directory, a comma and the operator `bind`.

In some cases it can be quite difficult to troubleshoot a namespace container problem because the application may not be able to properly report an error after a successful launch of the application. One tool that can be useful is `nsenter`, part of the OS `util-linux` package, which allows you to enter the environment where the namespace container is running.

The steps to use `nsenter` are (as root), if the program you are troubleshooting is a php program:

- Find the process which is running the process: `ps -ef|grep lsphp`. The process ID is in the second column.
- Enter that environment. For example if the pid is 107263 you would specify (as one line):

  ```
  nsenter -t 107263 -a
  ```
- Once running as that user, you will be able to see the capabilities of the user and the files and directories available.

Once a user is persisted, it’s persisted state is used until it is manually unpersisted (using `unmount_ns`) or the system is rebooted. To see what is persisted, `mount` is your best tool.

```
mount | grep /var/lsns
```

Another method to determine the state of a namespace environment is to write a simple CGI script like this one, which gets directory lists of the user's home directory and does some other useful things.

```
#!/bin/bash

date=`date -u '+%a, %d %b %Y %H:%M:%S %Z'`
ls=`ls -al /`
lsetc=`ls -alR /etc`
whoami=`whoami`
homedir=$(getent passwd $whoami | cut -f6 -d:)
lshome=$(ls -al $homedir)
env=$(env)
#sleep 180
cat << EOF
Content-type: text/plain
Expires: $date

I am: $whoami Now: $date
Directory /:
$ls
Directory /etc (with subdirectories):
$lsetc
HOME dir: $homedir
$lshome
env:
$env

EOF
```

To test it:

- Place this file in your virtual host `cgi-bin` directory. For the example virtual host, that would be `/usr/local/lsws/Example/cgi-bin`
- Change the owner/group of the file to be the user you wish to test. For example:

  ```
  chown user:users dirlist
  ```
- Set the execute bit on. For example:

  ```
  chmod 700 dirlist
  ```
- In the LiteSpeed configuration, for your Virtual Host, set **External App Set UID Mode** to `CGI File UID` to run as the user you wish to run as. Run a Graceful Restart to refresh the configuration.
- In your browser, navigate to the file. For the example virtual host that would be `http://127.0.0.1:8088/cgi-bin/dirlist`

A script like this can be set to do many things including run programs that will allow you to probe user/sandbox capabilities. This may help you add or modify the bind or other settings for the sandbox.

You can turn on debugging, which is very verbose, by creating a file in the root file system named `/lsnsdebug`, this is also the trigger for bubblewrap debugging as well. Note that this will cause a large amount of output in `stderr.log` and is only recommended when suggested by LiteSpeed technical support.  If you specify a file name in the `/lsnsdebug` file it will write to that name rather than `stderr.log`.

Similar to `nsenter`, an included program in `$SERVER_ROOT/lsns/bin/` (usually `/usr/local/lsws/lsns/bin`) is `cmd_ns`. This program will let you simulate a LiteSpeed environment and run a bash shell or a command. To see the options, run `/usr/local/lsws/bin/lsns/bin/cmd_ns -?`:

```
cmd_ns - Enter a shell using a method like LiteSpeed
Usage:
  -u <user or ID>   : A specific user's name or ID to be used (nobody by default)
  -s <vhost>        : Lets you specify a specific vhost for the specific user
  -m <cmd>          : The command to run. /bin/bash by default
  -d <dir>          : Default directory.  Defaults to home of UID
  -c                : Whether cgroups should be enforced.
  -f <config file>  : The config file to be used (system defaults if not specified)
  -2 <config file>  : Additional vhost config file
  -v                : Verbose output
  -h                : Display this help message
```

So for example, if you wish to simulate the user `user1` running in the default directory, with cgroups enabled and with the configuration file `/usr/local/lsws/lsns/conf/ns.conf` enter from a command line:

```
cd /usr/local/lsws/lsns/bin
sudo ./cmd_ns -u user1 -c -f /usr/local/lsws/lsns/conf/ns.conf
```

Which will bring up a command prompt in the home directory of the user.
