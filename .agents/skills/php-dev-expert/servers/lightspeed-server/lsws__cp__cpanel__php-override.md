# Override PHP in LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/php-override/

---

# Override Auto-Detected PHP[¶](#override-auto-detected-php "Permanent link")

Starting with LiteSpeed Web Server v5.3, PHP configuration can be found in the PHP section of LSWS. It can even be auto detected in control panel environments. Sometimes though you may need to override an auto-detected PHP, and this can easily be set up though an LSAPI External Application and Script Handler for PHP. When setting up an LSAPI External Application and Script Handler for PHP, it will take precedent over the auto detection.

## Settings[¶](#extapp-settings "Permanent link")

You will need to set up a LiteSpeed SAPI External Application and a Script Handler inside of LiteSpeed Web Server. Here are the various settings to configure that we have for each section.

### LiteSpeed SAPI App[¶](#extapp-setting-lsapi-app "Permanent link")

| Title | Value | Description |
| --- | --- | --- |
| Name | `lsphp71` | A unique name for this external application. |
| Address | `uds://tmp/lshttpd/lsphp71.sock` | A unique socket address used by the external application. IPv4/IPv6 sockets and Unix Domain Sockets (UDS) are supported. |
| Notes | `blank` | Add notes for yourself. |
| Max Connections | `35` | Specifies the maximum number of concurrent connections that can be established between the server and an external application. |
| Environment | `PHP_LSAPI_CHILDREN=35` | Specifies extra environment variables for the external application. |
| Initial Request Timeout | `60` | Specifies the maximum time in seconds the server will wait for the external application to respond to the first request over a new established connection. |
| Retry Timeout | `0` | Specifies the period of time that the server waits before retrying an external application that had a prior communication problem. |
| Persistent Connection | `Yes` | Specifies whether to keep the connection open after a request has been processed. |
| Connection Keepalive Timeout | `Not Set` | Specifies the maximum time in seconds to keep an idle persistent connection open. |
| Response Buffering | `No` | Specifies whether to buffer responses received from external applications. |
| Start By Server | `Yes (Through CGI Daemon Async)` | Specifies whether you want the web server to start the application automatically. |
| Command | `/usr/local/lsws/lsphp71/bin/lsphp` | Specifies the full command line including parameters to execute the external application. |
| Back Log | `100` | Specifies the backlog of the listening socket. Required if "Start By Server" is enabled. |
| Instances | `1` | Specifies the maximum instances of the external application the server will create. |
| Run As User | `Not Set` | The external application will run as this specified user name. |
| Run As Group | `Not Set` | The external application will run as this specified group name. |
| umask | `Not Set` | Sets default umask for CGI processes. |
| Run On Startup | `Yes (Detached mode)` | Specifies whether to start the external application at server start up. |
| Max Idle Time | `10` | Specifies the maximum idle time before an external application is stopped by the server, freeing idle resources. |
| Priority | `0` | Specifies priority of the external application process. |
| Memory Soft Limit | `2047M` | Specifies the memory consumption limit in bytes for an external application process or an external application started by the server. |
| Memory Hard Limit | `2048M` | Much the same as "Memory Soft Limit (bytes)", except the soft limit can be raised up to the hard limit from within a user process. |
| Process Soft Limit | `400` | Limits the total number of processes that can be created on behalf of a user. |
| Process Hard Limit | `500` | Much the same as "Process Soft Limit", except the soft limit can be raised up to the hard limit from within a user process. |

Notes

**Name** and **Address** need to be unique values.

**Max Connections** and **PHP\_LSAPI\_CHILDREN** values need to match, in this case both need to equal `35`.

Anything that is set as `Not Set` is not a required field.

### Script Handler[¶](#extapp-setting-script-handler "Permanent link")

| Title | Value | Description |
| --- | --- | --- |
| Suffixes | `php` | Specifies the unique script file suffixes that will be handled by this script handler. |
| Handler Type | `LiteSpeed SAPI` | Specifies the type of external application that processes these script files. |
| Handler Name | `lsphp71` | Specifies the name of the external application that processes the script files when the handler type is FastCGI, Web Server, LSAPI, Load Balancer, or Servlet Engine. |
| Notes | `blank` | Add notes for yourself. |

