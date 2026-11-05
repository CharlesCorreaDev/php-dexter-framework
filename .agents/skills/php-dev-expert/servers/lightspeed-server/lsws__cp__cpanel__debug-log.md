# Debug Logging in LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/debug-log/

---

# Toggle Debug Logging[¶](#toggle-debug-logging "Permanent link")

When all is going well, you generally do not want debug logging enabled. Debug logging stores lots of detailed information about LiteSpeed Web Server's processes. This information is usually unnecessary and fills up disk space very quickly. For this reason, we advise that you set your Debug Level setting to `NONE`. If, however, you are having a problem that requires more information, LiteSpeed's **Toggle Debug Logging** feature will allow you to quickly turn on debug logging while you reproduce the issue and then turn it off just as quickly so that your service is not affected. This document will guide you through setting up and using the **Toggle Debug Logging** feature.

## Toggle Debug Logging From the Command Line[¶](#toggle-debug-logging-from-the-command-line "Permanent link")

You can send the `SIGUSR2` signal to toggle debug logging from the command line.

1. Back up or delete the old `error_log` file if it exists:

   ```
   mv error_log error_log.old
   ```
2. Toggle LiteSpeed server debug log (run once to turn on, run again to turn off):

   ```
   killall -USR2 litespeed
   ```
3. Reproduce the problematic issue in your browser.
4. Toggle the debug log off:

   ```
   killall -USR2 litespeed
   ```
5. Extract only those lines relevant to the IP address that reproduced the issue (substitute the correct IP):

   ```
   grep '192.0.2.0' error_log > error_log.debug
   ```

If you need to forward the log to our support department, please gzip it first.

## Toggle Debug Logging From the WebAdmin Console[¶](#toggle-debug-logging-from-the-webadmin-console "Permanent link")

With the base settings ready, **Toggle Debug Logging** is really easy to use. Navigate to the **Actions** menu and select **Toggle Debug Logging**.

[![!Toggle Debug Logging](../images/debug-log01.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/debug-log01.png)

You will get a confirmation message making sure you want to toggle debug logging. Select `OK`.

[![!Confirm Debug Logging](../images/debug-log02.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/debug-log02.png)

When you look at your log now, make sure you have **Display Level** set to `DEBUG`.

[![!Debug Display Level](../images/debug-log03.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/debug-log03.png)

You should be getting all sorts of new, dark blue debug information.

[![!Debug Data](../images/debug-log04.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/debug-log04.png)

To toggle debug logging off again, just go back to the **Actions** menu and select **Toggle Debug Logging** again.
