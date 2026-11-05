# Campaign Tracking · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Campaign-Tracking

---

## Tracking dimensions

OWA can track visitors back to user-defined values for a variety of campaign tracking dimensions including medium, source, campaign, ad, ad type, and search term. To use these dimensions simply add them, along with whatever values you want, to your incoming links. For example:

```
http://www.domain.com/path?owa_medium=email&owa_source=newsletter&owa_campaign=june&owa_ad=20+percent+off&owa_ad_type=banner
```

### Medium

`owa_medium`

The *medium* dimension can be used to represent a grouping of sources or a "channel" as it is sometimes referred to by marketers. You can make up an unlimited number of values for medium, but remember that OWA automatically codes visits with the following values for medium whenever you do not specify your own:

- **referral** — used to represent sources that contain links pointing to your web site.
- **organic-search** — used to represent sources that are search engines (e.g. Google, Yahoo, Bing, etc.) that send users to your site from search results.
- **direct** — used to represent direct navigation or "type-in" traffic.
- **feeds** — used to represent sources that are syndication (RSS, Atom, etc.) feeds that you may be publishing.

**Example:**

A good example of creating a custom value for medium would be to track visits that come from an e-mail newsletter. For that example, adding `owa_medium=email` to the links contained in your newsletter would allow you to see how many users arrived from your email marketing efforts.

### Source

`owa_source`

The *source* dimension is used to represent the specific entity or origin of the traffic. In the case of referrals this value is a web site/domain (e.g. facebook.com, or espn.com). However, you can use any custom value you want, including the name of a mailing list, or an ad/media network.

**Example:**

Continuing with our e-mail newsletter example, the source dimension might be used to represent the name of the mailing list that the e-mail was sent to. For that example one might add `owa_source=main+mailing+list` to incoming links. Another popular use for the source dimension is for tracking display advertising efforts where you do not know the web site that will be sending the traffic but do know the ad network or sub-network. For that example, adding `owa_source=google-display-network` or `owa_source=valueclick-media`.

### Campaign

`owa_campaign`

The *campaign* dimension represents the specific marketing theme that you are using to drive the traffic. This value often ties directly to the name of the marketing campaign or thematic groupings of ads — for example "Back to School", "20% Off Sale", or in the case of email marketing the name of the e-mail promotion or newsletter.

**Example:**

Continuing with our e-mail newsletter example, the value for a campaign dimension might be `owa_campaign=monthly+newsletter`.

### Ad

`owa_ad`

The *ad* dimension is used to track the specific version of an advertisement that the user clicked on before arriving at your web site. Often this value maps directly to the name of the ad or "creative" asset in your ad server.

**Example:**

`owa_ad=red+banner`

### Ad Type

`owa_ad_type`

The *ad type* dimension is used to further describe the type of ad that the user clicked on before arriving at your web site. This dimension can be used to describe the size of an ad (e.g. 300x300, or skyscraper, etc.) or the technology used in the ad (e.g. rich media, or text link, or flash banner, etc.). NOTE: an 'ad' can only have one 'ad\_type' associated with it. The first ad\_type set for an 'ad' will be used for all subsequent uses of the same 'ad'.

**Example:**

`owa_ad_type=flash+banner`

## The tags you set, and the source they resolve to

These are reported separately, and it is worth knowing which you are looking at.

- **The tags a URL carried** are what you put in the link: `owa_campaign`,
  `owa_medium`, `owa_source` and so on. They are what you typed.
- **The source they resolve to** is what OWA concluded, which may differ. A
  referral with no tags still resolves a source from the referring host, and a
  tagged link resolves through the tag.

A report that shows tags answers "what did I label this link?"; a report that
shows the resolved source answers "where did this visit come from?" Those are
the same answer for a tagged campaign link and different answers for everything
else, which is why both exist.

Note also that the resolved values are **server-owned**: sending `source` or
`medium` in a tracking request does not set them. You influence them by tagging
the URL. See [Javascript Tracker](Javascript-Tracker.md).

## Traffic Attribution

OWA can be configured to attribute incoming traffic to user-defined campaigns using multiple attribution modes. The attribution mode is controlled by the `trafficAttributionMode` config setting.

### Direct Attribution Mode

**This is the default attribution mode.**

The *Direct* attribution mode attributes new visits, and any events that occur within the visit, to the medium/source/campaign that initiated the visit/session. For example, if the user does a search on Google for your web site and clicks a link in Google's search results taking them to your site, OWA will attribute the new visit (and any conversion or commerce transactions that occur within the visit) to the medium of *organic-search* and a source of *google.com*. If within the next 30 minutes the user leaves your web site, goes to espn.com, and clicks on an ad for your site to arrive back at the site, the visit would still be attributed to Google. However, if the user went out to lunch (causing a period of 30 minutes of no activity) and then clicked on your advertising running on espn.com, OWA would record a new visit and attribute it to whatever medium/source/campaign values you added to the click-through link on your ad on espn.com.

### Original Attribution Mode

The *Original* attribution mode attributes visits to whatever medium/source/campaign first drove the user to your web site. For example, if a new user of your site arrives by clicking on an ad banner you were running on espn.com, then the visit would be attributed to the espn.com ad/campaign. However, if the same user returned to your site a week later from a Google search, their second visit would again be attributed to the espn.com ad/campaign.

Under this attribution mode, the first campaign that the user interacts with will receive all credit for subsequent visits and their associated conversions/transactions for 60 days.

**The 60 days is fixed.** It is the lifetime the campaign store is registered with in the tracker, and there is no setting that changes it. A `campaignAttributionWindow` tracker option used to be accepted and ignored; it has been removed rather than left looking configurable.

## Prior Campaign Touches

OWA stores the last five campaigns that a user interacts with in its `owa_c` campaign cookie. These past campaign interactions are stored along with each new visit/session as a JSON object. You may retrieve these values as part of result sets via the data export API using the `latestAttributions` dimension. Please note that new campaign interactions will not be added to OWA's campaign cookie when using *original* attribution mode.