Notes

Each **Suffixes** value needs to be unique from each other.

**Notes** is not a required field

## How To[¶](#extapp-setup "Permanent link")

### GUI[¶](#extapp-setup-gui "Permanent link")

The easiest way to set up the external application and script handler is via our WebAdmin Console, which gives you a Graphical User Interface (GUI) to add all of the settings needed.

Here is how, step by step:

1. Go to your WebAdmin Console (`https://YOUR_SERVER_IP:7080`) and log in.
2. Navigate to **Configuration > Server > External Application**.
3. Click **Add**, then select **Type: LSAPI App**, and click **Next**.
4. While on this page, be sure to fill in all of the required fields. For default values and recommended values you can hover over the tooltip icon or reference [this section](#extapp-settings). Once everything is filled out be sure to hit **Save**. [![!webadmin-extapp-lsapi](../images/php-override01.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-override01.png)
5. Navigate to **Configuration > Server > Script Handler**.
6. While on this page, be sure to fill in all the required fields. For default values and recommended values you can hover over the tooltip icon or reference [this section](#extapp-settings). Once everything is filled out be sure to hit **Save**. [![!webadmin-extapp-sh](../images/php-override02.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-override02.png)
7. Now that everything has been set up, navigate to **Actions** and press the icons next to **Restart Detached PHP Processes** and then **Apply Changes / Graceful Restart**. [![!webadmin-restart](../images/php-override03.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-override03.png)

That is it! The external application and script handler is now fully set up, and pages ending in the suffix you put for your script handler will use this external application to process the page.

### Command Line[¶](#extapp-setup-cmd-line "Permanent link")

It is possible to set up the external application and script handler manually via a terminal. Open `/usr/local/lsws/conf/httpd_config.xml` with your favorite editor (nano, vim, emacs, etc). An example when using, vi:

```
$ sudo vi /usr/local/lsws/conf/httpd_config.xml
```

Then, find the `<extProcessorList></extProcessorList>` block and add the following to it:

```
<extProcessor>
  <type>lsapi</type>
  <name>lsphp71</name>
  <address>uds://tmp/lshttpd/lsphp71.sock</address>
  <maxConns>35</maxConns>
  <env>PHP_LSAPI_CHILDREN=35</env>
  <initTimeout>60</initTimeout>
  <retryTimeout>0</retryTimeout>
  <persistConn>1</persistConn>
  <respBuffer>0</respBuffer>
  <autoStart>3</autoStart>
  <path>/usr/local/lsws/lsphp71/bin/lsphp</path>
  <backlog>100</backlog>
  <instances>1</instances>
  <runOnStartUp>3</runOnStartUp>
  <extMaxIdleTime>10</extMaxIdleTime>
  <priority>0</priority>
  <memSoftLimit>2047M</memSoftLimit>
  <memHardLimit>2048M</memHardLimit>
  <procSoftLimit>400</procSoftLimit>
  <procHardLimit>500</procHardLimit>
</extProcessor>
```

Note

Be sure there is not another `<extProcessor></extProcessor>` with the same `<name></name>`. This needs to be unique and can break LiteSpeed Web Server when you restart it.

After the external application has been added, find the `<scriptHandlerList></scriptHandlerList>` block and add the following in it:

```
<scriptHandler>
  <suffix>php</suffix>
  <type>lsapi</type>
  <handler>lsphp71</handler>
</scriptHandler>
```

Note

Be sure there is not another `<scriptHandler>` with the same **suffix**. This needs to be unique and can break LiteSpeed Web Server when you restart it.

To have the `/usr/local/lsws/conf/httpd_config.xml` changes you just made take effect inside of LiteSpeed Web Server, run the following:

```
$ sudo touch /usr/local/lsws/admin/tmp/.lsphp_restart.txt
$ sudo systemctl restart lsws
```
