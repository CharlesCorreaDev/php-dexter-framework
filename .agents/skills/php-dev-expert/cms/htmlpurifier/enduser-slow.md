# Speeding up HTML Purifier - HTML Purifier

> **Fonte / Source:** http://htmlpurifier.org/docs/enduser-slow.html

---

# Speeding up HTML Purifier

...also known as the HELP ME LIBRARY IS TOO SLOW MY PAGE TAKE TOO LONG page

Filed under End-User

Return to the [index](index.md).

[HTML Purifier](http://htmlpurifier.org/) End-User Documentation

HTML Purifier is a very powerful library. But with power comes great
responsibility, in the form of longer execution times. Remember, this
library isn't lightly grazing over submitted HTML: it's deconstructing
the whole thing, rigorously checking the parts, and then putting it back
together.

So, if it so turns out that HTML Purifier is kinda too slow for outbound
filtering, you've got a few options:

## Inbound filtering

Perform filtering of HTML when it's submitted by the user. Since the
user is already submitting something, an extra half a second tacked on
to the load time probably isn't going to be that huge of a problem.
Then, displaying the content is a simple a manner of outputting it
directly from your database/filesystem. The trouble with this method is
that your user loses the original text, and when doing edits, will be
handling the filtered text. While this may be a good thing, especially
if you're using a WYSIWYG editor, it can also result in data-loss if a
user makes a typo.

Example (non-functional):

```
<?php
    /**
     * FORM SUBMISSION PAGE
     * display_error($message) : displays nice error page with message
     * display_success() : displays a nice success page
     * display_form() : displays the HTML submission form
     * database_insert($html) : inserts data into database as new row
     */
    if (!empty($_POST)) {
        require_once '/path/to/library/HTMLPurifier.auto.php';
        require_once 'HTMLPurifier.func.php';
        $dirty_html = isset($_POST['html']) ? $_POST['html'] : false;
        if (!$dirty_html) {
            display_error('You must write some HTML!');
        }
        $html = HTMLPurifier($dirty_html);
        database_insert($html);
        display_success();
        // notice that $dirty_html is *not* saved
    } else {
        display_form();
    }
?>
```

## Caching the filtered output

Accept the submitted text and put it unaltered into the database, but
then also generate a filtered version and stash that in the database.
Serve the filtered version to readers, and the unaltered version to
editors. If need be, you can invalidate the cache and have the cached
filtered version be regenerated on the first page view. Pros? Full data
retention. Cons? It's more complicated, and opens other editors up to
XSS if they are using a WYSIWYG editor (to fix that, they'd have to be
able to get their hands on the \*really\* original text served in
plaintext mode).

Example (non-functional):

```
<?php
    /**
     * VIEW PAGE
     * display_error($message) : displays nice error page with message
     * cache_get($id) : retrieves HTML from fast cache (db or file)
     * cache_insert($id, $html) : inserts good HTML into cache system
     * database_get($id) : retrieves raw HTML from database
     */
    $id = isset($_GET['id']) ? (int) $_GET['id'] : false;
    if (!$id) {
        display_error('Must specify ID.');
        exit;
    }
    $html = cache_get($id); // filesystem or database
    if ($html === false) {
        // cache didn't have the HTML, generate it
        $raw_html = database_get($id);
        require_once '/path/to/library/HTMLPurifier.auto.php';
        require_once 'HTMLPurifier.func.php';
        $html = HTMLPurifier($raw_html);
        cache_insert($id, $html);
    }
    echo $html;
?>
```

## Summary

In short, inbound filtering is the simple option and caching is the
robust option (albeit with bigger storage requirements).

There is a third option, independent of the two we've discussed: profile
and optimize HTMLPurifier yourself. Be sure to report back your results
if you decide to do that! Especially if you port HTML Purifier to C++.
;-)
