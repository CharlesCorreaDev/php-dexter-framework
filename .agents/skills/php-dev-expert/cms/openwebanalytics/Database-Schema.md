# Database Schema · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Database-Schema

---

OWA utilizes a [star schema](https://en.wikipedia.org/wiki/Star_schema) with its fact tables in the middle surrounded by related dimension tables.

## Fact Tables

Fact tables are **partitioned by date** on MySQL, on their `yyyymmdd` column. This changes nothing about what a query returns: every row stays visible to every report. It makes removing old data a metadata operation, and lets a query for a date range read only the periods that overlap it. See [Partitioning Fact Tables](Partitioning-Fact-Tables.md).

## Scheduler Tables

Two tables support the job scheduler. Neither holds analytics data.

| Table | Purpose |
| --- | --- |
| `owa_scheduled_job` | One row per job: the occurrence its last run satisfied, when it last ran and finished, the outcome and message, and running counts. The existence of any row is also what proves the scheduler has run at all. |
| `owa_job_lock` | One row per job that is running right now. The row's existence *is* the lock, and the primary key supplies the atomicity, so a job can never overlap itself. |

See [Scheduled Jobs](Scheduled-Jobs.md).
