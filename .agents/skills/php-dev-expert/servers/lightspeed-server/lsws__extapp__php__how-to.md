# How-To | PHP | External Applications | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/extapp/php/how-to/

---

# How-To[¶](#how-to "Permanent link")

## Override auto-detected PHP[¶](#override-auto-detected-php "Permanent link")

Starting with LiteSpeed Web Server 5.3, PHP setup is located in the PHP section of LSWS and can be auto-detected in control panel environments. Sometimes, though, you may need to override auto-detected PHP, and this can easily be set up by configuring an LSAPI external application and script handler for PHP. When setting up an LSAPI external application and script handler for PHP, it will take precedence over auto-detection.

### Settings[¶](#extapp-settings "Permanent link")

You will need to set up a LiteSpeed SAPI external application and a script handler inside LiteSpeed Web Server. Here are the various settings to configure that we have for each section.

#### LiteSpeed SAPI app[¶](#extapp-setting-lsapi-app "Permanent link")

| Title | Value | Description |
| --- | --- | --- |
| **Name** | `lsphp85` | A unique name for this external application. |
| **Address** | `uds://tmp/lshttpd/lsphp85.sock` | A unique socket address used by the external application. IPv4/IPv6 sockets and Unix domain sockets (UDS) are supported. |
| **Notes** | `blank` | Add notes for yourself. |
| **Max Connections** | `35` | Specifies the maximum number of concurrent connections that can be established between the server and an external application. |
| **Environment** | `PHP_LSAPI_CHILDREN=35` | Specifies extra environment variables for the external application. |
| **Initial Request Timeout** | `60` | Specifies the maximum time in seconds the server will wait for the external application to respond to the first request over a newly established connection. |
| **Retry Timeout** | `0` | Specifies the period of time that the server waits before retrying an external application that had a prior communication problem. |
| **Persistent Connection** | `Yes` | Specifies whether to keep the connection open after a request has been processed. |
| **Connection Keepalive Timeout** | `Not Set` | Specifies the maximum time in seconds to keep an idle persistent connection open. |
| **Response Buffering** | `No` | Specifies whether to buffer responses received from external applications. |
| **Start By Server** | `Yes (Through CGI Daemon Async)` | Specifies whether you want the web server to start the application automatically. |
| **Command** | `/usr/local/lsws/lsphp85/bin/lsphp` | Specifies the full command line, including parameters, to execute the external application. |
| **Back Log** | `100` | Specifies the backlog of the listening socket. Required if **Start By Server** is enabled. |
| **Instances** | `1` | Specifies the maximum instances of the external application the server will create. |
| **Run As User** | `Not Set` | The external application will run as this specified user name. |
| **Run As Group** | `Not Set` | The external application will run as this specified group name. |
| **umask** | `Not Set` | Sets the default umask for CGI processes. |
| **Run On Start Up** | `Yes (Detached mode)` | Specifies whether to start the external application at server startup. |
| **Max Idle Time** | `10` | Specifies the maximum idle time before an external application is stopped by the server, freeing idle resources. |
| **Priority** | `0` | Specifies the priority of the external application process. |
| **Memory Soft Limit** | `2047M` | Specifies the memory consumption limit in bytes for an external application process or an external application started by the server. |
| **Memory Hard Limit** | `2048M` | Much the same as **Memory Soft Limit**, except the soft limit can be raised up to the hard limit from within a user process. |
| **Process Soft Limit** | `400` | Limits the total number of processes that can be created on behalf of a user. |
| **Process Hard Limit** | `500` | Much the same as **Process Soft Limit**, except the soft limit can be raised up to the hard limit from within a user process. |

Notes

**Name** and **Address** need to be unique values.

**Max Connections** and `PHP_LSAPI_CHILDREN` values need to match. In this case, both need to equal `35`.

Anything that is set as `Not Set` is not a required field.

#### Script handler[¶](#extapp-setting-script-handler "Permanent link")

| Title | Value | Description |
| --- | --- | --- |
| **Suffixes** | `php` | Specifies the unique script file suffixes that will be handled by this script handler. |
| **Handler Type** | `LiteSpeed SAPI` | Specifies the type of external application that processes these script files. |
| **Handler Name** | `lsphp85` | Specifies the name of the external application that processes the script files when the handler type is FastCGI, Web Server, LSAPI, Load Balancer, or Servlet Engine. |
| **Notes** | `blank` | Add notes for yourself. |

