# Upgrading From a Previous Version — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrading.html

---

# Upgrading From a Previous Version[](#upgrading-from-a-previous-version "Link to this heading")

Please read the upgrade notes corresponding to the version you are
upgrading from.

See also [Backward Compatibility Notes](installation__backward_compatibility_notes.md).

The manual mentions changes to **project space**. To perform the update,
you need to compare the original files from **vendor/codeigniter4/framework** or from the ZIP archive and make changes.

Example, the original **app/Config/App.php** will be located in **vendor/codeigniter4/framework/app/Config/App.php**.
Alternatively, replace it with a new file and add your previous lines.

Note

If you don’t know what version of CodeIgniter you are currently running,
you can get it from [the Debug Toolbar](testing__debugging.md#the-debug-toolbar),
or simply echo the constant `\CodeIgniter\CodeIgniter::CI_VERSION`.

- [Backward Compatibility Notes](installation__backward_compatibility_notes.md)
- [Upgrading from 4.7.4 to 4.7.5](installation__upgrade_475.md)
- [Upgrading from 4.7.3 to 4.7.4](installation__upgrade_474.md)
- [Upgrading from 4.7.2 to 4.7.3](installation__upgrade_473.md)
- [Upgrading from 4.7.1 to 4.7.2](installation__upgrade_472.md)
- [Upgrading from 4.7.0 to 4.7.1](installation__upgrade_471.md)
- [Upgrading from 4.6.x to 4.7.0](installation__upgrade_470.md)
- [Upgrading from 4.6.4 to 4.6.5](installation__upgrade_465.md)
- [Upgrading from 4.6.3 to 4.6.4](installation__upgrade_464.md)
- [Upgrading from 4.6.2 to 4.6.3](installation__upgrade_463.md)
- [Upgrading from 4.6.1 to 4.6.2](installation__upgrade_462.md)
- [Upgrading from 4.6.0 to 4.6.1](installation__upgrade_461.md)
- [Upgrading from 4.5.8 to 4.6.0](installation__upgrade_460.md)
- [Upgrading from 4.5.7 to 4.5.8](installation__upgrade_458.md)
- [Upgrading from 4.5.6 to 4.5.7](installation__upgrade_457.md)
- [Upgrading from 4.5.5 to 4.5.6](installation__upgrade_456.md)
- [Upgrading from 4.5.4 to 4.5.5](installation__upgrade_455.md)
- [Upgrading from 4.5.3 to 4.5.4](installation__upgrade_454.md)
- [Upgrading from 4.5.2 to 4.5.3](installation__upgrade_453.md)
- [Upgrading from 4.5.1 to 4.5.2](installation__upgrade_452.md)
- [Upgrading from 4.5.0 to 4.5.1](installation__upgrade_451.md)
- [Upgrading from 4.4.8 to 4.5.0](installation__upgrade_450.md)
- [Upgrading from 4.4.7 to 4.4.8](installation__upgrade_448.md)
- [Upgrading from 4.4.6 to 4.4.7](installation__upgrade_447.md)
- [Upgrading from 4.4.5 to 4.4.6](installation__upgrade_446.md)
- [Upgrading from 4.4.4 to 4.4.5](installation__upgrade_445.md)
- [Upgrading from 4.4.3 to 4.4.4](installation__upgrade_444.md)
- [Upgrading from 4.4.2 to 4.4.3](installation__upgrade_443.md)
- [Upgrading from 4.4.1 to 4.4.2](installation__upgrade_442.md)
- [Upgrading from 4.4.0 to 4.4.1](installation__upgrade_441.md)
- [Upgrading from 4.3.8 to 4.4.0](installation__upgrade_440.md)
- [Upgrading from 4.3.7 to 4.3.8](installation__upgrade_438.md)
- [Upgrading from 4.3.6 to 4.3.7](installation__upgrade_437.md)
- [Upgrading from 4.3.5 to 4.3.6](installation__upgrade_436.md)
- [Upgrading from 4.3.4 to 4.3.5](installation__upgrade_435.md)
- [Upgrading from 4.3.3 to 4.3.4](installation__upgrade_434.md)
- [Upgrading from 4.3.2 to 4.3.3](installation__upgrade_433.md)
- [Upgrading from 4.3.1 to 4.3.2](installation__upgrade_432.md)
- [Upgrading from 4.3.0 to 4.3.1](installation__upgrade_431.md)
- [Upgrading from 4.2.12 to 4.3.0](installation__upgrade_430.md)
- [Upgrading from 4.2.11 to 4.2.12](installation__upgrade_4212.md)
- [Upgrading from 4.2.10 to 4.2.11](installation__upgrade_4211.md)
- [Upgrading from 4.2.9 to 4.2.10](installation__upgrade_4210.md)
- [Upgrading from 4.2.7 to 4.2.8](installation__upgrade_428.md)
- [Upgrading from 4.2.6 to 4.2.7](installation__upgrade_427.md)
- [Upgrading from 4.2.5 to 4.2.6](installation__upgrade_426.md)
- [Upgrading from 4.2.3 to 4.2.5](installation__upgrade_425.md)
- [Upgrading from 4.2.2 to 4.2.3](installation__upgrade_423.md)
- [Upgrading from 4.2.1 to 4.2.2](installation__upgrade_422.md)
- [Upgrading from 4.2.0 to 4.2.1](installation__upgrade_421.md)
- [Upgrading from 4.1.9 to 4.2.0](installation__upgrade_420.md)
- [Upgrading from 4.1.7 to 4.1.8](installation__upgrade_418.md)
- [Upgrading from 4.1.6 to 4.1.7](installation__upgrade_417.md)
- [Upgrading from 4.1.5 to 4.1.6](installation__upgrade_416.md)
- [Upgrading from 4.1.4 to 4.1.5](installation__upgrade_415.md)
- [Upgrading from 4.1.3 to 4.1.4](installation__upgrade_414.md)
- [Upgrading from 4.1.2 to 4.1.3](installation__upgrade_413.md)
- [Upgrading from 4.1.1 to 4.1.2](installation__upgrade_412.md)
- [Upgrading from 4.0.5 to 4.1.0 or 4.1.1](installation__upgrade_410.md)
- [Upgrading from 4.0.4 to 4.0.5](installation__upgrade_405.md)
- [Upgrading from 4.0.x to 4.0.4](installation__upgrade_404.md)
- [Upgrading from 3.x to 4.x](installation__upgrade_4xx.md)
  - [Upgrade Models](installation__upgrade_models.md)
  - [Upgrade Views](installation__upgrade_views.md)
  - [Upgrade Controllers](installation__upgrade_controllers.md)
  - [Upgrade Configuration](installation__upgrade_configuration.md)
  - [Upgrade Database](installation__upgrade_database.md)
  - [Upgrade Emails](installation__upgrade_emails.md)
  - [Upgrade Encryption](installation__upgrade_encryption.md)
  - [Upgrade Working with Uploaded Files](installation__upgrade_file_upload.md)
  - [Upgrade HTML Tables](installation__upgrade_html_tables.md)
  - [Upgrade Image Manipulation Class](installation__upgrade_images.md)
  - [Upgrade Localization](installation__upgrade_localization.md)
  - [Upgrade Migrations](installation__upgrade_migrations.md)
  - [Upgrade Output Class](installation__upgrade_responses.md)
  - [Upgrade Pagination](installation__upgrade_pagination.md)
  - [Upgrade Routing](installation__upgrade_routing.md)
  - [Upgrade Security](installation__upgrade_security.md)
  - [Upgrade Sessions](installation__upgrade_sessions.md)
  - [Upgrade Validations](installation__upgrade_validations.md)
  - [Upgrade View Parser](installation__upgrade_view_parser.md)
