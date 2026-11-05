# Inflector Helper — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/helpers/inflector_helper.html

---

# Inflector Helper[](#inflector-helper "Link to this heading")

The Inflector Helper file contains functions that permit you to change
**English** words to plural, singular, camel case, etc.

## [Loading this Helper](#id1)[](#loading-this-helper "Link to this heading")

This helper is loaded using the following code:

```
<?php

helper('inflector');
```

## [Available Functions](#id2)[](#available-functions "Link to this heading")

The following functions are available:

singular(*$string*)[](#singular "Link to this definition")
:   Parameters:
    :   - **$string** (`string`) – Input string

    Returns:
    :   A singular word

    Return type:
    :   `string`

    Changes a plural word to singular. Example:

    ```
    <?php

    echo singular('dogs'); // Prints 'dog'
    ```

plural(*$string*)[](#plural "Link to this definition")
:   Parameters:
    :   - **$string** (`string`) – Input string

    Returns:
    :   A plural word

    Return type:
    :   `string`

    Changes a singular word to plural. Example:

    ```
    <?php

    echo plural('dog'); // Prints 'dogs'
    ```

counted(*$count*, *$string*)[](#counted "Link to this definition")
:   Parameters:
    :   - **$count** (`int`) – Number of items
        - **$string** (`string`) – Input string

    Returns:
    :   A singular or plural phrase

    Return type:
    :   `string`

    Changes a word and its count to a phrase. Example:

    ```
    <?php

    echo counted(3, 'dog'); // Prints '3 dogs'
    ```

camelize(*$string*)[](#camelize "Link to this definition")
:   Parameters:
    :   - **$string** (`string`) – Input string

    Returns:
    :   Camel case string

    Return type:
    :   `string`

    Changes a string of words separated by spaces or underscores to camel
    case. Example:

    ```
    <?php

    echo camelize('my_dog_spot'); // Prints 'myDogSpot'
    ```

pascalize(*$string*)[](#pascalize "Link to this definition")
:   Parameters:
    :   - **$string** (`string`) – Input string

    Returns:
    :   Pascal case string

    Return type:
    :   `string`

    Changes a string of words separated by spaces or underscores to Pascal
    case, which is camel case with the first letter capitalized. Example:

    ```
    <?php

    echo pascalize('my_dog_spot'); // Prints 'MyDogSpot'
    ```

underscore(*$string*)[](#underscore "Link to this definition")
:   Parameters:
    :   - **$string** (`string`) – Input string

    Returns:
    :   String containing underscores instead of spaces

    Return type:
    :   `string`

    Takes multiple words separated by spaces and underscores them.
    Example:

    ```
    <?php

    echo underscore('my dog spot'); // Prints 'my_dog_spot'
    ```

decamelize(*$string*)[](#decamelize "Link to this definition")
:   Parameters:
    :   - **$string** (`string`) – Input string

    Returns:
    :   String containing underscores between words

    Return type:
    :   `string`

    Takes multiple words in camelCase or PascalCase and converts them to snake\_case.
    Example:

    ```
    <?php

    echo decamelize('myDogSpot'); // Prints 'my_dog_spot'
    ```

humanize(*$string*[, *$separator = '\_'*])[](#humanize "Link to this definition")
:   Parameters:
    :   - **$string** (`string`) – Input string
        - **$separator** (`string`) – Input separator

    Returns:
    :   Humanized string

    Return type:
    :   `string`

    Takes multiple words separated by underscores and adds spaces between
    them. Each word is capitalized.

    Example:

    ```
    <?php

    echo humanize('my_dog_spot'); // Prints 'My Dog Spot'
    ```

    To use dashes instead of underscores:

    ```
    <?php

    echo humanize('my-dog-spot', '-'); // Prints 'My Dog Spot'
    ```

is\_pluralizable(*$word*)[](#is_pluralizable "Link to this definition")
:   Parameters:
    :   - **$word** (`string`) – Input string

    Returns:
    :   true if the word is countable or false if not

    Return type:
    :   `bool`

    Checks if the given word has a plural version. Example:

    ```
    <?php

    is_pluralizable('equipment'); // Returns false
    ```

dasherize(*$string*)[](#dasherize "Link to this definition")
:   Parameters:
    :   - **$string** (`string`) – Input string

    Returns:
    :   Dasherized string

    Return type:
    :   `string`

    Replaces underscores with dashes in the string. Example:

    ```
    <?php

    dasherize('hello_world'); // Returns 'hello-world'
    ```

ordinal(*$integer*)[](#ordinal "Link to this definition")
:   Parameters:
    :   - **$integer** (`int`) – The integer to determine the suffix

    Returns:
    :   Ordinal suffix

    Return type:
    :   `string`

    Returns the suffix that should be added to a
    number to denote the position such as
    1st, 2nd, 3rd, 4th. Example:

    ```
    <?php

    ordinal(1); // Returns 'st'
    ```

ordinalize(*$integer*)[](#ordinalize "Link to this definition")
:   Parameters:
    :   - **$integer** (`int`) – The integer to ordinalize

    Returns:
    :   Ordinalized integer

    Return type:
    :   `string`

    Turns a number into an ordinal string used
    to denote the position such as 1st, 2nd, 3rd, 4th.
    Example:

    ```
    <?php

    ordinalize(1); // Returns '1st'
    ```
