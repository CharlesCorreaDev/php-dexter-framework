# Database Query Logger | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/developers/query-logger

---

Version: 6

On this page

Blesta 6.0 ships an in-memory **Database Query Logger** that captures every SQL query executed during a request, along with bindings, execution time, and a short backtrace. It's intended as a developer-only debugging and performance-analysis tool.

The logger is **off by default**. Enable it from the global config when you need it; remember to disable it again before pushing to production.

## Enabling the logger[â](#enabling-the-logger "Direct link to Enabling the logger")

Set `System.query_logging` to `true` in `~/config/blesta.php`:

~/config/blesta.php

```
Configure::set('System.query_logging', true);
```

While enabled, every SQL query routed through `Blesta\Core\Database\Record::query()` (which is the path almost all model and controller code takes) is appended to a static in-memory array along with its parameter bindings, execution time in milliseconds, and a 5-frame backtrace.

Performance overhead

Query logging adds a `microtime()` measurement and a `debug_backtrace()` call per query. Leave it disabled in production. The captured queries also accumulate for the lifetime of the request â long-running scripts (cron jobs, imports) can grow the in-memory log significantly.

## Reading the captured queries[â](#reading-the-captured-queries "Direct link to Reading the captured queries")

The logger is a static class â call its methods from anywhere in your request lifecycle (typically near the end of the controller method or at the bottom of a view) to inspect what was logged:

```
use Blesta\Core\Database\QueryLogger;  
  
$queries = QueryLogger::getQueries();  
// [  
//   ['query' => 'SELECT * FROM clients WHERE id = ?',  
//    'bindings' => [42],  
//    'time' => 1.24,  
//    'backtrace' => [...]],  
//   ...  
// ]
```

Each entry contains:

| Key | Type | Description |
| --- | --- | --- |
| `query` | string | The raw SQL string passed to `Record::query()`. |
| `bindings` | array | Positional bindings supplied alongside the query. |
| `time` | float | Execution time in milliseconds, rounded to 2 decimals. |
| `backtrace` | array | Last 5 stack frames at the time of the query (no arguments included). |

## Helper methods[â](#helper-methods "Direct link to Helper methods")

```
QueryLogger::getTotalTime();  
// Sum of all logged query times in milliseconds.  
  
QueryLogger::getSlowQueries($thresholdMs = 50);  
// Only queries that took longer than the threshold.  
  
QueryLogger::clear();  
// Empty the in-memory log (e.g. between iterations of a long-running script).
```

`getSlowQueries()` defaults to a 50 ms threshold. Tune it to whatever "slow" means for your workload.

## Typical usage pattern[â](#typical-usage-pattern "Direct link to Typical usage pattern")

A pragmatic debugging session in a controller:

```
public function someAction()  
{  
    \Blesta\Core\Database\QueryLogger::clear();  
  
    // â¦whatever you're investigatingâ¦  
    $this->doExpensiveThing();  
  
    if (Configure::get('System.query_logging')) {  
        $slow = \Blesta\Core\Database\QueryLogger::getSlowQueries(10);  
        $total = \Blesta\Core\Database\QueryLogger::getTotalTime();  
  
        // Dump to your dev log of choice  
        $this->logger->debug('Slow queries (' . count($slow) . '), total ' . $total . 'ms', $slow);  
    }  
  
    $this->view->fetch('admin_main');  
}
```

## When to use it[â](#when-to-use-it "Direct link to When to use it")

- Diagnosing the N+1 pattern in a model method.
- Comparing query counts before and after a refactor.
- Identifying which query a long page response time is spending its budget on.

For a higher-level admin view of system logs (PSR-3 levels, on-disk file logs), see [Tools Logs](dev__guides__admin-tools.md#tools-logs-file-based-system-logs). The Query Logger is purpose-built for SQL profiling and is independent of the file-based system logger.

## What it does *not* do[â](#what-it-does-not-do "Direct link to what-it-does-not-do")

- **No file output.** The captured data lives in memory for the duration of the request only.
- **No automatic UI surface.** There is no admin page that displays the captured queries â you read them from your own code.
- **Not a sampler.** Every query is captured while logging is enabled; for production-style sampling you'd need to layer your own threshold logic on top.
