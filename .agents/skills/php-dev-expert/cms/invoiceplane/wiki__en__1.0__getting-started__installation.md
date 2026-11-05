# Installation
 - InvoicePlane Wiki

> **Fonte / Source:** https://wiki.invoiceplane.com/en/1.0/getting-started/installation

---

## Installation

For those of you comfortable with installing web applications, installing InvoicePlane should take 5 minutes or
less.

1. [Download](https://invoiceplane.com/downloads) and extract the archive.
2. Create an empty database on your web server.
3. Upload the files to your web server, either into its own subdirectory or into the public root
   of the web server.
4. Open `index.php` and set your URL like instructed in the file.
5. Run the InvoicePlane installer from your web browser and follow his instructions: `http://your-domain.com/index.php/setup`

Once the installer finished, the installation is complete and you may log into InvoicePlane using the email
address and password you have chosen during the installation.

### Remove index.php from the URL

1. Make sure that [mod\_rewrite](https://go.invoiceplane.com/apachemodrewrite) is enabled on your web server.
2. Open the file `/application/config/config.php`
3. Search for `$config['index_page'] = 'index.php';` in this file and replace it with `$config['index_page'] = '';`
4. Rename the `htaccess` file to `.htaccess`

Now open `http://your-domain.com/setup` to run the setup.

### Run InvoicePlane in a sub directory

If you want to run InvoicePlane in a sub directory (e.g. `http://yourdomain.com/invoices/`) you have to modify the `.htaccess` file which is located in the root directory. You must add the line

```
RewriteBase /sub-directory
```

where `sub-directory` is the directory you want to use. The content of the file should look like this:

```
RewriteEngine on
RewriteBase /sub-directory
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule . index.php [L]
```

[Requirements](wiki__en__1.0__getting-started__requirements.md)
[Quickstart](wiki__en__1.0__getting-started__quickstart.md)
