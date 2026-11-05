# Changelog | PHP | External Apps | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/extapp/php/changelog/

---

# PHP LSAPI changelog[¶](#php-lsapi-changelog "Permanent link")

Note

We do our best to update this changelog in a timely manner. However, if a version is missing, you can always find the release announcement in [our LiteSpeed Edge Google Group](https://groups.google.com/g/litespeed-edge-users).

## Version 8.3[¶](#version-83 "Permanent link")

*Released: September 8, 2025*

- [Bug fix] Properly enable timestamp logging for the STDERR log.

## Version 8.1[¶](#version-81 "Permanent link")

*Released: November 1, 2022*

- [Improvement] Add compatibility with PHP 8.2.

## Version 8.0.1[¶](#version-801 "Permanent link")

*Released: February 22, 2022*

- [Bug fix] Address a garbled command-line parameter showing the current running script path.

## Version 8.0[¶](#version-80 "Permanent link")

*Released: December 3, 2021*

- [Feature] Add PHP 8.1 support.
- [Improvement] Improve OpenBSD compatibility.
- [Misc] Clean up compiler warnings.

## Version 7.9[¶](#version-79 "Permanent link")

*Released: March 5, 2021*

- [Tuning] The process manager now keeps forked child processes alive for longer based on the load, reducing process-manager overhead on busy setups.

## Version 7.8[¶](#version-78 "Permanent link")

*Released: September 1, 2020*

- [Feature] Add support for PHP 8.0 RC.
- [Tuning] Update the log message with more information when possible, including the timestamp, UID, and PID.
- [Bug fix] Correct inaccurate child-process tracking.

## Version 7.7[¶](#version-77 "Permanent link")

*Released: July 22, 2020*

- [Security] Fix a missed buffer-boundary check.
- [Improvement] Include UID information in some log entries.

## Version 7.6[¶](#version-76 "Permanent link")

*Released: November 22, 2019*

- [Feature] Add the `LSAPI_CLEAN_SHUTDOWN` environment variable for clean-shutdown control.
- [Misc] Disable clean shutdown by default for PHP versions earlier than PHP 7.

## Version 7.5[¶](#version-75 "Permanent link")

*Released: July 22, 2019*

- [Bug fix] Set `ITIMER_PROF` to 0.1 seconds to ensure that a clean shutdown does not get stuck in an infinite loop.
- [Bug fix] Completely disabled `error_reporting` before starting a clean shutdown to avoid generating a large number of error-log entries.

## Version 7.4[¶](#version-74 "Permanent link")

*Released: June 14, 2019*

- [Improvement] Gracefully cleaned up PHP temporary files when PHP processes were killed while executing a script.
- [Improvement] Allow request-header sizes up to 64 KB.

## Version 7.3[¶](#version-73 "Permanent link")

*Released: April 12, 2019*

- [Feature] Add `litespeed_finish_request()` and the `fastcgi_finish_request()` alias to allow PHP to continue running background jobs after finishing the current request.
- [Improvement] Improve the process manager to keep worker processes alive when enough free memory was available.

## Version 7.2[¶](#version-72 "Permanent link")

*Released: January 21, 2019*

- [Improvement] Add a timestamp when directly logging standard error to a file.
- [Bug fix] Fix LSAPI protocol corruption when PHP scripts forked a child process. (Reported by CloudLinux.)
- [Bug fix] Fix uninitialized `sa_mask` during signal-handler setup. (Reported with a patch by CloudLinux.)
- [Bug fix] Fix an incorrect string length when trimming long log strings containing trailing newlines. (Reported with a patch by CloudLinux.)
- [Bug fix] Fix the maximum idle timeout not resetting properly during socket events. (Reported with a patch by CloudLinux.)

## Version 7.1[¶](#version-71 "Permanent link")

*Released: April 11, 2018*

- [Feature] Allow `php_admin_value` to override configuration set in `php.ini`, similar to `open_basedir`.
- [Improvement] Improve PHP-side CRIU support.
- [Bug fix] Fix a bug in PHP suEXEC daemon mode that caused permission issues.

## Version 7.0[¶](#version-70 "Permanent link")

*Released: February 28, 2018*

- [Feature] Add CRIU support.
- [Feature] Add support for `[PATH=]` and `[HOST=]` sections in `php.ini`.
- [Improvement] Enhance the process manager.

## Version 6.11[¶](#version-611 "Permanent link")

*Released: June 28, 2017*

- [Bug fix] Fix the display of the `.user.ini` value in `phpinfo()` when the value was not actually applied. (Patch provided by CloudLinux.)
- [Bug fix] Fix a bug where `ini_set` failed to override `php_value` in `.htaccess`. (Patch provided by CloudLinux.)

## Version 6.10[¶](#version-610 "Permanent link")

*Released: September 19, 2016*

- [Feature] Add support for `.user.ini`, controlled by the `LSPHP_ENABLE_USER_INI` environment variable.
- [Feature] Add a new `LSPHPRC` environment variable to override `php.ini`.

## Version 6.9[¶](#version-69 "Permanent link")

*Released: December 9, 2015*

- [Bug fix] Fix a bug in suEXEC daemon mode where the server secret was not cleared.
- [Bug fix] Fix a bug where a malformed LSAPI request could crash the PHP process.
- [Bug fix] Fix a bug in CLI mode that caused an incorrect value for the `DIR` global variable.
- [Bug fix] (PHP 7) Fixed a bug that broke PHP configuration overrides through Apache configuration.

## Version 6.8[¶](#version-68 "Permanent link")

*Released: June 12, 2015*

- [Feature] Add PHP 7 support.

## Version 6.7[¶](#version-67 "Permanent link")

*Released: September 4, 2014*

- [Feature] Add support for the `filter_input()` function.
- [Bug fix] Fix a bug that caused a crash when running in CLI mode.

## Version 6.6[¶](#version-66 "Permanent link")

*Released: November 22, 2013*

- [Improvement] Increase the default child-process limit for suEXEC daemon mode to avoid stalling the daemon and causing 503 errors.

## Version 6.5[¶](#version-65 "Permanent link")

*Released: November 18, 2013*

- [Bug fix] Fix a bug in the LSAPI library that caused problems when executing commands from within PHP scripts. The problem had existed since version 6.2.

## Version 6.4[¶](#version-64 "Permanent link")

*Released: October 30, 2013*

- [Improvement] Avoid multiple debugging sessions when hanging PHP processes were detected.
- [Improvement] Return a 508 error page when the CloudLinux LVE resource limit was reached.
- [Tuning] Perform minor performance tuning for suEXEC daemon mode.
- [Bug fix] Fix a bug in tracking the number of child processes.

## Version 6.3[¶](#version-63 "Permanent link")

*Released: August 6, 2013*

- [Feature] Add the `apache_get_modules()` function to improve compatibility with `mod_php`.
- [Improvement] Change the GDB stack-backtrace generation setting to disabled by default. It can be enabled with the `LSAPI_DUMP_DEBUG_INFO=1` environment variable.
- [Bug fix] Fix a bug that displayed partial original command-line parameters.

## Version 6.2[¶](#version-62 "Permanent link")

*Released: May 22, 2013*

- [Feature] Add the ability for the suEXEC daemon to kill runaway child processes.
- [Improvement] Speed up child-process recycling for better memory usage.
- [Improvement] Change process naming to allow shorter process names.

## Version 6.1[¶](#version-61 "Permanent link")

*Released: November 21, 2012*

- [Feature] Add the `-n` option for CLI mode, which skips loading `php.ini`.
- [Misc] Remove code related to changing `php.ini` when suEXEC daemon mode is used because it did not work.

## Version 6.0[¶](#version-60 "Permanent link")

*Released: September 10, 2012*

- [Major Feature] Add PHP suEXEC daemon mode to improve performance and memory efficiency.
- [Feature] Add native CloudLinux LVE/CageFS support.

## Version 5.5[¶](#version-55 "Permanent link")

*Released: December 13, 2010*

- [Feature] Add support for the `php_value engine off` feature.
- [Bug fix] Fix the validation code for the length of custom HTTP headers.

## Version 5.4[¶](#version-54 "Permanent link")

*Released: July 15, 2010*

- [Improvement] Change the `register_long_arrays` configuration option to be enabled by default.
- [Bug fix] Fix the installer script for FreeBSD.

## Version 5.3[¶](#version-53 "Permanent link")

*Released: February 8, 2010*

- [Improvement] The `register_long_arrays` configuration option, which is disabled by default, can be enabled through `php.ini`.

## Version 5.1[¶](#version-51 "Permanent link")

*Released: January 17, 2010*

- [Improvement] Improve performance by optimizing PHP interface code.
- [Bug fix] Fix several compatibility bugs.

## Version 5.0[¶](#version-50 "Permanent link")

*Released: January 12, 2010*

- [Feature] Implement the feature that displays the script name in `top` and `ps` output.
- [Feature] Add a slow-request log to identify slow PHP scripts.
- [Feature] Display the LSAPI code version on the `phpinfo()` page.
- [Improvement] Improve performance by optimizing PHP interface code.

## Version 4.8[¶](#version-48 "Permanent link")

*Released: September 10, 2008*

- [Improvement] Ignore the `SIGXFSZ` signal and disabled core dumps by default.

## Version 4.7[¶](#version-47 "Permanent link")

*Released: April 14, 2008*

- [Bug fix] Switch to a non-blocking listener socket to avoid hanging Ruby and PHP processes.
- [Bug fix] Replace `kill(ppid, 0)` with `getppid()` to test the status of the parent process.

## Version 4.6[¶](#version-46 "Permanent link")

*Released: February 26, 2008*

- [Bug fix] Improve the internal process manager to avoid killing active child processes with `SIGTERM`.

## Version 4.5[¶](#version-45 "Permanent link")

*Released: January 31, 2008*

- [Bug fix] Fix the code in the LSAPI library that failed to compile under Mac OS X.
- [Improvement] Add implementations of the PHP functions `getallheaders()` and `apache_request_headers()`. Compatibility with PHP code written for `mod_php` has been improved.

## Version 4.4[¶](#version-44 "Permanent link")

*Released: January 3, 2008*

- [Improvement] Improve error logging during application startup to avoid 503 errors.
- [Misc] Clean up the source code.

## Version 4.3[¶](#version-43 "Permanent link")

*Released: December 11, 2007*

- [Feature] Add a command-line option to enable PHP source-code output.

## Version 4.2[¶](#version-42 "Permanent link")

*Released: November 25, 2007*

- [Bug fix] Fix a bug that caused LSAPI build failures in some Mac OS X environments.

## Version 4.1[¶](#version-41 "Permanent link")

*Released: August 21, 2007*

- [Feature] Add the `LSAPI_AVOID_FORK` environment variable to minimize dynamic starting and stopping of child processes.
- [Bug fix] Fix a bug that could cause an infinite loop while reading the request body under special circumstances.

## Version 4.0[¶](#version-40 "Permanent link")

*Released: May 10, 2007*

- [Feature] Add support for the `apache_response_headers()` function.
