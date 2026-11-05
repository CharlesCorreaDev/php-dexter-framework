# ZeroConf | Configuration | LiteSpeed Web ADC | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsadc/zeroconf/

---

# ZeroConf Configuration[¶](#zeroconf-configuration "Permanent link")

Every time you add a new site or modify a domain, you must configure:

- Listener
- Listener Log
- Access Log
- Access Control

Wouldn't it be nice to simply that workflow? That's where ZeroConf comes in.

## Benefits of ZeroConf[¶](#benefits-of-zeroconf "Permanent link")

With ZeroConf enabled, you only need to configure Listeners, and optionally Virtual Host Templates. That's it.

ZeroConf enables automatic configuration updates to simplify the process of setting up the ADC and Web Server. ZeroConf simplifies configuration for admins with many sites and/or servers. It works for a single front end node as well as for a multi-front-end highly available set up.

- No need to manage multiple clusters anymore. You manage:
  - One Cluster
  - One Mode
  - One Strategy
- No need to set up all the end points in a Worker Group
- No need to set up Virtual Hosts and Cluster mapping

Note

This page describes the latest version of ZeroConf used by the Kubernetes program to control the load balancer. Thus there are features described here that will only be available in 3.3 or newer versions of the load balancer.

## Set up ZeroConf in WebAdmin[¶](#set-up-zeroconf-in-webadmin "Permanent link")

ZeroConf must be set up in the Web ADC's WebAdmin Console. There is an optional cPanel plugin as well, which interfaces with the server side. If you wish to use the cPanel plugin, you can [follow these instructions](https://docs.litespeedtech.com/cp/cpanel/adc-zconf) to set it up, after you have finished configuring WebAdmin.

### Set up Listeners[¶](#set-up-listeners "Permanent link")

- Navigate to **Configuration > Listeners**.
- Edit `HTTP` listener, set **Enable Zero Config** to `Yes`, and click **Save**.
- Edit `HTTPS` listener, set **Enable Zero Config** to `Yes`, and verify that the SSL-related fields are also set up.

### Create Account and Password[¶](#create-account-and-password "Permanent link")

Determine where to place the `.htpasswd` file. It must be in a directory readable by the user running the ADC worker (default `nobody`).

Run the following command to generate the `.htpasswd` file from console, replacing `zero` with the account name you would like to use. You can change it to whatever you want, but keep in mind, there can only be one ZeroConf account:

```
htpasswd -c /HTPASSWD_PATH/.htpasswd zero
```

Enter your preferred password two times. For this example, let's say it is also `zero`.

Tip

If the command `htpasswd` is not found, please run the following command to install on CentOS:

```
yum -y install httpd-tools
```

Tip

An `.htgroup` may be created if desired, but is not required.

### Configure ZeroConf[¶](#configure-zeroconf "Permanent link")

Navigate to **Configuration > Server > ZeroConf**.

