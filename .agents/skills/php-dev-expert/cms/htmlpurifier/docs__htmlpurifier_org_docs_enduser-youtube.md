# Embedding YouTube Videos - HTML Purifier

> **Fonte / Source:** http://htmlpurifier.org/docs/enduser-youtube.html

---

# Embedding YouTube Videos

...as well as other dangerous active content

Filed under End-User

Return to the [index](index.html).

[HTML Purifier](http://htmlpurifier.org/) End-User Documentation

Clients like their YouTube videos. It gives them a warm fuzzy feeling when
they see a neat little embedded video player on their websites that can play
the latest clips from their documentary "Fido and the Bones of Spring".
All joking aside, the ability to embed YouTube videos or other active
content in their pages is something that a lot of people like.

This is a *bad* idea. The moment you embed anything untrusted,
you will definitely be slammed by a manner of nasties that can be
embedded in things from your run of the mill Flash movie to
[Quicktime movies](http://blog.spywareguide.com/2006/12/myspace_phish_attack_leads_use.html).
Even `img` tags, which HTML Purifier allows by default, can be
dangerous. Be distrustful of anything that tells a browser to load content
from another website automatically.

Luckily for us, however, whitelisting saves the day. Sure, letting users
include any old random flash file could be dangerous, but if it's
from a specific website, it probably is okay. If no amount of pleading will
convince the people upstairs that they should just settle with just linking
to their movies, you may find this technique very useful.

## Looking in

Below is custom code that allows users to embed
YouTube videos. This is not favoritism: this trick can easily be adapted for
other forms of embeddable content.

Usually, websites like YouTube give us boilerplate code that you can insert
into your documents. YouTube's code goes like this:

```
<object width="425" height="350">
  <param name="movie" value="http://www.youtube.com/v/AyPzM5WK8ys" />
  <param name="wmode" value="transparent" />
  <embed src="http://www.youtube.com/v/AyPzM5WK8ys"
         type="application/x-shockwave-flash"
         wmode="transparent" width="425" height="350" />
</object>
```

There are two things to note about this code:

1. `<embed>` is not recognized by W3C, so if you want
   standards-compliant code, you'll have to get rid of it.
2. The code is exactly the same for all instances, except for the
   identifier AyPzM5WK8ys which tells us which movie file
   to retrieve.

What point 2 means is that if we have code like `<span
class="youtube-embed">AyPzM5WK8ys</span>` your
application can reconstruct the full object from this small snippet that
passes through HTML Purifier *unharmed*.
[Show me the code!](http://repo.or.cz/w/htmlpurifier.git?a=blob;hb=HEAD;f=library/HTMLPurifier/Filter/YouTube.php)

And the corresponding usage:

```
<?php
    $config->set('Filter.YouTube', true);
?>
```

There is a bit going in the two code snippets, so let's explain.

1. This is a Filter object, which intercepts the HTML that is
   coming into and out of the purifier. You can add as many
   filter objects as you like. `preFilter()`
   processes the code before it gets purified, and `postFilter()`
   processes the code afterwards. So, we'll use `preFilter()` to
   replace the object tag with a `span`, and `postFilter()`
   to restore it.
2. The first preg\_replace call replaces any YouTube code users may have
   embedded into the benign span tag. Span is used because it is inline,
   and objects are inline too. We are very careful to be extremely
   restrictive on what goes inside the span tag, as if an errant code
   gets in there it could get messy.
3. The HTML is then purified as usual.
4. Then, another preg\_replace replaces the span tag with a fully fledged
   object. Note that the embed is removed, and, in its place, a data
   attribute was added to the object. This makes the tag standards
   compliant! It also breaks Internet Explorer, so we add in a bit of
   conditional comments with the old embed code to make it work again.
   It's all quite convoluted but works.

## Warning

There are a number of possible problems with the code above, depending
on how you look at it.

### Cannot change width and height

The width and height of the final YouTube movie cannot be adjusted. This
is because I am lazy. If you really insist on letting users change the size
of the movie, what you need to do is package up the attributes inside the
span tag (along with the movie ID). It gets complicated though: a malicious
user can specify an outrageously large height and width and attempt to crash
the user's operating system/browser. You need to either cap it by limiting
the amount of digits allowed in the regex or using a callback to check the
number.

### Trusts media's host's security

By allowing this code onto our website, we are trusting that YouTube has
tech-savvy enough people not to allow their users to inject malicious
code into the Flash files. An exploit on YouTube means an exploit on your
site. Even though YouTube is run by the reputable Google, it
[doesn't](http://ha.ckers.org/blog/20061213/google-xss-vuln/)
mean they are
[invulnerable.](http://ha.ckers.org/blog/20061208/xss-in-googles-orkut/)
You're putting a certain measure of the job on an external provider (just as
you have by entrusting your user input to HTML Purifier), and
it is important that you are cognizant of the risk.

### Poorly written adaptations compromise security

This should go without saying, but if you're going to adapt this code
for Google Video or the like, make sure you do it *right*. It's
extremely easy to allow a character too many in `postFilter()` and
suddenly you're introducing XSS into HTML Purifier's XSS free output. HTML
Purifier may be well written, but it cannot guard against vulnerabilities
introduced after it has finished.

## Help out!

If you write a filter for your favorite video destination (or anything
like that, for that matter), send it over and it might get included
with the core!
