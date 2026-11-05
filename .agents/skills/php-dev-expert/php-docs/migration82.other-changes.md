# Outras mudanças

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration82.other-changes.php

---

## Outras mudanças

### Mudanças no Núcleo

O tipo [iterable](language.types.iterable.md) agora é um apelido de tempo de compilação integrado para
[array](language.types.array.md)|[Traversable](class.traversable.md).
As mensagens de erro relacionadas ao `iterable` agora usarão
`array|Traversable`.
Reflexão de tipo é preservada para `iterable` único
(e `?iterable`) para produzir um
[ReflectionNamedType](class.reflectionnamedtype.md) com nome `iterable`,
no entanto, o uso de `iterable` em tipos de união
será convertido em `array|Traversable`.

O formato da data dos cookies enviados agora é `'D, d M Y H:i:s \G\M\T'`;
anteriormente era `'D, d-M-Y H:i:s T'`.

### Alterações nos Módulos SAPI

#### CLI

Os fluxos STDOUT, STDERR e STDIN não são mais fechados na destruição de recursos,
que ocorre principalmente quando a CLI termina. No entanto, ainda é possível
fechar explicitamente esses fluxos usando [fclose()](function.fclose.md) e similares.

### Funções alteradas

#### Core

As funções [strcmp()](function.strcmp.md), [strcasecmp()](function.strcasecmp.md),
[strncmp()](function.strncmp.md), [strncasecmp()](function.strncasecmp.md) e
[substr\_compare()](function.substr-compare.md), usando a comparação de string segura
binária não mais retornam garantidamente
`strlen($string1) - strlen($string2)` quando os comprimentos das strings não forem
iguais, mas podem ao invés disso retornar `-1` ou `1`.
Para não depender de nenhum valor concreto, o valor de retorno deve
ser comparado com `0`.

#### DBA

[dba\_open()](function.dba-open.md) e [dba\_popen()](function.dba-popen.md)
agora possuem a seguinte assinatura obrigatória:

function [dba\_open](function.dba-open.md)(  
    [string](language.types.string.md) `$path`,  
    [string](language.types.string.md) `$mode`,  
    [?](language.types.null.md)[string](language.types.string.md) `$handler` = **`null`**,  
    [int](language.types.integer.md) `$permission` = 0644,  
    [int](language.types.integer.md) `$map_size` = 0,  
    [?](language.types.null.md)[int](language.types.integer.md) `$flags` = **`null`**  
): [resource](language.types.resource.md)|[false](language.types.singleton.md)

O argumento opcional skip de [dba\_fetch()](function.dba-fetch.md)'s agora está no final
de acordo com a semântica da área de usuário do PHP. Sua assinatura agora é:

function [dba\_fetch](function.dba-fetch.md)([string](language.types.string.md)|[array](language.types.array.md) `$key`, [resource](language.types.resource.md) `$handle`, [int](language.types.integer.md) `$skip`): [string](language.types.string.md)|[false](language.types.singleton.md)

A assinatura sobrecarregada:

function [dba\_fetch](function.dba-fetch.md)([string](language.types.string.md)|[array](language.types.array.md) `$key`, [int](language.types.integer.md) `$skip`, [resource](language.types.resource.md) `$handle`): [string](language.types.string.md)|[false](language.types.singleton.md)

ainda é aceito, mas é recomendável usar a nova variante padrão.

#### Random

[random\_bytes()](function.random-bytes.md) e [random\_int()](function.random-int.md)
agora lançam um [\Random\RandomException](class.random-randomexception.md) em falhas de CSPRNG.
Anteriormente, um [\Exception](class.exception.md) simples era lançado.

#### SPL

O parâmetro `iterator` de
[iterator\_to\_array()](function.iterator-to-array.md) e [iterator\_count()](function.iterator-count.md)
é ampliado para [iterable](language.types.iterable.md) de [Iterator](class.iterator.md),
permitindo que arrays sejam passados.

