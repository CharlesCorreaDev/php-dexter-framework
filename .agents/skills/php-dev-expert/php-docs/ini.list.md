# Lista de diretivas do php.ini

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ini.list.php

---

## Lista de diretivas do php.ini

Esta lista inclui as diretivas do php.ini que você pode usar para configurar o PHP.

A coluna "Modificável" mostra os modos que determinam quando e onde uma diretiva pode ser definida.
Veja a seção [valores modificáveis](configuration.changes.modes.md) para as suas definições.

**Opções de configuração**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [allow\_url\_fopen](filesystem.configuration.md#ini.allow-url-fopen) | `"1"` | **`INI_SYSTEM`** |  |
| [allow\_url\_include](filesystem.configuration.md#ini.allow-url-include) | `"0"` | **`INI_SYSTEM`** | Descontinuado a partir do PHP 7.4.0. |
| [arg\_separator.input](ini.core.md#ini.arg-separator.input) | `"&"` | **`INI_PERDIR`** |  |
| [arg\_separator.output](ini.core.md#ini.arg-separator.output) | `"&"` | **`INI_ALL`** |  |
| [assert.active](info.configuration.md#ini.assert.active) | `"1"` | **`INI_ALL`** |  |
| [assert.bail](info.configuration.md#ini.assert.bail) | `"0"` | **`INI_ALL`** |  |
| [assert.callback](info.configuration.md#ini.assert.callback) | **`null`** | **`INI_ALL`** |  |
| [assert.exception](info.configuration.md#ini.assert.exception) | `"0"` | **`INI_ALL`** |  |
| [assert.quiet\_eval](info.configuration.md#ini.assert.quiet-eval) | `"0"` | **`INI_ALL`** | Removido a partir do PHP 8.0.0 |
| [assert.warning](info.configuration.md#ini.assert.warning) | `"1"` | **`INI_ALL`** |  |
| [auto\_append\_file](ini.core.md#ini.auto-append-file) | **`null`** | **`INI_PERDIR`** |  |
| [auto\_detect\_line\_endings](filesystem.configuration.md#ini.auto-detect-line-endings) | `"0"` | **`INI_ALL`** |  |
| [auto\_globals\_jit](ini.core.md#ini.auto-globals-jit) | `"1"` | **`INI_PERDIR`** |  |
| [auto\_prepend\_file](ini.core.md#ini.auto-prepend-file) | **`null`** | **`INI_PERDIR`** |  |
| [bcmath.scale](bc.configuration.md#ini.bcmath.scale) | "0" | **`INI_ALL`** |  |
| [browscap](misc.configuration.md#ini.browscap) | **`null`** | **`INI_SYSTEM`** |  |
| [cgi.check\_shebang\_line](ini.core.md#ini.cgi.check-shebang-line) | `"1"` | **`INI_SYSTEM`** |  |
| [cgi.discard\_path](ini.core.md#ini.cgi.discard-path) | `"0"` | **`INI_SYSTEM`** |  |
| [cgi.fix\_pathinfo](ini.core.md#ini.cgi.fix-pathinfo) | `"1"` | **`INI_SYSTEM`** |  |
| [cgi.force\_redirect](ini.core.md#ini.cgi.force-redirect) | `"1"` | **`INI_SYSTEM`** |  |
| [cgi.nph](ini.core.md#ini.cgi.nph) | `"0"` | **`INI_ALL`** |  |
| [cgi.redirect\_status\_env](ini.core.md#ini.cgi.redirect-status-env) | **`null`** | **`INI_SYSTEM`** |  |
| [cgi.rfc2616\_headers](ini.core.md#ini.cgi.rfc2616-headers) | `"0"` | **`INI_ALL`** |  |
| [child\_terminate](apache.configuration.md#ini.child-terminate) | `"0"` | **`INI_ALL`** |  |
| [cli.pager](readline.configuration.md#ini.cli.pager) | "" | **`INI_ALL`** |  |
| [cli.prompt](readline.configuration.md#ini.cli.prompt) | "\\b \\> " | **`INI_ALL`** |  |
| [cli\_server.color](features.commandline.ini.md#ini.cli-server.color) | "0" | **`INI_ALL`** |  |
| [com.allow\_dcom](com.configuration.md#ini.com.allow-dcom) | "0" | **`INI_SYSTEM`** |  |
| [com.autoregister\_typelib](com.configuration.md#ini.com.autoregister-typelib) | "0" | **`INI_ALL`** |  |
| [com.autoregister\_verbose](com.configuration.md#ini.com.autoregister-verbose) | "0" | **`INI_ALL`** |  |
| [com.autoregister\_casesensitive](com.configuration.md#ini.com.autoregister-casesensitive) | "1" | **`INI_ALL`** |  |
| [com.code\_page](com.configuration.md#ini.com.code-page) | "" | **`INI_ALL`** |  |
| [com.dotnet\_version](com.configuration.md#ini.com.dotnet-version) | "" | **`INI_SYSTEM`** | A partir do PHP 8.0.0 |
| [com.typelib\_file](com.configuration.md#ini.com.typelib-file) | "" | **`INI_SYSTEM`** |  |
| [curl.cainfo](curl.configuration.md#ini.curl.cainfo) | NULL | **`INI_SYSTEM`** |  |
| [date.default\_latitude](datetime.configuration.md#ini.date.default-latitude) | "31.7667" | **`INI_ALL`** |  |
| [date.default\_longitude](datetime.configuration.md#ini.date.default-longitude) | "35.2333" | **`INI_ALL`** |  |
| [date.sunrise\_zenith](datetime.configuration.md#ini.date.sunrise-zenith) | "90.833333" | **`INI_ALL`** | Antes do PHP 8.0.0, o padrão era "90.583333" |
| [date.sunset\_zenith](datetime.configuration.md#ini.date.sunset-zenith) | "90.833333" | **`INI_ALL`** | Antes do PHP 8.0.0, o padrão era "90.583333" |
| [date.timezone](datetime.configuration.md#ini.date.timezone) | "UTC" | **`INI_ALL`** | A partir do PHP 8.2, um aviso é emitido quando este parâmetro é configurado para um valor inválido ou para um string vazio. |
| [dba.default\_handler](dba.configuration.md#ini.dba.default_handler) | DBA\_DEFAULT | **`INI_ALL`** |  |
| [default\_charset](ini.core.md#ini.default-charset) | `"UTF-8"` | **`INI_ALL`** |  |
| [input\_encoding](ini.core.md#ini.input-encoding) | `""` | **`INI_ALL`** |  |
| [output\_encoding](ini.core.md#ini.output-encoding) | `""` | **`INI_ALL`** |  |
| [internal\_encoding](ini.core.md#ini.internal-encoding) | `""` | **`INI_ALL`** |  |
| [default\_mimetype](ini.core.md#ini.default-mimetype) | `"text/html"` | **`INI_ALL`** |  |
| [default\_socket\_timeout](filesystem.configuration.md#ini.default-socket-timeout) | `"60"` | **`INI_ALL`** |  |
| [disable\_classes](ini.core.md#ini.disable-classes) | `""` | Somente no php.ini | Removida a partir do PHP 8.5.0 |
| [disable\_functions](ini.core.md#ini.disable-functions) | `""` | Somente no php.ini |  |
| [display\_errors](errorfunc.configuration.md#ini.display-errors) | `"1"` | **`INI_ALL`** |  |
| [display\_startup\_errors](errorfunc.configuration.md#ini.display-startup-errors) | `"1"` | **`INI_ALL`** | Anteriormente ao PHP 8.0.0, o valor padrão era `"0"`. |
| [docref\_ext](errorfunc.configuration.md#ini.docref-ext) | `""` | **`INI_ALL`** |  |
| [docref\_root](errorfunc.configuration.md#ini.docref-root) | `""` | **`INI_ALL`** |  |
| [doc\_root](ini.core.md#ini.doc-root) | **`null`** | **`INI_SYSTEM`** |  |
| [enable\_dl](info.configuration.md#ini.enable-dl) | `"1"` | **`INI_SYSTEM`** | Este recurso descontinuado *será* certamente *removido* no futuro. |
| [enable\_post\_data\_reading](ini.core.md#ini.enable-post-data-reading) | `"On"` | **`INI_PERDIR`** |  |
| [engine](apache.configuration.md#ini.engine) | `"1"` | **`INI_ALL`** |  |
| [error\_append\_string](errorfunc.configuration.md#ini.error-append-string) | **`null`** | **`INI_ALL`** |  |
| [error\_log](errorfunc.configuration.md#ini.error-log) | **`null`** | **`INI_ALL`** |  |
| [error\_log\_mode](errorfunc.configuration.md#ini.error-log-mode) | `0o644` | **`INI_ALL`** | Disponível desde o PHP 8.2.0 |
| [error\_prepend\_string](errorfunc.configuration.md#ini.error-prepend-string) | **`null`** | **`INI_ALL`** |  |
| [error\_reporting](errorfunc.configuration.md#ini.error-reporting) | **`null`** | **`INI_ALL`** |  |
| [exif.encode\_unicode](exif.configuration.md#ini.exif.encode-unicode) | "ISO-8859-15" | **`INI_ALL`** |  |
| [exif.decode\_unicode\_motorola](exif.configuration.md#ini.exif.decode-unicode-motorola) | "UCS-2BE" | **`INI_ALL`** |  |
| [exif.decode\_unicode\_intel](exif.configuration.md#ini.exif.decode-unicode-intel) | "UCS-2LE" | **`INI_ALL`** |  |
| [exif.encode\_jis](exif.configuration.md#ini.exif.encode-jis) | "" | **`INI_ALL`** |  |
| [exif.decode\_jis\_motorola](exif.configuration.md#ini.exif.decode-jis-motorola) | "JIS" | **`INI_ALL`** |  |
| [exif.decode\_jis\_intel](exif.configuration.md#ini.exif.decode-jis-intel) | "JIS" | **`INI_ALL`** |  |
| [exit\_on\_timeout](ini.core.md#ini.exit-on-timeout) | `""` | **`INI_ALL`** |  |
| [expect.timeout](expect.configuration.md#ini.expect.timeout) | "10" | **`INI_ALL`** |  |
| [expect.loguser](expect.configuration.md#ini.expect.loguser) | "1" | **`INI_ALL`** |  |
| [expect.logfile](expect.configuration.md#ini.expect.logfile) | "" | **`INI_ALL`** |  |
| [expect.match\_max](expect.configuration.md#ini.expect.match-max) | "" | **`INI_ALL`** |  |
| [expose\_php](ini.core.md#ini.expose-php) | `"1"` | Somente no php.ini |  |
| [extension](ini.core.md#ini.extension) | **`null`** | Somente no php.ini |  |
| [extension\_dir](ini.core.md#ini.extension-dir) | `"/path/to/php"` | **`INI_SYSTEM`** |  |
| [fastcgi.impersonate](ini.core.md#ini.fastcgi.impersonate) | `"0"` | **`INI_SYSTEM`** |  |
| [fastcgi.logging](ini.core.md#ini.fastcgi.logging) | `"1"` | **`INI_SYSTEM`** |  |
| [file\_uploads](ini.core.md#ini.file-uploads) | `"1"` | **`INI_SYSTEM`** |  |
| [filter.default](filter.configuration.md#ini.filter.default) | "unsafe\_raw" | **`INI_PERDIR`** | Descontinuado desde o PHP 8.1.0. |
| [filter.default\_flags](filter.configuration.md#ini.filter.default-flags) | NULL | **`INI_PERDIR`** |  |
| [from](filesystem.configuration.md#ini.from) | `""` | **`INI_ALL`** |  |
| [gd.jpeg\_ignore\_warning](image.configuration.md#ini.gd.jpeg-ignore-warning) | "1" | **`INI_ALL`** |  |
| [geoip.custom\_directory](geoip.configuration.md#ini.geoip.custom-directory) | "" | **`INI_ALL`** |  |
| hard\_timeout | `"2"` | **`INI_SYSTEM`** | Disponível desde o PHP 7.1.0. |
| [highlight.comment](misc.configuration.md#ini.syntax-highlighting) | `"#FF8000"` | **`INI_ALL`** |  |
| [highlight.default](misc.configuration.md#ini.syntax-highlighting) | `"#0000BB"` | **`INI_ALL`** |  |
| [highlight.html](misc.configuration.md#ini.syntax-highlighting) | `"#000000"` | **`INI_ALL`** |  |
| [highlight.keyword](misc.configuration.md#ini.syntax-highlighting) | `"#007700"` | **`INI_ALL`** |  |
| [highlight.string](misc.configuration.md#ini.syntax-highlighting) | `"#DD0000"` | **`INI_ALL`** |  |
| [html\_errors](errorfunc.configuration.md#ini.html-errors) | `"1"` | **`INI_ALL`** |  |
| [ibase.allow\_persistent](ibase.configuration.md#ini.ibase.allow-persistent) | "1" | **`INI_SYSTEM`** |  |
| [ibase.max\_persistent](ibase.configuration.md#ini.ibase.max-persistent) | "-1" | **`INI_SYSTEM`** |  |
| [ibase.max\_links](ibase.configuration.md#ini.ibase.max-links) | "-1" | **`INI_SYSTEM`** |  |
| [ibase.default\_db](ibase.configuration.md#ini.ibase.default-db) | NULL | **`INI_SYSTEM`** |  |
| [ibase.default\_user](ibase.configuration.md#ini.ibase.default-user) | NULL | **`INI_ALL`** |  |
| [ibase.default\_password](ibase.configuration.md#ini.ibase.default-password) | NULL | **`INI_ALL`** |  |
| [ibase.default\_charset](ibase.configuration.md#ini.ibase.default-charset) | NULL | **`INI_ALL`** |  |
| [ibase.timestampformat](ibase.configuration.md#ini.ibase.timestampformat) | "%Y-%m-%d %H:%M:%S" | **`INI_ALL`** |  |
| [ibase.dateformat](ibase.configuration.md#ini.ibase.dateformat) | "%Y-%m-%d" | **`INI_ALL`** |  |
| [ibase.timeformat](ibase.configuration.md#ini.ibase.timeformat) | "%H:%M:%S" | **`INI_ALL`** |  |
| [ibm\_db2.binmode](ibm-db2.configuration.md#ini.ibm-db2.binmode) | "1" | **`INI_ALL`** |  |
| [ibm\_db2.i5\_all\_pconnect](ibm-db2.configuration.md#ini.ibm-db2.i5-all-pconnect) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.6.5. |
| [ibm\_db2.i5\_allow\_commit](ibm-db2.configuration.md#ini.ibm-db2.i5-allow-commit) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.4.9. |
| [ibm\_db2.i5\_blank\_userid](ibm-db2.configuration.md#ini.ibm-db2.i5-blank-userid) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.9.7. |
| [ibm\_db2.i5\_char\_trim](ibm-db2.configuration.md#ini.ibm-db2.i5-char-trim) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 2.1.0. |
| [ibm\_db2.i5\_dbcs\_alloc](ibm-db2.configuration.md#ini.ibm-db2.i5-dbcs-alloc) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.5.0. |
| [ibm\_db2.i5\_guard\_profile](ibm-db2.configuration.md#ini.ibm-db2.i5-guard-profile) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.9.7. |
| [ibm\_db2.i5\_ignore\_userid](ibm-db2.configuration.md#ini.ibm-db2.i5-ignore-userid) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.8.0. |
| [ibm\_db2.i5\_job\_sort](ibm-db2.configuration.md#ini.ibm-db2.i5-job-sort) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.8.4. |
| [ibm\_db2.i5\_log\_verbose](ibm-db2.configuration.md#ini.ibm-db2.i5-log-verbose) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.9.7. |
| [ibm\_db2.i5\_max\_pconnect](ibm-db2.configuration.md#ini.ibm-db2.i5-max-pconnect) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.9.7. |
| [ibm\_db2.i5\_override\_ccsid](ibm-db2.configuration.md#ini.ibm-db2.i5-override-ccsid) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.9.7. |
| [ibm\_db2.i5\_servermode\_subsystem](ibm-db2.configuration.md#ini.ibm-db2.i5-servermode-subsystem) | NULL | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.9.7. |
| [ibm\_db2.i5\_sys\_naming](ibm-db2.configuration.md#ini.ibm-db2.i5-sys-naming) | "0" | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.9.7. |
| [ibm\_db2.instance\_name](ibm-db2.configuration.md#ini.ibm-db2.instance-name) | NULL | **`INI_SYSTEM`** | Disponível a partir do ibm\_db2 1.0.2. |
| [iconv.input\_encoding](iconv.configuration.md#ini.iconv.input-encoding) | "" | **`INI_ALL`** | Descontinuado no PHP 5.6.0. |
| [iconv.output\_encoding](iconv.configuration.md#ini.iconv.output-encoding) | "" | **`INI_ALL`** | Descontinuado no PHP 5.6.0. |
| [iconv.internal\_encoding](iconv.configuration.md#ini.iconv.internal-encoding) | "" | **`INI_ALL`** | Descontinuado no PHP 5.6.0. |
| [ignore\_repeated\_errors](errorfunc.configuration.md#ini.ignore-repeated-errors) | `"0"` | **`INI_ALL`** |  |
| [ignore\_repeated\_source](errorfunc.configuration.md#ini.ignore-repeated-source) | `"0"` | **`INI_ALL`** |  |
| [ignore\_user\_abort](misc.configuration.md#ini.ignore-user-abort) | `"0"` | **`INI_ALL`** |  |
| [implicit\_flush](outcontrol.configuration.md#ini.implicit-flush) | `"0"` | **`INI_ALL`** |  |
| [include\_path](ini.core.md#ini.include-path) | `".:/path/to/php/pear"` | **`INI_ALL`** |  |
| [intl.default\_locale](intl.configuration.md#ini.intl.default-locale) |  | **`INI_ALL`** |  |
| [intl.error\_level](intl.configuration.md#ini.intl.error-level) | 0 | **`INI_ALL`** |  |
| [intl.use\_exceptions](intl.configuration.md#ini.intl.use-exceptions) | 0 | **`INI_ALL`** | Disponível desde o PECL 3.0.0a1 |
| [last\_modified](apache.configuration.md#ini.last-modified) | `"0"` | **`INI_ALL`** |  |
| [ldap.max\_links](ldap.configuration.md#ini.ldap.max_links) | "-1" | **`INI_SYSTEM`** |  |
| [log\_errors](errorfunc.configuration.md#ini.log-errors) | `"0"` | **`INI_ALL`** |  |
| [log\_errors\_max\_len](errorfunc.configuration.md#ini.log-errors-max-len) | `"1024"` | **`INI_ALL`** |  |
| [mail.add\_x\_header](mail.configuration.md#ini.mail.add-x-header) | `"0"` | **`INI_PERDIR`** |  |
| mail.force\_extra\_parameters | **`null`** | **`INI_SYSTEM`** |  |
| [mail.log](mail.configuration.md#ini.mail.log) | `""` | **`INI_PERDIR`** |  |
| [max\_execution\_time](info.configuration.md#ini.max-execution-time) | `"30"` | **`INI_ALL`** |  |
| [max\_input\_nesting\_level](info.configuration.md#ini.max-input-nesting-level) | `"64"` | **`INI_PERDIR`** |  |
| [max\_input\_vars](info.configuration.md#ini.max-input-vars) | `1000` | **`INI_PERDIR`** |  |
| [max\_input\_time](info.configuration.md#ini.max-input-time) | `"-1"` | **`INI_PERDIR`** |  |
| [mbstring.language](mbstring.configuration.md#ini.mbstring.language) | "neutral" | **`INI_ALL`** |  |
| [mbstring.detect\_order](mbstring.configuration.md#ini.mbstring.detect-order) | NULL | **`INI_ALL`** |  |
| [mbstring.http\_input](mbstring.configuration.md#ini.mbstring.http-input) | "pass" | **`INI_ALL`** | Descontinuado |
| [mbstring.http\_output](mbstring.configuration.md#ini.mbstring.http-output) | "pass" | **`INI_ALL`** | Descontinuado |
| [mbstring.internal\_encoding](mbstring.configuration.md#ini.mbstring.internal-encoding) | NULL | **`INI_ALL`** | Descontinuado |
| [mbstring.substitute\_character](mbstring.configuration.md#ini.mbstring.substitute-character) | NULL | **`INI_ALL`** |  |
| [mbstring.func\_overload](mbstring.configuration.md#ini.mbstring.func-overload) | "0" | **`INI_SYSTEM`** | Descontinuado a partir do PHP 7.2.0; removido a partir do PHP 8.0.0. |
| [mbstring.encoding\_translation](mbstring.configuration.md#ini.mbstring.encoding-translation) | "0" | **`INI_PERDIR`** |  |
| [mbstring.http\_output\_conv\_mimetypes](mbstring.configuration.md#ini.mbstring.http-output-conv-mimetypes) | "^(text/|application/xhtml\+xml)" | **`INI_ALL`** |  |
| [mbstring.strict\_detection](mbstring.configuration.md#ini.mbstring.strict-detection) | "0" | **`INI_ALL`** |  |
| [mbstring.regex\_retry\_limit](mbstring.configuration.md#ini.mbstring.regex-retry-limit) | "1000000" | **`INI_ALL`** | Disponível a partir do PHP 7.4.0. |
| [mbstring.regex\_stack\_limit](mbstring.configuration.md#ini.mbstring.regex-stack-limit) | "100000" | **`INI_ALL`** | Disponível a partir do PHP 7.3.5. |
| [mcrypt.algorithms\_dir](mcrypt.configuration.md#ini.mcrypt.algorithms-dir) | **`null`** | **`INI_ALL`** |  |
| [mcrypt.modes\_dir](mcrypt.configuration.md#ini.mcrypt.modes-dir) | **`null`** | **`INI_ALL`** |  |
| [memcache.allow\_failover](memcache.ini.md#ini.memcache.allow-failover) | "1" | **`INI_ALL`** | Disponível desde o memcache 2.0.2. |
| [memcache.max\_failover\_attempts](memcache.ini.md#ini.memcache.max-failover-attempts) | "20" | **`INI_ALL`** | Disponível desde o memcache 2.1.0. |
| [memcache.chunk\_size](memcache.ini.md#ini.memcache.chunk-size) | "8192" | **`INI_ALL`** | Disponível desde o memcache 2.0.2. |
| [memcache.default\_port](memcache.ini.md#ini.memcache.default-port) | "11211" | **`INI_ALL`** | Disponível desde o memcache 2.0.2. |
| [memcache.hash\_strategy](memcache.ini.md#ini.memcache.hash-strategy) | "standard" | **`INI_ALL`** | Disponível desde o memcache 2.2.0. |
| [memcache.hash\_function](memcache.ini.md#ini.memcache.hash-function) | "crc32" | **`INI_ALL`** | Disponível desde o memcache 2.2.0. |
| [memcache.protocol](memcache.ini.md#ini.memcache.protocol) | ascii | **`INI_ALL`** | Suportado desde o memcache 3.0.0 |
| [memcache.redundancy](memcache.ini.md#ini.memcache.redundancy) | 1 | **`INI_ALL`** | Suportado desde o memcache 3.0.0 |
| [memcache.session\_redundancy](memcache.ini.md#ini.memcache.session-redundancy) | 2 | **`INI_ALL`** | Suportado desde o memcache 3.0.0 |
| [memcache.compress\_threshold](memcache.ini.md#ini.memcache.compress-threshold) | 20000 | **`INI_ALL`** | Suportado desde o memcache 3.0.3 |
| [memcache.lock\_timeout](memcache.ini.md#ini.memcache.lock-timeout) | 15 | **`INI_ALL`** | Suportado desde o memcache 3.0.4 |
| [memory\_limit](ini.core.md#ini.memory-limit) | `"128M"` | **`INI_ALL`** |  |
| [mysql.allow\_local\_infile](mysql.configuration.md#ini.mysql.allow-local-infile) | "1" | **`INI_SYSTEM`** |  |
| [mysql.allow\_persistent](mysql.configuration.md#ini.mysql.allow-persistent) | "1" | **`INI_SYSTEM`** |  |
| [mysql.max\_persistent](mysql.configuration.md#ini.mysql.max-persistent) | "-1" | **`INI_SYSTEM`** |  |
| [mysql.max\_links](mysql.configuration.md#ini.mysql.max-links) | "-1" | **`INI_SYSTEM`** |  |
| [mysql.trace\_mode](mysql.configuration.md#ini.mysql.trace-mode) | "0" | **`INI_ALL`** |  |
| [mysql.default\_port](mysql.configuration.md#ini.mysql.default-port) | NULL | **`INI_ALL`** |  |
| [mysql.default\_socket](mysql.configuration.md#ini.mysql.default-socket) | NULL | **`INI_ALL`** |  |
| [mysql.default\_host](mysql.configuration.md#ini.mysql.default-host) | NULL | **`INI_ALL`** |  |
| [mysql.default\_user](mysql.configuration.md#ini.mysql.default-user) | NULL | **`INI_ALL`** |  |
| [mysql.default\_password](mysql.configuration.md#ini.mysql.default-password) | NULL | **`INI_ALL`** |  |
| [mysql.connect\_timeout](mysql.configuration.md#ini.mysql.connect-timeout) | "60" | **`INI_ALL`** |  |
| [mysqli.allow\_local\_infile](mysqli.configuration.md#ini.mysqli.allow-local-infile) | "0" | **`INI_SYSTEM`** | Antes do PHP 7.2.16 e 7.3.3 o padrão era "1". |
| [mysqli.local\_infile\_directory](mysqli.configuration.md#ini.mysqli.local-infile-directory) |  | **`INI_SYSTEM`** | Disponível desde o PHP 8.1.0. |
| [mysqli.allow\_persistent](mysqli.configuration.md#ini.mysqli.allow-persistent) | "1" | **`INI_SYSTEM`** |  |
| [mysqli.max\_persistent](mysqli.configuration.md#ini.mysqli.max-persistent) | "-1" | **`INI_SYSTEM`** |  |
| [mysqli.max\_links](mysqli.configuration.md#ini.mysqli.max-links) | "-1" | **`INI_SYSTEM`** |  |
| [mysqli.default\_port](mysqli.configuration.md#ini.mysqli.default-port) | "3306" | **`INI_ALL`** |  |
| [mysqli.default\_socket](mysqli.configuration.md#ini.mysqli.default-socket) | NULL | **`INI_ALL`** |  |
| [mysqli.default\_host](mysqli.configuration.md#ini.mysqli.default-host) | NULL | **`INI_ALL`** |  |
| [mysqli.default\_user](mysqli.configuration.md#ini.mysqli.default-user) | NULL | **`INI_ALL`** |  |
| [mysqli.default\_pw](mysqli.configuration.md#ini.mysqli.default-pw) | NULL | **`INI_ALL`** |  |
| [mysqli.reconnect](mysqli.configuration.md#ini.mysqli.reconnect) | "0" | **`INI_SYSTEM`** | Removido no PHP 8.2.0 |
| [mysqli.rollback\_on\_cached\_plink](mysqli.configuration.md#ini.mysqli.rollback-on-cached-plink) | "0" | **`INI_SYSTEM`** |  |
| [mysqlnd.collect\_statistics](mysqlnd.config.md#ini.mysqlnd.collect-statistics) | "1" | **`INI_SYSTEM`** |  |
| [mysqlnd.collect\_memory\_statistics](mysqlnd.config.md#ini.mysqlnd.collect-memory-statistics) | "0" | **`INI_SYSTEM`** |  |
| [mysqlnd.debug](mysqlnd.config.md#ini.mysqlnd.debug) | "" | **`INI_SYSTEM`** |  |
| [mysqlnd.log\_mask](mysqlnd.config.md#ini.mysqlnd.log-mask) | 0 | **`INI_ALL`** |  |
| [mysqlnd.mempool\_default\_size](mysqlnd.config.md#ini.mysqlnd.mempool-default-size) | 16000 | **`INI_ALL`** |  |
| [mysqlnd.net\_read\_timeout](mysqlnd.config.md#ini.mysqlnd.net-read-timeout) | "86400" | **`INI_ALL`** | Antes do PHP 7.2.0 o padrão era "31536000" e a mutabilidade era **`INI_SYSTEM`** |
| [mysqlnd.net\_cmd\_buffer\_size](mysqlnd.config.md#ini.mysqlnd.net-cmd-buffer-size) | "4096" | **`INI_SYSTEM`** |  |
| [mysqlnd.net\_read\_buffer\_size](mysqlnd.config.md#ini.mysqlnd.net-read-buffer-size) | "32768" | **`INI_SYSTEM`** |  |
| [mysqlnd.sha256\_server\_public\_key](mysqlnd.config.md#ini.mysqlnd.sha256-server-public-key) | "" | **`INI_PERDIR`** |  |
| [mysqlnd.trace\_alloc](mysqlnd.config.md#ini.mysqlnd.trace-alloc) | "" | **`INI_SYSTEM`** |  |
| [mysqlnd.fetch\_data\_copy](mysqlnd.config.md#ini.mysqlnd.fetch_data_copy) | 0 | **`INI_ALL`** | Removida a partir do PHP 8.1.0 |
| [oci8.connection\_class](oci8.configuration.md#ini.oci8.connection-class) | "" | **`INI_ALL`** |  |
| [oci8.default\_prefetch](oci8.configuration.md#ini.oci8.default-prefetch) | "100" | **`INI_SYSTEM`** |  |
| [oci8.events](oci8.configuration.md#ini.oci8.events) | Off | **`INI_SYSTEM`** |  |
| [oci8.max\_persistent](oci8.configuration.md#ini.oci8.max-persistent) | "-1" | **`INI_SYSTEM`** |  |
| [oci8.old\_oci\_close\_semantics](oci8.configuration.md#ini.oci8.old-oci-close-semantics) | Off | **`INI_SYSTEM`** | Descontinuado a partir do PHP 8.1.0. |
| [oci8.persistent\_timeout](oci8.configuration.md#ini.oci8.persistent-timeout) | "-1" | **`INI_SYSTEM`** |  |
| [oci8.ping\_interval](oci8.configuration.md#ini.oci8.ping-interval) | "60" | **`INI_SYSTEM`** |  |
| [oci8.prefetch\_lob\_size](oci8.configuration.md#ini.oci8.prefetch-lob-size) | "0" | **`INI_SYSTEM`** | Disponível desde o PECL OCI8 3.2. |
| [oci8.privileged\_connect](oci8.configuration.md#ini.oci8.privileged-connect) | Off | **`INI_SYSTEM`** |  |
| [oci8.statement\_cache\_size](oci8.configuration.md#ini.oci8.statement-cache-size) | "20" | **`INI_SYSTEM`** |  |
| [odbc.allow\_persistent](odbc.configuration.md#ini.uodbc.allow-persistent) | "1" | **`INI_SYSTEM`** |  |
| [odbc.check\_persistent](odbc.configuration.md#ini.uodbc.check-persistent) | "1" | **`INI_SYSTEM`** |  |
| [odbc.max\_persistent](odbc.configuration.md#ini.uodbc.max-persistent) | "-1" | **`INI_SYSTEM`** |  |
| [odbc.max\_links](odbc.configuration.md#ini.uodbc.max-links) | "-1" | **`INI_SYSTEM`** |  |
| [odbc.defaultlrl](odbc.configuration.md#ini.uodbc.defaultlrl) | "4096" | **`INI_ALL`** |  |
| [odbc.defaultbinmode](odbc.configuration.md#ini.uodbc.defaultbinmode) | "1" | **`INI_ALL`** |  |
| [odbc.default\_cursortype](odbc.configuration.md#ini.uodbc.defaultcursortype) | "3" | **`INI_ALL`** |  |
| [opcache.enable](opcache.configuration.md#ini.opcache.enable) | 1 | **`INI_ALL`** |  |
| [opcache.enable\_cli](opcache.configuration.md#ini.opcache.enable-cli) | 0 | **`INI_SYSTEM`** | Entre PHP 7.1.2 e 7.1.6 inclusive, o padrão era `1` |
| [opcache.memory\_consumption](opcache.configuration.md#ini.opcache.memory-consumption) | 128 | **`INI_SYSTEM`** |  |
| [opcache.interned\_strings\_buffer](opcache.configuration.md#ini.opcache.interned-strings-buffer) | 8 | **`INI_SYSTEM`** |  |
| [opcache.max\_accelerated\_files](opcache.configuration.md#ini.opcache.max-accelerated-files) | 10000 | **`INI_SYSTEM`** |  |
| [opcache.max\_wasted\_percentage](opcache.configuration.md#ini.opcache.max-wasted-percentage) | 5 | **`INI_SYSTEM`** |  |
| [opcache.use\_cwd](opcache.configuration.md#ini.opcache.use-cwd) | 1 | **`INI_SYSTEM`** |  |
| [opcache.validate\_timestamps](opcache.configuration.md#ini.opcache.validate-timestamps) | 1 | **`INI_ALL`** |  |
| [opcache.revalidate\_freq](opcache.configuration.md#ini.opcache.revalidate-freq) | 2 | **`INI_ALL`** |  |
| [opcache.revalidate\_path](opcache.configuration.md#ini.opcache.revalidate-path) | 0 | **`INI_ALL`** |  |
| [opcache.save\_comments](opcache.configuration.md#ini.opcache.save-comments) | 1 | **`INI_SYSTEM`** |  |
| [opcache.fast\_shutdown](opcache.configuration.md#ini.opcache.fast-shutdown) | 0 | **`INI_SYSTEM`** | Removido no PHP 7.2.0 |
| [opcache.enable\_file\_override](opcache.configuration.md#ini.opcache.enable-file-override) | 0 | **`INI_SYSTEM`** |  |
| [opcache.optimization\_level](opcache.configuration.md#ini.opcache.optimization-level) | 0x7FFEBFFF | **`INI_SYSTEM`** | Alterado de `0x7FFFBFFF` no PHP 7.3.0 |
| [opcache.inherited\_hack](opcache.configuration.md#ini.opcache.inherited-hack) | 1 | **`INI_SYSTEM`** | Removido no PHP 7.3.0 |
| [opcache.dups\_fix](opcache.configuration.md#ini.opcache.dups-fix) | 0 | **`INI_ALL`** |  |
| [opcache.blacklist\_filename](opcache.configuration.md#ini.opcache.blacklist-filename) | "" | **`INI_SYSTEM`** |  |
| [opcache.max\_file\_size](opcache.configuration.md#ini.opcache.max-file-size) | 0 | **`INI_SYSTEM`** |  |
| [opcache.consistency\_checks](opcache.configuration.md#ini.opcache.consistency-checks) | 0 | **`INI_ALL`** | Desativado a partir do 8.1.18 e 8.2.5. Removido a partir do PHP 8.3.0 |
| [opcache.force\_restart\_timeout](opcache.configuration.md#ini.opcache.force-restart-timeout) | 180 | **`INI_SYSTEM`** |  |
| [opcache.error\_log](opcache.configuration.md#ini.opcache.error-log) | "" | **`INI_SYSTEM`** |  |
| [opcache.log\_verbosity\_level](opcache.configuration.md#ini.opcache.log-verbosity-level) | 1 | **`INI_SYSTEM`** |  |
| [opcache.record\_warnings](opcache.configuration.md#ini.opcache.record-warnings) | 0 | **`INI_SYSTEM`** | Disponível a partir do PHP 8.0.0 |
| [opcache.preferred\_memory\_model](opcache.configuration.md#ini.opcache.preferred-memory-model) | "" | **`INI_SYSTEM`** |  |
| [opcache.protect\_memory](opcache.configuration.md#ini.opcache.protect-memory) | 0 | **`INI_SYSTEM`** |  |
| [opcache.mmap\_base](opcache.configuration.md#ini.opcache.mmap-base) | **`null`** | **`INI_SYSTEM`** |  |
| [opcache.restrict\_api](opcache.configuration.md#ini.opcache.restrict-api) | "" | **`INI_SYSTEM`** |  |
| [opcache.file\_update\_protection](opcache.configuration.md#ini.opcache.file_update_protection) | 2 | **`INI_ALL`** |  |
| [opcache.huge\_code\_pages](opcache.configuration.md#ini.opcache.huge_code_pages) | 0 | **`INI_SYSTEM`** |  |
| [opcache.lockfile\_path](opcache.configuration.md#ini.opcache.lockfile_path) | "/tmp" | **`INI_SYSTEM`** |  |
| [opcache.opt\_debug\_level](opcache.configuration.md#ini.opcache.opt_debug_level) | 0 | **`INI_SYSTEM`** | Disponível a partir do PHP 7.1.0 |
| [opcache.file\_cache](opcache.configuration.md#ini.opcache.file-cache) | **`null`** | **`INI_SYSTEM`** |  |
| [opcache.file\_cache\_only](opcache.configuration.md#ini.opcache.file-cache-only) | 0 | **`INI_SYSTEM`** |  |
| [opcache.file\_cache\_consistency\_checks](opcache.configuration.md#ini.opcache.file-cache-consistency-checks) | 1 | **`INI_SYSTEM`** |  |
| [opcache.file\_cache\_fallback](opcache.configuration.md#ini.opcache.file-cache-fallback) | 1 | **`INI_SYSTEM`** | Somente Windows. |
| [opcache.validate\_permission](opcache.configuration.md#ini.opcache.validate-permission) | 0 | **`INI_SYSTEM`** | Disponível a partir do PHP 7.0.14 |
| [opcache.validate\_root](opcache.configuration.md#ini.opcache.validate-root) | 0 | **`INI_SYSTEM`** | Disponível a partir do PHP 7.0.14 |
| [opcache.preload](opcache.configuration.md#ini.opcache.preload) | "" | **`INI_SYSTEM`** | Disponível a partir do PHP 7.4.0 |
| [opcache.preload\_user](opcache.configuration.md#ini.opcache.preload-user) | "" | **`INI_SYSTEM`** | Disponível a partir do PHP 7.4.0 |
| [opcache.cache\_id](opcache.configuration.md#ini.opcache.cache-id) | "" | **`INI_SYSTEM`** | Somente Windows. Disponível a partir do PHP 7.4.0 |
| [opcache.jit](opcache.configuration.md#ini.opcache.jit) | "disable" | **`INI_ALL`** | Disponível a partir do PHP 8.0.0. Antes do PHP 8.4.0, o valor padrão era "tracing". |
| [opcache.jit\_buffer\_size](opcache.configuration.md#ini.opcache.jit-buffer-size) | 64M | **`INI_SYSTEM`** | Disponível a partir do PHP 8.0.0. Antes do PHP 8.4.0, o valor padrão era 0. |
| [opcache.jit\_debug](opcache.configuration.md#ini.opcache.jit-debug) | 0 | **`INI_ALL`** | Disponível a partir do PHP 8.0.0 |
| [opcache.jit\_bisect\_limit](opcache.configuration.md#ini.opcache.jit-bisect-limit) | 0 | **`INI_ALL`** | Disponível a partir do PHP 8.0.0 |
| [opcache.jit\_prof\_threshold](opcache.configuration.md#ini.opcache.jit-prof-threshold) | 0.005 | **`INI_ALL`** | Disponível a partir do PHP 8.0.0 |
| [opcache.jit\_max\_root\_traces](opcache.configuration.md#ini.opcache.jit-max-root-traces) | 1024 | **`INI_SYSTEM`** | Disponível a partir do PHP 8.0.0 |
| [opcache.jit\_max\_side\_traces](opcache.configuration.md#ini.opcache.jit-max-side-traces) | 128 | **`INI_SYSTEM`** | Disponível a partir do PHP 8.0.0 |
| [opcache.jit\_max\_exit\_counters](opcache.configuration.md#ini.opcache.jit-max-exit-counters) | 8192 | **`INI_SYSTEM`** | Disponível a partir do PHP 8.0.0 |
| [opcache.jit\_hot\_loop](opcache.configuration.md#ini.opcache.jit-hot-loop) | 61 | **`INI_SYSTEM`** | Disponível a partir do PHP 8.0.0, antes do PHP 8.5.0, o valor padrão era 64 |
| [opcache.jit\_hot\_func](opcache.configuration.md#ini.opcache.jit-hot-func) | 127 | **`INI_SYSTEM`** | Disponível a partir do PHP 8.0.0 |
| [opcache.jit\_hot\_return](opcache.configuration.md#ini.opcache.jit-hot-return) | 8 | **`INI_SYSTEM`** | Disponível a partir do PHP 8.0.0 |
| [opcache.jit\_hot\_side\_exit](opcache.configuration.md#ini.opcache.jit-hot-side-exit) | 8 | **`INI_SYSTEM`** | Disponível a partir do PHP 8.0.0 |
| [opcache.jit\_blacklist\_root\_trace](opcache.configuration.md#ini.opcache.jit-blacklist-root-trace) | 16 | **`INI_ALL`** | Disponível a partir do PHP 8.0.0 |
| [opcache.jit\_blacklist\_side\_trace](opcache.configuration.md#ini.opcache.jit-blacklist-side-trace) | 8 | **`INI_ALL`** | Disponível a partir do PHP 8.0.0 |
| [opcache.jit\_max\_loop\_unrolls](opcache.configuration.md#ini.opcache.jit-max-loop-unrolls) | 8 | **`INI_ALL`** | Disponível a partir do PHP 8.0.0 |
| [opcache.jit\_max\_recursive\_calls](opcache.configuration.md#ini.opcache.jit-max-recursive-calls) | 2 | **`INI_ALL`** | Disponível a partir do PHP 8.0.0 |
| [opcache.jit\_max\_recursive\_returns](opcache.configuration.md#ini.opcache.jit-max-recursive-return) | 2 | **`INI_ALL`** | Disponível a partir do PHP 8.0.0 |
| [opcache.jit\_max\_polymorphic\_calls](opcache.configuration.md#ini.opcache.jit-max-polymorphic-calls) | 2 | **`INI_ALL`** | Disponível a partir do PHP 8.0.0 |
| [open\_basedir](ini.core.md#ini.open-basedir) | **`null`** | **`INI_ALL`** |  |
| [output\_buffering](outcontrol.configuration.md#ini.output-buffering) | `"0"` | **`INI_PERDIR`** |  |
| [output\_handler](outcontrol.configuration.md#ini.output-handler) | **`null`** | **`INI_PERDIR`** |  |
| [pcre.backtrack\_limit](pcre.configuration.md#ini.pcre.backtrack-limit) | "1000000" | **`INI_ALL`** |  |
| [pcre.recursion\_limit](pcre.configuration.md#ini.pcre.recursion-limit) | "100000" | **`INI_ALL`** |  |
| [pcre.jit](pcre.configuration.md#ini.pcre.jit) | "1" | **`INI_ALL`** |  |
| [pdo.dsn.\*](pdo.configuration.md#ini.pdo.dsn) |  | Somente php.ini |  |
| [pdo\_odbc.connection\_pooling](ref.pdo-odbc.md#ini.pdo-odbc.connection-pooling) | "strict" | **`INI_ALL`** |  |
| [pdo\_odbc.db2\_instance\_name](ref.pdo-odbc.md#ini.pdo-odbc.db2-instance-name) | NULL | **`INI_SYSTEM`** | Este recurso descontinuado *será* certamente *removido* no futuro. |
| [pgsql.allow\_persistent](pgsql.configuration.md#ini.pgsql.allow-persistent) | "1" | **`INI_SYSTEM`** |  |
| [pgsql.max\_persistent](pgsql.configuration.md#ini.pgsql.max-persistent) | "-1" | **`INI_SYSTEM`** |  |
| [pgsql.max\_links](pgsql.configuration.md#ini.pgsql.max-links) | "-1" | **`INI_SYSTEM`** |  |
| [pgsql.auto\_reset\_persistent](pgsql.configuration.md#ini.pgsql.auto-reset-persistent) | "0" | **`INI_SYSTEM`** |  |
| [pgsql.ignore\_notice](pgsql.configuration.md#ini.pgsql.ignore-notice) | "0" | **`INI_ALL`** |  |
| [pgsql.log\_notice](pgsql.configuration.md#ini.pgsql.log-notice) | "0" | **`INI_ALL`** |  |
| [phar.readonly](phar.configuration.md#ini.phar.readonly) | "1" | **`INI_ALL`** |  |
| [phar.require\_hash](phar.configuration.md#ini.phar.require-hash) | "1" | **`INI_ALL`** |  |
| [phar.cache\_list](phar.configuration.md#ini.phar.cache-list) | "" | **`INI_SYSTEM`** |  |
| [post\_max\_size](ini.core.md#ini.post-max-size) | `"8M"` | **`INI_PERDIR`** |  |
| [precision](ini.core.md#ini.precision) | `"14"` | **`INI_ALL`** |  |
| [realpath\_cache\_size](ini.core.md#ini.realpath-cache-size) | `"16K"` | **`INI_SYSTEM`** |  |
| [realpath\_cache\_ttl](ini.core.md#ini.realpath-cache-ttl) | `"120"` | **`INI_SYSTEM`** |  |
| [register\_argc\_argv](ini.core.md#ini.register-argc-argv) | `"1"` | **`INI_PERDIR`** | Descontinuada a partir do PHP 8.5.0 |
| [report\_memleaks](errorfunc.configuration.md#ini.report-memleaks) | `"1"` | **`INI_ALL`** | Descontinuada a partir do PHP 8.5.0 |
| report\_zend\_debug | `"1"` | **`INI_ALL`** |  |
| [request\_order](ini.core.md#ini.request-order) | `""` | **`INI_PERDIR`** |  |
| [runkit.superglobal](runkit7.configuration.md#ini.runkit7.superglobal) | "" | **`INI_PERDIR`** |  |
| [runkit.internal\_override](runkit7.configuration.md#ini.runkit7.internal-override) | "0" | **`INI_SYSTEM`** |  |
| [sendmail\_from](mail.configuration.md#ini.sendmail-from) | **`null`** | **`INI_ALL`** |  |
| [sendmail\_path](mail.configuration.md#ini.sendmail-path) | `"/usr/sbin/sendmail -t -i"` | **`INI_SYSTEM`** |  |
| [serialize\_precision](ini.core.md#ini.serialize-precision) | `"-1"` | **`INI_ALL`** | Antes do PHP 7.1.0, o valor padrão era `17`. |
| [session.save\_path](session.configuration.md#ini.session.save-path) | "" | **`INI_ALL`** |  |
| [session.name](session.configuration.md#ini.session.name) | "PHPSESSID" | **`INI_ALL`** |  |
| [session.save\_handler](session.configuration.md#ini.session.save-handler) | "files" | **`INI_ALL`** |  |
| [session.auto\_start](session.configuration.md#ini.session.auto-start) | "0" | **`INI_PERDIR`** |  |
| [session.gc\_probability](session.configuration.md#ini.session.gc-probability) | "1" | **`INI_ALL`** |  |
| [session.gc\_divisor](session.configuration.md#ini.session.gc-divisor) | "100" | **`INI_ALL`** |  |
| [session.gc\_maxlifetime](session.configuration.md#ini.session.gc-maxlifetime) | "1440" | **`INI_ALL`** |  |
| [session.serialize\_handler](session.configuration.md#ini.session.serialize-handler) | "php" | **`INI_ALL`** |  |
| [session.cookie\_lifetime](session.configuration.md#ini.session.cookie-lifetime) | "0" | **`INI_ALL`** |  |
| [session.cookie\_path](session.configuration.md#ini.session.cookie-path) | "/" | **`INI_ALL`** |  |
| [session.cookie\_domain](session.configuration.md#ini.session.cookie-domain) | "" | **`INI_ALL`** |  |
| [session.cookie\_secure](session.configuration.md#ini.session.cookie-secure) | "0" | **`INI_ALL`** | Antes do PHP 7.2.0, o padrão era `""`. |
| [session.cookie\_httponly](session.configuration.md#ini.session.cookie-httponly) | "0" | **`INI_ALL`** | Antes do PHP 7.2.0, o padrão era `""`. |
| [session.cookie\_samesite](session.configuration.md#ini.session.cookie-samesite) | "" | **`INI_ALL`** | Disponível a partir do PHP 7.3.0. |
| [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode) | "0" | **`INI_ALL`** |  |
| [session.use\_cookies](session.configuration.md#ini.session.use-cookies) | "1" | **`INI_ALL`** |  |
| [session.use\_only\_cookies](session.configuration.md#ini.session.use-only-cookies) | "1" | **`INI_ALL`** | Desabilitar esta configuração foi descontinuado a partir do PHP 8.4.0. |
| [session.referer\_check](session.configuration.md#ini.session.referer-check) | "" | **`INI_ALL`** | Definir um valor não vazio foi descontinuado a partir do PHP 8.4.0. |
| [session.cache\_limiter](session.configuration.md#ini.session.cache-limiter) | "nocache" | **`INI_ALL`** |  |
| [session.cache\_expire](session.configuration.md#ini.session.cache-expire) | "180" | **`INI_ALL`** |  |
| [session.use\_trans\_sid](session.configuration.md#ini.session.use-trans-sid) | "0" | **`INI_ALL`** | Habilitar esta configuração foi descontinuado a partir do PHP 8.4.0. |
| [session.trans\_sid\_tags](session.configuration.md#ini.session.trans-sid-tags) | "a=href,area=href,frame=src,form=" | **`INI_ALL`** | Disponível a partir do PHP 7.1.0. Alterar esta configuração foi descontinuado a partir do PHP 8.4.0. |
| [session.trans\_sid\_hosts](session.configuration.md#ini.session.trans-sid-hosts) | `$_SERVER['HTTP_HOST']` | **`INI_ALL`** | Disponível a partir do PHP 7.1.0. Definir um valor não vazio foi descontinuado a partir do PHP 8.4.0. |
| [session.sid\_length](session.configuration.md#ini.session.sid-length) | "32" | **`INI_ALL`** | Disponível desde o PHP 7.1.0. Descontinuada a partir do PHP 8.4.0. |
| [session.sid\_bits\_per\_character](session.configuration.md#ini.session.sid-bits-per-character) | "5" | **`INI_ALL`** | Disponível desde o PHP 7.1.0. Descontinuada a partir do PHP 8.4.0. |
| [session.upload\_progress.enabled](session.configuration.md#ini.session.upload-progress.enabled) | "1" | **`INI_PERDIR`** |  |
| [session.upload\_progress.cleanup](session.configuration.md#ini.session.upload-progress.cleanup) | "1" | **`INI_PERDIR`** |  |
| [session.upload\_progress.prefix](session.configuration.md#ini.session.upload-progress.prefix) | "upload\_progress\_" | **`INI_PERDIR`** |  |
| [session.upload\_progress.name](session.configuration.md#ini.session.upload-progress.name) | "PHP\_SESSION\_UPLOAD\_PROGRESS" | **`INI_PERDIR`** |  |
| [session.upload\_progress.freq](session.configuration.md#ini.session.upload-progress.freq) | "1%" | **`INI_PERDIR`** |  |
| [session.upload\_progress.min\_freq](session.configuration.md#ini.session.upload-progress.min-freq) | "1" | **`INI_PERDIR`** |  |
| [session.lazy\_write](session.configuration.md#ini.session.lazy-write) | "1" | **`INI_ALL`** |  |
| [session.hash\_function](session.configuration.md#ini.session.hash-function) | "0" | **`INI_ALL`** | Removido no PHP 7.1.0. |
| [session.hash\_bits\_per\_character](session.configuration.md#ini.session.hash-bits-per-character) | "4" | **`INI_ALL`** | Removido no PHP 7.1.0. |
| [session.entropy\_file](session.configuration.md#ini.session.entropy-file) | "" | **`INI_ALL`** | Removido no PHP 7.1.0. |
| [session.entropy\_length](session.configuration.md#ini.session.entropy-length) | "0" | **`INI_ALL`** | Removido no PHP 7.1.0. |
| [short\_open\_tag](ini.core.md#ini.short-open-tag) | `"1"` | **`INI_PERDIR`** |  |
| [SMTP](mail.configuration.md#ini.smtp) | `"localhost"` | **`INI_ALL`** |  |
| [smtp\_port](mail.configuration.md#ini.smtp-port) | `"25"` | **`INI_ALL`** |  |
| [soap.wsdl\_cache\_enabled](soap.configuration.md#ini.soap.wsdl-cache-enabled) | 1 | **`INI_ALL`** |  |
| [soap.wsdl\_cache\_dir](soap.configuration.md#ini.soap.wsdl-cache-dir) | /tmp | **`INI_ALL`** |  |
| [soap.wsdl\_cache\_ttl](soap.configuration.md#ini.soap.wsdl-cache-ttl) | 86400 | **`INI_ALL`** |  |
| [soap.wsdl\_cache](soap.configuration.md#ini.soap.wsdl-cache) | 1 | **`INI_ALL`** |  |
| [soap.wsdl\_cache\_limit](soap.configuration.md#ini.soap.wsdl-cache-limit) | 5 | **`INI_ALL`** |  |
| [sql.safe\_mode](ini.core.md#ini.sql.safe-mode) | `"0"` | **`INI_SYSTEM`** | Removido desde o PHP 7.2.0 |
| [sqlite3.extension\_dir](sqlite3.configuration.md#ini.sqlite3.extension-dir) | "" | **`INI_SYSTEM`** |  |
| [sqlite3.defensive](sqlite3.configuration.md#ini.sqlite3.defensive) | 1 | **`INI_USER`** | Disponível a partir do PHP 7.2.17 e 7.3.4 para libsqlite ≥ 3.26.0. Antes do PHP 8.2.0, essa configuração só podia ser alterada como **`INI_SYSTEM`**. |
| [syslog.facility](errorfunc.configuration.md#ini.syslog.facility) | `"LOG_USER"` | **`INI_SYSTEM`** | Disponível desde o PHP 7.3.0. |
| [syslog.filter](errorfunc.configuration.md#ini.syslog.filter) | `"no-ctrl"` | **`INI_ALL`** | Disponível desde o PHP 7.3.0. |
| [syslog.ident](errorfunc.configuration.md#ini.syslog.ident) | `"php"` | **`INI_SYSTEM`** | Disponível desde o PHP 7.3.0. |
| sys\_temp\_dir | `""` | **`INI_SYSTEM`** |  |
| [sysvshm.init\_mem](sem.configuration.md#ini.sysvshm.init-mem) | 10000 | **`INI_SYSTEM`** |  |
| [tidy.default\_config](tidy.configuration.md#ini.tidy.default-config) | "" | **`INI_SYSTEM`** |  |
| [tidy.clean\_output](tidy.configuration.md#ini.tidy.clean-output) | "0" | **`INI_USER`** |  |
| [track\_errors](errorfunc.configuration.md#ini.track-errors) | `"0"` | **`INI_ALL`** | Descontinuado a partir do PHP 7.2.0, removido no PHP 8.0.0. |
| [unserialize\_callback\_func](var.configuration.md#ini.unserialize-callback-func) | **`null`** | **`INI_ALL`** |  |
| [unserialize\_max\_depth](var.configuration.md#ini.unserialize-max-depth) | "4096" | **`INI_ALL`** | Disponível a partir do PHP 7.4.0. |
| uploadprogress.file.filename\_template | `"/tmp/upt_%s.txt"` | **`INI_ALL`** |  |
| [upload\_max\_filesize](ini.core.md#ini.upload-max-filesize) | `"2M"` | **`INI_PERDIR`** |  |
| [max\_file\_uploads](ini.core.md#ini.max-file-uploads) | `20` | **`INI_SYSTEM`** |  |
| [upload\_tmp\_dir](ini.core.md#ini.upload-tmp-dir) | **`null`** | **`INI_SYSTEM`** |  |
| [url\_rewriter.hosts](outcontrol.configuration.md#ini.url-rewriter.hosts) | `""` | **`INI_ALL`** | Disponível a partir do PHP 7.1.0. |
| [url\_rewriter.tags](outcontrol.configuration.md#ini.url-rewriter.tags) | `"form="` | **`INI_ALL`** | Antes do PHP 7.1.0, o valor padrão era `"a=href,area=href,frame=src,form=,fieldset="`. |
| [user\_agent](filesystem.configuration.md#ini.user-agent) | **`null`** | **`INI_ALL`** |  |
| [user\_dir](ini.core.md#ini.user-dir) | **`null`** | **`INI_SYSTEM`** |  |
| [user\_ini.cache\_ttl](ini.core.md#ini.user-ini.cache-ttl) | `"300"` | **`INI_SYSTEM`** |  |
| [user\_ini.filename](ini.core.md#ini.user-ini.filename) | `".user.ini"` | **`INI_SYSTEM`** |  |
| [uopz.disable](uopz.configuration.md#ini.uopz.disable) | "0" | **`INI_SYSTEM`** | Disponível a partir do uopz 5.0.2. |
| [uopz.exit](uopz.configuration.md#ini.uopz.exit) | "0" | **`INI_SYSTEM`** | Disponível a partir do uopz 6.0.1. |
| [uopz.overloads](uopz.configuration.md#ini.uopz.overloads) | "1" | **`INI_SYSTEM`** | Disponível a partir do uopz 2.0.2. Removida a partir do uopz 5.0.0. |
| [variables\_order](ini.core.md#ini.variables-order) | `"EGPCS"` | **`INI_PERDIR`** |  |
| [windows.show\_crt\_warning](ini.core.md#ini.windows-show-crt-warning) | `"0"` | **`INI_ALL`** |  |
| [xbithack](apache.configuration.md#ini.xbithack) | `"0"` | **`INI_ALL`** |  |
| [xmlrpc\_errors](errorfunc.configuration.md#ini.xmlrpc-errors) | `"0"` | **`INI_SYSTEM`** |  |
| [xmlrpc\_error\_number](errorfunc.configuration.md#ini.xmlrpc-error-number) | `"0"` | **`INI_ALL`** |  |
| yaz.keepalive | `"120"` | **`INI_ALL`** |  |
| yaz.log\_mask | **`null`** | **`INI_ALL`** | Disponível desde yaz 1.0.3. |
| [zend.assertions](ini.core.md#ini.zend.assertions) | `"1"` | **`INI_ALL`** |  |
| [zend.detect\_unicode](ini.core.md#ini.zend.detect-unicode) | `"1"` | **`INI_ALL`** |  |
| [zend.enable\_gc](info.configuration.md#ini.zend.enable-gc) | `"1"` | **`INI_ALL`** |  |
| [zend.max\_allowed\_stack\_size](info.configuration.md#ini.zend.max-allowed-stack-size) | `"0"` | **`INI_SYSTEM`** | Disponível a partir do PHP 8.3.0 |
| [fiber.stack\_size](info.configuration.md#ini.fiber.stack-size) |  | **`INI_ALL`** | Disponível a partir do PHP 8.1.0 |
| [zend.multibyte](ini.core.md#ini.zend.multibyte) | `"0"` | **`INI_PERDIR`** |  |
| [zend.reserved\_stack\_size](info.configuration.md#ini.zend.reserved-stack-size) | `"0"` | **`INI_SYSTEM`** | Disponível a partir do PHP 8.3.0 |
| [zend.script\_encoding](ini.core.md#ini.zend.script-encoding) | **`null`** | **`INI_ALL`** |  |
| [zend.signal\_check](ini.core.md#ini.zend.signal-check) | `"0"` | **`INI_SYSTEM`** |  |
| [zend\_extension](ini.core.md#ini.zend-extension) | **`null`** | Somente no php.ini |  |
| [zlib.output\_compression](zlib.configuration.md#ini.zlib.output-compression) | "0" | **`INI_ALL`** |  |
| [zlib.output\_compression\_level](zlib.configuration.md#ini.zlib.output-compression-level) | "-1" | **`INI_ALL`** |  |
| [zlib.output\_handler](zlib.configuration.md#ini.zlib.output-handler) | "" | **`INI_ALL`** |  |

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
