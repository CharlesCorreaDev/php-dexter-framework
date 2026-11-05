# Changelog | Ruby | External Apps | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/extapp/ruby/changelog/

---

# Ruby LSAPI Changelog[¶](#ruby-lsapi-changelog "Permanent link")

## Version 5.9[¶](#version-59 "Permanent link")

*Released: October 27, 2026*

- [Bug fix] Apply general protocol hardening.
- [Bug fix] Harden the Ruby LSAPI runtime and use Ruby-level prefork.

## Version 5.6[¶](#version-56 "Permanent link")

*Released: January 23, 2024*

- [Bug fix] Address compatibility issues with Ruby 3.2 and later.

## Version 5.5[¶](#version-55 "Permanent link")

*Released: June 9, 2023*

- [Bug fix] Address compatibility issues with Ruby 3.0 and later.

## Version 5.4[¶](#version-54 "Permanent link")

*Released: January 18, 2023*

- [Bug fix] Address compatibility issues with Ruby 3.0 and later.

## Version 5.2[¶](#version-52 "Permanent link")

*Released: February 2, 2021*

- [Bug fix] Address stability issues with Ruby 2.0 and later caused by a regression in v5.1.

## Version 5.1[¶](#version-51 "Permanent link")

*Released: September 1, 2020*

- [Tuning] Update the log message with more information when possible, including the timestamp, UID, and PID.
- [Bug fix] Make single-worker, non-prefork mode work properly.
- [Bug fix] Correct inaccurate child-process tracking.

## Version 5.0[¶](#version-50 "Permanent link")

*Released: May 15, 2020*

- [Tuning] Improve stability with Ruby 2.0 and later.

## Version 4.4[¶](#version-44 "Permanent link")

*Released: January 19, 2018*

- [Feature] Standard-error log output is now redirected to the application log directory for easier troubleshooting.
- [Improvement] Improve compatibility with different versions of the Ruby on Rails framework.

## Version 4.1[¶](#version-41 "Permanent link")

*Released: January 30, 2013*

- [Major Feature] Add a native `RewindableInput` implementation to boost Rack performance.
- [Feature] Add support for Rack Sendfile middleware to use the web server’s file-delivery code.
- [Improvement] Along with the LSWS 4.2.2 release, provided better support for Rack/Rails 3.0 and later applications.

## Version 3.5[¶](#version-35 "Permanent link")

*Released: May 14, 2009*

- [Bug fix] Reinitialize the random-number generator when a new child process was forked.

## Version 3.4[¶](#version-34 "Permanent link")

*Released: October 27, 2008*

- [Bug fix] Fix a bug when calling the `STDERR.reopen()` function.

## Version 3.3[¶](#version-33 "Permanent link")

*Released: September 10, 2008*

- [Improvement] Ignore the `SIGXFSZ` signal and disabled core dumps by default.

## Version 3.2[¶](#version-32 "Permanent link")

*Released: April 14, 2008*

- [Bug fix] Switch to a non-blocking listener socket to avoid hanging Ruby and PHP processes.
- [Bug fix] Replace `kill(ppid, 0)` with `getppid()` to test the status of the parent process.

## Version 3.1[¶](#version-31 "Permanent link")

*Released: February 26, 2008*

- [Bug fix] Improve the internal process manager to avoid killing active child processes with `SIGTERM`.

## Version 3.0[¶](#version-30 "Permanent link")

*Released: January 31, 2008*

- [Bug fix] Fix the code in the LSAPI library that failed to compile under Mac OS X.
- [Improvement] Add implementations of the PHP functions `getallheaders()` and `apache_request_headers()`. Compatibility with PHP code written for `mod_php` has been improved.

## Version 2.9[¶](#version-29 "Permanent link")

*Released: January 3, 2008*

- [Improvement] Improve error logging during application startup to avoid 503 errors.
- [Misc] Clean up the source code.

## Version 2.8[¶](#version-28 "Permanent link")

*Released: November 25, 2007*

- [Bug fix] Fix a bug that caused LSAPI build failures in some Mac OS X environments.

## Version 2.7[¶](#version-27 "Permanent link")

*Released: August 21, 2007*

- [Feature] Add the `LSAPI_AVOID_FORK` environment variable to minimize the dynamic starting and stopping of child processes.
- [Bug fix] Fix a bug that could cause an infinite loop while reading the request body under special circumstances.

