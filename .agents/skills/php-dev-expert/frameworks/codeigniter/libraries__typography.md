# Typography — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/libraries/typography.html

---

# Typography[](#typography "Link to this heading")

The Typography library contains methods that help you format text
in semantically relevant ways.

## [Loading the Library](#id1)[](#loading-the-library "Link to this heading")

Like all services in CodeIgniter, it can be loaded via `Config\Services`, though you usually will not need
to load it manually:

```
<?php

$typography = service('typography');
```

## [Available static functions](#id2)[](#available-static-functions "Link to this heading")

The following functions are available:

autoTypography(*$str*[, *$reduceLinebreaks = false*])[](#autoTypography "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Input string
        - **$reduceLinebreaks** (`bool`) – Whether to reduce multiple instances of double newlines to two

    Returns:
    :   HTML-formatted typography-safe string

    Return type:
    :   `string`

    Formats text so that it is semantically and typographically correct
    HTML.

    Usage example:

    ```
    <?php

    $string = $typography->autoTypography($string);
    ```

    Note

    Typographic formatting can be processor intensive, particularly if
    you have a lot of content being formatted. If you choose to use this
    function you may want to consider [caching](general__caching.md) your
    pages.

formatCharacters(*$str*)[](#formatCharacters "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Input string

    Returns:
    :   String with formatted characters.

    Return type:
    :   `string`

    This function mainly converts double and single quotes
    to curly entities, but it also converts em-dashes,
    double spaces, and ampersands.

    Usage example:

    ```
    <?php

    $string = $typography->formatCharacters($string);
    ```

nl2brExceptPre(*$str*)[](#nl2brExceptPre "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Input string

    Returns:
    :   String with HTML-formatted line breaks

    Return type:
    :   `string`

    Converts newlines to `<br />` tags unless they appear within `<pre>` tags.
    This function is identical to the native PHP `nl2br()` function,
    except that it ignores `<pre>` tags.

    Usage example:

    ```
    <?php

    $string = $typography->nl2brExceptPre($string);
    ```
