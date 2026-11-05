# Multisite Networks | LSCache for WordPress | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscwp/multisite/

---

# Multisite Networks[¶](#multisite-networks "Permanent link")

A WordPress multisite network is a collection of WordPress sites that share a single WordPress installation. Each of these sites is called a "subsite."

This is different than simply having multiple independent WordPress sites on your server. In a multisite network, a single admin has the ability to control all of the subsites, and all of the subsites share the same plugins and themes.

To learn more about WordPress multisite networks, please see [the WordPress tutorial](https://learn.wordpress.org/tutorial/introduction-to-wordpress-multisite-networks/).

## Network Admin[¶](#network-admin "Permanent link")

In a WordPress multisite installationimages/multisite\_board has a **My Sites** dropdown on the Admin Bar. The first in the dropdown list is **Network Admin** followed by a list of each of the sites in the network.

Multisite networks share a common `.htaccess` file, which means that any LiteSpeed Cache options that change `.htaccess` must apply to the whole network. These options have been relocated to the **Network Admin** area.

Some other LiteSpeed Cache options will be found only in the **Network Admin** section. This allows for easier setup, and for all of the network subsites to share a common configuration that is maintained at the top level.

All of the LiteSpeed Cache settings listed below can be found at the network level. Anything not listed here is accessible through the network's subsites.

Tip

Any setting you change at the network level will apply to *all subsites*.

### Dashboard[¶](#dashboard "Permanent link")

[![](../images/multisite01.png)](https://docs.litespeedtech.com/lscache/lscwp/images/multisite01.png)

This area provides a network-level view of the QUIC.cloud usage for all of the subsites in the network. Each site is listed separately. Subsites have their own versions of this section.

See the non-multisite documentation to [learn more about the **Dashboard** view](lscache__lscwp__dashboard.md).

### General[¶](#general "Permanent link")

[![](../images/multisite02.png)](https://docs.litespeedtech.com/lscache/lscwp/images/multisite02.png)

These settings are only at the network level and are not available to subsites:

- **Automatically Upgrade**
- **Use Primary Site Configuration**: This option uses the network's primary site as a template to easily apply settings throughout the entire network. It will overwrite the subsites' configurations with the network-level configuration.
- **Guest Mode**

See the non-multisite documentation to [learn more about the **General** options](lscache__lscwp__general.md).

### Cache[¶](#cache "Permanent link")

#### Cache Tab[¶](#cache-tab "Permanent link")

[![](../images/multisite03.png)](https://docs.litespeedtech.com/lscache/lscwp/images/multisite03.png)

These settings are only at the network level and are not available to subsites:

- **Network Enable Cache**: This setting enables caching by default on all subsites in the network. Subsites can choose to turn caching `ON` or `OFF`, or they can choose to abide by the **Network Enable Cache** setting by choosing `Use Network Admin Setting`.
- **Cache PHP Resources**
- **Cache Mobile**
- **List of Mobile User Agents**
- **Drop Query String**

See the non-multisite documentation to [learn more about the **Cache Tab** options](lscache__lscwp__cache.md).

#### Purge Tab[¶](#purge-tab "Permanent link")

[![](../images/multisite07.png)](https://docs.litespeedtech.com/lscache/lscwp/images/multisite07.png)

This setting is only at the network level and is not available to subsites:

- **Purge All On Upgrade**

See the non-multisite documentation to [learn more about the **Purge Tab** options](lscache__lscwp__cache.md#purge-tab).

#### Excludes[¶](#excludes "Permanent link")

[![](../images/multisite08.png)](https://docs.litespeedtech.com/lscache/lscwp/images/multisite08.png)

These settings are only at the network level and are not available to subsites:

- **Do Not Cache Cookies**
- **Do Not Cache User Agents**

See the non-multisite documentation to [learn more about the **Excludes Tab** options](lscache__lscwp__cache.md#excludes-tab).

#### Object Tab[¶](#object-tab "Permanent link")

[![](../images/multisite09.png)](https://docs.litespeedtech.com/lscache/lscwp/images/multisite09.png)

This entire tab exists only at the network level and is not available to subsites.

For explanations of all of the settings, please see [the **Object Tab** documentation](lscache__lscwp__cache.md#object-tab) for non-multisite networks.

#### Browser Tab[¶](#browser-tab "Permanent link")

[![](../images/multisite10.png)](https://docs.litespeedtech.com/lscache/lscwp/images/multisite10.png)

This entire tab exists only at the network level and is not available to subsites.

For explanations of all of the settings, please see [the **Browser Tab** documentation](lscache__lscwp__cache.md#browser-tab) for non-multisite networks.

#### Advanced Tab[¶](#advanced-tab "Permanent link")

[![](../images/multisite11.png)](https://docs.litespeedtech.com/lscache/lscwp/images/multisite11.png)

These settings are only at the network level and are not available to subsites:

- **Login Cookie**
- **Vary Cookies**

See the non-multisite documentation to [learn more about the **Advanced Tab** options](lscache__lscwp__cache.md#advanced-tab).

### Image Optimization[¶](#image-optimization "Permanent link")

#### Image Optimization Settings Tab[¶](#image-optimization-settings-tab "Permanent link")

[![](../images/multisite04.png)](https://docs.litespeedtech.com/lscache/lscwp/images/multisite04.png)

This setting is only at the network level and is not available to subsites:

- **Next-Gen Image Format**

See the non-multisite documentation to [learn more about the **Image Optimization Settings Tab** options](lscache__lscwp__imageopt.md#image-optimization-settings-tab).

### Database[¶](#database "Permanent link")

[![](../images/multisite05.png)](https://docs.litespeedtech.com/lscache/lscwp/images/multisite05.png)

The **Database** tools are available both at the network level and the subsite level. When executed at the network level, the optimizations will apply to all subsites in the network. When executed at the subsite level the optimizations will only apply to that subsite.

For explanations of all of the optimizations, please see [the **Database** documentation](lscache__lscwp__database.md) for non-multisite networks.

### Toolbox[¶](#toolbox "Permanent link")

#### Purge Tab[¶](#purge-tab_1 "Permanent link")

[![](../images/multisite06.png)](https://docs.litespeedtech.com/lscache/lscwp/images/multisite06.png)

Most of the **Purge** tools are available both at the network level and the subsite level. When executed at the network level, the purges will apply to all subsites in the network. When executed at the subsite level the purges will only apply to that subsite.

This setting is only at the network level and is not available to subsites:

- **Empty Entire Cache**

For explanations of all of the purges, please see [the **Purge Tab** documentation](lscache__lscwp__toolbox.md#purge-tab) for non-multisite networks.

Tip

The same purge options can be found on the Admin Bar, and the same rules apply as to the scope of these tools.

#### View .htaccess tab[¶](#view-htaccess-tab "Permanent link")

[![](../images/multisite12.png)](https://docs.litespeedtech.com/lscache/lscwp/images/multisite12.png)

This entire tab exists only at the network level and is not available to subsites.

For explanations of all of the elements, please see [the **View .htaccess Tab** documentation](lscache__lscwp__toolbox.md#view-htaccess-tab) for non-multisite networks.

#### Debug Settings tab[¶](#debug-settings-tab "Permanent link")

[![](../images/multisite13.png)](https://docs.litespeedtech.com/lscache/lscwp/images/multisite13.png)

This entire tab exists only at the network level and is not available to subsites.

For explanations of all of the settings, please see [the **Debug Settings Tab** documentation](lscache__lscwp__toolbox.md#debug-settings-tab) for non-multisite networks.

#### Log View Tab[¶](#log-view-tab "Permanent link")

[![](../images/multisite14.png)](https://docs.litespeedtech.com/lscache/lscwp/images/multisite14.png)

This entire tab exists only at the network level and is not available to subsites.

For explanations of all of the buttons, please see [the **Log View Tab** documentation](lscache__lscwp__toolbox.md#log-view-tab) for non-multisite networks.

#### Beta Test Tab[¶](#beta-test-tab "Permanent link")

[![](../images/multisite15.png)](https://docs.litespeedtech.com/lscache/lscwp/images/multisite15.png)

This entire tab exists only at the network level and is not available to subsites.

For explanations of all of the options, please see [the **Beta Test Tab** documentation](lscache__lscwp__toolbox.md#beta-test-tab) for non-multisite networks.
