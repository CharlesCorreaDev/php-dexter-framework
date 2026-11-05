# Craft CMS and Log4j | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/craft-cms-and-log4j

---

Search Knowledge Base

# Craft CMS and Log4j

A severe, widespread vulnerability in the Java [Log4j logging library](https://logging.apache.org/log4j/2.x/) has prompted extensive audits of web infrastructure that may include Craft CMS sites.

Craft CMS is a PHP application with no direct relationship to Java or Log4j.

So while Craft itself isn’t affected by the Log4j bug, you’ll still want to check with your hosting provider to be sure your infrastructure does not rely on any services that rely on Log4j and integrate with Craft. You might use Elasticsearch, for example, to collect and parse application and server logs—and that *may* use Log4j and be worth auditing.

Applies to
Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
