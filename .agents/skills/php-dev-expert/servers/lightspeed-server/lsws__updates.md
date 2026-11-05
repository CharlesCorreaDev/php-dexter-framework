# Updates with lsup | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/updates/

---

# Update LiteSpeed Web Server[¶](#update-litespeed-web-server "Permanent link")

If you are using a control panel you should be able to update LiteSpeed Web Server from the control panel. If an update is unavailable in your control panel, or you just prefer the command line, you can update LSWS from the terminal with the `lsup` command.

The `lsup` command is a simple way to update LiteSpeed Web Server from the command line, allowing the possibility of upgrading a large number of LSWS installations with a single command.

## Location[¶](#location "Permanent link")

The `lsup` command is located at `$SERVER_ROOT/admin/misc/lsup.sh`. In most CentOS installations, that would be:

```
/usr/local/lsws/admin/misc/lsup.sh
```

## Function[¶](#function "Permanent link")

Running the basic `lsup` command will automatically upgrade your installation of LiteSpeed Web Server to the latest stable release. There are also options for customizing the command listed below.

### Options[¶](#options "Permanent link")

- `-f`: If you already have the most recent stable version installed, the basic `lsup` command will abort. The `-f` option forces `lsup` to install the latest edge build.
- `-v`: You can control what version you install with the `-v` option followed by a version number. (For example: `./lsup.sh -v 5.3.4`) This will allow you to downgrade to older versions if you run into a bug.
- `-b`: Designates a build number. All versions start from build `0`. To view what build you are currently using, view `/usr/local/lsws/autoupdate/build`. Will automatically upgrade to the latest build of the designated version if `-b` is not set. (Only available for versions 5.0 and higher.)

Note

For `-v` and `-b`, you can look up a version/build number [here](https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:changelog) if you need to.

Examples

Force an update to the latest build of version 5.3.4:

```
/usr/local/lsws/admin/misc/lsup.sh -f -v 5.3.4
```

Force an update to version 5.3.4 build 4:

```
/usr/local/lsws/admin/misc/lsup.sh -f -v 5.3.4 -b 4
```

## Stable Tier vs. Edge Tier[¶](#stable-tier-vs-edge-tier "Permanent link")

Starting from version 5.3.7 build 4, LiteSpeed Web Server introduces tiers to meet your auto upgrade requirements through the `lsup.sh` script. This will make your server more stable during the upgrade, while still keeping edge users in mind. Here's how it works:

- The `/usr/local/lsws/autoupdate/follow_stable` marker will be set automatically when you upgrade to 5.3.7 build 4 or a later version.
- If you want to set up a cron job, please use `lsup.sh` without any parameters instead of using `lsup.sh -f`.
- `lsup.sh` without a parameter will follow the Stable Tier if the `follow_stable` marker is set, and the Stable Tier number is controlled.
- `lsup.sh -f` will install the edge build, which is the latest build available, and it will stop following the Stable Tier by removing the `follow_stable` marker.
- If a particular version is forced, such as with `lsup.sh -f -v <version>`, the `lsup.sh` command without parameters will stop following the Stable Tier, and will do nothing.
- To start following the Stable Tier again, you can manually create a `follow_stable` marker by running `touch /usr/local/lsws/autoupdate/follow_stable`.
- Why is `follow_stable` important? When you install an edge build, or downgrade to an older version, you certainly do not want `lsup.sh` in your daily cron job to change the version to the Stable Tier automatically during the test. In these situations, unsetting `follow_stable` will make `lsup.sh` do nothing in a cron job.
- Please be aware that the new powerful Stable/Edge Tier system is only available in `lsup.sh` for version 5.3.7 build 4 and later. If you force a downgrade to an earlier version/build, it will not have the above feature.

## Why Downgrading May Fail[¶](#why-downgrading-may-fail "Permanent link")

You may get a 404 error when tring to downgrade to a specific legacy version, such as 5.2.7, using this command:

```
/usr/local/lsws/admin/misc/lsup.sh -f -v 5.2.7
```

or maybe this command:

```
wget https://www.litespeedtech.com/packages/5.0/lsws-5.2.7-ent-x86_64-linux.tar.gz
```

This is because only the latest version for a branch is kept available. For example, if the latest version for the 5.2.x branch v5.2.8, you can only download/downgrade to 5.2.8. You cannot access any lower version, like 5.2.7.

For owned licenses, if you have a license that cannot use the latest version for the current branch, then if you need to downgrade, your only option is to download the latest version of the previous branch. In this example, that would be v5.1.17. If you have no plans to purchase the yearly add-on, please always keep your own archive of downloaded versions in case you need to perform a reinstallation.

## Automate Updates via Cron Job[¶](#automate-updates-via-cron-job "Permanent link")

If you would like to automatically upgrade to a new version as soon as it is available in auto-update, it is a two-step process:

- Run a script to check for the latest version:

  ```
  http://update.litespeedtech.com/ws/latest.php
  ```
- Run `lsup.sh` to upgrade:

  ```
  /usr/local/lsws/admin/misc/lsup.sh -f -v <latest-version>
  ```

Add the two lines above to a daily cron job and it will run automatically.

## New Version Notifications[¶](#new-version-notifications "Permanent link")

When a new release is published, it will be announced on the LiteSpeed [Forums](https://www.litespeedtech.com/support/forum/forums/news.8/), [Twitter](https://twitter.com/litespeedtech), and [Google Group](https://groups.google.com/forum/#!forum/litespeed-edge-users). It will also be listed on the [downloads page](https://www.litespeedtech.com/products/litespeed-web-server/download). We normally wait a week or two to push it to autoupdate. Then your web server will show information about the available upgrade and send you an upgrade notification. After this, you can do the upgrade right from the Admin Console.

Sometimes a new release is available but it doesn't show up on your server admin console. One possible reason for this would be the new release has not been pushed into auto-update yet. LiteSpeed Web Server checks this once per day. Another possible reason could be some corrupted files in the autoupdate folder. You can remove the `.last` file and restart the server to force it to check again:

```
rm /usr/local/lsws/autoupdate/.last 
/usr/local/lsws/bin/lswsctrl restart
```

Or, you can just upgrade directly from the command line:

```
/usr/local/lsws/admin/misc/lsup.sh -f -v <version>
```

If problems still exist, you can try removing all the files in the autoupdate folder and restarting LiteSpeed Web Server. The files in the autoupdate folder will be regenerated when your server checks for updates.

```
rm -rf /usr/local/lsws/autoupdate/*
```

## New Builds[¶](#new-builds "Permanent link")

Extra build numbers are added onto version numbers and supported through the `lsup` command. As shown above, `lsup.sh -f -v <version>` will update to the latest build for version `<version>`.

Here are a few other helpful commands:

To check your current version number:

```
cat /usr/local/lsws/VERSION
```

To check your current build number:

```
cat /usr/local/lsws/BUILD
```

To check latest avaible build number:

```
cat /usr/local/lsws/autoupdate/build
```

### New Build Notifications[¶](#new-build-notifications "Permanent link")

You are automatically notified of new numbered releases once they are pushed to Autoupdate, however notifications are *not* sent for new builds of the same version number.

If you wish to be notified when new builds are released, please join the [LiteSpeed Edge Google Group](https://groups.google.com/g/litespeed-edge-users), where we announce all updates.
