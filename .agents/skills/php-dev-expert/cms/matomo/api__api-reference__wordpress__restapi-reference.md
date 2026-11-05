# REST API: API Reference - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/api-reference/wordpress/restapi-reference

---

#### [API Reference](api__api-reference.md)

- [Introduction](api__api-reference__api-reference-introduction.md)
- Tracking
  - [Tracking HTTP API](api__api-reference__tracking-api.md)
  - [JavaScript Tracking Client](api__api-reference__tracking-javascript.md)
  - [Java Tracker](api__api-reference__tracking-java.md)
  - [PHP Tracking Client](api__api-reference__PHP-Matomo-Tracker.md)
- Tag Manager
  - [Tag Manager JavaScript API](api__api-reference__tagmanager__javascript-api-reference.md)
- Reporting HTTP API
  - [Reporting API Reference](api__api-reference__reporting-api.md)
  - [Metadata](api__api-reference__reporting-api-metadata.md)
  - [Segmentation](api__api-reference__reporting-api-segmentation.md)
  - [Compatible apiModule and apiAction combinations](api__api-reference__reporting-api-apiModule_apiAction-combinations.md)
- PHP Plugins API
  - [Classes](api__api-reference__classes.md)
  - [Events](api__api-reference__events.md)
  - [Index](api__api-reference__index.md)
- WordPress
  - [Classes](api__api-reference__wordpress__classes-reference.md)
  - [Hooks](api__api-reference__wordpress__hooks-reference.md)
  - [REST API](api__api-reference__wordpress__restapi-reference.md)
- Database
  - [Database schema](api__guides__database-schema.md)

# Matomo for WordPress REST API reference

The regular [Matomo HTTP Reporting API](api__api-reference__reporting-api.md) is not available within WordPress. Instead we utilise the WordPress REST API.

For more details about each method and all the available parameters please view the [HTTP Reporting API reference](api__api-reference__reporting-api.md). The `idSite` parameter is automatically set within WordPress and you don't need to provide this value. The `token_auth` is never needed as well since the authentication is done through WordPress.

Example endpoint: https://example.com/index.php?rest\_route=/matomo/v1

Example request: https://example.com/index.php?rest\_route=/matomo/v1/api/processed\_report&period=date&date=year&filter\_limit=10&apiModule=Actions&apiAction=getPageUrls

Namespace: `matomo/v1`

- `GET api/processed_report`
- `GET api/report_metadata`
- `GET api/matomo_version`
- `GET api/metadata`
- `GET api/segments_metadata`
- `GET api/widget_metadata`
- `GET api/row_evolution`
- `GET api/suggested_values_for_segment`
- `GET api/settings`
- `POST annotations/add`
- `POST annotations/all`
- `POST core_admin_home/invalidate_archived_reports`
- `POST core_admin_home/run_scheduled_tasks`
- `GET dashboard/dashboards`
- `GET image_graph/get`
- `GET languages_manager/available_languages`
- `GET languages_manager/available_languages_info`
- `GET languages_manager/available_language_names`
- `GET languages_manager/language_for_user`
- `GET live/counters`
- `GET live/last_visits_details`
- `GET live/visitor_profile`
- `GET live/most_recent_visitor_id`
- `GET visits_summary/visits` (requires version 4.0.2 or newer)
- `GET visits_summary/unique_visitors` (requires version 4.0.2 or newer)
- `DELETE privacy_manager/data_subjects`
- `GET privacy_manager/export_data_subjects`
- `POST privacy_manager/anonymize_some_raw_data`
- `GET scheduled_reports/reports`
- `POST scheduled_reports/send_report`
- `POST segment_editor/add`
- `PUT segment_editor/update`
- `DELETE segment_editor/delete`
- `GET segment_editor/get`
- `GET segment_editor/all`
- `GET sites_manager/all`
- `GET sites_manager/all_sites_id`
- `GET users_manager/users`
- `GET users_manager/users_login`
- `GET users_manager/user`
- `GET goals/goals`
- `GET goals/goal`
