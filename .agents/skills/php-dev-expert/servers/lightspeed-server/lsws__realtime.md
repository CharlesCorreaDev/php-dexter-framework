# Real-Time Stats | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/realtime/

---

# Real-Time Stats[¶](#real-time-stats "Permanent link")

[![](../images/realtime01.png)](https://docs.litespeedtech.com/lsws/images/realtime01.png)

You can view LiteSpeed Web Server statistics in realtime. Navigate to **WebAdmin Console > Actions > Real-Time Stats**.

The Real-Time Stats report is a convenient tool for monitoring the system, as it shows a snapshot of your server statistics. The report contains the following sections:

- **Server Health** displays basic server statistics, uptime, load, and anti-DDoS blocked IPs.
- **Server** lists current traffic throughput, connections, and request statistics.
- **Virtual Host** shows request processing statuses and external application statuses for each virtual host.
- **External Application** lists the external applications currently running and their usage statistics. The CGI daemon process `lscgid` is always running as an external application.

Real-time stats can also be exported to the open source application [Prometheus](https://prometheus.io/) and from there to [Grafana](https://grafana.com/grafana/) and other applications using the [LiteSpeed Web Server Prometheus Exporter](https://github.com/litespeedtech/litespeed-prometheus-exporter).

[![](../images/realtime02.png)](https://docs.litespeedtech.com/lsws/images/realtime02.png)

You can control the refresh rate for this data through the **Refresh Interval** drop-down list in the upper right corner. You can refresh anywhere from every five minutes to every ten seconds, or select `Stop` to avoid refreshing at all.

[![](../images/realtime03.png)](https://docs.litespeedtech.com/lsws/images/realtime03.png)

Under **Server > Requests**, you will find a `Details` link. Click it to access the **Requests Snapshot**, where you can view detailed information on client requests or potential bottlenecks. The fields in the blue area allow you to filter the snapshot to isolate certain parts of your server or look for clients that are performing certain actions.

## Where the Data Comes From[¶](#where-the-data-comes-from "Permanent link")

The real-time statistics are collected from `.status` and `.rtreport`, located in `/tmp/lshttpd/`.

The `.status` file is updated at startup, or when something changes.

The `.rtreport` files are generated per worker, and updated every 10 seconds. In a system with four workers, for example, you would have the following:

- `.rtreport`
- `.rtreport.2`
- `.rtreport.3`
- `.rtreport.4`

**NOTE**: Be sure the `lsadm` user belongs to the same group as the `lshttpd` directory and the `.status` and `.rtreport` files, otherwise, `lsadm` will be unable to populate the **Real-Time Stats** screen.

**NOTE**: For backwards compatibility, LSWS actually writes to `/dev/shm` for the `.rtreport` files. So, `/tmp/lshttpd/.rtreport` is a symbolic link to `/dev/shm/lsws/status/.rtreport`, `/tmp/lshttpd/.rtreport.2` is a symbolic link to `/dev/shm/lsws/status/.rtreport.2`, and so on.

## Accessing the Data Directly[¶](#accessing-the-data-directly "Permanent link")

You can avoid using the WebAdmin Console and pull real-time statistics from the command line through the `.rtreport` files, or through the local admin port.

### Through .rtreport Files[¶](#through-rtreport-files "Permanent link")

```
cd /tmp/lshttpd/
cat .rtreport
```

Remember, there will be additional `.rtreport` files if you have multiple workers. You may `cat` any one of them.

Note

There is no auto-cleanup of `.rtreport` files, so if you have downgraded from four workers to two (for example) the old `.rtreport.3` and `.rtreport.4` files will remain. You can tell they are no longer used, if you look at the timestamp.

### Through the Local Admin Port[¶](#through-the-local-admin-port "Permanent link")

```
curl -i -k -u username:password https://localhost:7080/status?rpt=detail
```

```
curl -i -k -u username:password https://localhost:7080/status?rpt=summary
```

For `username:password`, use the WebAdmin username and password that you created when you installed LiteSpeed Web Server. If you have changed your WebAdmin credentials since installation, the credentials for the `/status` page will *not* have been updated. You must either use the original credentials, or change the `/status` page password.

The `-k` parameter is used if you have a self-signed certificate.

Note

The status summary is essentially a concatenation of all of the `.rtreport` files. If you have multiple workers, then there will be multiple sections, which are not combined. If you wish to see a full picture, you will need to manually add up the values.

#### Change Status Page Password[¶](#change-status-page-password "Permanent link")

Use the `htpasswd` tool to add users or update existing ones, like so:

```
htpasswd /usr/local/lsws/admin/htpasswds/status webadmin
```

The above example will add or update the user `webadmin`. When executing the command, you'll be given a password prompt to specify your password.

**NOTE:** If you're using CloudLinux, please do not change or remove the user called `lve-stats-admin`

#### Allow Access from Trusted IP[¶](#allow-access-from-trusted-ip "Permanent link")

If you wish to allow access to the `/status` page from IPs other than `127.0.0.1` (localhost), you may use the following Apache-style configuration, replacing `192.0.2.0` with the IP you wish to allow:

```
<IfModule Litespeed>
allow from 192.0.2.0T
</IfModule>
```
