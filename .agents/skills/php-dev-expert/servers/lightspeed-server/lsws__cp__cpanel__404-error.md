# 404 Error with LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/404-error/

---

# Understanding Error 404 Not Found[¶](#understanding-error-404-not-found "Permanent link")

In most cases the `404 Not Found` error is related to a missing or misconfigured file or webpage. When the user requests that file or webpage, LiteSpeed Web Server will return a 404 code. 404 indicates that there is something wrong, and LSWS can't find that file. Let's see what can trigger this error and how to resolve it.

## Missing file[¶](#missing-file "Permanent link")

Many templates include a path to `favicon.ico`, but not the *actual* favicon, and when you load your site you can see in the developer console a line like:

```
GET <https://domain.com/favicon.ico> 404
```

In this case the error is not fatal, but it's a good practice to resolve it anyway. To do so, simply find the included path for the favicon and then put the favicon there. You can use that method to resolve not only missing favicons but other files too.

## Missing Rewrite Rules[¶](#missing-rewrite-rules "Permanent link")

This is the second most common reason for Error 404. For example, if you change the permalink structure of your website, but you do not put rewrite rules or redirects in place, LSWS won't be able to find the page's new location, and will return a 404. You can reverse the changes for permalinks, or review your `.htaccess` file and put the appropriate rewrite rules there.

## Wrong Rewrite Rules[¶](#wrong-rewrite-rules "Permanent link")

If your `.htaccess` file contains incorrect or malformed redirects or rewrite rules, these can lead to a 404 error. To determine whether this is your problem, you can reverse your changes, or you can temporarily rename your `.htaccess` file, like so:

```
mv .htaccess htaccess-wrong
```

## Different Web Server[¶](#different-web-server "Permanent link")

If you or your hosting provider change the web server (for example, to nginx) you may see a 404 error. Some web servers do not read the `.htaccess` file, and you need to include the critical rules directly in the `.conf`/`vconf` file for that web server. You may need to contact your hosting provider for help with that.

## Removed Domain Name[¶](#removed-domain-name "Permanent link")

Depending on the server configuration, in some cases when a domain name points to a server but the virtual host doesn't exist, you can see a 404 error. You can contact your hosting provider for additional information, or you can review the server configuration if you have access.

## Wrong Document Root[¶](#wrong-document-root "Permanent link")

This is due to a command mistake when the new vhost is created, The user adds the wrong document root. In that case the web server will search for the files in a different directory, and when they are not there you will see Error 404.

## Changed NS Server for a Domain Name[¶](#changed-ns-server-for-a-domain-name "Permanent link")

If you change the Name Servers (NS) for a domain name before configuring the domain/webpage in the new location, you can experience a 404. Always change NS server *after* the domain/webpage is properly working in the new location.

## DNS Cache[¶](#dns-cache "Permanent link")

If you migrate your page to a new server, change the NS servers for the domain, and delete the content on the old server, it's still possible to see Error 404. That is because most ISPs (Internet Service Providers) have DNS caching in place, and your page is still loading from the old location. Its a good practice not to delete the content from the old server for 3-4 days to avoid such an issue.

## Missing /cgi-bin/ folder in document root[¶](#missing-cgi-bin-folder-in-document-root "Permanent link")

In a cPanel environment, under `/home/USER1/public_html`, there is no `cgi-bin` folder normally. However, in a cPanel Apache virtual host setting, you will find a `ScriptAlias` setting addresses this issue for Apache. LSWS, on the other hand, returns a 404 because the folder does not exist. Please see **[cgi-bin Script Redirect Not Found](lsws__cp__cpanel__switch-apache.md#cgi-bin-script-redirect-not-found)** to learn how to fix it.
