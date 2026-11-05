# Upgrading FAQ - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Upgrading_FAQ

---

# Upgrading FAQ

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [Installation](Installation.md "Installation") ► Upgrading FAQ

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
- [Git guide](Git_for_Administrators.md "Git for Administrators")
- [Administration via command line](Administration_via_command_line.md "Administration via command line")
- Upgrading FAQ
- [Moodle migration](Moodle_migration.md "Moodle migration")

## How do I upgrade from 1.9.x to 5.3?

1.x -> 1.9.19+ -> 2.2.11 -> 2.7.20 -> 3.2.9 on PHP7.1 -> 3.5 on PHP7.1/7.2 -> 5.3

(It is better to upgrade to latest current stable before going to next branch, the same for plugins; upgrading from early stable branches usually works but there is no guarantee.)

Moodle 2.2.11 may be downloaded from <https://download.moodle.org/stable22/>.

## How do I upgrade Moodle? Do I just overwrite the files?

Do NOT overwrite files, as it may cause strange errors. Read the [Upgrading](Upgrading.md "Upgrading") documentation before proceeding.

## I obtain the message "Upgrade already running in this session, please wait!"

Most likely you refreshed the page before the completion message. If you are absolutely sure that there are no upgrade processes active (php and/or mysql), you can click on "!!!" and restart the upgrade.

:   *Note*: If you click on "'!!!" or try to restart the upgrade from another browser, there is a chance that your data in the database could be corrupted. If this happens, you will need to restore the database from sql dump and then restart the upgrade and wait - the process can take several hours on large sites.

## Can I upgrade more than one version at a time?

You can only upgrade to Moodle 4.4 from Moodle 4.1.2 or later. If upgrading from earlier versions, you must upgrade to 4.1.2 as a first step.

## I have custom code in my site. How do I upgrade?

Please see this forum post on [upgrading with custom code](https://moodle.org/mod/forum/discuss.php?d=263355#p1141326) for some suggestions.

## Any further questions?

Please post in the [Installing and upgrading help forum](https://moodle.org/mod/forum/view.php?id=28) on moodle.org.

## See also

- [Installation FAQ](Installation_FAQ.md "Installation FAQ")

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Upgrading_FAQ&oldid=148613>"

[Categories](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [Installation](Category_Installation.md "Category:Installation")
- [FAQ](Category_FAQ.md "Category:FAQ")
