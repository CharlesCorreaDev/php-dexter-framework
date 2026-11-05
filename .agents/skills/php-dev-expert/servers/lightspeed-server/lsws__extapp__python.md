# Python | External Applications | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/extapp/python/

---

# Python[¶](#python "Permanent link")

## FastCGI[¶](#fastcgi "Permanent link")

This is a generic FCGI how-to for Python applications. Although we use [Jon's FCGI Python library](http://jonpy.sourceforge.net/) for this example, you can use any valid Python FCGI module for your own setup.

### Requirements[¶](#requirements "Permanent link")

1. LiteSpeed Web Server
2. Python
3. Jon's Python FCGI library: [jonpy.sourceforge.net](http://jonpy.sourceforge.net/)

### Setup[¶](#setup "Permanent link")

Create a Virtual Host for this setup. From now on we will refer to this vhost as PythonVhost.

Save the following sample Python FCGI application to a path of your choice. We will call this app `demoapp.py` for tutorial purposes:

```
#!/usr/bin/python
import jon.cgi as cgi
import jon.fcgi as fcgi
from cgi import escape
import traceback

class Handler(cgi.Handler):
  def process(self, req):
    req.set_header("Content-Type", "text/html")
    req.write("Hello Python! Hello LiteSpeed!<hr size=1>")
    keys = req.environ.keys()
    keys.sort()
    for k in keys:
        req.write(escape(k) + " = " + escape(req.environ[k]) + "<br>")
    req.write(traceback.print_exc())

fcgi.Server({fcgi.FCGI_RESPONDER: Handler}).run()
```

In the WebAdmin Console, navigate to **PythonVhost > External Apps** and create a new External Application. Set the following values:

- **Name**: `MyPythonFCGI`
- **Address**: `uds://tmp/lshttpd/mypythonfcgi.sock`
- **Max Connections**: `10`
- **Initial Request Timeout (secs)**: `10`
- **Retry Timeout (secs)**: `0`
- **Persistent Connection**: `Yes`
- **Connection Keepalive Timeout**: `30`
- **Response Bufferring**: `No`
- **Start By Server**: `Yes`
- **Command**: The path to the Python FCGI app, e.g., `/absolutepathto/demoapp.py`
- **Back Log**: `50`
- **Instances**: `10`

Navigate to **PythonVhost > Contexts** and create a new FCGI Context. Set the following values:

- **URI**: URI path to bind to python FCGI app we created, e.g., `/python/`
- **Fast CGI App**: Select the Python external app we just created, `[VHost Level] MyPythonFCGI`

Restart LiteSpeed and access your new Pythyon FCGI application with the `/python/` URL in your PythonVhost virtual host.

## LSAPI[¶](#lsapi "Permanent link")

LiteSpeed SAPI is the easiest and fastest way to run web applications with LiteSpeed Web Server. LiteSpeed supports LSAPI for Python applications through WSGI. WSGI (Web Server Gateway Interface) is a low-level interface between web servers and web applications. It allows Python applications designed for WSGI to be used in a variety of settings. It is important to note that, while most Python applications are WSGI-compatible, not all are.

This guide will explain how to set up LSWS to run Python applications with LWSGI. You should already have a working version of Python installed and virtual hosts set up to run it on.

### Compile Python with LSWSGI[¶](#compile-python-with-lswsgi "Permanent link")

Download the WSGI LSAPI module from our site [here](http://www.litespeedtech.com/packages/lsapi/wsgi-lsapi-1.6.tgz).

Save the module to your server root, `/usr/local/lsws`. To recompile Python, navigate into the module directory and run the following commands:

```
cd /usr/local/lsws/wsgi-lsapi-1.6
python ./configure.py
make
```

Copy the `lswsgi` file to `/usr/local/lsws/fcgi-bin/`. (This directory is where all of your LSAPI executables go.)

```
cp lswsgi /usr/local/lsws/fcgi-bin/
```

Now your LSWSGI executable is ready for LiteSpeed Web Server.

### Set up an External Application[¶](#set-up-an-external-application "Permanent link")

This process is the same as with any other LSAPI application, except with a different executable and suffix.

[![python_add_ext_app.png](images/python01.png)](https://docs.litespeedtech.com/lsws/extapp/python/images/python01.png)

Navigate to the **External App** tab (**WebAdmin console > Configuration > External App**) and add an external application. (This can be done at the server or virtual host level.)

[![python_ext_app_type.png](images/python02.png)](https://docs.litespeedtech.com/lsws/extapp/python/images/python02.png)

Select **Type** `LSAPI App`.

[![python_ext_app_settings.png](images/python03.png)](https://docs.litespeedtech.com/lsws/extapp/python/images/python03.png)

Give it a name and a socket. Most importantly, for the **Command** setting, specify the location of your LSWSGI executable: `/usr/local/lsws/fcgi-bin/lswsgi`. (You also have to pick values for **Max Connections**, **Initial Request Timeout**, and **Retry Timeout**.)

In the **Environment** field add the following:

```
LSAPI_CHILDREN=35
```

Set **Instance** to `1`.

[![python_ext_app_success.png](images/python04.png)](https://docs.litespeedtech.com/lsws/extapp/python/images/python04.png)

You now have an LSWSGI external application.

The configuration looks like this:

```
<extProcessor>
    <type>lsapi</type>
    <name>wsgiapp</name>
    <address>uds://tmp/lshttpd/lswsgi.sock</address>
    <maxConns>35</maxConns>
    <env>LSAPI_CHILDREN=35</env>
    <initTimeout>60</initTimeout>
    <retryTimeout>0</retryTimeout>
    <respBuffer>0</respBuffer>
    <autoStart>1</autoStart>
    <path>/usr/local/lsws/fcgi-bin/lswsgi</path>
    <instances>1</instances>
</extProcessor>
```

### Set up a Script Handler[¶](#set-up-a-script-handler "Permanent link")

[![python_add_script_handler.png](images/python05.png)](https://docs.litespeedtech.com/lsws/extapp/python/images/python05.png)

You'll need to create a WSGI script handler to tell LSWS to send `.wsgi` scripts to your LSWSGI application. Navigate to the **Script Handler** tab (**WebAdmin Console > Configuration > Script Handler**) and click **Add**. (This, also, can be done at the server or virtual host level.)

[![python_script_handler_settings.png](images/python06.png)](https://docs.litespeedtech.com/lsws/extapp/python/images/python06.png)

Stipulate `wsgi` as the suffix of your WSGI Python apps. Pick **Handler Type** `LiteSpeed SAPI` and, for **Handler Name**, choose the LSWSGI external application you just created. (If you want scripts other than `.wsgi` to use Python, you can make extra script handlers to handle those scripts.)

Now your LSWS can handle `.wsgi` scripts and knows where to send them.

### Restart and Test[¶](#restart-and-test "Permanent link")

Graceful Restart to apply changes.

To test this setup, use the simple hello world script below:

```
def application(environ, start_response):
  start_response('200 OK', [('Content-Type', 'text/plain')])
  return ['Hello World!n']
```

Name your file `hello.wsgi` and save it to `/usr/local/lsws/DEFAULT/html`. This is the document root for LSWS's default vhost, "Example."

[![python_hello_world_success.png](images/python07.png)](https://docs.litespeedtech.com/lsws/extapp/python/images/python07.png)

Now, when you point your browser to `localhost:8088/hello.wsgi`, you will see "Hello World!" displayed.
