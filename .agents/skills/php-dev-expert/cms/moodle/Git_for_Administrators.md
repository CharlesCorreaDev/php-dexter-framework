# Git for Administrators - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Git_for_Administrators

---

# Git for Administrators

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Installation](Installation.md "Installation") ► Git for Administrators

[Installation](Installation.md "Installation")

- [Installing Moodle](Installing_Moodle.md "Installing Moodle")
- [Installation quick guide](Installation_quick_guide.md "Installation quick guide")
- [Cron](Cron.md "Cron")
- [Nginx](Nginx.md "Nginx")
- [Apache](Apache.md "Apache")
- [IIS](Internet_Information_Services.md "Internet Information Services")
- [Routing](Configuring_the_Router.md "Configuring the Router")
- [Installing plugins](Installing_plugins.md "Installing plugins")
- [Installation FAQ](Installation_FAQ.md "Installation FAQ")
- [Upgrading](Upgrading.md "Upgrading")
- [Upgrade overview](Upgrade_overview.md "Upgrade overview")
- [Automatic updates deployment](Automatic_updates_deployment.md "Automatic updates deployment")
- Git guide
- [Administration via command line](Administration_via_command_line.md "Administration via command line")
- [Upgrading FAQ](Upgrading_FAQ.md "Upgrading FAQ")
- [Moodle migration](Moodle_migration.md "Moodle migration")

