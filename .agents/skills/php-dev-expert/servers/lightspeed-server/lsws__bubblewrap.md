# Bubblewrap | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/bubblewrap/

---

# Bubblewrap[¶](#bubblewrap "Permanent link")

Bubblewrap is a lightweight sandbox application developed from Flatpak with a small installation footprint and minimal resource requirements. [See their wiki for details](https://wiki.archlinux.org/index.php/Bubblewrap). It has been integrated into LiteSpeed Web Server.

## Installing bubblewrap[¶](#installing-bubblewrap "Permanent link")

You must install bubblewrap first to use it with LiteSpeed Web Server.

Warning

Versions of bubblewrap before 0.3.1 do not support `--ro-bind-try`, which is one of the defaults with LiteSpeed. So even if you have it installed, verify the version using `bwrap --version`. If it's not 0.3.1 or higher follow the instructions below to upgrade it.

### Ubuntu 20.04[¶](#ubuntu-2004 "Permanent link")

```
sudo apt install bubblewrap
```

### CentOS 7[¶](#centos-7 "Permanent link")

```
sudo yum localinstall -y https://dl.fedoraproject.org/pub/archive/epel/testing/7.7/x86_64/Packages/b/bubblewrap-0.3.3-2.el7.x86_64.rpm
```

### CentOS 8[¶](#centos-8 "Permanent link")

```
sudo dnf install -y https://ewr.edge.kernel.org/centos/8-stream/BaseOS/x86_64/os/Packages/bubblewrap-0.4.0-1.el8.x86_64.rpm
```

### Ubuntu 16.04 and 18.04 and Similar Releases[¶](#ubuntu-1604-and-1804-and-similar-releases "Permanent link")

We strongly recommend you have a supported version 0.3.3 or higher. With Ubuntu 16.04 and 18.04 you will need to build it. The steps to do it are:

```
sudo apt install pkg-config libcap-dev automake
git clone https://github.com/containers/bubblewrap.git
cd bubblewrap
git checkout v0.4.1
./autogen.sh
make
sudo make install
sudo ln -s /usr/local/bin/bwrap /bin/bwrap
sudo mv /usr/bin/bwrap /usr/bin/bwrap.dist
sudo ln -s /usr/local/bin/bwrap /usr/bin/bwrap
```

## Configure LiteSpeed Web Server for bubblewrap[¶](#configure-litespeed-web-server-for-bubblewrap "Permanent link")

Once installed you must configure LiteSpeed Web Server to use it. In the LiteSpeed Web Server **Server Configuration > Security** tab, **Bubblewrap Container** group there are two fields:

- **Bubblewrap Container**.  It is required that bubblewrap be enabled at the virtual host level (and set to `Off` here)
  - Server Level `Disabled` + Virtual Host Level `On` = `Off`
  - Server Level `On` + Virtual Host Level `Off` = `Off`
  - Server Level `Off` + Virtual Host Level `On` = `On`
- **Bubblewrap Command**. Lets you set the full bubblewrap command line used to start the CGI or PHP program.

If you set **Bubblewrap Container** `On` and then do not set **Bubblewrap Command** it will use the default of:

```
/bin/bwrap --ro-bind /usr /usr --ro-bind /lib /lib --ro-bind-try /lib64 /lib64 --ro-bind /bin /bin --ro-bind /sbin /sbin --dir /var --ro-bind-try /var/www /var/www --dir /tmp --proc /proc --symlink ../tmp var/tmp --dev /dev --ro-bind-try /etc/localtime /etc/localtime --ro-bind-try /etc/ld.so.cache /etc/ld.so.cache --ro-bind-try /etc/resolv.conf /etc/resolv.conf --ro-bind-try /etc/ssl /etc/ssl --ro-bind-try /etc/pki /etc/pki --ro-bind-try /etc/man_db.conf /etc/man_db.conf --ro-bind-try /usr/local/bin/msmtp /etc/alternatives/mta --ro-bind-try /usr/local/bin/msmtp /usr/sbin/exim --bind-try $HOMEDIR $HOMEDIR --bind-try /var/lib/mysql/mysql.sock /var/lib/mysql/mysql.sock --bind-try /home/mysql/mysql.sock /home/mysql/mysql.sock --bind-try /tmp/mysql.sock /tmp/mysql.sock  --bind-try /run/mysqld/mysqld.sock /run/mysqld/mysqld.sock --bind-try /var/run/mysqld/mysqld.sock /var/run/mysqld/mysqld.sock '$COPY-TRY /etc/exim.jail/$USER.conf $HOMEDIR/.msmtprc' --unshare-all --share-net --die-with-parent --dir /run/user/$UID '$PASSWD 65534' '$GROUP 65534'
```

This particular default is intended to give you a very secure environment to run your CGI or PHP scripts from.

### LSWS Native Virtual Host[¶](#lsws-native-virtual-host "Permanent link")

Enable Bubblewrap at the virtual host configuration level in the **Security** tab, **Bubblewrap Container** group. It is required that it be configured at the virtual host level to give you fine control of the domains that are being affected.

You must also run your virtual host in suEXEC mode. To enable suEXEC mode, in the virtual host configuration level in the **Basic** tab, **Security** group, you must specify **External App Set UID Mode** to `Doc Root UID` and you control the user the application runs as by modifying the user that owns the file you are executing (PHP or CGI script).

Besides the normal requirement of doing a restart of LiteSpeed after a configuration change, if your application uses PHP, you will need to configure a virtual host level PHP handler and kill any running `lsphp` instances after any configuration change.

### Apache Virtual Host[¶](#apache-virtual-host "Permanent link")

For Apache virtual hosts in a control panel environment, you can control bubblewrap by adding the following to the virtual host's Apache configuration file:

```
 <IfModule LiteSpeed>
 BubbleWrap on|off
 </IfModule>
```

Bubblewrap automatically creates an isolated environment for the current user associated with the site. Only the user's home directory is visible.

## Is it working?[¶](#is-it-working "Permanent link")

The easiest way to tell if bubblewrap has negatively affected your environment is to run the `phpinfo.php` program which will show you whether a PHP script will run. Of course you can run your application as well.

You will want to know not just whether it has broken your program, but also if it's providing any additional protection. One way to do that would be to create a simple script, we've named `dirlist.php` which you place in a location where a browser can be used to run it, in `/usr/local/lsws/DEFAULT/html` if you are using the default configuration:

```
<?php
$dir    = '/';
$files1 = scandir($dir);
print_r($files1);
?>
```

When you load it in your browser you should see a very small number of entries, just the directories you specified mounted from the root:

```
Array ( [0] => . [1] => .. [2] => bin [3] => dev [4] => etc [5] => lib [6] => lib64 [7] => proc [8] => run [9] => sbin [10] => tmp [11] => usr [12] => var )
```

Set **Bubblewrap Container** `Off`, stop and restart LiteSpeed and you might see something much larger (an example, yours will be different):

```
Array ( [0] => . [1] => .. [2] => bin [3] => bob [4] => boot [5] => cdrom [6] => dev [7] => etc [8] => home [9] => lib [10] => lib32 [11] => lib64 [12] => libx32 [13] => lost+found [14] => media [15] => mnt [16] => opt [17] => proc [18] => root [19] => run [20] => sbin [21] => snap [22] => srv [23] => swapfile [24] => sys [25] => tmp [26] => usr [27] => var )
```

Tip

`scandir()` may not work if an `open_basedir` restriction is in place. You may need to disable `open_basedir` when running this test.

## Manual Configuration[¶](#manual-configuration "Permanent link")

The bubblewrap configuration is in the **Security** group. Note that virtual host configuration overrides this value, unless it it disabled here.

- **bubbleWrap** set to `0` to disable (the default or not set value), `1` to turn off at this level, `2` to turn on at this level. It is required that bubblewrap be configured enabled at the virtual host level (set to 1 or 2 here).
- **bubbleWrapCmd** is optional and can be set to the fully qualified and specified bubblewrap command line. The example above is the default. A very simple one might be `/bin/bwrap --dev-bind / /`.

At the Virtual Host configuration level, the option is:

- **bubbleWrap** set to `0` to not set, which is the default and indicates to not use bubblewrap; `1` is to turn off at this level and `2` is to turn on at this level. It is in the **Security** configuration file group.

## Customizing[¶](#customizing "Permanent link")

To create a customized bubblewrap environment, you will want to know the following:

- All parameters are much like the command line when run from bash, space separated parameters as documented.
- The first parameter must always be the exact location of the bubblewrap executable. You must change the default if it is not installed in /bin/bash or /usr/bin/bwrap in your environment.
- You must change the default if it is missing access to Unix Domain Sockets that you may need to access your databases (other than the default for mysql).
- The current user's home directory can be specified with the token `$HOMEDIR` and is used in the default.
- The current user name can be specified with the token `$USER`.
- The current user ID can be specified with the token `$UID`.
- The current group ID can be specified with the token `$GID`.
- A virtual file /etc/passwd can be created with the token `$PASSWD` with command line parameters of the users you wish to preserve (by ID). By default the current effective user ID is the only entry; you can add others by specifying the numbers, after the entry, quoted. For example: `'$PASSWD 65534’`. It is used in the default.
- A virtual file /etc/group can be created with the token `$GROUP` with command line parameters of the groups you wish to preserve (by ID). By default the current effective group ID is the only entry; you can add others by specifying the numbers, after the entry, quoted. For example: `‘$GROUP 65534’`. It is used in the default.
- If you wish you can copy a file from a source to a destination in the new namespace with `$COPY` (which requires the source to exist), or `$COPY-TRY` (which will not fail the operation if the source doesn't exist).  The operator, `$COPY` or `$COPY-TRY` will copy the entire file from the source to the destination.  The operator must be specified as a single quoted parameter, separating the token from the source with a space and the source from the destination with a space.  You can use the tokens above (`$USER`, `$HOMEDIR`, etc.) in the operation.  Thus the default of `'$COPY-TRY /etc/exim.jail/$USER.conf $HOMEDIR/.msmtprc'` will copy `/etc/exim.jail/(user name).conf` (if it exists) to a file at the root of the user's home directory named `.msmtprc`.
- All space separated parameters are assumed to be individual parameters. If you need to embed a space in a parameter (like for a space in a directory name), you can enclose the parameter in single quotes: `'parameter'` or double quotes: `"parameter"`.
- Any attempt to run a shell from within bwrap will be denied.
- We always recommend that you specify the option `--die-with-parent` so that you do not have orphaned tasks.

## Troubleshooting[¶](#troubleshooting "Permanent link")

As always, the best places to look for resolution to bubblewrap problems are the `error.log` and `stderr.log` in the LiteSpeed logs directory.

Note

After every configuration change, if your application uses PHP, you will need to kill `lsphp` so it does not continue using the old configuration.

Note

If you are using caching, you may see an error like: `wp-cache.php is not writable` preceded by a directory. If this is the case, then you will need to note that directory and create a customized **Bubblewrap Command** that includes a `--bind`, followed by the directory twice (source and target) for that directory.

In some cases it can be quite difficult to troubleshoot a bubblewrap problem because the application may not be able to properly report an error after a successful launch of bubblewrap. One tool that can be useful is `nsenter`, which allows you to enter the environment where the namespace is running.

The steps to use `nsenter` are (as root):

- Find the process which is running the bwrap process: `ps -ef|grep bwrap`. Often it is `lsphp`, and often it is the second one running bwrap. The process ID is in the second column.
- Enter that environment. For example if the pid is 107263 you would specify:

  ```
  nsenter --mount=/proc/107263/ns/mnt --uts=/proc/107263/ns/uts --ipc=/proc/107263/ns/ipc --pid=/proc/107263/ns/pid
  ```
- An example session: find the process, enter it, list the contents of `/etc/passwd`:

  ```
  # ps -ef|grep bwrap
  nobody    107262  107205  0 13:38 ?        00:00:00 /bin/bwrap --ro-bind /usr /usr --ro-bind /lib /lib --ro-bind-try /lib64 /lib64 --ro-bind /bin /bin --ro-bind /sbin /sbin --dir /var --ro-bind-try /var/www /var/www --dir /tmp --proc /proc --symlink ../tmp var/tmp --dev /dev --ro-bind-try /etc/localtime /etc/localtime --ro-bind-try /etc/ld.so.cache /etc/ld.so.cache --ro-bind-try /etc/resolv.conf /etc/resolv.conf --ro-bind-try /etc/ssl /etc/ssl --ro-bind-try /etc/pki /etc/pki --ro-bind-try /etc/man_db.conf /etc/man_db.conf --ro-bind-try /home/nobody /home/nobody --bind-try /var/lib/mysql/mysql.sock /var/lib/mysql/mysql.sock --bind-try /home/mysql/mysql.sock /home/mysql/mysql.sock --bind-try /tmp/mysql.sock /tmp/mysql.sock --bind-try /run/mysqld/mysqld.sock /run/mysqld/mysqld.sock --unshare-all --share-net --die-with-parent --dir /run/user/65534 --file 3 /etc/passwd --file 4 /etc/group /usr/local/lsws/lsphp74/bin/lsphp
  nobody    107263  107262  0 13:38 ?        00:00:00 /bin/bwrap --ro-bind /usr /usr --ro-bind /lib /lib --ro-bind-try /lib64 /lib64 --ro-bind /bin /bin --ro-bind /sbin /sbin --dir /var --ro-bind-try /var/www /var/www --dir /tmp --proc /proc --symlink ../tmp var/tmp --dev /dev --ro-bind-try /etc/localtime /etc/localtime --ro-bind-try /etc/ld.so.cache /etc/ld.so.cache --ro-bind-try /etc/resolv.conf /etc/resolv.conf --ro-bind-try /etc/ssl /etc/ssl --ro-bind-try /etc/pki /etc/pki --ro-bind-try /etc/man_db.conf /etc/man_db.conf --ro-bind-try /home/nobody /home/nobody --bind-try /var/lib/mysql/mysql.sock /var/lib/mysql/mysql.sock --bind-try /home/mysql/mysql.sock /home/mysql/mysql.sock --bind-try /tmp/mysql.sock /tmp/mysql.sock --bind-try /run/mysqld/mysqld.sock /run/mysqld/mysqld.sock --unshare-all --share-net --die-with-parent --dir /run/user/65534 --file 3 /etc/passwd --file 4 /etc/group /usr/local/lsws/lsphp74/bin/lsphp
  root      107324  106866  0 13:40 pts/0    00:00:00 grep --color=auto bwrap
  # nsenter --mount=/proc/107263/ns/mnt --uts=/proc/107263/ns/uts --ipc=/proc/107263/ns/ipc --pid=/proc/107263/ns/pid
  -bash-5.0# cat /etc/passwd
  nobody:x:65534:65534:nobody:/nonexistent:/usr/sbin/nologin
  ```
- In Debian (or other distributions), you may see in `stderr.log` the error:

  ```
  [STDERR] bwrap: setting up uid map: No such file or directory
  ```

  We've seen conditions where user namespaces do not function correctly with bubblewrap in these environments and since user namespaces provide minimal protection anyway, you should use a custom bubblewrap configuration which does not do an `unshare-all`, and enumerates the options you wish to use, not including `--unshare-user`. For example:

  ```
  /usr/bin/bwrap --ro-bind /usr /usr --ro-bind /lib /lib --ro-bind-try /lib64 /lib64 --ro-bind /bin /bin --ro-bind /sbin /sbin --dir /var --ro-bind-try /var/www /var/www --dir /tmp --proc /proc --symlink ../tmp var/tmp --dev /dev --ro-bind-try /etc/localtime /etc/localtime --ro-bind-try /etc/ld.so.cache /etc/ld.so.cache --ro-bind-try /etc/resolv.conf /etc/resolv.conf --ro-bind-try /etc/ssl /etc/ssl --ro-bind-try /etc/pki /etc/pki --ro-bind-try /etc/man_db.conf /etc/man_db.conf --ro-bind-try /usr/local/bin/msmtp /etc/alternatives/mta --ro-bind-try /usr/local/bin/msmtp /usr/sbin/exim --bind-try $HOMEDIR $HOMEDIR --bind-try /var/lib/mysql/mysql.sock /var/lib/mysql/mysql.sock --bind-try /home/mysql/mysql.sock /home/mysql/mysql.sock --bind-try /tmp/mysql.sock /tmp/mysql.sock --bind-try /run/mysqld/mysqld.sock /run/mysqld/mysqld.sock --bind-try /var/run/mysqld/mysqld.sock /var/run/mysqld/mysqld.sock '$COPY-TRY /etc/exim.jail/$USER.conf $HOMEDIR/.msmtprc' --unshare-ipc --unshare-pid --unshare-uts --dir /run/user/$UID '$PASSWD 65534' '$GROUP 65534'
  ```
