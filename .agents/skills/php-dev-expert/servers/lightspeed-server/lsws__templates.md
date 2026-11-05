# Templates | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/templates/

---

# Virtual Host Templates[¶](#virtual-host-templates "Permanent link")

When you host multiple web sites on one server, you may find that many of them have similar configurations. With LiteSpeed's virtual host template feature, you can create many virtual hosts from one master template and edit one configuration to apply to all.

Virtual host template settings are located in the **Configuration > Virtual Host Templates** tab in the WebAdmin Console.

## Default virtual host templates[¶](#default-virtual-host-templates "Permanent link")

LiteSpeed Web Server comes with three virtual host templates for three common types of virtual hosts:

- `centralConfigLog`: This template is for basic virtual hosts that all use the same server root directories and share a regular system for naming their root directories, document roots, etc. This template is examined in detail in the [**Example**](#example) section below.
- `PHP_SuEXEC`: This template contains a PHP external application set up to run in suEXEC mode. (PHP scripts for these vhosts will be executed as the owner of the virtual host's document root.)
- `EasyRailsWithSuEXEC`: This template is an easy way to set up Ruby on Rails applications. The template contains a context that causes scripts in the virtual host to be run with Ruby (and as the owner of the vhost's document root).

## Making your own templates[¶](#making-your-own-templates "Permanent link")

To create a brand new template, navigate to **WebAdmin cConsole > Configuration > Virtual Host Templates > Add**. You will be asked to fill out basic information for this template. One of the fields will require the location of your template file. If you do not have a template file yet, that is OK. Make up a new file name (located in `$SERVER_ROOT/conf/templates/`) and you will be given the option to have LSWS create the template file.

After adding your template, you do not have to set any more settings. You will most certainly want to, though. Otherwise, what would be the point of making a template?

## Virtual host template settings[¶](#virtual-host-template-settings "Permanent link")

Most of the settings in a virtual host template are comparable to normal virtual host settings. However, if you look around the default templates, you will notice a special variable, `$VH_NAME`. `$VH_NAME` stands for the names of member virtual hosts you will add later. This allows you to create settings that are specific to each member virtual host. For example, the Default Virtual Host Root setting (under the **General** tab), requires that the default virtual host root path have the value `$VH_NAME`. This is so that different member vhosts will have different roots depending on their name. (This is further described in the example below.)

## Adding member virtual hosts[¶](#adding-member-virtual-hosts "Permanent link")

The template is just that: a template. By itself it has no virtual hosts or websites. When you are ready to add virtual hosts with the templates settings, you must add member virtual hosts (**WebAdmin Console > Configuration > Virtual Host Templates > EXAMPLE TEMPLATE > Template > Member Virtual Hosts > Add**). These member virtual hosts will have all the settings of your virtual host template. Anywhere that `$VH_NAME` appears in the template settings the virtual host name of the particular member virtual host will be used.

## Instantiating a member virtual host[¶](#instantiating-a-member-virtual-host "Permanent link")

The Instantiate link (available on the table of member vhosts under the **Template** tab) changes a member virtual host into a regular virtual host. This cuts the connection between this vhost and the template. Further changes in the template will not affect this vhost and changes can be made to this virtual host without affecting other virtual hosts. Instantiating allows you to create vhosts with the basic settings of the template, but with customized settings above and beyond the template settings. You can view and edit your instantiated vhosts in the Virtual Hosts tab (**WebAdmin Console > Configuration > Virtual Hosts**).

## Example[¶](#example "Permanent link")

As an example we will be creating a member vhost named `test` in the `centralConfigLog` template.

[![](../images/templates01.png)](https://docs.litespeedtech.com/lsws/images/templates01.png) In the WebAdmin Console, navigate to **Configuration > Virtual Host Templates** and select `centralConfigLog`.

[![](../images/templates02.png)](https://docs.litespeedtech.com/lsws/images/templates02.png)

Notice in the **General** tab that there are settings where the name you choose for your member vhost will come into play. You will see the `$VH_NAME` variable used in the **Default Virtual Host Root**, **Config File**< and **Document Root** settings.

[![](../images/templates03.png)](https://docs.litespeedtech.com/lsws/images/templates03.png)

Add a new member virtual host by selecting the **Template** tab and clicking **Add** on the **Member Virtual Hosts** table.

[![](../images/templates04.png)](https://docs.litespeedtech.com/lsws/images/templates04.png)

Set **Virtual Host Name** to `test`. This will affect where files for this vhost should be put. Remembering the **General** settings, this new vhost will now have its virtual host root at `$SERVER_ROOT/test`. Its config file will be `$SERVER_ROOT/conf/test`. It's access log (not pictured above) will be `$SERVER_ROOT/logs/test.access.log`. If you are not OK with this, you can set the **Member Virtual Host Root** to something else.

Save your changes and initiate a Graceful Restart.
