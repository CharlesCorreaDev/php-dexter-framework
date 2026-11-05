# CLIRequest Class — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/cli/cli_request.html

---

# CLIRequest Class[](#clirequest-class "Link to this heading")

If a request comes from a command line invocation, the request object is actually a
`CLIRequest`. It behaves the same as a [conventional request](incoming__request.md)
but adds some accessor methods for convenience.

## Additional Accessors[](#additional-accessors "Link to this heading")

### getSegments()[](#getsegments "Link to this heading")

Returns an array of the command line arguments deemed to be part of a path:

```
<?php

// command line: php index.php users 21 profile --foo bar
echo $request->getSegments();  // ['users', '21', 'profile']
```

### getPath()[](#getpath "Link to this heading")

Returns the reconstructed path as a string:

```
<?php

// command line: php index.php users 21 profile --foo bar
echo $request->getPath();  // users/21/profile
```

### getOptions()[](#getoptions "Link to this heading")

Returns an array of the command line arguments deemed to be options:

```
<?php

// command line: php index.php users 21 profile --foo bar
echo $request->getOptions();  // ['foo' => 'bar']
```

### getOption($key)[](#getoption-key "Link to this heading")

Returns the value of a specific command line argument deemed to be an option:

```
<?php

// command line: php index.php users 21 profile --foo bar
echo $request->getOption('foo');      // bar
echo $request->getOption('notthere'); // null
```

### getOptionString()[](#getoptionstring "Link to this heading")

Returns the reconstructed command line string for the options:

```
<?php

// command line: php index.php users 21 profile --foo bar
echo $request->getOptionString();  // -foo bar
```

Passing `true` to the first argument will try to write long options using two dashes:

```
<?php

// php index.php user 21 --foo bar -f
echo $request->getOptionString();     // -foo bar -f
echo $request->getOptionString(true); // --foo bar -f
```
