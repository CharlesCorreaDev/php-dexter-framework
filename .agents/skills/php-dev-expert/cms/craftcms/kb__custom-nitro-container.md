# Adding a Custom Nitro Container | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/custom-nitro-container

---

Search Knowledge Base

# Adding a Custom Nitro Container

![](https://craftcms.com/dist/images/icon-tip.svg)

Nitro is no longer supported. Please see our [announcement](https://craftcms.com/blog/retiring-craft-nitro) and [DDEV migration guide](kb__migrating-from-craft-nitro-to-ddev.md).

Nitro includes `container` commands you can use to [add Docker containers](https://craftcms.com/docs/nitro/2.x/containers.html) to your development environment. In this article we’ll use them to add a [phpMyAdmin](https://www.phpmyadmin.net) container for managing MySQL databases.

phpMyAdmin is a popular, open source MySQL GUI written in PHP. If you don’t have a favorite GUI client like [TablePlus](https://tableplus.com) but would still like a graphical interface for managing your MySQL databases, you can add a local phpMyAdmin container to do just that.

We’ll assume you’ve already [installed Nitro](https://craftcms.com/docs/nitro/2.x/installation.html).

## Adding a Container [#](#adding-a-container "Direct link to Adding a Container")

Let’s add and configure the container so we can use it.

### 1. Create the Container [#](#1-create-the-container "Direct link to 1. Create the Container")

First, run `nitro container new` and follow the prompts.

```
$ nitro container new
What image are you trying to add? phpmyadmin
Which image should we use?
  1. phpmyadmin
  2. phpmyadmin/phpmyadmin
  3. bitnami/phpmyadmin
  4. nazarpc/phpmyadmin
  5. jackgruber/phpmyadmin
  6. rkcreation/phpmyadmin
  7. silintl/phpmyadmin
  8. drud/phpmyadmin
  9. maxexcloo/phpmyadmin
  10. sk278/phpmyadmin-armhf
Enter your selection: 1
What tag should we use [latest]?
  … downloading docker.io/library/phpmyadmin:latest
Expose port `1024` on host [Y/n]? Y
Does the image contain a web-based UI [Y/n]? Y
What is the name of the container [phpmyadmin]?
Create a file to add environment variables [Y/n]? Y
Created environment variables file at "/Users/oli/.nitro/.phpmyadmin".
New container "phpmyadmin.containers.nitro" added! 🐳
Apply changes now [Y/n]? Y
# ...
```

Nitro will update its configuration and apply the changes to create your new container. You’ll see it in Docker Desktop:

![](https://craftcms.com/dist/images/icon-loading.png)

![Docker phpMyAdmin Container]()

We can now visit <https://phpmyadmin.containers.nitro/> in a browser to use the phpMyAdmin interface, but we’ll get an error trying to log in because we need to configure the MySQL connection:

![](https://craftcms.com/dist/images/icon-loading.png)

![phpMyAdmin Login Failure]()

### 2. Configure the Container [#](#2-configure-the-container "Direct link to 2. Configure the Container")

Because Nitro’s MySQL database runs in a container that’s separate from the one we just added, we’ll need to let phpMyAdmin know where to find it.

The [phpMyAdmin Docker documentation](https://hub.docker.com/_/phpmyadmin?tab=description) says to use a `PMA_HOST` environment variable to specify an external server.

We can add whatever environment variables we want in a file Nitro created along with the new custom container: `~/.nitro/.phpmyadmin`.

Edit `~/.nitro/.phpmyadmin` and add this line, replacing the hostname with your actual Nitro MySQL hostname if it differs:

```
PMA_HOST=mysql-8.0-3306.database.nitro
```

![](https://craftcms.com/dist/images/icon-tip.svg)

If you’re not sure what container name to use, run `nitro ls` to see all Nitro’s containers and pick one that starts with `mysql-`.

### 3. Rebuild to Apply Configuration [#](#3-rebuild-to-apply-configuration "Direct link to 3. Rebuild to Apply Configuration")

The last thing we need to do is rebuild that custom container so it uses this environment variable.

First, delete the `phpmyadmin.containers.nitro` container.

![](https://craftcms.com/dist/images/icon-loading.png)

![Docker phpMyAdmin Container Delete Button]()

From Docker Desktop’s **Containers / Apps** list, choose the trash icon to the right of the phpMyAdmin container name.

Once you’ve deleted the container, run `nitro apply`.

Nitro will apply its changes and rebuild the container using the environment variable you set above. Once the new container is running, you can inspect it in Docker Desktop to confirm your newly-added environment variable was included:

![](https://craftcms.com/dist/images/icon-loading.png)

![phpMyAdmin Custom Environment Variable]()

The username and password are always `nitro` / `nitro`, so you can now log in at <https://phpmyadmin.containers.nitro/> and get at those databases.

![](https://craftcms.com/dist/images/icon-loading.png)

![phpMyAdmin Interface]()

## Removing the Container [#](#removing-the-container "Direct link to Removing the Container")

If you added this container just to follow along and don’t plan on using it, you’ll probably want to remove it.

Run `nitro container remove`, then choose/accept `Y`.

![](https://craftcms.com/dist/images/icon-tip.svg)

You’ll be prompted to select a container if you’ve added more than one.

Nitro will update its configuration, delete the running container, and delete the `~/.nitro/.phpmyadmin` file and it will seem like none of this ever happened.

Applies to
Craft Nitro 2.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