## Version 2.5[¶](#version-25 "Permanent link")

*Released: May 18, 2007*

- [Bug fix] Fix an incompatibility with `request_uri` by including the query-string portion.

## Version 2.4[¶](#version-24 "Permanent link")

*Released: April 24, 2007*

- [Feature] Add the `LSAPI_EXTRA_CHILDREN` environment variable to provide better control over how many extra child processes can be started while existing child processes are in an error state.
- [Improvement] Improve the built-in Process Manager to stop child processes reliably.

## Version 2.3[¶](#version-23 "Permanent link")

*Released: March 15, 2007*

- [Feature] Add the following environment variables: `LSAPI_MAX_IDLE_CHILDREN` and `LSAPI_MAX_PROCESS_TIME`. See the `README` file for more details.
- [Improvement] Rewrite the LSAPI integration code with improved process control and standard-error logging.
- [Improvement] Log the standard-error stream in the web server log file instead of `stderr.log`.

## Version 1.13[¶](#version-113 "Permanent link")

*Released: January 16, 2007*

- [Bug fix] Fix a bug that could cause the Ruby LSAPI application to use 99% CPU.

## Version 1.12[¶](#version-112 "Permanent link")

*Released: January 10, 2007*

- [Improvement] Update the Ruby LSAPI extension to follow the Ruby I/O library specification more closely.
- [Bug fix] Fix a bug that could cause the LSAPI application to use 99% CPU.

## Version 1.11[¶](#version-111 "Permanent link")

*Released: October 9, 2006*

- [Bug fix] Fix an issue where custom request-header values could be truncated.

## Version 1.10[¶](#version-110 "Permanent link")

*Released: September 29, 2006*

- [Bug fix] Register `env_copy` as a Ruby global variable to prevent it from being garbage-collected, which could have resulted in a 503 error.

## Version 1.9[¶](#version-19 "Permanent link")

*Released: September 25, 2006*

- [Improvement] Update request parameters to match those of WEBrick.
- [Bug fix] Fix a build problem for Solaris 8.

## Version 1.8[¶](#version-18 "Permanent link")

*Released: September 18, 2006*

- [Feature] Add the `LSAPI_PGRP_MAX_IDLE` environment variable to tell an idle process group to terminate. LSWS 2.2.2 sets this environment variable automatically based on **Max idle time**.

## Version 1.7[¶](#version-17 "Permanent link")

*Released: September 11, 2006*

- [Improvement] Change the default value of `LSAPI_MAX_REQS` from `1,000` to `1,000,000`.
- [Bug fix] Fix missing environment variables set in Rails configuration.

## Version 1.6[¶](#version-16 "Permanent link")

*Released: August 22, 2006*

- [Bug fix] Work around Ruby’s internal signal handler to ensure that unresponsive Ruby processes terminate.

## Version 1.5[¶](#version-15 "Permanent link")

*Released: August 16, 2006*

- [Bug fix] Fix a v1.4 bug where a small POST operation could fail.

## Version 1.4[¶](#version-14 "Permanent link")

*Released: August 4, 2006*

- [Feature] Limit the maximum number of worker processes to twice the configured value to prevent DoS-type attacks.
- [Feature] Add the `LSAPI_MAX_REQS=n` environment variable, where `n` is the maximum number of requests a child process can serve. The default value is `1,000`. Once the limit is reached, the child process exits automatically. This helps address memory leaks in Rails.
- [Feature] Add the `LSAPI_MAX_IDLE=n` environment variable, where `n` is the maximum idle time, in seconds, that a child process waits for a new request. Once the limit is reached, the child process exits. The default value is 60. When `n <= 0`, the child process waits indefinitely. This option helps eliminate idle child processes.
- [Bug fix] Fix an issue where a worker process did not remain persistent when a request was canceled.

## Version 1.3[¶](#version-13 "Permanent link")

*Released: June 29, 2006*

- [Bug fix] Add a `SIGCHLD` signal handler to the Ruby LSAPI module to resolve a problem that could lead to zombie processes.

## Version 1.2[¶](#version-12 "Permanent link")

*Released: May 16, 2006*

- [Bug fix] Fix a 503 error when the `PHP_LSAPI_CHILDREN` environment variable was set. The environment variable does not apply to Ruby, but the fix affected the base library.
