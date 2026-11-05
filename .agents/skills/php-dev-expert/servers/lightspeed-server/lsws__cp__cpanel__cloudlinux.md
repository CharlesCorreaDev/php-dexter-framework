# CloudLinux Setup for cPanel with LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/cloudlinux/

---

# CloudLinux[¶](#cloudlinux "Permanent link")

The LiteSpeed development team works very closely with the CloudLinux team to make sure the capabilities shared between LiteSpeed and CloudLinux work seamlessly.

CloudLinux and LiteSpeed Containers are separate and distict ways to limit resource usage and present a sandboxed environment. [Learn more about LiteSpeed Containers](lsws__cp__cpanel__lscntr.md).

## Important Points[¶](#important-points "Permanent link")

- The LiteSpeed Web Server Installer must be run the same way on a CloudLinux system as you would on cPanel without CloudLinux.
- To use the CloudLinux PHP Selector only, instead of cPanel's EA4 Multi-PHP Manager, please see [PHP Selector](lsws__cp__cpanel__php-selector.md).
- For more detailed configuration on LVE, CageFS or PHP Selector, please see [CloudLinux documentation](http://docs.cloudlinux.com/index.html).

## Enable CageFS[¶](#enable-cagefs "Permanent link")

Note

```
This step is only required if you have installed CageFS after installing LiteSpeed.
```

To enable in LSWS, go to **Configuration > Server > General > CloudLinux** and set **CloudLinux** to `CageFS` or `CageFS without suEXEC`.

Note

```
A LSWS mount point will be included in the skeleton automatically if LSWS is installed **prior to** CageFS.
```

If LSWS gets installed after CageFS, run following command to get LSWS added to the skeleton:

```
/usr/sbin/cagefsctl --create-mp
```

then update CageFS.

```
/usr/sbin/cagefsctl --remount-all
/usr/sbin/cagefsctl --update
```

Note

If the update mentions needing to force update, force the update.

## Ruby/Python/Node.js Selector[¶](#rubypythonnodejs-selector "Permanent link")

Ruby/Python/Node.js Selectors are supported by LiteSpeed Web Server out of the box. You will need to follow the instructions in the CloudLinux selector to make your application work with Apache first before switching to LSWS. You can refer to the [official CloudLinux documentation](https://docs.cloudlinux.com/index.html?node_js_selector.html).

LiteSpeed supports the Apache `mod_passenger` configuration generated through CloudLinux selectors. However, behind the scenes, LiteSpeed's is a completely different implementation.

Note

CloudLinux should have installed all required packages automatically. For an older installation, you may need to run the script to install the required ruby/python lsapi modules:

```
/usr/local/lsws/admin/misc/enable_ruby_python_selector.sh
```

### Supported mod\_passenger directives[¶](#supported-mod_passenger-directives "Permanent link")

LiteSpeed supports the following Apache mod\_passenger configuration directives:

```
PassengerBaseURI
PassengerAppRoot
PassengerAppEnv
PassengerAppType
PassengerStartupFile
PassengerPython
PassengerRuby
PassengerNodejs
PassengerUser
PassengerGroup
```

### About Node.js Support[¶](#about-nodejs-support "Permanent link")

There is virtually no downside to using Node.js with LSWS. All of your existing Node.js packages which can include Ghost or any homegrown software, will run with virtually no changes through the LiteSpeed port. LiteSpeed continues to serve all of your non-Node.js traffic and it will now additionally service the Node.js traffic.

### How LiteSpeed Works with NodeJS Selector[¶](#how-litespeed-works-with-nodejs-selector "Permanent link")

For a Node.js application managed by CloudLinux Node.js selector, LSWS does an automatic `ws://` proxy to the Node.js backend, if the request does a WebSocket upgrade. No extra configuration is required.

When direct connecting to a Node.js server, test with

```
ws://...
```

When going through a LSWS HTTPS proxy server, use

```
wss://...
```

When a Node.js server is started through LSWS NodeJS selector integration (`mod_passenger`), the TCP socket is replaced with an auto-generated Unix domain socket, so direct access the TCP port may fail.

### How to Test Node.js with LSWS[¶](#how-to-test-nodejs-with-lsws "Permanent link")

You can create a file with the name `index.js`. Place the following content in the file:

```
var http = require('http');
var server = http.createServer(function(req, res) {
    res.writeHead(200, {'Content-Type': 'text/plain'});
    var message = 'It works!\n',
        version = 'NodeJS ' + process.versions.node + '\n',
        response = [message, version].join('\n');
    res.end(response);
});
server.listen();
```

Point your browser to `http://example.com/index.js`.

The result:

```
It works!
NodeJS 10.11.0
```

Note

Any port specifications in the `listen` function are ignored. The server is processed by the Node.js function of LiteSpeed automatically.

### Avoid app frequently stopping and starting[¶](#avoid-app-frequently-stopping-and-starting "Permanent link")

See the [LSAPI\_AVOID\_FORK documentation](https://docs.litespeedtech.com/extapp/php/configuration/options/#lsapi_avoid_fork) to avoid frequently stopping and starting child processes. This might be preferred in a dedicated hosting environment because it may be faster to recycle existing processes, even if it means sometimes running unused processes.

### Increase Python App Max Children Limit[¶](#increase-python-app-max-children-limit "Permanent link")

Navigate to **cPanel > Set up Python App** and select **Edit** for the app that needs the limit adjusted. Navigate to **Environment variables > Add variable**. Create a new variable with the name `LSAPI_CHILDREN` and set the value as you see fit.

The default value is `6`, but `10` or `15` might be more appropriate for your traffic level.

Click **Save** in the upper right corner, and restart the application in order to reload the variables.

You can use the following script to verify that the max children process limit has been increased accordingly:

```
import os
import sys

sys.path.insert(0, os.path.dirname(__file__))

def application(environ, start_response):
    start_response('200 OK', [('Content-Type', 'text/html; charset=utf-8')])
    body = ''
    for i in os.environ:
        body += f'{i}: {os.environ[i]}<br>'
    return [body.encode()]
```

To apply a new max children process limit globally, open the LiteSpeed WebAdmin Console, navigate to **Server conf > App server > Python WSGI Default Settings > Environment** , and add `LSAPI_CHILDREN=XX`. (Replace `XX` with the value you wish to apply, for example, `10`.)

Restart LiteSpeed Web Server to apply the new value.

### Steps to Test Python and Ruby Selector[¶](#steps-to-test-python-and-ruby-selector "Permanent link")

- Make sure Python and Ruby Selector works properly under Apache (follow [CloudLinux instructions](https://docs.cloudlinux.com/index.html?python_and_ruby_selector.html) to install and configure).
- Test a Ruby or Python application with Apache and ensure it is running OK.
- Switch to LiteSpeed and try a ruby/python app

### Python error log output[¶](#python-error-log-output "Permanent link")

The **Run on Startup** option controls where you will find the `stderr.log` file.

In your WebAdmin Console, navigate to **Configuration > Server > App Server** and scroll down to the **Python WSGI Default Settings** section.

If **Run on Startup** is set to `Yes (Detached Mode)`, which is the default setting, then errors will be logged to the server log (for example `/var/log/apache2/stder.log`).

If **Run on Startup** is set to any other setting, then errors will be logged at the application root (for example `/home/user/app/stderr.log`).

### Restart Application[¶](#restart-application "Permanent link")

The application can be restarted by touching the `<app_root_dir>/tmp/restart.txt` file. For example, if a python application is located at `/home/user1/mypythonapp` the command would be:

```
touch /home/user1/mypythonapp/tmp/restart.txt
```

This will tell the server to restart the application.

### Node.js Selection with NextJS Server[¶](#nodejs-selection-with-nextjs-server "Permanent link")

If you want to run a NextJS application with Node.js, you first must compile the NextJS project as a standalone. This will create a `server.js` script that you can use as a startup script.

The provided `server.js` script bypasses the CLI and works without `stdin.resume()`.

Note

This is not the "custom server" method, and all of the NextJS functionalities are available.

### Node.js Automatic WebSocket Proxy[¶](#nodejs-automatic-websocket-proxy "Permanent link")

For a Node.js application managed by CloudLinux Node.js selector, LSWS does an automatic `ws://` proxy to the Node.js backend, if the request does a WebSocket upgrade. No extra configuration required.

When direct connecting to a Node.js server, test with

```
ws://...
```

When going through a LSWS HTTPS proxy server, use

```
wss://...
```

When a Node.js server is started through LSWS Node.js selector integration (mod\_passenger), the TCP socket is replaced with an auto-generated Unix domain socket, hence direct access the TCP port may fail.

### Log file locations[¶](#log-file-locations "Permanent link")

- Python/NodeJS STDERR log The application will log STDERR to `stderr.log` under the application root directory.
- Ruby/Rack application STDERR log The application will log STDERR to `log/stderr.log` under the application root directory.
- Node.js console log For console log, you can use `SetEnv LSNODE_CONSOLE_LOG` in `.htaccess`. For example, the following allows you to have `console.log` under the application root directory:

```
SetEnv LSNODE_CONSOLE_LOG console.log
```

## CRIU[¶](#criu "Permanent link")

Stop

Due to stability issues, LiteSpeed CRIU support has been completely disabled.

## Troubleshooting[¶](#troubleshooting "Permanent link")

See [CloudLinux Troubleshooting](lsws__cp__cpanel__ts-cloudlinux.md).
