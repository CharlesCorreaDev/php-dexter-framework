# phpDocumentor » Default

> **Fonte / Source:** https://www.fuelphp.com/api/packages/Default.html

---

- Packages
- [Default](api__packages__Default.md "Default")
- Functions
- [normalize\_driver\_types()

  ```
  normalize_driver_types
  ```](#normalize_driver_types "normalize_driver_types :: ")
- Interfaces
- [Cache\_Handler\_Driver](#Cache_Handler_Driver)
- [Config\_Interface](#Config_Interface)
- [Lang\_Interface](#Lang_Interface)
- [Sanitization](#Sanitization)
- Classes
- [Cache\_Handler\_Json](#Cache_Handler_Json)
- [Cache\_Handler\_Serialized](#Cache_Handler_Serialized)
- [Cache\_Handler\_String](#Cache_Handler_String)
- [Cache\_Storage\_Apc](#Cache_Storage_Apc)
- [Cache\_Storage\_Driver](#Cache_Storage_Driver)
- [Cache\_Storage\_File](#Cache_Storage_File)
- [Cache\_Storage\_Memcached](#Cache_Storage_Memcached)
- [Cache\_Storage\_Redis](#Cache_Storage_Redis)
- [Cache\_Storage\_Xcache](#Cache_Storage_Xcache)
- [CacheNotFoundException](#CacheNotFoundException)
- [Config\_Db](#Config_Db "DB config data parser")
- [Config\_File](#Config_File "A base Config File class for File based configs.")
- [Config\_Ini](#Config_Ini "INI Config file parser")
- [Config\_Json](#Config_Json "JSON Config file parser")
- [Config\_Memcached](#Config_Memcached "DB config data parser")
- [Config\_Php](#Config_Php "PHP Config file parser")
- [Config\_Yml](#Config_Yml "Yaml Config file parser")
- [Controller\_Rest](#Controller_Rest)
- [Database\_Dblib\_Connection](#Database_Dblib_Connection)
- [Database\_MySQL\_Connection](#Database_MySQL_Connection)
- [Database\_MySQLi\_Cached](#Database_MySQLi_Cached)
- [Database\_MySQLi\_Connection](#Database_MySQLi_Connection)
- [Database\_MySQLi\_Result](#Database_MySQLi_Result)
- [Database\_PDO\_Cached](#Database_PDO_Cached)
- [Database\_PDO\_Connection](#Database_PDO_Connection)
- [Database\_PDO\_Result](#Database_PDO_Result)
- [Database\_Query\_Builder\_Delete](#Database_Query_Builder_Delete)
- [Database\_Query\_Builder\_Insert](#Database_Query_Builder_Insert)
- [Database\_Query\_Builder\_Join](#Database_Query_Builder_Join)
- [Database\_Query\_Builder\_Select](#Database_Query_Builder_Select)
- [Database\_Query\_Builder\_Update](#Database_Query_Builder_Update)
- [Database\_Query\_Builder\_Where](#Database_Query_Builder_Where)
- [Database\_Query\_Builder](#Database_Query_Builder)
- [Database\_Result\_Cached](#Database_Result_Cached)
- [Database\_SQLite\_Builder\_Delete](#Database_SQLite_Builder_Delete)
- [Database\_SQLite\_Builder\_Update](#Database_SQLite_Builder_Update)
- [Database\_SQLite\_Connection](#Database_SQLite_Connection)
- [Database\_Sqlsrv\_Connection](#Database_Sqlsrv_Connection)
- [Database\_Connection](#Database_Connection)
- [Database\_Exception](#Database_Exception)
- [Database\_Expression](#Database_Expression)
- [Database\_Query](#Database_Query)
- [Database\_Result](#Database_Result)
- [Database\_Schema](#Database_Schema)
- [File\_Handler\_Directory](#File_Handler_Directory)
- [File\_Handler\_File](#File_Handler_File)
- [File\_Area](#File_Area)
- [Image\_Driver](#Image_Driver)
- [Image\_Gd](#Image_Gd)
- [Image\_Imagemagick](#Image_Imagemagick)
- [Image\_Imagick](#Image_Imagick)
- [Lang\_Db](#Lang_Db "DB lang data parser")
- [Lang\_File](#Lang_File "A base Lang File class for File based configs.")
- [Lang\_Ini](#Lang_Ini "INI Lang file parser")
- [Lang\_Json](#Lang_Json "JSON Lang file parser")
- [Lang\_Php](#Lang_Php "PHP Lang file parser")
- [Lang\_Yml](#Lang_Yml "Yaml Lang file parser")
- [Model\_Crud](#Model_Crud)
- [Mongo\_DbException](#Mongo_DbException "This code is based on Redisent, a Redis interface for the modest.")
- [Mongo\_Db](#Mongo_Db)
- [RedisException](#RedisException)
- [Redis\_Db](#Redis_Db "Redisent, a Redis interface for the modest among us")
- [RequestException](#RequestException)
- [RequestStatusException](#RequestStatusException)
- [Session\_Cookie](#Session_Cookie)
- [Session\_Db](#Session_Db)
- [Session\_Driver](#Session_Driver)
- [Session\_Exception](#Session_Exception)
- [Session\_File](#Session_File)
- [Session\_Memcached](#Session_Memcached)
- [Session\_Redis](#Session_Redis)
- [ThemeException](#ThemeException)
- [Theme](#Theme "Handles loading theme views and assets.")
- [CacheExpiredException](#CacheExpiredException)
- [Cache](#Cache)
- [ConfigException](#ConfigException)
- [Config](#Config)
- [Controller](#Controller)
- [Crypt](#Crypt "Sodium encryption/decryption code based on HaLite from ParagonIE")
- [DB](#DB)
- [PhpErrorException](#PhpErrorException "Exception class for standard PHP errors, this will make them catchable")
- [Errorhandler](#Errorhandler)
- [FileAccessException](#FileAccessException)
- [OutsideAreaException](#OutsideAreaException)
- [InvalidPathException](#InvalidPathException)
- [FtpConnectionException](#FtpConnectionException)
- [FtpFileAccessException](#FtpFileAccessException)
- [FuelException](#FuelException "General Fuel Exception class")
- [HttpException](#HttpException)
- [HttpBadRequestException](#HttpBadRequestException)
- [HttpNoAccessException](#HttpNoAccessException)
- [HttpNotFoundException](#HttpNotFoundException)
- [HttpServerErrorException](#HttpServerErrorException)
- [Image](#Image)
- [LangException](#LangException)
- [Lang](#Lang)
- [Log](#Log "Log core class facade for the Monolog composer package.")
- [Model](#Model)
- [Pagination](#Pagination)
- [Profiler](#Profiler)
- [Response](#Response)
- [Route](#Route)
- [Router](#Router)
- [SecurityException](#SecurityException)
- [Str](#Str "String handling with encoding support")
- [TestCase](#TestCase "A Fuel Specific extension of the PHPUnit TestCase.")
- [TestCase](#TestCase "A Fuel Specific extension of the PHPUnit TestCase.")
- [Migrate](#Migrate "migrate task")
- [Auth\_Acl\_Driver](#Auth_Acl_Driver)
- [Auth\_Acl\_Simpleacl](#Auth_Acl_Simpleacl)
- [Auth\_Group\_Driver](#Auth_Group_Driver)
- [Auth\_Group\_Simplegroup](#Auth_Group_Simplegroup)
- [Auth\_Login\_Driver](#Auth_Login_Driver)
- [Auth\_Driver](#Auth_Driver)
- [SimpleUserUpdateException](#SimpleUserUpdateException)
- [SimpleUserWrongPassword](#SimpleUserWrongPassword)
- [OpauthException](#OpauthException)
- [Auth\_Opauth](#Auth_Opauth)
- [Auth\_Group](#Auth_Group)
- [Auth\_Grouppermission](#Auth_Grouppermission)
- [Auth\_Metadata](#Auth_Metadata)
- [Auth\_Permission](#Auth_Permission)
- [Auth\_Provider](#Auth_Provider)
- [Auth\_Role](#Auth_Role)
- [Auth\_Rolepermission](#Auth_Rolepermission)
- [Auth\_User](#Auth_User)
- [Auth\_Userpermission](#Auth_Userpermission)
- [AuthException](#AuthException)
- [Auth\_Create\_Usertables](#Auth_Create_Usertables)
- [Auth\_Create\_Grouptables](#Auth_Create_Grouptables)
- [Auth\_Create\_Roletables](#Auth_Create_Roletables)
- [Auth\_Create\_Permissiontables](#Auth_Create_Permissiontables)
- [Auth\_Create\_Authdefaults](#Auth_Create_Authdefaults)
- [Auth\_Add\_Authactions](#Auth_Add_Authactions)
- [Auth\_Add\_Permissionsfilter](#Auth_Add_Permissionsfilter)
- [Auth\_Create\_Providers](#Auth_Create_Providers)
- [Auth\_Create\_Oauth2tables](#Auth_Create_Oauth2tables)
- [Auth\_Fix\_Jointables](#Auth_Fix_Jointables)
- [Auth\_Group\_Optional](#Auth_Group_Optional)
- [Simple2orm](#Simple2orm "Converts a SimpleAuth ruleset to an OrmAuth one")
- [Email\_Driver\_Mail](#Email_Driver_Mail)
- [Email\_Driver\_Mailgun](#Email_Driver_Mailgun)
- [Email\_Driver\_Mandrill](#Email_Driver_Mandrill)
- [Email\_Driver\_Noop](#Email_Driver_Noop)
- [SendmailConnectionException](#SendmailConnectionException)
- [SendmailFailedException](#SendmailFailedException)
- [Email\_Driver\_Sendmail](#Email_Driver_Sendmail)
- [SmtpConnectionException](#SmtpConnectionException)
- [SmtpCommandFailureException](#SmtpCommandFailureException)
- [SmtpTimeoutException](#SmtpTimeoutException)
- [SmtpAuthenticationFailedException](#SmtpAuthenticationFailedException)
- [Email\_Driver\_Smtp](#Email_Driver_Smtp)
- [Email\_Driver](#Email_Driver)
- [AttachmentNotFoundException](#AttachmentNotFoundException)
- [InvalidAttachmentsException](#InvalidAttachmentsException)
- [InvalidEmailStringEncoding](#InvalidEmailStringEncoding)
- [EmailSendingFailedException](#EmailSendingFailedException)
- [EmailValidationFailedException](#EmailValidationFailedException)
- [Email](#Email)
- [Fromdb](#Fromdb "Run scaffolding or model generation based an an existing database tables.")
- [Controller\_Admin](#Controller_Admin)
- [Controller\_Base](#Controller_Base)
- [Controller\_Admin](#Controller_Admin)
- [Controller\_Base](#Controller_Base)
- [Controller\_Admin](#Controller_Admin)
- [Controller\_Base](#Controller_Base)
- [Model\_Nestedset](#Model_Nestedset "Implements NestedSets (http://en.wikipedia.org/wiki/Nested_set_model)")
- [RelationNotSoft](#RelationNotSoft)
- [Observer\_CreatedAt](#Observer_CreatedAt "CreatedAt observer.")
- [Observer\_Self](#Observer_Self "Dummy observer class, which allows you to define observer methods in the
  model itself.")
- [Observer\_Slug](#Observer_Slug "Observer class to generate SEO friendly slugs from a model property (usually something like a title)")
- [InvalidContentType](#InvalidContentType "Invalid content exception, thrown when type conversion is not possible.")
- [Observer\_Typing](#Observer_Typing "Typing observer.")
- [Observer\_UpdatedAt](#Observer_UpdatedAt "UpdatedAt observer.")
- [ValidationFailed](#ValidationFailed "Exception to throw when validation failed")
- [Observer\_Validation](#Observer_Validation "Observer class to validate the properties of the model before save.")
- [BelongsTo](#BelongsTo)
- [HasMany](#HasMany)
- [HasOne](#HasOne)
- [ManyMany](#ManyMany)
- [RecordNotFound](#RecordNotFound "Record Not Found Exception")
- [FrozenObject](#FrozenObject "Frozen Object Exception")
- [Model](#Model)
- [Observer](#Observer "Observer base class")
- [Query](#Query "ORM query object.")
- [Relation](#Relation)
- [Smarty\_Fuel\_Extension](#Smarty_Fuel_Extension "Provides Smarty support for commonly used FuelPHP classes and methods.")
- [Twig\_Fuel\_Extension](#Twig_Fuel_Extension "Provides Twig support for commonly used FuelPHP classes and methods.")
- [View\_Dwoo](#View_Dwoo)
- [View\_Haml](#View_Haml)
- [View\_HamlTwig](#View_HamlTwig)
- [View\_Handlebars](#View_Handlebars)
- [View\_Jade](#View_Jade)
- [View\_Lex](#View_Lex)
- [View\_Markdown](#View_Markdown)
- [View\_Mustache](#View_Mustache)
- [View\_Phptal](#View_Phptal)
- [View\_Smarty](#View_Smarty)
- [View\_Twig](#View_Twig)
- [View](#View "View class")

### Functions

## normalize\_driver\_types()

```
normalize_driver_types() 
```

### Classes and interfaces

# Cache\_Handler\_Driver[¶](api__classes__Fuel.Core.Cache_Handler_Driver.md)

[« More »](api__classes__Fuel.Core.Cache_Handler_Driver.md)

# Config\_Interface[¶](api__classes__Fuel.Core.Config_Interface.md)

[« More »](api__classes__Fuel.Core.Config_Interface.md)

# Lang\_Interface[¶](api__classes__Fuel.Core.Lang_Interface.md)

[« More »](api__classes__Fuel.Core.Lang_Interface.md)

# Sanitization[¶](api__classes__Fuel.Core.Sanitization.md)

[« More »](api__classes__Fuel.Core.Sanitization.md)

# AuthException[¶](api__classes__Auth.AuthException.md)

[« More »](api__classes__Auth.AuthException.md)

# Auth\_Acl\_Driver[¶](api__classes__Auth.Auth_Acl_Driver.md)

[« More »](api__classes__Auth.Auth_Acl_Driver.md)

# Auth\_Acl\_Simpleacl[¶](api__classes__Auth.Auth_Acl_Simpleacl.md)

[« More »](api__classes__Auth.Auth_Acl_Simpleacl.md)

# Auth\_Driver[¶](api__classes__Auth.Auth_Driver.md)

[« More »](api__classes__Auth.Auth_Driver.md)

# Auth\_Group\_Driver[¶](api__classes__Auth.Auth_Group_Driver.md)

[« More »](api__classes__Auth.Auth_Group_Driver.md)

# Auth\_Group\_Simplegroup[¶](api__classes__Auth.Auth_Group_Simplegroup.md)

[« More »](api__classes__Auth.Auth_Group_Simplegroup.md)

# Auth\_Login\_Driver[¶](api__classes__Auth.Auth_Login_Driver.md)

[« More »](api__classes__Auth.Auth_Login_Driver.md)

# Auth\_Opauth[¶](api__classes__Auth.Auth_Opauth.md)

[« More »](api__classes__Auth.Auth_Opauth.md)

# Auth\_Group[¶](api__classes__Auth.Model.Auth_Group.md)

[« More »](api__classes__Auth.Model.Auth_Group.md)

# Auth\_Grouppermission[¶](api__classes__Auth.Model.Auth_Grouppermission.md)

[« More »](api__classes__Auth.Model.Auth_Grouppermission.md)

# Auth\_Metadata[¶](api__classes__Auth.Model.Auth_Metadata.md)

[« More »](api__classes__Auth.Model.Auth_Metadata.md)

# Auth\_Permission[¶](api__classes__Auth.Model.Auth_Permission.md)

[« More »](api__classes__Auth.Model.Auth_Permission.md)

# Auth\_Provider[¶](api__classes__Auth.Model.Auth_Provider.md)

[« More »](api__classes__Auth.Model.Auth_Provider.md)

# Auth\_Role[¶](api__classes__Auth.Model.Auth_Role.md)

[« More »](api__classes__Auth.Model.Auth_Role.md)

# Auth\_Rolepermission[¶](api__classes__Auth.Model.Auth_Rolepermission.md)

[« More »](api__classes__Auth.Model.Auth_Rolepermission.md)

# Auth\_User[¶](api__classes__Auth.Model.Auth_User.md)

[« More »](api__classes__Auth.Model.Auth_User.md)

# Auth\_Userpermission[¶](api__classes__Auth.Model.Auth_Userpermission.md)

[« More »](api__classes__Auth.Model.Auth_Userpermission.md)

# OpauthException[¶](api__classes__Auth.OpauthException.md)

[« More »](api__classes__Auth.OpauthException.md)

# SimpleUserUpdateException[¶](api__classes__Auth.SimpleUserUpdateException.md)

[« More »](api__classes__Auth.SimpleUserUpdateException.md)

# SimpleUserWrongPassword[¶](api__classes__Auth.SimpleUserWrongPassword.md)

[« More »](api__classes__Auth.SimpleUserWrongPassword.md)

# Controller\_Admin[¶](api__classes__Controller_Admin.md)

[« More »](api__classes__Controller_Admin.md)

# Controller\_Admin[¶](api__classes__Controller_Admin.md)

[« More »](api__classes__Controller_Admin.md)

# Controller\_Admin[¶](api__classes__Controller_Admin.md)

[« More »](api__classes__Controller_Admin.md)

# Controller\_Base[¶](api__classes__Controller_Base.md)

[« More »](api__classes__Controller_Base.md)

# Controller\_Base[¶](api__classes__Controller_Base.md)

[« More »](api__classes__Controller_Base.md)

# Controller\_Base[¶](api__classes__Controller_Base.md)

[« More »](api__classes__Controller_Base.md)

# AttachmentNotFoundException[¶](api__classes__Email.AttachmentNotFoundException.md)

[« More »](api__classes__Email.AttachmentNotFoundException.md)

# Email[¶](api__classes__Email.Email.md)

[« More »](api__classes__Email.Email.md)

# EmailSendingFailedException[¶](api__classes__Email.EmailSendingFailedException.md)

[« More »](api__classes__Email.EmailSendingFailedException.md)

# EmailValidationFailedException[¶](api__classes__Email.EmailValidationFailedException.md)

[« More »](api__classes__Email.EmailValidationFailedException.md)

# Email\_Driver[¶](api__classes__Email.Email_Driver.md)

[« More »](api__classes__Email.Email_Driver.md)

# Email\_Driver\_Mail[¶](api__classes__Email.Email_Driver_Mail.md)

[« More »](api__classes__Email.Email_Driver_Mail.md)

# Email\_Driver\_Mailgun[¶](api__classes__Email.Email_Driver_Mailgun.md)

[« More »](api__classes__Email.Email_Driver_Mailgun.md)

# Email\_Driver\_Mandrill[¶](api__classes__Email.Email_Driver_Mandrill.md)

[« More »](api__classes__Email.Email_Driver_Mandrill.md)

# Email\_Driver\_Noop[¶](api__classes__Email.Email_Driver_Noop.md)

[« More »](api__classes__Email.Email_Driver_Noop.md)

# Email\_Driver\_Sendmail[¶](api__classes__Email.Email_Driver_Sendmail.md)

[« More »](api__classes__Email.Email_Driver_Sendmail.md)

# Email\_Driver\_Smtp[¶](api__classes__Email.Email_Driver_Smtp.md)

[« More »](api__classes__Email.Email_Driver_Smtp.md)

# InvalidAttachmentsException[¶](api__classes__Email.InvalidAttachmentsException.md)

[« More »](api__classes__Email.InvalidAttachmentsException.md)

# InvalidEmailStringEncoding[¶](api__classes__Email.InvalidEmailStringEncoding.md)

[« More »](api__classes__Email.InvalidEmailStringEncoding.md)

# SendmailConnectionException[¶](api__classes__Email.SendmailConnectionException.md)

[« More »](api__classes__Email.SendmailConnectionException.md)

# SendmailFailedException[¶](api__classes__Email.SendmailFailedException.md)

[« More »](api__classes__Email.SendmailFailedException.md)

# SmtpAuthenticationFailedException[¶](api__classes__Email.SmtpAuthenticationFailedException.md)

[« More »](api__classes__Email.SmtpAuthenticationFailedException.md)

# SmtpCommandFailureException[¶](api__classes__Email.SmtpCommandFailureException.md)

[« More »](api__classes__Email.SmtpCommandFailureException.md)

# SmtpConnectionException[¶](api__classes__Email.SmtpConnectionException.md)

[« More »](api__classes__Email.SmtpConnectionException.md)

# SmtpTimeoutException[¶](api__classes__Email.SmtpTimeoutException.md)

[« More »](api__classes__Email.SmtpTimeoutException.md)

# Cache[¶](api__classes__Fuel.Core.Cache.md)

[« More »](api__classes__Fuel.Core.Cache.md)

# CacheExpiredException[¶](api__classes__Fuel.Core.CacheExpiredException.md)

[« More »](api__classes__Fuel.Core.CacheExpiredException.md)

# CacheNotFoundException[¶](api__classes__Fuel.Core.CacheNotFoundException.md)

[« More »](api__classes__Fuel.Core.CacheNotFoundException.md)

# Cache\_Handler\_Json[¶](api__classes__Fuel.Core.Cache_Handler_Json.md)

[« More »](api__classes__Fuel.Core.Cache_Handler_Json.md)

# Cache\_Handler\_Serialized[¶](api__classes__Fuel.Core.Cache_Handler_Serialized.md)

[« More »](api__classes__Fuel.Core.Cache_Handler_Serialized.md)

# Cache\_Handler\_String[¶](api__classes__Fuel.Core.Cache_Handler_String.md)

[« More »](api__classes__Fuel.Core.Cache_Handler_String.md)

# Cache\_Storage\_Apc[¶](api__classes__Fuel.Core.Cache_Storage_Apc.md)

[« More »](api__classes__Fuel.Core.Cache_Storage_Apc.md)

# Cache\_Storage\_Driver[¶](api__classes__Fuel.Core.Cache_Storage_Driver.md)

[« More »](api__classes__Fuel.Core.Cache_Storage_Driver.md)

# Cache\_Storage\_File[¶](api__classes__Fuel.Core.Cache_Storage_File.md)

[« More »](api__classes__Fuel.Core.Cache_Storage_File.md)

# Cache\_Storage\_Memcached[¶](api__classes__Fuel.Core.Cache_Storage_Memcached.md)

[« More »](api__classes__Fuel.Core.Cache_Storage_Memcached.md)

# Cache\_Storage\_Redis[¶](api__classes__Fuel.Core.Cache_Storage_Redis.md)

[« More »](api__classes__Fuel.Core.Cache_Storage_Redis.md)

# Cache\_Storage\_Xcache[¶](api__classes__Fuel.Core.Cache_Storage_Xcache.md)

[« More »](api__classes__Fuel.Core.Cache_Storage_Xcache.md)

# Config[¶](api__classes__Fuel.Core.Config.md)

[« More »](api__classes__Fuel.Core.Config.md)

# ConfigException[¶](api__classes__Fuel.Core.ConfigException.md)

[« More »](api__classes__Fuel.Core.ConfigException.md)

# Config\_Db[¶](api__classes__Fuel.Core.Config_Db.md)

DB config data parser

[« More »](api__classes__Fuel.Core.Config_Db.md)

# Config\_File[¶](api__classes__Fuel.Core.Config_File.md)

A base Config File class for File based configs.

[« More »](api__classes__Fuel.Core.Config_File.md)

# Config\_Ini[¶](api__classes__Fuel.Core.Config_Ini.md)

INI Config file parser

[« More »](api__classes__Fuel.Core.Config_Ini.md)

# Config\_Json[¶](api__classes__Fuel.Core.Config_Json.md)

JSON Config file parser

[« More »](api__classes__Fuel.Core.Config_Json.md)

# Config\_Memcached[¶](api__classes__Fuel.Core.Config_Memcached.md)

DB config data parser

[« More »](api__classes__Fuel.Core.Config_Memcached.md)

# Config\_Php[¶](api__classes__Fuel.Core.Config_Php.md)

PHP Config file parser

[« More »](api__classes__Fuel.Core.Config_Php.md)

# Config\_Yml[¶](api__classes__Fuel.Core.Config_Yml.md)

Yaml Config file parser

[« More »](api__classes__Fuel.Core.Config_Yml.md)

# Controller[¶](api__classes__Fuel.Core.Controller.md)

[« More »](api__classes__Fuel.Core.Controller.md)

# Controller\_Rest[¶](api__classes__Fuel.Core.Controller_Rest.md)

[« More »](api__classes__Fuel.Core.Controller_Rest.md)

# Crypt[¶](api__classes__Fuel.Core.Crypt.md)

Sodium encryption/decryption code based on HaLite from ParagonIE

[« More »](api__classes__Fuel.Core.Crypt.md)

# DB[¶](api__classes__Fuel.Core.DB.md)

[« More »](api__classes__Fuel.Core.DB.md)

# Database\_Connection[¶](api__classes__Fuel.Core.Database_Connection.md)

[« More »](api__classes__Fuel.Core.Database_Connection.md)

# Database\_Dblib\_Connection[¶](api__classes__Fuel.Core.Database_Dblib_Connection.md)

[« More »](api__classes__Fuel.Core.Database_Dblib_Connection.md)

# Database\_Exception[¶](api__classes__Fuel.Core.Database_Exception.md)

[« More »](api__classes__Fuel.Core.Database_Exception.md)

# Database\_Expression[¶](api__classes__Fuel.Core.Database_Expression.md)

[« More »](api__classes__Fuel.Core.Database_Expression.md)

# Database\_MySQL\_Connection[¶](api__classes__Fuel.Core.Database_MySQL_Connection.md)

[« More »](api__classes__Fuel.Core.Database_MySQL_Connection.md)

# Database\_MySQLi\_Cached[¶](api__classes__Fuel.Core.Database_MySQLi_Cached.md)

[« More »](api__classes__Fuel.Core.Database_MySQLi_Cached.md)

# Database\_MySQLi\_Connection[¶](api__classes__Fuel.Core.Database_MySQLi_Connection.md)

[« More »](api__classes__Fuel.Core.Database_MySQLi_Connection.md)

# Database\_MySQLi\_Result[¶](api__classes__Fuel.Core.Database_MySQLi_Result.md)

[« More »](api__classes__Fuel.Core.Database_MySQLi_Result.md)

# Database\_PDO\_Cached[¶](api__classes__Fuel.Core.Database_PDO_Cached.md)

[« More »](api__classes__Fuel.Core.Database_PDO_Cached.md)

# Database\_PDO\_Connection[¶](api__classes__Fuel.Core.Database_PDO_Connection.md)

[« More »](api__classes__Fuel.Core.Database_PDO_Connection.md)

# Database\_PDO\_Result[¶](api__classes__Fuel.Core.Database_PDO_Result.md)

[« More »](api__classes__Fuel.Core.Database_PDO_Result.md)

# Database\_Query[¶](api__classes__Fuel.Core.Database_Query.md)

[« More »](api__classes__Fuel.Core.Database_Query.md)

# Database\_Query\_Builder[¶](api__classes__Fuel.Core.Database_Query_Builder.md)

[« More »](api__classes__Fuel.Core.Database_Query_Builder.md)

# Database\_Query\_Builder\_Delete[¶](api__classes__Fuel.Core.Database_Query_Builder_Delete.md)

[« More »](api__classes__Fuel.Core.Database_Query_Builder_Delete.md)

# Database\_Query\_Builder\_Insert[¶](api__classes__Fuel.Core.Database_Query_Builder_Insert.md)

[« More »](api__classes__Fuel.Core.Database_Query_Builder_Insert.md)

# Database\_Query\_Builder\_Join[¶](api__classes__Fuel.Core.Database_Query_Builder_Join.md)

[« More »](api__classes__Fuel.Core.Database_Query_Builder_Join.md)

# Database\_Query\_Builder\_Select[¶](api__classes__Fuel.Core.Database_Query_Builder_Select.md)

[« More »](api__classes__Fuel.Core.Database_Query_Builder_Select.md)

# Database\_Query\_Builder\_Update[¶](api__classes__Fuel.Core.Database_Query_Builder_Update.md)

[« More »](api__classes__Fuel.Core.Database_Query_Builder_Update.md)

# Database\_Query\_Builder\_Where[¶](api__classes__Fuel.Core.Database_Query_Builder_Where.md)

[« More »](api__classes__Fuel.Core.Database_Query_Builder_Where.md)

# Database\_Result[¶](api__classes__Fuel.Core.Database_Result.md)

[« More »](api__classes__Fuel.Core.Database_Result.md)

# Database\_Result\_Cached[¶](api__classes__Fuel.Core.Database_Result_Cached.md)

[« More »](api__classes__Fuel.Core.Database_Result_Cached.md)

# Database\_SQLite\_Builder\_Delete[¶](api__classes__Fuel.Core.Database_SQLite_Builder_Delete.md)

[« More »](api__classes__Fuel.Core.Database_SQLite_Builder_Delete.md)

# Database\_SQLite\_Builder\_Update[¶](api__classes__Fuel.Core.Database_SQLite_Builder_Update.md)

[« More »](api__classes__Fuel.Core.Database_SQLite_Builder_Update.md)

# Database\_SQLite\_Connection[¶](api__classes__Fuel.Core.Database_SQLite_Connection.md)

[« More »](api__classes__Fuel.Core.Database_SQLite_Connection.md)

# Database\_Schema[¶](api__classes__Fuel.Core.Database_Schema.md)

[« More »](api__classes__Fuel.Core.Database_Schema.md)

# Database\_Sqlsrv\_Connection[¶](api__classes__Fuel.Core.Database_Sqlsrv_Connection.md)

[« More »](api__classes__Fuel.Core.Database_Sqlsrv_Connection.md)

# Errorhandler[¶](api__classes__Fuel.Core.Errorhandler.md)

[« More »](api__classes__Fuel.Core.Errorhandler.md)

# FileAccessException[¶](api__classes__Fuel.Core.FileAccessException.md)

[« More »](api__classes__Fuel.Core.FileAccessException.md)

# File\_Area[¶](api__classes__Fuel.Core.File_Area.md)

[« More »](api__classes__Fuel.Core.File_Area.md)

# File\_Handler\_Directory[¶](api__classes__Fuel.Core.File_Handler_Directory.md)

[« More »](api__classes__Fuel.Core.File_Handler_Directory.md)

# File\_Handler\_File[¶](api__classes__Fuel.Core.File_Handler_File.md)

[« More »](api__classes__Fuel.Core.File_Handler_File.md)

# FtpConnectionException[¶](api__classes__Fuel.Core.FtpConnectionException.md)

[« More »](api__classes__Fuel.Core.FtpConnectionException.md)

# FtpFileAccessException[¶](api__classes__Fuel.Core.FtpFileAccessException.md)

[« More »](api__classes__Fuel.Core.FtpFileAccessException.md)

# FuelException[¶](api__classes__Fuel.Core.FuelException.md)

General Fuel Exception class

[« More »](api__classes__Fuel.Core.FuelException.md)

# HttpBadRequestException[¶](api__classes__Fuel.Core.HttpBadRequestException.md)

[« More »](api__classes__Fuel.Core.HttpBadRequestException.md)

# HttpException[¶](api__classes__Fuel.Core.HttpException.md)

[« More »](api__classes__Fuel.Core.HttpException.md)

# HttpNoAccessException[¶](api__classes__Fuel.Core.HttpNoAccessException.md)

[« More »](api__classes__Fuel.Core.HttpNoAccessException.md)

# HttpNotFoundException[¶](api__classes__Fuel.Core.HttpNotFoundException.md)

[« More »](api__classes__Fuel.Core.HttpNotFoundException.md)

# HttpServerErrorException[¶](api__classes__Fuel.Core.HttpServerErrorException.md)

[« More »](api__classes__Fuel.Core.HttpServerErrorException.md)

# Image[¶](api__classes__Fuel.Core.Image.md)

[« More »](api__classes__Fuel.Core.Image.md)

# Image\_Driver[¶](api__classes__Fuel.Core.Image_Driver.md)

[« More »](api__classes__Fuel.Core.Image_Driver.md)

# Image\_Gd[¶](api__classes__Fuel.Core.Image_Gd.md)

[« More »](api__classes__Fuel.Core.Image_Gd.md)

# Image\_Imagemagick[¶](api__classes__Fuel.Core.Image_Imagemagick.md)

[« More »](api__classes__Fuel.Core.Image_Imagemagick.md)

# Image\_Imagick[¶](api__classes__Fuel.Core.Image_Imagick.md)

[« More »](api__classes__Fuel.Core.Image_Imagick.md)

# InvalidPathException[¶](api__classes__Fuel.Core.InvalidPathException.md)

[« More »](api__classes__Fuel.Core.InvalidPathException.md)

# Lang[¶](api__classes__Fuel.Core.Lang.md)

[« More »](api__classes__Fuel.Core.Lang.md)

# LangException[¶](api__classes__Fuel.Core.LangException.md)

[« More »](api__classes__Fuel.Core.LangException.md)

# Lang\_Db[¶](api__classes__Fuel.Core.Lang_Db.md)

DB lang data parser

[« More »](api__classes__Fuel.Core.Lang_Db.md)

# Lang\_File[¶](api__classes__Fuel.Core.Lang_File.md)

A base Lang File class for File based configs.

[« More »](api__classes__Fuel.Core.Lang_File.md)

# Lang\_Ini[¶](api__classes__Fuel.Core.Lang_Ini.md)

INI Lang file parser

[« More »](api__classes__Fuel.Core.Lang_Ini.md)

# Lang\_Json[¶](api__classes__Fuel.Core.Lang_Json.md)

JSON Lang file parser

[« More »](api__classes__Fuel.Core.Lang_Json.md)

# Lang\_Php[¶](api__classes__Fuel.Core.Lang_Php.md)

PHP Lang file parser

[« More »](api__classes__Fuel.Core.Lang_Php.md)

# Lang\_Yml[¶](api__classes__Fuel.Core.Lang_Yml.md)

Yaml Lang file parser

[« More »](api__classes__Fuel.Core.Lang_Yml.md)

# Log[¶](api__classes__Fuel.Core.Log.md)

Log core class facade for the Monolog composer package.

[« More »](api__classes__Fuel.Core.Log.md)

# Model[¶](api__classes__Fuel.Core.Model.md)

[« More »](api__classes__Fuel.Core.Model.md)

# Model\_Crud[¶](api__classes__Fuel.Core.Model_Crud.md)

[« More »](api__classes__Fuel.Core.Model_Crud.md)

# Mongo\_Db[¶](api__classes__Fuel.Core.Mongo_Db.md)

[« More »](api__classes__Fuel.Core.Mongo_Db.md)

# Mongo\_DbException[¶](api__classes__Fuel.Core.Mongo_DbException.md)

This code is based on Redisent, a Redis interface for the modest.

[« More »](api__classes__Fuel.Core.Mongo_DbException.md)

# OutsideAreaException[¶](api__classes__Fuel.Core.OutsideAreaException.md)

[« More »](api__classes__Fuel.Core.OutsideAreaException.md)

# Pagination[¶](api__classes__Fuel.Core.Pagination.md)

[« More »](api__classes__Fuel.Core.Pagination.md)

# PhpErrorException[¶](api__classes__Fuel.Core.PhpErrorException.md)

Exception class for standard PHP errors, this will make them catchable

[« More »](api__classes__Fuel.Core.PhpErrorException.md)

# Profiler[¶](api__classes__Fuel.Core.Profiler.md)

[« More »](api__classes__Fuel.Core.Profiler.md)

# RedisException[¶](api__classes__Fuel.Core.RedisException.md)

[« More »](api__classes__Fuel.Core.RedisException.md)

# Redis\_Db[¶](api__classes__Fuel.Core.Redis_Db.md)

Redisent, a Redis interface for the modest among us

[« More »](api__classes__Fuel.Core.Redis_Db.md)

# RequestException[¶](api__classes__Fuel.Core.RequestException.md)

[« More »](api__classes__Fuel.Core.RequestException.md)

# RequestStatusException[¶](api__classes__Fuel.Core.RequestStatusException.md)

[« More »](api__classes__Fuel.Core.RequestStatusException.md)

# Response[¶](api__classes__Fuel.Core.Response.md)

[« More »](api__classes__Fuel.Core.Response.md)

# Route[¶](api__classes__Fuel.Core.Route.md)

[« More »](api__classes__Fuel.Core.Route.md)

# Router[¶](api__classes__Fuel.Core.Router.md)

[« More »](api__classes__Fuel.Core.Router.md)

# SecurityException[¶](api__classes__Fuel.Core.SecurityException.md)

[« More »](api__classes__Fuel.Core.SecurityException.md)

# Session\_Cookie[¶](api__classes__Fuel.Core.Session_Cookie.md)

[« More »](api__classes__Fuel.Core.Session_Cookie.md)

# Session\_Db[¶](api__classes__Fuel.Core.Session_Db.md)

[« More »](api__classes__Fuel.Core.Session_Db.md)

# Session\_Driver[¶](api__classes__Fuel.Core.Session_Driver.md)

[« More »](api__classes__Fuel.Core.Session_Driver.md)

# Session\_Exception[¶](api__classes__Fuel.Core.Session_Exception.md)

[« More »](api__classes__Fuel.Core.Session_Exception.md)

# Session\_File[¶](api__classes__Fuel.Core.Session_File.md)

[« More »](api__classes__Fuel.Core.Session_File.md)

# Session\_Memcached[¶](api__classes__Fuel.Core.Session_Memcached.md)

[« More »](api__classes__Fuel.Core.Session_Memcached.md)

# Session\_Redis[¶](api__classes__Fuel.Core.Session_Redis.md)

[« More »](api__classes__Fuel.Core.Session_Redis.md)

# Str[¶](api__classes__Fuel.Core.Str.md)

String handling with encoding support

[« More »](api__classes__Fuel.Core.Str.md)

# TestCase[¶](api__classes__Fuel.Core.TestCase.md)

A Fuel Specific extension of the PHPUnit TestCase.

[« More »](api__classes__Fuel.Core.TestCase.md)

# TestCase[¶](api__classes__Fuel.Core.TestCase.md)

A Fuel Specific extension of the PHPUnit TestCase.

[« More »](api__classes__Fuel.Core.TestCase.md)

# Theme[¶](api__classes__Fuel.Core.Theme.md)

Handles loading theme views and assets.

[« More »](api__classes__Fuel.Core.Theme.md)

# ThemeException[¶](api__classes__Fuel.Core.ThemeException.md)

[« More »](api__classes__Fuel.Core.ThemeException.md)

# Auth\_Add\_Authactions[¶](api__classes__Fuel.Migrations.Auth_Add_Authactions.md)

[« More »](api__classes__Fuel.Migrations.Auth_Add_Authactions.md)

# Auth\_Add\_Permissionsfilter[¶](api__classes__Fuel.Migrations.Auth_Add_Permissionsfilter.md)

[« More »](api__classes__Fuel.Migrations.Auth_Add_Permissionsfilter.md)

# Auth\_Create\_Authdefaults[¶](api__classes__Fuel.Migrations.Auth_Create_Authdefaults.md)

[« More »](api__classes__Fuel.Migrations.Auth_Create_Authdefaults.md)

# Auth\_Create\_Grouptables[¶](api__classes__Fuel.Migrations.Auth_Create_Grouptables.md)

[« More »](api__classes__Fuel.Migrations.Auth_Create_Grouptables.md)

# Auth\_Create\_Oauth2tables[¶](api__classes__Fuel.Migrations.Auth_Create_Oauth2tables.md)

[« More »](api__classes__Fuel.Migrations.Auth_Create_Oauth2tables.md)

# Auth\_Create\_Permissiontables[¶](api__classes__Fuel.Migrations.Auth_Create_Permissiontables.md)

[« More »](api__classes__Fuel.Migrations.Auth_Create_Permissiontables.md)

# Auth\_Create\_Providers[¶](api__classes__Fuel.Migrations.Auth_Create_Providers.md)

[« More »](api__classes__Fuel.Migrations.Auth_Create_Providers.md)

# Auth\_Create\_Roletables[¶](api__classes__Fuel.Migrations.Auth_Create_Roletables.md)

[« More »](api__classes__Fuel.Migrations.Auth_Create_Roletables.md)

# Auth\_Create\_Usertables[¶](api__classes__Fuel.Migrations.Auth_Create_Usertables.md)

[« More »](api__classes__Fuel.Migrations.Auth_Create_Usertables.md)

# Auth\_Fix\_Jointables[¶](api__classes__Fuel.Migrations.Auth_Fix_Jointables.md)

[« More »](api__classes__Fuel.Migrations.Auth_Fix_Jointables.md)

# Auth\_Group\_Optional[¶](api__classes__Fuel.Migrations.Auth_Group_Optional.md)

[« More »](api__classes__Fuel.Migrations.Auth_Group_Optional.md)

# Fromdb[¶](api__classes__Fuel.Tasks.Fromdb.md)

Run scaffolding or model generation based an an existing database tables.

[« More »](api__classes__Fuel.Tasks.Fromdb.md)

# Migrate[¶](api__classes__Fuel.Tasks.Migrate.md)

migrate task

[« More »](api__classes__Fuel.Tasks.Migrate.md)

# Simple2orm[¶](api__classes__Fuel.Tasks.Simple2orm.md)

Converts a SimpleAuth ruleset to an OrmAuth one

[« More »](api__classes__Fuel.Tasks.Simple2orm.md)

# BelongsTo[¶](api__classes__Orm.BelongsTo.md)

[« More »](api__classes__Orm.BelongsTo.md)

# FrozenObject[¶](api__classes__Orm.FrozenObject.md)

Frozen Object Exception

[« More »](api__classes__Orm.FrozenObject.md)

# HasMany[¶](api__classes__Orm.HasMany.md)

[« More »](api__classes__Orm.HasMany.md)

# HasOne[¶](api__classes__Orm.HasOne.md)

[« More »](api__classes__Orm.HasOne.md)

# InvalidContentType[¶](api__classes__Orm.InvalidContentType.md)

Invalid content exception, thrown when type conversion is not possible.

[« More »](api__classes__Orm.InvalidContentType.md)

# ManyMany[¶](api__classes__Orm.ManyMany.md)

[« More »](api__classes__Orm.ManyMany.md)

# Model[¶](api__classes__Orm.Model.md)

[« More »](api__classes__Orm.Model.md)

# Model\_Nestedset[¶](api__classes__Orm.Model_Nestedset.md)

Implements NestedSets (http://en.wikipedia.org/wiki/Nested\_set\_model)

[« More »](api__classes__Orm.Model_Nestedset.md)

# Observer[¶](api__classes__Orm.Observer.md)

Observer base class

[« More »](api__classes__Orm.Observer.md)

# Observer\_CreatedAt[¶](api__classes__Orm.Observer_CreatedAt.md)

CreatedAt observer.

[« More »](api__classes__Orm.Observer_CreatedAt.md)

# Observer\_Self[¶](api__classes__Orm.Observer_Self.md)

Dummy observer class, which allows you to define observer methods in the
model itself.

[« More »](api__classes__Orm.Observer_Self.md)

# Observer\_Slug[¶](api__classes__Orm.Observer_Slug.md)

Observer class to generate SEO friendly slugs from a model property (usually something like a title)

[« More »](api__classes__Orm.Observer_Slug.md)

# Observer\_Typing[¶](api__classes__Orm.Observer_Typing.md)

Typing observer.

[« More »](api__classes__Orm.Observer_Typing.md)

# Observer\_UpdatedAt[¶](api__classes__Orm.Observer_UpdatedAt.md)

UpdatedAt observer.

[« More »](api__classes__Orm.Observer_UpdatedAt.md)

# Observer\_Validation[¶](api__classes__Orm.Observer_Validation.md)

Observer class to validate the properties of the model before save.

[« More »](api__classes__Orm.Observer_Validation.md)

# Query[¶](api__classes__Orm.Query.md)

ORM query object.

[« More »](api__classes__Orm.Query.md)

# RecordNotFound[¶](api__classes__Orm.RecordNotFound.md)

Record Not Found Exception

[« More »](api__classes__Orm.RecordNotFound.md)

# Relation[¶](api__classes__Orm.Relation.md)

[« More »](api__classes__Orm.Relation.md)

# RelationNotSoft[¶](api__classes__Orm.RelationNotSoft.md)

[« More »](api__classes__Orm.RelationNotSoft.md)

# ValidationFailed[¶](api__classes__Orm.ValidationFailed.md)

Exception to throw when validation failed

[« More »](api__classes__Orm.ValidationFailed.md)

# Smarty\_Fuel\_Extension[¶](api__classes__Parser.Smarty_Fuel_Extension.md)

Provides Smarty support for commonly used FuelPHP classes and methods.

[« More »](api__classes__Parser.Smarty_Fuel_Extension.md)

# Twig\_Fuel\_Extension[¶](api__classes__Parser.Twig_Fuel_Extension.md)

Provides Twig support for commonly used FuelPHP classes and methods.

[« More »](api__classes__Parser.Twig_Fuel_Extension.md)

# View[¶](api__classes__Parser.View.md)

View class

[« More »](api__classes__Parser.View.md)

# View\_Dwoo[¶](api__classes__Parser.View_Dwoo.md)

[« More »](api__classes__Parser.View_Dwoo.md)

# View\_Haml[¶](api__classes__Parser.View_Haml.md)

[« More »](api__classes__Parser.View_Haml.md)

# View\_HamlTwig[¶](api__classes__Parser.View_HamlTwig.md)

[« More »](api__classes__Parser.View_HamlTwig.md)

# View\_Handlebars[¶](api__classes__Parser.View_Handlebars.md)

[« More »](api__classes__Parser.View_Handlebars.md)

# View\_Jade[¶](api__classes__Parser.View_Jade.md)

[« More »](api__classes__Parser.View_Jade.md)

# View\_Lex[¶](api__classes__Parser.View_Lex.md)

[« More »](api__classes__Parser.View_Lex.md)

# View\_Markdown[¶](api__classes__Parser.View_Markdown.md)

[« More »](api__classes__Parser.View_Markdown.md)

# View\_Mustache[¶](api__classes__Parser.View_Mustache.md)

[« More »](api__classes__Parser.View_Mustache.md)

# View\_Phptal[¶](api__classes__Parser.View_Phptal.md)

[« More »](api__classes__Parser.View_Phptal.md)

# View\_Smarty[¶](api__classes__Parser.View_Smarty.md)

[« More »](api__classes__Parser.View_Smarty.md)

# View\_Twig[¶](api__classes__Parser.View_Twig.md)

[« More »](api__classes__Parser.View_Twig.md)

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
