# Understanding WP-Cron Scheduling – Plugin Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/plugins/cron/understanding-wp-cron-scheduling/

---

# Understanding WP-Cron Scheduling

Copy page
[View as Markdown](dev_plugins__cron__understanding-wp-cron-scheduling.md)

[Back to top](#wp--skip-link--target)

Unlike a traditional system cron that schedules tasks for specific times (e.g. “every hour at 5 minutes past the hour”), WP-Cron uses intervals to simulate a system cron.

WP-Cron is given two arguments: the time for the first task, and an interval (in seconds) after which the task should be repeated. For example, if you schedule a task to begin at 2:00PM with an interval of 300 seconds (five minutes), the task would first run at 2:00PM and then again at 2:05PM, then again at 2:10PM, and so on, every five minutes.

To simplify scheduling tasks, WordPress provides some default intervals and an easy method for adding custom intervals.

The default intervals provided by WordPress are:

- hourly
- twicedaily
- daily
- weekly (since WP 5.4)

## Custom Intervals

To add a custom interval, you can create a filter, such as:

```
add_filter( 'cron_schedules', 'example_add_cron_interval' );
function example_add_cron_interval( $schedules ) { 
    $schedules['five_seconds'] = array(
        'interval' => 5,
        'display'  => esc_html__( 'Every Five Seconds' ), );
    return $schedules;
}
```

This filter function creates a new interval that will allow us to run a cron task every five seconds.

**Note:** All intervals are in seconds.

First published

October 19, 2014

Last updated

November 17, 2022

[Previous
Testing of WP-Cron
Previous: Testing of WP-Cron](dev_plugins__cron__simple-testing.md)

[Next
Hooking WP-Cron Into the System Task Scheduler
Next: Hooking WP-Cron Into the System Task Scheduler](dev_plugins__cron__hooking-wp-cron-into-the-system-task-scheduler.md)
