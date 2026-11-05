# Profiling using XDebug | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/487/profiling-using-xdebug

---

## [Profiling using XDebug](wiki__487__profiling-using-xdebug.md)

3    0

3

Viewed: 27 868 times

Version: all

Category: [How-tos](wiki__index.md)

- [access control](wiki__index.md)
- [php](wiki__index.md)
- [profiling](wiki__index.md)
- [XDebug](wiki__index.md)

Written by: [![le_top](/user/avatar/5458?v=1) le\_top](https://www.yiiframework.com/user/5458)

Updated by: [![le_top](/user/avatar/5458?v=1) le\_top](https://www.yiiframework.com/user/5458)

Created: May 2, 2013

Updated: 11 years ago

1. [1. Install XDebug on the server.](#1-install-xdebug-on-the-server)
2. [2. Determine the options required to enable XDebug from the command line (and not from php.ini):](#2-determine-the-options-required-to-enable-xdebug-from-the-command-line-and-not-from-phpini)
3. [3. Limit execution to the interesting moment and only "once".](#3-limit-execution-to-the-interesting-moment-and-only-once)
4. [4. Visualize the results](#4-visualize-the-results)

A short explication on how to extract profile information for PHP on your server using XDebug and KCacheGrind or WinCacheGrind.

Yii has some built in profiling features, but I find that they require you to instrument your code yourself, while I prefer a way where instrumentation is automatic.
Also, I preferred to run this on the production server where the problem occurs, so I wanted a 'non-intrusive' way of profiling.

Finally, I wanted to automatically start the profiling when the problem occurs, without human monitoring.

The used method is not Yii specific, but usefull for Yii developers!

In my case the function begin sluggish is a commandline command.

Here is what I did after reading the [documentation for XDebug profiling](http://www.xdebug.org/docs/profiler "Documentation for XDebug profiling"):

#### 1. Install XDebug on the server. [¶](#1-install-xdebug-on-the-server)

```
[sh]
sudo aptitude install php5-xdebug.
```

Or XDebug may already be in your local installation.

Do check that 'xdebug' is really loaded (check /etc/\*/conf.d/\*xdebug.ini on debian and make sure that the '.so' specification is not commented).

#### 2. Determine the options required to enable XDebug from the command line (and not from php.ini): [¶](#2-determine-the-options-required-to-enable-xdebug-from-the-command-line-and-not-from-phpini)

```
[sh]
/usr/bin/php5 -d xdebug.profiler_enable=1 -d xdebug.profiler_output_dir=/var/log/prof /.../yiic.php myconsolecommand  2>&1
```

The first option 'xdebug.profiler\_enable' enables the profiles, the second one 'xdebug.profiler\_output\_dir' sets where the log should be written.

#### 3. Limit execution to the interesting moment and only "once". [¶](#3-limit-execution-to-the-interesting-moment-and-only-once)

I did not want to enable profiling *all the time* but only when interesting, and only once.
So I did some bash scripting.
I already have monitoring enabled on my server which creates a file like "checkresult" which is empty when monitoring is ok, and "non-empty" when there is an issue. As the issue I monitored in particular has 'count' in the message, I filter for 'count'.

Here is the script:

```
[sh]
PHP_EXTRAOPT=""
FILE_TAG=/mypath/prof
LOG_PATH=/logpath
MONITOR_FILE=mymonfile
# The next test checks if profiling already happened, and profiles only if not.
if [ ! -f $FILE_TAG ] ; then
  # The next test looks for 'count' in the monitor file as a condition to start profiling.
  if [ $(grep -c count $MONITORFILE) != 0 ] ; then
    echo "Profile"
    # Touch $FILE_TAG to indicate that profiling is initiated once.
    touch $FILE_TAG
    # Create log directory (to make sure it exists, can be skipped if created beforehand)
    mkdir -p $LOG_PATH
    # Modify ownership of log directory (to make sure that the target process can write to it)
    chown fcgi $LOG_PATH
    # Enable XDebug options.
    PHP_EXTRAOPT="-d xdebug.profiler_enable=1 -d xdebug.profiler_output_dir=$LOG_PATH"
  fi
fi
sudo -u fcgi /usr/bin/php5 $PHP_EXTRAOPT -d max_execution_time=420 /pathtoprotected/yiic.php myconsolecommand  2>&1 >> /pathtoscriptlog/myscriptlog.log
```

If you want to profile a webpage fetch, you can enable 'xdebug.profiler\_enable\_trigger' in your php.ini file and add the POST or GET variable XDEBUG\_PROFILE to your request. Unfortunately that requires the "user" to add 'XDEBUG\_PROFILE', or alternatively, you have to add it from the server to the URL that is used (either by click or ajax call).

#### 4. Visualize the results [¶](#4-visualize-the-results)

To visualize the results, use [KCacheGrind](http://kcachegrind.sf.net/ "KCacheGrind") or [WinCacheGrind](http://sourceforge.net/projects/wincachegrind "WinCacheGrind") or inside a browser using [WebGrind](https://code.google.com/p/webgrind).

Personally, I compressed the file on the server and transferred it to my PC using scp where I visualized the uncompressed results on WinCacheGrind.

I validated the flow, now I am waiting for the trigger to happen.
