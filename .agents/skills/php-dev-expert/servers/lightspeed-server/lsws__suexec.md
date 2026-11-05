# SuEXEC | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/suexec/

---

# SuEXEC[¶](#suexec "Permanent link")

SuEXEC is a feature that allows LiteSpeed Web Server to run external web applications under a UID (userid) other then the UID of the web server process. Such external applications include CGI, FastCGI, LSAPI, PHP, Ruby, Python, and more.

## Why use SuEXEC?[¶](#why-use-suexec "Permanent link")

SuExec usage reduces the risk of exploited Cross-site scripting (XSS) vulnerabilities when permissions are set correctly. It also prevents one user from accessing another user's files in a shared hosting environment.

## How to use SuEXEC[¶](#how-to-use-suexec "Permanent link")

Follow these steps to enable SuEXEC with LiteSpeed Web Server:

1. Create a virtual host.
2. Set **CGI Set UID Mode** to `Docroot UID`.
3. Add your web application under the **External Apps** tab.
4. Set a **Script Handler** if the application is to use scripts with a specific suffix like `.php`.
5. Add a **Context** if the application is to handle a specific request URI.
6. Verify the ownership of the virtual host’s document root has been set properly. A privileged user with a userid less than the set **Minimum UID** is not allowed.
7. Restart LiteSpeed Web Server.

Example

To run PHP in SuEXEC mode:

1. Define a virtual-host-level lsphp application similar to the pre-configured global lsphp application, using a unique **Name** and **Address**. Try using `$VH_NAME` as prefix.
2. Override the global PHP script handler by adding a virtual host level one. **Script Handler** configuration can be found under the **General** tab of the current virtual host configuration.
