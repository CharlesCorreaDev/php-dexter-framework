# Security Helper — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/helpers/security_helper.html

---

# Security Helper[](#security-helper "Link to this heading")

The Security Helper file contains security related functions.

## [Loading this Helper](#id1)[](#loading-this-helper "Link to this heading")

This helper is loaded using the following code:

```
<?php

helper('security');
```

## [Available Functions](#id2)[](#available-functions "Link to this heading")

The following functions are available:

sanitize\_filename(*$filename*[, *$relativePath = false*])[](#sanitize_filename "Link to this definition")
:   Parameters:
    :   - **$filename** (`string`) – Filename
        - **$relativePath** (`bool`) – Whether the relative path is acceptable (available since v4.6.2)

    Returns:
    :   Sanitized file name

    Return type:
    :   `string`

    Provides protection against directory traversal.

    For more info, please see the [Security Library](libraries__security.md)
    documentation.

strip\_image\_tags(*$str*)[](#strip_image_tags "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Input string

    Returns:
    :   The input string with no image tags

    Return type:
    :   `string`

    This is a security function that will strip image tags from a string.
    It leaves the image URL as plain text.

    Example:

    ```
    <?php

    $string = strip_image_tags($string);
    ```

encode\_php\_tags(*$str*)[](#encode_php_tags "Link to this definition")
:   Parameters:
    :   - **$str** (`string`) – Input string

    Returns:
    :   Safely formatted string

    Return type:
    :   `string`

    This is a security function that converts PHP tags to entities.

    Example:

    ```
    <?php

    $string = encode_php_tags($string);
    ```
