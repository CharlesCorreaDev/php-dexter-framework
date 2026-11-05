# Apache mod_rewrite Technical Details - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/rewrite/tech.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](rewrite.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Rewrite](rewrite.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/rewrite/tech.html) to go to the current version of this document.

# Apache mod\_rewrite Technical Details

This document discusses some of the technical details of mod\_rewrite
and URL matching.

- ![](../images/down.gif) [Internal Processing](#Internal)
- ![](../images/down.gif) [API Phases](#InternalAPI)
- ![](../images/down.gif) [Ruleset Processing](#InternalRuleset)

### See also

- [Module documentation](mod__mod_rewrite.md)
- [mod\_rewrite introduction](rewrite__intro.md)
- [Redirection and remapping](rewrite__remapping.md)
- [Controlling access](rewrite__access.md)
- [Virtual hosts](rewrite__vhosts.md)
- [Proxying](rewrite__proxy.md)
- [Using RewriteMap](rewrite__rewritemap.md)
- [Advanced techniques and tricks](rewrite__advanced.md)
- [When not to use mod\_rewrite](rewrite__avoid.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Internal Processing

The internal processing of this module is very complex but
needs to be explained once even to the average user to avoid
common mistakes and to let you exploit its full
functionality.

[![top](../images/up.gif)](#page-header)

## API Phases

First you have to understand that when Apache processes a
HTTP request it does this in phases. A hook for each of these
phases is provided by the Apache API. Mod\_rewrite uses two of
these hooks: the URL-to-filename translation hook which is
used after the HTTP request has been read but before any
authorization starts and the Fixup hook which is triggered
after the authorization phases and after the per-directory
config files (`.htaccess`) have been read, but
before the content handler is activated.

So, after a request comes in and Apache has determined the
corresponding server (or virtual server) the rewriting engine
starts processing of all mod\_rewrite directives from the
per-server configuration in the URL-to-filename phase. A few
steps later when the final data directories are found, the
per-directory configuration directives of mod\_rewrite are
triggered in the Fixup phase. In both situations mod\_rewrite
rewrites URLs either to new URLs or to filenames, although
there is no obvious distinction between them. This is a usage
of the API which was not intended to be this way when the API
was designed, but as of Apache 1.x this is the only way
mod\_rewrite can operate. To make this point more clear
remember the following two points:

1. Although mod\_rewrite rewrites URLs to URLs, URLs to
   filenames and even filenames to filenames, the API
   currently provides only a URL-to-filename hook. In Apache
   2.0 the two missing hooks will be added to make the
   processing more clear. But this point has no drawbacks for
   the user, it is just a fact which should be remembered:
   Apache does more in the URL-to-filename hook than the API
   intends for it.
2. Unbelievably mod\_rewrite provides URL manipulations in
   per-directory context, *i.e.*, within
   `.htaccess` files, although these are reached
   a very long time after the URLs have been translated to
   filenames. It has to be this way because
   `.htaccess` files live in the filesystem, so
   processing has already reached this stage. In other
   words: According to the API phases at this time it is too
   late for any URL manipulations. To overcome this chicken
   and egg problem mod\_rewrite uses a trick: When you
   manipulate a URL/filename in per-directory context
   mod\_rewrite first rewrites the filename back to its
   corresponding URL (which is usually impossible, but see
   the `RewriteBase` directive below for the
   trick to achieve this) and then initiates a new internal
   sub-request with the new URL. This restarts processing of
   the API phases.

   Again mod\_rewrite tries hard to make this complicated
   step totally transparent to the user, but you should
   remember here: While URL manipulations in per-server
   context are really fast and efficient, per-directory
   rewrites are slow and inefficient due to this chicken and
   egg problem. But on the other hand this is the only way
   mod\_rewrite can provide (locally restricted) URL
   manipulations to the average user.

Don't forget these two points!

[![top](../images/up.gif)](#page-header)

## Ruleset Processing

Now when mod\_rewrite is triggered in these two API phases, it
reads the configured rulesets from its configuration
structure (which itself was either created on startup for
per-server context or during the directory walk of the Apache
kernel for per-directory context). Then the URL rewriting
engine is started with the contained ruleset (one or more
rules together with their conditions). The operation of the
URL rewriting engine itself is exactly the same for both
configuration contexts. Only the final result processing is
different.

The order of rules in the ruleset is important because the
rewriting engine processes them in a special (and not very
obvious) order. The rule is this: The rewriting engine loops
through the ruleset rule by rule (`RewriteRule` directives) and
when a particular rule matches it optionally loops through
existing corresponding conditions (`RewriteCond`
directives). For historical reasons the conditions are given
first, and so the control flow is a little bit long-winded. See
Figure 1 for more details.

![Flow of RewriteRule and RewriteCond matching](../images/rewrite_rule_flow.png)  
Figure 1:The control flow through the rewriting ruleset

As you can see, first the URL is matched against the
*Pattern* of each rule. When it fails mod\_rewrite
immediately stops processing this rule and continues with the
next rule. If the *Pattern* matches, mod\_rewrite looks
for corresponding rule conditions. If none are present, it
just substitutes the URL with a new value which is
constructed from the string *Substitution* and goes on
with its rule-looping. But if conditions exist, it starts an
inner loop for processing them in the order that they are
listed. For conditions the logic is different: we don't match
a pattern against the current URL. Instead we first create a
string *TestString* by expanding variables,
back-references, map lookups, *etc.* and then we try
to match *CondPattern* against it. If the pattern
doesn't match, the complete set of conditions and the
corresponding rule fails. If the pattern matches, then the
next condition is processed until no more conditions are
available. If all conditions match, processing is continued
with the substitution of the URL with
*Substitution*.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/rewrite/tech.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/rewrite/tech.html "Français")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
