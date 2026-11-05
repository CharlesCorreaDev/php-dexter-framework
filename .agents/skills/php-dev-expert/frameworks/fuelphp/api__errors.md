# phpDocumentor

> **Fonte / Source:** https://www.fuelphp.com/api/errors.html

---

- Filter type
- CriticalErrorNotice
- Navigation
- [fuel/app/tasks/robots.php](#fuel/app/tasks/robots.php)
- [fuel/app/views/welcome/404.php](#fuel/app/views/welcome/404.php)
- [fuel/app/views/welcome/hello.php](#fuel/app/views/welcome/hello.php)
- [fuel/app/views/welcome/index.php](#fuel/app/views/welcome/index.php)
- [fuel/core/classes/cache/handler/json.php](#fuel/core/classes/cache/handler/json.php)
- [fuel/core/classes/cache/handler/serialized.php](#fuel/core/classes/cache/handler/serialized.php)
- [fuel/core/classes/cache/handler/string.php](#fuel/core/classes/cache/handler/string.php)
- [fuel/core/classes/cache/storage/apc.php](#fuel/core/classes/cache/storage/apc.php)
- [fuel/core/classes/cache/storage/driver.php](#fuel/core/classes/cache/storage/driver.php)
- [fuel/core/classes/cache/storage/file.php](#fuel/core/classes/cache/storage/file.php)
- [fuel/core/classes/cache/storage/memcached.php](#fuel/core/classes/cache/storage/memcached.php)
- [fuel/core/classes/cache/storage/redis.php](#fuel/core/classes/cache/storage/redis.php)
- [fuel/core/classes/cache/storage/xcache.php](#fuel/core/classes/cache/storage/xcache.php)
- [fuel/core/classes/cache/notfound.php](#fuel/core/classes/cache/notfound.php)
- [fuel/core/classes/config/db.php](#fuel/core/classes/config/db.php)
- [fuel/core/classes/config/file.php](#fuel/core/classes/config/file.php)
- [fuel/core/classes/config/interface.php](#fuel/core/classes/config/interface.php)
- [fuel/core/classes/config/json.php](#fuel/core/classes/config/json.php)
- [fuel/core/classes/config/memcached.php](#fuel/core/classes/config/memcached.php)
- [fuel/core/classes/config/php.php](#fuel/core/classes/config/php.php)
- [fuel/core/classes/config/yml.php](#fuel/core/classes/config/yml.php)
- [fuel/core/classes/controller/hybrid.php](#fuel/core/classes/controller/hybrid.php)
- [fuel/core/classes/controller/rest.php](#fuel/core/classes/controller/rest.php)
- [fuel/core/classes/database/dblib/connection.php](#fuel/core/classes/database/dblib/connection.php)
- [fuel/core/classes/database/mysql/connection.php](#fuel/core/classes/database/mysql/connection.php)
- [fuel/core/classes/database/mysqli/cached.php](#fuel/core/classes/database/mysqli/cached.php)
- [fuel/core/classes/database/mysqli/connection.php](#fuel/core/classes/database/mysqli/connection.php)
- [fuel/core/classes/database/mysqli/result.php](#fuel/core/classes/database/mysqli/result.php)
- [fuel/core/classes/database/pdo/cached.php](#fuel/core/classes/database/pdo/cached.php)
- [fuel/core/classes/database/pdo/connection.php](#fuel/core/classes/database/pdo/connection.php)
- [fuel/core/classes/database/pdo/result.php](#fuel/core/classes/database/pdo/result.php)
- [fuel/core/classes/database/query/builder/delete.php](#fuel/core/classes/database/query/builder/delete.php)
- [fuel/core/classes/database/query/builder/insert.php](#fuel/core/classes/database/query/builder/insert.php)
- [fuel/core/classes/database/query/builder/join.php](#fuel/core/classes/database/query/builder/join.php)
- [fuel/core/classes/database/query/builder/select.php](#fuel/core/classes/database/query/builder/select.php)
- [fuel/core/classes/database/query/builder/update.php](#fuel/core/classes/database/query/builder/update.php)
- [fuel/core/classes/database/query/builder/where.php](#fuel/core/classes/database/query/builder/where.php)
- [fuel/core/classes/database/query/builder.php](#fuel/core/classes/database/query/builder.php)
- [fuel/core/classes/database/result/cached.php](#fuel/core/classes/database/result/cached.php)
- [fuel/core/classes/database/sqlite/builder/delete.php](#fuel/core/classes/database/sqlite/builder/delete.php)
- [fuel/core/classes/database/sqlite/builder/update.php](#fuel/core/classes/database/sqlite/builder/update.php)
- [fuel/core/classes/database/sqlite/connection.php](#fuel/core/classes/database/sqlite/connection.php)
- [fuel/core/classes/database/sqlsrv/connection.php](#fuel/core/classes/database/sqlsrv/connection.php)
- [fuel/core/classes/database/connection.php](#fuel/core/classes/database/connection.php)
- [fuel/core/classes/database/exception.php](#fuel/core/classes/database/exception.php)
- [fuel/core/classes/database/expression.php](#fuel/core/classes/database/expression.php)
- [fuel/core/classes/database/query.php](#fuel/core/classes/database/query.php)
- [fuel/core/classes/database/result.php](#fuel/core/classes/database/result.php)
- [fuel/core/classes/database/schema.php](#fuel/core/classes/database/schema.php)
- [fuel/core/classes/fieldset/field.php](#fuel/core/classes/fieldset/field.php)
- [fuel/core/classes/file/handler/directory.php](#fuel/core/classes/file/handler/directory.php)
- [fuel/core/classes/file/handler/file.php](#fuel/core/classes/file/handler/file.php)
- [fuel/core/classes/file/area.php](#fuel/core/classes/file/area.php)
- [fuel/core/classes/form/instance.php](#fuel/core/classes/form/instance.php)
- [fuel/core/classes/image/driver.php](#fuel/core/classes/image/driver.php)
- [fuel/core/classes/image/gd.php](#fuel/core/classes/image/gd.php)
- [fuel/core/classes/image/imagemagick.php](#fuel/core/classes/image/imagemagick.php)
- [fuel/core/classes/image/imagick.php](#fuel/core/classes/image/imagick.php)
- [fuel/core/classes/input/instance.php](#fuel/core/classes/input/instance.php)
- [fuel/core/classes/lang/db.php](#fuel/core/classes/lang/db.php)
- [fuel/core/classes/lang/file.php](#fuel/core/classes/lang/file.php)
- [fuel/core/classes/lang/ini.php](#fuel/core/classes/lang/ini.php)
- [fuel/core/classes/lang/interface.php](#fuel/core/classes/lang/interface.php)
- [fuel/core/classes/lang/json.php](#fuel/core/classes/lang/json.php)
- [fuel/core/classes/lang/php.php](#fuel/core/classes/lang/php.php)
- [fuel/core/classes/lang/yml.php](#fuel/core/classes/lang/yml.php)
- [fuel/core/classes/model/crud.php](#fuel/core/classes/model/crud.php)
- [fuel/core/classes/mongo/db.php](#fuel/core/classes/mongo/db.php)
- [fuel/core/classes/redis/db.php](#fuel/core/classes/redis/db.php)
- [fuel/core/classes/request/curl.php](#fuel/core/classes/request/curl.php)
- [fuel/core/classes/request/driver.php](#fuel/core/classes/request/driver.php)
- [fuel/core/classes/request/soap.php](#fuel/core/classes/request/soap.php)
- [fuel/core/classes/session/cookie.php](#fuel/core/classes/session/cookie.php)
- [fuel/core/classes/session/db.php](#fuel/core/classes/session/db.php)
- [fuel/core/classes/session/driver.php](#fuel/core/classes/session/driver.php)
- [fuel/core/classes/session/exception.php](#fuel/core/classes/session/exception.php)
- [fuel/core/classes/session/file.php](#fuel/core/classes/session/file.php)
- [fuel/core/classes/session/memcached.php](#fuel/core/classes/session/memcached.php)
- [fuel/core/classes/session/redis.php](#fuel/core/classes/session/redis.php)
- [fuel/core/classes/asset.php](#fuel/core/classes/asset.php)
- [fuel/core/classes/theme.php](#fuel/core/classes/theme.php)
- [fuel/core/classes/cache.php](#fuel/core/classes/cache.php)
- [fuel/core/classes/cli.php](#fuel/core/classes/cli.php)
- [fuel/core/classes/config.php](#fuel/core/classes/config.php)
- [fuel/core/classes/unzip.php](#fuel/core/classes/unzip.php)
- [fuel/core/classes/controller.php](#fuel/core/classes/controller.php)
- [fuel/core/classes/cookie.php](#fuel/core/classes/cookie.php)
- [fuel/core/classes/crypt.php](#fuel/core/classes/crypt.php)
- [fuel/core/classes/date.php](#fuel/core/classes/date.php)
- [fuel/core/classes/db.php](#fuel/core/classes/db.php)
- [fuel/core/classes/dbutil.php](#fuel/core/classes/dbutil.php)
- [fuel/core/classes/debug.php](#fuel/core/classes/debug.php)
- [fuel/core/classes/uri.php](#fuel/core/classes/uri.php)
- [fuel/core/classes/errorhandler.php](#fuel/core/classes/errorhandler.php)
- [fuel/core/classes/fieldset.php](#fuel/core/classes/fieldset.php)
- [fuel/core/classes/file.php](#fuel/core/classes/file.php)
- [fuel/core/classes/finder.php](#fuel/core/classes/finder.php)
- [fuel/core/classes/form.php](#fuel/core/classes/form.php)
- [fuel/core/classes/ftp.php](#fuel/core/classes/ftp.php)
- [fuel/core/classes/fuel.php](#fuel/core/classes/fuel.php)
- [fuel/core/classes/html.php](#fuel/core/classes/html.php)
- [fuel/core/classes/httpexception.php](#fuel/core/classes/httpexception.php)
- [fuel/core/classes/validation.php](#fuel/core/classes/validation.php)
- [fuel/core/classes/httpexceptions.php](#fuel/core/classes/httpexceptions.php)
- [fuel/core/classes/image.php](#fuel/core/classes/image.php)
- [fuel/core/classes/view.php](#fuel/core/classes/view.php)
- [fuel/core/classes/input.php](#fuel/core/classes/input.php)
- [fuel/core/classes/lang.php](#fuel/core/classes/lang.php)
- [fuel/core/classes/log.php](#fuel/core/classes/log.php)
- [fuel/core/classes/migrate.php](#fuel/core/classes/migrate.php)
- [fuel/core/classes/model.php](#fuel/core/classes/model.php)
- [fuel/core/classes/viewmodel.php](#fuel/core/classes/viewmodel.php)
- [fuel/core/classes/pagination.php](#fuel/core/classes/pagination.php)
- [fuel/core/classes/presenter.php](#fuel/core/classes/presenter.php)
- [fuel/core/classes/profiler.php](#fuel/core/classes/profiler.php)
- [fuel/core/classes/request.php](#fuel/core/classes/request.php)
- [fuel/core/classes/response.php](#fuel/core/classes/response.php)
- [fuel/core/classes/route.php](#fuel/core/classes/route.php)
- [fuel/core/classes/router.php](#fuel/core/classes/router.php)
- [fuel/core/classes/security.php](#fuel/core/classes/security.php)
- [fuel/core/classes/session.php](#fuel/core/classes/session.php)
- [fuel/core/classes/str.php](#fuel/core/classes/str.php)
- [fuel/core/classes/testcase.php](#fuel/core/classes/testcase.php)
- [fuel/core/config/test/agent.php](#fuel/core/config/test/agent.php)
- [fuel/core/config/mimes.php](#fuel/core/config/mimes.php)
- [fuel/core/lang/en/date.php](#fuel/core/lang/en/date.php)
- [fuel/core/lang/en/inflector.php](#fuel/core/lang/en/inflector.php)
- [fuel/core/lang/en/pagination.php](#fuel/core/lang/en/pagination.php)
- [fuel/core/lang/en/upload.php](#fuel/core/lang/en/upload.php)
- [fuel/core/lang/en/validation.php](#fuel/core/lang/en/validation.php)
- [fuel/core/tasks/install.php](#fuel/core/tasks/install.php)
- [fuel/core/tasks/migrate.php](#fuel/core/tasks/migrate.php)
- [fuel/core/tasks/session.php](#fuel/core/tasks/session.php)
- [fuel/core/views/errors/crypt\_keys.php](#fuel/core/views/errors/crypt_keys.php)
- [fuel/core/views/errors/php\_error.php](#fuel/core/views/errors/php_error.php)
- [fuel/core/views/errors/php\_fatal\_error.php](#fuel/core/views/errors/php_fatal_error.php)
- [fuel/core/views/errors/php\_short.php](#fuel/core/views/errors/php_short.php)
- [fuel/core/views/errors/production.php](#fuel/core/views/errors/production.php)
- [fuel/core/views/400.php](#fuel/core/views/400.php)
- [fuel/core/views/403.php](#fuel/core/views/403.php)
- [fuel/core/views/404.php](#fuel/core/views/404.php)
- [fuel/core/views/500.php](#fuel/core/views/500.php)
- [fuel/core/base.php](#fuel/core/base.php)
- [fuel/core/bootstrap.php](#fuel/core/bootstrap.php)
- [fuel/packages/auth/classes/auth/acl/driver.php](#fuel/packages/auth/classes/auth/acl/driver.php)
- [fuel/packages/auth/classes/auth/acl/ormacl.php](#fuel/packages/auth/classes/auth/acl/ormacl.php)
- [fuel/packages/auth/classes/auth/acl/simpleacl.php](#fuel/packages/auth/classes/auth/acl/simpleacl.php)
- [fuel/packages/auth/classes/auth/group/driver.php](#fuel/packages/auth/classes/auth/group/driver.php)
- [fuel/packages/auth/classes/auth/group/ormgroup.php](#fuel/packages/auth/classes/auth/group/ormgroup.php)
- [fuel/packages/auth/classes/auth/group/simplegroup.php](#fuel/packages/auth/classes/auth/group/simplegroup.php)
- [fuel/packages/auth/classes/auth/login/driver.php](#fuel/packages/auth/classes/auth/login/driver.php)
- [fuel/packages/auth/classes/auth/login/ormauth.php](#fuel/packages/auth/classes/auth/login/ormauth.php)
- [fuel/packages/auth/classes/auth/login/simpleauth.php](#fuel/packages/auth/classes/auth/login/simpleauth.php)
- [fuel/packages/auth/classes/auth/driver.php](#fuel/packages/auth/classes/auth/driver.php)
- [fuel/packages/auth/classes/auth/exceptions.php](#fuel/packages/auth/classes/auth/exceptions.php)
- [fuel/packages/auth/classes/auth/opauth.php](#fuel/packages/auth/classes/auth/opauth.php)
- [fuel/packages/auth/classes/model/auth/group.php](#fuel/packages/auth/classes/model/auth/group.php)
- [fuel/packages/auth/classes/model/auth/grouppermission.php](#fuel/packages/auth/classes/model/auth/grouppermission.php)
- [fuel/packages/auth/classes/model/auth/metadata.php](#fuel/packages/auth/classes/model/auth/metadata.php)
- [fuel/packages/auth/classes/model/auth/permission.php](#fuel/packages/auth/classes/model/auth/permission.php)
- [fuel/packages/auth/classes/model/auth/provider.php](#fuel/packages/auth/classes/model/auth/provider.php)
- [fuel/packages/auth/classes/model/auth/role.php](#fuel/packages/auth/classes/model/auth/role.php)
- [fuel/packages/auth/classes/model/auth/rolepermission.php](#fuel/packages/auth/classes/model/auth/rolepermission.php)
- [fuel/packages/auth/classes/model/auth/user.php](#fuel/packages/auth/classes/model/auth/user.php)
- [fuel/packages/auth/classes/model/auth/userpermission.php](#fuel/packages/auth/classes/model/auth/userpermission.php)
- [fuel/packages/auth/classes/auth.php](#fuel/packages/auth/classes/auth.php)
- [fuel/packages/auth/lang/en/auth\_model\_group.php](#fuel/packages/auth/lang/en/auth_model_group.php)
- [fuel/packages/auth/lang/en/auth\_model\_permission.php](#fuel/packages/auth/lang/en/auth_model_permission.php)
- [fuel/packages/auth/lang/en/auth\_model\_role.php](#fuel/packages/auth/lang/en/auth_model_role.php)
- [fuel/packages/auth/lang/en/auth\_model\_user.php](#fuel/packages/auth/lang/en/auth_model_user.php)
- [fuel/packages/auth/migrations/001\_auth\_create\_usertables.php](#fuel/packages/auth/migrations/001_auth_create_usertables.php)
- [fuel/packages/auth/migrations/002\_auth\_create\_grouptables.php](#fuel/packages/auth/migrations/002_auth_create_grouptables.php)
- [fuel/packages/auth/migrations/003\_auth\_create\_roletables.php](#fuel/packages/auth/migrations/003_auth_create_roletables.php)
- [fuel/packages/auth/migrations/004\_auth\_create\_permissiontables.php](#fuel/packages/auth/migrations/004_auth_create_permissiontables.php)
- [fuel/packages/auth/migrations/005\_auth\_create\_authdefaults.php](#fuel/packages/auth/migrations/005_auth_create_authdefaults.php)
- [fuel/packages/auth/migrations/006\_auth\_add\_authactions.php](#fuel/packages/auth/migrations/006_auth_add_authactions.php)
- [fuel/packages/auth/migrations/007\_auth\_add\_permissionsfilter.php](#fuel/packages/auth/migrations/007_auth_add_permissionsfilter.php)
- [fuel/packages/auth/migrations/008\_auth\_create\_providers.php](#fuel/packages/auth/migrations/008_auth_create_providers.php)
- [fuel/packages/auth/migrations/009\_auth\_create\_oauth2tables.php](#fuel/packages/auth/migrations/009_auth_create_oauth2tables.php)
- [fuel/packages/auth/migrations/010\_auth\_fix\_jointables.php](#fuel/packages/auth/migrations/010_auth_fix_jointables.php)
- [fuel/packages/auth/migrations/011\_auth\_group\_optional.php](#fuel/packages/auth/migrations/011_auth_group_optional.php)
- [fuel/packages/auth/tasks/simple2orm.php](#fuel/packages/auth/tasks/simple2orm.php)
- [fuel/packages/auth/normalizedrivertypes.php](#fuel/packages/auth/normalizedrivertypes.php)
- [fuel/packages/email/classes/email/driver/mail.php](#fuel/packages/email/classes/email/driver/mail.php)
- [fuel/packages/email/classes/email/driver/mailgun.php](#fuel/packages/email/classes/email/driver/mailgun.php)
- [fuel/packages/email/classes/email/driver/mandrill.php](#fuel/packages/email/classes/email/driver/mandrill.php)
- [fuel/packages/email/classes/email/driver/noop.php](#fuel/packages/email/classes/email/driver/noop.php)
- [fuel/packages/email/classes/email/driver/sendmail.php](#fuel/packages/email/classes/email/driver/sendmail.php)
- [fuel/packages/email/classes/email/driver/smtp.php](#fuel/packages/email/classes/email/driver/smtp.php)
- [fuel/packages/email/classes/email/driver.php](#fuel/packages/email/classes/email/driver.php)
- [fuel/packages/email/classes/email.php](#fuel/packages/email/classes/email.php)
- [fuel/packages/oil/classes/generate/migration/actions.php](#fuel/packages/oil/classes/generate/migration/actions.php)
- [fuel/packages/oil/classes/generate/admin.php](#fuel/packages/oil/classes/generate/admin.php)
- [fuel/packages/oil/classes/generate/scaffold.php](#fuel/packages/oil/classes/generate/scaffold.php)
- [fuel/packages/oil/classes/cell.php](#fuel/packages/oil/classes/cell.php)
- [fuel/packages/oil/classes/command.php](#fuel/packages/oil/classes/command.php)
- [fuel/packages/oil/classes/console.php](#fuel/packages/oil/classes/console.php)
- [fuel/packages/oil/classes/generate.php](#fuel/packages/oil/classes/generate.php)
- [fuel/packages/oil/classes/package.php](#fuel/packages/oil/classes/package.php)
- [fuel/packages/oil/classes/refine.php](#fuel/packages/oil/classes/refine.php)
- [fuel/packages/oil/tasks/fromdb.php](#fuel/packages/oil/tasks/fromdb.php)
- [fuel/packages/oil/views/admin/crud/actions/create.php](#fuel/packages/oil/views/admin/crud/actions/create.php)
- [fuel/packages/oil/views/admin/crud/actions/delete.php](#fuel/packages/oil/views/admin/crud/actions/delete.php)
- [fuel/packages/oil/views/admin/crud/actions/edit.php](#fuel/packages/oil/views/admin/crud/actions/edit.php)
- [fuel/packages/oil/views/admin/crud/actions/index.php](#fuel/packages/oil/views/admin/crud/actions/index.php)
- [fuel/packages/oil/views/admin/crud/actions/view.php](#fuel/packages/oil/views/admin/crud/actions/view.php)
- [fuel/packages/oil/views/admin/crud/controllers/admin.php](#fuel/packages/oil/views/admin/crud/controllers/admin.php)
- [fuel/packages/oil/views/admin/crud/controllers/base.php](#fuel/packages/oil/views/admin/crud/controllers/base.php)
- [fuel/packages/oil/views/admin/crud/views/actions/\_form.php](#fuel/packages/oil/views/admin/crud/views/actions/_form.php)
- [fuel/packages/oil/views/admin/crud/views/actions/create.php](#fuel/packages/oil/views/admin/crud/views/actions/create.php)
- [fuel/packages/oil/views/admin/crud/views/actions/edit.php](#fuel/packages/oil/views/admin/crud/views/actions/edit.php)
- [fuel/packages/oil/views/admin/crud/views/actions/index.php](#fuel/packages/oil/views/admin/crud/views/actions/index.php)
- [fuel/packages/oil/views/admin/crud/views/actions/view.php](#fuel/packages/oil/views/admin/crud/views/actions/view.php)
- [fuel/packages/oil/views/admin/crud/controller.php](#fuel/packages/oil/views/admin/crud/controller.php)
- [fuel/packages/oil/views/admin/crud/model.php](#fuel/packages/oil/views/admin/crud/model.php)
- [fuel/packages/oil/views/admin/orm/actions/create.php](#fuel/packages/oil/views/admin/orm/actions/create.php)
- [fuel/packages/oil/views/admin/orm/actions/delete.php](#fuel/packages/oil/views/admin/orm/actions/delete.php)
- [fuel/packages/oil/views/admin/orm/actions/edit.php](#fuel/packages/oil/views/admin/orm/actions/edit.php)
- [fuel/packages/oil/views/admin/orm/actions/index.php](#fuel/packages/oil/views/admin/orm/actions/index.php)
- [fuel/packages/oil/views/admin/orm/actions/view.php](#fuel/packages/oil/views/admin/orm/actions/view.php)
- [fuel/packages/oil/views/admin/orm/controllers/admin.php](#fuel/packages/oil/views/admin/orm/controllers/admin.php)
- [fuel/packages/oil/views/admin/orm/controllers/base.php](#fuel/packages/oil/views/admin/orm/controllers/base.php)
- [fuel/packages/oil/views/admin/orm/views/actions/\_form.php](#fuel/packages/oil/views/admin/orm/views/actions/_form.php)
- [fuel/packages/oil/views/admin/orm/views/actions/create.php](#fuel/packages/oil/views/admin/orm/views/actions/create.php)
- [fuel/packages/oil/views/admin/orm/views/actions/edit.php](#fuel/packages/oil/views/admin/orm/views/actions/edit.php)
- [fuel/packages/oil/views/admin/orm/views/actions/index.php](#fuel/packages/oil/views/admin/orm/views/actions/index.php)
- [fuel/packages/oil/views/admin/orm/views/actions/view.php](#fuel/packages/oil/views/admin/orm/views/actions/view.php)
- [fuel/packages/oil/views/admin/orm/controller.php](#fuel/packages/oil/views/admin/orm/controller.php)
- [fuel/packages/oil/views/admin/orm/model.php](#fuel/packages/oil/views/admin/orm/model.php)
- [fuel/packages/oil/views/admin/dashboard.php](#fuel/packages/oil/views/admin/dashboard.php)
- [fuel/packages/oil/views/admin/login.php](#fuel/packages/oil/views/admin/login.php)
- [fuel/packages/oil/views/admin/template.php](#fuel/packages/oil/views/admin/template.php)
- [fuel/packages/oil/views/scaffolding/crud/actions/create.php](#fuel/packages/oil/views/scaffolding/crud/actions/create.php)
- [fuel/packages/oil/views/scaffolding/crud/actions/delete.php](#fuel/packages/oil/views/scaffolding/crud/actions/delete.php)
- [fuel/packages/oil/views/scaffolding/crud/actions/edit.php](#fuel/packages/oil/views/scaffolding/crud/actions/edit.php)
- [fuel/packages/oil/views/scaffolding/crud/actions/index.php](#fuel/packages/oil/views/scaffolding/crud/actions/index.php)
- [fuel/packages/oil/views/scaffolding/crud/actions/view.php](#fuel/packages/oil/views/scaffolding/crud/actions/view.php)
- [fuel/packages/oil/views/scaffolding/crud/controllers/admin.php](#fuel/packages/oil/views/scaffolding/crud/controllers/admin.php)
- [fuel/packages/oil/views/scaffolding/crud/controllers/base.php](#fuel/packages/oil/views/scaffolding/crud/controllers/base.php)
- [fuel/packages/oil/views/scaffolding/crud/views/actions/\_form.php](#fuel/packages/oil/views/scaffolding/crud/views/actions/_form.php)
- [fuel/packages/oil/views/scaffolding/crud/views/actions/create.php](#fuel/packages/oil/views/scaffolding/crud/views/actions/create.php)
- [fuel/packages/oil/views/scaffolding/crud/views/actions/edit.php](#fuel/packages/oil/views/scaffolding/crud/views/actions/edit.php)
- [fuel/packages/oil/views/scaffolding/crud/views/actions/index.php](#fuel/packages/oil/views/scaffolding/crud/views/actions/index.php)
- [fuel/packages/oil/views/scaffolding/crud/views/actions/view.php](#fuel/packages/oil/views/scaffolding/crud/views/actions/view.php)
- [fuel/packages/oil/views/scaffolding/crud/controller.php](#fuel/packages/oil/views/scaffolding/crud/controller.php)
- [fuel/packages/oil/views/scaffolding/crud/model.php](#fuel/packages/oil/views/scaffolding/crud/model.php)
- [fuel/packages/oil/views/scaffolding/orm/actions/create.php](#fuel/packages/oil/views/scaffolding/orm/actions/create.php)
- [fuel/packages/oil/views/scaffolding/orm/actions/delete.php](#fuel/packages/oil/views/scaffolding/orm/actions/delete.php)
- [fuel/packages/oil/views/scaffolding/orm/actions/edit.php](#fuel/packages/oil/views/scaffolding/orm/actions/edit.php)
- [fuel/packages/oil/views/scaffolding/orm/actions/index.php](#fuel/packages/oil/views/scaffolding/orm/actions/index.php)
- [fuel/packages/oil/views/scaffolding/orm/actions/view.php](#fuel/packages/oil/views/scaffolding/orm/actions/view.php)
- [fuel/packages/oil/views/scaffolding/orm/views/actions/\_form.php](#fuel/packages/oil/views/scaffolding/orm/views/actions/_form.php)
- [fuel/packages/oil/views/scaffolding/orm/views/actions/create.php](#fuel/packages/oil/views/scaffolding/orm/views/actions/create.php)
- [fuel/packages/oil/views/scaffolding/orm/views/actions/edit.php](#fuel/packages/oil/views/scaffolding/orm/views/actions/edit.php)
- [fuel/packages/oil/views/scaffolding/orm/views/actions/index.php](#fuel/packages/oil/views/scaffolding/orm/views/actions/index.php)
- [fuel/packages/oil/views/scaffolding/orm/views/actions/view.php](#fuel/packages/oil/views/scaffolding/orm/views/actions/view.php)
- [fuel/packages/oil/views/scaffolding/orm/controller.php](#fuel/packages/oil/views/scaffolding/orm/controller.php)
- [fuel/packages/oil/views/scaffolding/orm/model.php](#fuel/packages/oil/views/scaffolding/orm/model.php)
- [fuel/packages/oil/views/scaffolding/template.php](#fuel/packages/oil/views/scaffolding/template.php)
- [fuel/packages/orm/classes/model/nestedset.php](#fuel/packages/orm/classes/model/nestedset.php)
- [fuel/packages/orm/classes/model/soft.php](#fuel/packages/orm/classes/model/soft.php)
- [fuel/packages/orm/classes/model/temporal.php](#fuel/packages/orm/classes/model/temporal.php)
- [fuel/packages/orm/classes/observer/typing.php](#fuel/packages/orm/classes/observer/typing.php)
- [fuel/packages/orm/classes/query/soft.php](#fuel/packages/orm/classes/query/soft.php)
- [fuel/packages/orm/classes/query/temporal.php](#fuel/packages/orm/classes/query/temporal.php)
- [fuel/packages/orm/classes/belongsto.php](#fuel/packages/orm/classes/belongsto.php)
- [fuel/packages/orm/classes/hasmany.php](#fuel/packages/orm/classes/hasmany.php)
- [fuel/packages/orm/classes/hasone.php](#fuel/packages/orm/classes/hasone.php)
- [fuel/packages/orm/classes/manymany.php](#fuel/packages/orm/classes/manymany.php)
- [fuel/packages/orm/classes/model.php](#fuel/packages/orm/classes/model.php)
- [fuel/packages/orm/classes/query.php](#fuel/packages/orm/classes/query.php)
- [fuel/packages/orm/classes/relation.php](#fuel/packages/orm/classes/relation.php)
- [fuel/packages/orm/config/orm.php](#fuel/packages/orm/config/orm.php)
- [fuel/packages/parser/classes/smarty/fuel/extension.php](#fuel/packages/parser/classes/smarty/fuel/extension.php)
- [fuel/packages/parser/classes/twig/fuel/extension.php](#fuel/packages/parser/classes/twig/fuel/extension.php)
- [fuel/packages/parser/classes/view/dwoo.php](#fuel/packages/parser/classes/view/dwoo.php)
- [fuel/packages/parser/classes/view/haml.php](#fuel/packages/parser/classes/view/haml.php)
- [fuel/packages/parser/classes/view/hamltwig.php](#fuel/packages/parser/classes/view/hamltwig.php)
- [fuel/packages/parser/classes/view/handlebars.php](#fuel/packages/parser/classes/view/handlebars.php)
- [fuel/packages/parser/classes/view/jade.php](#fuel/packages/parser/classes/view/jade.php)
- [fuel/packages/parser/classes/view/lex.php](#fuel/packages/parser/classes/view/lex.php)
- [fuel/packages/parser/classes/view/markdown.php](#fuel/packages/parser/classes/view/markdown.php)
- [fuel/packages/parser/classes/view/mustache.php](#fuel/packages/parser/classes/view/mustache.php)
- [fuel/packages/parser/classes/view/phptal.php](#fuel/packages/parser/classes/view/phptal.php)
- [fuel/packages/parser/classes/view/smarty.php](#fuel/packages/parser/classes/view/smarty.php)
- [fuel/packages/parser/classes/view/twig.php](#fuel/packages/parser/classes/view/twig.php)
- [fuel/packages/parser/classes/view.php](#fuel/packages/parser/classes/view.php)

### fuel/app/tasks/robots.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 29 | Argument $speech is missing from the Docblock of run() |

### fuel/app/views/welcome/404.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/app/views/welcome/404.php |

### fuel/app/views/welcome/hello.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/app/views/welcome/hello.php |

### fuel/app/views/welcome/index.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/app/views/welcome/index.php |

### fuel/core/classes/cache/handler/json.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Cache\_Handler\_Json |
| error | 17 | No DocBlock was found for method readable() |
| error | 29 | No DocBlock was found for method writable() |

### fuel/core/classes/cache/handler/serialized.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Cache\_Handler\_Serialized |
| error | 17 | No DocBlock was found for method readable() |
| error | 22 | No DocBlock was found for method writable() |

### fuel/core/classes/cache/handler/string.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Cache\_Handler\_String |
| error | 17 | No DocBlock was found for method readable() |
| error | 22 | No DocBlock was found for method writable() |

### fuel/core/classes/cache/storage/apc.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Cache\_Storage\_Apc |
| error | 29 | No DocBlock was found for method \_\_construct() |
| error | 52 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $dependencies in check\_dependencies() |

### fuel/core/classes/cache/storage/driver.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Cache\_Storage\_Driver |

### fuel/core/classes/cache/storage/file.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Cache\_Storage\_File |
| error | 34 | No DocBlock was found for method \_init() |
| error | 47 | No DocBlock was found for method \_\_construct() |
| error | 67 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $dependencies in check\_dependencies() |

### fuel/core/classes/cache/storage/memcached.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Cache\_Storage\_Memcached |
| error | 30 | No DocBlock was found for property $memcached |
| error | 34 | No DocBlock was found for method \_\_construct() |
| error | 80 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $dependencies in check\_dependencies() |

### fuel/core/classes/cache/storage/redis.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Cache\_Storage\_Redis |
| error | 30 | No DocBlock was found for property $redis |
| error | 34 | No DocBlock was found for method \_\_construct() |
| error | 75 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $dependencies in check\_dependencies() |

### fuel/core/classes/cache/storage/xcache.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Cache\_Storage\_Xcache |
| error | 29 | No DocBlock was found for method \_\_construct() |
| error | 52 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $dependencies in check\_dependencies() |

### fuel/core/classes/cache/notfound.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\CacheNotFoundException |

### fuel/core/classes/config/db.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 20 | No DocBlock was found for property $identifier |
| error | 22 | No DocBlock was found for property $ext |
| error | 24 | No DocBlock was found for property $vars |
| error | 26 | No DocBlock was found for property $database |
| error | 28 | No DocBlock was found for property $table |

### fuel/core/classes/config/file.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/classes/config/file.php |
| error | 10 | No DocBlock was found for property $file |
| error | 12 | No DocBlock was found for property $vars |

### fuel/core/classes/config/interface.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 17 | No DocBlock was found for method load() |
| error | 18 | No DocBlock was found for method group() |
| error | 19 | No DocBlock was found for method save() |

### fuel/core/classes/config/json.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/classes/config/json.php |

### fuel/core/classes/config/memcached.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 73 | No DocBlock was found for property $identifier |
| error | 75 | No DocBlock was found for property $ext |
| error | 77 | No DocBlock was found for property $vars |

### fuel/core/classes/config/php.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/classes/config/php.php |

### fuel/core/classes/config/yml.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/classes/config/yml.php |

### fuel/core/classes/controller/hybrid.php1

| Type | Line | Description |
| --- | --- | --- |
| notice | 126 | Parameter could not be found in is\_restful() |

### fuel/core/classes/controller/rest.php7

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Controller\_Rest |
| error | 71 | No DocBlock was found for method before() |
| error | 84 | No DocBlock was found for method after() |
| error | 395 | No DocBlock was found for method \_check\_login() |
| error | 418 | No DocBlock was found for method \_prepare\_basic\_auth() |
| error | 448 | No DocBlock was found for method \_prepare\_digest\_auth() |
| error | 510 | No DocBlock was found for method \_force\_login() |

### fuel/core/classes/database/dblib/connection.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 17 | No DocBlock was found for \Fuel\Core\Database\_Dblib\_Connection |

### fuel/core/classes/database/mysql/connection.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_MySQL\_Connection |
| error | 50 | Name of argument $table does not match with the DocBlock's name $like in list\_indexes() |
| error | 50 | Argument $like is missing from the Docblock of list\_indexes() |

### fuel/core/classes/database/mysqli/cached.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_MySQLi\_Cached |
| error | 18 | No short description for method \_\_construct() |
| error | 76 | No short description for method cached() |
| error | 88 | No short description for method seek() |

### fuel/core/classes/database/mysqli/connection.php10

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_MySQLi\_Connection |
| error | 48 | No short description for method \_\_construct() |
| error | 71 | No DocBlock was found for method connect() |
| error | 199 | No DocBlock was found for method set\_charset() |
| error | 532 | Name of argument $table does not match with the DocBlock's name $like in list\_indexes() |
| error | 532 | Argument $like is missing from the Docblock of list\_indexes() |
| error | 596 | No DocBlock was found for method error\_info() |
| error | 602 | No DocBlock was found for method driver\_start\_transaction() |
| error | 608 | No DocBlock was found for method driver\_commit() |
| error | 614 | No DocBlock was found for method driver\_rollback() |

### fuel/core/classes/database/mysqli/result.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_MySQLi\_Result |

### fuel/core/classes/database/pdo/cached.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_PDO\_Cached |
| error | 18 | No short description for method \_\_construct() |
| error | 68 | No short description for method cached() |
| error | 80 | No short description for method seek() |

### fuel/core/classes/database/pdo/connection.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 17 | No DocBlock was found for \Fuel\Core\Database\_PDO\_Connection |
| error | 29 | No short description for method \_\_construct() |
| error | 90 | No short description for method disconnect() |
| error | 382 | Name of argument $table does not match with the DocBlock's name $like in list\_indexes() |
| error | 382 | Argument $like is missing from the Docblock of list\_indexes() |

### fuel/core/classes/database/pdo/result.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_PDO\_Result |
| error | 18 | No short description for method \_\_construct() |

### fuel/core/classes/database/query/builder/delete.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_Query\_Builder\_Delete |
| error | 19 | No DocBlock was found for property $\_table |

### fuel/core/classes/database/query/builder/insert.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_Query\_Builder\_Insert |

### fuel/core/classes/database/query/builder/join.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_Query\_Builder\_Join |

### fuel/core/classes/database/query/builder/select.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_Query\_Builder\_Select |
| notice | 88 | Parameter could not be found in select() |
| notice | 120 | Parameter could not be found in from() |
| notice | 224 | Parameter could not be found in group\_by() |

### fuel/core/classes/database/query/builder/update.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_Query\_Builder\_Update |

### fuel/core/classes/database/query/builder/where.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_Query\_Builder\_Where |
| critical | 28 | No short description for property $\_limit |

### fuel/core/classes/database/query/builder.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_Query\_Builder |
| error | 18 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $db in \_compile\_join() |
| error | 39 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $db in \_compile\_conditions() |
| error | 151 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $db in \_compile\_set() |
| error | 182 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $db in \_compile\_order\_by() |

### fuel/core/classes/database/result/cached.php6

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_Result\_Cached |
| error | 18 | No short description for method \_\_construct() |
| error | 31 | No DocBlock was found for method \_\_destruct() |
| error | 36 | No short description for method cached() |
| error | 44 | No short description for method seek() |
| error | 60 | No short description for method current() |

### fuel/core/classes/database/sqlite/builder/delete.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_SQLite\_Builder\_Delete |

### fuel/core/classes/database/sqlite/builder/update.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_SQLite\_Builder\_Update |

### fuel/core/classes/database/sqlite/connection.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_SQLite\_Connection |

### fuel/core/classes/database/sqlsrv/connection.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 17 | No DocBlock was found for \Fuel\Core\Database\_Sqlsrv\_Connection |

### fuel/core/classes/database/connection.php6

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_Connection |
| error | 265 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $args in select() |
| notice | 265 | Parameter could not be found in select() |
| error | 331 | Argument $params is missing from the Docblock of schema() |
| error | 934 | Name of argument $rollback\_all does not match with the DocBlock's name $rollback\_all: in rollback\_transaction() |
| notice | 934 | Parameter $rollback\_all: could not be found in rollback\_transaction() |

### fuel/core/classes/database/exception.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_Exception |
| error | 32 | Argument $message is missing from the Docblock of \_\_construct() |
| error | 32 | Argument $code is missing from the Docblock of \_\_construct() |
| error | 32 | Argument $previous is missing from the Docblock of \_\_construct() |
| error | 32 | Argument $dbcode is missing from the Docblock of \_\_construct() |

### fuel/core/classes/database/expression.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_Expression |
| error | 19 | No DocBlock was found for property $\_value |

### fuel/core/classes/database/query.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_Query |

### fuel/core/classes/database/result.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\Database\_Result |

### fuel/core/classes/database/schema.php12

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Database\_Schema |
| error | 27 | Argument $connection is missing from the Docblock of \_\_construct() |
| error | 232 | Name of argument $index\_columns does not match with the DocBlock's name $index\_name in create\_index() |
| error | 232 | Name of argument $index\_name does not match with the DocBlock's name $index\_columns in create\_index() |
| error | 446 | No short description for method alter\_fields() |
| error | 446 | Argument $type is missing from the Docblock of alter\_fields() |
| error | 446 | Argument $table is missing from the Docblock of alter\_fields() |
| error | 446 | Argument $fields is missing from the Docblock of alter\_fields() |
| error | 486 | No DocBlock was found for method table\_maintenance() |
| error | 559 | No short description for method process\_fields() |
| error | 559 | Argument $fields is missing from the Docblock of process\_fields() |
| error | 559 | Argument $prefix is missing from the Docblock of process\_fields() |

### fuel/core/classes/fieldset/field.php17

| Type | Line | Description |
| --- | --- | --- |
| error | 139 | No short description for method set\_fieldset() |
| error | 418 | Argument $property is missing from the Docblock of \_\_get() |
| error | 456 | Argument $name is missing from the Docblock of add() |
| error | 456 | Argument $label is missing from the Docblock of add() |
| error | 456 | Argument $attributes is missing from the Docblock of add() |
| error | 456 | Argument $rules is missing from the Docblock of add() |
| error | 466 | Argument $name is missing from the Docblock of add\_before() |
| error | 466 | Argument $label is missing from the Docblock of add\_before() |
| error | 466 | Argument $attributes is missing from the Docblock of add\_before() |
| error | 466 | Argument $rules is missing from the Docblock of add\_before() |
| error | 466 | Argument $fieldname is missing from the Docblock of add\_before() |
| error | 476 | Argument $name is missing from the Docblock of add\_after() |
| error | 476 | Argument $label is missing from the Docblock of add\_after() |
| error | 476 | Argument $attributes is missing from the Docblock of add\_after() |
| error | 476 | Argument $rules is missing from the Docblock of add\_after() |
| error | 476 | Argument $fieldname is missing from the Docblock of add\_after() |
| error | 587 | No DocBlock was found for method template() |

### fuel/core/classes/file/handler/directory.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\File\_Handler\_Directory |
| critical | 22 | No short description for property $area |
| error | 32 | No DocBlock was found for method \_\_construct() |
| error | 50 | No DocBlock was found for method forge() |

### fuel/core/classes/file/handler/file.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\File\_Handler\_File |
| critical | 22 | No short description for property $area |
| error | 37 | No DocBlock was found for method \_\_construct() |
| error | 43 | No DocBlock was found for method forge() |

### fuel/core/classes/file/area.php17

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\File\_Area |
| error | 42 | No DocBlock was found for method \_\_construct() |
| error | 58 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $config in forge() |
| error | 207 | No DocBlock was found for method create() |
| error | 212 | No DocBlock was found for method create\_dir() |
| error | 217 | No DocBlock was found for method read() |
| error | 222 | No DocBlock was found for method read\_dir() |
| error | 228 | No DocBlock was found for method rename() |
| error | 233 | No DocBlock was found for method rename\_dir() |
| error | 238 | No DocBlock was found for method copy() |
| error | 243 | No DocBlock was found for method copy\_dir() |
| error | 248 | No DocBlock was found for method delete() |
| error | 253 | No DocBlock was found for method delete\_dir() |
| error | 258 | No DocBlock was found for method update() |
| error | 263 | No DocBlock was found for method get\_permissions() |
| error | 268 | No DocBlock was found for method get\_time() |
| error | 273 | No DocBlock was found for method get\_size() |

### fuel/core/classes/form/instance.php4

| Type | Line | Description |
| --- | --- | --- |
| critical | 36 | No short description for property $fieldset |
| error | 41 | No DocBlock was found for method \_\_construct() |
| error | 759 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $attributes in add() |
| error | 759 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $rules in add() |

### fuel/core/classes/image/driver.php12

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Image\_Driver |
| error | 17 | No DocBlock was found for property $image\_fullpath |
| error | 18 | No DocBlock was found for property $image\_directory |
| error | 19 | No DocBlock was found for property $image\_filename |
| error | 20 | No DocBlock was found for property $image\_extension |
| error | 21 | No DocBlock was found for property $new\_extension |
| error | 22 | No DocBlock was found for property $config |
| error | 23 | No DocBlock was found for property $queued\_actions |
| error | 24 | No DocBlock was found for property $accepted\_extensions |
| error | 36 | No DocBlock was found for method \_\_construct() |
| error | 341 | No DocBlock was found for method crop\_resize() |
| error | 348 | No DocBlock was found for method \_crop\_resize() |

### fuel/core/classes/image/gd.php18

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Image\_Gd |
| error | 17 | No DocBlock was found for property $image\_data |
| error | 18 | No DocBlock was found for property $accepted\_extensions |
| error | 19 | No DocBlock was found for property $gdresizefunc |
| error | 21 | No DocBlock was found for method load() |
| error | 58 | No DocBlock was found for method \_crop() |
| error | 70 | No DocBlock was found for method \_resize() |
| error | 83 | No DocBlock was found for method \_rotate() |
| error | 92 | No DocBlock was found for method \_watermark() |
| error | 138 | No DocBlock was found for method \_flip() |
| error | 183 | No DocBlock was found for method \_border() |
| error | 197 | No DocBlock was found for method \_mask() |
| error | 262 | No DocBlock was found for method \_rounded() |
| error | 272 | No DocBlock was found for method \_grayscale() |
| error | 305 | No DocBlock was found for method sizes() |
| error | 329 | No DocBlock was found for method save() |
| error | 357 | No DocBlock was found for method output() |
| error | 417 | No DocBlock was found for method add\_background() |

### fuel/core/classes/image/imagemagick.php22

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Image\_Imagemagick |
| error | 17 | No DocBlock was found for property $image\_temp |
| error | 18 | No DocBlock was found for property $accepted\_extensions |
| error | 19 | No DocBlock was found for property $sizes\_cache |
| error | 20 | No DocBlock was found for property $im\_path |
| error | 22 | No DocBlock was found for method load() |
| error | 54 | No DocBlock was found for method \_crop() |
| error | 62 | No DocBlock was found for method \_resize() |
| error | 75 | No DocBlock was found for method \_rotate() |
| error | 85 | No DocBlock was found for method \_flip() |
| error | 107 | No DocBlock was found for method \_watermark() |
| error | 128 | No DocBlock was found for method \_border() |
| error | 140 | No DocBlock was found for method \_mask() |
| error | 150 | Argument $radius is missing from the Docblock of \_rounded() |
| error | 150 | Argument $sides is missing from the Docblock of \_rounded() |
| error | 150 | Argument $antialias is missing from the Docblock of \_rounded() |
| error | 172 | No DocBlock was found for method \_grayscale() |
| error | 178 | No DocBlock was found for method sizes() |
| error | 212 | No DocBlock was found for method save() |
| error | 241 | No DocBlock was found for method output() |
| error | 286 | No DocBlock was found for method add\_background() |
| error | 349 | No DocBlock was found for method \_\_destruct() |

### fuel/core/classes/image/imagick.php17

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Image\_Imagick |
| error | 17 | No DocBlock was found for property $accepted\_extensions |
| error | 18 | No DocBlock was found for property $imagick |
| error | 20 | No DocBlock was found for method load() |
| error | 51 | No DocBlock was found for method \_crop() |
| error | 64 | No DocBlock was found for method \_resize() |
| error | 79 | No DocBlock was found for method \_rotate() |
| error | 86 | No DocBlock was found for method \_watermark() |
| error | 95 | No DocBlock was found for method \_flip() |
| error | 116 | No DocBlock was found for method \_border() |
| error | 123 | No DocBlock was found for method \_mask() |
| error | 132 | No DocBlock was found for method \_rounded() |
| error | 167 | No DocBlock was found for method \_grayscale() |
| error | 172 | No DocBlock was found for method sizes() |
| error | 190 | No DocBlock was found for method save() |
| error | 226 | No DocBlock was found for method output() |
| error | 258 | No DocBlock was found for method add\_background() |

### fuel/core/classes/input/instance.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 82 | No short description for method \_\_construct() |
| error | 82 | Argument $new is missing from the Docblock of \_\_construct() |
| error | 82 | Argument $input is missing from the Docblock of \_\_construct() |

### fuel/core/classes/lang/db.php6

| Type | Line | Description |
| --- | --- | --- |
| error | 20 | No DocBlock was found for property $identifier |
| error | 22 | No DocBlock was found for property $ext |
| error | 24 | No DocBlock was found for property $languages |
| error | 26 | No DocBlock was found for property $vars |
| error | 28 | No DocBlock was found for property $database |
| error | 30 | No DocBlock was found for property $table |

### fuel/core/classes/lang/file.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/classes/lang/file.php |
| error | 10 | No DocBlock was found for property $file |
| error | 12 | No DocBlock was found for property $languages |
| error | 14 | No DocBlock was found for property $vars |

### fuel/core/classes/lang/ini.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/classes/lang/ini.php |
| error | 10 | No DocBlock was found for property $ext |

### fuel/core/classes/lang/interface.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/classes/lang/interface.php |
| error | 7 | No DocBlock was found for method load() |
| error | 8 | No DocBlock was found for method group() |
| error | 9 | No DocBlock was found for method save() |

### fuel/core/classes/lang/json.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/classes/lang/json.php |
| error | 10 | No DocBlock was found for property $ext |

### fuel/core/classes/lang/php.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/classes/lang/php.php |

### fuel/core/classes/lang/yml.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/classes/lang/yml.php |
| error | 10 | No DocBlock was found for property $ext |

### fuel/core/classes/model/crud.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Model\_Crud |
| error | 735 | No DocBlock was found for method current() |
| error | 744 | No DocBlock was found for method key() |
| error | 749 | No DocBlock was found for method next() |
| error | 758 | No DocBlock was found for method valid() |

### fuel/core/classes/mongo/db.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 29 | No DocBlock was found for \Fuel\Core\Mongo\_Db |

### fuel/core/classes/redis/db.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 25 | No DocBlock was found for \Fuel\Core\RedisException |
| critical | 79 | No short description for property $connection |
| error | 226 | No short description for method \_\_call() |
| error | 255 | No DocBlock was found for method readResponse() |

### fuel/core/classes/request/curl.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 109 | No DocBlock was found for method execute() |

### fuel/core/classes/request/driver.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/classes/request/driver.php |
| error | 5 | No DocBlock was found for \Fuel\Core\RequestException |
| error | 6 | No DocBlock was found for \Fuel\Core\RequestStatusException |
| error | 106 | No DocBlock was found for method \_\_construct() |

### fuel/core/classes/request/soap.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/classes/request/soap.php |
| error | 16 | No DocBlock was found for property $wsdl\_settings |
| error | 17 | No DocBlock was found for property $non\_wsdl\_settings |
| error | 18 | No DocBlock was found for property $generic\_settings |
| error | 120 | No DocBlock was found for method execute() |

### fuel/core/classes/session/cookie.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 17 | No DocBlock was found for \Fuel\Core\Session\_Cookie |
| error | 28 | No DocBlock was found for method \_\_construct() |

### fuel/core/classes/session/db.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 17 | No DocBlock was found for \Fuel\Core\Session\_Db |
| error | 22 | No DocBlock was found for property $record |
| error | 35 | No DocBlock was found for method \_\_construct() |

### fuel/core/classes/session/driver.php9

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Session\_Driver |
| error | 20 | No DocBlock was found for property $config |
| error | 25 | No DocBlock was found for property $keys |
| error | 30 | No DocBlock was found for property $data |
| error | 35 | No DocBlock was found for property $flash |
| error | 40 | No DocBlock was found for property $time |
| error | 50 | No DocBlock was found for property $state |
| error | 52 | No short description for method \_\_construct() |
| error | 52 | Argument $config is missing from the Docblock of \_\_construct() |

### fuel/core/classes/session/exception.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Session\_Exception |

### fuel/core/classes/session/file.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 17 | No DocBlock was found for \Fuel\Core\Session\_File |
| error | 30 | No DocBlock was found for method \_\_construct() |

### fuel/core/classes/session/memcached.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 17 | No DocBlock was found for \Fuel\Core\Session\_Memcached |
| error | 32 | No DocBlock was found for property $memcached |
| error | 36 | No DocBlock was found for method \_\_construct() |

### fuel/core/classes/session/redis.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 17 | No DocBlock was found for \Fuel\Core\Session\_Redis |
| error | 30 | No DocBlock was found for property $redis |
| error | 34 | No DocBlock was found for method \_\_construct() |

### fuel/core/classes/asset.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 139 | Argument $type is missing from the Docblock of remove\_path() |

### fuel/core/classes/theme.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\ThemeException |
| error | 643 | Argument $var is missing from the Docblock of set\_info() |
| error | 643 | Argument $value is missing from the Docblock of set\_info() |
| error | 643 | Argument $type is missing from the Docblock of set\_info() |

### fuel/core/classes/cache.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\CacheExpiredException |
| error | 18 | No DocBlock was found for \Fuel\Core\Cache |

### fuel/core/classes/cli.php8

| Type | Line | Description |
| --- | --- | --- |
| error | 27 | No DocBlock was found for property $readline\_support |
| error | 29 | No DocBlock was found for property $wait\_msg |
| error | 31 | No DocBlock was found for property $nocolor |
| error | 33 | No DocBlock was found for property $args |
| error | 35 | No DocBlock was found for property $foreground\_colors |
| error | 55 | No DocBlock was found for property $background\_colors |
| error | 66 | No DocBlock was found for property $STDOUT |
| error | 67 | No DocBlock was found for property $STDERR |

### fuel/core/classes/config.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\ConfigException |
| error | 17 | No DocBlock was found for \Fuel\Core\Config |

### fuel/core/classes/unzip.php17

| Type | Line | Description |
| --- | --- | --- |
| error | 36 | No DocBlock was found for property $compressed\_list |
| error | 39 | No DocBlock was found for property $central\_dir\_list |
| error | 42 | No DocBlock was found for property $end\_of\_central |
| error | 45 | No DocBlock was found for property $info |
| error | 46 | No DocBlock was found for property $error |
| error | 47 | No DocBlock was found for property $\_zip\_file |
| error | 48 | No DocBlock was found for property $\_target\_dir |
| error | 49 | No DocBlock was found for property $apply\_chmod |
| error | 50 | No DocBlock was found for property $fh |
| error | 51 | No DocBlock was found for property $zip\_signature |
| error | 54 | No DocBlock was found for property $dir\_signature |
| error | 57 | No DocBlock was found for property $central\_signature\_end |
| error | 60 | No DocBlock was found for property $\_skip\_dirs |
| error | 62 | No DocBlock was found for property $\_allow\_extensions |
| error | 373 | No DocBlock was found for method \_load\_file\_list\_by\_eof() |
| error | 500 | No DocBlock was found for method \_load\_files\_by\_signatures() |
| error | 535 | No DocBlock was found for method \_get\_file\_header() |

### fuel/core/classes/controller.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Controller |

### fuel/core/classes/cookie.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 42 | No DocBlock was found for method \_init() |

### fuel/core/classes/crypt.php8

| Type | Line | Description |
| --- | --- | --- |
| error | 227 | Name of argument $message does not match with the DocBlock's name $ciphertext in split\_message() |
| notice | 227 | Parameter $ciphertext could not be found in split\_message() |
| error | 345 | Name of argument $auth\_key does not match with the DocBlock's name $authKey in calculate\_mac() |
| notice | 345 | Parameter $authKey could not be found in calculate\_mac() |
| error | 357 | Name of argument $auth\_key does not match with the DocBlock's name $authKey in verify\_mac() |
| notice | 357 | Parameter $authKey could not be found in verify\_mac() |
| notice | 357 | Parameter $config could not be found in verify\_mac() |
| error | 624 | No DocBlock was found for method validate\_hmac() |

### fuel/core/classes/date.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 51 | No DocBlock was found for method \_init() |
| error | 61 | No DocBlock was found for function \Fuel\Core\strptime() |
| error | 315 | No DocBlock was found for method \_\_construct() |

### fuel/core/classes/db.php10

| Type | Line | Description |
| --- | --- | --- |
| error | 16 | No DocBlock was found for \Fuel\Core\DB |
| error | 24 | No DocBlock was found for property $query\_count |
| error | 54 | No DocBlock was found for method last\_query() |
| error | 64 | No DocBlock was found for method error\_info() |
| error | 74 | No DocBlock was found for method instance() |
| notice | 79 | Parameter could not be found in select() |
| error | 309 | Name of argument $like does not match with the DocBlock's name $table in list\_tables() |
| notice | 309 | Parameter $table could not be found in list\_tables() |
| error | 419 | Name of argument $rollback\_all does not match with the DocBlock's name $rollback\_all: in rollback\_transaction() |
| notice | 419 | Parameter $rollback\_all: could not be found in rollback\_transaction() |

### fuel/core/classes/dbutil.php9

| Type | Line | Description |
| --- | --- | --- |
| error | 33 | No DocBlock was found for method \_init() |
| error | 204 | Name of argument $index\_columns does not match with the DocBlock's name $index\_name in create\_index() |
| error | 204 | Name of argument $index\_name does not match with the DocBlock's name $index\_columns in create\_index() |
| error | 412 | No short description for method alter\_fields() |
| error | 412 | Argument $type is missing from the Docblock of alter\_fields() |
| error | 412 | Argument $table is missing from the Docblock of alter\_fields() |
| error | 412 | Argument $fields is missing from the Docblock of alter\_fields() |
| error | 412 | Argument $db is missing from the Docblock of alter\_fields() |
| error | 435 | No DocBlock was found for method table\_maintenance() |

### fuel/core/classes/debug.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 26 | No DocBlock was found for property $max\_nesting\_level |
| error | 28 | No DocBlock was found for property $js\_toggle\_open |
| error | 30 | No DocBlock was found for property $js\_displayed |
| error | 32 | No DocBlock was found for property $files |

### fuel/core/classes/uri.php2

| Type | Line | Description |
| --- | --- | --- |
| notice | 242 | Parameter could not be found in build\_query\_string() |
| notice | 242 | Parameter could not be found in build\_query\_string() |

### fuel/core/classes/errorhandler.php9

| Type | Line | Description |
| --- | --- | --- |
| error | 20 | No DocBlock was found for property $count |
| error | 22 | No DocBlock was found for property $loglevel |
| critical | 52 | No short description for class \Fuel\Core\Errorhandler |
| error | 57 | No DocBlock was found for property $loglevel |
| error | 59 | No DocBlock was found for property $levels |
| error | 78 | No DocBlock was found for property $fatal\_levels |
| error | 80 | No DocBlock was found for property $non\_fatal\_cache |
| error | 278 | Argument $e is missing from the Docblock of show\_production\_error() |
| error | 300 | No DocBlock was found for method prepare\_exception() |

### fuel/core/classes/fieldset.php4

| Type | Line | Description |
| --- | --- | --- |
| critical | 27 | No short description for property $\_instance |
| error | 148 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $config in \_\_construct() |
| error | 280 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $attributes in add() |
| error | 280 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $rules in add() |

### fuel/core/classes/file.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\FileAccessException |
| error | 16 | No DocBlock was found for \Fuel\Core\OutsideAreaException |
| error | 17 | No DocBlock was found for \Fuel\Core\InvalidPathException |
| error | 35 | No DocBlock was found for method \_init() |
| error | 53 | No DocBlock was found for method forge() |

### fuel/core/classes/finder.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 29 | No DocBlock was found for method \_init() |
| error | 446 | Argument $path is missing from the Docblock of add\_to\_cache() |

### fuel/core/classes/form.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 28 | No DocBlock was found for property $instance |
| error | 42 | No DocBlock was found for method forge() |

### fuel/core/classes/ftp.php11

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\FtpConnectionException |
| error | 17 | No DocBlock was found for \Fuel\Core\FtpFileAccessException |
| error | 29 | No DocBlock was found for property $initialized |
| error | 31 | No DocBlock was found for property $\_hostname |
| error | 32 | No DocBlock was found for property $\_username |
| error | 33 | No DocBlock was found for property $\_password |
| error | 34 | No DocBlock was found for property $\_port |
| error | 35 | No DocBlock was found for property $\_timeout |
| error | 36 | No DocBlock was found for property $\_passive |
| error | 37 | No DocBlock was found for property $\_debug |
| error | 38 | No DocBlock was found for property $\_conn\_id |

### fuel/core/classes/fuel.php10

| Type | Line | Description |
| --- | --- | --- |
| error | 98 | No DocBlock was found for property $locale |
| error | 100 | No DocBlock was found for property $timezone |
| error | 102 | No DocBlock was found for property $encoding |
| error | 104 | No DocBlock was found for property $is\_cli |
| error | 106 | No DocBlock was found for property $is\_test |
| error | 108 | No DocBlock was found for property $volatile\_paths |
| error | 110 | No DocBlock was found for property $\_paths |
| error | 112 | No DocBlock was found for property $packages |
| error | 114 | No DocBlock was found for method \_\_construct() |
| error | 116 | Argument $config is missing from the Docblock of init() |

### fuel/core/classes/html.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 28 | No DocBlock was found for property $doctypes |
| error | 29 | No DocBlock was found for property $html5 |

### fuel/core/classes/httpexception.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\HttpException |

### fuel/core/classes/validation.php6

| Type | Line | Description |
| --- | --- | --- |
| error | 62 | No DocBlock was found for method instance() |
| error | 78 | Argument $instance is missing from the Docblock of set\_active() |
| error | 94 | Argument $instance is missing from the Docblock of set\_active\_field() |
| error | 137 | No DocBlock was found for method \_\_construct() |
| error | 297 | No DocBlock was found for method remove\_callable() |
| error | 318 | Argument $temp\_callables is missing from the Docblock of run() |

### fuel/core/classes/httpexceptions.php8

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\HttpBadRequestException |
| error | 17 | No DocBlock was found for method response() |
| error | 23 | No DocBlock was found for \Fuel\Core\HttpNoAccessException |
| error | 25 | No DocBlock was found for method response() |
| error | 31 | No DocBlock was found for \Fuel\Core\HttpNotFoundException |
| error | 33 | No DocBlock was found for method response() |
| error | 39 | No DocBlock was found for \Fuel\Core\HttpServerErrorException |
| error | 41 | No DocBlock was found for method response() |

### fuel/core/classes/image.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Image |
| error | 17 | No DocBlock was found for property $\_instance |

### fuel/core/classes/view.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 430 | Name of argument $reverse does not match with the DocBlock's name $prefix in set\_filename() |
| notice | 430 | Parameter $prefix could not be found in set\_filename() |

### fuel/core/classes/input.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 32 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $new in forge() |
| error | 32 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $input in forge() |
| error | 70 | Argument $method is missing from the Docblock of \_\_callStatic() |
| error | 70 | Argument $arguments is missing from the Docblock of \_\_callStatic() |

### fuel/core/classes/lang.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\LangException |
| error | 17 | No DocBlock was found for \Fuel\Core\Lang |
| error | 34 | No DocBlock was found for method \_init() |

### fuel/core/classes/log.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 120 | Argument $prefix is missing from the Docblock of logfile() |
| error | 120 | Argument $suffix is missing from the Docblock of logfile() |

### fuel/core/classes/migrate.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 504 | Argument $class is missing from the Docblock of \_run() |
| error | 504 | Argument $method is missing from the Docblock of \_run() |

### fuel/core/classes/model.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Model |

### fuel/core/classes/viewmodel.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 25 | No DocBlock was found for property $ns\_prefix |

### fuel/core/classes/pagination.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Pagination |
| error | 179 | No short description for method \_\_construct() |
| error | 552 | Argument $page is missing from the Docblock of \_make\_link() |

### fuel/core/classes/presenter.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 25 | No DocBlock was found for property $ns\_prefix |
| error | 115 | No DocBlock was found for method \_\_construct() |
| error | 143 | Argument $view is missing from the Docblock of set\_view() |

### fuel/core/classes/profiler.php13

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/classes/profiler.php |
| error | 8 | No DocBlock was found for \Fuel\Core\Profiler |
| error | 10 | No DocBlock was found for property $profiler |
| error | 12 | No DocBlock was found for property $query |
| error | 14 | No DocBlock was found for method init() |
| error | 26 | No DocBlock was found for method mark() |
| error | 31 | No DocBlock was found for method mark\_memory() |
| error | 36 | No DocBlock was found for method console() |
| error | 41 | No DocBlock was found for method output() |
| error | 46 | No DocBlock was found for method start() |
| error | 60 | No DocBlock was found for method stop() |
| error | 70 | No DocBlock was found for method delete() |
| error | 75 | No DocBlock was found for method app\_total() |

### fuel/core/classes/request.php13

| Type | Line | Description |
| --- | --- | --- |
| error | 135 | Argument $full is missing from the Docblock of reset\_request() |
| error | 588 | Argument $var is missing from the Docblock of set\_get() |
| error | 588 | Argument $value is missing from the Docblock of set\_get() |
| error | 605 | Argument $var is missing from the Docblock of set\_post() |
| error | 605 | Argument $value is missing from the Docblock of set\_post() |
| error | 622 | Argument $var is missing from the Docblock of set\_json() |
| error | 622 | Argument $value is missing from the Docblock of set\_json() |
| error | 639 | Argument $var is missing from the Docblock of set\_put() |
| error | 639 | Argument $value is missing from the Docblock of set\_put() |
| error | 656 | Argument $var is missing from the Docblock of set\_patch() |
| error | 656 | Argument $value is missing from the Docblock of set\_patch() |
| error | 673 | Argument $var is missing from the Docblock of set\_delete() |
| error | 673 | Argument $value is missing from the Docblock of set\_delete() |

### fuel/core/classes/response.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Response |

### fuel/core/classes/route.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Route |
| critical | 81 | No short description for property $callable |
| error | 91 | No DocBlock was found for method \_\_construct() |

### fuel/core/classes/router.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\Router |
| critical | 17 | No short description for property $routes |
| error | 272 | No DocBlock was found for method parse\_segments() |

### fuel/core/classes/security.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Fuel\Core\SecurityException |
| error | 170 | No DocBlock was found for method xss\_clean() |
| error | 190 | No DocBlock was found for method strip\_tags() |
| error | 207 | No DocBlock was found for method htmlentities() |

### fuel/core/classes/session.php1

| Type | Line | Description |
| --- | --- | --- |
| notice | 189 | Parameter could not be found in \_\_construct() |

### fuel/core/classes/str.php7

| Type | Line | Description |
| --- | --- | --- |
| error | 407 | No DocBlock was found for method substr() |
| error | 535 | Name of argument $before\_needle does not match with the DocBlock's name $part in strrchr() |
| notice | 535 | Parameter $part could not be found in strrchr() |
| error | 634 | No DocBlock was found for method length() |
| error | 639 | No DocBlock was found for method sub() |
| error | 644 | No DocBlock was found for method lower() |
| error | 649 | No DocBlock was found for method upper() |

### fuel/core/classes/testcase.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 22 | No DocBlock was found for method expectException() |

### fuel/core/config/test/agent.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/config/test/agent.php |

### fuel/core/config/mimes.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/config/mimes.php |

### fuel/core/lang/en/date.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/lang/en/date.php |

### fuel/core/lang/en/inflector.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/lang/en/inflector.php |

### fuel/core/lang/en/pagination.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/lang/en/pagination.php |

### fuel/core/lang/en/upload.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/lang/en/upload.php |

### fuel/core/lang/en/validation.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/lang/en/validation.php |

### fuel/core/tasks/install.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 28 | No DocBlock was found for method run() |

### fuel/core/tasks/migrate.php1

| Type | Line | Description |
| --- | --- | --- |
| notice | 244 | Parameter could not be found in \_run() |

### fuel/core/tasks/session.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 39 | No DocBlock was found for method run() |

### fuel/core/views/errors/crypt\_keys.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/views/errors/crypt\_keys.php |

### fuel/core/views/errors/php\_error.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/views/errors/php\_error.php |

### fuel/core/views/errors/php\_fatal\_error.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/views/errors/php\_fatal\_error.php |

### fuel/core/views/errors/php\_short.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/views/errors/php\_short.php |

### fuel/core/views/errors/production.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/views/errors/production.php |

### fuel/core/views/400.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/views/400.php |

### fuel/core/views/403.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/views/403.php |

### fuel/core/views/404.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/views/404.php |

### fuel/core/views/500.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/core/views/500.php |

### fuel/core/base.php15

| Type | Line | Description |
| --- | --- | --- |
| error | 24 | No DocBlock was found for function \is\_windows() |
| error | 39 | No DocBlock was found for function \import() |
| error | 71 | No DocBlock was found for function \logger() |
| error | 85 | No DocBlock was found for function \array\_to\_attr() |
| error | 121 | No DocBlock was found for function \html\_tag() |
| error | 162 | No DocBlock was found for function \in\_arrayi() |
| error | 176 | No DocBlock was found for function \get\_object\_public\_vars() |
| error | 192 | No DocBlock was found for function \render() |
| error | 207 | No DocBlock was found for function \\_\_() |
| error | 221 | No DocBlock was found for function \e() |
| error | 236 | No DocBlock was found for function \get\_real\_class() |
| error | 276 | No DocBlock was found for function \http\_build\_url() |
| error | 376 | No DocBlock was found for function \get\_common\_path() |
| error | 403 | No DocBlock was found for function \call\_fuel\_func\_array() |
| error | 513 | No DocBlock was found for function \hash\_pbkdf2() |

### fuel/core/bootstrap.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 115 | No DocBlock was found for function \setup\_autoloader() |
| error | 341 | No DocBlock was found for function \get\_composer() |

### fuel/packages/auth/classes/auth/acl/driver.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Auth\Auth\_Acl\_Driver |
| error | 27 | No DocBlock was found for method forge() |
| error | 52 | Argument $rights is missing from the Docblock of \_parse\_conditions() |
| error | 91 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $entity in has\_access() |

### fuel/packages/auth/classes/auth/acl/ormacl.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 26 | No DocBlock was found for property $\_valid\_roles |
| error | 31 | No DocBlock was found for method \_init() |
| error | 48 | No DocBlock was found for property $\_acl\_cache |
| error | 53 | No DocBlock was found for method roles() |
| error | 61 | No DocBlock was found for method has\_access() |

### fuel/packages/auth/classes/auth/acl/simpleacl.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Auth\Auth\_Acl\_Simpleacl |
| error | 17 | No DocBlock was found for property $\_valid\_roles |
| error | 19 | No DocBlock was found for method \_init() |
| error | 24 | No DocBlock was found for method roles() |
| error | 29 | No DocBlock was found for method has\_access() |

### fuel/packages/auth/classes/auth/group/driver.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Auth\Auth\_Group\_Driver |
| critical | 17 | No short description for property $\_instance |
| error | 27 | No DocBlock was found for method forge() |

### fuel/packages/auth/classes/auth/group/ormgroup.php7

| Type | Line | Description |
| --- | --- | --- |
| error | 26 | No DocBlock was found for property $\_valid\_groups |
| error | 31 | No DocBlock was found for method \_init() |
| error | 48 | No DocBlock was found for property $config |
| error | 55 | No DocBlock was found for method groups() |
| error | 63 | No DocBlock was found for method member() |
| error | 108 | No DocBlock was found for method get\_name() |
| error | 142 | No DocBlock was found for method get\_roles() |

### fuel/packages/auth/classes/auth/group/simplegroup.php8

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Auth\Auth\_Group\_Simplegroup |
| error | 17 | No DocBlock was found for property $\_valid\_groups |
| error | 19 | No DocBlock was found for method \_init() |
| error | 24 | No DocBlock was found for property $config |
| error | 28 | No DocBlock was found for method groups() |
| error | 33 | No DocBlock was found for method member() |
| error | 52 | No DocBlock was found for method get\_name() |
| error | 66 | No DocBlock was found for method get\_roles() |

### fuel/packages/auth/classes/auth/login/driver.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Auth\Auth\_Login\_Driver |
| error | 32 | No DocBlock was found for method forge() |
| error | 177 | Argument $driver is missing from the Docblock of groups() |
| error | 201 | Argument $driver is missing from the Docblock of roles() |
| error | 227 | Argument $user\_id is missing from the Docblock of remember\_me() |

### fuel/packages/auth/classes/auth/login/ormauth.php9

| Type | Line | Description |
| --- | --- | --- |
| error | 26 | No DocBlock was found for method \_init() |
| error | 70 | Argument $username\_or\_email is missing from the Docblock of validate\_user() |
| error | 70 | Argument $password is missing from the Docblock of validate\_user() |
| error | 215 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $profile\_fields in create\_user() |
| error | 610 | Argument $field is missing from the Docblock of get\_profile\_fields() |
| error | 610 | Argument $default is missing from the Docblock of get\_profile\_fields() |
| error | 636 | Argument $condition is missing from the Docblock of has\_access() |
| error | 636 | Argument $driver is missing from the Docblock of has\_access() |
| error | 636 | Argument $user is missing from the Docblock of has\_access() |

### fuel/packages/auth/classes/auth/login/simpleauth.php8

| Type | Line | Description |
| --- | --- | --- |
| error | 112 | Argument $username\_or\_email is missing from the Docblock of validate\_user() |
| error | 112 | Argument $password is missing from the Docblock of validate\_user() |
| error | 220 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $profile\_fields in create\_user() |
| error | 552 | Argument $field is missing from the Docblock of get\_profile\_fields() |
| error | 552 | Argument $default is missing from the Docblock of get\_profile\_fields() |
| error | 576 | Argument $condition is missing from the Docblock of has\_access() |
| error | 576 | Argument $driver is missing from the Docblock of has\_access() |
| error | 576 | Argument $user is missing from the Docblock of has\_access() |

### fuel/packages/auth/classes/auth/driver.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Auth\Auth\_Driver |
| error | 29 | No DocBlock was found for method forge() |
| error | 71 | No DocBlock was found for method \_\_construct() |

### fuel/packages/auth/classes/auth/exceptions.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Auth\SimpleUserUpdateException |
| error | 17 | No DocBlock was found for \Auth\SimpleUserWrongPassword |
| error | 19 | No DocBlock was found for \Auth\OpauthException |

### fuel/packages/auth/classes/auth/opauth.php6

| Type | Line | Description |
| --- | --- | --- |
| error | 17 | No DocBlock was found for \Auth\Auth\_Opauth |
| error | 177 | Argument $config is missing from the Docblock of \_\_construct() |
| error | 177 | Argument $autorun is missing from the Docblock of \_\_construct() |
| error | 316 | Argument $data is missing from the Docblock of link\_provider() |
| error | 346 | Argument $key is missing from the Docblock of get() |
| error | 346 | Argument $default is missing from the Docblock of get() |

### fuel/packages/auth/classes/model/auth/group.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Auth\Model\Auth\_Group |

### fuel/packages/auth/classes/model/auth/grouppermission.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Auth\Model\Auth\_Grouppermission |

### fuel/packages/auth/classes/model/auth/metadata.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Auth\Model\Auth\_Metadata |

### fuel/packages/auth/classes/model/auth/permission.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Auth\Model\Auth\_Permission |

### fuel/packages/auth/classes/model/auth/provider.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Auth\Model\Auth\_Provider |

### fuel/packages/auth/classes/model/auth/role.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Auth\Model\Auth\_Role |

### fuel/packages/auth/classes/model/auth/rolepermission.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Auth\Model\Auth\_Rolepermission |

### fuel/packages/auth/classes/model/auth/user.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 17 | No DocBlock was found for \Auth\Model\Auth\_User |
| error | 127 | No DocBlock was found for property $\_eav |

### fuel/packages/auth/classes/model/auth/userpermission.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Auth\Model\Auth\_Userpermission |

### fuel/packages/auth/classes/auth.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Auth\AuthException |
| error | 53 | No DocBlock was found for method \_init() |
| error | 290 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $driver in \_register\_verified() |
| error | 300 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $driver in \_unregister\_verified() |

### fuel/packages/auth/lang/en/auth\_model\_group.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/auth/lang/en/auth\_model\_group.php |

### fuel/packages/auth/lang/en/auth\_model\_permission.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/auth/lang/en/auth\_model\_permission.php |

### fuel/packages/auth/lang/en/auth\_model\_role.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/auth/lang/en/auth\_model\_role.php |

### fuel/packages/auth/lang/en/auth\_model\_user.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/auth/lang/en/auth\_model\_user.php |

### fuel/packages/auth/migrations/001\_auth\_create\_usertables.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/auth/migrations/001\_auth\_create\_usertables.php |
| error | 7 | No DocBlock was found for \Fuel\Migrations\Auth\_Create\_Usertables |
| error | 9 | No DocBlock was found for method up() |
| error | 190 | No DocBlock was found for method down() |
| error | 234 | Argument $type is missing from the Docblock of dbconnection() |

### fuel/packages/auth/migrations/002\_auth\_create\_grouptables.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/auth/migrations/002\_auth\_create\_grouptables.php |
| error | 7 | No DocBlock was found for \Fuel\Migrations\Auth\_Create\_Grouptables |
| error | 9 | No DocBlock was found for method up() |
| error | 49 | No DocBlock was found for method down() |
| error | 77 | Argument $type is missing from the Docblock of dbconnection() |

### fuel/packages/auth/migrations/003\_auth\_create\_roletables.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/auth/migrations/003\_auth\_create\_roletables.php |
| error | 7 | No DocBlock was found for \Fuel\Migrations\Auth\_Create\_Roletables |
| error | 9 | No DocBlock was found for method up() |
| error | 44 | No DocBlock was found for method down() |
| error | 69 | Argument $type is missing from the Docblock of dbconnection() |

### fuel/packages/auth/migrations/004\_auth\_create\_permissiontables.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/auth/migrations/004\_auth\_create\_permissiontables.php |
| error | 7 | No DocBlock was found for \Fuel\Migrations\Auth\_Create\_Permissiontables |
| error | 9 | No DocBlock was found for method up() |
| error | 42 | No DocBlock was found for method down() |
| error | 64 | Argument $type is missing from the Docblock of dbconnection() |

### fuel/packages/auth/migrations/005\_auth\_create\_authdefaults.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/auth/migrations/005\_auth\_create\_authdefaults.php |
| error | 7 | No DocBlock was found for \Fuel\Migrations\Auth\_Create\_Authdefaults |
| error | 9 | No DocBlock was found for method up() |
| error | 104 | No DocBlock was found for method down() |
| error | 129 | Argument $type is missing from the Docblock of dbconnection() |

### fuel/packages/auth/migrations/006\_auth\_add\_authactions.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/auth/migrations/006\_auth\_add\_authactions.php |
| error | 7 | No DocBlock was found for \Fuel\Migrations\Auth\_Add\_Authactions |
| error | 9 | No DocBlock was found for method up() |
| error | 42 | No DocBlock was found for method down() |
| error | 74 | Argument $type is missing from the Docblock of dbconnection() |

### fuel/packages/auth/migrations/007\_auth\_add\_permissionsfilter.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/auth/migrations/007\_auth\_add\_permissionsfilter.php |
| error | 7 | No DocBlock was found for \Fuel\Migrations\Auth\_Add\_Permissionsfilter |
| error | 9 | No DocBlock was found for method up() |
| error | 33 | No DocBlock was found for method down() |
| error | 59 | Argument $type is missing from the Docblock of dbconnection() |

### fuel/packages/auth/migrations/008\_auth\_create\_providers.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/auth/migrations/008\_auth\_create\_providers.php |
| error | 7 | No DocBlock was found for \Fuel\Migrations\Auth\_Create\_Providers |
| error | 9 | No DocBlock was found for method up() |
| error | 57 | No DocBlock was found for method down() |
| error | 92 | Argument $type is missing from the Docblock of dbconnection() |

### fuel/packages/auth/migrations/009\_auth\_create\_oauth2tables.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/auth/migrations/009\_auth\_create\_oauth2tables.php |
| error | 7 | No DocBlock was found for \Fuel\Migrations\Auth\_Create\_Oauth2tables |
| error | 9 | No DocBlock was found for method up() |
| error | 131 | No DocBlock was found for method down() |
| error | 170 | Argument $type is missing from the Docblock of dbconnection() |

### fuel/packages/auth/migrations/010\_auth\_fix\_jointables.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/auth/migrations/010\_auth\_fix\_jointables.php |
| error | 7 | No DocBlock was found for \Fuel\Migrations\Auth\_Fix\_Jointables |
| error | 9 | No DocBlock was found for method up() |
| error | 43 | No DocBlock was found for method down() |
| error | 77 | Argument $type is missing from the Docblock of dbconnection() |

### fuel/packages/auth/migrations/011\_auth\_group\_optional.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/auth/migrations/011\_auth\_group\_optional.php |
| error | 7 | No DocBlock was found for \Fuel\Migrations\Auth\_Group\_Optional |
| error | 9 | No DocBlock was found for method up() |
| error | 33 | No DocBlock was found for method down() |
| error | 57 | Argument $type is missing from the Docblock of dbconnection() |

### fuel/packages/auth/tasks/simple2orm.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 23 | No DocBlock was found for property $data |
| error | 361 | No DocBlock was found for method usertable() |

### fuel/packages/auth/normalizedrivertypes.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 10 | No DocBlock was found for function \normalize\_driver\_types() |

### fuel/packages/email/classes/email/driver/mail.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Email\Email\_Driver\_Mail |

### fuel/packages/email/classes/email/driver/mailgun.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Email\Email\_Driver\_Mailgun |
| error | 17 | No DocBlock was found for method \_send() |

### fuel/packages/email/classes/email/driver/mandrill.php8

| Type | Line | Description |
| --- | --- | --- |
| error | 18 | No DocBlock was found for \Email\Email\_Driver\_Mandrill |
| error | 48 | Argument $config is missing from the Docblock of \_\_construct() |
| error | 169 | Argument $file is missing from the Docblock of attach() |
| error | 169 | Argument $inline is missing from the Docblock of attach() |
| error | 169 | Argument $cid is missing from the Docblock of attach() |
| error | 169 | Argument $mime is missing from the Docblock of attach() |
| error | 169 | Argument $name is missing from the Docblock of attach() |
| error | 204 | Argument $list is missing from the Docblock of clear\_list() |

### fuel/packages/email/classes/email/driver/noop.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Email\Email\_Driver\_Noop |

### fuel/packages/email/classes/email/driver/sendmail.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Email\SendmailConnectionException |
| error | 17 | No DocBlock was found for \Email\SendmailFailedException |
| error | 19 | No DocBlock was found for \Email\Email\_Driver\_Sendmail |

### fuel/packages/email/classes/email/driver/smtp.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Email\SmtpConnectionException |
| error | 17 | No DocBlock was found for \Email\SmtpCommandFailureException |
| error | 19 | No DocBlock was found for \Email\SmtpTimeoutException |
| error | 21 | No DocBlock was found for \Email\SmtpAuthenticationFailedException |
| error | 23 | No DocBlock was found for \Email\Email\_Driver\_Smtp |

### fuel/packages/email/classes/email/driver.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Email\Email\_Driver |
| error | 968 | Argument $type is missing from the Docblock of get\_attachment\_headers() |
| error | 968 | Argument $boundary is missing from the Docblock of get\_attachment\_headers() |

### fuel/packages/email/classes/email.php6

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Email\AttachmentNotFoundException |
| error | 17 | No DocBlock was found for \Email\InvalidAttachmentsException |
| error | 19 | No DocBlock was found for \Email\InvalidEmailStringEncoding |
| error | 21 | No DocBlock was found for \Email\EmailSendingFailedException |
| error | 23 | No DocBlock was found for \Email\EmailValidationFailedException |
| error | 25 | No DocBlock was found for \Email\Email |

### fuel/packages/oil/classes/generate/migration/actions.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 329 | Argument $fields is missing from the Docblock of \_generate\_field\_string() |

### fuel/packages/oil/classes/generate/admin.php6

| Type | Line | Description |
| --- | --- | --- |
| error | 24 | No DocBlock was found for property $view\_subdir |
| error | 26 | No DocBlock was found for property $controller\_prefix |
| error | 27 | No DocBlock was found for property $model\_prefix |
| error | 29 | No DocBlock was found for property $controller\_parent |
| error | 31 | No DocBlock was found for method \_init() |
| error | 38 | No DocBlock was found for method forge() |

### fuel/packages/oil/classes/generate/scaffold.php6

| Type | Line | Description |
| --- | --- | --- |
| error | 24 | No DocBlock was found for property $fields\_regex |
| error | 26 | No DocBlock was found for property $view\_subdir |
| error | 28 | No DocBlock was found for property $controller\_prefix |
| error | 29 | No DocBlock was found for property $model\_prefix |
| error | 31 | No DocBlock was found for property $controller\_parent |
| error | 33 | No DocBlock was found for method \_init() |

### fuel/packages/oil/classes/cell.php13

| Type | Line | Description |
| --- | --- | --- |
| error | 25 | No DocBlock was found for property $\_protected |
| error | 26 | No DocBlock was found for property $\_api\_url |
| error | 28 | No DocBlock was found for property $\_git\_binary |
| error | 29 | No DocBlock was found for property $\_hg\_binary |
| error | 31 | No DocBlock was found for method install() |
| error | 81 | No DocBlock was found for method all() |
| error | 97 | No DocBlock was found for method search() |
| error | 113 | No DocBlock was found for method uninstall() |
| error | 134 | No DocBlock was found for method info() |
| error | 159 | No DocBlock was found for method help() |
| error | 187 | No DocBlock was found for method \_use\_git() |
| error | 208 | No DocBlock was found for method \_download\_package\_zip() |
| error | 260 | No DocBlock was found for method \_clone\_package\_repo() |

### fuel/packages/oil/classes/command.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 24 | No DocBlock was found for method init() |
| error | 332 | No DocBlock was found for method print\_exception() |
| error | 357 | No DocBlock was found for method help() |
| error | 389 | No DocBlock was found for method \_clear\_args() |

### fuel/packages/oil/classes/console.php6

| Type | Line | Description |
| --- | --- | --- |
| error | 26 | No DocBlock was found for method \_\_construct() |
| error | 46 | No DocBlock was found for method help() |
| error | 67 | No DocBlock was found for method main() |
| error | 159 | No DocBlock was found for method is\_immediate() |
| error | 214 | No DocBlock was found for method tab\_complete() |
| error | 229 | No DocBlock was found for method build\_date() |

### fuel/packages/oil/classes/generate.php45

| Type | Line | Description |
| --- | --- | --- |
| error | 25 | No DocBlock was found for property $create\_folders |
| error | 26 | No DocBlock was found for property $create\_files |
| error | 28 | No DocBlock was found for property $scaffolding |
| error | 30 | No DocBlock was found for property $\_field\_defaults |
| error | 52 | No short description for method config() |
| error | 52 | Argument $args is missing from the Docblock of config() |
| error | 152 | No short description for method controller() |
| error | 152 | Argument $args is missing from the Docblock of controller() |
| error | 152 | Argument $build is missing from the Docblock of controller() |
| error | 268 | No short description for method model() |
| error | 268 | Argument $args is missing from the Docblock of model() |
| error | 268 | Argument $build is missing from the Docblock of model() |
| error | 723 | No short description for method module() |
| error | 723 | Argument $args is missing from the Docblock of module() |
| error | 776 | No short description for method views() |
| error | 776 | Argument $args is missing from the Docblock of views() |
| error | 776 | Argument $subfolder is missing from the Docblock of views() |
| error | 776 | Argument $build is missing from the Docblock of views() |
| error | 836 | No short description for method migration() |
| error | 836 | Argument $args is missing from the Docblock of migration() |
| error | 836 | Argument $build is missing from the Docblock of migration() |
| error | 1057 | No short description for method task() |
| error | 1057 | Argument $args is missing from the Docblock of task() |
| error | 1057 | Argument $build is missing from the Docblock of task() |
| error | 1173 | No short description for method help() |
| error | 1213 | No short description for method package() |
| error | 1213 | Argument $args is missing from the Docblock of package() |
| error | 1213 | Argument $build is missing from the Docblock of package() |
| error | 1571 | No short description for method create() |
| error | 1571 | Argument $filepath is missing from the Docblock of create() |
| error | 1571 | Argument $contents is missing from the Docblock of create() |
| error | 1571 | Argument $type is missing from the Docblock of create() |
| error | 1604 | No short description for method build() |
| error | 1641 | No short description for method class\_name() |
| error | 1641 | Argument $name is missing from the Docblock of class\_name() |
| error | 1649 | No short description for method normalize\_args() |
| error | 1649 | Argument $args is missing from the Docblock of normalize\_args() |
| error | 2010 | No short description for method \_find\_migration\_number() |
| error | 2042 | No short description for method \_update\_current\_version() |
| error | 2042 | Argument $version is missing from the Docblock of \_update\_current\_version() |
| error | 2066 | No short description for method \_create\_test() |
| error | 2066 | Argument $type is missing from the Docblock of \_create\_test() |
| error | 2066 | Argument $class\_name is missing from the Docblock of \_create\_test() |
| error | 2066 | Argument $base\_path is missing from the Docblock of \_create\_test() |
| error | 2066 | Argument $nav\_item is missing from the Docblock of \_create\_test() |

### fuel/packages/oil/classes/package.php8

| Type | Line | Description |
| --- | --- | --- |
| error | 25 | No DocBlock was found for property $protected |
| error | 27 | No DocBlock was found for property $git |
| error | 29 | No DocBlock was found for method install() |
| error | 84 | No DocBlock was found for method uninstall() |
| error | 107 | No DocBlock was found for method help() |
| error | 132 | No DocBlock was found for method \_use\_git() |
| error | 153 | No DocBlock was found for method \_download\_package\_zip() |
| error | 204 | No DocBlock was found for method \_clone\_package\_repo() |

### fuel/packages/oil/classes/refine.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 24 | No DocBlock was found for method run() |
| error | 134 | No DocBlock was found for method help() |

### fuel/packages/oil/tasks/fromdb.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 83 | Argument $tables is missing from the Docblock of scaffold() |
| error | 125 | Argument $tables is missing from the Docblock of model() |
| error | 157 | Argument $tables is missing from the Docblock of migration() |
| error | 239 | Name of argument $type does not match with the DocBlock's name $migration in arguments() |
| notice | 239 | Parameter $migration could not be found in arguments() |

### fuel/packages/oil/views/admin/crud/actions/create.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/crud/actions/create.php |

### fuel/packages/oil/views/admin/crud/actions/delete.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/crud/actions/delete.php |

### fuel/packages/oil/views/admin/crud/actions/edit.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/crud/actions/edit.php |

### fuel/packages/oil/views/admin/crud/actions/index.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/crud/actions/index.php |

### fuel/packages/oil/views/admin/crud/actions/view.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/crud/actions/view.php |

### fuel/packages/oil/views/admin/crud/controllers/admin.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/crud/controllers/admin.php |
| error | 3 | No DocBlock was found for \Controller\_Admin |
| error | 5 | No DocBlock was found for property $template |
| error | 7 | No DocBlock was found for method before() |
| error | 28 | No DocBlock was found for method action\_login() |

### fuel/packages/oil/views/admin/crud/controllers/base.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/crud/controllers/base.php |
| error | 3 | No DocBlock was found for \Controller\_Base |
| error | 5 | No DocBlock was found for method before() |

### fuel/packages/oil/views/admin/crud/views/actions/\_form.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/crud/views/actions/\_form.php |

### fuel/packages/oil/views/admin/crud/views/actions/create.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/crud/views/actions/create.php |

### fuel/packages/oil/views/admin/crud/views/actions/edit.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/crud/views/actions/edit.php |

### fuel/packages/oil/views/admin/crud/views/actions/index.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/crud/views/actions/index.php |

### fuel/packages/oil/views/admin/crud/views/actions/view.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/crud/views/actions/view.php |

### fuel/packages/oil/views/admin/crud/controller.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/crud/controller.php |

### fuel/packages/oil/views/admin/crud/model.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/crud/model.php |

### fuel/packages/oil/views/admin/orm/actions/create.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/orm/actions/create.php |

### fuel/packages/oil/views/admin/orm/actions/delete.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/orm/actions/delete.php |

### fuel/packages/oil/views/admin/orm/actions/edit.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/orm/actions/edit.php |

### fuel/packages/oil/views/admin/orm/actions/index.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/orm/actions/index.php |

### fuel/packages/oil/views/admin/orm/actions/view.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/orm/actions/view.php |

### fuel/packages/oil/views/admin/orm/controllers/admin.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/orm/controllers/admin.php |
| error | 3 | No DocBlock was found for \Controller\_Admin |
| error | 5 | No DocBlock was found for property $template |
| error | 7 | No DocBlock was found for method before() |
| error | 29 | No DocBlock was found for method action\_login() |

### fuel/packages/oil/views/admin/orm/controllers/base.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/orm/controllers/base.php |
| error | 3 | No DocBlock was found for \Controller\_Base |
| error | 5 | No DocBlock was found for method before() |

### fuel/packages/oil/views/admin/orm/views/actions/\_form.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/orm/views/actions/\_form.php |

### fuel/packages/oil/views/admin/orm/views/actions/create.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/orm/views/actions/create.php |

### fuel/packages/oil/views/admin/orm/views/actions/edit.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/orm/views/actions/edit.php |

### fuel/packages/oil/views/admin/orm/views/actions/index.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/orm/views/actions/index.php |

### fuel/packages/oil/views/admin/orm/views/actions/view.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/orm/views/actions/view.php |

### fuel/packages/oil/views/admin/orm/controller.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/orm/controller.php |

### fuel/packages/oil/views/admin/orm/model.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/orm/model.php |

### fuel/packages/oil/views/admin/dashboard.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/dashboard.php |

### fuel/packages/oil/views/admin/login.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/login.php |

### fuel/packages/oil/views/admin/template.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/admin/template.php |

### fuel/packages/oil/views/scaffolding/crud/actions/create.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/crud/actions/create.php |

### fuel/packages/oil/views/scaffolding/crud/actions/delete.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/crud/actions/delete.php |

### fuel/packages/oil/views/scaffolding/crud/actions/edit.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/crud/actions/edit.php |

### fuel/packages/oil/views/scaffolding/crud/actions/index.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/crud/actions/index.php |

### fuel/packages/oil/views/scaffolding/crud/actions/view.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/crud/actions/view.php |

### fuel/packages/oil/views/scaffolding/crud/controllers/admin.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/crud/controllers/admin.php |
| error | 3 | No DocBlock was found for \Controller\_Admin |
| error | 5 | No DocBlock was found for property $template |
| error | 7 | No DocBlock was found for method before() |
| error | 28 | No DocBlock was found for method action\_login() |

### fuel/packages/oil/views/scaffolding/crud/controllers/base.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/crud/controllers/base.php |
| error | 3 | No DocBlock was found for \Controller\_Base |
| error | 5 | No DocBlock was found for method before() |

### fuel/packages/oil/views/scaffolding/crud/views/actions/\_form.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/crud/views/actions/\_form.php |

### fuel/packages/oil/views/scaffolding/crud/views/actions/create.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/crud/views/actions/create.php |

### fuel/packages/oil/views/scaffolding/crud/views/actions/edit.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/crud/views/actions/edit.php |

### fuel/packages/oil/views/scaffolding/crud/views/actions/index.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/crud/views/actions/index.php |

### fuel/packages/oil/views/scaffolding/crud/views/actions/view.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/crud/views/actions/view.php |

### fuel/packages/oil/views/scaffolding/crud/controller.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/crud/controller.php |

### fuel/packages/oil/views/scaffolding/crud/model.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/crud/model.php |

### fuel/packages/oil/views/scaffolding/orm/actions/create.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/orm/actions/create.php |

### fuel/packages/oil/views/scaffolding/orm/actions/delete.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/orm/actions/delete.php |

### fuel/packages/oil/views/scaffolding/orm/actions/edit.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/orm/actions/edit.php |

### fuel/packages/oil/views/scaffolding/orm/actions/index.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/orm/actions/index.php |

### fuel/packages/oil/views/scaffolding/orm/actions/view.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/orm/actions/view.php |

### fuel/packages/oil/views/scaffolding/orm/views/actions/\_form.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/orm/views/actions/\_form.php |

### fuel/packages/oil/views/scaffolding/orm/views/actions/create.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/orm/views/actions/create.php |

### fuel/packages/oil/views/scaffolding/orm/views/actions/edit.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/orm/views/actions/edit.php |

### fuel/packages/oil/views/scaffolding/orm/views/actions/index.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/orm/views/actions/index.php |

### fuel/packages/oil/views/scaffolding/orm/views/actions/view.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/orm/views/actions/view.php |

### fuel/packages/oil/views/scaffolding/orm/controller.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/orm/controller.php |

### fuel/packages/oil/views/scaffolding/orm/model.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/orm/model.php |

### fuel/packages/oil/views/scaffolding/template.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/oil/views/scaffolding/template.php |

### fuel/packages/orm/classes/model/nestedset.php11

| Type | Line | Description |
| --- | --- | --- |
| error | 36 | No DocBlock was found for property $\_defaults |
| error | 112 | No DocBlock was found for method \_\_construct() |
| error | 378 | Argument $addroot is missing from the Docblock of path() |
| error | 924 | Argument $cascade is missing from the Docblock of save() |
| error | 924 | Argument $use\_transaction is missing from the Docblock of save() |
| error | 1142 | Argument $use\_transaction is missing from the Docblock of delete() |
| error | 1202 | Argument $use\_transaction is missing from the Docblock of delete\_tree() |
| notice | 1270 | Parameter could not be found in get\_query() |
| error | 1296 | Argument $conditions is missing from the Docblock of get() |
| error | 1350 | No DocBlock was found for method get\_one() |
| error | 1434 | No DocBlock was found for method \_fetch\_nodes() |

### fuel/packages/orm/classes/model/soft.php10

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Orm\RelationNotSoft |
| error | 47 | No DocBlock was found for property $\_disable\_filter |
| error | 49 | No DocBlock was found for property $\_disable\_soft\_delete |
| error | 100 | No short description for method get\_filter\_status() |
| error | 153 | No DocBlock was found for method delete\_self() |
| error | 192 | Argument $rel is missing from the Docblock of should\_cascade\_delete() |
| error | 207 | Argument $cascade\_restore is missing from the Docblock of restore() |
| error | 270 | Argument $options is missing from the Docblock of query() |
| error | 286 | Argument $id is missing from the Docblock of deleted() |
| error | 286 | Argument $options is missing from the Docblock of deleted() |

### fuel/packages/orm/classes/model/temporal.php7

| Type | Line | Description |
| --- | --- | --- |
| error | 60 | No DocBlock was found for method \_init() |
| error | 176 | No DocBlock was found for method set\_lazy\_timestamp() |
| error | 181 | Argument $conditions is missing from the Docblock of get() |
| notice | 352 | Parameter $skip\_temporal could not be found in save() |
| error | 443 | Argument $cascade is missing from the Docblock of overwrite() |
| error | 443 | Argument $use\_transaction is missing from the Docblock of overwrite() |
| error | 564 | No DocBlock was found for method delete() |

### fuel/packages/orm/classes/observer/typing.php7

| Type | Line | Description |
| --- | --- | --- |
| critical | 112 | No short description for property $use\_locale |
| error | 157 | Argument $event\_type is missing from the Docblock of typecast() |
| error | 297 | Argument $settings is missing from the Docblock of type\_float\_before() |
| error | 354 | Argument $settings is missing from the Docblock of type\_decimal\_before() |
| error | 373 | Argument $settings is missing from the Docblock of type\_decimal\_after() |
| error | 373 | Argument $matches is missing from the Docblock of type\_decimal\_after() |
| error | 597 | Argument $settings is missing from the Docblock of type\_json\_decode() |

### fuel/packages/orm/classes/query/soft.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 50 | Argument $column is missing from the Docblock of count() |
| error | 50 | Argument $distinct is missing from the Docblock of count() |
| error | 59 | Argument $column is missing from the Docblock of min() |
| error | 68 | Argument $column is missing from the Docblock of max() |
| error | 77 | No DocBlock was found for method modify\_join\_result() |

### fuel/packages/orm/classes/query/temporal.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 24 | No DocBlock was found for property $timestamp |
| error | 25 | No DocBlock was found for property $timestamp\_end\_col |
| error | 26 | No DocBlock was found for property $timestamp\_start\_col |
| error | 69 | No DocBlock was found for method hydrate() |

### fuel/packages/orm/classes/belongsto.php9

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Orm\BelongsTo |
| error | 17 | No DocBlock was found for property $singular |
| error | 19 | No DocBlock was found for property $key\_from |
| error | 21 | No DocBlock was found for property $key\_to |
| error | 23 | No DocBlock was found for method \_\_construct() |
| error | 48 | No DocBlock was found for method get() |
| error | 69 | No DocBlock was found for method join() |
| error | 114 | No DocBlock was found for method save() |
| error | 206 | No DocBlock was found for method delete() |

### fuel/packages/orm/classes/hasmany.php6

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Orm\HasMany |
| error | 17 | No DocBlock was found for method \_\_construct() |
| error | 42 | No DocBlock was found for method get() |
| error | 75 | No DocBlock was found for method join() |
| error | 120 | No DocBlock was found for method save() |
| error | 235 | No DocBlock was found for method delete() |

### fuel/packages/orm/classes/hasone.php7

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Orm\HasOne |
| error | 17 | No DocBlock was found for property $singular |
| error | 19 | No DocBlock was found for method \_\_construct() |
| error | 44 | No DocBlock was found for method get() |
| error | 65 | No DocBlock was found for method join() |
| error | 110 | No DocBlock was found for method save() |
| error | 206 | No DocBlock was found for method delete() |

### fuel/packages/orm/classes/manymany.php10

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Orm\ManyMany |
| error | 17 | No DocBlock was found for property $key\_from |
| error | 19 | No DocBlock was found for property $key\_to |
| error | 41 | No DocBlock was found for method \_\_construct() |
| error | 82 | No DocBlock was found for method get() |
| error | 143 | No DocBlock was found for method select\_through() |
| error | 157 | No DocBlock was found for method join() |
| error | 240 | No DocBlock was found for method save() |
| error | 345 | No DocBlock was found for method delete() |
| error | 372 | No DocBlock was found for method delete\_related() |

### fuel/packages/orm/classes/model.php35

| Type | Line | Description |
| --- | --- | --- |
| error | 25 | No DocBlock was found for \Orm\Model |
| error | 135 | Argument $data is missing from the Docblock of forge() |
| error | 135 | Argument $new is missing from the Docblock of forge() |
| error | 135 | Argument $view is missing from the Docblock of forge() |
| error | 135 | Argument $cache is missing from the Docblock of forge() |
| error | 675 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $options in count() |
| notice | 686 | Parameter could not be found in max() |
| notice | 698 | Parameter could not be found in min() |
| error | 710 | No DocBlock was found for method \_\_callStatic() |
| critical | 839 | No short description for property $\_data\_relations |
| error | 864 | Argument $view is missing from the Docblock of \_\_construct() |
| error | 864 | Argument $cache is missing from the Docblock of \_\_construct() |
| error | 964 | Argument $relations is missing from the Docblock of \_update\_original\_relations() |
| error | 1349 | Argument $use\_transaction is missing from the Docblock of save() |
| notice | 1734 | Parameter could not be found in enable\_event() |
| error | 1946 | No DocBlock was found for method is\_fetched() |
| error | 1961 | No DocBlock was found for method is\_new() |
| error | 2263 | Argument $custom is missing from the Docblock of to\_object() |
| error | 2263 | Argument $recurse is missing from the Docblock of to\_object() |
| error | 2273 | Name of argument $attribute does not match with the DocBlock's name $attribute, in \_get\_eav() |
| error | 2273 | Name of argument $isset does not match with the DocBlock's name $isset, in \_get\_eav() |
| error | 2273 | Name of argument $unset does not match with the DocBlock's name $unset, in \_get\_eav() |
| notice | 2273 | Parameter $attribute, could not be found in \_get\_eav() |
| notice | 2273 | Parameter $isset, could not be found in \_get\_eav() |
| notice | 2273 | Parameter $unset, could not be found in \_get\_eav() |
| error | 2421 | No DocBlock was found for method offsetSet() |
| error | 2433 | No DocBlock was found for method offsetExists() |
| error | 2438 | No DocBlock was found for method offsetUnset() |
| error | 2443 | No DocBlock was found for method offsetGet() |
| error | 2459 | No DocBlock was found for property $\_iterable |
| error | 2461 | No DocBlock was found for method rewind() |
| error | 2467 | No DocBlock was found for method current() |
| error | 2472 | No DocBlock was found for method key() |
| error | 2477 | No DocBlock was found for method next() |
| error | 2482 | No DocBlock was found for method valid() |

### fuel/packages/orm/classes/query.php16

| Type | Line | Description |
| --- | --- | --- |
| notice | 471 | Parameter $fields could not be found in select() |
| notice | 570 | Parameter $coulmns could not be found in group\_by() |
| notice | 641 | Parameter could not be found in where() |
| notice | 641 | Parameter could not be found in where() |
| notice | 641 | Parameter could not be found in where() |
| notice | 658 | Parameter could not be found in or\_where() |
| notice | 658 | Parameter could not be found in or\_where() |
| notice | 658 | Parameter could not be found in or\_where() |
| notice | 747 | Parameter could not be found in having() |
| notice | 747 | Parameter could not be found in having() |
| notice | 747 | Parameter could not be found in having() |
| notice | 764 | Parameter could not be found in or\_having() |
| notice | 764 | Parameter could not be found in or\_having() |
| notice | 764 | Parameter could not be found in or\_having() |
| error | 1345 | Argument $join\_result is missing from the Docblock of modify\_join\_result() |
| error | 1345 | Argument $name is missing from the Docblock of modify\_join\_result() |

### fuel/packages/orm/classes/relation.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Orm\Relation |
| error | 71 | The type hint of the argument is incorrect for the type definition of the @param tag with argument $from in get() |

### fuel/packages/orm/config/orm.php1

| Type | Line | Description |
| --- | --- | --- |
| error | 0 | No page-level DocBlock was found in file fuel/packages/orm/config/orm.php |

### fuel/packages/parser/classes/smarty/fuel/extension.php41

| Type | Line | Description |
| --- | --- | --- |
| error | 32 | Argument $smarty is missing from the Docblock of \_\_construct() |
| error | 83 | Argument $params is missing from the Docblock of url() |
| error | 102 | Argument $params is missing from the Docblock of uri\_segment() |
| error | 117 | Argument $params is missing from the Docblock of config\_get() |
| error | 133 | Argument $params is missing from the Docblock of lang\_get() |
| error | 151 | Argument $params is missing from the Docblock of form() |
| error | 151 | Argument $content is missing from the Docblock of form() |
| error | 151 | Argument $smarty is missing from the Docblock of form() |
| error | 151 | Argument $repeat is missing from the Docblock of form() |
| error | 171 | Argument $params is missing from the Docblock of form\_fieldset() |
| error | 171 | Argument $content is missing from the Docblock of form\_fieldset() |
| error | 171 | Argument $smarty is missing from the Docblock of form\_fieldset() |
| error | 171 | Argument $repeat is missing from the Docblock of form\_fieldset() |
| error | 191 | Argument $params is missing from the Docblock of form\_input() |
| error | 208 | Argument $params is missing from the Docblock of form\_password() |
| error | 225 | Argument $params is missing from the Docblock of form\_hidden() |
| error | 242 | Argument $params is missing from the Docblock of form\_button() |
| error | 259 | Argument $params is missing from the Docblock of form\_submit() |
| error | 276 | Argument $params is missing from the Docblock of form\_reset() |
| error | 293 | Argument $params is missing from the Docblock of form\_textarea() |
| error | 310 | Argument $params is missing from the Docblock of form\_label() |
| error | 327 | Argument $params is missing from the Docblock of form\_checkbox() |
| error | 345 | Argument $params is missing from the Docblock of form\_radio() |
| error | 363 | Argument $params is missing from the Docblock of form\_select() |
| error | 381 | Argument $params is missing from the Docblock of form\_file() |
| error | 397 | Argument $params is missing from the Docblock of form\_val() |
| error | 410 | Argument $params is missing from the Docblock of input\_get() |
| error | 423 | Argument $params is missing from the Docblock of input\_post() |
| error | 436 | Argument $params is missing from the Docblock of asset\_add\_path() |
| error | 452 | Argument $params is missing from the Docblock of asset\_css() |
| error | 470 | Argument $params is missing from the Docblock of asset\_js() |
| error | 488 | Argument $params is missing from the Docblock of asset\_img() |
| error | 505 | Argument $params is missing from the Docblock of asset\_render() |
| error | 518 | Argument $params is missing from the Docblock of asset\_find\_file() |
| error | 538 | Argument $params is missing from the Docblock of html\_anchor() |
| error | 559 | Argument $params is missing from the Docblock of session\_get\_flash() |
| error | 576 | Argument $params is missing from the Docblock of markdown\_parse() |
| error | 576 | Argument $content is missing from the Docblock of markdown\_parse() |
| error | 576 | Argument $smarty is missing from the Docblock of markdown\_parse() |
| error | 576 | Argument $repeat is missing from the Docblock of markdown\_parse() |
| error | 590 | Argument $params is missing from the Docblock of auth\_has\_access() |

### fuel/packages/parser/classes/twig/fuel/extension.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 193 | No DocBlock was found for method fuel\_version() |
| error | 198 | No DocBlock was found for method theme\_asset\_css() |
| error | 203 | No DocBlock was found for method theme\_asset\_js() |
| error | 208 | No DocBlock was found for method theme\_asset\_img() |

### fuel/packages/parser/classes/view/dwoo.php6

| Type | Line | Description |
| --- | --- | --- |
| error | 19 | No DocBlock was found for \Parser\View\_Dwoo |
| error | 21 | No DocBlock was found for property $\_parser |
| error | 22 | No DocBlock was found for property $\_parser\_compiler |
| error | 23 | No DocBlock was found for property $\_parser\_security |
| error | 25 | No DocBlock was found for method process\_file() |
| error | 45 | No DocBlock was found for property $extension |

### fuel/packages/parser/classes/view/haml.php6

| Type | Line | Description |
| --- | --- | --- |
| error | 17 | No DocBlock was found for \Parser\View\_Haml |
| error | 19 | No DocBlock was found for property $\_parser |
| error | 20 | No DocBlock was found for property $\_cache |
| error | 22 | No DocBlock was found for method process\_file() |
| error | 32 | No DocBlock was found for property $extension |
| error | 56 | No DocBlock was found for method cache\_init() |

### fuel/packages/parser/classes/view/hamltwig.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 21 | No DocBlock was found for \Parser\View\_HamlTwig |
| error | 22 | No DocBlock was found for property $\_environment |
| error | 24 | No short description for method \_init() |
| error | 46 | Argument $file\_override is missing from the Docblock of process\_file() |
| error | 103 | No short description for method parser() |

### fuel/packages/parser/classes/view/handlebars.php3

| Type | Line | Description |
| --- | --- | --- |
| error | 17 | No DocBlock was found for \Parser\View\_Handlebars |
| error | 20 | No DocBlock was found for property $extension |
| error | 22 | No DocBlock was found for method process\_file() |

### fuel/packages/parser/classes/view/jade.php7

| Type | Line | Description |
| --- | --- | --- |
| error | 18 | No DocBlock was found for \Parser\View\_Jade |
| critical | 20 | No short description for property $extension |
| error | 25 | Argument $cachepath is missing from the Docblock of everzet\_parser() |
| error | 47 | Argument $cachepath is missing from the Docblock of tale\_parser() |
| error | 64 | No short description for method process\_file() |
| error | 64 | Argument $file\_override is missing from the Docblock of process\_file() |
| error | 103 | No DocBlock was found for method cache\_init() |

### fuel/packages/parser/classes/view/lex.php8

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Parser\View\_Lex |
| error | 17 | No DocBlock was found for property $\_parser |
| error | 19 | No DocBlock was found for method parser() |
| error | 31 | No DocBlock was found for method injectNoparse() |
| error | 36 | No DocBlock was found for property $extension |
| error | 38 | No DocBlock was found for property $callback |
| error | 40 | No DocBlock was found for method setCallback() |
| error | 47 | No DocBlock was found for method process\_file() |

### fuel/packages/parser/classes/view/markdown.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Parser\View\_Markdown |
| error | 17 | No DocBlock was found for property $\_parser |
| error | 19 | No DocBlock was found for method process\_file() |
| error | 38 | No DocBlock was found for method pre\_process() |
| error | 67 | No DocBlock was found for property $extension |

### fuel/packages/parser/classes/view/mustache.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 18 | No DocBlock was found for \Parser\View\_Mustache |
| error | 20 | No DocBlock was found for property $\_parser |
| error | 22 | No DocBlock was found for method process\_file() |
| error | 42 | No DocBlock was found for property $extension |

### fuel/packages/parser/classes/view/phptal.php5

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Parser\View\_Phptal |
| error | 17 | No DocBlock was found for property $\_parser |
| error | 19 | No DocBlock was found for method process\_file() |
| error | 45 | No DocBlock was found for property $extension |
| error | 47 | No DocBlock was found for method parser() |

### fuel/packages/parser/classes/view/smarty.php4

| Type | Line | Description |
| --- | --- | --- |
| error | 17 | No DocBlock was found for \Parser\View\_Smarty |
| error | 19 | No DocBlock was found for property $\_parser |
| error | 21 | No DocBlock was found for method process\_file() |
| error | 43 | No DocBlock was found for property $extension |

### fuel/packages/parser/classes/view/twig.php7

| Type | Line | Description |
| --- | --- | --- |
| error | 20 | No DocBlock was found for \Parser\View\_Twig |
| error | 22 | No DocBlock was found for property $\_parser |
| error | 23 | No DocBlock was found for property $\_parser\_loader |
| error | 24 | No DocBlock was found for property $\_twig\_lexer\_conf |
| error | 26 | No DocBlock was found for method \_init() |
| error | 37 | No DocBlock was found for method process\_file() |
| error | 85 | No DocBlock was found for property $extension |

### fuel/packages/parser/classes/view.php2

| Type | Line | Description |
| --- | --- | --- |
| error | 15 | No DocBlock was found for \Parser\View |
| error | 22 | No DocBlock was found for method \_init() |

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
