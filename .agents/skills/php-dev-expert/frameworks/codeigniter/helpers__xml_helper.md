# XML Helper — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/helpers/xml_helper.html

---

# XML Helper[](#xml-helper "Link to this heading")

The XML Helper file contains functions that assist in working with XML
data.

## [Loading this Helper](#id1)[](#loading-this-helper "Link to this heading")

This helper is loaded using the following code

```
<?php

helper('xml');
```

## [Available Functions](#id2)[](#available-functions "Link to this heading")

The following functions are available:

xml\_convert(*$str*[, *$protect\_all = false*])[](#xml_convert "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – the text string to convert
        - **$protect\_all** (`bool`) – Whether to protect all content that looks like a potential entity instead of just numbered entities, e.g., &foo;

    Returns:
    :   XML-converted string

    Return type:
    :   `string`

    Takes a string as input and converts the following reserved XML
    characters to entities:

    > - Ampersands: &
    > - Less than and greater than characters: < >
    > - Single and double quotes: ‘ “
    > - Dashes: -

    This function ignores ampersands if they are part of existing numbered
    character entities, e.g., &#123;. Example:

    ```
    <?php

    $string = '<p>Here is a paragraph & an entity (&#123;).</p>';
    $string = xml_convert($string);
    echo $string;
    ```

    outputs:

    ```
    &lt;p&gt;Here is a paragraph &amp; an entity (&#123;).&lt;/p&gt;
    ```