### Outras alterações nas extensões

#### Date

As propriedades de [DatePeriod](class.dateperiod.md) agora estão devidamente declaradas.

#### Intl

Instâncias de
[IntlBreakIterator](class.intlbreakiterator.md),
[IntlRuleBasedBreakIterator](class.intlrulebasedbreakiterator.md),
[IntlCodePointBreakIterator](class.intlcodepointbreakiterator.md),
[IntlPartsIterator](class.intlpartsiterator.md),
[IntlCalendar](class.intlcalendar.md),
[Collator](class.collator.md),
[IntlIterator](class.intliterator.md),
[UConverter](class.uconverter.md),
[IntlDateFormatter](class.intldateformatter.md),
[IntlDatePatternGenerator](class.intldatepatterngenerator.md),
[MessageFormatter](class.messageformatter.md),
[ResourceBundle](class.resourcebundle.md),
[Spoofchecker](class.spoofchecker.md),
[IntlTimeZone](class.intltimezone.md),
e [Transliterator](class.transliterator.md)
não são mais serializáveis. Anteriormente, eles podiam ser serializados, mas
a desserialização produzia objetos inutilizáveis ou falhava.

#### MySQLi

O suporte para libmysql foi removido e não é mais possível
compilar mysqli com libmysql.
A partir de agora, a extensão mysqli pode ser compilada apenas com mysqlnd.
Todos os recursos libmysql indisponíveis no mysqlnd foram removidos:

