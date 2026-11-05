# Metadata: API Reference - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/api-reference/reporting-api-metadata

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

#### Metadata

- [Fetch the Analytics Data and Metadata for a report](#fetch-the-analytics-data-and-metadata-for-a-report)
- [List and Definition of 'metadata' Response Attributes](#list-and-definition-of-metadata-response-attributes)
- [Listing all the Metadata API Functions](#listing-all-the-metadata-api-functions)
- [Static Image Graphs](#static-image-graphs)

# Report Metadata API Methods

The standard Matomo Analytics APIs return raw data, for example: visits, page views, revenue, conversions.

The Metadata API is the service that calls other APIs, then add more metadata around it, for example, it will:

- return the report category, name, but also name of all the columns (in a specific language), or the translated date label (eg. "Thursday 10 February 2011")
- return the data units as well, including the % sign, money symbols like $ or €, or time format "00:04:17"
- return the processed metrics (ratios, averages) that are not returned in the normal API response, for example: bounce rate and time on site.
  The Matomo Metadata API provides a simple entry point to get this additional information for most Matomo API functions returning analytics data.

## Fetch the Analytics Data and Metadata for a report

The method **API.getProcessedReport** can be called to request the full data set (metadata, column names, report data) of a given Matomo report. The response contains:

- 'metadata' - report name, category, list of metrics
- 'columns' - the list of translated column names in the report
- 'reportData' - the actual data: dimension and list of metrics
- 'reportMetadata' - (optional) contains the metadata for each row, for example: logo URLs, country codes, search engine URLs, etc.
  For example, if you want to display the top five countries that visitors come from you would build the API Request as follows:
- User countries report: `&apiModule=UserCountry&apiAction=getCountry`
- Truncated to 5 rows: `&filter_truncate=5`
- Labels can be translated into a specific language. As with other API calls, you can use the parameter `&language=xx` (replacing xx with the translation code).
  The URL would be [https://demo.matomo.cloud/?module=API&method=API.getProcessedReport&idSite=1&date=yesterday&period=day&apiModule=UserCountry&apiAction=getCountry&language=en&format=xml&token\_auth=anonymous&filter\_truncate=5](https://demo.matomo.cloud/?module=API&method=API.getProcessedReport&idSite=1&date=yesterday&period=day&apiModule=UserCountry&apiAction=getCountry&format=xml&token_auth=anonymous&filter_truncate=5&language=en)

The returned XML is:

```
<?xml version="1.0" encoding="utf-8" ?>
<result>
	<website>Demo Site</website>
	<prettyDate>Tuesday, October 27, 2026</prettyDate>
	<metadata>
		<category>Visitors</category>
		<subcategory>Locations</subcategory>
		<name>Country</name>
		<module>UserCountry</module>
		<action>getCountry</action>
		<dimension>Country</dimension>
		<documentation>Shows which country your visitors connected from when accessing your website.</documentation>
		<metrics>
			<nb_visits>Visits</nb_visits>
			<nb_uniq_visitors>Unique visitors</nb_uniq_visitors>
			<nb_actions>Actions</nb_actions>
			<nb_users>Users</nb_users>
		</metrics>
		<metricsDocumentation>
			<nb_visits>If a visitor comes to your website for the first time or if they visit a page more than 30 minutes after their last page view, this will be recorded as a new visit.</nb_visits>
			<nb_uniq_visitors>The number of unduplicated visitors coming to your website. Every user is only counted once, even if they visit the website multiple times a day.</nb_uniq_visitors>
			<nb_actions>The number of actions performed by your visitors. Actions can be page views, internal site searches, downloads or outlinks.</nb_actions>
			<nb_users>The number of users logged in your website. It is the number of unique active users that have a User ID set (via the Tracking code function 'setUserId').</nb_users>
			<nb_actions_per_visit>The average number of actions (page views, site searches, downloads or outlinks) that were performed during the visits.</nb_actions_per_visit>
			<avg_time_on_site>The average duration of a visit.</avg_time_on_site>
			<bounce_rate>The percentage of visits that only had a single pageview. This means, that the visitor left the website directly from the entrance page.</bounce_rate>
			<conversion_rate>The percentage of visits that triggered a conversion. The conversion rate is calculated using the number of visits that converted at least one goal. Visits converting multiple goals are only counted once in the conversion rate.</conversion_rate>
			<nb_visits_percent_of_total>The percentage of the report's total Visits that this row represents.</nb_visits_percent_of_total>
			<nb_actions_percent_of_total>The percentage of the report's total Actions that this row represents.</nb_actions_percent_of_total>
			<revenue_percent_of_total>The percentage of the report's total Revenue that this row represents.</revenue_percent_of_total>
		</metricsDocumentation>
		<processedMetrics>
			<nb_actions_per_visit>Actions per Visit</nb_actions_per_visit>
			<avg_time_on_site>Avg. Time on Website</avg_time_on_site>
			<bounce_rate>Bounce Rate</bounce_rate>
		</processedMetrics>
		<metricTypes>
			<nb_visits>number</nb_visits>
			<nb_uniq_visitors>number</nb_uniq_visitors>
			<nb_actions>number</nb_actions>
			<nb_users>number</nb_users>
			<nb_actions_per_visit>number</nb_actions_per_visit>
			<avg_time_on_site>duration_s</avg_time_on_site>
			<bounce_rate>percent</bounce_rate>
			<conversion_rate>percent</conversion_rate>
			<nb_visits_percent_of_total>percent</nb_visits_percent_of_total>
			<nb_actions_percent_of_total>percent</nb_actions_percent_of_total>
			<revenue_percent_of_total>percent</revenue_percent_of_total>
		</metricTypes>
		<metricsGoal>
			<nb_conversions>Conversions</nb_conversions>
			<revenue>Revenue</revenue>
		</metricsGoal>
		<processedMetricsGoal>
			<revenue_per_visit>Revenue per Visit</revenue_per_visit>
		</processedMetricsGoal>
		<metricTypesGoal>
			<revenue_per_visit>money</revenue_per_visit>
			<nb_conversions>number</nb_conversions>
			<conversion_rate>percent</conversion_rate>
			<revenue>money</revenue>
		</metricTypesGoal>
		<imageGraphUrl>index.php?module=API&amp;method=ImageGraph.get&amp;idSite=1&amp;apiModule=UserCountry&amp;apiAction=getCountry&amp;period=day&amp;date=yesterday</imageGraphUrl>
		<imageGraphEvolutionUrl>index.php?module=API&amp;method=ImageGraph.get&amp;idSite=1&amp;apiModule=UserCountry&amp;apiAction=getCountry&amp;period=day&amp;date=2026-09-28,2026-10-27</imageGraphEvolutionUrl>
		<uniqueId>UserCountry_getCountry</uniqueId>
	</metadata>
	<columns>
		<label>Country</label>
		<nb_visits>Visits</nb_visits>
		<nb_visits_percent_of_total>Visits (%)</nb_visits_percent_of_total>
		<nb_uniq_visitors>Unique visitors</nb_uniq_visitors>
		<nb_actions>Actions</nb_actions>
		<nb_actions_percent_of_total>Actions (%)</nb_actions_percent_of_total>
		<nb_users>Users</nb_users>
		<nb_actions_per_visit>Actions per Visit</nb_actions_per_visit>
		<avg_time_on_site>Avg. Time on Website</avg_time_on_site>
		<bounce_rate>Bounce Rate</bounce_rate>
		<revenue>Revenue</revenue>
		<revenue_percent_of_total>Revenue (%)</revenue_percent_of_total>
	</columns>
	<reportData>
		<row>
			<label>United States</label>
			<nb_uniq_visitors>2194</nb_uniq_visitors>
			<nb_visits>2636</nb_visits>
			<nb_actions>5530</nb_actions>
			<nb_users>0</nb_users>
			<revenue>$17,532.05</revenue>
			<nb_visits_percent_of_total>18.2%</nb_visits_percent_of_total>
			<nb_actions_percent_of_total>16.9%</nb_actions_percent_of_total>
			<revenue_percent_of_total>19.6%</revenue_percent_of_total>
			<nb_actions_per_visit>2.1</nb_actions_per_visit>
			<avg_time_on_site>00:02:27</avg_time_on_site>
			<bounce_rate>71%</bounce_rate>
		</row>
		<row>
			<label>Germany</label>
			<nb_uniq_visitors>846</nb_uniq_visitors>
			<nb_visits>1147</nb_visits>
			<nb_actions>3872</nb_actions>
			<nb_users>0</nb_users>
			<revenue>$18,996</revenue>
			<nb_visits_percent_of_total>7.9%</nb_visits_percent_of_total>
			<nb_actions_percent_of_total>11.8%</nb_actions_percent_of_total>
			<revenue_percent_of_total>21.2%</revenue_percent_of_total>
			<nb_actions_per_visit>3.4</nb_actions_per_visit>
			<avg_time_on_site>00:05:15</avg_time_on_site>
			<bounce_rate>54%</bounce_rate>
		</row>
		<row>
			<label>United Kingdom</label>
			<nb_uniq_visitors>929</nb_uniq_visitors>
			<nb_visits>1106</nb_visits>
			<nb_actions>2250</nb_actions>
			<nb_users>0</nb_users>
			<revenue>$2,839.60</revenue>
			<nb_visits_percent_of_total>7.7%</nb_visits_percent_of_total>
			<nb_actions_percent_of_total>6.9%</nb_actions_percent_of_total>
			<revenue_percent_of_total>3.2%</revenue_percent_of_total>
			<nb_actions_per_visit>2</nb_actions_per_visit>
			<avg_time_on_site>00:02:25</avg_time_on_site>
			<bounce_rate>65%</bounce_rate>
		</row>
		<row>
			<label>Australia</label>
			<nb_uniq_visitors>883</nb_uniq_visitors>
			<nb_visits>1075</nb_visits>
			<nb_actions>1869</nb_actions>
			<nb_users>0</nb_users>
			<revenue>$6,224.40</revenue>
			<nb_visits_percent_of_total>7.4%</nb_visits_percent_of_total>
			<nb_actions_percent_of_total>5.7%</nb_actions_percent_of_total>
			<revenue_percent_of_total>6.9%</revenue_percent_of_total>
			<nb_actions_per_visit>1.7</nb_actions_per_visit>
			<avg_time_on_site>00:02:01</avg_time_on_site>
			<bounce_rate>71%</bounce_rate>
		</row>
		<row>
			<label>Indonesia</label>
			<nb_uniq_visitors>604</nb_uniq_visitors>
			<nb_visits>712</nb_visits>
			<nb_actions>1140</nb_actions>
			<nb_users>0</nb_users>
			<revenue>$26</revenue>
			<nb_visits_percent_of_total>4.9%</nb_visits_percent_of_total>
			<nb_actions_percent_of_total>3.5%</nb_actions_percent_of_total>
			<revenue_percent_of_total>0%</revenue_percent_of_total>
			<nb_actions_per_visit>1.6</nb_actions_per_visit>
			<avg_time_on_site>00:01:19</avg_time_on_site>
			<bounce_rate>72%</bounce_rate>
		</row>
		<row>
			<label>Others</label>
			<nb_uniq_visitors>6195</nb_uniq_visitors>
			<nb_visits>7768</nb_visits>
			<nb_actions>18135</nb_actions>
			<nb_users>1</nb_users>
			<revenue>$43,959.20</revenue>
			<nb_visits_percent_of_total>53.8%</nb_visits_percent_of_total>
			<nb_actions_percent_of_total>55.3%</nb_actions_percent_of_total>
			<revenue_percent_of_total>49.1%</revenue_percent_of_total>
			<nb_actions_per_visit>2.3</nb_actions_per_visit>
			<avg_time_on_site>00:03:00</avg_time_on_site>
			<bounce_rate>66%</bounce_rate>
		</row>
	</reportData>
	<reportMetadata>
		<row>
			<code>us</code>
			<logo>plugins/Morpheus/icons/dist/flags/us.png</logo>
			<segment>countryCode==us</segment>
			<logoHeight>16</logoHeight>
		</row>
		<row>
			<code>de</code>
			<logo>plugins/Morpheus/icons/dist/flags/de.png</logo>
			<segment>countryCode==de</segment>
			<logoHeight>16</logoHeight>
		</row>
		<row>
			<code>gb</code>
			<logo>plugins/Morpheus/icons/dist/flags/gb.png</logo>
			<segment>countryCode==gb</segment>
			<logoHeight>16</logoHeight>
		</row>
		<row>
			<code>au</code>
			<logo>plugins/Morpheus/icons/dist/flags/au.png</logo>
			<segment>countryCode==au</segment>
			<logoHeight>16</logoHeight>
		</row>
		<row>
			<code>id</code>
			<logo>plugins/Morpheus/icons/dist/flags/id.png</logo>
			<segment>countryCode==id</segment>
			<logoHeight>16</logoHeight>
		</row>
		<row>
			<logoHeight>16</logoHeight>
		</row>
	</reportMetadata>
	<reportTotal>
		<nb_uniq_visitors>11651</nb_uniq_visitors>
		<nb_visits>14444</nb_visits>
		<nb_actions>32796</nb_actions>
		<nb_users>1</nb_users>
		<max_actions>62</max_actions>
		<sum_visit_length>2490991</sum_visit_length>
		<bounce_count>9597</bounce_count>
		<nb_visits_converted>1108</nb_visits_converted>
		<goals>
			<row idgoal="ecommerceAbandonedCart">
				<nb_conversions>1347</nb_conversions>
				<nb_visits_converted>1347</nb_visits_converted>
				<revenue>292382.8</revenue>
				<items>2194</items>
			</row>
			<row idgoal="ecommerceOrder">
				<nb_conversions>393</nb_conversions>
				<nb_visits_converted>384</nb_visits_converted>
				<revenue>88926.25</revenue>
				<revenue_subtotal>107485.36</revenue_subtotal>
				<revenue_tax>2081.71</revenue_tax>
				<revenue_shipping>0</revenue_shipping>
				<revenue_discount>14262.34</revenue_discount>
				<items>530</items>
			</row>
			<row idgoal="4">
				<nb_conversions>27</nb_conversions>
				<nb_visits_converted>27</nb_visits_converted>
				<revenue>27</revenue>
			</row>
			<row idgoal="5">
				<nb_conversions>16</nb_conversions>
				<nb_visits_converted>16</nb_visits_converted>
				<revenue>80</revenue>
			</row>
			<row idgoal="6">
				<nb_conversions>45</nb_conversions>
				<nb_visits_converted>45</nb_visits_converted>
				<revenue>90</revenue>
			</row>
			<row idgoal="7">
				<nb_conversions>454</nb_conversions>
				<nb_visits_converted>454</nb_visits_converted>
				<revenue>454</revenue>
			</row>
			<row idgoal="8">
				<nb_conversions>178</nb_conversions>
				<nb_visits_converted>178</nb_visits_converted>
				<revenue>0</revenue>
			</row>
			<row idgoal="9">
				<nb_conversions>10</nb_conversions>
				<nb_visits_converted>6</nb_visits_converted>
				<revenue>0</revenue>
			</row>
			<row idgoal="10">
				<nb_conversions>24</nb_conversions>
				<nb_visits_converted>24</nb_visits_converted>
				<revenue>0</revenue>
			</row>
		</goals>
		<nb_conversions>1147</nb_conversions>
		<revenue>89577.25</revenue>
		<nb_actions_per_visit>2.3</nb_actions_per_visit>
	</reportTotal>
	<timerMillis>202</timerMillis>
</result>
```

## List and Definition of 'metadata' Response Attributes

- **category** - category under which the report appears
- **name** - the report name
- **module** and 'action' - used to build the standard API request to fetch the data for this report, `?module=API&method=$module.$action` (replace $module by the 'module' attribute, replace $action by the 'action' attribute)
- **metrics** - list of basic metrics in the report
- **processedMetrics** - list of processed metrics in the report. Processed metrics are usually ratios (conversion rates, average actions per visit, etc.). Processed metrics don't appear in standard non-metadata API responses.
- **metricsGoal** and 'processedMetricsGoal' - list of goal metrics available for this report.
- **uniqueId** - the report unique ID.
- **constantRowsCount** - if set to 1, this means that the report always has the same number of rows. For example, "visits per hour" always has 24 hours, "visits per number of pages" has 10 rows. This attribute is set only when there is a 'dimension' attribute. If this attribute is not set, it means that the returned data set could have 0 row, 1 row, or N rows.

## Listing all the Metadata API Functions

The API method **API.getReportMetadata** can be called to request the full list of API functions returning web analytics reports - [see the example output on the Matomo demo](https://demo.matomo.cloud/?module=API&method=API.getReportMetadata&format=xml&idSite=1&token_auth=anonymous).

There are two types of reports in Matomo, and each have a slightly different format.

- **Simple metrics reports**

  Simple Metrics reports simply contain a list of metrics and their values. For example, VisitsSummary.get returns the main metrics (visits, pages, unique visitors) for the specified website ([example URL](https://demo.matomo.cloud/?module=API&method=API.getMetadata&idSite=1&apiModule=VisitsSummary&apiAction=get&format=xml&token_auth=anonymous)).

  ```
  <?xml version="1.0" encoding="utf-8" ?>
  <result>
  	<row>
  		<category>Visitors</category>
  		<subcategory>Overview</subcategory>
  		<name>Visits Summary</name>
  		<module>VisitsSummary</module>
  		<action>get</action>
  		<documentation>This report provides a very general overview of how your visitors behave.</documentation>
  		<metrics>
  			<nb_uniq_visitors>Unique visitors</nb_uniq_visitors>
  			<nb_visits>Visits</nb_visits>
  			<nb_users>Users</nb_users>
  			<nb_actions>Actions</nb_actions>
  			<max_actions>Maximum actions in one visit</max_actions>
  		</metrics>
  		<metricsDocumentation>
  			<nb_uniq_visitors>The number of unduplicated visitors coming to your website. Every user is only counted once, even if they visit the website multiple times a day.</nb_uniq_visitors>
  			<nb_visits>If a visitor comes to your website for the first time or if they visit a page more than 30 minutes after their last page view, this will be recorded as a new visit.</nb_visits>
  			<nb_users>The number of users logged in your website. It is the number of unique active users that have a User ID set (via the Tracking code function 'setUserId').</nb_users>
  			<nb_actions>The number of actions performed by your visitors. Actions can be page views, internal site searches, downloads or outlinks.</nb_actions>
  			<bounce_rate>The percentage of visits that only had a single pageview. This means, that the visitor left the website directly from the entrance page.</bounce_rate>
  			<nb_actions_per_visit>The average number of actions (page views, site searches, downloads or outlinks) that were performed during the visits.</nb_actions_per_visit>
  			<avg_time_on_site>The average duration of a visit.</avg_time_on_site>
  		</metricsDocumentation>
  		<processedMetrics>
  			<bounce_rate>Bounce Rate</bounce_rate>
  			<nb_actions_per_visit>Actions per Visit</nb_actions_per_visit>
  			<avg_time_on_site>Avg. Visit Duration (in seconds)</avg_time_on_site>
  		</processedMetrics>
  		<metricTypes>
  			<nb_uniq_visitors>number</nb_uniq_visitors>
  			<nb_visits>number</nb_visits>
  			<nb_users>number</nb_users>
  			<nb_actions>number</nb_actions>
  			<max_actions>number</max_actions>
  			<bounce_rate>percent</bounce_rate>
  			<nb_actions_per_visit>number</nb_actions_per_visit>
  			<avg_time_on_site>duration_s</avg_time_on_site>
  		</metricTypes>
  		<imageGraphUrl>index.php?module=API&amp;method=ImageGraph.get&amp;idSite=1&amp;apiModule=VisitsSummary&amp;apiAction=get&amp;period=day&amp;date=2026-09-29,2026-10-28</imageGraphUrl>
  		<imageGraphEvolutionUrl>index.php?module=API&amp;method=ImageGraph.get&amp;idSite=1&amp;apiModule=VisitsSummary&amp;apiAction=get&amp;period=day&amp;date=2026-09-29,2026-10-28</imageGraphEvolutionUrl>
  		<uniqueId>VisitsSummary_get</uniqueId>
  	</row>
  </result>
  ```
- **Reports with dimensions**

  Most reports, however, will have a 'dimension' entry in the returned array. Reports with dimensions will display a list of metrics for each 'dimension'. For example, the list of visits, pages, time on site will be output for each keyword.

  Example of a report with dimensions metadata ([example URL](https://demo.matomo.cloud/?module=API&method=API.getMetadata&idSite=1&apiModule=Referrers&apiAction=getKeywords&format=xml&token_auth=anonymous)):

  ```
  <?xml version="1.0" encoding="utf-8" ?>
  <result>
  	<row>
  		<category>Acquisition</category>
  		<subcategory>Search Engines &amp; Keywords</subcategory>
  		<name>Keywords (including not defined)</name>
  		<module>Referrers</module>
  		<action>getKeywords</action>
  		<dimension>Keyword</dimension>
  		<documentation>This report shows which keywords users were searching for before they were referred to your website. &lt;br /&gt;&lt;br /&gt; By clicking on a row in the table, you can see the distribution of search engines that were queried for the keyword.&lt;br /&gt;&lt;br /&gt;Note: This report lists most keywords as not defined, because most search engines do not send the exact keyword used on the search engine.</documentation>
  		<dimensions>
  			<Referrers_Keyword>Keyword</Referrers_Keyword>
  			<Referrers_SearchEngine>Search Engine</Referrers_SearchEngine>
  		</dimensions>
  		<metrics>
  			<nb_visits>Visits</nb_visits>
  			<nb_uniq_visitors>Unique visitors</nb_uniq_visitors>
  			<nb_actions>Actions</nb_actions>
  			<nb_users>Users</nb_users>
  		</metrics>
  		<metricsDocumentation>
  			<nb_visits>If a visitor comes to your website for the first time or if they visit a page more than 30 minutes after their last page view, this will be recorded as a new visit.</nb_visits>
  			<nb_uniq_visitors>The number of unduplicated visitors coming to your website. Every user is only counted once, even if they visit the website multiple times a day.</nb_uniq_visitors>
  			<nb_actions>The number of actions performed by your visitors. Actions can be page views, internal site searches, downloads or outlinks.</nb_actions>
  			<nb_users>The number of users logged in your website. It is the number of unique active users that have a User ID set (via the Tracking code function 'setUserId').</nb_users>
  			<nb_actions_per_visit>The average number of actions (page views, site searches, downloads or outlinks) that were performed during the visits.</nb_actions_per_visit>
  			<avg_time_on_site>The average duration of a visit.</avg_time_on_site>
  			<bounce_rate>The percentage of visits that only had a single pageview. This means, that the visitor left the website directly from the entrance page.</bounce_rate>
  			<conversion_rate>The percentage of visits that triggered a conversion. The conversion rate is calculated using the number of visits that converted at least one goal. Visits converting multiple goals are only counted once in the conversion rate.</conversion_rate>
  		</metricsDocumentation>
  		<processedMetrics>
  			<nb_actions_per_visit>Actions per Visit</nb_actions_per_visit>
  			<avg_time_on_site>Avg. Time on Website</avg_time_on_site>
  			<bounce_rate>Bounce Rate</bounce_rate>
  		</processedMetrics>
  		<metricTypes>
  			<nb_visits>number</nb_visits>
  			<nb_uniq_visitors>number</nb_uniq_visitors>
  			<nb_actions>number</nb_actions>
  			<nb_users>number</nb_users>
  			<nb_actions_per_visit>number</nb_actions_per_visit>
  			<avg_time_on_site>duration_s</avg_time_on_site>
  			<bounce_rate>percent</bounce_rate>
  			<conversion_rate>percent</conversion_rate>
  		</metricTypes>
  		<actionToLoadSubTables>getSearchEnginesFromKeywordId</actionToLoadSubTables>
  		<relatedReports>
  			<row>
  				<name>Combined keywords</name>
  				<module>SearchEngineKeywordsPerformance</module>
  				<action>getKeywords</action>
  			</row>
  		</relatedReports>
  		<metricsGoal>
  			<nb_conversions>Conversions</nb_conversions>
  			<revenue>Revenue</revenue>
  		</metricsGoal>
  		<processedMetricsGoal>
  			<revenue_per_visit>Revenue per Visit</revenue_per_visit>
  		</processedMetricsGoal>
  		<metricTypesGoal>
  			<revenue_per_visit>money</revenue_per_visit>
  			<nb_conversions>number</nb_conversions>
  			<conversion_rate>percent</conversion_rate>
  			<revenue>money</revenue>
  		</metricTypesGoal>
  		<imageGraphUrl>index.php?module=API&amp;method=ImageGraph.get&amp;idSite=1&amp;apiModule=Referrers&amp;apiAction=getKeywords&amp;period=day&amp;date=today</imageGraphUrl>
  		<imageGraphEvolutionUrl>index.php?module=API&amp;method=ImageGraph.get&amp;idSite=1&amp;apiModule=Referrers&amp;apiAction=getKeywords&amp;period=day&amp;date=2026-09-29,2026-10-28</imageGraphEvolutionUrl>
  		<uniqueId>Referrers_getKeywords</uniqueId>
  	</row>
  </result>
  ```

## Static Image Graphs

In the metadata output, the field <imageGraphUrl> is a URL that will generate a static PNG graph plotting data for the requested report. Static PNG graphs are used, for example, in the [Matomo Mobile](https://matomo.org/mobile/) and in [email reports](https://matomo.org/docs/email-reports/). These static image graphs can also be used in any custom dashboard, web page, monitoring page, email, etc. As opposed to the [Matomo Widgets](https://matomo.org/docs/embed-piwik-report/), static image graphs do not require JavaScript or HTML, since the URL returns a PNG image.

In the following examples, to see the URL used to generate the image, right-click on the image and select "view image" to see the full URL.

- Example: Graph Plotting Visits over the Last 30 Days

  ![](https://demo.matomo.cloud/index.php?module=API&method=ImageGraph.get&idSite=1&apiModule=VisitsSummary&apiAction=get&token_auth=anonymous&graphType=evolution&period=day&date=previous30&width=500&height=250)

URL: `index.php?module=API&method=ImageGraph.get&idSite=1&apiModule=VisitsSummary&apiAction=get&token_auth=anonymous&graphType=evolution&period=day&date=previous30&width=500&height=250`

- Example: Horizontal Bar Graph Plotting Browsers for the Current Month

  ![](https://demo.matomo.cloud/index.php?module=API&method=ImageGraph.get&idSite=1&apiModule=DevicesDetection&apiAction=getBrowsers&token_auth=anonymous&graphType=horizontalBar&period=month&date=today&width=500&height=250)

URL: `index.php?module=API&method=ImageGraph.get&idSite=1&apiModule=DevicesDetection&apiAction=getBrowsers&token_auth=anonymous&graphType=horizontalBar&period=month&date=today&width=500&height=250`

- Example: Horizontal Bar Graph Plotting Countries for the Current Month

  ![](https://demo.matomo.cloud/index.php?module=API&method=ImageGraph.get&idSite=1&apiModule=UserCountry&apiAction=getCountry&token_auth=anonymous&graphType=horizontalBar&period=month&date=today&width=500&height=250)

URL: `index.php?module=API&method=ImageGraph.get&idSite=1&apiModule=UserCountry&apiAction=getCountry&token_auth=anonymous&graphType=horizontalBar&period=month&date=today&width=500&height=250`

- Example: Graph Plotting User Screen Resolutions for the Current Month

  ![](https://demo.matomo.cloud/index.php?module=API&method=ImageGraph.get&idSite=1&apiModule=Resolution&apiAction=getResolution&token_auth=anonymous&graphType=verticalBar&period=month&date=today&width=500&height=250)

URL: `index.php?module=API&method=ImageGraph.get&idSite=1&apiModule=Resolution&apiAction=getResolution&token_auth=anonymous&graphType=verticalBar&period=month&date=today&width=500&height=250`

- Example: Pie Chart with Custom Colors

  ![](https://demo.matomo.cloud/index.php?module=API&method=ImageGraph.get&idSite=1&apiModule=DevicesDetection&apiAction=getOsVersions&token_auth=anonymous&graphType=pie&period=month&date=today&width=500&height=250&columns=nb_visits&colors=FFFF00,00FF00,FF0000,0000FF,555555,C3590D)

URL: `index.php?module=API&method=ImageGraph.get&idSite=62&apiModule=DevicesDetection&apiAction=getOsVersions&token_auth=anonymous&graphType=pie&period=month&date=today&width=500&height=250&columns=nb_visits&colors=FFFF00,00FF00,FF0000,0000FF,555555,C3590D`

- Example: Line chart of Custom Variables names and values, filtered to show only custom variable containing the string "logged"

  ![](https://demo.matomo.cloud/?module=API&method=ImageGraph.get&idSite=1&apiModule=CustomVariables&apiAction=getCustomVariables&token_auth=anonymous&period=day&date=2013-11-11,2013-11-18&flat=1&filter_pattern_recursive=.*logged.*)

URL: `index.php?module=API&method=ImageGraph.get&idSite=62&apiModule=CustomVariables&apiAction=getCustomVariables&token_auth=anonymous&period=day&date=2013-11-11,2013-11-18&flat=1&filter_pattern_recursive=.*logged.*`

The static Graphs API requires the standard Matomo parameters (idSite, date, period, etc.) but also accepts the following parameters:

- **graphType** - defines the type of graph to draw. Accepted values are: '**evolution**' (line graph), '**horizontalBar**' (horizontal bar graph), '**verticalBar**' (vertical bar graph), '**pie**' (2D Pie chart) and '**3dPie**' (3D Pie chart)
- **width** and **height** - define the width and height in pixels of the generated image
- **columns** - by default, the graph will plot the number of visits (nb\_visits). You can specify another metric such as: nb\_actions, nb\_visits\_converted, nb\_uniq\_visitors, etc.
- **colors** - you can specify a comma separated list of hexadecimal colors to use in the graph instead of the default colors, eg. *&colors=FFFF00,00FF00,FF0000*
- **aliasedGraph** - by default, graphs are "smooth" (anti-aliased). If you are generating hundreds of graphs and are concerned with performance, you can set aliasedGraph=0. This will disable anti-aliasing and graphs will be generated faster, but won't look so pretty.
