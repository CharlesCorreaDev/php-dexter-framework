# Text Helper — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/helpers/text_helper.html

---

# Text Helper[](#text-helper "Link to this heading")

The Text Helper file contains functions that assist in working with Text.

## [Loading this Helper](#id1)[](#loading-this-helper "Link to this heading")

This helper is loaded using the following code:

```
<?php

helper('text');
```

## [Available Functions](#id2)[](#available-functions "Link to this heading")

The following functions are available:

random\_string([*$type = 'alnum'*[, *$len = 8*]])[](#random_string "Link to this definition")
:   Parameters:
    :   - **$type** (`string`) – Randomization type
        - **$len** (`int`) – Output string length

    Returns:
    :   A random string

    Return type:
    :   `string`

    Generates a random string based on the type and length you specify.
    Useful for creating passwords or generating random hashes.

    The first parameter specifies the type of string, the second parameter
    specifies the length. The following choices are available:

    - **alpha**: A string with lower and uppercase letters only.
    - **alnum**: Alphanumeric string with lower and uppercase characters.
    - **numeric**: Numeric string.
    - **nozero**: Numeric string with no zeros.
    - **crypto**: A random string based on `random_bytes()`.

    Note

    When you use **crypto**, you must set an even number to the second parameter.
    Since v4.2.2, if you set an odd number, `InvalidArgumentException` will be thrown.

    Note

    Since v4.3.3, **alpha**, **alnum** and **nozero** use `random_byte()`,
    and **numeric** uses `random_int()`.
    In the previous versions, it used `str_shuffle()` that is not
    cryptographically secure.

    Usage example:

    ```
    <?php

    echo random_string('alnum', 16);
    ```

increment\_string(*$str*[, *$separator = '\_'*[, *$first = 1*]])[](#increment_string "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Input string
        - **$separator** (`string`) – Separator to append a duplicate number with
        - **$first** (`int`) – Starting number

    Returns:
    :   An incremented string

    Return type:
    :   `string`

    Increments a string by appending a number to it or increasing the
    number. Useful for creating “copies” or a file or duplicating database
    content which has unique titles or slugs.

    Usage example:

    ```
    <?php

    echo increment_string('file', '_'); // "file_1"
    echo increment_string('file', '-', 2); // "file-2"
    echo increment_string('file_4'); // "file_5"
    ```

alternator(*$args*)[](#alternator "Link to this definition")
:   Parameters:
    :   - **$args** (`mixed`) – A variable number of arguments

    Returns:
    :   Alternated string(s)

    Return type:
    :   `mixed`

    Allows two or more items to be alternated between, when cycling through
    a loop. Example:

    ```
    <?php

    for ($i = 0; $i < 10; $i++) {
        echo alternator('string one', 'string two');
    }
    ```

    You can add as many parameters as you want, and with each iteration of
    your loop the next item will be returned.

    ```
    <?php

    for ($i = 0; $i < 10; $i++) {
        echo alternator('one', 'two', 'three', 'four', 'five');
    }
    ```

    Note

    To use multiple separate calls to this function simply call the
    function with no arguments to re-initialize.

reduce\_double\_slashes(*$str*)[](#reduce_double_slashes "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Input string

    Returns:
    :   A string with normalized slashes

    Return type:
    :   `string`

    Converts double slashes in a string to a single slash, except those
    found in URL protocol prefixes (e.g., http&#58;//).

    Example:

    ```
    <?php

    $string = 'http://example.com//index.php';
    echo reduce_double_slashes($string); // results in "http://example.com/index.php"
    ```

strip\_slashes(*$data*)[](#strip_slashes "Link to this definition")
:   Parameters:
    :   - **$data** (`mixed`) – Input string or an array of strings

    Returns:
    :   String(s) with stripped slashes

    Return type:
    :   `mixed`

    Removes any slashes from an array of strings.

    Example:

    ```
    <?php

    $str = [
        'question' => "Is your name O\\'reilly?",
        'answer'   => "No, my name is O\\'connor.",
    ];

    $str = strip_slashes($str);
    ```

    The above will return the following array:

    ```
    <?php

    [
        'question' => "Is your name O'reilly?",
        'answer'   => "No, my name is O'connor.",
    ];
    ```

    Note

    For historical reasons, this function will also accept
    and handle string inputs. This however makes it just an
    alias for `stripslashes()`.

reduce\_multiples(*$str*[, *$character = '*, *'*[, *$trim = false*]])[](#reduce_multiples "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Text to search in
        - **$character** (`string`) – Character to reduce
        - **$trim** (`bool`) – Whether to also trim the specified character

    Returns:
    :   Reduced string

    Return type:
    :   `string`

    Reduces multiple instances of a particular character occurring directly
    after each other. Example:

    ```
    <?php

    $string = 'Fred, Bill,, Joe, Jimmy';
    $string = reduce_multiples($string); // results in "Fred, Bill, Joe, Jimmy"
    ```

    If the third parameter is set to `true`, it will remove occurrences of the
    character at the beginning and the end of the string. Example:

    ```
    <?php

    $string = ',Fred, Bill,, Joe, Jimmy,';
    $string = reduce_multiples($string, ',', true); // results in "Fred, Bill, Joe, Jimmy"
    ```

quotes\_to\_entities(*$str*)[](#quotes_to_entities "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Input string

    Returns:
    :   String with quotes converted to HTML entities

    Return type:
    :   `string`

    Converts single and double quotes in a string to the corresponding HTML
    entities. Example:

    ```
    <?php

    $string = "Joe's \"dinner\"";
    $string = quotes_to_entities($string); // results in "Joe&#39;s &quot;dinner&quot;"
    ```

strip\_quotes(*$str*)[](#strip_quotes "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Input string

    Returns:
    :   String with quotes stripped

    Return type:
    :   `string`

    Removes single and double quotes from a string. Example:

    ```
    <?php

    $string = "Joe's \"dinner\"";
    $string = strip_quotes($string); // results in "Joes dinner"
    ```

word\_limiter(*$str*[, *$limit = 100*[, *$endChar = '&#8230;'*]])[](#word_limiter "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Input string
        - **$limit** (`int`) – Limit
        - **$endChar** (`string`) – End character (usually an ellipsis)

    Returns:
    :   Word-limited string

    Return type:
    :   `string`

    Truncates a string to the number of *words* specified. Example:

    ```
    <?php

    $string = 'Here is a nice text string consisting of eleven words.';
    $string = word_limiter($string, 4);
    // Returns:  Here is a nice
    ```

    The third parameter is an optional suffix added to the string. By
    default it adds an ellipsis.

character\_limiter(*$string*[, *$limit = 500*[, *$endChar = '&#8230;'*]])[](#character_limiter "Link to this definition")
:   Parameters:
    :   - **$string** (`string`) – Input string
        - **$limit** (`int`) – Number of characters
        - **$endChar** (`string`) – End character (usually an ellipsis)

    Returns:
    :   Character-limited string

    Return type:
    :   `string`

    Truncates a string to the number of *characters* specified. It
    maintains the integrity of words so the character count may be slightly
    more or less than what you specify.

    Example:

    ```
    <?php

    $string = 'Here is a nice text string consisting of eleven words.';
    $string = character_limiter($string, 20);
    // Returns:  Here is a nice text string
    ```

    The third parameter is an optional suffix added to the string, if
    undeclared this helper uses an ellipsis.

    Note

    If you need to truncate to an exact number of characters, please
    see the [`ellipsize()`](#ellipsize "ellipsize") function below.

ascii\_to\_entities(*$str*)[](#ascii_to_entities "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Input string

    Returns:
    :   A string with ASCII values converted to entities

    Return type:
    :   `string`

    Converts ASCII values to character entities, including high ASCII and MS
    Word characters that can cause problems when used in a web page, so that
    they can be shown consistently regardless of browser settings or stored
    reliably in a database. There is some dependence on your server’s
    supported character sets, so it may not be 100% reliable in all cases,
    but for the most part, it should correctly identify characters outside
    the normal range (like accented characters).

    Example:

    ```
    <?php

    $string = ascii_to_entities($string);
    ```

entities\_to\_ascii(*$str*[, *$all = true*])[](#entities_to_ascii "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Input string
        - **$all** (`bool`) – Whether to convert unsafe entities as well

    Returns:
    :   A string with HTML entities converted to ASCII characters

    Return type:
    :   `string`

    This function does the opposite of [`ascii_to_entities()`](#ascii_to_entities "ascii_to_entities").
    It turns character entities back into ASCII.

convert\_accented\_characters(*$str*)[](#convert_accented_characters "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Input string

    Returns:
    :   A string with accented characters converted

    Return type:
    :   `string`

    Transliterates high ASCII characters to low ASCII equivalents. Useful
    when non-English characters need to be used where only standard ASCII
    characters are safely used, for instance, in URLs.

    Example:

    ```
    <?php

    $string = convert_accented_characters($string);
    ```

    Note

    This function uses a companion config file
    **app/Config/ForeignCharacters.php** to define the to and
    from array for transliteration.

word\_censor(*$str*, *$censored*[, *$replacement = ''*])[](#word_censor "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Input string
        - **$censored** (`array`) – List of bad words to censor
        - **$replacement** (`string`) – What to replace bad words with

    Returns:
    :   Censored string

    Return type:
    :   `string`

    Enables you to censor words within a text string. The first parameter
    will contain the original string. The second will contain an array of
    words which you disallow. The third (optional) parameter can contain
    a replacement value for the words. If not specified they are replaced
    with pound signs: ####.

    Example:

    ```
    <?php

    $disallowed = ['darn', 'shucks', 'golly', 'phooey'];
    $string     = word_censor($string, $disallowed, 'Beep!');
    ```

highlight\_code(*$str*)[](#highlight_code "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Input string

    Returns:
    :   String with code highlighted via HTML

    Return type:
    :   `string`

    Colorizes a string of code (PHP, HTML, etc.). Example:

    ```
    <?php

    $string = highlight_code($string);
    ```

    The function uses PHP’s `highlight_string()` function, so the
    colors used are the ones specified in your php.ini file.

highlight\_phrase(*$str*, *$phrase*[, *$tag\_open = '<mark>'*[, *$tag\_close = '</mark>'*]])[](#highlight_phrase "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Input string
        - **$phrase** (`string`) – Phrase to highlight
        - **$tag\_open** (`string`) – Opening tag used for the highlight
        - **$tag\_close** (`string`) – Closing tag for the highlight

    Returns:
    :   String with a phrase highlighted via HTML

    Return type:
    :   `string`

    Will highlight a phrase within a text string. The first parameter will
    contain the original string, the second will contain the phrase you wish
    to highlight. The third and fourth parameters will contain the
    opening/closing HTML tags you would like the phrase wrapped in.

    Example:

    ```
    <?php

    $string = 'Here is a nice text string about nothing in particular.';
    echo highlight_phrase($string, 'nice text', '<span style="color:#990000;">', '</span>');
    ```

    The above code prints:

    ```
    Here is a <span style="color:#990000;">nice text</span> string about nothing in particular.
    ```

    Note

    This function used to use the `<strong>` tag by default. Older browsers
    might not support the new HTML5 mark tag, so it is recommended that you
    insert the following CSS code into your stylesheet if you need to support
    such browsers:

    ```
    mark {
        background: #ff0;
        color: #000;
    };
    ```

word\_wrap(*$str*[, *$charlim = 76*])[](#word_wrap "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Input string
        - **$charlim** (`int`) – Character limit

    Returns:
    :   Word-wrapped string

    Return type:
    :   `string`

    Wraps text at the specified *character* count while maintaining
    complete words.

    Example:

    ```
    <?php

    $string = 'Here is a simple string of text that will help us demonstrate this function.';
    echo word_wrap($string, 25);
    /*
     * Would produce:
     * Here is a simple string
     * of text that will help us
     * demonstrate this
     * function.
     *
     * Excessively long words will be split, but URLs will not be.
     */
    ```

ellipsize(*$str*, *$max\_length*[, *$position = 1*[, *$ellipsis = '&hellip;'*]])[](#ellipsize "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Input string
        - **$max\_length** (`int`) – String length limit
        - **$position** (`mixed`) – Position to split at (int or float)
        - **$ellipsis** (`string`) – What to use as the ellipsis character

    Returns:
    :   Ellipsized string

    Return type:
    :   `string`

    This function will strip tags from a string, split it at a defined
    maximum length, and insert an ellipsis.

    The first parameter is the string to ellipsize, the second is the number
    of characters in the final string. The third parameter is where in the
    string the ellipsis should appear from 0 - 1, left to right. For
    example. a value of 1 will place the ellipsis at the right of the
    string, .5 in the middle, and 0 at the left.

    An optional fourth parameter is the kind of ellipsis. By default,
    &hellip; will be inserted.

    Example:

    ```
    <?php

    $str = 'this_string_is_entirely_too_long_and_might_break_my_design.jpg';
    echo ellipsize($str, 32, .5);
    ```

    Produces:

    ```
    this_string_is_e&hellip;ak_my_design.jpg
    ```

excerpt(*$text*, *$phrase = false*, *$radius = 100*, *$ellipsis = '...'*)[](#excerpt "Link to this definition")
:   Parameters:
    :   - **$text** (`string`) – Text to extract an excerpt
        - **$phrase** (`string`) – Phrase or word to extract the text around
        - **$radius** (`int`) – Number of characters before and after $phrase
        - **$ellipsis** (`string`) – What to use as the ellipsis character

    Returns:
    :   Excerpt.

    Return type:
    :   `string`

    This function will extract $radius number of characters before and after the
    central $phrase with an ellipsis before and after.

    The first parameter is the text to extract an excerpt from, the second is the
    central word or phrase to count before and after. The third parameter is the
    number of characters to count before and after the central phrase. If no phrase
    passed, the excerpt will include the first $radius characters with the ellipsis
    at the end.

    Example:

    ```
    <?php

    $text = 'Ut vel faucibus odio. Quisque quis congue libero. Etiam gravida
    eros lorem, eget porttitor augue dignissim tincidunt. In eget risus eget
    mauris faucibus molestie vitae ultricies odio. Vestibulum id ultricies diam.
    Curabitur non mauris lectus. Phasellus eu sodales sem. Integer dictum purus
    ac enim hendrerit gravida. Donec ac magna vel nunc tincidunt molestie sed
    vitae nisl. Cras sed auctor mauris, non dictum tortor. Nulla vel scelerisque
    arcu. Cras ac ipsum sit amet augue laoreet laoreet. Aenean a risus lacus.
    Sed ut tortor diam.';

    echo excerpt($text, 'Donec');
    ```

    Produces:

    ```
    ... non mauris lectus. Phasellus eu sodales sem. Integer dictum purus ac
    enim hendrerit gravida. Donec ac magna vel nunc tincidunt molestie sed
    vitae nisl. Cras sed auctor mauris, non dictum tortor. ...
    ```
