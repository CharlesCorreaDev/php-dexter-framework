# Install extension · intelliants/subrion Wiki · GitHub

> **Fonte / Source:** https://github.com/intelliants/subrion/wiki/Install-extension

---

**This instructions covers plugin installation process in Subrion CMS 4.1**

Starting from 3.0 version Subrion CMS has the *Remote Plugin Installation* feature. It allows to install any available plugin in seconds.

There are several steps you need to perform to install any extension:

1. Log into the Subrion Admin Dashboard
2. go to Extensions -> Plugins
3. choose the needed plugin and click on `Install` button

Please note you cannot see Install button for remote plugins, so you need to download them and once they are downloaded you can perform installation.

You can also install any plugin for the Subrion CMS via **Local plugins installation** method.

#### Upload files

1. Download plugin from <https://subrion.org/plugins/>
2. Unpack it using any packager that supports ZIP archives
3. Rename the folder with plugin files from `plugin_name_plugin_version` to `plugin_name`. *Example*: rename **privatemessages\_3.2.0** folder to **privatemessages** folder.
4. Upload `plugin_name` directory to your subrion directory `../modules/` folder.

#### Admin Dashboard installation

1. Login to your Subrion Admin Dashboard
2. Go to Extensions -> Plugins
3. find uploaded plugin and click on `Install` button.

> **NOTE** If you want to install premium paid plugins then you will not find them in the appeared list of plugins. You need to install Premium Radius Search plugin by using 'Local plugins installation' method.

Some plugins require more actions for the correct installation. Read Installation information in the docs section for each plugin.
