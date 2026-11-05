# Driver PDO do PostgreSQL (PDO_PGSQL)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-pgsql.php

---

# Driver PDO do PostgreSQL (PDO\_PGSQL)

## Introdução

PDO\_PGSQL é um driver que implementa a [interface
PHP Data Objects (PDO)](book.pdo.md#intro.pdo)
para permitir o acesso do PHP aos bancos de dados PostgreSQL.

## Tipos de Recurso

Esta extensão define um recurso de fluxo retornado por
[Pdo\Pgsql::lobOpen()](pdo-pgsql.lobopen.md).

## Instalação

Use **--with-pdo-pgsql[=DIR]** para instalar
a extensão PDO PostgreSQL, onde o opcional `[=DIR]`
é o diretório base de instalação do PostgreSQL ou o caminho para *pg\_config*.

```
$ ./configure --with-pdo-pgsql
```

Esta extensão requer libpq (a biblioteca cliente C do PostgreSQL).
A partir do PHP 8.4.0, libpq 10.0 ou superior é exigido.

## Constantes predefinidas

As constantes abaixo são definidas por
este driver e só estarão disponíveis quando a extensão tiver sido
compilada no PHP ou tiver sido carregada dinamicamente em tempo de execução. Além disso, estas
constantes específicas do driver só devem ser usadas se este driver estiver sendo usado.
Usar atributos específicos de um driver com outro driver pode resultar em
comportamento inesperado. [PDO::getAttribute()](pdo.getattribute.md) pode ser usada para
obter o atributo **`PDO::ATTR_DRIVER_NAME`** para verificar o
driver, se o código puder ser executado com vários drivers.

**`PDO::PGSQL_ATTR_DISABLE_PREPARES`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Pgsql::ATTR_DISABLE_PREPARES`**.
    A partir do PHP 8.5.0, esta constante está descontinuada.

**`PDO::PGSQL_TRANSACTION_IDLE`** ([int](language.types.integer.md))
:   Equivalente a **`Pdo\Pgsql::TRANSACTION_IDLE`**.
    A partir do PHP 8.5.0, esta constante está descontinuada, pois não tem efeito.

**`PDO::PGSQL_TRANSACTION_ACTIVE`** ([int](language.types.integer.md))
:   Equivalente a **`Pdo\Pgsql::TRANSACTION_ACTIVE`**.
    A partir do PHP 8.5.0, esta constante está descontinuada, pois não tem efeito.

**`PDO::PGSQL_TRANSACTION_INTRANS`** ([int](language.types.integer.md))
:   Equivalente a **`Pdo\Pgsql::TRANSACTION_INTRANS`**.
    A partir do PHP 8.5.0, esta constante está descontinuada, pois não tem efeito.

**`PDO::PGSQL_TRANSACTION_INERROR`** ([int](language.types.integer.md))
:   Equivalente a **`Pdo\Pgsql::TRANSACTION_INERROR`**.
    A partir do PHP 8.5.0, esta constante está descontinuada, pois não tem efeito.

**`PDO::PGSQL_TRANSACTION_UNKNOWN`** ([int](language.types.integer.md))
:   Equivalente a **`Pdo\Pgsql::TRANSACTION_UNKNOWN`**.
    A partir do PHP 8.5.0, esta constante está descontinuada, pois não tem efeito.

## Notas gerais

> **Nota**:
>
> As colunas `bytea` são retornadas como recursos de fluxo. Consulte
> [Objetos Grandes (LOBs)](pdo.lobs.md) para entender como é a leitura destes
> valores e como vincular dados com **`PDO::PARAM_LOB`**.

## Índice

- [PDO\_PGSQL DSN](ref.pdo-pgsql.connection.md) — Conectando-se a bancos de dados PostgreSQL
- [PDO::pgsqlCopyFromArray](pdo.pgsqlcopyfromarray.md) — Sinônimo de Pdo\Pgsql::copyFromArray
- [PDO::pgsqlCopyFromFile](pdo.pgsqlcopyfromfile.md) — Sinônimo de Pdo\Pgsql::copyFromFile
- [PDO::pgsqlCopyToArray](pdo.pgsqlcopytoarray.md) — Sinônimo de Pdo\Pgsql::copyToArray
- [PDO::pgsqlCopyToFile](pdo.pgsqlcopytofile.md) — Sinônimo de Pdo\Pgsql::copyToFile
- [PDO::pgsqlGetNotify](pdo.pgsqlgetnotify.md) — Sinônimo de Pdo\Pgsql::getNotify
- [PDO::pgsqlGetPid](pdo.pgsqlgetpid.md) — Sinônimo de Pdo\Pgsql::getPid
- [PDO::pgsqlLOBCreate](pdo.pgsqllobcreate.md) — Sinônimo de Pdo\Pgsql::lobCreate
- [PDO::pgsqlLOBOpen](pdo.pgsqllobopen.md) — Sinônimo de Pdo\Pgsql::lobOpen
- [PDO::pgsqlLOBUnlink](pdo.pgsqllobunlink.md) — Sinônimo de Pdo\Pgsql::lobUnlink

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
