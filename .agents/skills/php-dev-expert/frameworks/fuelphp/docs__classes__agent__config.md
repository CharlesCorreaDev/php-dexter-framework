# Agent Config - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/agent/config.html

---

## Agent Class

The agent class allows you to retrieve information about browser type, version, platform or operating system, etc, based on the clients User Agent string.

### Configuration

The agent class uses the PHP function [get\_browser()](http://php.net/manual/en/function.get-browser.php),
which attempts to determine the capabilities of the user's browser, by looking up the browser's information in the browscap.ini file.

The following global configuration values can be defined:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| browscap | array | ``` array( 	'enabled' => true, 	'url'     => 'http://browsers.garykeith.com/stream.asp?BrowsCapINI', 	'method' => 'wrapper', 	'proxy' => array( 		'host' => null, 		'port' => null, 		'auth' => 'none', 		'username' => null, 		'password' => null, 	), 	'file'   => '/tmp/php_browscap.ini', ) ``` | browscap.ini retrieval configuration. |
| cache | array | ``` array( 	'driver'     => '', 	'expiry'     => 604800, 	'identifier' => 'fuel.agent', ) ``` | browscap.ini caching configuration. |

##### Browscap.ini configuration

If PHP has not been configured to use the browscap.ini file, the agent class will retrieve the file from the location defined in
the **config/agent.php** config file, and cached locally for re-use. This cache will be updated on a regular basis, based
on the timeout value defined in the configuration.

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| enabled | boolean | ``` true ``` | Enable download of the browscap.ini file. If disabled, and PHP has not been configured to the browscap functionality through get\_browser(), browser detection is disabled, and the agent class will return 'unknown'. |
| method | string | ``` 'wrapper' ``` | Method used to retrieve the browscap.ini file. Supported methods are:  - 'wrapper': This method uses **file\_get\_contents()**. This is the preferred option, but it might be disabled by your hosting provider. - 'curl': This method **curl** extensions. You can use this in case the 'wrapper' method doesn't work. - 'local': Use an external method to download the browscap.ini file (for example a cron job). - 'sockets': ***reserved for future use*** |
| url | string | ``` 'http://browsers.garykeith.com/stream.asp?BrowsCapINI' ``` | For the methods 'wrapper', 'curl' and 'sockets', the url to download an update of the browscap.ini file. |
| proxy | array | ``` array( ... ) ``` | See below. |
| file | string | ``` '/tmp/php_browscap.ini' ``` | For the method 'local', the name and location of the browscap.ini file on a local storage system. |

###### Proxy configuration

If your server requires the use of a forward proxy to access the internet, you can configure that as part of the browscap settings.

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| host | string | ``` null ``` | Hostname or IP address of your forward proxy. Do NOT include a scheme, so 'proxy.example.org', not 'http://proxy.example.org'. |
| port | integer | ``` null ``` | TCP port your proxy listens on. Common ports are 3128 (Squid) and 8080 (commercial proxies, ISA-2006+) or 80 (ISA-2004). |
| auth | string | ``` 'none' ``` | Authentication method for your proxy. Supported methods are:  - 'none': Your proxy does not require authentication. - 'basic': Basic authentication. Supported by both 'curl' and 'wrapper' methods. - 'ntlm': NTLM/Windows authentication. Only supported by the 'curl' method. |
| username | string | ``` null ``` | Username required for proxy authentication. |
| password | string | ``` null ``` | Password required for proxy authentication. |

##### Cache configuration

It the agent class is configured to process a browscap.ini file, it will cache the result of both the ini file parser and individual user agent requests
in order to increase the response time of the class. These configuration settings determine how the data is cached. For more information, see the [Cache](docs__classes__cache__config.md) class documentation.

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| driver | string | ``` '' ``` | Cache driver to use to cache the agent data. If you leave this empty, the default cache driver, configured in the cache configuration, will be used. |
| expiry | integer | ``` 604800 ``` | Number of seconds until the cached data expires. By default, this is 7 days, since the browscap.ini file doesn't change that often. It is recommended not to refresh more frequent than once a day.  The minumum setting is 7200 seconds (two hours), your server will be banned from the browscap website if you download more often! |
| identifier | string | ``` 'fuel.agent' ``` | Prefix to name of the cache. |
