# Upgrading from 4.1.3 to 4.1.4 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_414.html

---

# Upgrading from 4.1.3 to 4.1.4[](#upgrading-from-4-1-3-to-4-1-4 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

This release focuses on code style. All changes (except those noted below) are cosmetic to bring the code in line with the new
[CodeIgniter Coding Standard](https://github.com/CodeIgniter/coding-standard) (based on PSR-12).

## [Breaking Changes](#id1)[](#breaking-changes "Link to this heading")

### [Method Scope](#id2)[](#method-scope "Link to this heading")

The following methods were changed from `public` to `protected` to match their parent class methods and better align with their uses.
If you relied on any of these methods being public (highly unlikely) adjust your code accordingly:

- `CodeIgniter\Database\MySQLi\Connection::execute()`
- `CodeIgniter\Database\MySQLi\Connection::_fieldData()`
- `CodeIgniter\Database\MySQLi\Connection::_indexData()`
- `CodeIgniter\Database\MySQLi\Connection::_foreignKeyData()`
- `CodeIgniter\Database\Postgre\Builder::_like_statement()`
- `CodeIgniter\Database\Postgre\Connection::execute()`
- `CodeIgniter\Database\Postgre\Connection::_fieldData()`
- `CodeIgniter\Database\Postgre\Connection::_indexData()`
- `CodeIgniter\Database\Postgre\Connection::_foreignKeyData()`
- `CodeIgniter\Database\SQLSRV\Connection::execute()`
- `CodeIgniter\Database\SQLSRV\Connection::_fieldData()`
- `CodeIgniter\Database\SQLSRV\Connection::_indexData()`
- `CodeIgniter\Database\SQLSRV\Connection::_foreignKeyData()`
- `CodeIgniter\Database\SQLite3\Connection::execute()`
- `CodeIgniter\Database\SQLite3\Connection::_fieldData()`
- `CodeIgniter\Database\SQLite3\Connection::_indexData()`
- `CodeIgniter\Database\SQLite3\Connection::_foreignKeyData()`
- `CodeIgniter\Images\Handlers\GDHandler::_flatten()`
- `CodeIgniter\Images\Handlers\GDHandler::_flip()`
- `CodeIgniter\Images\Handlers\ImageMagickHandler::_flatten()`
- `CodeIgniter\Images\Handlers\ImageMagickHandler::_flip()`
- `CodeIgniter\Test\Mock\MockIncomingRequest::detectURI()`
- `CodeIgniter\Test\Mock\MockSecurity.php::sendCookie()`

## [Project Files](#id3)[](#project-files "Link to this heading")

All files in the project space were reformatted with the new coding style. This will not affect
existing code but you may want to apply the updated coding style to your own projects to keep
them in line with the framework’s version of these files.