- A propriedade reconnect de [mysqli\_driver](class.mysqli-driver.md)
- A diretiva INI [mysqli.reconnect](mysqli.configuration.md#ini.mysqli.reconnect)
- A constante **`MYSQLI_IS_MARIADB`** foi descontinuada

#### OCI8

A versão mínima da biblioteca Oracle Client exigida agora é 11.2.

#### PCRE

Caracteres NUL (`\0`) em strings de expressão regular agora são suportados.

#### Session

Tentar alterar a diretiva INI da
[session.cookie\_samesite](session.configuration.md#ini.session.cookie-samesite)
enquanto a sessão está ativa ou a saída já foi enviada falhará e
emitirá um aviso.
Isso alinha o comportamento com todas as outras configurações INI da sessão.

#### SQLite3

[sqlite3.defensive](sqlite3.configuration.md#ini.sqlite3.defensive)
agora é **`INI_USER`**.

#### Standard

[getimagesize()](function.getimagesize.md) agora relata as dimensões reais da imagem,
bits e canais de imagens AVIF. Anteriormente, as dimensões eram relatadas como 0x0 e
bits e canais não eram relatados.

#### Tidy

As propriedades da classe [tidy](class.tidy.md) agora estão devidamente declaradas.
E os da classe [tidyNode](class.tidynode.md) agora são declarados corretamente como somente leitura.

#### Zip

A extensão Zip foi atualizada para a versão 1.20.0,
que adiciona os seguintes métodos:

- [ZipArchive::clearError()](ziparchive.clearerror.md)
- [ZipArchive::getStreamName()](ziparchive.getstreamname.md)
- [ZipArchive::getStreamIndex()](ziparchive.getstreamindex.md)

### Alterações na manipulação de arquivos INI

O suporte para prefixos binários (`0b`/`0B`) e octal
(`0o`/`0O`) foi adicionado às configurações INI de número inteiro.
As configurações INI de número inteiro que começam com zero (`0`)
continuam a ser interpretadas como um número inteiro octal.

A análise de alguns valores mal formatados agora acionará um aviso quando isso
foi silenciosamente ignorado antes.
Para compatibilidade com versões anteriores, a interpretação desses valores não mudou.
Isso afeta as seguintes configurações:

- [bcmath.scale](bc.configuration.md#ini.bcmath.scale)
- [com.code\_page](com.configuration.md#ini.com.code-page)
- [default\_socket\_timeout](filesystem.configuration.md#ini.default-socket-timeout)
- [fiber.stack\_size](info.configuration.md#ini.fiber.stack-size)
- [hard\_timeout](ini.core.md#ini.hard-timeout)
- [intl.error\_level](intl.configuration.md#ini.intl.error-level)
- [ldap.max\_links](ldap.configuration.md#ini.ldap.max_links)
- [max\_input\_nesting\_level](info.configuration.md#ini.max-input-nesting-level)
- [max\_input\_vars](info.configuration.md#ini.max-input-vars)
- [mbstring.regex\_retry\_limit](mbstring.configuration.md#ini.mbstring.regex-retry-limit)
- [mbstring.regex\_stack\_limit](mbstring.configuration.md#ini.mbstring.regex-stack-limit)
- [mysqli.allow\_local\_infile](mysqli.configuration.md#ini.mysqli.allow-local-infile)
- [mysqli.allow\_persistent](mysqli.configuration.md#ini.mysqli.allow-persistent)
- [mysqli.default\_port](mysqli.configuration.md#ini.mysqli.default-port)
- [mysqli.max\_links](mysqli.configuration.md#ini.mysqli.max-links)
- [mysqli.max\_persistent](mysqli.configuration.md#ini.mysqli.max-persistent)
- [mysqli.rollback\_on\_cached\_plink](mysqli.configuration.md#ini.mysqli.rollback-on-cached-plink)
- [mysqlnd.log\_mask](mysqlnd.config.md#ini.mysqlnd.log-mask)
- [mysqlnd.mempool\_default\_size](mysqlnd.config.md#ini.mysqlnd.mempool-default-size)
- [mysqlnd.net\_read\_buffer\_size](mysqlnd.config.md#ini.mysqlnd.net-read-buffer-size)
- [mysqlnd.net\_read\_timeout](mysqlnd.config.md#ini.mysqlnd.net-read-timeout)
- [oci8.default\_prefetch](oci8.configuration.md#ini.oci8.default-prefetch)
- [oci8.max\_persistent](oci8.configuration.md#ini.oci8.max-persistent)
- [oci8.persistent\_timeout](oci8.configuration.md#ini.oci8.persistent-timeout)
- [oci8.ping\_interval](oci8.configuration.md#ini.oci8.ping-interval)
- [oci8.prefetch\_lob\_size](oci8.configuration.md#ini.oci8.prefetch-lob-size)
- [oci8.privileged\_connect](oci8.configuration.md#ini.oci8.privileged-connect)
- [oci8.statement\_cache\_size](oci8.configuration.md#ini.oci8.statement-cache-size)
- [odbc.allow\_persistent](odbc.configuration.md#ini.uodbc.allow-persistent)
- [odbc.check\_persistent](odbc.configuration.md#ini.uodbc.check-persistent)
- [odbc.max\_persistent](odbc.configuration.md#ini.uodbc.max-persistent)
- [odbc.max\_links](odbc.configuration.md#ini.uodbc.max-links)
- [odbc.defaultbinmode](odbc.configuration.md#ini.uodbc.defaultbinmode)
- [odbc.default\_cursortype](odbc.configuration.md#ini.uodbc.defaultcursortype)
- [odbc.defaultlrl](odbc.configuration.md#ini.uodbc.defaultlrl)
- [opcache.consistency\_checks](opcache.configuration.md#ini.opcache.consistency-checks)
- [opcache.file\_update\_protection](opcache.configuration.md#ini.opcache.file_update_protection)
- [opcache.force\_restart\_timeout](opcache.configuration.md#ini.opcache.force-restart-timeout)
- [opcache.interned\_strings\_buffer](opcache.configuration.md#ini.opcache.interned-strings-buffer)
- [opcache.jit\_bisect\_limit](opcache.configuration.md#ini.opcache.jit-bisect-limit)
- [opcache.jit\_blacklist\_root\_trace](opcache.configuration.md#ini.opcache.jit-blacklist-root-trace)
- [opcache.jit\_blacklist\_side\_trace](opcache.configuration.md#ini.opcache.jit-blacklist-side-trace)
- [opcache.jit\_debug](opcache.configuration.md#ini.opcache.jit-debug)
- [opcache.jit\_hot\_func](opcache.configuration.md#ini.opcache.jit-hot-func)
- [opcache.jit\_hot\_loop](opcache.configuration.md#ini.opcache.jit-hot-loop)
- [opcache.jit\_hot\_return](opcache.configuration.md#ini.opcache.jit-hot-return)
- [opcache.jit\_hot\_side\_exit](opcache.configuration.md#ini.opcache.jit-hot-side-exit)
- [opcache.jit\_max\_exit\_counters](opcache.configuration.md#ini.opcache.jit-max-exit-counters)
- [opcache.jit\_max\_loop\_unrolls](opcache.configuration.md#ini.opcache.jit-max-loop-unrolls)
- [opcache.jit\_max\_polymorphic\_calls](opcache.configuration.md#ini.opcache.jit-max-polymorphic-calls)
- [opcache.jit\_max\_recursive\_calls](opcache.configuration.md#ini.opcache.jit-max-recursive-calls)
- [opcache.jit\_max\_recursive\_returns](opcache.configuration.md#ini.opcache.jit-max-recursive-return)
- [opcache.jit\_max\_root\_traces](opcache.configuration.md#ini.opcache.jit-max-root-traces)
- [opcache.jit\_max\_side\_traces](opcache.configuration.md#ini.opcache.jit-max-side-traces)
- [opcache.log\_verbosity\_level](opcache.configuration.md#ini.opcache.log-verbosity-level)
- [opcache.max\_file\_size](opcache.configuration.md#ini.opcache.max-file-size)
- [opcache.opt\_debug\_level](opcache.configuration.md#ini.opcache.opt_debug_level)
- [opcache.optimization\_level](opcache.configuration.md#ini.opcache.optimization-level)
- [opcache.revalidate\_freq](opcache.configuration.md#ini.opcache.revalidate-freq)
- [output\_buffering](outcontrol.configuration.md#ini.output-buffering)
- [pcre.backtrack\_limit](pcre.configuration.md#ini.pcre.backtrack-limit)
- [pcre.recursion\_limit](pcre.configuration.md#ini.pcre.recursion-limit)
- [pgsql.max\_links](pgsql.configuration.md#ini.pgsql.max-links)
- [pgsql.max\_persistent](pgsql.configuration.md#ini.pgsql.max-persistent)
- [post\_max\_size](ini.core.md#ini.post-max-size)
- [realpath\_cache\_size](ini.core.md#ini.realpath-cache-size)
- [realpath\_cache\_ttl](ini.core.md#ini.realpath-cache-ttl)
- [session.cache\_expire](session.configuration.md#ini.session.cache-expire)
- [session.cookie\_lifetime](session.configuration.md#ini.session.cookie-lifetime)
- [session.gc\_divisor](session.configuration.md#ini.session.gc-divisor)
- [session.gc\_maxlifetime](session.configuration.md#ini.session.gc-maxlifetime)
- [session.gc\_probability](session.configuration.md#ini.session.gc-probability)
- [soap.wsdl\_cache\_limit](soap.configuration.md#ini.soap.wsdl-cache-limit)
- [soap.wsdl\_cache\_ttl](soap.configuration.md#ini.soap.wsdl-cache-ttl)
- [unserialize\_max\_depth](var.configuration.md#ini.unserialize-max-depth)
- [upload\_max\_filesize](ini.core.md#ini.upload-max-filesize)
- [user\_ini.cache\_ttl](ini.core.md#ini.user-ini.cache-ttl)
- [xmlrpc\_error\_number](errorfunc.configuration.md#ini.xmlrpc-error-number)
- [zend.assertions](ini.core.md#ini.zend.assertions)
- [zlib.output\_compression\_level](zlib.configuration.md#ini.zlib.output-compression-level)

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
