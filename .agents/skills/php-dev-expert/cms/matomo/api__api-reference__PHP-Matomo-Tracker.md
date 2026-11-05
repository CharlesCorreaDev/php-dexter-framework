# MatomoTracker - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/api-reference/PHP-Matomo-Tracker

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

#### MatomoTracker

- [Properties](#properties)
  - [$URL](#url "<code>$URL</code>")
  - [$DEBUG\_APPEND\_URL](#debug_append_url "<code>$DEBUG_APPEND_URL</code>")
  - [$ecommerceItems](#ecommerceitems "<code>$ecommerceItems</code>")
  - [$attributionInfo](#attributioninfo "<code>$attributionInfo</code>")
  - [$eventCustomVar](#eventcustomvar "<code>$eventCustomVar</code>")
  - [$forcedDatetime](#forceddatetime "<code>$forcedDatetime</code>")
  - [$forcedNewVisit](#forcednewvisit "<code>$forcedNewVisit</code>")
  - [$networkTime](#networktime "<code>$networkTime</code>")
  - [$serverTime](#servertime "<code>$serverTime</code>")
  - [$transferTime](#transfertime "<code>$transferTime</code>")
  - [$domProcessingTime](#domprocessingtime "<code>$domProcessingTime</code>")
  - [$domCompletionTime](#domcompletiontime "<code>$domCompletionTime</code>")
  - [$onLoadTime](#onloadtime "<code>$onLoadTime</code>")
  - [$pageCustomVar](#pagecustomvar "<code>$pageCustomVar</code>")
  - [$ecommerceView](#ecommerceview "<code>$ecommerceView</code>")
  - [$customParameters](#customparameters "<code>$customParameters</code>")
  - [$debugParameters](#debugparameters "<code>$debugParameters</code>")
  - [$customDimensions](#customdimensions "<code>$customDimensions</code>")
  - [$customData](#customdata "<code>$customData</code>")
  - [$hasCookies](#hascookies "<code>$hasCookies</code>")
  - [$token\_auth](#token_auth "<code>$token_auth</code>")
  - [$userAgent](#useragent "<code>$userAgent</code>")
  - [$country](#country "<code>$country</code>")
  - [$region](#region "<code>$region</code>")
  - [$city](#city "<code>$city</code>")
  - [$lat](#lat "<code>$lat</code>")
  - [$long](#long "<code>$long</code>")
  - [$width](#width "<code>$width</code>")
  - [$height](#height "<code>$height</code>")
  - [$plugins](#plugins "<code>$plugins</code>")
  - [$localHour](#localhour "<code>$localHour</code>")
  - [$localMinute](#localminute "<code>$localMinute</code>")
  - [$localSecond](#localsecond "<code>$localSecond</code>")
  - [$idPageview](#idpageview "<code>$idPageview</code>")
  - [$idPageviewSetManually](#idpageviewsetmanually "<code>$idPageviewSetManually</code>")
  - [$idSite](#idsite "<code>$idSite</code>")
  - [$urlReferrer](#urlreferrer "<code>$urlReferrer</code>")
  - [$pageCharset](#pagecharset "<code>$pageCharset</code>")
  - [$pageUrl](#pageurl "<code>$pageUrl</code>")
  - [$ip](#ip "<code>$ip</code>")
  - [$acceptLanguage](#acceptlanguage "<code>$acceptLanguage</code>")
  - [$clientHints](#clienthints "<code>$clientHints</code>")
  - [$configVisitorCookieTimeout](#configvisitorcookietimeout "<code>$configVisitorCookieTimeout</code>")
  - [$configSessionCookieTimeout](#configsessioncookietimeout "<code>$configSessionCookieTimeout</code>")
  - [$configReferralCookieTimeout](#configreferralcookietimeout "<code>$configReferralCookieTimeout</code>")
  - [$userId](#userid "<code>$userId</code>")
  - [$forcedVisitorId](#forcedvisitorid "<code>$forcedVisitorId</code>")
  - [$cookieVisitorId](#cookievisitorid "<code>$cookieVisitorId</code>")
  - [$randomVisitorId](#randomvisitorid "<code>$randomVisitorId</code>")
  - [$configCookiesDisabled](#configcookiesdisabled "<code>$configCookiesDisabled</code>")
  - [$configCookiePath](#configcookiepath "<code>$configCookiePath</code>")
  - [$configCookieDomain](#configcookiedomain "<code>$configCookieDomain</code>")
  - [$configCookieSameSite](#configcookiesamesite "<code>$configCookieSameSite</code>")
  - [$configCookieSecure](#configcookiesecure "<code>$configCookieSecure</code>")
  - [$configCookieHTTPOnly](#configcookiehttponly "<code>$configCookieHTTPOnly</code>")
  - [$currentTs](#currentts "<code>$currentTs</code>")
  - [$createTs](#createts "<code>$createTs</code>")
  - [$requestTimeout](#requesttimeout "<code>$requestTimeout</code>")
  - [$requestConnectTimeout](#requestconnecttimeout "<code>$requestConnectTimeout</code>")
  - [$doBulkRequests](#dobulkrequests "<code>$doBulkRequests</code>")
  - [$storedTrackingActions](#storedtrackingactions "<code>$storedTrackingActions</code>")
  - [$sendImageResponse](#sendimageresponse "<code>$sendImageResponse</code>")
  - [$exceptionsEnabled](#exceptionsenabled "<code>$exceptionsEnabled</code>")
  - [$outgoingTrackerCookies](#outgoingtrackercookies "<code>$outgoingTrackerCookies</code>")
  - [$incomingTrackerCookies](#incomingtrackercookies "<code>$incomingTrackerCookies</code>")
  - [$visitorCustomVar](#visitorcustomvar "<code>$visitorCustomVar</code>")
  - [$DEBUG\_LAST\_REQUESTED\_URL](#debug_last_requested_url "<code>$DEBUG_LAST_REQUESTED_URL</code>")
- [Methods](#methods)
  - [\_\_construct()](#__construct "<code>__construct()</code>")
  - [setApiUrl()](#setapiurl "<code>setApiUrl()</code>")
  - [setPageCharset()](#setpagecharset "<code>setPageCharset()</code>")
  - [setUrl()](#seturl "<code>setUrl()</code>")
  - [setUrlReferrer()](#seturlreferrer "<code>setUrlReferrer()</code>")
  - [setGenerationTime()](#setgenerationtime "<code>setGenerationTime()</code>")
  - [setPerformanceTimings()](#setperformancetimings "<code>setPerformanceTimings()</code>")
  - [clearPerformanceTimings()](#clearperformancetimings "<code>clearPerformanceTimings()</code>")
  - [setAttributionInfo()](#setattributioninfo "<code>setAttributionInfo()</code>")
  - [setCustomVariable()](#setcustomvariable "<code>setCustomVariable()</code>")
  - [getCustomVariable()](#getcustomvariable "<code>getCustomVariable()</code>")
  - [clearCustomVariables()](#clearcustomvariables "<code>clearCustomVariables()</code>")
  - [setCustomDimension()](#setcustomdimension "<code>setCustomDimension()</code>")
  - [clearCustomDimensions()](#clearcustomdimensions "<code>clearCustomDimensions()</code>")
  - [getCustomDimension()](#getcustomdimension "<code>getCustomDimension()</code>")
  - [setCustomTrackingParameter()](#setcustomtrackingparameter "<code>setCustomTrackingParameter()</code>")
  - [clearCustomTrackingParameters()](#clearcustomtrackingparameters "<code>clearCustomTrackingParameters()</code>")
  - [setNewVisitorId()](#setnewvisitorid "<code>setNewVisitorId()</code>")
  - [setIdSite()](#setidsite "<code>setIdSite()</code>")
  - [setBrowserLanguage()](#setbrowserlanguage "<code>setBrowserLanguage()</code>")
  - [setUserAgent()](#setuseragent "<code>setUserAgent()</code>")
  - [setClientHints()](#setclienthints "<code>setClientHints()</code>")
  - [setCountry()](#setcountry "<code>setCountry()</code>")
  - [setRegion()](#setregion "<code>setRegion()</code>")
  - [setCity()](#setcity "<code>setCity()</code>")
  - [setLatitude()](#setlatitude "<code>setLatitude()</code>")
  - [setLongitude()](#setlongitude "<code>setLongitude()</code>")
  - [enableBulkTracking()](#enablebulktracking "<code>enableBulkTracking()</code>")
  - [disableBulkTracking()](#disablebulktracking "<code>disableBulkTracking()</code>")
  - [enableCookies()](#enablecookies "<code>enableCookies()</code>")
  - [disableSendImageResponse()](#disablesendimageresponse "<code>disableSendImageResponse()</code>")
  - [doTrackPageView()](#dotrackpageview "<code>doTrackPageView()</code>")
  - [doTrackPageViewIfAIBot()](#dotrackpageviewifaibot "<code>doTrackPageViewIfAIBot()</code>")
  - [setPageviewId()](#setpageviewid "<code>setPageviewId()</code>")
  - [getPageviewId()](#getpageviewid "<code>getPageviewId()</code>")
  - [doTrackEvent()](#dotrackevent "<code>doTrackEvent()</code>")
  - [doTrackContentImpression()](#dotrackcontentimpression "<code>doTrackContentImpression()</code>")
  - [doTrackContentInteraction()](#dotrackcontentinteraction "<code>doTrackContentInteraction()</code>")
  - [doTrackSiteSearch()](#dotracksitesearch "<code>doTrackSiteSearch()</code>")
  - [doTrackGoal()](#dotrackgoal "<code>doTrackGoal()</code>")
  - [doTrackAction()](#dotrackaction "<code>doTrackAction()</code>")
  - [addEcommerceItem()](#addecommerceitem "<code>addEcommerceItem()</code>")
  - [doTrackEcommerceCartUpdate()](#dotrackecommercecartupdate "<code>doTrackEcommerceCartUpdate()</code>")
  - [doBulkTrack()](#dobulktrack "<code>doBulkTrack()</code>")
  - [doTrackEcommerceOrder()](#dotrackecommerceorder "<code>doTrackEcommerceOrder()</code>")
  - [doTrackPhpThrowable()](#dotrackphpthrowable "<code>doTrackPhpThrowable()</code>")
  - [doTrackCrash()](#dotrackcrash "<code>doTrackCrash()</code>")
  - [doPing()](#doping "<code>doPing()</code>")
  - [setEcommerceView()](#setecommerceview "<code>setEcommerceView()</code>")
  - [getUrlTrackAIBot()](#geturltrackaibot "<code>getUrlTrackAIBot()</code>")
  - [getUrlTrackPageView()](#geturltrackpageview "<code>getUrlTrackPageView()</code>")
  - [getUrlTrackEvent()](#geturltrackevent "<code>getUrlTrackEvent()</code>")
  - [getUrlTrackContentImpression()](#geturltrackcontentimpression "<code>getUrlTrackContentImpression()</code>")
  - [getUrlTrackContentInteraction()](#geturltrackcontentinteraction "<code>getUrlTrackContentInteraction()</code>")
  - [getUrlTrackSiteSearch()](#geturltracksitesearch "<code>getUrlTrackSiteSearch()</code>")
  - [getUrlTrackGoal()](#geturltrackgoal "<code>getUrlTrackGoal()</code>")
  - [getUrlTrackAction()](#geturltrackaction "<code>getUrlTrackAction()</code>")
  - [getUrlTrackCrash()](#geturltrackcrash "<code>getUrlTrackCrash()</code>")
  - [setForceVisitDateTime()](#setforcevisitdatetime "<code>setForceVisitDateTime()</code>")
  - [setForceNewVisit()](#setforcenewvisit "<code>setForceNewVisit()</code>")
  - [setIp()](#setip "<code>setIp()</code>")
  - [setUserId()](#setuserid "<code>setUserId()</code>")
  - [getUserIdHashed()](#getuseridhashed "<code>getUserIdHashed()</code>")
  - [setVisitorId()](#setvisitorid "<code>setVisitorId()</code>")
  - [getVisitorId()](#getvisitorid "<code>getVisitorId()</code>")
  - [getUserAgent()](#getuseragent "<code>getUserAgent()</code>")
  - [getIp()](#getip "<code>getIp()</code>")
  - [getUserId()](#getuserid "<code>getUserId()</code>")
  - [deleteCookies()](#deletecookies "<code>deleteCookies()</code>")
  - [getAttributionInfo()](#getattributioninfo "<code>getAttributionInfo()</code>")
  - [setTokenAuth()](#settokenauth "<code>setTokenAuth()</code>")
  - [setLocalTime()](#setlocaltime "<code>setLocalTime()</code>")
  - [setResolution()](#setresolution "<code>setResolution()</code>")
  - [setBrowserHasCookies()](#setbrowserhascookies "<code>setBrowserHasCookies()</code>")
  - [setDebugStringAppend()](#setdebugstringappend "<code>setDebugStringAppend()</code>")
  - [setPlugins()](#setplugins "<code>setPlugins()</code>")
  - [disableCookieSupport()](#disablecookiesupport "<code>disableCookieSupport()</code>")
  - [getRequestTimeout()](#getrequesttimeout "<code>getRequestTimeout()</code>")
  - [setRequestTimeout()](#setrequesttimeout "<code>setRequestTimeout()</code>")
  - [getRequestConnectTimeout()](#getrequestconnecttimeout "<code>getRequestConnectTimeout()</code>")
  - [setRequestConnectTimeout()](#setrequestconnecttimeout "<code>setRequestConnectTimeout()</code>")
  - [setRequestMethodNonBulk()](#setrequestmethodnonbulk "<code>setRequestMethodNonBulk()</code>")
  - [setProxy()](#setproxy "<code>setProxy()</code>")
  - [setCurlOptions()](#setcurloptions "<code>setCurlOptions()</code>")
  - [setExceptionsEnabled()](#setexceptionsenabled "<code>setExceptionsEnabled()</code>")
  - [setOutgoingTrackerCookie()](#setoutgoingtrackercookie "<code>setOutgoingTrackerCookie()</code>")
  - [getIncomingTrackerCookie()](#getincomingtrackercookie "<code>getIncomingTrackerCookie()</code>")
  - [isUserAgentAIBot()](#isuseragentaibot "<code>isUserAgentAIBot()</code>")

# MatomoTracker

MatomoTracker implements the Matomo Tracking Web API.

For more information, see: https://github.com/matomo-org/matomo-php-tracker/

## Properties

This class defines the following properties:

- [`$URL`](#%24url) — Matomo base URL, for example http://example.org/matomo/ Must be set before using the class by calling MatomoTracker::$URL = 'http://yourwebsite.org/matomo/';
- [`$DEBUG_APPEND_URL`](#%24debug_append_url)
- [`$ecommerceItems`](#%24ecommerceitems)
- [`$attributionInfo`](#%24attributioninfo)
- [`$eventCustomVar`](#%24eventcustomvar)
- [`$forcedDatetime`](#%24forceddatetime)
- [`$forcedNewVisit`](#%24forcednewvisit)
- [`$networkTime`](#%24networktime)
- [`$serverTime`](#%24servertime)
- [`$transferTime`](#%24transfertime)
- [`$domProcessingTime`](#%24domprocessingtime)
- [`$domCompletionTime`](#%24domcompletiontime)
- [`$onLoadTime`](#%24onloadtime)
- [`$pageCustomVar`](#%24pagecustomvar)
- [`$ecommerceView`](#%24ecommerceview)
- [`$customParameters`](#%24customparameters)
- [`$debugParameters`](#%24debugparameters) — Raw tracking parameters set via setDebugTrackingParameter().
- [`$customDimensions`](#%24custimensions)
- [`$customData`](#%24custata)
- [`$hasCookies`](#%24hascookies)
- [`$token_auth`](#%24token_auth)
- [`$userAgent`](#%24useragent)
- [`$country`](#%24country)
- [`$region`](#%24region)
- [`$city`](#%24city)
- [`$lat`](#%24lat)
- [`$long`](#%24long)
- [`$width`](#%24width)
- [`$height`](#%24height)
- [`$plugins`](#%24plugins)
- [`$localHour`](#%24localhour)
- [`$localMinute`](#%24localminute)
- [`$localSecond`](#%24localsecond)
- [`$idPageview`](#%24idpageview)
- [`$idPageviewSetManually`](#%24idpageviewsetmanually)
- [`$idSite`](#%24idsite)
- [`$urlReferrer`](#%24urlreferrer)
- [`$pageCharset`](#%24pagecharset)
- [`$pageUrl`](#%24pageurl)
- [`$ip`](#%24ip)
- [`$acceptLanguage`](#%24acceptlanguage)
- [`$clientHints`](#%24clienthints)
- [`$configVisitorCookieTimeout`](#%24configvisitorcookietimeout)
- [`$configSessionCookieTimeout`](#%24configsessioncookietimeout)
- [`$configReferralCookieTimeout`](#%24configreferralcookietimeout)
- [`$userId`](#%24userid)
- [`$forcedVisitorId`](#%24forcedvisitorid)
- [`$cookieVisitorId`](#%24cookievisitorid)
- [`$randomVisitorId`](#%24randomvisitorid)
- [`$configCookiesDisabled`](#%24configcookiesdisabled)
- [`$configCookiePath`](#%24configcookiepath)
- [`$configCookieDomain`](#%24configcookiedomain)
- [`$configCookieSameSite`](#%24configcookiesamesite)
- [`$configCookieSecure`](#%24configcookiesecure)
- [`$configCookieHTTPOnly`](#%24configcookiehttponly)
- [`$currentTs`](#%24currentts)
- [`$createTs`](#%24createts)
- [`$requestTimeout`](#%24requesttimeout)
- [`$requestConnectTimeout`](#%24requestconnecttimeout)
- [`$doBulkRequests`](#%24dobulkrequests)
- [`$storedTrackingActions`](#%24storedtrackingactions)
- [`$sendImageResponse`](#%24sendimageresponse)
- [`$exceptionsEnabled`](#%24exceptionsenabled)
- [`$outgoingTrackerCookies`](#%24outgoingtrackercookies)
- [`$incomingTrackerCookies`](#%24incomingtrackercookies)
- [`$visitorCustomVar`](#%24visitorcustomvar)
- [`$DEBUG_LAST_REQUESTED_URL`](#%24debug_last_requested_url) — Used in tests to output useful error messages.

### `$URL`

Matomo base URL, for example http://example.org/matomo/
Must be set before using the class by calling
MatomoTracker::$URL = 'http://yourwebsite.org/matomo/';

#### Signature

- It is a `string` value.

### `$DEBUG_APPEND_URL`

#### Signature

- Its type is not specified.

### `$ecommerceItems`

#### Signature

- It is a `list&lt;array{0:` value.

### `$attributionInfo`

#### Signature

- It can be one of the following types:
  - `array&lt;int`
  - `string,`

### `$eventCustomVar`

#### Signature

- It is a `array&lt;int,` value.

### `$forcedDatetime`

#### Signature

- Its type is not specified.

### `$forcedNewVisit`

#### Signature

- Its type is not specified.

### `$networkTime`

#### Signature

- Its type is not specified.

### `$serverTime`

#### Signature

- Its type is not specified.

### `$transferTime`

#### Signature

- Its type is not specified.

### `$domProcessingTime`

#### Signature

- Its type is not specified.

### `$domCompletionTime`

#### Signature

- Its type is not specified.

### `$onLoadTime`

#### Signature

- Its type is not specified.

### `$pageCustomVar`

#### Signature

- It is a `array&lt;int,` value.

### `$ecommerceView`

#### Signature

- It is a `array&lt;string,` value.

### `$customParameters`

#### Signature

- It is a `array&lt;string,` value.

### `$debugParameters`

Raw tracking parameters set via setDebugTrackingParameter(). Their names and values are
URL-encoded and appended after the built-in parameters, overriding any of the same name.

#### Signature

- It is a `array&lt;string,` value.

### `$customDimensions`

#### Signature

- It is a `array&lt;string,` value.

### `$customData`

#### Signature

- Its type is not specified.

### `$hasCookies`

#### Signature

- Its type is not specified.

### `$token_auth`

#### Signature

- Its type is not specified.

### `$userAgent`

#### Signature

- Its type is not specified.

### `$country`

#### Signature

- Its type is not specified.

### `$region`

#### Signature

- Its type is not specified.

### `$city`

#### Signature

- Its type is not specified.

### `$lat`

#### Signature

- Its type is not specified.

### `$long`

#### Signature

- Its type is not specified.

### `$width`

#### Signature

- Its type is not specified.

### `$height`

#### Signature

- Its type is not specified.

### `$plugins`

#### Signature

- Its type is not specified.

### `$localHour`

#### Signature

- Its type is not specified.

### `$localMinute`

#### Signature

- Its type is not specified.

### `$localSecond`

#### Signature

- Its type is not specified.

### `$idPageview`

#### Signature

- Its type is not specified.

### `$idPageviewSetManually`

#### Signature

- Its type is not specified.

### `$idSite`

#### Signature

- Its type is not specified.

### `$urlReferrer`

#### Signature

- Its type is not specified.

### `$pageCharset`

#### Signature

- Its type is not specified.

### `$pageUrl`

#### Signature

- Its type is not specified.

### `$ip`

#### Signature

- Its type is not specified.

### `$acceptLanguage`

#### Signature

- Its type is not specified.

### `$clientHints`

#### Signature

- It is a `array&lt;string,` value.

### `$configVisitorCookieTimeout`

#### Signature

- Its type is not specified.

### `$configSessionCookieTimeout`

#### Signature

- Its type is not specified.

### `$configReferralCookieTimeout`

#### Signature

- Its type is not specified.

### `$userId`

#### Signature

- Its type is not specified.

### `$forcedVisitorId`

#### Signature

- Its type is not specified.

### `$cookieVisitorId`

#### Signature

- Its type is not specified.

### `$randomVisitorId`

#### Signature

- Its type is not specified.

### `$configCookiesDisabled`

#### Signature

- Its type is not specified.

### `$configCookiePath`

#### Signature

- Its type is not specified.

### `$configCookieDomain`

#### Signature

- Its type is not specified.

### `$configCookieSameSite`

#### Signature

- Its type is not specified.

### `$configCookieSecure`

#### Signature

- Its type is not specified.

### `$configCookieHTTPOnly`

#### Signature

- Its type is not specified.

### `$currentTs`

#### Signature

- Its type is not specified.

### `$createTs`

#### Signature

- Its type is not specified.

### `$requestTimeout`

#### Signature

- Its type is not specified.

### `$requestConnectTimeout`

#### Signature

- Its type is not specified.

### `$doBulkRequests`

#### Signature

- Its type is not specified.

### `$storedTrackingActions`

#### Signature

- It is a `list&lt;string&gt;` value.

### `$sendImageResponse`

#### Signature

- Its type is not specified.

### `$exceptionsEnabled`

#### Signature

- Its type is not specified.

### `$outgoingTrackerCookies`

#### Signature

- It is a `array&lt;string,` value.

### `$incomingTrackerCookies`

#### Signature

- It is a `array&lt;string,` value.

### `$visitorCustomVar`

#### Signature

- It is a `array&lt;int,` value.

### `$DEBUG_LAST_REQUESTED_URL`

Used in tests to output useful error messages.

#### Signature

- Its type is not specified.

## Methods

The class defines the following methods:

- [`__construct()`](#__construct) — Builds a MatomoTracker object, used to track visits, pages and Goal conversions for a specific website, by using the Matomo Tracking API.
- [`setApiUrl()`](#setapiurl)
- [`setPageCharset()`](#setpagecharset) — By default, Matomo expects utf-8 encoded values, for example for the page URL parameter values, Page Title, etc.
- [`setUrl()`](#seturl) — Sets the current URL being tracked
- [`setUrlReferrer()`](#seturlreferrer) — Sets the URL referrer used to track Referrers details for new visits.
- [`setGenerationTime()`](#setgenerationtime) — This method is deprecated and does nothing.
- [`setPerformanceTimings()`](#setperformancetimings) — Sets timings for various browser performance metrics.
- [`clearPerformanceTimings()`](#clearperformancetimings) — Clear / reset all previously set performance metrics.
- [`setAttributionInfo()`](#setattributioninfo) — Sets the attribution information to the visit, so that subsequent Goal conversions are properly attributed to the right Referrer URL, timestamp, Campaign Name & Keyword.
- [`setCustomVariable()`](#setcustomvariable) — Sets Visit Custom Variable.
- [`getCustomVariable()`](#getcustomvariable) — Returns the currently assigned Custom Variable.
- [`clearCustomVariables()`](#clearcustomvariables) — Clears any Custom Variable that may be have been set.
- [`setCustomDimension()`](#setcustimension) — Sets a specific custom dimension
- [`clearCustomDimensions()`](#clearcustimensions) — Clears all previously set custom dimensions
- [`getCustomDimension()`](#getcustimension) — Returns the value of the custom dimension with the given id
- [`setCustomTrackingParameter()`](#setcustomtrackingparameter) — Sets a custom tracking parameter.
- [`clearCustomTrackingParameters()`](#clearcustomtrackingparameters) — Clear / reset all previously set custom tracking parameters.
- [`setNewVisitorId()`](#setnewvisitorid) — Sets the current visitor ID to a random new one.
- [`setIdSite()`](#setidsite) — Sets the current site ID.
- [`setBrowserLanguage()`](#setbrowserlanguage) — Sets the Browser language.
- [`setUserAgent()`](#setuseragent) — Sets the user agent, used to detect OS and browser.
- [`setClientHints()`](#setclienthints) — Sets the client hints, used to detect OS and browser.
- [`setCountry()`](#setcountry) — Sets the country of the visitor.
- [`setRegion()`](#setregion) — Sets the region of the visitor.
- [`setCity()`](#setcity) — Sets the city of the visitor.
- [`setLatitude()`](#setlatitude) — Sets the latitude of the visitor.
- [`setLongitude()`](#setlongitude) — Sets the longitude of the visitor.
- [`enableBulkTracking()`](#enablebulktracking) — Enables the bulk request feature.
- [`disableBulkTracking()`](#disablebulktracking) — Disables the bulk request feature.
- [`enableCookies()`](#enablecookies) — Enable Cookie Creation - this will cause a first party VisitorId cookie to be set when the VisitorId is set or reset
- [`disableSendImageResponse()`](#disablesendimageresponse) — If image response is disabled Matomo will respond with a HTTP 204 header instead of responding with a gif.
- [`doTrackPageView()`](#dotrackpageview) — Tracks a page view
- [`doTrackPageViewIfAIBot()`](#dotrackpageviewifaibot) — If the current user agent belongs to a known AI bot, tracks a pageview action.
- [`setPageviewId()`](#setpageviewid) — Override PageView id for every use of `doTrackPageView()`.
- [`getPageviewId()`](#getpageviewid) — Returns the PageView id.
- [`doTrackEvent()`](#dotrackevent) — Tracks an event
- [`doTrackContentImpression()`](#dotrackcontentimpression) — Tracks a content impression
- [`doTrackContentInteraction()`](#dotrackcontentinteraction) — Tracks a content interaction.
- [`doTrackSiteSearch()`](#dotracksitesearch) — Tracks an internal Site Search query, and optionally tracks the Search Category, and Search results Count.
- [`doTrackGoal()`](#dotrackgoal) — Records a Goal conversion
- [`doTrackAction()`](#dotrackaction) — Tracks a download or outlink
- [`addEcommerceItem()`](#addecommerceitem) — Adds an item in the Ecommerce order.
- [`doTrackEcommerceCartUpdate()`](#dotrackecommercecartupdate) — Tracks a Cart Update (add item, remove item, update item).
- [`doBulkTrack()`](#dobulktrack) — Sends all stored tracking actions at once.
- [`doTrackEcommerceOrder()`](#dotrackecommerceorder) — Tracks an Ecommerce order.
- [`doTrackPhpThrowable()`](#dotrackphpthrowable) — Tracks a PHP Throwable a crash (requires CrashAnalytics to be enabled in the target Matomo)
- [`doTrackCrash()`](#dotrackcrash) — Track a crash (requires CrashAnalytics to be enabled in the target Matomo)
- [`doPing()`](#doping) — Sends a ping request.
- [`setEcommerceView()`](#setecommerceview) — Sets the current page view as an item (product) page view, or an Ecommerce Category page view.
- [`getUrlTrackAIBot()`](#geturltrackaibot) — Builds a URL to track a request from an AI bot.
- [`getUrlTrackPageView()`](#geturltrackpageview) — Builds URL to track a page view.
- [`getUrlTrackEvent()`](#geturltrackevent) — Builds URL to track a custom event.
- [`getUrlTrackContentImpression()`](#geturltrackcontentimpression) — Builds URL to track a content impression.
- [`getUrlTrackContentInteraction()`](#geturltrackcontentinteraction) — Builds URL to track a content interaction.
- [`getUrlTrackSiteSearch()`](#geturltracksitesearch) — Builds URL to track a site search.
- [`getUrlTrackGoal()`](#geturltrackgoal) — Builds URL to track a goal with idGoal and revenue.
- [`getUrlTrackAction()`](#geturltrackaction) — Builds URL to track a new action.
- [`getUrlTrackCrash()`](#geturltrackcrash) — Builds URL to track a crash.
- [`setForceVisitDateTime()`](#setforcevisitdatetime) — Overrides server date and time for the tracking requests.
- [`setForceNewVisit()`](#setforcenewvisit) — Forces Matomo to create a new visit for the tracking request.
- [`setIp()`](#setip) — Overrides IP address
- [`setUserId()`](#setuserid) — Force the action to be recorded for a specific User.
- [`getUserIdHashed()`](#getuseridhashed) — Hash function used internally by Matomo to hash a User ID into the Visitor ID.
- [`setVisitorId()`](#setvisitorid) — Forces the requests to be recorded for the specified Visitor ID.
- [`getVisitorId()`](#getvisitorid) — If the user initiating the request has the Matomo first party cookie, this function will try and return the ID parsed from this first party cookie (found in $\_COOKIE).
- [`getUserAgent()`](#getuseragent) — Returns the currently set user agent.
- [`getIp()`](#getip) — Returns the currently set IP address.
- [`getUserId()`](#getuserid) — Returns the User ID string, which may have been set via: $v->setUserId('username@example.org');
- [`deleteCookies()`](#deletecookies) — Deletes all first party cookies from the client
- [`getAttributionInfo()`](#getattributioninfo) — Returns the currently assigned Attribution Information stored in a first party cookie.
- [`setTokenAuth()`](#settokenauth) — Some Tracking API functionality requires express authentication, using either the Super User token\_auth, or a user with 'admin' access to the website.
- [`setLocalTime()`](#setlocaltime) — Sets local visitor time
- [`setResolution()`](#setresolution) — Sets user resolution width and height.
- [`setBrowserHasCookies()`](#setbrowserhascookies) ash; Sets if the browser supports cookies This is reported in "List of plugins" report in Matomo.
- [`setDebugStringAppend()`](#setdebugstringappend) — Will append a custom string at the end of the Tracking request.
- [`setPlugins()`](#setplugins) — Sets visitor browser supported plugins
- [`disableCookieSupport()`](#disablecookiesupport) — By default, MatomoTracker will read first party cookies from the request and write updated cookies in the response (using setrawcookie).
- [`getRequestTimeout()`](#getrequesttimeout) — Returns the maximum number of seconds the tracker will spend waiting for a response from Matomo.
- [`setRequestTimeout()`](#setrequesttimeout) — Sets the maximum number of seconds that the tracker will spend waiting for a response from Matomo.
- [`getRequestConnectTimeout()`](#getrequestconnecttimeout) — Returns the maximum number of seconds the tracker will spend trying to connect to Matomo.
- [`setRequestConnectTimeout()`](#setrequestconnecttimeout) — Sets the maximum number of seconds that the tracker will spend tryint to connect to Matomo.
- [`setRequestMethodNonBulk()`](#setrequestmethodnonbulk) — Sets the request method to POST, which is recommended when using setTokenAuth() to prevent the token from being recorded in server logs.
- [`setProxy()`](#setproxy) — If a proxy is needed to look up the address of the Matomo site, set it with this
- [`setCurlOptions()`](#setcurloptions) — Sets additional cURL options (a map of CURLOPT\_\* constant => value) for the tracking requests.
- [`setExceptionsEnabled()`](#setexceptionsenabled) — Controls how failed tracking requests are handled.
- [`setOutgoingTrackerCookie()`](#setoutgoingtrackercookie) — Sets a cookie to be sent to the tracking server.
- [`getIncomingTrackerCookie()`](#getincomingtrackercookie) — Gets a cookie which was set by the tracking server.
- [`isUserAgentAIBot()`](#isuseragentaibot) — Returns true if the given user agent belongs to a known AI bot.

### `__construct()`

Builds a MatomoTracker object, used to track visits, pages and Goal conversions
for a specific website, by using the Matomo Tracking API.

#### Signature

- It accepts the following parameter(s):
  - `$idSite` (`int`) —
    Id site to be tracked
  - `$apiUrl` (`string`) —
    "http://example.org/matomo/" or "http://matomo.example.org/" If set, will overwrite MatomoTracker::$URL

### `setApiUrl()`

#### Signature

- It accepts the following parameter(s):

  - `$url` (`string`) —
- It returns a `void` value.

### `setPageCharset()`

By default, Matomo expects utf-8 encoded values, for example
for the page URL parameter values, Page Title, etc.

It is recommended to only send UTF-8 data to Matomo.
If required though, you can also specify another charset using this function.

#### Signature

- It accepts the following parameter(s):

  - `$charset` (`string`) —
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setUrl()`

Sets the current URL being tracked

#### Signature

- It accepts the following parameter(s):
  - `$url` (`string`) —
    Raw URL (not URL encoded)
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setUrlReferrer()`

Sets the URL referrer used to track Referrers details for new visits.

#### Signature

- It accepts the following parameter(s):
  - `$url` (`string`|`null`) —
    Raw URL (not URL encoded), or null to unset the referrer
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setGenerationTime()`

This method is deprecated and does nothing. It used to set the time that it took to generate the document on the server side.

#### See Also

- `setPerformanceTimings`

#### Signature

- It accepts the following parameter(s):
  - `$timeMs` (`int`) —
    Generation time in ms
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setPerformanceTimings()`

Sets timings for various browser performance metrics.

#### See Also

- `https://developer.mozilla.org/en-US/docs/Web/API/PerformanceTiming`

#### Signature

- It accepts the following parameter(s):
  - `$network` (`int`|`null`) —
    Network time in ms (connectEnd – fetchStart)
  - `$server` (`int`|`null`) —
    Server time in ms (responseStart – requestStart)
  - `$transfer` (`int`|`null`) —
    Transfer time in ms (responseEnd – responseStart)
  - `$domProcessing` (`int`|`null`) —
    DOM Processing to Interactive time in ms (domInteractive – domLoading)
  - `$domCompletion` (`int`|`null`) —
    DOM Interactive to Complete time in ms (domComplete – domInteractive)
  - `$onload` (`int`|`null`) —
    Onload time in ms (loadEventEnd – loadEventStart)
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `clearPerformanceTimings()`

Clear / reset all previously set performance metrics.

#### Signature

- It returns a `void` value.

### `setAttributionInfo()`

Sets the attribution information to the visit, so that subsequent Goal conversions are
properly attributed to the right Referrer URL, timestamp, Campaign Name & Keyword.

This must be a JSON encoded string that would typically be fetched from the JS API:
matomoTracker.getAttributionInfo() and that you have JSON encoded via JSON2.stringify()

If you call enableCookies() then these referral attribution values will be set
to the 'ref' first party cookie storing referral information.

#### See Also

- `function` — getAttributionInfo() in https://github.com/matomo-org/matomo/blob/master/js/matomo.js

#### Signature

- It accepts the following parameter(s):
  - `$jsonEncoded` (`string`) —
    JSON encoded array containing Attribution info
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.
- It throws one of the following exceptions:
  - [`Exception`](http://php.net/class.Exception)

### `setCustomVariable()`

Sets Visit Custom Variable.

See https://matomo.org/docs/custom-variables/

#### Signature

- It accepts the following parameter(s):
  - `$id` (`int`) —
    Custom variable slot ID from 1-5
  - `$name` (`string`) —
    Custom variable name
  - `$value` (`string`) —
    Custom variable value
  - `$scope` (`string`) —
    Custom variable scope. Possible values: visit, page, event
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.
- It throws one of the following exceptions:
  - [`Exception`](http://php.net/class.Exception)

### `getCustomVariable()`

Returns the currently assigned Custom Variable.

If scope is 'visit', it will attempt to read the value set in the first party cookie created by Matomo Tracker
($\_COOKIE array).

#### See Also

- `matomo.js` — getCustomVariable()

#### Signature

- It accepts the following parameter(s):

  - `$id` (`int`) —
    Custom Variable integer index to fetch from cookie. Should be a value from 1 to 5
  - `$scope` (`string`) —
    Custom variable scope. Possible values: visit, page, event
- *Returns:* `array|false` —
  string, 1: string}|false An array with this format:
  array( 0 => CustomVariableName, 1 => CustomVariableValue ) or false
- It throws one of the following exceptions:
  - [`Exception`](http://php.net/class.Exception)

### `clearCustomVariables()`

Clears any Custom Variable that may be have been set.

This can be useful when you have enabled bulk requests,
and you wish to clear Custom Variables of 'visit' scope.

#### Signature

- It returns a `void` value.

### `setCustomDimension()`

Sets a specific custom dimension

#### Signature

- It accepts the following parameter(s):
  - `$id` (`int`) —
    id of custom dimension
  - `$value` (`string`) —
    value for custom dimension
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `clearCustomDimensions()`

Clears all previously set custom dimensions

#### Signature

- It returns a `void` value.

### `getCustomDimension()`

Returns the value of the custom dimension with the given id

#### Signature

- It accepts the following parameter(s):

  - `$id` (`int`) —
    id of custom dimension
- *Returns:* `string`|`null` —

### `setCustomTrackingParameter()`

Sets a custom tracking parameter. This is useful if you need to send any tracking parameters for a 3rd party
plugin that is not shipped with Matomo itself. Please note that custom parameters are cleared after each
tracking request.

#### Signature

- It accepts the following parameter(s):
  - `$trackingApiParameter` (`string`) —
    The name of the tracking API parameter, eg 'bw\_bytes'
  - `$value` (`string|array`) —
    Tracking parameter value that shall be sent for this tracking parameter. An array value is serialized the same way as the Matomo JS tracker does it (via http\_build\_query).
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.
- It throws one of the following exceptions:
  - [`Exception`](http://php.net/class.Exception)

### `clearCustomTrackingParameters()`

Clear / reset all previously set custom tracking parameters.

#### Signature

- It returns a `void` value.

### `setNewVisitorId()`

Sets the current visitor ID to a random new one.

#### Signature

- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setIdSite()`

Sets the current site ID.

#### Signature

- It accepts the following parameter(s):

  - `$idSite` (`int`) —
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setBrowserLanguage()`

Sets the Browser language. Used to guess visitor countries when GeoIP is not enabled

#### Signature

- It accepts the following parameter(s):
  - `$acceptLanguage` (`string`) —
    For example "fr-fr"
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setUserAgent()`

Sets the user agent, used to detect OS and browser.

If this function is not called, the User Agent will default to the current user agent.

#### Signature

- It accepts the following parameter(s):

  - `$userAgent` (`string`) —
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setClientHints()`

Sets the client hints, used to detect OS and browser.

If this function is not called, the client hints sent with the current request will be used.

Supported as of Matomo 4.12.0

#### Signature

- It accepts the following parameter(s):
  - `$model` (`string`) —
    Value of the header 'HTTP\_SEC\_CH\_UA\_MODEL'
  - `$platform` (`string`) —
    Value of the header 'HTTP\_SEC\_CH\_UA\_PLATFORM'
  - `$platformVersion` (`string`) —
    Value of the header 'HTTP\_SEC\_CH\_UA\_PLATFORM\_VERSION'
  - `$fullVersionList` (`string|array`) —
    string, version: string}> $fullVersionList Value of header 'HTTP\_SEC\_CH\_UA\_FULL\_VERSION\_LIST' or an array containing all brands with the structure [['brand' => 'Chrome', 'version' => '10.0.2'], ['brand' => '...]
  - `$uaFullVersion` (`string`) —
    Value of the header 'HTTP\_SEC\_CH\_UA\_FULL\_VERSION'
  - `$formFactors` (`string|array`) —
    Value of the header 'HTTP\_SEC\_CH\_UA\_FORM\_FACTORS' or an array containing all form factors with structure ["Desktop", "XR"]
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setCountry()`

Sets the country of the visitor. If not used, Matomo will try to find the country
using either the visitor's IP address or language.

Allowed only for Admin/Super User, must be used along with setTokenAuth().

#### Signature

- It accepts the following parameter(s):

  - `$country` (`string`) —
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setRegion()`

Sets the region of the visitor. If not used, Matomo may try to find the region
using the visitor's IP address (if configured to do so).

Allowed only for Admin/Super User, must be used along with setTokenAuth().

#### Signature

- It accepts the following parameter(s):

  - `$region` (`string`) —
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setCity()`

Sets the city of the visitor. If not used, Matomo may try to find the city
using the visitor's IP address (if configured to do so).

Allowed only for Admin/Super User, must be used along with setTokenAuth().

#### Signature

- It accepts the following parameter(s):

  - `$city` (`string`) —
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setLatitude()`

Sets the latitude of the visitor. If not used, Matomo may try to find the visitor's
latitude using the visitor's IP address (if configured to do so).

Allowed only for Admin/Super User, must be used along with setTokenAuth().

#### Signature

- It accepts the following parameter(s):

  - `$lat` (`float`) —
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setLongitude()`

Sets the longitude of the visitor. If not used, Matomo may try to find the visitor's
longitude using the visitor's IP address (if configured to do so).

Allowed only for Admin/Super User, must be used along with setTokenAuth().

#### Signature

- It accepts the following parameter(s):

  - `$long` (`float`) —
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `enableBulkTracking()`

Enables the bulk request feature. When used, each tracking action is stored until the
doBulkTrack method is called. This method will send all tracking data at once.

#### Signature

- It returns a `void` value.

### `disableBulkTracking()`

Disables the bulk request feature. Make sure to call `doBulkTrack()` before disabling it if you have stored
tracking actions previously as this method won't be sending any previously stored actions before disabling it.

#### Signature

- It returns a `void` value.

### `enableCookies()`

Enable Cookie Creation - this will cause a first party VisitorId cookie to be set when the VisitorId is set or reset

#### Signature

- It accepts the following parameter(s):
  - `$domain` (`string`) —
    (optional) Set first-party cookie domain. Accepted values: example.com, \*.example.com (same as .example.com) or subdomain.example.com
  - `$path` (`string`) —
    (optional) Set first-party cookie path
  - `$secure` (`bool`) —
    (optional) Set secure flag for cookies
  - `$httpOnly` (`bool`) —
    (optional) Set HTTPOnly flag for cookies
  - `$sameSite` (`string`) —
    (optional) Set SameSite flag for cookies
- It returns a `void` value.

### `disableSendImageResponse()`

If image response is disabled Matomo will respond with a HTTP 204 header instead of responding with a gif.

#### Signature

- It returns a `void` value.

### `doTrackPageView()`

Tracks a page view

#### Signature

- It accepts the following parameter(s):

  - `$documentTitle` (`string`) —
    Page title as it will appear in the Actions > Page titles report
- *Returns:* `string|bool` —
  Response string or true if using bulk requests.

### `doTrackPageViewIfAIBot()`

If the current user agent belongs to a known AI bot, tracks a pageview action.

This method should be used server side to track AI bots that do not execute
JavaScript. If the current user agent is not a known AI bot, nothing is tracked
and null is returned.

#### Signature

- It accepts the following parameter(s):

  - `$httpStatus` (`int`|`null`) —
    the request's HTTP status code, if known.
  - `$responseSizeBytes` (`int`|`null`) —
    the size of the response sent to the AI bot, if known.
  - `$serverTimeMs` (`int`|`null`) —
    the number of milliseconds it took to process the request, if known.
  - `$source` (`string`|`null`) —
    the source/proxy that served the request (max 50 chars), if known.
- *Returns:* `string|bool|null` —
  Response string, or null if the current user agent is not a known AI bot.

### `setPageviewId()`

Override PageView id for every use of `doTrackPageView()`. Do not use this if you call `doTrackPageView()`
multiple times during tracking (if, for example, you are tracking a single page application).

#### Signature

- It accepts the following parameter(s):

  - `$idPageview` (`string`) —
- It returns a `void` value.

### `getPageviewId()`

Returns the PageView id. If the id was manually set using `setPageViewId()`, that id will be returned.

If the id was not set manually, the id that was automatically generated in last `doTrackPageView()` will
be returned. If there was no last page view, this will be false.

#### Signature

- *Returns:* `string`|`null` —
  The PageView id as string or null if there is none yet.

### `doTrackEvent()`

Tracks an event

#### Signature

- It accepts the following parameter(s):

  - `$category` (`string`) —
    The Event Category (Videos, Music, Games...)
  - `$action` (`string`) —
    The Event's Action (Play, Pause, Duration, Add Playlist, Downloaded, Clicked...)
  - `$name` (`string`|`null`) —
    (optional) The Event's object Name (a particular Movie name, or Song name, or File name...)
  - `$value` (`int|float|null`) —
    (optional) The Event's value
- *Returns:* `string|bool` —
  Response string or true if using bulk requests.

### `doTrackContentImpression()`

Tracks a content impression

#### Signature

- It accepts the following parameter(s):

  - `$contentName` (`string`) —
    The name of the content. For instance 'Ad Foo Bar'
  - `$contentPiece` (`string`) —
    The actual content. For instance the path to an image, video, audio, any text
  - `$contentTarget` (`string`|`null`) —
    (optional) The target of the content. For instance the URL of a landing page.
- *Returns:* `string|bool` —
  Response string or true if using bulk requests.

### `doTrackContentInteraction()`

Tracks a content interaction. Make sure you have tracked a content impression using the same content name and
content piece, otherwise it will not count. To do so you should call the method doTrackContentImpression();

#### Signature

- It accepts the following parameter(s):

  - `$interaction` (`string`) —
    The name of the interaction with the content. For instance a 'click'
  - `$contentName` (`string`) —
    The name of the content. For instance 'Ad Foo Bar'
  - `$contentPiece` (`string`) —
    The actual content. For instance the path to an image, video, audio, any text
  - `$contentTarget` (`string`|`null`) —
    (optional) The target the content leading to when an interaction occurs. For instance the URL of a landing page.
- *Returns:* `string|bool` —
  Response string or true if using bulk requests.

### `doTrackSiteSearch()`

Tracks an internal Site Search query, and optionally tracks the Search Category, and Search results Count.

These are used to populate reports in Actions > Site Search.

#### Signature

- It accepts the following parameter(s):

  - `$keyword` (`string`) —
    Searched query on the site
  - `$category` (`string`) —
    (optional) Search engine category if applicable
  - `$countResults` (`int`|`null`) —
    (optional) results displayed on the search result page. Used to track "zero result" keywords.
- *Returns:* `string|bool` —
  Response or true if using bulk requests.

### `doTrackGoal()`

Records a Goal conversion

#### Signature

- It accepts the following parameter(s):

  - `$idGoal` (`int`) —
    Id Goal to record a conversion
  - `$revenue` (`float`|`null`) —
    Revenue for this conversion. Pass null (default) to omit the revenue so Matomo uses the goal's configured revenue; pass 0.0 to force a zero revenue.
- *Returns:* `string|bool` —
  Response or true if using bulk request

### `doTrackAction()`

Tracks a download or outlink

#### Signature

- It accepts the following parameter(s):

  - `$actionUrl` (`string`) —
    URL of the download or outlink
  - `$actionType` (`string`) —
    Type of the action: 'download' or 'link'
- *Returns:* `string|bool` —
  Response or true if using bulk request

### `addEcommerceItem()`

Adds an item in the Ecommerce order.

This should be called before doTrackEcommerceOrder(), or before doTrackEcommerceCartUpdate().
This function can be called for all individual products in the cart (or order).
SKU parameter is mandatory. Other parameters are optional (set to false if value not known).
Ecommerce items added via this function are automatically cleared when doTrackEcommerceOrder() or getUrlTrackEcommerceOrder() is called.

#### Signature

- It accepts the following parameter(s):
  - `$sku` (`string`) —
    (required) SKU, Product identifier
  - `$name` (`string`) —
    (optional) Product name
  - `$category` (`string|array`) —
    (optional) Product category, or array of product categories (up to 5 categories can be specified for a given product)
  - `$price` (`int|float|string`) —
    (optional) Individual product price (supports integer and decimal prices)
  - `$quantity` (`int`) —
    (optional) Product quantity. If not specified, will default to 1 in the Reports
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.
- It throws one of the following exceptions:
  - [`Exception`](http://php.net/class.Exception)

### `doTrackEcommerceCartUpdate()`

Tracks a Cart Update (add item, remove item, update item).

On every Cart update, you must call addEcommerceItem() for each item (product) in the cart,
including the items that haven't been updated since the last cart update.
Items which were in the previous cart and are not sent in later Cart updates will be deleted from the cart (in the database).

#### Signature

- It accepts the following parameter(s):

  - `$grandTotal` (`float`) —
    Cart grandTotal (typically the sum of all items' prices)
- *Returns:* `string|bool` —
  Response or true if using bulk request

### `doBulkTrack()`

Sends all stored tracking actions at once. Only has an effect if bulk tracking is enabled.

To enable bulk tracking, call enableBulkTracking().

#### Signature

- *Returns:* `string|bool` —
  Response
- It throws one of the following exceptions:
  - [`Exception`](http://php.net/class.Exception)

### `doTrackEcommerceOrder()`

Tracks an Ecommerce order.

If the Ecommerce order contains items (products), you must call first the addEcommerceItem() for each item in the order.
All revenues (grandTotal, subTotal, tax, shipping, discount) will be individually summed and reported in Matomo reports.
Only the parameters $orderId and $grandTotal are required.

#### Signature

- It accepts the following parameter(s):

  - `$orderId` (`string|int`) —
    (required) Unique Order ID. This will be used to count this order only once in the event the order page is reloaded several times. orderId must be unique for each transaction, even on different days, or the transaction will not be recorded by Matomo.
  - `$grandTotal` (`float`) —
    (required) Grand Total revenue of the transaction (including tax, shipping, etc.)
  - `$subTotal` (`float`|`null`) —
    (optional) Sub total amount, typically the sum of items prices for all items in this order (before Tax and Shipping costs are applied). Pass null to omit, 0.0 to send an explicit zero.
  - `$tax` (`float`|`null`) —
    (optional) Tax amount for this order
  - `$shipping` (`float`|`null`) —
    (optional) Shipping amount for this order
  - `$discount` (`float`|`null`) —
    (optional) Discounted amount in this order
- *Returns:* `string|bool` —
  Response or true if using bulk request

### `doTrackPhpThrowable()`

Tracks a PHP Throwable a crash (requires CrashAnalytics to be enabled in the target Matomo)

#### Signature

- It accepts the following parameter(s):

  - `$throwable` ([`Throwable`](http://php.net/class.Throwable)) —
    (required) the throwable to track. The message, stack trace, file location and line number of the crash are deduced from this parameter. The crash type is set to the class name of the Throwable.
  - `$category` (`string`|`null`) —
    (optional) a category value for this crash. This can be any information you want to attach to the crash.
- *Returns:* `string|bool` —
  Response or true if using bulk request

### `doTrackCrash()`

Track a crash (requires CrashAnalytics to be enabled in the target Matomo)

#### Signature

- It accepts the following parameter(s):

  - `$message` (`string`) —
    (required) the error message.
  - `$type` (`string`|`null`) —
    (optional) the error type, such as the class name of an Exception.
  - `$category` (`string`|`null`) —
    (optional) a category value for this crash. This can be any information you want to attach to the crash.
  - `$stack` (`string`|`null`) —
    (optional) the stack trace of the crash.
  - `$location` (`string`|`null`) —
    (optional) the source file URI where the crash originated.
  - `$line` (`int`|`null`) —
    (optional) the source file line where the crash originated.
  - `$column` (`int`|`null`) —
    (optional) the source file column where the crash originated.
- *Returns:* `string|bool` —
  Response or true if using bulk request

### `doPing()`

Sends a ping request.

Ping requests do not track new actions. If they are sent within the standard visit length (see global.ini.php),
they will extend the existing visit and the current last action for the visit. If after the standard visit length,
ping requests will create a new visit using the last action in the last known visit.

#### Signature

- *Returns:* `string|bool` —
  Response or true if using bulk request

### `setEcommerceView()`

Sets the current page view as an item (product) page view, or an Ecommerce Category page view.

This must be called before doTrackPageView() on this product/category page.

On a category page, you may set the parameter $category only and leave the other parameters empty.

Tracking Product/Category page views will allow Matomo to report on Product & Categories
conversion rates (Conversion rate = Ecommerce orders containing this product or category / Visits to the product or category)

#### Signature

- It accepts the following parameter(s):
  - `$sku` (`string`) —
    Product SKU being viewed
  - `$name` (`string`) —
    Product Name being viewed
  - `$category` (`string|array`) —
    Category being viewed. On a Product page, this is the product's category. You can also specify an array of up to 5 categories for a given page view.
  - `$price` (`float`) —
    Specify the price at which the item was displayed
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `getUrlTrackAIBot()`

Builds a URL to track a request from an AI bot.

#### Signature

- It accepts the following parameter(s):
  - `$httpStatus` (`int`|`null`) —
    the request's HTTP status code, if it is known.
  - `$responseSizeBytes` (`int`|`null`) —
    the size of the response sent to the AI bot, if known.
  - `$serverTimeMs` (`int`|`null`) —
    the number of milliseconds it took to process the request, if known.
  - `$source` (`string`|`null`) —
    the source/proxy that served the request (max 50 chars), if known.
- It returns a `string` value.

### `getUrlTrackPageView()`

Builds URL to track a page view.

#### See Also

- `doTrackPageView()`

#### Signature

- It accepts the following parameter(s):

  - `$documentTitle` (`string`) —
    Page view name as it will appear in Matomo reports
- *Returns:* `string` —
  URL to matomo.php with all parameters set to track the pageview

### `getUrlTrackEvent()`

Builds URL to track a custom event.

#### See Also

- `doTrackEvent()`

#### Signature

- It accepts the following parameter(s):

  - `$category` (`string`) —
    The Event Category (Videos, Music, Games...)
  - `$action` (`string`) —
    The Event's Action (Play, Pause, Duration, Add Playlist, Downloaded, Clicked...)
  - `$name` (`string`|`null`) —
    (optional) The Event's object Name (a particular Movie name, or Song name, or File name...)
  - `$value` (`int|float|null`) —
    (optional) The Event's value
- *Returns:* `string` —
  URL to matomo.php with all parameters set to track the pageview
- It throws one of the following exceptions:
  - [`Exception`](http://php.net/class.Exception)

### `getUrlTrackContentImpression()`

Builds URL to track a content impression.

#### See Also

- `doTrackContentImpression()`

#### Signature

- It accepts the following parameter(s):

  - `$contentName` (`string`) —
    The name of the content. For instance 'Ad Foo Bar'
  - `$contentPiece` (`string`) —
    The actual content. For instance the path to an image, video, audio, any text
  - `$contentTarget` (`string`|`null`) —
    (optional) The target of the content. For instance the URL of a landing page.
- *Returns:* `string` —
  URL to matomo.php with all parameters set to track the pageview
- It throws one of the following exceptions:
  - [`Exception`](http://php.net/class.Exception) — In case $contentName is empty

### `getUrlTrackContentInteraction()`

Builds URL to track a content interaction.

#### See Also

- `doTrackContentInteraction()`

#### Signature

- It accepts the following parameter(s):

  - `$interaction` (`string`) —
    The name of the interaction with the content. For instance a 'click'
  - `$contentName` (`string`) —
    The name of the content. For instance 'Ad Foo Bar'
  - `$contentPiece` (`string`) —
    The actual content. For instance the path to an image, video, audio, any text
  - `$contentTarget` (`string`|`null`) —
    (optional) The target the content leading to when an interaction occurs. For instance the URL of a landing page.
- *Returns:* `string` —
  URL to matomo.php with all parameters set to track the pageview
- It throws one of the following exceptions:
  - [`Exception`](http://php.net/class.Exception) — In case $interaction or $contentName is empty

### `getUrlTrackSiteSearch()`

Builds URL to track a site search.

#### See Also

- `doTrackSiteSearch()`

#### Signature

- It accepts the following parameter(s):

  - `$keyword` (`string`) —
  - `$category` (`string`) —
  - `$countResults` (`int`|`null`) —
- It returns a `string` value.

### `getUrlTrackGoal()`

Builds URL to track a goal with idGoal and revenue.

#### See Also

- `doTrackGoal()`

#### Signature

- It accepts the following parameter(s):

  - `$idGoal` (`int`) —
    Id Goal to record a conversion
  - `$revenue` (`float`|`null`) —
    Revenue for this conversion. Pass null (default) to omit the revenue so Matomo uses the goal's configured revenue; pass 0.0 to force a zero revenue.
- *Returns:* `string` —
  URL to matomo.php with all parameters set to track the goal conversion

### `getUrlTrackAction()`

Builds URL to track a new action.

#### See Also

- `doTrackAction()`

#### Signature

- It accepts the following parameter(s):

  - `$actionUrl` (`string`) —
    URL of the download or outlink
  - `$actionType` (`string`) —
    Type of the action, usually 'download' or 'link' (a plugin may define its own action parameter, so the value is URL-encoded rather than restricted).
- *Returns:* `string` —
  URL to matomo.php with all parameters set to track an action

### `getUrlTrackCrash()`

Builds URL to track a crash.

#### See Also

- `doTrackCrash()`

#### Signature

- It accepts the following parameter(s):

  - `$message` (`string`) —
    (required) the error message.
  - `$type` (`string`|`null`) —
    (optional) the error type, such as the class name of an Exception.
  - `$category` (`string`|`null`) —
    (optional) a category value for this crash. This can be any information you want to attach to the crash.
  - `$stack` (`string`|`null`) —
    (optional) the stack trace of the crash.
  - `$location` (`string`|`null`) —
    (optional) the source file URI where the crash originated.
  - `$line` (`int`|`null`) —
    (optional) the source file line where the crash originated.
  - `$column` (`int`|`null`) —
    (optional) the source file column where the crash originated.
- *Returns:* `string` —
  URL to matomo.php with all parameters set to track an action

### `setForceVisitDateTime()`

Overrides server date and time for the tracking requests.

By default Matomo will track requests for the "current datetime" but this function allows you
to track visits in the past. All times are in UTC.

Allowed only for Admin/Super User, must be used along with setTokenAuth()

#### See Also

- `setTokenAuth()`

#### Signature

- It accepts the following parameter(s):
  - `$dateTime` (`string`) —
    Date with the format 'Y-m-d H:i:s', or a UNIX timestamp. If the datetime is older than one day (default value for tracking\_requests\_require\_authentication\_when\_custom\_timestamp\_newer\_than), then you must call setTokenAuth() with a valid Admin/Super user token.
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setForceNewVisit()`

Forces Matomo to create a new visit for the tracking request.

By default, Matomo will create a new visit if the last request by this user was more than 30 minutes ago.
If you call setForceNewVisit() before calling doTrack\*, then a new visit will be created for this request.

#### Signature

- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setIp()`

Overrides IP address

Allowed only for Admin/Super User, must be used along with setTokenAuth()

#### See Also

- `setTokenAuth()`

#### Signature

- It accepts the following parameter(s):
  - `$ip` (`string`) —
    IP string, eg. 130.54.2.1
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setUserId()`

Force the action to be recorded for a specific User. The User ID is a string representing a given user in your system.

A User ID can be a username, UUID or an email address, or any number or string that uniquely identifies a user or client.

#### Signature

- It accepts the following parameter(s):
  - `$userId` (`string`|`null`) —
    Any user ID string (eg. email address, ID, username). Must be non-empty. Set to null to stop sending a User ID on subsequent requests. Note this does not retroactively remove the User ID from the visitor's current Matomo visit; for logout isolation, also start a new visit with a fresh visitor id (see setForceNewVisit() / setVisitorId()).
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.
- It throws one of the following exceptions:
  - [`Exception`](http://php.net/class.Exception)

### `getUserIdHashed()`

Hash function used internally by Matomo to hash a User ID into the Visitor ID.

Note: matches implementation of Tracker\Request->getUserIdHashed()

#### Signature

- It accepts the following parameter(s):

  - `$id` (`string`) —
- It returns a `string` value.

### `setVisitorId()`

Forces the requests to be recorded for the specified Visitor ID.

Rather than letting Matomo attribute the user with a heuristic based on IP and other user fingeprinting attributes,
force the action to be recorded for a particular visitor.

If not set, the visitor ID will be fetched from the 1st party cookie, or will be set to a random UUID.

#### Signature

- It accepts the following parameter(s):
  - `$visitorId` (`string`) —
    16 hexadecimal characters visitor ID, eg. "33c31e01394bdc63"
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.
- It throws one of the following exceptions:
  - [`Exception`](http://php.net/class.Exception)

### `getVisitorId()`

If the user initiating the request has the Matomo first party cookie,
this function will try and return the ID parsed from this first party cookie (found in $\_COOKIE).

If you call this function from a server, where the call is triggered by a cron or script
not initiated by the actual visitor being tracked, then it will return
the random Visitor ID that was assigned to this visit object.

This can be used if you wish to record more visits, actions or goals for this visitor ID later on.

#### Signature

- *Returns:* `string` —
  16 hex chars visitor ID string

### `getUserAgent()`

Returns the currently set user agent.

#### Signature

- *Returns:* `string`|`null` —

### `getIp()`

Returns the currently set IP address.

#### Signature

- *Returns:* `string`|`null` —

### `getUserId()`

Returns the User ID string, which may have been set via:
$v->setUserId('username@example.org');

#### Signature

- *Returns:* `string`|`null` —

### `deleteCookies()`

Deletes all first party cookies from the client

#### Signature

- It returns a `void` value.

### `getAttributionInfo()`

Returns the currently assigned Attribution Information stored in a first party cookie.

This function will only work if the user is initiating the current request, and his cookies
can be read by PHP from the $\_COOKIE array.

#### See Also

- `matomo.js` — getAttributionInfo()

#### Signature

- *Returns:* `string|false` —
  JSON Encoded string containing the Referrer information for Goal conversion attribution.
  Will return false if the cookie could not be found

### `setTokenAuth()`

Some Tracking API functionality requires express authentication, using either the
Super User token\_auth, or a user with 'admin' access to the website.

The following features require access:
- force the visitor IP
- force the date & time of the tracking requests rather than track for the current datetime

#### Signature

- It accepts the following parameter(s):
  - `$token_auth` (`string`) —
    token\_auth 32 chars token\_auth string
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setLocalTime()`

Sets local visitor time

#### Signature

- It accepts the following parameter(s):
  - `$time` (`string`) —
    HH:MM:SS format
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setResolution()`

Sets user resolution width and height.

#### Signature

- It accepts the following parameter(s):

  - `$width` (`int`) —
  - `$height` (`int`) —
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setBrowserHasCookies()`

Sets if the browser supports cookies
This is reported in "List of plugins" report in Matomo.

#### Signature

- It accepts the following parameter(s):

  - `$hasCookies` (`bool`) —
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setDebugStringAppend()`

Will append a custom string at the end of the Tracking request.

#### Signature

- It accepts the following parameter(s):

  - `$debugString` (`string`) —
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setPlugins()`

Sets visitor browser supported plugins

#### Signature

- It accepts the following parameter(s):

  - `$flash` (`bool`) —
  - `$java` (`bool`) —
  - `$quickTime` (`bool`) —
  - `$realPlayer` (`bool`) —
  - `$pdf` (`bool`) —
  - `$windowsMedia` (`bool`) —
  - `$silverlight` (`bool`) —
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `disableCookieSupport()`

By default, MatomoTracker will read first party cookies
from the request and write updated cookies in the response (using setrawcookie).

This can be disabled by calling this function.

#### Signature

- It returns a `void` value.

### `getRequestTimeout()`

Returns the maximum number of seconds the tracker will spend waiting for a response
from Matomo. Defaults to 5 seconds.

#### Signature

- It returns a `int` value.

### `setRequestTimeout()`

Sets the maximum number of seconds that the tracker will spend waiting for a response
from Matomo.

#### Signature

- It accepts the following parameter(s):

  - `$timeout` (`int`) —
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.
- It throws one of the following exceptions:
  - [`Exception`](http://php.net/class.Exception)

### `getRequestConnectTimeout()`

Returns the maximum number of seconds the tracker will spend trying to connect to Matomo.

Defaults to 2 seconds.

#### Signature

- It returns a `int` value.

### `setRequestConnectTimeout()`

Sets the maximum number of seconds that the tracker will spend tryint to connect to Matomo.

#### Signature

- It accepts the following parameter(s):

  - `$timeout` (`int`) —
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.
- It throws one of the following exceptions:
  - [`Exception`](http://php.net/class.Exception)

### `setRequestMethodNonBulk()`

Sets the request method to POST, which is recommended when using setTokenAuth()
to prevent the token from being recorded in server logs. Avoid using redirects
when using POST to prevent the loss of POST values. When using Log Analytics,
be aware that POST requests are not parseable/replayable.

#### Signature

- It accepts the following parameter(s):
  - `$method` (`string`) —
    Either 'POST' or 'GET'
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setProxy()`

If a proxy is needed to look up the address of the Matomo site, set it with this

#### Signature

- It accepts the following parameter(s):

  - `$proxy` (`string`) —
  - `$proxyPort` (`int`) —
- It returns a `void` value.

### `setCurlOptions()`

Sets additional cURL options (a map of CURLOPT\_\* constant => value) for the tracking
requests. They are applied after the built-in options, so they can extend them (e.g.

`CURLOPT_IPRESOLVE`, `CURLOPT_HTTP_VERSION`) or override them. Only used on the cURL
transport. Overriding core options such as CURLOPT\_RETURNTRANSFER or CURLOPT\_HEADER may
break response handling, so use with care.

`CURLOPT_HTTPHEADER` is a special case: any headers supplied here are merged with (appended
to) the tracker's own headers rather than replacing them, so you can add a custom header
without accidentally dropping the built-in ones (e.g. the Content-Type for POST/bulk).

#### Signature

- It accepts the following parameter(s):
  - `$curlOptions` (`array`) —
    mixed> $curlOptions
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setExceptionsEnabled()`

Controls how failed tracking requests are handled.

By default a request that fails to reach Matomo (DNS, connection or timeout errors)
throws a RuntimeException. Call setExceptionsEnabled(false) to have such failures return
false instead, so tracking never breaks the calling application.

#### Signature

- It accepts the following parameter(s):

  - `$enabled` (`bool`) —
- It returns a [`MatomoTracker`](api__api-reference__MatomoTracker.md) value.

### `setOutgoingTrackerCookie()`

Sets a cookie to be sent to the tracking server.

#### Signature

- It accepts the following parameter(s):

  - `$name` (`string`) —
  - `$value` (`string`|`null`) —
    Cookie value, or null to remove a previously set cookie.
- It returns a `void` value.

### `getIncomingTrackerCookie()`

Gets a cookie which was set by the tracking server.

#### Signature

- It accepts the following parameter(s):

  - `$name` (`string`) —
- *Returns:* `string|false` —
  The cookie value, or false if no cookie with the given name was received.

### `isUserAgentAIBot()`

Returns true if the given user agent belongs to a known AI bot.

#### Signature

- It accepts the following parameter(s):

  - `$userAgent` (`string`|`null`) —
- It returns a `bool` value.
