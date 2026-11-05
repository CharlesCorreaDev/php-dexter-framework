# Recursos Descontinuados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration85.deprecated.php

---

## Recursos Descontinuados

### Núcleo do PHP

#### Alterações no manipulador de saída do usuário

Tentar gerar saída (por exemplo, com [echo](function.echo.md)) dentro
de um manipulador de saída do usuário foi descontinuado.
O aviso de descontinuação ignorará o manipulador que gera a saída para
garantir que ela seja visível; se houver manipuladores de saída aninhados, o próximo
ainda será usado.

#### Nomes de conversão não canônicos

Nomes de conversão não canônicos `(boolean)`,
`(integer)`, `(double)`,
e `(binary)` foram descontinuados,
use `(bool)`, `(int)`,
`(float)`,e `(string)` respectivamente.

#### Encerrando instruções 'case' com ponto e vírgula

O uso de ponto e vírgula em vez de dois pontos para encerrar
instruções 'case' foi descontinuado.

#### O operador de execução

[O operador de execução](language.operators.execution.md)
como um sinônimo de [shell\_exec()](function.shell-exec.md) foi descontinuado.

#### Retornando null de \_\_debugInfo()

Retornar **`null`** de
[\_\_debugInfo()](language.oop5.magic.md#language.oop5.magic.debuginfo)
foi descontinuado. Em vez disso, retorne um array vazio.

#### Diretiva INI report\_memleaks

A diretiva INI [report\_memleaks](errorfunc.configuration.md#ini.report-memleaks)
foi descontinuada.

#### Redeclaração de constante

A redeclaração de constante foi descontinuada.
Observe que isso já gerava aviso e continuará gerando.

#### Problemas de vinculação de Closure

Os seguintes problemas de vinculação de Closure, que já emitem um
**`E_WARNING`**, agora estão descontinuados:

- Vincular uma instância a um Closure estático.
- Vincular métodos a objetos que não são instâncias da classe
  (ou subclasse) na qual o método está definido.
- Desvincular $this de um método.
- Desvincular `$this` de um Closure que usa `$this`.
- Vincular um Closure ao escopo de uma classe interna.
- Revincular o escopo de um Closure criado a partir de uma função ou método.

#### Métodos mágicos \_\_sleep() e \_\_wakeup()

Os métodos mágicos [\_\_sleep()](language.oop5.magic.md#object.sleep) e
[\_\_wakeup()](language.oop5.magic.md#object.wakeup)
foram praticamente descontinuados.
Os métodos mágicos [\_\_serialize()](language.oop5.magic.md#object.serialize) e
[\_\_unserialize()](language.oop5.magic.md#object.unserialize)
devem ser usados no lugar deles, ou ao mesmo tempo se for requerida
compatibilidade com o PHP 7.

#### Usando null como um índice de array

Usar **`null`** como um índice de array ou ao chamar [array\_key\_exists()](function.array-key-exists.md)
agora foi descontinuado. Uma string vazia deve ser usada em seu lugar.

#### Incrementando strings não numéricas

Incrementar strings não numéricas agora foi descontinuado.
Em vez disso, a função [str\_increment()](function.str-increment.md) deve ser usada.

#### Diretiva INI register\_argc\_argv

A obtenção de `$_SERVER['argc']` e `$_SERVER['argv']`
a partir da string de consulta para SAPIs não-CLI foi descontinuada.
Configure `register_argc_argv=0` e alterne para
[$\_GET](reserved.variables.get.md) ou `$_SERVER['QUERY_STRING']`
para acessar as informações, após verificar se o uso é seguro.

### cURL

A função [curl\_close()](function.curl-close.md) foi descontinuada,
pois os objetos [CurlHandle](class.curlhandle.md) são liberados automaticamente.

A função [curl\_share\_close()](function.curl-share-close.md) foi descontinuada,
pois os objetos [CurlShareHandle](class.curlsharehandle.md) são liberados automaticamente.

### Date

As constantes **`DATE_RFC7231`** e
**`DateTimeInterface::RFC7231`** foram descontinuadas.
Isso ocorre porque o fuso horário associado é ignorado e sempre usa GMT.

### FileInfo

A função [finfo\_close()](function.finfo-close.md) foi descontinuada.
Os objetos [finfo](class.finfo.md) são liberados automaticamente.

O parâmetro `context` da
função [finfo\_buffer()](function.finfo-buffer.md) foi descontinuado
pois é ignorado.

### GD

A função [imagedestroy()](function.imagedestroy.md) foi descontinuada,
pois os objetos [GdImage](class.gdimage.md) são liberados automaticamente.

### Hash

As constantes **`MHASH_*`** foram
descontinuadas.

### Intl

A configuração INI [intl.error\_level](intl.configuration.md#ini.intl.error-level)
foi descontinuada.
Os erros devem ser verificados manualmente ou as exceções devem ser habilitadas
usando a configuração INI
[intl.use\_exceptions](intl.configuration.md#ini.intl.use-exceptions).

### LDAP

Chamadas e constantes específicas do Oracle Instant Client foram descontinuadas.
Lista de chamadas afetadas:

- [ldap\_connect()](function.ldap-connect.md) com suporte para wallet
- [ldap\_connect\_wallet()](function.ldap-connect-wallet.md)

Lista de constantes afetadas:

- **`GSLC_SSL_NO_UATH`**
- **`GSLC_SSL_ONEWAY_UATH`**
- **`GSLC_SSL_TWOWAY_UATH`**

### MySQLi

O sinônimo de função [mysqli\_execute()](function.mysqli-execute.md) foi descontinuado.
Use [mysqli\_stmt\_execute()](mysqli-stmt.execute.md) no lugar dela.

### OpenSSL

O parâmetro `key_length` da
função [openssl\_pkey\_derive()](function.openssl-pkey-derive.md) foi descontinuado.
Isso ocorre porque ele é ignorado ou trunca a chave, o que pode representar
uma vulnerabilidade de segurança.

### PDO

O esquema DSN `"uri:"` foi descontinuado devido a preocupações de segurança com
DSNs provenientes de URIs remotas.

Constantes específicas de drivers na classe PDO foram descontinuadas.
Lista das constantes afetadas e suas substituições:

- **`PDO::DBLIB_ATTR_CONNECTION_TIMEOUT`** => **`Pdo\Dblib::ATTR_CONNECTION_TIMEOUT`**
- **`PDO::DBLIB_ATTR_QUERY_TIMEOUT`** => **`Pdo\Dblib::ATTR_QUERY_TIMEOUT`**
- **`PDO::DBLIB_ATTR_STRINGIFY_UNIQUEIDENTIFIER`** => **`Pdo\Dblib::ATTR_STRINGIFY_UNIQUEIDENTIFIER`**
- **`PDO::DBLIB_ATTR_VERSION`** => **`Pdo\Dblib::ATTR_VERSION`**
- **`PDO::DBLIB_ATTR_TDS_VERSION`** => **`Pdo\Dblib::ATTR_TDS_VERSION`**
- **`PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS`** => **`Pdo\Dblib::ATTR_SKIP_EMPTY_ROWSETS`**
- **`PDO::DBLIB_ATTR_DATETIME_CONVERT`** => **`Pdo\Dblib::ATTR_DATETIME_CONVERT`**
- **`PDO::FB_ATTR_DATE_FORMAT`** => **`Pdo\Firebird::ATTR_DATE_FORMAT`**
- **`PDO::FB_ATTR_TIME_FORMAT`** => **`Pdo\Firebird::ATTR_TIME_FORMAT`**
- **`PDO::FB_ATTR_TIMESTAMP_FORMAT`** => **`Pdo\Firebird::ATTR_TIMESTAMP_FORMAT`**
- **`PDO::MYSQL_ATTR_USE_BUFFERED_QUERY`** => **`Pdo\Mysql::ATTR_USE_BUFFERED_QUERY`**
- **`PDO::MYSQL_ATTR_LOCAL_INFILE`** => **`Pdo\Mysql::ATTR_LOCAL_INFILE`**
- **`PDO::MYSQL_ATTR_LOCAL_INFILE_DIRECTORY`** => **`Pdo\Mysql::ATTR_LOCAL_INFILE_DIRECTORY`**
- **`PDO::MYSQL_ATTR_INIT_COMMAND`** => **`Pdo\Mysql::ATTR_INIT_COMMAND`**
- **`PDO::MYSQL_ATTR_MAX_BUFFER_SIZE`** => **`Pdo\Mysql::ATTR_MAX_BUFFER_SIZE`**
- **`PDO::MYSQL_ATTR_READ_DEFAULT_FILE`** => **`Pdo\Mysql::ATTR_READ_DEFAULT_FILE`**
- **`PDO::MYSQL_ATTR_READ_DEFAULT_GROUP`** => **`Pdo\Mysql::ATTR_READ_DEFAULT_GROUP`**
- **`PDO::MYSQL_ATTR_COMPRESS`** => **`Pdo\Mysql::ATTR_COMPRESS`**
- **`PDO::MYSQL_ATTR_DIRECT_QUERY`** => **`Pdo\Mysql::ATTR_DIRECT_QUERY`**
- **`PDO::MYSQL_ATTR_FOUND_ROWS`** => **`Pdo\Mysql::ATTR_FOUND_ROWS`**
- **`PDO::MYSQL_ATTR_IGNORE_SPACE`** => **`Pdo\Mysql::ATTR_IGNORE_SPACE`**
- **`PDO::MYSQL_ATTR_SSL_KEY`** => **`Pdo\Mysql::ATTR_SSL_KEY`**
- **`PDO::MYSQL_ATTR_SSL_CERT`** => **`Pdo\Mysql::ATTR_SSL_CERT`**
- **`PDO::MYSQL_ATTR_SSL_CA`** => **`Pdo\Mysql::ATTR_SSL_CA`**
- **`PDO::MYSQL_ATTR_SSL_CAPATH`** => **`Pdo\Mysql::ATTR_SSL_CAPATH`**
- **`PDO::MYSQL_ATTR_SSL_CIPHER`** => **`Pdo\Mysql::ATTR_SSL_CIPHER`**
- **`PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT`** => **`Pdo\Mysql::ATTR_SSL_VERIFY_SERVER_CERT`**
- **`PDO::MYSQL_ATTR_SERVER_PUBLIC_KEY`** => **`Pdo\Mysql::ATTR_SERVER_PUBLIC_KEY`**
- **`PDO::MYSQL_ATTR_MULTI_STATEMENTS`** => **`Pdo\Mysql::ATTR_MULTI_STATEMENTS`**
- **`PDO::ODBC_ATTR_USE_CURSOR_LIBRARY`** => **`Pdo\Odbc::ATTR_USE_CURSOR_LIBRARY`**
- **`PDO::ODBC_ATTR_ASSUME_UTF8`** => **`Pdo\Odbc::ATTR_ASSUME_UTF8`**
- **`PDO::ODBC_SQL_USE_IF_NEEDED`** => **`Pdo\Odbc::SQL_USE_IF_NEEDED`**
- **`PDO::ODBC_SQL_USE_DRIVER`** => **`Pdo\Odbc::SQL_USE_DRIVER`**
- **`PDO::ODBC_SQL_USE_ODBC`** => **`Pdo\Odbc::SQL_USE_ODBC`**
- **`PDO::PGSQL_ATTR_DISABLE_PREPARES`** => **`Pdo\Pgsql::ATTR_DISABLE_PREPARES`**
- **`PDO::SQLITE_ATTR_EXTENDED_RESULT_CODES`** => **`Pdo\Sqlite::ATTR_EXTENDED_RESULT_CODES`**
- **`PDO::SQLITE_ATTR_OPEN_FLAGS`** => **`Pdo\Sqlite::ATTR_OPEN_FLAGS`**
- **`PDO::SQLITE_ATTR_READONLY_STATEMENT`** => **`Pdo\Sqlite::ATTR_READONLY_STATEMENT`**
- **`PDO::SQLITE_DETERMINISTIC`** => **`Pdo\Sqlite::DETERMINISTIC`**
- **`PDO::SQLITE_OPEN_READONLY`** => **`Pdo\Sqlite::OPEN_READONLY`**
- **`PDO::SQLITE_OPEN_READWRITE`** => **`Pdo\Sqlite::OPEN_READWRITE`**
- **`PDO::SQLITE_OPEN_CREATE`** => **`Pdo\Sqlite::OPEN_CREATE`**

Métodos específicos de drivers na classe PDO foram descontinuados.
Lista dos métodos afetados e suas substituições:

- [PDO::pgsqlCopyFromArray()](pdo.pgsqlcopyfromarray.md) => [Pdo\Pgsql::copyFromArray()](pdo-pgsql.copyfromarray.md)
- [PDO::pgsqlCopyFromFile()](pdo.pgsqlcopyfromfile.md) => [Pdo\Pgsql::copyFromFile()](pdo-pgsql.copyfromfile.md)
- [PDO::pgsqlCopyToArray()](pdo.pgsqlcopytoarray.md) => [Pdo\Pgsql::copyToArray()](pdo-pgsql.copytoarray.md)
- [PDO::pgsqlCopyToFile()](pdo.pgsqlcopytofile.md) => [Pdo\Pgsql::copyToFile()](pdo-pgsql.copytofile.md)
- [PDO::pgsqlGetNotify()](pdo.pgsqlgetnotify.md) => [Pdo\Pgsql::getNotify()](pdo-pgsql.getnotify.md)
- [PDO::pgsqlGetPid()](pdo.pgsqlgetpid.md) => [Pdo\Pgsql::getPid()](pdo-pgsql.getpid.md)
- [PDO::pgsqlLOBCreate()](pdo.pgsqllobcreate.md) => [Pdo\Pgsql::lobCreate()](pdo-pgsql.lobcreate.md)
- [PDO::pgsqlLOBOpen()](pdo.pgsqllobopen.md) => [Pdo\Pgsql::lobOpen()](pdo-pgsql.lobopen.md)
- [PDO::pgsqlLOBUnlink()](pdo.pgsqllobunlink.md) => [Pdo\Pgsql::lobUnlink()](pdo-pgsql.lobunlink.md)
- [PDO::sqliteCreateAggregate()](pdo.sqlitecreateaggregate.md) => [Pdo\Sqlite::createAggregate()](pdo-sqlite.createaggregate.md)
- [PDO::sqliteCreateCollation()](pdo.sqlitecreatecollation.md) => [Pdo\Sqlite::createCollation()](pdo-sqlite.createcollation.md)
- [PDO::sqliteCreateFunction()](pdo.sqlitecreatefunction.md) => [Pdo\Sqlite::createFunction()](pdo-sqlite.createfunction.md)

### PDO\_PGSQL

As constantes relacionadas aos estados de transação foram descontinuadas, pois esse recurso não está disponível no PDO:

- **`PDO::PGSQL_TRANSACTION_IDLE`**
- **`PDO::PGSQL_TRANSACTION_ACTIVE`**
- **`PDO::PGSQL_TRANSACTION_INTRANS`**
- **`PDO::PGSQL_TRANSACTION_INERROR`**
- **`PDO::PGSQL_TRANSACTION_UNKNOWN`**

### Reflection

Os métodos `setAccessible()` de vários objetos Reflection foram
descontinuados, pois não têm mais efeito.

Chamar [ReflectionClass::getConstant()](reflectionclass.getconstant.md) para constantes
que não existem foi descontinuado.

Chamar [ReflectionProperty::getDefaultValue()](reflectionproperty.getdefaultvalue.md) para
propriedades sem valores padrão foi descontinuado.

### SPL

O processo de cancelar o registro de todos os autocarregadores passando a
função [spl\_autoload\_call()](function.spl-autoload-call.md) como argumento de retorno para
[spl\_autoload\_unregister()](function.spl-autoload-unregister.md) foi descontinuado.
Em vez disso, se necessário, deve-se iterar sobre o valor de retorno de
[spl\_autoload\_functions()](function.spl-autoload-functions.md) e chamar
[spl\_autoload\_unregister()](function.spl-autoload-unregister.md) em cada valor.

Os métodos [SplObjectStorage::contains()](splobjectstorage.contains.md),
[SplObjectStorage::attach()](splobjectstorage.attach.md) e
[SplObjectStorage::detach()](splobjectstorage.detach.md) foram descontinuados
em favor de [SplObjectStorage::offsetExists()](splobjectstorage.offsetexists.md),
[SplObjectStorage::offsetSet()](splobjectstorage.offsetset.md) e
[SplObjectStorage::offsetUnset()](splobjectstorage.offsetunset.md) respectivamente.

Usar [ArrayObject](class.arrayobject.md) e
[ArrayIterator](class.arrayiterator.md) com objetos foi descontinuado.

### Standard

A função sinônimo [socket\_set\_timeout()](function.socket-set-timeout.md) foi descontinuada.
Use [stream\_set\_timeout()](function.stream-set-timeout.md) em seu lugar.

Passar **`null`** para [readdir()](function.readdir.md),
[rewinddir()](function.rewinddir.md) e [closedir()](function.closedir.md)
para usar o último diretório aberto foi descontinuado.
Em vez disso, forneça o último diretório aberto explicitamente.

Passar inteiros fora do intervalo `[0, 255]` para [chr()](function.chr.md)
agora foi descontinuado.
Isso ocorre porque um byte só pode armazenar um valor dentro desse intervalo.

Passar uma string que não seja um único byte para [ord()](function.ord.md)
agora foi descontinuado, isso indica um bug.

A variável predefinida localmente
[$http\_response\_header](reserved.variables.httpresponseheader.md)
foi descontinuada. Em vez disso, deve-se chamar a função
[http\_get\_last\_response\_headers()](function.http-get-last-response-headers.md).

### XML

A função [xml\_parser\_free()](function.xml-parser-free.md) foi descontinuada,
pois os objetos [XMLParser](class.xmlparser.md) são liberados automaticamente.

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