[![ZeroConf Settings](../images/zeroconf01.png)](https://docs.litespeedtech.com/lsadc/images/zeroconf01.png)

Click **Edit** in the **General** section and set the following:

- **Enable Zero Config**: `Yes`
- **User Password File**: `/HTPASSWD_PATH/.htpasswd` (replace `HTPASSWD_PATH` with the actual file path to `.htpasswd`)
- **Group Password File**: `/HTGROUP_PATH/.htgroup` (optional, replace `HTGROUP_PATH` with the actual file path to `.htgroup`)
- **ZConf SHM Directory**: `$SERVER_ROOT/zconf`

Everything else may be left as the default values.

Save your changes. The settings will be applied to all ZeroConf workers.

[![ZeroConf Settings](../images/zeroconf02.png)](https://docs.litespeedtech.com/lsadc/images/zeroconf02.png)

Click **Add** in the **ZeroConf Listeners** section and set the following:

- **Listener Name**: `ZConf` (or whatever you'd like to call it)
- **Address**: Web ADC's IP address and a port of your choice, e.g.`10.10.40.150:55688`
- **Private Key File**: `$SERVER_ROOT/crm.key` (replace with actual path to your key)
- **Certificate File**: `$SERVER_ROOT/crm.pem` (replace with actual path to your cert)

Save the new listener.

### Optional Debug Log[¶](#optional-debug-log "Permanent link")

If you are encountering problems with ZeroConf, you can enable debug logging.

Click **Edit** in the **ZeroConf Listener Log** section and set the following:

- **File Name**: `$SERVER_ROOT/Zconf.log`
- **Log Level**: `DEBUG`
- **Debug Level**: `HIGH`
- **Rolling Size (bytes)**: `10M`

Save your changes.

Tip

If you are not actively trying to find a problem, set **Debug Level** to `NONE`. Debug logs can easily fill up disk space, if left to run indefinitely.

#### Optional Access Log[¶](#optional-access-log "Permanent link")

You can keep an access log. Click **Edit** in the **ZeroConf Access Log** section and set the following:

- **File Name**: `$SERVER_ROOT/Zconf-Access.log`
- **Rolling Size (bytes)**: `10M`

Save your changes.

## Virtual Host Templates[¶](#virtual-host-templates "Permanent link")

ZeroConf can use ADC-configured Virtual Host Templates to generate a collection of VHosts that differ only by domain and cluster.

ZeroConf only requires a Template VHost. There is no need to create Member VHosts. ZeroConf inherits from the Template VHost.

Warning

With ZeroConf, server-level inheritance is not guaranteed for template values that are Not Set. We recommend that you explicitly configure as many values as possible, and not rely on server-level inheritance.

### ADC Configurations[¶](#adc-configurations "Permanent link")

In addition to the general template configurations, the following options are available:

- **Server > ZeroConf > Separate VHost Per Domain**, and **Virtual Host Templates > Template > ZeroConf> Separate VHost Per Domain** each control how the ADC build virtual hosts. By default, domains that share backend combinations will also share VHosts and cache stores. Enabling **Separate VHost Per Domain** creates individual VHosts and cache stores. These are two separate options at two separate levels, and they do not impact each other. This option defaults to `No` on both levels.
- **Virtual Host Templates > Template > ZeroConf > Used By ZeroConf** toggles whether to allow ZeroConf to use the template. It defaults to `Yes`.

Note

ZeroConf is not context aware. It does not know that there are similarities between `example.com` and `blog.example.com`. If **Separate VHost per Domain** is enabled, then these domains will each have their own VHosts.

### ZeroConf Messages[¶](#zeroconf-messages "Permanent link")

By default, no templates are selected. Therefore, the server level settings are used to create the VHosts.

To use a template, the `ZCUP` ("ZeroConf Cluster Up") message that you send to the [API](#api) needs to include a `"template"` configuration in one of the defined VHosts.

Example

Suppose we want to disable cache for a specific domain. In the ADC configuration, you would create a VHost Template named `noCacheTemplate` that disables the cache settings. Your `ZCUP` message would then look like the following:

```
conf=
{
"vhost_list" :
        [
                {
                "template" : "noCacheTemplate",
                "domain_list" :
                        [ "c7-30.ls.com","mail.c7-30.ls.com","www.c7-30.ls.com","cpanel.c7-30.ls.com","webdisk.c7-30.ls.com","webmail.c7-30.ls.com"],
                "conf_list" : [
                        {
                        "lb_port_list" : [443],
                        "dport" : 443,
                        "be_ssl" : true,
                        "ip_list" :
                                [
                                        { "ip": "10.10.40.153", "port_list" : [443] }
                                ]
                        }
                ]
                }
,               {
                "domain_list" :
                        [ "newdomain100.com","mail.newdomain100.com","www.newdomain100.com","webmail.newdomain100.com","cpanel.newdomain100.com","webdisk.newdomain100.com"],
                "conf_list" : [
                        {
                        "lb_port_list" : [443],
                        "dport" : 443,
                        "be_ssl" : true,
                        "ip_list" :
                                [
                                        { "ip": "10.10.40.153", "port_list" : [443] }
                                ]
                        }
                ]
                }
        ]
}
```

This ZCUP configuration includes two VHosts. The conf list is identical. The only difference is the domain list and a template configuration in the first VHost. The first VHost uses the VHost Template named `noCacheTemplate` configured in the ADC. The second VHost uses the server level configurations.

## API[¶](#api "Permanent link")

ZeroConf works by sending messages to LiteSpeed Web ADC, detailing the configuration for backend clusters. The API provides responses indicating success or failure.

The current configuration status can be viewed in the WebAdmin Console, under **Actions > Real-Time Stats**.

### Sending ZeroConf API Messages[¶](#sending-zeroconf-api-messages "Permanent link")

ZeroConf messages have the following components and may conveniently be sent via `curl` command:

- `BASICAUTH_USER`: The configured basic auth user name.
- `BASICAUTH_PASSWORD`: The configured basic auth password.
- `LSADC_IP`: The IP Address of Web ADC
- `LSADC_ZEROCONF_PORT`: The configured port for ZeroConf messages on the ADC.
- `API_COMMAND`: The command to be issued. These are listed below.
- `UNQ_BACKEND_NAME`: A name to uniquely identify this backend server. It is used as an identifier for uploaded configurations.

Example

```
DATA=/path/to/data/file
curl --silent -X POST --data-binary $DATA https://BASICAUTH_USER:BASICAUTH_PASSWORD@LSADC_IP:LSADC_ZEROCONF_PORT/API_COMMAND?name=UNQ_BACKEND_NAME
```

### Handling ZeroConf API Responses[¶](#handling-zeroconf-api-responses "Permanent link")

Messages to the ZeroConf API receive HTTP responses, with common status codes (typically `200` for success, `400` for invalid messages and failures). Response bodies may contain data from the ZeroConf system or error messages detailing a problem encountered while trying to process a received message.

Example

This is a sample error response for a configuration message. The request returns an HTTP status code of `400`, with the following response body:

```
                "bip_list" :
                ^
Error: Expected "domain_list" at line 7 at col 18
Error: Could not read vhost config at line 6 at col 18
Error: Could not read vhost list at line 4 at col 10
Error: Could not read configuration message at line 1 at col 1
```

### API Configuration Messages[¶](#api-configuration-messages "Permanent link")

- [`ZCUP`](#zcup-message): Cluster up
- [`ZCDOWN`](#zcdown-message): Cluster down
- [`ZCSSL`](#zcssl-message): Add SSL credentials
- [`ZCSSLRELEASE`](#zcsslrelease-message): Delete SSL credentials
- [`ZCOWNRRELEASE`](#zcownrrelease-message): Relinquish ownership of config records
- [`ZCLBALANCERCFG`](#zclbalancercfg-message): Set load balancer overall configuration information

Configuration messages are sent to LiteSpeed Web ADC using the HTTP protocol with Basic Authentication over a secure connection. Once the ZeroConf Listeners are configured according to [the Setup section above](#set-up-listeners), they will accept and process configuration messages sent to their respective IP and port.

Each configuration message must be sent to the URL composed of the ZeroConf Listener IP and port, with a request string specifying the configuration command and the cluster name.

For URLs below, optional fields are shown in brackets (`[` and `]`) and further explained in the notes.

The data for the command must be included in the POST body of the message in the order shown. As brackets are used in the message format, optional fields are shown underlined.

After the initial `conf=` string, white space is ignored between fields in the config message body.

Note that while the message is in JSON-like format, it is not generic JSON and the order must be followed as shown.

#### ZCUP Message[¶](#zcup-message "Permanent link")

The `ZCUP` message informs LiteSpeed Web ADC that a cluster is up (or back up) and is available to support backend traffic.

The configuration is a list of vhost objects. Each vhost object's configurations are not correlated with each other.

- `template` (optional): The name of the template to use with the listed domains. If not set, the domains will use the ADC's server default settings.
- `domain_list`: The list of domains that will utilize this vhost definition. See [domain\_list wildcards](#domain_list-wildcards-1) below for the use of wildcards. [1](#fn:1)
- `context_list`: (optional) A list of paths if all backends use the same paths. See [Using context\_list](#using-context_list-1) below for a description of using contexts. [1](#fn:1)
- `conf_list`: List of ADC port / Backend Port combinations. Each port combination should be its own object.
  - `lb_port_list`: The list of ports to associate with the backend port.
  - `force_http_error`: Optional parameter to force a specific HTTP error. If set, subsequent parameters are optional. Note that a value of 301, 302 or 303 is considered below as a redirect.[1](#fn:1)
  - `dport`: The backend port to forward the requests to.
  - `be_ssl`: true/false defining whether the backend is an SSL backend or plaintext.
  - `strategy`: (Kubernetes, optional) If set to 5 (weighted), priority set in `ip-list` will be used as a weight and must be 0..100. [1](#fn:1)
  - `ip_list`: List of IPs to mark as the backend. Each IP should be its own object. Each `ip_list` object is an independent worker and is tunable at that level.
    - `ip`: A backend IP.
    - `port_list`(optional): A comma delimited list of ports (integers), if different than `dport`.
    - `max_conn` (optional): The maximum number of connections for this IP.
    - `priority` (optional): Denotes the priority value for the configured node group. Only useful when the LB strategy is set to failover or weighted. Minimum value `0`, default `100`, maximum `255`. [1](#fn:1)
    - `context_list`: (optional) A list of paths if NOT all backends use the same paths. See [Using context\_list](#using-context-list) below for a description of using contexts. [1](#fn:1)

Message Format:

TemplateExample

```
conf={
    "vhost_list":
        [
            {
                "template" : "TEMPLATE_NAME",
                "domain_list" :
                    [ "example1.com", "example2.com", "example3.com" ],
                "conf_list" :
                    [
                        {
                            "lb_port_list" : [ 80 ],
                            "dport" : 80,
                            "be_ssl" : false,
                            "ip_list" :
                                [
                                    {
                                        "ip" : "10.10.40.153",
                                        "port_list" : [ PORT1, PORT2 ]
                                    }
                                ]
                        }
                    ]
            }
        ]
}
```

```
conf=
{
    "vhost_list" :
    [
        {
        "domain_list" :
            [ "example1.com", "sub.example1.com", "example2.com" ],
        "conf_list" :
            [
            {
                "lb_port_list" : [ 80 ],
                "dport" : 80,
                "be_ssl" : false,
                "ip_list" :
                [
                    { "ip" : "192.168.1.101", "port_list" : [ 8080 ] },
                    { "ip" : "192.168.1.102" }
                    { "ip" : "192.168.1.103", "port_list" : [ 8080 ], "max_conn" : 5000 },
                    { "ip" : "192.168.1.104", "priority" : 150 },
                ]
            }
            ]
        },
        {
        "domain_list" :
            [ "example1.com", "sub.example1.com", "example2.com", "secureonly.example.com" ],
        "conf_list" :
            [
            {
                "lb_port_list" : [ 443 ],
                "dport" : 443,
                "be_ssl" : true,
                "ip_list" :
                [
                    { "ip" : "192.168.1.103" },
                    { "ip" : "192.168.1.104" }
                ]
            }
            ]
        },
        {
        "template" : "noCacheTemplate"
        "domain_list" :
            [ "nocachedom.example.com", "nocachedom2.example.com", "nocache3.com" ],
        "conf_list" :
            [
            {
                "lb_port_list" : [ 443 ],
                "dport" : 443,
                "be_ssl" : true,
                "ip_list" :
                [
                    { "ip" : "192.168.1.103" },
                    { "ip" : "192.168.1.104" }
                ]
            }
            ]
        }
    ]
}
```

The sample data above should be in the data file when sending [via the command line](#sending-zeroconf-api-messages). The `API_COMMAND` should be `ZCUP`.

The example ZCUP configuration includes three vhosts. The second and third conf lists are identical; the only difference is the domain list and a template configuration in the third VHost. The second VHost uses the server level configurations. The third VHost uses the VHost Template named `noCacheTemplate` [configured in the ADC](#template-selection).

Tip

A ZeroConf VHost is **NOT** the same as an ADC VHost. VHost in the context of a ZeroConf ZCUP message is defined as the list of domains that share the conf\_list and template. A single VHost configuration can include thousands of domains as long as they share the conf\_list. For example, if there is a backend server with 1000 domains that are listening to port 443, they can share a vhost.

##### domain\_list wildcards [1](#fn:1)[¶](#domain_list-wildcards "Permanent link")

In the domain\_list wildcards can be used which follow the [Kubernetes wildcard rules](https://kubernetes.io/docs/concepts/services-networking/ingress/#hostname-wildcards).

A standalone domain\_list can exist which specifies the wildcard `*` which indicates that it should match any domain not matching any other entries. The LiteSpeed Ingress Controller uses this to specify the 404 Not Found backend.

A standalone domain\_list can also exist which specifies the wildcard `**` which indicates that it should match any domain which matches context\_list or other qualifiers which are not domain specific and should be used before referring to the `*` domain. The LiteSpeed Ingress Controller uses this to specify the unnamed domain.

##### Using context\_list [1](#fn:1)[¶](#using-context_list "Permanent link")

A `context_list` contains a list of `context_name` entries which represent paths to be accepted. Each `context_name` is recognized as a prefix. If a `context_list` is specified then paths specified by users which don't match any of the specified `context_name` prefixes will return `404 Not Found` messages at the load balancer level. This allows you to:

- Limit access to the backends to a very specific set of paths, improving overall performance and security.
- If you specify a `context_list` within an `ip_list` then you have use a single set of domain names for multiple backend applications, potentially on multiple servers for maximum scalability.

This feature is used by the LiteSpeed Ingress Controller and the examples below are from the samples provided with it.

So if you specify a `context_list` after a `domain_list` you get the benefits of performance and security. For example:

Example

```
conf=
{
    "vhost_list" :
    [
    {
        "domain_list": [
            "foo.bar.com"
        ],
        "context_list": [
            {
                "context_name": "/bar/"
            },
            {
                "context_name": "/com/"
            },
            {
                "context_name": "/foo/"
            }
        ],
        "conf_list": [
            {
                "lb_port_list": [
                    80,
                    443
                ],
                "dport": 8080,
                "be_ssl": false,
                "ip_list": [
                    {
                        "ip": "10.244.1.134",
                        "port_list": [
                            8080
                        ]
                    },
                    {
                        "ip": "10.244.1.193",
                        "port_list": [
                            8080
                        ]
                    }
                ]
            }
        ]
    }
    ]
}
```

Within a context\_list, you can have the following optional items, in the order here:

- `exact`: If set to `true` indicates that the context must match exactly (it is not a prefix). The default is `false`.
- `regex`: An optional boolean indicating that the context\_name has a PCRE regular expression in it and that `rewrite_target` is allowed to contain PCRE replacement strings if this is a rewrite.
- `order`: An optional string which will be used if there is an exact match within this list to determine the order of entries.
- `header_list`: A list of `name` and `value` and an optional boolean `regex` entries which indicate the headers to be matched to qualify as a match of this context. If you specify `"regex" : "true"` and this is a redirect, you can have an optional wildcarded replacement string in the value.
- `query_list`: A list of `name` and `value` and an optional boolean `regex` entries which indicate the query strings to be matched to qualify as a match of this context. If you specify `"regex" : "true"` and this is a redirect, you can have an optional wildcarded replacement string in the value.
- `header_list_add`: A list of `name` and `value` entries which will be automatically added to the request header when routed to the backend.
- `header_list_set`: A list of `name` and `value` entries which will be added to the request header (if the `name` is not found) or replaced in the header (if the `name` is found) when routed to the backend.
- `header_list_delete`: A string list of request header names which will be removed if they exist from the header when routed to the backend.
- `rewrite_target`: An optional string, specifies a PCRE wildcard string if regex is on or a non-wildcarded rewrite otherwise. Can also be used for redirects with force\_http\_error and can then support an additional PCRE wildcarded target.
- `rewrite_absolute`: An optional boolean forces the rewrite target to be taken as a fixed (non-prefix) value. Otherwise, pathing is added as for all prefixes. Can be used with rewrite or redirect.
- `rewrite_host`: An optional string, specifies a host name to be used in place of the requested one. Can include a :port if there is to be port redirection as well. Can be used in rewrite or redirect.

In the above example, if the user specified `http://foo.bar.com/bar/page.php` the request would be routed to one of the backends using the `lb_strategy` specified in the [ZCLBALANCERCFG message](#zclbalancercfg-message). If the user specified a path not in the list, like `http://foo.bar.com/page.php` the load balancer would return a 404 message immediately.

If you specify a `context_list` within an `ip_list` you get the additional advantages of multiple backend access by path. For example:

Example

```
conf=
{
    "vhost_list" :
    [
    {
        "domain_list": [
            "bar.baz.com"
        ],
        "conf_list": [
            {
                "lb_port_list": [
                    80,
                    443
                ],
                "dport": 8080,
                "be_ssl": false,
                "ip_list": [
                    {
                        "ip": "10.244.1.134",
                        "port_list": [
                            8080
                        ],
                        "context_list": [
                            {
                                "context_name": "/foo/bar/"
                            },
                            {
                                "context_name": "/fooby/"
                            }
                        ]
                    },
                    {
                        "ip": "10.244.1.193",
                        "port_list": [
                            8080
                        ],
                        "context_list": [
                            {
                                "context_name": "/foo/bar/"
                            },
                            {
                                "context_name": "/fooby/"
                            }
                        ]
                    },
                    {
                        "ip": "10.244.1.162",
                        "port_list": [
                            8080
                        ],
                        "context_list": [
                            {
                                "context_name": "/bar/"
                            },
                            {
                                "context_name": "/bar2/"
                            }
                        ]
                    },
                    {
                        "ip": "10.244.1.162",
                        "port_list": [
                            8080
                        ],
                        "context_list": [
                            {
                                "context_name": "/bar/"
                            },
                            {
                                "context_name": "/bar2/"
                            }
                        ]
                    }
                ]
            }
        ]
    }
    ]
}
```

In the above example:

- If the user specified `http://bar.baz.com/foo/bar/page.php` the request would be routed to one of the backends (either 10.244.1.134 or 10.244.1.193) again using the `lb_strategy` specified in the [ZCLBALANCERCFG message](#zclbalancercfg-message).
- If the user specified `http://bar.baz.com/bar/page.php` the request would be routed to a different set of backends (either 10.244.1.162 or 10.244.1.162).
- If the user specified a path not in the list, like `http://bar.baz.com/page.php` the load balancer would return a 404 message immediately.

##### Using rewrite\_parms [1](#fn:1)[¶](#using-rewrite_parms "Permanent link")

`rewrite_parms` contains a list of rewrite options which can be configured using this mechanism. If `rewrite_parms` is missing then no specific rewrites are done.

The `rewrite_parms` go after `domain_list` and before `context_list` if specified for the whole `domain_list`. If there is no `context_list` at this level, put them before `conf_list`.

All `rewrite_parms` are optional but must be in the following order:

| Parameter | Description | Value | Example |
| --- | --- | --- | --- |
| `"rewrite_target"` | Target URI where the traffic must be redirected. | quoted string | If specified without `"use_regex"`, can be used for example, to take two paths, say `/api/customer/` and `/api/customer/`, and have them routed to the root by specifying rewrite-target `/`. If specified with `"use_regex": true` you can use numbered groups. For example, if you specify the path `/something(/|$)(.*)` and `rewrite-target: /$2` and the request is for `/something/abc` it will match the second group and be routed to `/abc`. |
| `"force_ssl_redirect"` | Forces the redirection to HTTPS even if the Ingress is not TLS Enabled. | `true` or `false` | Regardless of whether or not there is an SSL secret configured, setting to `true` will result in all non-https requests returning a `302 Found`, and redirecting to the same host and location using `https` |
| `"ssl_redirect"` | Indicates if the location section is only accessible via SSL (defaults to `true` when Ingress contains a Certificate). | `true` or `false` | If there is an SSL secret configured, unless set to `false`, all non-https requests will result in a `302 Found`, and redirecting to the same host and location using `https` |
| `"app_root"` | Defines the Application Root that the Controller must redirect if it's in `/` context. | quoted string | `"/subdir"` with a `/` request will result in a 302 redirecting the request to the same host at `/subdir` |
| `"use_regex"` | Indicates if the paths defined on an Ingress use regular expressions. | `true` or `false` | If set to `true`, the paths will be examined for regular expressions. For example if the `"context_name"` is set to `"/foo/\d{5}"`, any requests which are not preceded by `/foo/` and 5 numeric digits will be rejected with a `404 Not Found`. Any requests which match the requirement will be passed as specified to the backend, unless a `"rewrite_target"` is specified. |

Example

```
conf=
{
    "vhost_list" :
    [
    {
        "domain_list": [
            "regex-foo-zip"
        ],
        "rewrite_parms": {
            "ssl_redirect": true,
            "use_regex": true
        },
        "context_list": [
            {
                "context_name": "/foo/\\d{5}/"
            },
            {
                "context_name": "/foo/\\d{5}",
                "exact": true
            }
        ],
        "conf_list": [
            {
                "lb_port_list": [
                    80,
                    443
                ],
                "dport": 8080,
                "be_ssl": false,
                "ip_list": [
                    {
                        "ip": "10.244.1.11",
                        "port_list": [
                            8080
                        ]
                    },
                    {
                        "ip": "10.244.3.108",
                        "port_list": [
                            8080
                        ]
                    }
                ]
            }
        ]
    },
    ]
}
```

In the above example:

- If the user specified `http://regex-foo-zip/foo/11111/page.php` the request would be returned with a `302 Found` and a request to resubmit to `http://regex-foo-zip/foo/11111/page.php` which most browers will do automatically, if there is a SSL certificate specified using the [ZCSSL message](#zcssl-message) for the domain because of the `"ssl_direct": true`. If there was not a certificate available for the domain, then the request is immediately processed (as described next).
- If the user specified `https://regex-foo-zip/foo/11111/page.php` the request would be routed to one of the backends (either 10.244.1.11 or 10.244.3.108) using the `lb_strategy` specified in the [ZCLBALANCERCFG message](#zclbalancercfg-message).
- If the user specified `https://regex-foo-zip/page.php` the request would return `404 Not Found` as all requests to this domain must begin with `/foo/` followed by 5 numeric digits, which is how to read the regular expression above. Regular expressions are described in many places on the internet including: [here](https://en.wikipedia.org/wiki/Regular_expression).

Example

```
conf=
{
    "vhost_list" :
    [
    {
        "domain_list": [
            "regex-two-groups"
        ],
        "rewrite_parms": {
            "rewrite_target": "/$2",
            "ssl_redirect": true,
            "use_regex": true
        },
        "context_list": [
            {
                "context_name": "/something(/|$)(.*)/"
            },
            {
                "context_name": "/something(/|$)(.*)",
                "exact": true
            }
        ],
        "conf_list": [
            {
                "lb_port_list": [
                    80,
                    443
                ],
                "dport": 8080,
                "be_ssl": false,
                "ip_list": [
                    {
                        "ip": "10.244.1.34",
                        "port_list": [
                            8080
                        ]
                    },
                    {
                        "ip": "10.244.2.142",
                        "port_list": [
                            8080
                        ]
                    }
                ]
            }
        ]
    },
    ]
}
```

The above example demonstrates the use of a regular expression and groups:

- If the user specified `https://regex-two-groups/something/page.php` the request would be routed to one of the backends (either 10.244.1.34 or 10.244.2.142) using the `lb_strategy` specified in the [ZCLBALANCERCFG message](#zclbalancercfg-message) using the URI: `/page.php` because it matches the context prefix and group #2 of the regular expression which is `(.*)`, the generic regular expression. Similarly, `https://regex-two-groups/something/dir/dir2/page.php` would be routed to `/dir/dir2/page2.php`.
- If the user specified `http://regex-two-groups/something/page.php` the request would be returned for resubmission to `https://regex-two-groups/something/page.php` if there's an SSL certificate specified for the domain `regex-two-groups` because of the `"ssl_redirect": true`. If there's not a certificate for that domain, then the request is forwarded to the backend.
- If the user specified `https://regex-two-groups/some/page.php` the request would return `404 Not Found` as all requests must begin with `/something`.

#### ZCDOWN Message[¶](#zcdown-message "Permanent link")

`ZCDOWN` informs LiteSpeed Web ADC that a cluster is down and unavailable to support backend traffic.

Message Format:

```
conf={}
```

The sample data above should be in the data file when sending [via the command line](#sending-zeroconf-api-messages). The `API_COMMAND` should be `ZCDOWN`.

#### ZCSSL Message[¶](#zcssl-message "Permanent link")

`ZCSSL` provides SSL data (key, cert and CA bundle) to LiteSpeed Web ADC.

The configuration is a list of SSL configuration objects:

- `domain_list`: The list of domains that will utilize this SSL definition.
- `key`: The SSL Private Key the domains should use. (NOT the file name, but the key itself).
- `cert`: The SSL certificate the domains should use. (NOT the file name, but the cert itself).
- `ca_bundle`: The SSL CA bundle that is associated with the certificate. (NOT the file name, but the CA bundle itself).

TemplateExample

```
conf={
    "ssl_list":
        [
            {
                "domain_list" :
                    [ "example1.com", "example2.com", "example3.com" ],
                "key" : "PRIVATE_KEY",
                "cert" : "CERTIFICATE",
                "ca_bundle" : "CERT_CHAIN"
            }
        ]
}
```

```
conf={
    "ssl_list":
    [
        {
        "domain_list" :
            [ "example1.com", "example2.com", "example3.com" ],
        "key" : "-----BEGIN RSA PRIVATE KEY----- ... ",
        "cert" : "-----BEGIN CERTIFICATE----- ... ",
        "ca_bundle" : "-----BEGIN CERTIFICATE----- ..."
        }
    ]
}
```

The sample data above should be in the data file when sending [via command line](#sending-zeroconf-api-messages). The `API_COMMAND` should be `ZCSSL`.

#### ZCSSLRELEASE Message[¶](#zcsslrelease-message "Permanent link")

`ZCSSLRELEASE` deletes SSL data (key, cert and CA bundle) for specified domains from LiteSpeed Web ADC.

```
conf={
  "ssl_list":
    [
      {
        "domain_list" :
          [ "example1.com", "example2.com", "example3.com" ]
      }
    ]
}
```

The sample data above should be in the data file when sending [via the command line](#sending-zeroconf-api-messages). The `API_COMMAND` should be `ZCSSLRELEASE`.

#### ZCOWNRRELEASE Message[¶](#zcownrrelease-message "Permanent link")

`ZCOWNRRELEASE` relinquishes ownership of any configuration records for specified domains from LiteSpeed Web ADC (i.e., allows specified domains to be owned by a different authorized user, such as when transferring to another provider).

```
conf={
  "domain_list" : [ "example1.com", "example2.com", "example3.com" ]
}
```

The sample data above should be in the data file when sending [via the command line](#sending-zeroconf-api-messages). The `API_COMMAND` should be `ZCOWNRRELEASE`.

#### ZCLBALANCERCFG Message [1](#fn:1)[¶](#zclbalancercfg-message "Permanent link")

`ZCLBALANCERCFG` updates any future load balancer configurations. Thus this should be done when the load balancer starts before any traffic gets there so that load balancer configuration is correct. The configuration is a single object, all items are optional and you must specify them in the positions listed.

- `lb_mode`: A number representing the load balancing mode:
  - 0 = Stateless
  - 1 = Stateful (default)
- `lb_strategy`: A number representing the load balancing strategy:
  - 0 = Least-load
  - 1 = Round-robin (default)
  - 2 = Least-session
  - 3 = Faster-response
  - 4 = Failover (added in 3.1.2)
- `lb_sess_ex_bitmap`: A bit map of all of the fields that can be used in identifying a session. The default is all on (127). As a bitmap, add up all of the values you select.
  - 1: IP address
  - 2: Basic authentication
  - 4: Query string
  - 8: Cookies
  - 16: SSL session
  - 32: JVM route
  - 64: URL path parameter
- `lb_sess_id`: The session ID string used to extract the session ID from the cookie, query string and URL path parameter. Default is `JSESSIONID`
- `lb_sess_timeout`: The number of seconds before a session is timed out. Default is 600.
- `lb_insert_cookie`: Whether a cookie should be inserted.
  - 0 = No (default)
  - 1 = Yes
- `lb_cookie_name`: The name of the cookie to be inserted. If lb\_insert\_cookie=1. Default is “LSLB-Route”.
- `lb_show_backend`: If turned on, there will be a response header added “x-lsadc-backend” title and a value which is a concatenation of the cluster name and the backend IP and port.
  - 0 = Off (default)
  - 1 = On
- `lb_forward_ip_header`: An additional header to be added to all proxy requests made to the backend server. This header will use either the visiting IP or the value set in the ‘X-Forwarded-For’ header as its value, depending on the value set for Use Client IP in Header.
- `lb_forward_by_header`: An additional header to be added to all proxy requests made to the backend server. Typically ‘X-Forwarded-By’
- `lb_ping_interval`: Number of seconds between pings. Defaults to 10. 0 disables pings.
- `lb_ping_smart_factor`: How much to multiply ping-interval by between idle pings. 0 disables (default), 1 uses ping interval, 2 doubles ping interval, etc. A non-zero value detects traffic and suppresses pings if already busy.
- `lb_ping_path`: The ping path to use if pinging. Default ‘/’

An example with all of the defaults would look like this:

```
conf={
    "lb_mode": 1,
    "lb_strategy": 1,
    "lb_sess_ex_bitmap": 127,
    "lb_sess_id" : "JSESSIONID",
    "lb_sess_timeout" : 600,
    "lb_insert_cookie" : 0,
    "lb_cookie_name" : "LSLB-Route",
    "lb_show_backend" : 0,
    "lb_ping_interval": 10,
    "lb_ping_smart_factor": 0,
    "lb_ping_path": "/"
}
```

### API Control Messages[¶](#api-control-messages "Permanent link")

These messages are intended for temporary suspension and subsequent resumption of forwarding traffic to specific backend servers, such as when performing short term maintenance tasks. As noted above, this interface is only provided for API testing, and is slated for full support in an upcoming LiteSpeed Web ADC release.

- `ZCSUSPEND`: Temporarily cease forwarding traffic to backend servers
- `ZCRESUME`: Resume forwarding traffic to backend servers

#### ZCSUSPEND Message[¶](#zcsuspend-message "Permanent link")

LiteSpeed Web ADC will temporarily stop forwarding traffic to successfully suspended backend servers.

Template

```
be_list={
    [
        "IP1:PORT",
        "IP2:PORT",
        "IP3:PORT"
    ]
}
```

=== Example

```
``` JSON
be_list={
    [
    "192.168.1.111:80",
    "192.168.1.111:8080"
    ]
}
```
```

The sample data above should be in the data file when sending [via the command line](#sending-zeroconf-api-messages). The `API_COMMAND` should be `ZCSUSPEND`.

#### ZCRESUME Message[¶](#zcresume-message "Permanent link")

Resume currently suspended backend servers.

TemplateExample

```
be_list={
    [
        "IP1:PORT",
        "IP2:PORT",
        "IP3:PORT"
    ]
}
```

```
be_list={
    [
    "192.168.1.111:80",
    "192.168.1.111:8080"
    ]
}
```

The sample data above should be in the data file when sending [via the command line](#sending-zeroconf-api-messages). The `API_COMMAND` should be `ZCRESUME`.

### API Status Messages[¶](#api-status-messages "Permanent link")

These messages are used to query the current LiteSpeed Web ADC configuration.

- `ZCQUERY`: Look up backend servers for a specific domain / ADC port pair
- `ZCISUSPEND`: Look up whether forwarding traffic to specific backend servers is temporarily suspended

#### ZCQUERY Message[¶](#zcquery-message "Permanent link")

Find the currently mapped backend servers for a specific domain and ADC Listener port.

TemplateExample

```
query="DOMAIN:PORT"
```

```
query="example1.com:80"
```

The sample data above should be in the data file when sending [via the command line](#sending-zeroconf-api-messages). The `API_COMMAND` should be `ZCQUERY`.

Sample Response:

```
_10.10.4.70:80;_10.10.4.71:80;_10.10.4.72:80;_10.10.4.73:80;_10.10.4.74:80;_10.10.4.75:80
```

Note: the `_` (underscore) prefix indicates non-ssl backend destinations. Secure (SSL) destinations are shown with an `s` prefix.

#### ZCISUSPEND Message[¶](#zcisuspend-message "Permanent link")

Check whether specific backend server:port destinations are currently suspended

TemplateExample

```
be_list={
    [
        "IP1:PORT",
        "IP2:PORT",
        "IP3:PORT"
    ]
}
```

```
be_list={
    [
        "192.168.1.111:80",
        "192.168.1.111:8080"
    ]
}
```

The sample data above should be in the data file when sending [via the command line](#sending-zeroconf-api-messages). The `API_COMMAND` should be `ZCISUSPEND`.

Sample response:

```
192.168.2.1:443: Suspended
192.168.2.2:443: Suspended
192.168.2.3:443: Suspended
192.168.2.4:443: Clear
192.168.2.5:443: Suspended
```

---

1. These features are available only within a LiteSpeed Kubernetes Ingress Controller. [↩](#fnref:1 "Jump back to footnote 1 in the text")[↩](#fnref2:1 "Jump back to footnote 1 in the text")[↩](#fnref3:1 "Jump back to footnote 1 in the text")[↩](#fnref4:1 "Jump back to footnote 1 in the text")[↩](#fnref5:1 "Jump back to footnote 1 in the text")[↩](#fnref6:1 "Jump back to footnote 1 in the text")[↩](#fnref7:1 "Jump back to footnote 1 in the text")[↩](#fnref8:1 "Jump back to footnote 1 in the text")[↩](#fnref9:1 "Jump back to footnote 1 in the text")[↩](#fnref10:1 "Jump back to footnote 1 in the text")
