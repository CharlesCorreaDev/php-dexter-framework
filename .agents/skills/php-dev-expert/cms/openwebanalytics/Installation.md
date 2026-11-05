# Installation · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Installation

---

## Before you begin...

1. Read the [technical requirements](Technical-Requirements.md) to make sure that OWA can be installed on your system.
2. Read the [File System Permissions](File-System-Permissions.md) page to understand what file system permissions are required by OWA during install as well as how you can harden your instance after installation is complete.

## Install Steps

### 1. Setup Your Database & Connection Info

OWA requires connection info for a database where it can install its schema and store data. It's best create a new database for OWA and to have this info ready before proceeding further.

| Connection Param | Description |
| --- | --- |
| Host | This is the hostname where your database can be accessed. This could be a remote host such as `db.yourdomain.com` or, if OWA is running on the same host as your database instance you can use `localhost`. |
| Database Name | This is the name of the database that OWA should read and write to. This database needs to be created if it does not exist prior to starting the install. |
| User | This is the user name that OWA will use to connect to your database server. This database user name must have permission to read and write to the database that you want OWA to use. |
| Password | This is the password of the database user. |

OWA will write this information to a newly created `owa-config.php` [configuration file](Configuration.md) - where it can be changed later if you need to modify the database that OWA read and writes from.

The OWA installer will create all the tables that it needs using the owa\_ table prefix.

### 2. Get the latest OWA release

Download the packaged release from the [releases page](https://github.com/Open-Web-Analytics/Open-Web-Analytics/releases). It is the asset named:

```
owa_<version>_packaged.tar          for example, owa_1.13.0_packaged.tar
```

- Create the directory OWA will live in, somewhere within the document root of your web
  server, and unpack the release into it. The tar contains OWA's files themselves rather
  than a folder wrapping them, so unpack it into a directory you have made for it rather
  than into the document root:

```
mkdir /path/to/docroot/owa
tar -xf owa_<version>_packaged.tar -C /path/to/docroot/owa
```

- That directory has to be reachable by web browsers: the install wizard, the reporting
  interface and the JavaScript tracker are all served from it.

**Do not use the "Source code (zip)" or "Source code (tar.gz)" links.** GitHub adds
those to every release automatically. They are a snapshot of the repository rather
than a release package, and they contain neither `vendor/` (OWA's PHP dependencies)
nor `public/` (its built JavaScript and CSS), because neither is committed to the
repository. The packaged tar has both, already built, and is the only asset that is
uploaded to a release.

If you have already unpacked one of those by mistake, the symptom is a blank page
or an empty `500` from every URL, `install.php` included. You do not have to start
over — either download the packaged tar instead, or build what is missing in place
by following [Installing from Github](Installing-from-Github.md) from the
`composer install` step onwards.

(Alternatively you can also [install OWA from Github](Installing-from-Github.md).)

### 3. Run the install Wizard

- Start the installation wizard by pointing your web browser at: `http://yourdomain/path/to/owa/install.php`

The first screen checks your PHP version, database driver, required extensions and
writable directories, and names anything missing before you go further. It also
checks the two things a source download does not come with — PHP dependencies
(`composer install`) and built JavaScript and CSS (`npm run build`) — and tells you
which command to run for each, so an unpacked source archive says what it needs
instead of failing silently.

**Choose your timezone carefully.** The wizard asks for one, and it is the only
answer in the install that you cannot revise later. Every request is filed under a
calendar day at the moment it is recorded, and that day is written into the row —
so changing the timezone afterwards re-buckets new data while history keeps the
old boundaries, and nothing records which zone a given row was derived under.
Pick the zone you want to read your reports in.

If you set `OWA_TIMEZONE` in `owa-config.php` by hand before installing, the
wizard shows it and does not let you edit it here: the constant wins on every
boot, so an editable field would take a choice that never took effect.

When the wizard finishes you will have an **Organization**, one **Property** (the
website you named) and one **Observation Profile** (the way that website is
watched). Those are the words the reporting and settings screens use from here on.
See [Organizations, Properties and Profiles](Organizations-Properties-and-Profiles.md).

### 4. Add OWA's Cron Entry

OWA runs its periodic maintenance from a job scheduler, and the scheduler needs one cron entry. Add this line to the crontab of the user that owns your OWA files:

```
* * * * * cd /path/to/owa && php cli.php cmd=schedule-run
```

That single line is the whole setup. It dispatches every scheduled job, so you never add a second one. Nothing periodic runs until it exists, and because a scheduler that is not running produces no output, OWA reminds you at the top of every admin page until it is in place.

Check that it took:

```
/path/to/php cli.php cmd=schedule-status
```

See [Scheduled Jobs](Scheduled-Jobs.md) for what is registered and how to configure it.

### 5. Integration Plugins

If you are running WordPress, install the [Integration Plugins](Integration-Plugins.md). For anything else, track it with the [Javascript Tracker](Javascript-Tracker.md).

## Re-install

Use the following steps to perform a clean re-install of OWA:

- Drop all owa\_ tables from your database
- Remove any cache sub directories (usually: /path/to/owa/owa-data/caches/1)
- Delete or rename `owa-config.php`. The installer will not overwrite an existing
  one, and it holds the database credentials and any constants you set — so if you
  want to keep the same settings, keep the file and drop only the tables.
- Re-run the install wizard which will now be accessible

## Updating

See the [Updating](Updating.md) page for details on how to update your existing OWA instance.
