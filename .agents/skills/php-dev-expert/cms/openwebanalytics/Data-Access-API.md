# Data Access API · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Data-Access-API

---

*Data Access API* provides a way to request and work with your data outside of the OWA reporting interface. The API provides a flexible syntax for describing the exact metrics and dimension that you want included included in a result set as well as any filters/constraints, sorting or formatting desired.

The data access API can be be accessed via the [REST API](REST-API.md) or from within PHP code.

## Getting a Result Set via PHP

Example request:

```
require_once('owa_env.php');
require_once(OWA_DIR.'owa.php');

// boot the framework
$owa = owa::singleton();

$params = array('request_method' => 'GET',
                'module'         => 'base',
                'version'        => 'v1',
                'do'             => 'reports',
                'metrics'        => 'visitDuration,bounces,repeatVisitors,newVisitors,visits,pageViews',
                'dimensions'     => 'date,browserType',
                'constraints'    => 'browserType==Firefox 3.5',
                'startDate'      => '20100312',
                'endDate'        => '20100331',
                'sort'           => 'date-,browserType',
                'limit'          => 10,
                'siteId'         => 'yoursiteid'
               );

$result_set = \OWA\Core\CoreAPI::executeApiCommand($params);
```

## Getting a Result Set via REST

Example request:

```
GET http://yourdomain/owa/api/?
owa_apiKey=b6b9c9b9016d2bsr3b9b52e22eba06a3
&owa_signature=ds78f7fd9gfs9g67a7987gd89g7sd89f7d8s9g7d89g7d89g7da89g6ds89g7sd89gfd89ga798g7ds89g68df9sg76dfg6asdfsfg
&owa_module=base
&owa_version=v1
&owa_do=reports
&owa_metrics=visitDuration,bounces,repeatVisitors,newVisitors,visits,pageViews
&owa_dimensions=date,browserType
&owa_constraints=browserType%3d%3dFirefox%203.5
&owa_startDate=20100312
&owa_endDate=20100331
&owa_limit=10
&owa_siteId=your_site_id
```

See the [REST API](REST-API.md) page for more info on how to construct the request.

## Request Properties

OWA makes a number of request properties available for you to specify the exact result set you wish to receive.

### Metrics

*REST:* `owa_metrics=visitDuration,bounces,repeatVisitors,newVisitors,visits,pageViews`

*PHP:* `'metrics' => 'visitDuration,bounces,repeatVisitors,newVisitors,visits,pageViews'`

*Required.*

Metrics are aggregate statistics that represent some kind of user activity on web site or application. Metrics can be things like visits, page views, event custom actions.

You may retrieve multiple metric in the same request as long as they represent a valid combination. To request ore thn one metric just separate the metrics names by comma.

See [Metrics & Dimensions](Metrics-_26-Dimensions.md) for a list of supported Metrics.

### Dimensions

*REST:* `owa_dimensions=date,browserType`

*PHP:* `'dimensions' => 'date,browserType'`

*Optional.*

[Dimensions](Metrics-_26-Dimensions.md) are data elements that describe some aspect of user activity on your web site or application. Dimensions are useful in result sets because they allow you to segment or breakdown aggregate metrics into more detail. For example instead of asking for the total number of visitors to your site, adding a dimension like 'country' would allow you to retrieve the page view metric for each city that your visitors arrived from.

You can add more that one dimension to a request by separating the dimension names with commas.

See [Metrics & Dimensions](Metrics-_26-Dimensions.md) for a list of supported Dimensions.

### startDate

*REST:* `owa_startDate=20100310`

*PHP:* `'startDate' => '20100310'`

*Required.*

All getResultSet requests require either the use of the `period` param, `startDate` and `endDate`, or `startTime` and `endTime`.

The start date format is YYYYMMDD - the numerical concatenation of a four digit year value, two digit month, and two digit day.

Start dates may occur in the future but will likely cause your request to return no data.

### endDate

*REST:* `owa_endDate=20100320`

*PHP:* `'endDate' => '20100320'`

