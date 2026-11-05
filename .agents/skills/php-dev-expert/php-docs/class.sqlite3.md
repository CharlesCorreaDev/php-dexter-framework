# A classe SQLite3

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.sqlite3.php

---

# A classe SQLite3

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

## Introdução

Uma classe que interage com bancos de dados SQLite 3.

## Resumo da classe

class ****SQLite3****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[OK](class.sqlite3.md#sqlite3.constants.ok);

public
const
[int](language.types.integer.md)
[DENY](class.sqlite3.md#sqlite3.constants.deny);

public
const
[int](language.types.integer.md)
[IGNORE](class.sqlite3.md#sqlite3.constants.ignore);

public
const
[int](language.types.integer.md)
[CREATE\_INDEX](class.sqlite3.md#sqlite3.constants.create-index);

public
const
[int](language.types.integer.md)
[CREATE\_TABLE](class.sqlite3.md#sqlite3.constants.create-table);

public
const
[int](language.types.integer.md)
[CREATE\_TEMP\_INDEX](class.sqlite3.md#sqlite3.constants.create-temp-index);

public
const
[int](language.types.integer.md)
[CREATE\_TEMP\_TABLE](class.sqlite3.md#sqlite3.constants.create-temp-table);

public
const
[int](language.types.integer.md)
[CREATE\_TEMP\_TRIGGER](class.sqlite3.md#sqlite3.constants.create-temp-trigger);

public
const
[int](language.types.integer.md)
[CREATE\_TEMP\_VIEW](class.sqlite3.md#sqlite3.constants.create-temp-view);

public
const
[int](language.types.integer.md)
[CREATE\_TRIGGER](class.sqlite3.md#sqlite3.constants.create-trigger);

public
const
[int](language.types.integer.md)
[CREATE\_VIEW](class.sqlite3.md#sqlite3.constants.create-view);

public
const
[int](language.types.integer.md)
[DELETE](class.sqlite3.md#sqlite3.constants.delete);

public
const
[int](language.types.integer.md)
[DROP\_INDEX](class.sqlite3.md#sqlite3.constants.drop-index);

public
const
[int](language.types.integer.md)
[DROP\_TABLE](class.sqlite3.md#sqlite3.constants.drop-table);

public
const
[int](language.types.integer.md)
[DROP\_TEMP\_INDEX](class.sqlite3.md#sqlite3.constants.drop-temp-index);

public
const
[int](language.types.integer.md)
[DROP\_TEMP\_TABLE](class.sqlite3.md#sqlite3.constants.drop-temp-table);

public
const
[int](language.types.integer.md)
[DROP\_TEMP\_TRIGGER](class.sqlite3.md#sqlite3.constants.drop-temp-trigger);

public
const
[int](language.types.integer.md)
[DROP\_TEMP\_VIEW](class.sqlite3.md#sqlite3.constants.drop-temp-view);

public
const
[int](language.types.integer.md)
[DROP\_TRIGGER](class.sqlite3.md#sqlite3.constants.drop-trigger);

public
const
[int](language.types.integer.md)
[DROP\_VIEW](class.sqlite3.md#sqlite3.constants.drop-view);

public
const
[int](language.types.integer.md)
[INSERT](class.sqlite3.md#sqlite3.constants.insert);

public
const
[int](language.types.integer.md)
[PRAGMA](class.sqlite3.md#sqlite3.constants.pragma);

public
const
[int](language.types.integer.md)
[READ](class.sqlite3.md#sqlite3.constants.read);

public
const
[int](language.types.integer.md)
[SELECT](class.sqlite3.md#sqlite3.constants.select);

public
const
[int](language.types.integer.md)
[TRANSACTION](class.sqlite3.md#sqlite3.constants.transaction);

public
const
[int](language.types.integer.md)
[UPDATE](class.sqlite3.md#sqlite3.constants.update);

public
const
[int](language.types.integer.md)
[ATTACH](class.sqlite3.md#sqlite3.constants.attach);

public
const
[int](language.types.integer.md)
[DETACH](class.sqlite3.md#sqlite3.constants.detach);

public
const
[int](language.types.integer.md)
[ALTER\_TABLE](class.sqlite3.md#sqlite3.constants.alter-table);

public
const
[int](language.types.integer.md)
[REINDEX](class.sqlite3.md#sqlite3.constants.reindex);

public
const
[int](language.types.integer.md)
[ANALYZE](class.sqlite3.md#sqlite3.constants.analyze);

public
const
[int](language.types.integer.md)
[CREATE\_VTABLE](class.sqlite3.md#sqlite3.constants.create-vtable);

public
const
[int](language.types.integer.md)
[DROP\_VTABLE](class.sqlite3.md#sqlite3.constants.drop-vtable);

public
const
[int](language.types.integer.md)
[FUNCTION](class.sqlite3.md#sqlite3.constants.function);

public
const
[int](language.types.integer.md)
[SAVEPOINT](class.sqlite3.md#sqlite3.constants.savepoint);

public
const
[int](language.types.integer.md)
[COPY](class.sqlite3.md#sqlite3.constants.copy);

public
const
[int](language.types.integer.md)
[RECURSIVE](class.sqlite3.md#sqlite3.constants.recursive);

/\* Métodos \*/

public function [\_\_construct](sqlite3.construct.md)([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = SQLITE3\_OPEN\_READWRITE | SQLITE3\_OPEN\_CREATE, [string](language.types.string.md) `$encryptionKey` = "")

public function [backup](sqlite3.backup.md)([SQLite3](class.sqlite3.md) `$destination`, [string](language.types.string.md) `$sourceDatabase` = "main", [string](language.types.string.md) `$destinationDatabase` = "main"): [bool](language.types.boolean.md)

public function [busyTimeout](sqlite3.busytimeout.md)([int](language.types.integer.md) `$milliseconds`): [bool](language.types.boolean.md)

public function [changes](sqlite3.changes.md)(): [int](language.types.integer.md)

public function [close](sqlite3.close.md)(): [bool](language.types.boolean.md)

public function [createAggregate](sqlite3.createaggregate.md)(  
    [string](language.types.string.md) `$name`,  
    [callable](language.types.callable.md) `$stepCallback`,  
    [callable](language.types.callable.md) `$finalCallback`,  
    [int](language.types.integer.md) `$argCount` = -1  
): [bool](language.types.boolean.md)

public function [createCollation](sqlite3.createcollation.md)([string](language.types.string.md) `$name`, [callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

public function [createFunction](sqlite3.createfunction.md)(  
    [string](language.types.string.md) `$name`,  
    [callable](language.types.callable.md) `$callback`,  
    [int](language.types.integer.md) `$argCount` = -1,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

public function [enableExceptions](sqlite3.enableexceptions.md)([bool](language.types.boolean.md) `$enable` = **`false`**): [bool](language.types.boolean.md)

public function [enableExtendedResultCodes](sqlite3.enableextendedresultcodes.md)([bool](language.types.boolean.md) `$enable` = **`true`**): [bool](language.types.boolean.md)

public static function [escapeString](sqlite3.escapestring.md)([string](language.types.string.md) `$string`): [string](language.types.string.md)

public function [exec](sqlite3.exec.md)([string](language.types.string.md) `$query`): [bool](language.types.boolean.md)

public function [lastErrorCode](sqlite3.lasterrorcode.md)(): [int](language.types.integer.md)

public function [lastErrorMsg](sqlite3.lasterrormsg.md)(): [string](language.types.string.md)

public function [lastExtendedErrorCode](sqlite3.lastextendederrorcode.md)(): [int](language.types.integer.md)

public function [lastInsertRowID](sqlite3.lastinsertrowid.md)(): [int](language.types.integer.md)

public function [loadExtension](sqlite3.loadextension.md)([string](language.types.string.md) `$name`): [bool](language.types.boolean.md)

public function [open](sqlite3.open.md)([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = SQLITE3\_OPEN\_READWRITE | SQLITE3\_OPEN\_CREATE, [string](language.types.string.md) `$encryptionKey` = ""): [void](language.types.void.md)

public function [openBlob](sqlite3.openblob.md)(  
    [string](language.types.string.md) `$table`,  
    [string](language.types.string.md) `$column`,  
    [int](language.types.integer.md) `$rowid`,  
    [string](language.types.string.md) `$database` = "main",  
    [int](language.types.integer.md) `$flags` = **`SQLITE3_OPEN_READONLY`**  
): [resource](language.types.resource.md)|[false](language.types.singleton.md)

public function [prepare](sqlite3.prepare.md)([string](language.types.string.md) `$query`): [SQLite3Stmt](class.sqlite3stmt.md)|[false](language.types.singleton.md)

public function [query](sqlite3.query.md)([string](language.types.string.md) `$query`): [SQLite3Result](class.sqlite3result.md)|[false](language.types.singleton.md)

public function [querySingle](sqlite3.querysingle.md)([string](language.types.string.md) `$query`, [bool](language.types.boolean.md) `$entireRow` = **`false`**): [mixed](language.types.mixed.md)

public function [setAuthorizer](sqlite3.setauthorizer.md)([?](language.types.null.md)[callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

public static function [version](sqlite3.version.md)(): [array](language.types.array.md)

}

## Constantes predefinidas

**`SQLite3::OK`**

**`SQLite3::DENY`**

**`SQLite3::IGNORE`**

**`SQLite3::CREATE_INDEX`**

**`SQLite3::CREATE_TABLE`**

**`SQLite3::CREATE_TEMP_INDEX`**

**`SQLite3::CREATE_TEMP_TABLE`**

**`SQLite3::CREATE_TEMP_TRIGGER`**

**`SQLite3::CREATE_TEMP_VIEW`**

**`SQLite3::CREATE_TRIGGER`**

**`SQLite3::CREATE_VIEW`**

**`SQLite3::DELETE`**

**`SQLite3::DROP_INDEX`**

**`SQLite3::DROP_TABLE`**

**`SQLite3::DROP_TEMP_INDEX`**

**`SQLite3::DROP_TEMP_TABLE`**

**`SQLite3::DROP_TEMP_TRIGGER`**

**`SQLite3::DROP_TEMP_VIEW`**

**`SQLite3::DROP_TRIGGER`**

**`SQLite3::DROP_VIEW`**

**`SQLite3::INSERT`**

**`SQLite3::PRAGMA`**

**`SQLite3::READ`**

**`SQLite3::SELECT`**

**`SQLite3::TRANSACTION`**

**`SQLite3::UPDATE`**

**`SQLite3::ATTACH`**

**`SQLite3::DETACH`**

**`SQLite3::ALTER_TABLE`**

**`SQLite3::REINDEX`**

**`SQLite3::ANALYZE`**

**`SQLite3::CREATE_VTABLE`**

**`SQLite3::DROP_VTABLE`**

**`SQLite3::FUNCTION`**

**`SQLite3::SAVEPOINT`**

**`SQLite3::COPY`**

**`SQLite3::RECURSIVE`**

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [SQLite3::backup](sqlite3.backup.md) — Copia um banco de dados para outro banco de dados
- [SQLite3::busyTimeout](sqlite3.busytimeout.md) — Define o manipulador de conexão ocupada
- [SQLite3::changes](sqlite3.changes.md) — Retorna o número de linhas do banco de dados que foram alteradas (ou inseridas ou
  excluídas) pela instrução SQL mais recente
- [SQLite3::close](sqlite3.close.md) — Fecha a conexão com o banco de dados
- [SQLite3::\_\_construct](sqlite3.construct.md) — Instancia um objeto SQLite3 e abre um banco de dados SQLite 3
- [SQLite3::createAggregate](sqlite3.createaggregate.md) — Registra uma função PHP para uso como uma função de agregação SQL
- [SQLite3::createCollation](sqlite3.createcollation.md) — Registra uma função PHP para uso como uma função de comparação de SQL
- [SQLite3::createFunction](sqlite3.createfunction.md) — Registra uma função PHP para uso como uma função escalar SQL
- [SQLite3::enableExceptions](sqlite3.enableexceptions.md) — Habilita o lançamento de exceções
- [SQLite3::enableExtendedResultCodes](sqlite3.enableextendedresultcodes.md) — Enables or disables the use of extended result codes
- [SQLite3::escapeString](sqlite3.escapestring.md) — Retorna uma string que foi devidamente escapada
- [SQLite3::exec](sqlite3.exec.md) — Executa uma consulta sem resultado em um determinado banco de dados
- [SQLite3::lastErrorCode](sqlite3.lasterrorcode.md) — Retorna o código de resultado numérico da última solicitação SQLite que falhou
- [SQLite3::lastErrorMsg](sqlite3.lasterrormsg.md) — Retorna o texto em inglês descrevendo a requisição SQLite mais recente que falhou
- [SQLite3::lastExtendedErrorCode](sqlite3.lastextendederrorcode.md) — Returns the numeric extended result code of the most recent failed
  SQLite request
- [SQLite3::lastInsertRowID](sqlite3.lastinsertrowid.md) — Retorna o ID da linha mais recentemente INSERIDA no banco de dados
- [SQLite3::loadExtension](sqlite3.loadextension.md) — Tenta carregar uma biblioteca de extensão do SQLite
- [SQLite3::open](sqlite3.open.md) — Abre um banco de dados SQLite
- [SQLite3::openBlob](sqlite3.openblob.md) — Abre um recurso de fluxo para ler um BLOB
- [SQLite3::prepare](sqlite3.prepare.md) — Prepara uma declaração SQL para execução
- [SQLite3::query](sqlite3.query.md) — Executa uma consulta SQL
- [SQLite3::querySingle](sqlite3.querysingle.md) — Executa uma consulta e retorna um único resultado
- [SQLite3::setAuthorizer](sqlite3.setauthorizer.md) — Configura um retorno de chamada a ser usado como um autorizador para limitar o que uma declaração pode fazer
- [SQLite3::version](sqlite3.version.md) — Retorna a versão da biblioteca SQLite3 como uma constante de string e como um número

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
