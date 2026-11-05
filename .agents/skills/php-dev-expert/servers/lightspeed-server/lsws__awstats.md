# AWStats | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/awstats/

---

# AWStats[¶](#awstats "Permanent link")

AWStats log analyzer can be used as an add-on module for LiteSpeed Web Server. It has been seamlessly integrated into our WebAdmin Console, and the configuration and statistical updates have been automated as well.

## Installation[¶](#installation "Permanent link")

To install AWStats as an add-on module, run the following script:

```
lsws/admin/misc/awstats_install.sh
```

This script will try to download the latest AWStats package from [www.awstats.org](http://www.awstats.org), expand it under the `lsws/add-ons/` directory and create a symbolic link from `./awstats-x.x` to `awstats`. If it fails to download for any reason, you can manually do this step as well.

Next, enable the AWStats add-on module for the desired virtual host. We'll use the `Example` vhost in this example.

From the WebAdmin Console, navigate to **Configuration > Virtual Hosts > Example > Add-on > AWStats Integration**. Set the following:

- **Update Mode**: `Disabled`, `Static` or `Dynamic`.
- **Working Directory**: The directory to be used to save the AWStats configuration and statistical results.
- **AWStats URI**: Where the statistical results can be accessed.
- **Site Domain**: The main domain name of the virtual host.
- **Site Aliases**: All possible add-on domains, aliases and IP addresses.
- **Update Interval**: `Hourly` or `Daily`.
- **Update Offset**: When to start the update during the **Update Interval**, in number of sections.
- **Secured Connection**: `HTTP` or `HTTPS`.
- **Authentication Realm**: Specifies an authorization realm for the statistical results. When specified, only authorized users can view the results.

After applying the configuration changes, you can access the statistical results produced by AWStats by accessing the **AWStats URI** you specified.

Warning

The virtual host has to be configured with its own access log file in order to use AWStats integration.

## Customize AWStats configuration file[¶](#customize-awstats-configuration-file "Permanent link")

The AWStats configuration file is generated automatically based on the model configuration file `/conf/awstats.model.conf`, which is copied from `lsws/add-ons/awstats/wwwroot/cgi-bin/awstats.model.conf`. The following configuration parameters are populated by LiteSpeed:

```
 * LogFile 
 * LogType 
 * LogFormat
 * SiteDomain
 * HostAliases
 * DirData
 * DirConfig 
 * DirIcons
```

Other parameters can be customized by changing `awstats.model.conf`.

Tip

Never edit the destination configuration file as it is always overwritten by LiteSpeed before invoking AWStats updates.
