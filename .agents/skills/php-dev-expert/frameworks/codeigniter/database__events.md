# Database Events — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/database/events.html

---

# Database Events[](#database-events "Link to this heading")

The Database classes contain a few [Events](extending__events.md) that you can tap into in
order to learn more about what is happening during the database execution. These events can
be used to collect data for analysis and reporting. The [Debug Toolbar](testing__debugging.md)
uses this to collect the queries to display in the Toolbar.

## [The Events](#id1)[](#the-events "Link to this heading")

### [DBQuery](#id2)[](#dbquery "Link to this heading")

This event is triggered whenever a new query has been run, whether successful or
not. The only parameter is a [Query](database__queries.md) instance of the
current query.

You could use this to display all queries in STDOUT, or logging to a file, or
even creating tools to do automatic query analysis to help you spot potentially
missing indexes, slow queries, etc.

An example to log all queries:

```
<?php

// In app/Config/Events.php

namespace Config;

use CodeIgniter\Events\Events;
use CodeIgniter\Exceptions\FrameworkException;
use CodeIgniter\HotReloader\HotReloader;

// ...

Events::on(
    'DBQuery',
    static function (\CodeIgniter\Database\Query $query) {
        log_message('info', (string) $query);
    },
);
```
