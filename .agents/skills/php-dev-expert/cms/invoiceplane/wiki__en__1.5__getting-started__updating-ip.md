# Update InvoicePlane
 - InvoicePlane Wiki

> **Fonte / Source:** https://wiki.invoiceplane.com/en/1.5/getting-started/updating-ip

---

## Update InvoicePlane

### Contents

1. [General upgrade information](#general)
2. Additional steps for specific versions
   - [Upgrade to InvoicePlane 1.5.0 from a previous version](#upgrade-from-previous)
   - [Upgrade to InvoicePlane 1.5.1](#upgrade-to-151)

---

### General upgrade information

These steps are **always** required to make sure that InvoicePlane is updated correctly and the version
number
get's updated for your installation. Please make sure you read the additional information below before starting
your upgrade if you upgrade to a specific version. For some versions additional steps are required.

Before you start: **Make a backup of your database and all files!** There will be no support if you missed to
make a backup and lost any data.

1. Make a backup of your database and all files! This is very important to prevent any data loss.
2. Download the latest version from [InvoicePlane.com](https://invoiceplane.com/downloads).
3. Copy all files to the root directory of your InvoicePlane installation but **do not** overwrite the
   following files:
   - The `ipconfig.php` file
   - Customized templates in the `application/views/` folder
   - The files for custom styles: `assets/core/css/custom.css` and `assets/core/css/custom-pdf.css`
4. Open `http://yourdomain.com/index.php/setup` and follow the instructions. The app will run all
   updates onit's own.
5. Login again and check if everything is working.

---

### Additional steps for specific versions

#### Upgrade to InvoicePlane 1.5.0 from a previous version

Version 1.5.0 comes with some changes that require your attention. Be very careful and keep in mind to make a
backup before you start. Make sure to read all instructions completely as we do not support any broken
installations because you didn't followed this guide.

Please follow the next steps **before** running the update / setup!

##### General Upgrade

1. First of all, make a backup of your current installation in another folder you can easily access in the next
   steps.
2. Then, delete everything in your InvoicePlane folder. **Everything**. You have a backup, so don't worry.
   This is very important as many old files are now deprecated and may lead to problems if you keep them. Don't
   forget to also delete the hidden `.htaccess` file.
3. Now, copy the contents of the 1.5.0 package into the InvoicePlane folder.
4. We will migrate some of your configuration to the new files now. All actions will take place in your
   InvoicePlane folder.
   - Make a copy of the `ipconfig.php.example` file and rename the copy to
     `ipconfig.php`.
   - Open the old `index.php` file and copy your URL from the top of the file.
   - Open the `ipconfig.php` file and paste the URL into the `IP_URL` setting like
     this: `IP_URL=http://your-domain.com`.
   - Open the old `application/config/database.php` file and copy your database credentials to
     a text file or note them somewhere else.
   - Set these database credentials in the `ipconfig.php` file. The database host goes into
     the `DB_HOSTNAME` setting like this: `DB_HOSTNAME=localhost`. All other
     database settings are set like this. The database port may not be set, so manually change it to
     `DB_PORT=3306`.

   Make sure you follow he instructions in the `ipconfig.php` file if
   you use a subdomain or a subfolder to run InvoicePlane.
5. After the configuration is migrated, copy the contents of your old `uploads/` folder into the new
   one.
6. You can now run the setup by opening `IP_URL=http://your-domain.com/index.php/setup` in your
   browser. The setup will then upgrade the database, migrate the custom fields and set a new encription key
   for you.

Please notice: if you used custom templates or modified other files, take a look at the following section.

##### Other notable changes

The following changes may not affect all users as they address specific parts of the application.

- Custom fields were overhauled and are now stored in an entirely other way than before. The setup will
  convert all existing custom fields. However, double-check if all fields were correctly migrated and if all
  values are still present. If not, report this bug to the community forums with as much information as
  possible.
- If you used the merchant settings for online payments before, you have to enter all credentials again as
  they can't be migrated automatically.
    
  You can now select from a list of online payment providers. See the [Online Payment](wiki__en__1.5__settings__online-payments.md) page for more information.
- The variable `$show-discounts` was renamed to `$show-item-discounts` for PDF
  templates. If you use the variable, please update it. Please review the [Customize Templates](wiki__en__1.5__templates__customize-templates.md) page for more information about
  the variables.
- The files for custom CSS (`custom.css` and `custom-pdf.css`) moved to the `assets/core/css` folder. Make
  sure you transfer your custom styles to these files.
- If you modified any mPDF settings or added custom fonts, you have to copy these changes to the new location
  of mPDF which is now stored in this directory:
    
  `/vendor/mpdf/mpdf`

---

#### Upgrade from 1.5.0 to 1.5.1

If you upgrade InvoicePlane from version 1.5.0 to 1.5.1 please follow these additional steps:

- Open the `ipconfig.php` file with a text editor and remove the hash (`#`) in the first
  line so the first characters of the file are `<?php`.
- Delete the following folder and its content as it's no longer needed: `application/modules/setup/libraries`
- You can now disable the setup from your ipconfig.php file. To do so, copy `DISABLE_SETUP=false`
  to your ipconfig.php and change it to `DISABLE_SETUP=true`. You can remove the corresponding line
  from your .htaccess file if you want.

#### Upgrade from 1.5.1 to 1.5.2

There are no additional tasks to do if you upgrade InvoicePlane from version 1.5.1 to 1.5.2

---

If you encounter any problems please post a support request in the [communtiy forums](https://community.invoiceplane.com).

[Quickstart](wiki__en__1.5__getting-started__quickstart.md)
[Modules](wiki__en__1.5__modules.md)