*Required.*

All getResultSet requests require either the use of the `period` param, `startDate` and `endDate`, or `startTime` and `endTime`.

The end date format is YYYYMMDD - the numerical concatenation of a four digit year value, two digit month, and two digit day.

End dates must either be the same as or occur later than the start date.

### Constraints

*REST:* `owa_constraints=browserType%3d%3dFirefox%203.5`

*PHP:* `'constraints' => 'browserType==Firefox 3.5'`

*Optional.*

Constraints can be placed on your request in order to return results ''where'' particular sets of conditions are met.

Constraints take the form of:

- ''name'' - the name of the metric or dimension that you wish to constrain the request by.
- ''operator'' - used to define the type of constraint
- ''expression'' - value or values that a constraint must evaluate to.

Example Operators:

- Operator: **==**

  - Description: equals
  - URL Encoded Form: %3D%3D
  - Example that return results where the city is Brooklyn: `constraints=city%3D%3Dbrooklyn`
- Operator: **!=**

  - Description: does not equal
  - URL Encoded Form: !%3D
  - Example that returns results where the city is not Brooklyn: `constraints=city!%3Dbrooklyn`
- Operator: **>**

  - Description: greater than
  - URL Encoded Form: %3E
- Operator: **<**

  - Description: less than
  - URL Encoded Form: %3C
- Operator: **>=**

  - Description: greater than or equal to
  - URL Encoded Form: %3E%3D
- Operator: **<=**

  - Description: less than or equal to
  - URL Encoded Form: %3C%3D
- Operator: **=~**

  - Description: contains a match for a regular expression
  - URL Encoded Form: %3D~
  - Example that returns results where the city starts with "New": `constraints=city%3D~%5ENew`  (%5E is the URL encoded from of the ^ character that anchors a pattern to the beginning of the string.)
- Operator: **!~**

  - Description: does not contain a match for a regular expression
  - URL Encoded Form:
  - Example that returns results where the city does not start with "New": `constraints=city!~%5ENew`
- Operator: **=@**

  - Description: contains substring
  - URL Encoded Form: %3D@
  - Example that returns results where the city contains "York": `constraints=city%3D@York`
- Operator: **!@**

  - Description: Does not contain substring
  - URL Encoded Form:
  - Example that returns results where the city does not contain "York": `constraints=city!@York`

### Sort

*REST:* `owa_sort=date-,browserType`

*PHP:* `'sort' => 'date-,browserType'`

*Optional.*

Specify the dimensions you wish to sort by. Sorting occurs in the order specified. Appending a "-" operator to the end of the dimension will sort by that dimension descending.

### Format

The REST API returns results in standard JSON format.

### Segment

*REST:* `owa_segment=id::1`

*Optional.*

The segment that you wish to apply to the result set before it is returns and metrics are calculated. Segments can be referred to by "id" or assembled dynamically using the "dynamic" keyword.

Segments referred to by id should be prefixed with the string `id::`. Id values are obtained when assembling and saving a segment through the segment builder GUI.

Dynamic segments should be prefixed with the string `dynamic::` and can contain a series of dimension constraints. These constraints take the same syntax as normal constraints. Dynamic segments can only be comprised of constraints on dimensions. Constraints on metrics are not allowed in segments.

## Result Set Properties

Result sets contain a number of different parts or sections

### Aggregates

This section contains aggregate metrics.

### Result Rows

This section contains rows of dimensional data. This section will be empty if no dimensions were specified as part of the request.

### timePeriod

This section contains information about the time period requested.

### resultsPerPage

This property contains the number of results per page requested.

### resultsTotal

The number of rows the query returned for this page. It is **not** a grand total
across all pages — nothing counts the full set — and it is what `total_pages` and
the `more` flag are derived from. In the serialized result set it appears as
`count`.

### resultsReturned

The number of result rows in this response.

### Labels

This section contains the labels of the metrics and dimensions requested.

### Errors

This section contains any errors encountered during the creation of the result set. Request syntax errors appear in this sections.