Notes

Each **Suffixes** value needs to be unique.

**Notes** is not a required field.

### Set up[¶](#extapp-setup "Permanent link")

#### GUI[¶](#extapp-setup-gui "Permanent link")

The easiest way to set up the external application and script handler is via the WebAdmin Console, which gives you a graphical user interface (GUI) to add all of the needed settings.

Here are the step-by-step instructions for how to do this via our GUI:

1. Go to your WebAdmin Console (`https://192.0.2.123:7080`) and log in.
2. Navigate to **Configuration > Server > External Application**.
3. Click **Add**, select **Type: LSAPI App**, and click **Next**.
4. While on this page, be sure to fill in all the required fields. For default values and recommended values, you can hover over the tooltip icon or refer to the [Settings section](#extapp-settings). Once everything is filled out, be sure to select **Save**.
5. Navigate to **Configuration > Server > Script Handler**.
6. While on this page, be sure to fill in all the required fields. For default values and recommended values, you can hover over the tooltip icon or refer to the [Settings section](#extapp-settings). Once everything is filled out, be sure to select **Save**.
7. Now that everything has been set up, navigate to **Actions** and select the icons next to **Restart Detached PHP Processes** and **Apply Changes / Graceful Restart**.

The external application and script handler are now fully set up, and pages ending in the suffix you put for your script handler will use this external application to process the page.

#### Command line[¶](#extapp-setup-cmd-line "Permanent link")

It is possible to set up the external application and script handler manually via a terminal. Open `/usr/local/lsws/conf/httpd_config.xml` with your favorite editor, such as `nano`, `vim`, or `emacs`. For example, when using `vi`:

```
sudo vi /usr/local/lsws/conf/httpd_config.xml
```

Then, find the `<extProcessorList></extProcessorList>` block, and add the following to it:

```
<extProcessor>
  <type>lsapi</type>
  <name>lsphp85</name>
  <address>uds://tmp/lshttpd/lsphp85.sock</address>
  <maxConns>35</maxConns>
  <env>PHP_LSAPI_CHILDREN=35</env>
  <initTimeout>60</initTimeout>
  <retryTimeout>0</retryTimeout>
  <persistConn>1</persistConn>
  <respBuffer>0</respBuffer>
  <autoStart>3</autoStart>
  <path>/usr/local/lsws/lsphp85/bin/lsphp</path>
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

Be sure there is not another `<extProcessor></extProcessor>` with the same `<name></name>`. This needs to be unique, and it can break LiteSpeed Web Server when you restart it.

After the external application has been added, find the `<scriptHandlerList></scriptHandlerList>` block, and add the following to it:

```
<scriptHandler>
  <suffix>php</suffix>
  <type>lsapi</type>
  <handler>lsphp85</handler>
</scriptHandler>
```

Note

Be sure there is not another `<scriptHandler>` with the same **Suffixes** value. This needs to be unique, and it can break LiteSpeed Web Server when you restart it.

To have the changes you have just made to `/usr/local/lsws/conf/httpd_config.xml` take effect inside LiteSpeed Web Server, run the following:

```
sudo touch /usr/local/lsws/admin/tmp/.lsphp_restart.txt
sudo systemctl restart lsws
```

## Monitor PHP with New Relic[¶](#monitor-php-with-new-relic "Permanent link")

Install the PHP agent:

CentOSDebian/Ubuntu

```
sudo rpm -Uvh http://yum.newrelic.com/pub/newrelic/el5/x86_64/newrelic-repo-5-4.noarch.rpm
yum install newrelic-php5 -y
sudo newrelic-install install
```

```
echo 'deb http://apt.newrelic.com/debian/ newrelic non-free' | sudo tee /etc/apt/sources.list.d/newrelic.list
wget -O- https://download.newrelic.com/548C16BF.gpg | sudo apt-key add -
sudo apt-get update
sudo apt-get install newrelic-php5 -y
sudo newrelic-install install
```

Configure your application name and New Relic license key.

The installation process prompts for your application name and license key. Your license key appears in the **Account information** section of your **Account settings**.

Restart your web server and PHP service:

```
systemctl restart lsws
killall lsphp
```

Visit any PHP page to generate some traffic.

Connect to the application on the New Relic account page.
