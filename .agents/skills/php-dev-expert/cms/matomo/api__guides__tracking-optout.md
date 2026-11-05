# Tracking Opt-out: Integrate - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/tracking-optout

---

#### [Integrate](api__integration.md)

- [Introduction](api__guides__integrate-introduction.md)
- [Tracking your application](api__guides__tracking-introduction.md)
  - [Tracking API Clients](api__guides__tracking-api-clients.md)
  - [JavaScript Tracking Client](api__guides__tracking-javascript-guide.md)
  - [Single-Page Application/Progressive Web App Tracking](api__guides__spa-tracking.md)
  - [Tracking & Cookie Consent](api__guides__tracking-consent.md)
  - [Tracking Opt-out](api__guides__tracking-optout.md)
  - [Content Tracking](api__guides__content-tracking.md)
- [Accessing Matomo data](api__guides__reporting-introduction.md)
  - [Tutorial: Get your top 10 popular pages](api__guides__reporting-api-tutorial.md)
  - [Querying the Reporting API](api__guides__querying-the-reporting-api.md)
  - [Reporting API Clients](api__guides__reporting-api-clients.md)
- [Integrations](https://matomo.org/integrate/)
- [Tag Manager](api__guides__tagmanager__introduction.md)
  - [Embedding](api__guides__tagmanager__embedding.md)
  - [Data Layer](api__guides__tagmanager__datalayer.md)
  - [Debugging](api__guides__tagmanager__debugging.md)
  - [Integration Plugin](api__guides__tagmanager__integration-plugin.md)
- [OAuth 2.0](api__guides__oauth2.md)
  - [OAuth 2.0 Setup](api__guides__oauth2__setup.md)
  - [OAuth 2.0 Authorization Code Flow](api__guides__oauth2__authorization-code.md)
  - [OAuth 2.0 Client Credentials Flow](api__guides__oauth2__client-credentials.md)
  - [OAuth 2.0 API Usage](api__guides__oauth2__api-usage.md)
  - [OAuth 2.0 Developer FAQ](api__guides__oauth2__faq.md)
- [A/B Testing - Experiments](api__guides__ab-tests.md)
  - [Websites (JavaScript)](api__guides__ab-tests__browser.md)
  - [Websites (Server-side)](api__guides__ab-tests__server.md)
  - [Mobile & Desktop Apps](api__guides__ab-tests__apps.md)
  - [Campaigns & Email Marketing](api__guides__ab-tests__campaign.md)
- [Heatmap & Session Recording](api__guides__heatmap-session-recording.md)
  - [Setting up](api__guides__heatmap-session-recording__setup.md)
  - [Developer FAQ](api__guides__heatmap-session-recording__faq.md)
  - [JavaScript Tracker API Reference](api__guides__heatmap-session-recording__reference.md)
- [Crash Analytics](api__guides__crash-analytics.md)
  - [Setting up](api__guides__crash-analytics__setup.md)
  - [Enriching and Restricting](api__guides__crash-analytics__options.md)
  - [Developer FAQ](api__guides__crash-analytics__faq.md)
  - [JavaScript Tracker API Reference](api__guides__crash-analytics__reference.md)
  - [Application tracking](api__guides__crash-analytics__server.md)
- [Media Analytics](api__guides__media-analytics.md)
  - [Setting up](api__guides__media-analytics__setup.md)
  - [Enriching and Restricting](api__guides__media-analytics__options.md)
  - [Custom media player](api__guides__media-analytics__custom-player.md)
  - [Developer FAQ](api__guides__media-analytics__faq.md)
  - [JavaScript Tracker API Reference](api__guides__media-analytics__reference.md)
- [Form Analytics](api__guides__form-analytics.md)
  - [Setting up](api__guides__form-analytics__setup.md)
  - [Developer FAQ](api__guides__form-analytics__faq.md)
  - [JavaScript Tracker API Reference](api__guides__form-analytics__reference.md)

#### Tracking Opt-out

- [Opt-out using the Matomo JavaScript Tracker code](#opt-out-using-the-matomo-javascript-tracker-code)
  - [Process](#process "Process")
  - [Customization](#customization "Customization")
  - [Advantages](#advantages "Advantages")
  - [Disadvantages](#disadvantages "Disadvantages")
  - [When should I choose this opt-out form type?](#when-should-i-choose-this-opt-out-form-type "When should I choose this opt-out form type?")
- [Opt-out using Self-contained code](#opt-out-using-self-contained-code)
  - [Process](#opt-out-using-self-contained-code-process "Process")
  - [Customization](#opt-out-using-self-contained-code-customization "Customization")
  - [Advantages](#opt-out-using-self-contained-code-advantages "Advantages")
  - [Disadvantages](#opt-out-using-self-contained-code-disadvantages "Disadvantages")
  - [When should I choose this opt-out form type?](#opt-out-using-self-contained-code-when-should-i-choose-this-opt-out-form-type "When should I choose this opt-out form type?")
- [Testing your opt-out](#testing-your-opt-out)
- [Legacy iFrame Opt-out](#legacy-iframe-opt-out)
- [Creating a custom opt-out form](#creating-a-custom-opt-out-form)

# Opt-Out

If you want to provide your visitors with the choice to opt-out of Matomo tracking rather than [asking for consent](api__guides__tracking-consent.md) then Matomo
includes a built-in opt-out form that you can add to your website.

This involves adding a small snippet of HTML/JavaScript to the appropriate pages on your site. This code can be generated from the Administration
=> Privacy => Users opt-out menu in the Matomo dashboard. The generated code can include custom CSS styles and optionally skip the introduction text.

The opt-out form code can be generated to work in two ways, either using the Matomo tracker code or as self-contained code, each option has advantages and
disadvantages.

## Opt-out using the Matomo JavaScript Tracker code

Using this option the embedded opt-out form code will load Javascript from your Matomo instance, this JavaScript will then create the opt-out form in the designated
`<div>` container. If the visitor opts in or out then the Matomo tracking code functions will be preferred to set the consent choice.

In order for the [Matomo JavaScript tracking code](api__guides__tracking-javascript-guide.md) to be used by the opt-out it must also be loaded by the same page. A common approach
is to add both the opt-out form and Matomo JavaScript tracker to the website's Privacy Policy page. If it is not possible to load the Matomo JavaScript tracker on the privacy
policy page then you can either use the self-contained opt-out form instead or add the `useCookiesTimeout=0` URL parameter to avoid waiting for the JavaScript tracker to load.

### Process

- The embedded website `<script>` tag requests the `optOutJS` JavaScript from the Matomo instance, passing admin configuration options as URL parameters.
- The Matomo instance translates all form text into the chosen language, or the browser language if `language=auto` is used, and returns the resulting JavaScript.
- The opt-out JavaScript executes when the `DOMContentLoaded` event is fired, indicating the page has finished loading.
- It checks that the specified opt-out form div exists on the page, and shows an error if not.
- It then waits for the Matomo Tracker code to become available.
  - If the Matomo tracker code is found then the opt-out form is created to use the Matomo tracker code to set consent.
  - If the Matomo Tracker code does not become available within the timeout period then the opt-out form will be created to set consent cookies directly.
- If cookies are disabled in the browser or the connection is not `HTTPS` then an error will be shown.

### Customization

The embedded opt-out form code to add to the website page is simple:

```
<div id="matomo-opt-out"></div>
<script src="https://my-matomo-site.org/index.php?module=CoreAdminHome&action=optOutJS&divId=matomo-opt-out"></script>
```

The opt-out div may be positioned anywhere on the page and can have its own styling. If the div is created dynamically then it must exist when the `DOMContentLoaded`
event is fired.

Opt-out form configuration options can be passed as URL parameters, the following options are available:

- `divId` Specify the id of the div tag in which the opt-out form will be created.
- `language` Override the language used to display the opt-out form text, by default the value `auto` is used which will automatically determine the language to use
  based on the browser. To force a particular language pass language code such as 'de' or 'en'.
- `showIntro` Set to `1` if the opt-out form should include text explaining the opt-out choice, set to `0` if the form should just show the checkbox.
- `useCookiesIfNoTracker` Fall back to setting consent cookies directly if the Matomo tracking code cannot be found on the page, defaults to `1`. If this is set to `0`
  and the Matomo tracking code cannot be found then the opt-out form will not be shown.
- `useCookiesTimeout` How long to wait for the Matomo tracking code to become available before giving up and setting consent cookies directly, defaults to 10 seconds.
- `cookiePath` Override the default path for Matomo setting consent cookies, should be blank for most websites.
- `cookieDomain` Override the default domain for Matomo setting consent cookies, should be blank for most websites.

Only used if applying a custom style:
- `backgroundColor` The background colour to apply to the opt-out form div.
- `fontColor` Colour of the font, eg. `#ABCDEF`
- `fontSize` Font size in pixels.
- `fontFamily` Font family name, eg. `Arial`

Any custom cookie settings for `cookie_path` and `cookie_domain` will automatically be applied from the `[Tracker]` section of `config.ini.php`.

### Advantages

- Language translations are done server side.
- The embed code is small and simple.
- The opt-out JavaScript is served by the Matomo instance, so any future updates to this script will automatically be applied without needing to update the website embed code.
- Uses the Matomo tracker code to set the opt-out consent.

### Disadvantages

- Loading the opt-out JavaScript remotely from the Matomo instance may be blocked by browser plugins or adblockers, preventing the opt-out from being shown.

### When should I choose this opt-out form type?

When ease of deployment, maintenance and automatic language translation are more important than 100% visitor coverage.

## Opt-out using Self-contained code

Using this option the embedded opt-out form code will contain all the JavaScript necessary to show the opt-out form and set consent cookies directly. No remote script calls
will be made.

### Process

- The embedded website `<script>` tag contains around 110 lines of JavaScript.
- The script executes when the `DOMContentLoaded` event is fired, indicating the page has finished loading.
- It checks that the specified opt-out form div exists on the page, if not then an error is shown.
- The opt-out form is created to set consent cookies directly.
- If cookies are disabled in the browser or the connection is not `HTTPS` then an error will be shown.

### Customization

The embedded opt-out form code to add to the website page is quite long. Customizable options are in the first few lines:

```
<div id="matomo-opt-out"></div>
<script>
     var settings = {"showIntro":true,"divId":"matomo-opt-out","cookiePath":"","cookieDomain":"","cookieSameSite":"Lax","OptOutComplete":"Opt-out complete","snip":"snip"};

     ... other JavaScript code removed for clarity ...

<script>
```

Just like other opt-out form type, the opt-out div may be positioned anywhere on the page and can have its own styling. If the div is created dynamically then it must
exist when the `DOMContentLoaded` event is fired.

The third line of code contains an array of settings which may be used to configure the self-contained opt-out form.

- `divId` Specify the id of the div tag in which the opt-out form will be created.
- `showIntro` Set to `1` if the opt-out form should include text explaining the opt-out choice, set to `0` if the form should just show the checkbox.
- `cookiePath` Override the default path for Matomo setting consent cookies, should be blank for most websites.
- `cookieDomain` Override the default domain for Matomo setting consent cookies, should be blank for most websites.
- `cookieSameSite` Defaults to setting Matomo consent cookies same-site attribute as `Lax`, some sites may want to set this to `strict` if the Matomo instance is hosted on
  the same domain as the website.

Since the self-contained opt-out code does not make any requests to the Matomo instance, dynamic translation of text strings is not possible. When generating the
self-contained embedded code from the Matomo administration UI a target language can be chosen and the appropriate translations are included in the settings array.

Translation strings:

- `OptOutComplete`
- `OptOutCompleteBis`
- `YouMayOptOut2`
- `YouMayOptOut3`
- `OptOutErrorNoCookies`
- `OptOutErrorNotHttps`
- `YouAreNotOptedOut`
- `UncheckToOptOut`
- `YouAreOptedOut`
- `CheckToOptIn`

### Advantages

- Unlikely to be blocked by browser plugins or ad blockers, since all code is served from the website domain and there are no remote scripts or resources.
- Easy to directly customize the opt-out form language.

### Disadvantages

- Embed code is not small.
- Only supports a single language translation.
- Any future changes to the JavaScript code would need to be updated manually each webpage embedding opt-out form.

### When should I choose this opt-out form type?

When the opt-out must work for visitors who block third party scripts and domains.

## Testing your opt-out

It's important to test the opt-out form once it has been added to your site. Each website is different and there is always the possibility that existing scripts on the
page may interfere with the opt-out form code or that other incompatibilities exist.

To ensure that your opt-out is working properly with your website it is recommended to perform the following quick test after adding the opt-out code.

- Browse to the website page with the opt-out form.
- Once the page has loaded you should see the opt-out box.
- Unchecking the checkbox to opt-out should show the opted-out message.
- Checking the checkbox to opt-in should show the opted-in message.

## Legacy iFrame Opt-out

Prior to version 4.12 Matomo provided the option to generate embed code for an iFrame based opt-out form. This has now been removed as it relied on setting third party
cookies which is no longer supported by major browsers. Although it is no longer possible to generate new iFrame embed code using the Matomo UI, the underlying `OptOut`
method is still fully supported and any existing iFrame opt-out form code embedded in websites will still work as before.

It is recommended to migrate to one of the new opt-out form options as browser support for the iFrame opt-out will continue to decrease.

## Creating a custom opt-out form

Wanting to build your own custom opt-out form instead using one of the provided opt-out options? Check out the guide for [creating a custom opt-out form](api__guides__tracking-javascript-guide.md#optional-creating-a-custom-opt-out-form).
