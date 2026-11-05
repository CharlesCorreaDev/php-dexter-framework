# Craft CMS, argc, and argv | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/craft-cms-argc-and-argv

---

Search Knowledge Base

# Craft CMS, argc, and argv

On December 19, 2024, we were made aware of reports that a Craft CMS [vulnerability](https://github.com/craftcms/cms/security/advisories/GHSA-2p6p-9rc9-62j9) was being [actively exploited](https://www.assetnote.io/resources/research/how-an-obscure-php-footgun-led-to-rce-in-craft-cms).

The vulnerability was patched on November 19, 2024 in Craft CMS versions [3.9.14](https://github.com/craftcms/cms/releases/tag/3.9.14), [4.13.2](https://github.com/craftcms/cms/releases/tag/4.13.2), and [5.5.2](https://github.com/craftcms/cms/releases/tag/5.5.2). We retroactively marked those releases as critical, after the disclosure and subsequent exploitation; affected sites will display a banner to control panel users, urging them to update.

## Triage [#](#triage "Direct link to Triage")

If your *web* PHP configuration has `register_argc_argv Off`, no further action is required.

You can view this setting in the Craft control panel by navigating to **Utilities** → **PHP Info**, and searching for `register_argc_argv`:

![](https://craftcms.com/dist/images/icon-loading.png)

![Security: argv check]()

Viewing PHP info output in the Craft control panel. If you cannot access this utility, contact a site administrator or developer.

If your site indicates that this setting is `On`, continue to [mitigation](#mitigation).

Many hosts’ *command line* PHP executable have this setting enabled, which poses no risk. These processes are typically configured separately, so it’s important that you check the status from an HTTP request.

## Mitigation [#](#mitigation "Direct link to Mitigation")

The best way to defend your site against this exploit is by updating to one of the patched releases. Refer to our [updating guide](https://craftcms.com/docs/5.x/update.html) for instructions.

### Craft Cloud [#](#craft-cloud "Direct link to Craft Cloud")

We have configured Craft Cloud’s global firewall to block malicious requests targeting this exploit.

All new deploys have `register_argc_argv` turned off. Out of an abundance of caution, we automatically re-deployed any environments running an unpatched version of Craft, to remove any potential payloads and apply the container configuration change.

We have no evidence of actual exploits on Craft Cloud.

### Server Configuration [#](#server-configuration "Direct link to Server Configuration")

To disable `register_argc_argv`, locate the PHP configuration file used for HTTP requests. This is typically reported via `phpinfo()`, under the **Loaded Configuration File** heading, and should be visible in the Craft control panel.

Search for any instances of `register_argc_argv` not preceded by a `;` (comment), and change the value to `Off`:

```
register_argc_argv = Off
```

If this setting is *not* present in the config file, add that line to the bottom.

Save the file, and restart your HTTP server and PHP processes according to your host’s documentation.

*Verify that your changes were applied, via the Craft control panel!*

Depending on the host, you may need to use one of the other [recommended methods](https://www.php.net/manual/en/configuration.changes.php) for configuring PHP.

### Firewall [#](#firewall "Direct link to Firewall")

You can block potentially-malicious requests at your firewall by matching this regular expression *anywhere in the query string*:

```
--[a-zA-Z]*[pP]ath
```

Regardless of where you are hosted, we always recommend [keeping your sites up-to-date](https://craftcms.com/docs/5.x/update.html) so that they include the latest security fixes. Read more about [hardening your Craft sites](kb__securing-craft.md), or learn about [the steps we take](kb__security-faq.md) to keep Craft secure.

Applies to
Craft CMS 5, Craft CMS 4, Craft CMS 3, and Craft Cloud.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
