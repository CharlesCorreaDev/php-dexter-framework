# High Load on LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/high-load/

---

# High Server Load[¶](#high-server-load "Permanent link")

If your server load is high (server loads that are <= the number of CPU Cores in your server are quite normal), you need to locate the bottleneck and make optimizations targeting it.

Most of the time, high server load is caused by PHP processes and MySQL, *not* by the LiteSpeed Web Server process itself. No matter how fast LiteSpeed runs, it has no control over how fast a PHP script can run, or how much memory a PHP script will consume. Hence, in general, troubleshooting server load issue is not a matter of LiteSpeed Web Server's configuration, and is beyond our support scope. (Analysis of your DDoS attack is beyond our support scope as well, unless you would like to [engage us through paid hourly support](https://store.litespeedtech.com/store/cart.php?gid=5).)

## Troubleshooting Tips[¶](#troubleshooting-tips "Permanent link")

In the spirit of helpfulness, however, we are happy to provide the following troubleshooting tips for you to use when investigating high server load.

### Try Caching[¶](#try-caching "Permanent link")

Try to use our [LSCache solutions](https://www.litespeedtech.com/products/cache-plugins) to lower the load.

### Find CPU Hogs[¶](#find-cpu-hogs "Permanent link")

It is always good practice to use the `top` or `atop` command to check which processes are using a lot of CPU resources, and then figure out whether they are behaving normally.

### Check Disk I/O[¶](#check-disk-io "Permanent link")

If disk I/O is high, it is likely a disk I/O problem, which you should address. If you have more free memory available, you can move PHP sessions to `/dev/shm`.

Example

`top -c` iowait `41.6 wa` is too high. Check further:

```
iostat -x
Linux 3.10.0-962.3.2.lve1.5.24.10.el7.x86_64 (lbr27.lalunahost.com.br)  04/18/2019      _x86_64_        (8 CPU)

avg-cpu:  %user   %nice %system %iowait  %steal   %idle
           6.65    0.15    2.16   20.24    0.00   70.80

Device:         rrqm/s   wrqm/s     r/s     w/s    rkB/s    wkB/s avgrq-sz avgqu-sz   await r_await w_await  svctm  %util
sdb               0.16     7.43   16.61    1.80    74.74    78.56    16.65     2.46  133.39    8.38 1284.98   1.45   2.68
sda              28.25   134.39   93.98   54.24  1445.73  1227.69    36.07     2.11   14.18   46.67   79.17   4.86  72.08
```

You can see that `/dev/sda` has a problem with `72.08%util`, and `/dev/sdb` is ok.

### RAM Disk Path[¶](#ram-disk-path "Permanent link")

You may be tempted to use RAM Disk to solve your high I/O issues, however we do not recommend this usage. LSWS's **[RAM Disk Path](http://www.litespeedtech.com/docs/webserver/config/tuning#ramDiskPath)** setting is intended for use with real-time stats data, and is of limited help as a swapping directory.

### Check CPU Idle[¶](#check-cpu-idle "Permanent link")

Check the CPU idle percentage. If it is close to 0%, then your server is CPU-bound and you should try to reduce the CPU usage.

### Use CloudLinux LVE[¶](#use-cloudlinux-lve "Permanent link")

When CloudLinux is used, you should try to use the LVE limit to prevent any one user from consuming all of the resources.

### Upgrade PHP[¶](#upgrade-php "Permanent link")

Try PHP7 instead of PHP5 if your code is compatible with it.

### Try Opcode Cache[¶](#try-opcode-cache "Permanent link")

Enable PHP opcode cache.

### Check Real-Time Stats[¶](#check-real-time-stats "Permanent link")

Check the real-time stats for the number of PHP processes during peak time under **Actions > Real-Time Stats > External Application**. Look at **In Use**, **Idle**, and **WaitQ**. For shared hosting, if one user uses too many PHP processes while others only use a few, you may adjust PHP max concurrency setting to be a smaller number.

### Are you Under Attack?[¶](#are-you-under-attack "Permanent link")

DDoS attack may push the server to high load. Check the number of concurrent users to see if it is normal:

```
netstat -na | grep 80 | grep ESTA
```

To check concurrent connections sorted by IP, run the following:

```
netstat -ntu | grep ESTABLISHED | awk '{print $5}' | cut -d: -f1 | sort | uniq -c | sort -nr
```

Sometimes you may count `time_waits` as well by running the command without `grep ESTABLISHED`, like so:

```
netstat -ntu | awk '{print $5}' | cut -d: -f1 | sort | uniq -c | sort -nr
```

It is useful in some special situations (i.e., an attacker could make a connection and then send requests to an expensive URL, wait a little while, and then close the connection. If the server does not abort the process, the backend will be used up soon and keep serving a request that has been abandoned. Hence, you wait to analyze IP even with `time_waits`).

You can try some of the LSWS WAF features to mitigate DDoS attacks. If you can identify one or two IPs causing the problem, you should find a way to limit the resources that one or two bad IPs can consume. The web server has no control over how fast a PHP script can run, or how much memory a PHP script will consume. Reasonably, LVE limit by CloudLinux can help when someone abuses one account. If a server is under attack or being abused, you need to find a way to stop the attack or abuse, such as blocking bad IPs with a blacklist or using a modg\_security rule set. No matter how fast a web server can run, it can only handle the amount of traffic the backend (PHP and MySQL) can handle, unless content is served from cache.

### Check PHP Versions[¶](#check-php-versions "Permanent link")

Check your PHP configuration and make sure Apache and LiteSpeed have matching PHPs.

### Disable `open_basedir`[¶](#disable-open_basedir "Permanent link")

Disable the PHP `open_basedir` feature.

### Check the Code[¶](#check-the-code "Permanent link")

Sometimes high load can be caused by poorly written PHP/SQL code and has to be fixed by your PHP Developers. Sometimes it is a MySQL-based problem, for example, you may have a missing index. To debug this, you may try to use `mysqladmin` and `processlist`. If you have spare RAM, trying to raise database cache pool/buffer may help. No web server configuration change can help such situations and they are beyond our support scope.

You can even use `strace` to track your PHP processes: `strace -tt -T -p <pid_of_a_php_process>`

```
top - 15:28:56 up 1 day, 17:58, 3 users, load average: 187.42, 143.52, 109.09
PID USER PR NI VIRT RES SHR S %CPU %MEM TIME+ COMMAND
25713 mysql 20 0 15.3g 784m 9.9m S 197.1 0.9 29:13.90 /usr/sbin/mysqld --basedir=/usr --  datadir=/var/lib/mysql --plugin-
30260 roan24pl 20 0 302m 103m 12m R 34.4 0.1 1:37.47 lsphp:/home/roan24pl/public_html/index.php
30448 roan24pl 20 0 302m 103m 12m R 26.0 0.1 1:09.17 lsphp:/home/roan24pl/public_html/index.php
30217 roan24pl 20 0 302m 102m 12m R 25.0 0.1 1:27.36 lsphp:/home/roan24pl/public_html/index.php
28755 roan24pl 20 0 291m 92m 12m R 24.0 0.1 6:52.65 lsphp:/home/roan24pl/public_html/index.php
```

### Try Memcached[¶](#try-memcached "Permanent link")

If you share sessions via MySQL database, you can try using memcached instead, to reduce the amount of MySQL queries.

### Consider More Workers[¶](#consider-more-workers "Permanent link")

More workers on your LiteSpeed license may mean better performance and reduced CPU load, but it depends on what your traffic looks like. If it is mainly PHP and MySQL processed contributing to server load, adding an LSWS worker won't help.

It is only when LiteSpeed worker processes' CPU usage is high, like over 50%, that you should consider adding more workers. Usually, this will happen when the server needs to process large amounts of HTTPS traffic with static content.

How many cores do you have? Generally your server is not considered overloaded until the load reaches the number of cores.

## Conclusion[¶](#conclusion "Permanent link")

Addressing the above may lower your server load. However, each situation may vary greatly. We recommend ordering our LiteSpeed premium support service for a professional review, fine tuning, and installation/enabling of necessary elements to reduce your server load and maximize site performance.
