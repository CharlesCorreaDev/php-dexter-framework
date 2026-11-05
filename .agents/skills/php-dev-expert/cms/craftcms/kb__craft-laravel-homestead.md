# Running Craft on Laravel Homestead | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/craft-laravel-homestead

---

Search Knowledge Base

# Running Craft on Laravel Homestead

![](https://craftcms.com/dist/images/icon-tip.svg)

Our recommended development environment is [DDEV](https://craftcms.com/docs/5.x/install), but this guide is provided as an on-ramp for anyone coming from the Laravel ecosystem, wishing to explore Craft in a familiar space.

In this article, we’ll walk through setup using [Laravel Homestead](https://laravel.com/docs/12.x/homestead), a tool for managing your local development environment on macOS, Windows, and Linux.

## Why Homestead? [#](#why-homestead "Direct link to Why Homestead?")

Homestead provides a great local development environment:

- it’s free, available on multiple platforms, and straightforward to install;
- it runs its included software inside a virtual environment, which can be updated, rebuilt or destroyed without affecting your system;
- it’s highly configurable and well documented;
- it can run multiple projects on one or several machines;

Homestead provisions [Vagrant](https://www.vagrantup.com/) boxes based on several virtualization providers that do the lower-level work of emulating hardware, on which Vagrant and Homestead manage software.

## Step 1: Install a virtualization provider [#](#step-1-install-a-virtualization-provider "Direct link to Step 1: Install a virtualization provider")

Whatever system you’re on, you’ll need to choose a package and run its installer.

- [VirtualBox](https://www.virtualbox.org/wiki/Downloads) is a great free option, whatever OS you’re on.
- [VMWare](https://www.vmware.com/products/personal-desktop-virtualization.html) and [Parallels](https://www.parallels.com/) are commercial options that offer better performance. (To use Parallels for this setup you’ll need the [Pro or Business edition](https://parallels.github.io/vagrant-parallels/)!) With either of these, you’ll also need to [install a Vagrant plugin](https://laravel.com/docs/12.x/homestead#first-steps).
- [Hyper-V](https://docs.microsoft.com/en-us/virtualization/hyper-v-on-windows/quick-start/enable-hyper-v) can be enabled and used in Windows 10 Enterprise, Pro, or Education editions.

## Step 2: Install Vagrant [#](#step-2-install-vagrant "Direct link to Step 2: Install Vagrant")

Once you’ve installed a provider, you’ll need to [download and install Vagrant](https://www.vagrantup.com/downloads.html) for your operating system.

## Step 3: Install the Homestead machine [#](#step-3-install-the-homestead-machine "Direct link to Step 3: Install the Homestead machine")

Now we’ll install the virtual machine Homestead uses to power your local development projects.

Run the following command in your terminal:

```
vagrant box add laravel/homestead
```

## Step 4: Install Homestead [#](#step-4-install-homestead "Direct link to Step 4: Install Homestead")

Next we’ll add configuration files to a project folder for controlling how Homestead creates environments for our web projects to use.

First, use git to clone a copy of the Homestead repository. If you don’t have git installed, you can alternatively [visit the Homestead repository](https://github.com/laravel/homestead), choose “Clone or download” and “Download ZIP”, then extract the contents of the archive to the `~/Homestead` directory.

```
git clone https://github.com/laravel/homestead.git ~/Homestead
cd ~/Homestead
git checkout release
```

Once those files are established, run the setup script from that directory:

```
# Mac / Linux...
bash init.sh

# Windows...
init.bat
```

![](https://craftcms.com/dist/images/icon-tip.svg)

You may also need to run `chmod +x init.sh` on macOS or Linux in order to execute the setup script.

This will create a configuration file named `Homestead.yaml`.

## Step 5: Configure Homestead [#](#step-5-configure-homestead "Direct link to Step 5: Configure Homestead")

Open `Homestead.yaml` in your code editor to customize it.

### Set your provider [#](#set-your-provider "Direct link to Set your provider")

```
provider: virtualbox
```

If you didn’t install VirtualBox, this should be set to whichever is relevant: `vmware_fusion`, `vmware_workstation`, `parallels`, or `hyperv`.

### Configure shared folders [#](#configure-shared-folders "Direct link to Configure shared folders")

The `folders` property lists the directories that should be available to your Homestead machine. Each line will map a folder on your computer to a location inside `/home/vagrant` on the virtual machine.

```
folders:
  - map: ~/projects/my-project
    to: /home/vagrant/my-project
```

![](https://craftcms.com/dist/images/icon-warning.svg)

The `~/` syntax does not work on Windows. Use the full path instead, like `C:\Users\oli\projects\my-project`.

You can add a folder for each new project and have as many as you’d like:

```
folders:
  - map: ~/projects/my-project
    to: /home/vagrant/my-project
  - map: ~/projects/my-other-project
    to: /home/vagrant/my-other-project
```

### Add a site [#](#add-a-site "Direct link to Add a site")

Now we’ll tell Homestead to map a hostname to Craft’s web root.

If you’ve not [installed Craft CMS yet](https://craftcms.com/docs/5.x/install.html), that’s okay. You can either point to the directory to be created, or come back to this step after installation.

```
sites:
  - map: my-project.test
    to: /home/vagrant/my-project/web
```

If you’re updating `sites` later and need your changes to be applied, run `vagrant reload --provision`.

### Add the hostname [#](#add-the-hostname "Direct link to Add the hostname")

To have your special host name work locally, you’ll need to make a quick edit to `/etc/hosts` so your local machine knows to route that special domain to your computer instead of the internet.

On macOS and Linux, you’ll need to open `/etc/hosts` in your code editor. On Windows, it may be at `C:\Windows\System32\drivers\etc\hosts\`.

Don’t edit anything else in that file, just add the following and save the file:

```
192.168.10.10 my-project.test
```

Make sure the IP address listed matches the one in your `Homestead.yaml` file.

### Launch the Vagrant box [#](#launch-the-vagrant-box "Direct link to Launch the Vagrant box")

From your Homestead directory, run `vagrant up`. The virtual machine will be brought to life.

If Craft is installed, you should be able to visit `my-project.test` in your browser and see your Craft site.

Applies to
Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
