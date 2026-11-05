# Documentation / Home / Integration / Database Management | Zenbership

> **Fonte / Source:** http://docs.zenbership.org/Integration/Database-Management

---

- [Administration](docs__Control-Panel__Control-Panel-Overview.md)
- [Memberships](docs__Membership.md)
- [Events](docs__Events.md)
- [eCommerce](docs__Shop.md)
- [CRM](docs__CRM.md)
- [Connect](docs__Connect.md)
- [Integration](docs__Integration.md)

# Database Management

For the most part, Zenbership will manage, clean, backup, and optimize your database through [cron jobs](docs__Basics__Cron-Jobs.md). However, if you wish to manually manage your database, the program offers the following options to administrators.

## Caching

If you elect to use the caching system, the program will build and maintain "pre-created" data arrays within the database. While this improves performance, it also has drawbacks. It can, at times, result in "cached" data rather than the most recent and accurate date being displayed. It will also increase the size of the database significantly.

We only recommend using the cache if you are processing large volumes of requests (100+ per minute).

### Activating The Cache

- "Integration > Options"
- Set the "Use Caching?" setting to "Yes".
- Save the changes.

The program will instantly begin building a cache as items are loaded.

### Clearing or Rebuilding the Cache

- "Integration > Administrative Task > Database > Clear Cache"

## Temp Data

Many features of the program require the creation of temporary data. This data is routinely cleared by the cron job, however if you wish to manually clear it, you can do so from:

- "Integration > Administrative Task > Database > Clear Temp Data"

## Statistics

The program actively builds a database of statistics. This database can become extremely large over time, so the program allows you to clear your current statistical database at any time. Note that doing this will result in graphs and numerous other statistics used throughout the program being cleared.

To create the statistical database:

- "Integration > Administrative Task > Database > Clear Statistics"

### Accuracy of Statistics

The statistical database is consider 99% accurate. For true-statistics with 100% accuracy, please run reports, which draw their figures directly from the primary database rather than the statistical database.

### Article Links

- [Caching](#Caching)
- [Activating The Cache](#Activating_The_Cache)
- [Clearing or Rebuilding the Cache](#Clearing_or_Rebuilding_the_Cache)
- [Temp Data](#Temp_Data)
- [Statistics](#Statistics)
- [Accuracy of Statistics](#Accuracy_of_Statistics)

### Related Articles

- No related pages found.

### Article Tags

- No tags found.

### Details

Published on 2013/07/22.  
Last updated on 2013/07/22.

Was this article helpful?  
[Yes (0)](#) - [No (0)](#)
