# Deployment · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Deployment

---

The OWA framework can be deployed in a number of configurations that allow for the separation of event recording, event queuing, and event processing functions. These different configuration options enable OWA to be run in either a distributed or centralized manner to meet different scalability and management requirements.

## Deployment Scenarios

### Centralized Event Recording, Queuing, and Processing

This is OWA's simplest deployment mode, as only a single instance of OWA is deployed on a single server.

In this configuration a single OWA instance performs all three functions — recording incoming tracking events, queuing them, and processing them into the storage engine — and reads and writes to a single local database. This is the default setup and is appropriate for most sites.

### Distributed Event Recording, Centralized Queuing and Processing

This scenario allows for a fan-out of event recording across multiple servers.

Multiple front-end OWA instances (for example, behind a load balancer) each record incoming tracking events and write them to a single shared, centralized queue. A separate central instance then reads that shared queue and processes the events into the storage engine. This spreads the load of accepting tracking requests across many servers while keeping queuing and processing in one place.

### Distributed Event Recording and Queuing, Centralized Processing

This scenario provides for maximum scalability of event recording and queuing across multiple servers.

Each front-end OWA instance both records events and writes them to its own local queue, avoiding any shared write contention at capture time. A central processing instance then pulls from each of the distributed queues and processes the events into the storage engine. This is the most scalable configuration and is used when event volume is high enough that even a shared queue would become a bottleneck.

## Scheduled Maintenance

Whichever scenario you deploy, the instance that owns the database needs the job scheduler's cron entry:

```
* * * * * cd /path/to/owa && php cli.php cmd=schedule-run
```

It dispatches every scheduled job, so there is only ever one entry to add. In a distributed deployment put it on the instance that processes events and serves reports, not on each logging node: logging nodes only queue, and a node running with `OWA_USE_STATIC_CONFIG_ONLY` has no database to maintain. See [Scheduled Jobs](Scheduled-Jobs.md).

## Related Documentation

See OWA's different [Event Queueing](Event-Queueing.md) modes for more information.

## Hosting Companies with "one-click" OWA deploys

- Dreamhost
- Render ([deploy docs](https://render.com/docs/deploy-open-web-analytics))
