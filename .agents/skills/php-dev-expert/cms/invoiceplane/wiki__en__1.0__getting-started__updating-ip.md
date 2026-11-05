# Update InvoicePlane
 - InvoicePlane Wiki

> **Fonte / Source:** https://wiki.invoiceplane.com/en/1.0/getting-started/updating-ip

---

## Update InvoicePlane

1. **Make a backup of your database and all files!** This is very important to prevent any data loss.
2. Download the latest version from [InvoicePlane.com](https://invoiceplane.com/downloads).
3. Copy all files to the root directory of your InvoicePlane installation but **do not** overwrite the following files:
   - `/application/config/database.php`
   - Customized templates in `/application/views/`
4. Update the URL in the `/index.php` file.
5. Open `http://yourdomain.com/setup` and follow the instructions. The app will run all updates on
   it's own.
6. Login again and check if everything is working.

If you encounter any problems please post a support request in the [communtiy forums](https://community.invoiceplane.com).

[Quickstart](wiki__en__1.0__getting-started__quickstart.md)
[Modules](wiki__en__1.0__modules.md)
