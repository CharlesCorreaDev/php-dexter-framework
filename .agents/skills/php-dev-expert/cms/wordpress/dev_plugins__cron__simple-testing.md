# Testing of WP-Cron – Plugin Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/plugins/cron/simple-testing/

---

# Testing of WP-Cron

## In this article

Table of Contents

- [WP-CLI](#wp-cli)
- [WP-Cron Management Plugins](#wp-cron-management-plugins)
- [\_get\_cron\_array()](#_get_cron_array)
- [wp\_get\_schedules()](#wp_get_schedules)

Copy page
[View as Markdown](dev_plugins__cron__simple-testing.md)

[Back to top](#wp--skip-link--target)

## [WP-CLI](#wp-cli)

Cron jobs can be tested using [WP-CLI](https://wp-cli.org/). It offers commands like `wp cron event list` and `wp cron event run {job name}`. [Check the documentation](https://developer.wordpress.org/cli/commands/cron/) for more details.

## [WP-Cron Management Plugins](#wp-cron-management-plugins)

[Several plugins are available on the WordPress.org Plugin Directory for viewing, editing, and controlling the scheduled cron events and available schedules on your site.](https://wordpress.org/plugins/tags/cron/)

## [\_get\_cron\_array()](#_get_cron_array)

[The `_get_cron_array()` function](https://developer.wordpress.org/reference/functions/_get_cron_array/) returns an array of all currently scheduled cron events. Use this function if you need to inspect the raw list of events.

## [wp\_get\_schedules()](#wp_get_schedules)

[The `wp_get_schedules()` function](https://developer.wordpress.org/reference/functions/wp_get_schedules/) returns an array of available event recurrence schedules. Use this function if you need to inspect the raw list of available schedules.

First published

October 19, 2014

Last updated

July 9, 2022

[Previous
Scheduling WP Cron Events
Previous: Scheduling WP Cron Events](dev_plugins__cron__scheduling-wp-cron-events.md)

[Next
Understanding WP-Cron Scheduling
Next: Understanding WP-Cron Scheduling](dev_plugins__cron__understanding-wp-cron-scheduling.md)