This page describes how to maintain a copy of Moodle on your production server which can easily be upgraded using Git. If you have customisations of Moodle core code, you are advised to follow the instructions in the [Git for developers guide](https://docs.moodle.org/dev/Git_for_developers "dev:Git for developers").

To get the most of Git it is worth making the effort to understand its basic concepts - see the section below. It may be a bit of a steep learning curve if you are used to other version control systems, but it is worth it.

## Getting hold of Git (Windows, OSX, Linux and others)

For information on how to download and install Git, see <https://git-scm.com/download>.

Once you have downloaded and installed your OS relevant git installation, the git commands in this document should work with your operating system.

## Moodle branch names

Each release of Moodle has:

- a git *tag*, which is the version number of the release, prefixed with the letter `v` (for example, `v5.1.0`), and
- a *git branch*, for example `MOODLE_503_STABLE` for the lifetime of that major release.

Git tags are used to identify specific releases of Moodle and are the source of the official releases, the downloadable zip files, tar files, and so on.

We recommend that production Moodle sites always use an officially released version using the git tag, for example `v5.1.0`, or `v5.0.4`.

Whilst you *can* use the branch for each major version, that is `MOODLE_503_STABLE` for the 5.3 major version, it is generally not advised. Whilst new features and improvements are normally only made to the `main` development branch, the major version branches will get weekly updates which may not be suited to production environments.

**Note**: The word `STABLE` in the branch name is intended to indicate that the branch is for a *released* version of Moodle.

**Important**: You should not use alpha, beta, release-candidates, or code from the `main` branch for production sites. It could have significant bugs.

## Obtaining the code from Git

The command line version of Git is discussed here. In most cases you will find that Graphical clients provide the same functionality and will use similar naming for the terminology. Please refer to the documentation for that client for more information.

You can find the official Moodle git repository at <git://git.moodle.org/moodle.git> (with an official clone at <https://github.com/moodle/moodle.git>). To initialize your local checkout, use

```
$ git clone -b v{{Version}}.0 https://github.com/moodle/moodle.git /path/to/your/moodle/storage/area
```

- The `-b v5.3.0` option tells git to checkout the branch or tag `v5.3.0` after the clone is complete. If you omit this option, git will checkout the default branch, which is `main`.

- The last argument is the path to the directory where you want to store your Moodle installation.

You may want to consider creating your own branch for your production site - see the section below.

**Important**: From Moodle 5.1 onwards you should ***not*** place your git checkout in a web-accessible location. Instead you should either:

- configure your web server to point to the `public` subdirectory of your Moodle installation; or
- use a technique such as symlinking to place the `public` directory into your web root.

**Composer**: After you clone the code, you can install the Composer dependencies by running `composer install --no-dev --classmap-authoritative` from the Moodle root directory. Composer is optional in Moodle 5.3, except for new features such as OAuth 2 Server. See [Installing Moodle#Install Composer dependencies](Installing_Moodle.md#Install_Composer_dependencies "Installing Moodle").

## Updating your Moodle Release

In most cases these instructions will be very similar whether you are upgrading between major releases (for example, from 5.2 to 5.3), or updating to a newer minor release (for example, from 5.3.0 to 5.3.1).

**Important**: Always ensure you have a full backup of your Moodle site (both code and database) before performing any upgrade or update.

**Important**: If your Moodle root directory has a `vendor/` directory, run `composer install --no-dev --classmap-authoritative` from the Moodle root directory every time you update the code, before you run the upgrade. See [Update Composer dependencies](Upgrading.md#Update_Composer_dependencies "Upgrading").

If you have any customisations to Moodle core code, you should follow the instructions in the [Git for developers guide](https://docs.moodle.org/dev/Git_for_developers "dev:Git for developers") instead.

If you have any custom plugins installed, you should ensure that they are compatible with the version of Moodle you are upgrading to. You may need to update these plugins separately.

### Checking what version you are currently using

To check which version of Moodle you are currently using, you can use the commands below:

```
# If you are following a major release branch:
git branch

# If you are using a git tag and are on Moodle 5.1 or later:
git log --oneline -1 public/version.php

# If you are using a git tag and are on Moodle 5.0 or earlier:
git log --oneline -1 version.php
```

If you are tracking a git tag, you should see something like this:

```
➜  examplesite git:(eb47eff071) git log --oneline -1 public/version.php
eb47eff071 (HEAD, tag: v5.1.0) Moodle release 5.1
```

### Updating your installation with minor releases

To update your Moodle installation to the latest minor release of your currently installed major release, you simply need to fetch the latest changes from the Moodle git repository, and then check out the appropriate branch or tag.

#### Upgrading a minor release: If you are using a git tag

To switch to the latest minor release of your currently installed major release, you can use the commands below (replace `v5.3.x` with the appropriate tag for your intended release):

```
cd /path/to/your/moodle
git fetch origin
git checkout v{{Version}}.x
```

#### Upgrading a minor release: If you are using a major release branch

```
cd /path/to/your/moodle
git fetch origin
git rebase origin/MOODLE_{{Version2}}_STABLE
```

If this is a production site you should still consider the [Upgrade](Upgrade.md "Upgrade") instructions (including taking backups).

### Upgrading to a newer major release

When you want to upgrade to a newer major release, you will need to tell your git installation to track the newer release instead of the release that you currently have installed and are tracking.

You should ensure that you have updated your installation with the latest minor release of your currently installed Moodle version first (as described in the section above). This will also download the changes for newer Moodle versions (but not yet make use of them).

You should put your site into maintenance mode, or disable the website, before starting the upgrade.

#### Upgrading to a new major release: If you are using a git tag

To switch to a newer major release using git tags, you can use the commands below (replace `v5.3.0` with the appropriate tag for your intended release):

```
cd /path/to/your/moodle/folder

git fetch origin
git checkout v{{Version}}.0
```

#### Upgrading to a major release: If you are using a git branch

To switch to a newer major release using git branches, you can use the commands below (replace `MOODLE_503_STABLE` with the appropriate branch for your intended release):

```
cd /path/to/your/moodle/folder

# Make a local branch for the newer release from the remote repo
git checkout -b MOODLE_{{Version2}}_STABLE origin/MOODLE_{{Version2}}_STABLE
```

Your website folder now includes the files for the newer Moodle version, but to complete the Moodle upgrade, you will either need to [complete the upgrade via the web browser](Upgrading.md "Upgrading"), or [use the command line upgrade script](Administration_via_command_line.md "Administration via command line").

### Remember to move your plugins too!

If upgrading from Moodle 5.0 or earlier to Moodle 5.1 or later, you will also need to move any plugins you have installed into their new locations under the `/public` subdirectory. This is *not* done automatically when you checkout the new Moodle 5.1 code.

## Installing Moodle plugins

### Installing a Moodle plugin from its Git repository

This is one way to handle adding plugins from other Git repositories into your Moodle repository.

For example, let us say we want to install the [Certificate module](Certificate_module.md "Certificate module") from its Git repository into our Moodle 5.3.

After finding the location of the code for your desired plugin (in this case, `https://github.com/markn86/moodle-mod_certificate.git`), you can use the following commands:

```
$ cd /path/to/your/moodle/
$ git clone https://github.com/markn86/moodle-mod_certificate.git public/mod/certificate
```

This will create a new directory `public/mod/certificate/` within your Moodle installation and populate it with the code from the plugin's Git repository.

If you check the status of your Moodle repository now, you will see that Git is reporting an untracked directory:

```
$ git status
HEAD detached at v5.1.0
Untracked files:
  (use "git add <file>..." to include in what will be committed)
	public/mod/certificate/

nothing added to commit but untracked files present (use "git add" to track)
```

You can stop the warning about the untracked directory by adding it to your Git ignore list:

```
$ echo /public/mod/certificate/ >> .git/info/exclude
```

#### Updating plugins installed from Git repositories

To fetch updates for the plugin, you need to go into the plugin directory and fetch the changes from upstream:

To update your Moodle installation now, you must visit both Git repositories and pull changes from upstream.

```
$ cd /path/to/your/moodle/
$ cd mod/certificate
$ git fetch origin
$ git rebase
```

Writing a shell script with these lines in the root of Moodle installation is a very good idea. Otherwise it is easy to forget what Git repositories are there within the main Moodle repository.

### Installing and maintaining contributed extensions using Git submodules

Git submodules are a great way to maintain external Git repositories within your main Moodle repository, but they are a more advanced Git concept.

A step-by-step explanation will be provided, but in order to follow these steps it is helpful to understand, what these commands do.

Advanced options and commands can be found at [Git book](https://git-scm.com/book/en/v2/Git-Tools-Submodules%7Cthe).

If you have any questions about Git submodules, please visit the site above first.

#### Installing a new extension into an existing Moodle

As an example we use the [Certificate module](Certificate_module.md "Certificate module") from the previous section.

```
$ cd /path/to/your/moodle
$ git submodule add https://github.com/markn86/moodle-mod_certificate.git public/mod/certificate
```

Note, that Git is reporting two new files in the repository:

```
$ git status
# On branch MOODLE_500_STABLE
# Changes to be committed:
#   (use "git reset HEAD <file>..." to unstage)
#
#	new file:   .gitmodules
#	new file:   mod/certificate
#
```

The file `.gitmodules` contains the local path and url of all your submodules.

It has to be committed, if you intend to clone the repository later (see the page [Moodle development environment with Git submodules](Moodle_development_environment_with_Git_submodules.md "Moodle development environment with Git submodules")).

Before committing, make sure to check the configuration of the plugin's Git repository, since the automatically generated settings may be not sufficient.

For future updates it is helpful, to track the remote branch, which corresponds to the Moodle version of your repository.

```
$ cd mod/certificate
$ git branch -avv
* main                            345f5b1 [origin/main] Replaced deprecated function
  remotes/origin/HEAD             -> origin/main
  remotes/origin/MOODLE_20_STABLE 1aa1040 Added option to print 'grade category' grade
  remotes/origin/MOODLE_21_STABLE 1aa1040 Added option to print 'grade category' grade
  remotes/origin/MOODLE_22_STABLE 1aa1040 Added option to print 'grade category' grade
  remotes/origin/MOODLE_23_STABLE fe047de Check that the function exists rather than relying on the Moodle version
  remotes/origin/MOODLE_24_STABLE 1051f7d CONTRIB-4892 Fixed the email to others functionality
  remotes/origin/MOODLE_25_STABLE cdb221a CONTRIB-4946: Removed character from language file breaking AMOS
  remotes/origin/MOODLE_26_STABLE 696802a Increased version
  remotes/origin/MOODLE_27_STABLE d3c0379 Increased version
  remotes/origin/MOODLE_28_STABLE fa8df83 Increased version
  remotes/origin/MOODLE_29_STABLE 3f03740 Replaced deprecated function
  remotes/origin/main             345f5b1 Replaced deprecated function
```

Git created the branch **main** which tracks **origin/main** automatically, because the remote repository has checked out **main**.
Therefore, create a new branch, which tracks the appropriate remote branch.
Of course, this is only possible, if the remote repository offers those branches.

```
$ git checkout -b MOODLE_29_STABLE origin/MOODLE_29_STABLE
Branch MOODLE_29_STABLE set up to track remote branch MOODLE_29_STABLE from origin.
Switched to a new branch 'MOODLE_29_STABLE'
$ git branch -D main
Deleted branch main (was 345f5b1).
```

It is not necessary to delete the **main** branch, but it's useless to keep it.
In fact, these settings don't need to be touched afterwards.

The final step is to commit the changes to the main repository.

```
$ cd /path/to/your/moodle
$ git commit -a -m "New extension mod_certificate installed"
```

It has to be ensured, that the commit includes only the changes for the new Git submodule (since **-a** commits all non-staged changes).

#### Maintaining Git submodules

Maintaining a set of submodules is extremely easy.
Consider a Moodle repository with several submodules installed.
Keep in mind, that the extension **mod\_mylittleextension** is a fake plugin, created for a test scenario in this example.
It is not an official Moodle module. For updating all your submodules at once, type in:

```
$ cd /path/to/your/moodle
$ git submodule foreach git pull
Entering 'block/coursefeedback'
Already up-to-date.
Entering 'mod/certificate'
Already up-to-date.
Entering 'mod/mylittleextension'
remote: Counting objects: 6, done.
remote: Compressing objects: 100% (4/4), done.
remote: Total 4 (delta 0), reused 0 (delta 0)
Unpacking objects: 100% (4/4), done.
From /local/repositories/mle
   89d9eae..64c122d  main     -> origin/main
Updating 89d9eae..64c122d
Fast-forward
 index.html  |    9 +++++++++
 version.php |    6 +++---
 2 files changed, 12 insertions(+), 3 deletions(-)
 create mode 100644 index.html
$ git status
# On branch MOODLE_29_STABLE
# Changes not staged for commit:
#   (use "git add <file>..." to update what will be committed)
#   (use "git checkout -- <file>..." to discard changes in working directory)
#
#	modified:   mod/mylittleextension (new commits)
#
```

The command **git submodule foreach [another command]** walks through all submodule repositories and executes what is specified by **[another command]**.
In this case it is **git pull**.
Therefore, the module mylittleextension was updated and the main repository isn't clean anymore until changes are committed:

```
$ git commit -a -m "Plugin updates"
```

Maintaining plugins with Git submodules has also another application than simplifying the update process.
In a greater scale it can be used to maintain a Moodle project, where multiple developers need to have an exact copy of your moodle without organizing external plugins manually.
You can read more about this topic at the page [Moodle development environment with Git submodules](Moodle_development_environment_with_Git_submodules.md "Moodle development environment with Git submodules").

## Advanced Git concepts

### Creating your own branch

It's a great idea to create your own branch for your production site, even if you don't plan to make any code changes. This way, if you do need to make any customisations in the future, you can do so without affecting the main Moodle code and you can easily merge in future updates from the official Moodle repository.

To create your own branch, use the following commands:

```
cd /path/to/your/moodle
git checkout -b myproductionbranch
```

You can replace `myproductionbranch` with a name of your choice. You can then use this branch to make any customisations you need.

You may also wish to create a new branch for each new major version of Moodle that you upgrade to, for example:

```
git checkout -b 5.1-example.com
```

## See also

- [Windows installation using Git](Windows_installation_using_Git.md "Windows installation using Git")
- [Git for Mac](Git_for_Mac.md "Git for Mac")
- [dev:Moodle versions](https://docs.moodle.org/dev/Moodle_versions "dev:Moodle versions")
- For fixing a Tracker Issue (MDL) / Forking Moodle / CONTRIButing code [User:Sam\_Hemelryk/My\_Moodle\_Git\_workflow](https://docs.moodle.org/dev/User:Sam_Hemelryk/My_Moodle_Git_workflow "dev:User:Sam Hemelryk/My Moodle Git workflow")
- [Case study Git + Moodle from Technical University Berlin](Moodle_Production_Server_with_GIT.md "Moodle Production Server with GIT")

Moodle forum discussions

- [Github and Moodle deployment for production](https://moodle.org/mod/forum/discuss.php?d=255175)
- [GIT help needed](http://moodle.org/mod/forum/discuss.php?d=168094)
- [Clear git guide for Admins (not developers)](https://moodle.org/mod/forum/discuss.php?d=231046)
- [Best way to use Git](https://moodle.org/mod/forum/discuss.php?d=393756)

External resources

- [Deploying Moodle from git - Blog post from a production experience](http://thamblings.blogspot.com.au/2013/07/upgrading-moodle-from-git.html)
- [Git Reference](http://gitref.org/)
- [Pro Git book](http://progit.org/book/)

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Git_for_Administrators&oldid=156787>"

[Categories](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Pages with syntax highlighting errors](https://docs.moodle.org/503/en/index.php?title=Category:Pages_with_syntax_highlighting_errors&action=edit&redlink=1 "Category:Pages with syntax highlighting errors (page does not exist)")
- [Installation](Category_Installation.md "Category:Installation")
