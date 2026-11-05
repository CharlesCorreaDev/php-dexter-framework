# Overview | External Applications | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/extapp/

---

# External Applications[¶](#external-applications "Permanent link")

LiteSpeed Web Server does not handle dynamic content with its own processes. Instead, it sends the requests out to external applications that have been set up to handle different kinds of dynamic content. This allows LSWS to more efficiently handle multiple requests and connections.

Such external applications include the following:

- PHP
- Perl
- Node.js
- Python
- Ruby
- Java

## Setup[¶](#setup "Permanent link")

This guide will explain, in a general way, how to set up an external application. Explore the menu to find more targeted instructions for specific external apps.

### Scope[¶](#scope "Permanent link")

External applications may be set at the server level to be used by all virtual hosts. External applications set at the virtual host level are only available to that virtual host.

Decide whether you want your external app's scope to be across all virtual hosts, or just a single vhost. Then, open the WebAdmin Console, and navigate to the **External App** tab at the server level, or the vhost level.

### Types of External Application[¶](#types-of-external-application "Permanent link")

[![](images/index01.png)](https://docs.litespeedtech.com/lsws/extapp/images/index01.png) External Application Types are differentiated by the service they provide or the protocol they use to communicate with the server. You can choose one of the following options from the **Type** dropdown:

- `FastCGI`: a FastCGI application with a Responder role. (Perl)
- `FastCGI Authorizer`: a FastCGI application with an Authorizer role
- `LiteSpeed SAPI App`: an application that communicates with the web server using LSAPI protocol. (PHP, Ruby, and Python)
- `Servlet Engine`: a servlet engine with an AJPv13 connector, such as Tomcat. (Java)
- `Web Server`: a web server or application server that supports HTTP protocol.
- `Piped Logger`: an application that can process access log entries received on its STDIN stream.
- `Load Balancer`: a virtual application that can balance the load among worker applications.

Tip

Most applications will use either the LSAPI or FastCGI protocol. PHP, Ruby, and Python can be set up either way, but they run faster using LSAPI.

### Start by web server or manually[¶](#start-by-web-server-or-manually "Permanent link")

External applications can be split into two types: Those that are started by the web server and those that have to be started manually. FastCGI and LSAPI applications running on the same machine as the web server can be started by the web server on demand. These applications are called "local external applications". Applications that are not started by the web server are referred to as "remote external applications", even when they are running on the same machine. (A servlet engine has to be started manually whether it runs on the same machine or not.) While the server starting external applications itself is more convenient, putting external applications on remote machines can allow for more scalability. This option is explored in the [LSPHP Command Line Mode documentation](lsws__extapp__php__advanced.md#set-up-command-line-mode).

[![](images/index02.png)](https://docs.litespeedtech.com/lsws/extapp/images/index02.png)

After selecting the SAPI to use, you must specify a **Name**, **Address**, and **Max Connections** for the external application. For local external applications, you also need to specify the **Command**, **Back Log**, **Instances**, and **Environment** settings.

### Script and context handlers[¶](#script-and-context-handlers "Permanent link")

Setting up the values in the External App tab is not the end, though. External applications have to be configured as either a script handler or a context handler. These settings are how the web server knows which content to send to which external application.

[![](images/index03.png)](https://docs.litespeedtech.com/lsws/extapp/images/index03.png)

Script handlers differentiate content based on the file's suffix (and the corresponding MIME type). Setting up an external application as a script handler (in the **Script Handler** tab at either the server or virtual host level) will cause the server to send certain types of files to that external application.

Context handlers can only be configured at the virtual host level (**Configuration > Virtual Hosts> your virtual host > Context**). When configured as a context handler, an external application will be used for content based on its location, not its file type. The web server will send content to the external application as long as the request's URL matches the URI specified in the context settings.
