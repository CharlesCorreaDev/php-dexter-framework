# Internal Redirect | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/redirect/

---

# Internal Redirect[¶](#internal-redirect "Permanent link")

Web server internal redirect via backend response header, aka `X-Sendfile` or `X-Accel-Redirect`, is a feature used by some web backend developers and popularized by Ruby on Rails. LSWS and OLS use a simple `Location` or `X-LiteSpeed-Location` header to achieve the same goal.

The backend process, instead of returning a full HTTP page response back, returns only a pointer to a local path.

When the web server receives this special URL location pointer via `X-LiteSpeed-Location`, the web server will output the content of the specified path, rather than the response from the backend process.

The end user is not aware of this internal redirection and the data appears to be returned from the original URL.

## Implementing Internal Redirect[¶](#implementing-internal-redirect "Permanent link")

To get this to work on LiteSpeed, you can either use the `Location` or the `X-LiteSpeed-Location` header in your PHP script. `X-LiteSpeed-Location` is the recommended way to implement an Internal Redirect on LSWS.

### Location[¶](#location "Permanent link")

In a PHP script, set a `Location` header pointing to a URI without the `http://example.com` part. Do not set a `Status` header in response. Make sure no `Status` header is returned. PHP always adds a `Status` header automatically when a `Location` header is set.

```
<?php
header('Location: /php-icon.png');
?>
```

### X-LiteSpeed-Location[¶](#x-litespeed-location "Permanent link")

Add a special `X-LiteSpeed-Location` header in exactly the same way as the `Location` header can be added.

For example, add a line like this to the PHP script:

```
header('X-LiteSpeed-Location: /path/to/file_to_be_redirected');
```

Note

`/path/to/file_to_be_redirected` should be a URI without `http://domain.com`, but with the preceding `/`, such as can be seen in the `test.php` script in your document root. LSWS only supports "URI" instead of "file path".

```
<?php
header('X-LiteSpeed-Location: /img/php-icon.png');
?>
```

That's all you need to do. LiteSpeed will take over the rest, perform an internal redirect, and send the file back with `sendfile()` support if the URL points to a static file.

Run a test through `http://example.com/test.php` and you will see it return the `php-icon.png` image.

## Downloading the File Instead of Displaying[¶](#downloading-the-file-instead-of-displaying "Permanent link")

If you want to download the file instead of showing it in the browser, you can add an extra header, `Content-Disposition`, like so:

```
<?php
header('Content-Disposition: attachment; filename = php-icon.png');
header('X-LiteSpeed-Location: /img/php-icon.png');
?>
```

Save the above to `http://example.com/test.php` and run it. The script will download `php-icon.png` instead of displaying it in the browser.

## Redirecting via URL vs. File Path[¶](#redirecting-via-url-vs-file-path "Permanent link")

Unlike the `X-Sendfile` or `X-Accel-Redirect` implementations in other web servers, LiteSpeed uses a URI instead of a file path for security reasons. In this way, only a file under the document root of a virtual host or a context can be returned. Otherwise, you could have a huge security issue. Imagine if, for some reason, either accidentally or maliciously, the script sends back a header `X-Sendfile: /../etc/./passwd%00`, or something like that. The user accounts on your server would no longer be a secret!

## Protection from Direct Access[¶](#protection-from-direct-access "Permanent link")

If you want to prevent a user from accessing a file directly, just use a hard-to-guess URI like `/you_never_know/where_file_is_stored/...`. Or you can use a rewrite rule (in `httpd.conf`) to deny direct access to the directory holding the files, like so:

```
RewriteCond %{ORG_REQ_URI} ^/blocked/uri/
RewriteRule ^/blocked/uri/ - [R=403,F]
```

Here is a version in `.htaccess` (notice the difference between `^/blocked` and `^blocked`)

```
RewriteCond %{ORG_REQ_URI} ^/blocked/uri/
RewriteRule ^blocked/uri/ - [R=403,F]
```

`%{ORG_REQ_URI}` is a LiteSpeed-specific rewrite variable, which refers to the URI in the original request header.

Another advantage of our internal redirect implementation is that it does not limit you to sending static files. It can be used to pass the request to another script for further processing.

## Ruby-on-Rails[¶](#ruby-on-rails "Permanent link")

Here is a short example of how to use Internal Redirect for sending files within a RoR Controller. Below is a sendfile function that can be attached to any action.

```
def sendfile
  @name = session[:filename]                 # a session variable set in a view or other function
  filename = "public/download/" + @name      # create the URI, must be under /public     
  headers["Location"] = filename             # set the 'Location header
  redirect_to(filename)                      # redirect
end
```
