# Maxmind GeoIP Module · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Maxmind-GeoIP-Module

---

The Maxmind GeoIP module resolves a visitor's IP address to a location, using a
MaxMind GeoLite2 database held on your own server — or, optionally, MaxMind's
paid web service.

***This module requires explicit activation before geolocation data appears in tracking requests.***

## What you need, and why

Two things have to be in place before a single location is resolved:

1. **A MaxMind licence key.** The GeoLite2 databases cost nothing, but MaxMind
   stopped allowing anonymous downloads at the end of 2019. Fetching a database
   is authenticated, so an account and a key are required even though no money
   changes hands.
2. **The database itself**, in OWA's data directory.

If either is missing, lookups do not fail loudly — locations simply come back
empty, which looks the same as a site whose visitors cannot be placed. That is
the single most common reason this module appears not to work.

## Getting a licence key

The key is free. The steps below are MaxMind's, and the last one is the one
people get caught by.

1. Create a MaxMind account from the **GeoLite2 sign-up page**:
   <https://www.maxmind.com/en/geolite2/signup> — you will be asked to agree to
   the GeoLite End User Licence Agreement.
2. Log into the account portal.
3. Open the **Account** menu and choose **Manage License Keys**.
4. Click **Generate new license key**.
5. Give the key a name. This only identifies it in MaxMind's usage logs; call
   it something like `owa` so you can tell later what is using it.
6. Click **Confirm**.
7. **Copy the key now.** MaxMind display it exactly once. Navigate away without
   recording it and the key cannot be retrieved — you have to generate a new
   one and deactivate the one you lost.

Treat the key as a password. It authorises database downloads against your
account, and MaxMind rate-limit accounts that are used heavily.

## Setting the key and choosing a database

> **Requires 1.13.0 or later.** On 1.12.0 there is no settings page and no
> download command: set the key in `owa-config.php` as shown below, and install
> the database by hand — see
> [Installing the database by hand](#installing-the-database-by-hand).

Open **Options → GeoIP** in the admin interface. The page shows whether a key
is set, whether a database is installed and how old it is, and lets you set:

- **Licence Key** — the key from the steps above.
- **Database Edition** — see below.

Everything on that page can also be set in `owa-config.php`, which is the only
route on an installation without admin access:

```
$this->set('maxmind_geoip', 'db_license_key', 'YOUR_LICENSE_KEY');
$this->set('maxmind_geoip', 'db_edition', 'GeoLite2-City');
```

Note these are `$this->set(...)` calls rather than `define(...)`. The config
file is included from inside a settings object, so `$this` is that object.

### Which edition

| Edition | Resolves | Size |
| --- | --- | --- |
| `GeoLite2-City` | city, region and country | large |
| `GeoLite2-Country` | country only | a fraction of City |

City is the default. Country is the better choice if your reports never go
below country level — it is much smaller to download and to keep current, and
nothing else changes: the city and region fields simply stay empty.

`GeoLite2-ASN` is also free from MaxMind, but OWA does not offer it. It carries
network ownership data and no location fields at all, so an installation
pointed at it would look healthy and resolve nothing.

## Downloading the database

> **Requires 1.13.0 or later.** On 1.12.0, install the database by hand.

```
php cli.php cmd=update-geoip-db
```

Run it from the OWA directory. It downloads the edition you selected, unpacks
it, and puts it where the module reads it from. Options:

| Argument |  |
| --- | --- |
| `--dry-run` | report what would happen and change nothing |
| `--force` | download even when the local copy is already current |
| `edition=GeoLite2-Country` | fetch a specific edition for this run |
| `license-key=...` | use a key for this run without storing it |

The command asks MaxMind whether the database has changed before downloading
anything, and stops if your copy is already current. That check costs nothing
against your account's download limit, which is why it is safe to run on a
schedule.

Nothing is disturbed if it fails. The download goes to a temporary file first,
and the existing database stays in place and readable until a complete
replacement is ready.

### Keeping it current

**The GeoLite EULA requires you to keep the data up to date**, so this is a
licence condition and not only good practice. MaxMind publish updates twice a
week.

It matters because a stale database does not announce itself. IP ranges are
reassigned between networks, cities and countries continuously, and an old
database answers every lookup confidently with the country that range used to
belong to. Nothing in the reports looks wrong.

The command is not scheduled for you, deliberately — it makes an outbound
request to a third party, which should be your decision rather than something
that arrives with an upgrade. To schedule it, either add it to your own cron,
or add it to OWA's scheduler in `owa-config.php`:

```
define('OWA_SCHEDULED_JOBS', array(
    'refresh-geoip-db' => array(
        'command'  => 'update-geoip-db',
        'schedule' => '@weekly',
    ),
));
```

That requires [OWA's job scheduler](Command-Line-Interface-_CLI.md) to be running.
The job is skipped with a notice if the module is not active, so it cannot
silently fail after the module is turned off.

## Installing the database by hand

If the server cannot reach MaxMind, download the database elsewhere and place
it yourself:

1. Download the GeoLite2 City (or Country) database in **MaxMind DB / .mmdb**
   format from the Download Databases section of your MaxMind account.
2. Unpack the archive — the `.mmdb` file is inside a dated directory.
3. Put it at `owa-data/maxmind/GeoLite2-City.mmdb`, creating the `maxmind`
   directory if it does not exist. The file name must match the edition you
   selected.

To keep the database somewhere else — a path shared with other software, say —
set `OWA_MAXMIND_DATA_DIR` in `owa-config.php`:

```
define( 'OWA_MAXMIND_DATA_DIR', '/path/to/maxmind/data/dir/');
```

## Troubleshooting

**Locations are empty.** Open Options → GeoIP. It will tell you whether a key
is missing, a database is missing, or both.

**"MaxMind rejected the licence key".** The key is wrong, has been deactivated,
or belongs to an account without GeoLite2 access. Generate a fresh one and note
that the key is only shown once.

**The command says "Already current".** Nothing is wrong — MaxMind report that
their copy is no newer than yours. Use `--force` if you have reason to believe
the local file is damaged.

**Permission errors.** The user running the command has to be able to write
`owa-data/maxmind/`. The message names the directory and the user it tried as.

## Maxmind GeoIP City/Isp/Org Web Service

Instead of a local database, the module can query MaxMind's paid web service.
This needs a web service subscription, which is separate from the free GeoLite2
databases: <https://www.maxmind.com/en/geoip-api-web-services>

Add both settings to `owa-config.php`:

```
$this->set('maxmind_geoip', 'lookup_method', 'geoip_city_isp_org_web_service');
$this->set('maxmind_geoip', 'ws_license_key', 'YOUR_LICENSE_KEY');
```

Every tracked request then makes an outbound call to MaxMind, so this trades
local disk and update chores for latency and a per-lookup cost.

## Repairing double-encoded place names

Before 1.14.0 the geolocation reader converted every name it read from MaxMind from ISO-8859-1 to UTF-8, but MaxMind stores names as UTF-8 already. Any city or region name containing a non-ASCII character was therefore stored twice-encoded and displays as mojibake — `MÃ¼nchen` rather than `München`.

The reader was fixed in 1.14.0. Rows written before that are repaired with:

```
/path/to/php cli.php cmd=repair-geo-encoding dry-run=1
/path/to/php cli.php cmd=repair-geo-encoding
```

Names that are already correct are left alone, so it is safe to run more than once. See [repair-geo-encoding](Command-Line-Interface-_28CLI_29.md#repair-geo-encoding).
