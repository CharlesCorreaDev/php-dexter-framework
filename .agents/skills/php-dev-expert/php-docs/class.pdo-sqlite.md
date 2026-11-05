# A classe Pdo\Sqlite

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.pdo-sqlite.php

---

# A classe Pdo\Sqlite

(PHP 8 >= 8.4.0)

## Introdução

Uma subclasse [PDO](class.pdo.md) representando uma conexão que usa
o driver PDO SQLite.

Este driver suporta um analisador de consulta SQL dedicado para o dialeto SQLite.
Pode lidar com:

- Literais entre aspas simples, duplas, e acentos graves, com a duplicação como mecanismo de escape.
- Identificadores envolvidos por colchetes.
- Comentários com dois hífens ou no estilo C (não aninhados).

## Resumo da classe

class ****Pdo\Sqlite****
extends
[PDO](class.pdo.md)
{

/\* Constantes herdadas \*/

public
const
[int](language.types.integer.md)
[PDO::PARAM\_NULL](pdo.constants.md#pdo.constants.param-null);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_BOOL](pdo.constants.md#pdo.constants.param-bool) = 5;

public
const
[int](language.types.integer.md)
[PDO::PARAM\_INT](pdo.constants.md#pdo.constants.param-int) = 1;

public
const
[int](language.types.integer.md)
[PDO::PARAM\_STR](pdo.constants.md#pdo.constants.param-str) = 2;

public
const
[int](language.types.integer.md)
[PDO::PARAM\_LOB](pdo.constants.md#pdo.constants.param-lob) = 3;

public
const
[int](language.types.integer.md)
[PDO::PARAM\_STMT](pdo.constants.md#pdo.constants.param-stmt) = 4;

public
const
[int](language.types.integer.md)
[PDO::PARAM\_INPUT\_OUTPUT](pdo.constants.md#pdo.constants.param-input-output);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_STR\_NATL](pdo.constants.md#pdo.constants.param-str-natl);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_STR\_CHAR](pdo.constants.md#pdo.constants.param-str-char);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_EVT\_ALLOC](pdo.constants.md#pdo.constants.param-evt-alloc);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_EVT\_FREE](pdo.constants.md#pdo.constants.param-evt-free);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_EVT\_EXEC\_PRE](pdo.constants.md#pdo.constants.param-evt-exec-pre);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_EVT\_EXEC\_POST](pdo.constants.md#pdo.constants.param-evt-exec-post);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_EVT\_FETCH\_PRE](pdo.constants.md#pdo.constants.param-evt-fetch-pre);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_EVT\_FETCH\_POST](pdo.constants.md#pdo.constants.param-evt-fetch-post);

public
const
[int](language.types.integer.md)
[PDO::PARAM\_EVT\_NORMALIZE](pdo.constants.md#pdo.constants.param-evt-normalize);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_DEFAULT](pdo.constants.fetch-modes.md#pdo.constants.fetch-default);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_LAZY](pdo.constants.fetch-modes.md#pdo.constants.fetch-lazy);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_ASSOC](pdo.constants.fetch-modes.md#pdo.constants.fetch-assoc);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_NUM](pdo.constants.fetch-modes.md#pdo.constants.fetch-num);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_BOTH](pdo.constants.fetch-modes.md#pdo.constants.fetch-both);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_OBJ](pdo.constants.fetch-modes.md#pdo.constants.fetch-obj);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_BOUND](pdo.constants.fetch-modes.md#pdo.constants.fetch-bound);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_COLUMN](pdo.constants.fetch-modes.md#pdo.constants.fetch-column);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_CLASS](pdo.constants.fetch-modes.md#pdo.constants.fetch-class);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_INTO](pdo.constants.fetch-modes.md#pdo.constants.fetch-into);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_FUNC](pdo.constants.fetch-modes.md#pdo.constants.fetch-func);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_GROUP](pdo.constants.fetch-modes.md#pdo.constants.fetch-group);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_UNIQUE](pdo.constants.fetch-modes.md#pdo.constants.fetch-unique);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_KEY\_PAIR](pdo.constants.fetch-modes.md#pdo.constants.fetch-key-pair);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_CLASSTYPE](pdo.constants.fetch-modes.md#pdo.constants.fetch-classtype);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_SERIALIZE](pdo.constants.fetch-modes.md#pdo.constants.fetch-serialize);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_PROPS\_LATE](pdo.constants.fetch-modes.md#pdo.constants.fetch-props-late);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_NAMED](pdo.constants.fetch-modes.md#pdo.constants.fetch-named);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_AUTOCOMMIT](pdo.constants.md#pdo.constants.attr-autocommit);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_PREFETCH](pdo.constants.md#pdo.constants.attr-prefetch);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_TIMEOUT](pdo.constants.md#pdo.constants.attr-timeout);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_ERRMODE](pdo.constants.md#pdo.constants.attr-errmode);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_SERVER\_VERSION](pdo.constants.md#pdo.constants.attr-server-version);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_CLIENT\_VERSION](pdo.constants.md#pdo.constants.attr-client-version);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_SERVER\_INFO](pdo.constants.md#pdo.constants.attr-server-info);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_CONNECTION\_STATUS](pdo.constants.md#pdo.constants.attr-connection-status);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_CASE](pdo.constants.md#pdo.constants.attr-case);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_CURSOR\_NAME](pdo.constants.md#pdo.constants.attr-cursor-name);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_CURSOR](pdo.constants.md#pdo.constants.attr-cursor);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_ORACLE\_NULLS](pdo.constants.md#pdo.constants.attr-oracle-nulls);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_PERSISTENT](pdo.constants.md#pdo.constants.attr-persistent);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_STATEMENT\_CLASS](pdo.constants.md#pdo.constants.attr-statement-class);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_FETCH\_TABLE\_NAMES](pdo.constants.md#pdo.constants.attr-fetch-table-names);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_FETCH\_CATALOG\_NAMES](pdo.constants.md#pdo.constants.attr-fetch-catalog-names);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_DRIVER\_NAME](pdo.constants.md#pdo.constants.attr-driver-name);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_STRINGIFY\_FETCHES](pdo.constants.md#pdo.constants.attr-stringify-fetches);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_MAX\_COLUMN\_LEN](pdo.constants.md#pdo.constants.attr-max-column-len);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_EMULATE\_PREPARES](pdo.constants.md#pdo.constants.attr-emulate-prepares);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_DEFAULT\_FETCH\_MODE](pdo.constants.md#pdo.constants.attr-default-fetch-mode);

public
const
[int](language.types.integer.md)
[PDO::ATTR\_DEFAULT\_STR\_PARAM](pdo.constants.md#pdo.constants.attr-default-str-param);

public
const
[int](language.types.integer.md)
[PDO::ERRMODE\_SILENT](pdo.constants.md#pdo.constants.errmode-silent);

public
const
[int](language.types.integer.md)
[PDO::ERRMODE\_WARNING](pdo.constants.md#pdo.constants.errmode-warning);

public
const
[int](language.types.integer.md)
[PDO::ERRMODE\_EXCEPTION](pdo.constants.md#pdo.constants.errmode-exception);

public
const
[int](language.types.integer.md)
[PDO::CASE\_NATURAL](pdo.constants.md#pdo.constants.case-natural);

public
const
[int](language.types.integer.md)
[PDO::CASE\_LOWER](pdo.constants.md#pdo.constants.case-lower);

public
const
[int](language.types.integer.md)
[PDO::CASE\_UPPER](pdo.constants.md#pdo.constants.case-upper);

public
const
[int](language.types.integer.md)
[PDO::NULL\_NATURAL](pdo.constants.md#pdo.constants.null-natural);

public
const
[int](language.types.integer.md)
[PDO::NULL\_EMPTY\_STRING](pdo.constants.md#pdo.constants.null-empty-string);

public
const
[int](language.types.integer.md)
[PDO::NULL\_TO\_STRING](pdo.constants.md#pdo.constants.null-to-string);

public
const
[string](language.types.string.md)
[PDO::ERR\_NONE](pdo.constants.md#pdo.constants.err-none);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_ORI\_NEXT](pdo.constants.md#pdo.constants.fetch-ori-next);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_ORI\_PRIOR](pdo.constants.md#pdo.constants.fetch-ori-prior);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_ORI\_FIRST](pdo.constants.md#pdo.constants.fetch-ori-first);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_ORI\_LAST](pdo.constants.md#pdo.constants.fetch-ori-last);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_ORI\_ABS](pdo.constants.md#pdo.constants.fetch-ori-abs);

public
const
[int](language.types.integer.md)
[PDO::FETCH\_ORI\_REL](pdo.constants.md#pdo.constants.fetch-ori-rel);

public
const
[int](language.types.integer.md)
[PDO::CURSOR\_FWDONLY](pdo.constants.md#pdo.constants.cursor-fwdonly);

public
const
[int](language.types.integer.md)
[PDO::CURSOR\_SCROLL](pdo.constants.md#pdo.constants.cursor-scroll);

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[DETERMINISTIC](class.pdo-sqlite.md#pdo-sqlite.constants.deterministic);

public
const
[int](language.types.integer.md)
[OPEN\_READONLY](class.pdo-sqlite.md#pdo-sqlite.constants.open-readonly);

public
const
[int](language.types.integer.md)
[OPEN\_READWRITE](class.pdo-sqlite.md#pdo-sqlite.constants.open-readwrite);

public
const
[int](language.types.integer.md)
[OPEN\_CREATE](class.pdo-sqlite.md#pdo-sqlite.constants.open-create);

public
const
[int](language.types.integer.md)
[ATTR\_OPEN\_FLAGS](class.pdo-sqlite.md#pdo-sqlite.constants.attr-open-flags);

public
const
[int](language.types.integer.md)
[ATTR\_READONLY\_STATEMENT](class.pdo-sqlite.md#pdo-sqlite.constants.attr-readonly-statement);

public
const
[int](language.types.integer.md)
[ATTR\_EXTENDED\_RESULT\_CODES](class.pdo-sqlite.md#pdo-sqlite.constants.attr-extended-result-codes);

/\* Métodos \*/

public function [createAggregate](pdo-sqlite.createaggregate.md)(  
    [string](language.types.string.md) `$name`,  
    [callable](language.types.callable.md) `$step`,  
    [callable](language.types.callable.md) `$finalize`,  
    [int](language.types.integer.md) `$numArgs` = -1  
): [bool](language.types.boolean.md)

public function [createCollation](pdo-sqlite.createcollation.md)([string](language.types.string.md) `$name`, [callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

public function [createFunction](pdo-sqlite.createfunction.md)(  
    [string](language.types.string.md) `$function_name`,  
    [callable](language.types.callable.md) `$callback`,  
    [int](language.types.integer.md) `$num_args` = -1,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

public function [loadExtension](pdo-sqlite.loadextension.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [openBlob](pdo-sqlite.openblob.md)(  
    [string](language.types.string.md) `$table`,  
    [string](language.types.string.md) `$column`,  
    [int](language.types.integer.md) `$rowid`,  
    [?](language.types.null.md)[string](language.types.string.md) `$dbname` = "main",  
    [int](language.types.integer.md) `$flags` = **`Pdo\Sqlite::OPEN_READONLY`**  
): [resource](language.types.resource.md)|[false](language.types.singleton.md)

public function [setAuthorizer](pdo-sqlite.setauthorizer.md)([?](language.types.null.md)[callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

/\* Métodos herdados \*/

public function [PDO::\_\_construct](pdo.construct.md)(  
    [string](language.types.string.md) `$dsn`,  
    [?](language.types.null.md)[string](language.types.string.md) `$username` = **`null`**,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**  
)

public function [PDO::beginTransaction](pdo.begintransaction.md)(): [bool](language.types.boolean.md)

public function [PDO::commit](pdo.commit.md)(): [bool](language.types.boolean.md)

public static function [PDO::connect](pdo.connect.md)(  
    [string](language.types.string.md) `$dsn`,  
    [?](language.types.null.md)[string](language.types.string.md) `$username` = **`null`**,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**  
): static

public function [PDO::errorCode](pdo.errorcode.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [PDO::errorInfo](pdo.errorinfo.md)(): [array](language.types.array.md)

public function [PDO::exec](pdo.exec.md)([string](language.types.string.md) `$statement`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [PDO::getAttribute](pdo.getattribute.md)([int](language.types.integer.md) `$attribute`): [mixed](language.types.mixed.md)

public static function [PDO::getAvailableDrivers](pdo.getavailabledrivers.md)(): [array](language.types.array.md)

public function [PDO::inTransaction](pdo.intransaction.md)(): [bool](language.types.boolean.md)

public function [PDO::lastInsertId](pdo.lastinsertid.md)([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [PDO::prepare](pdo.prepare.md)([string](language.types.string.md) `$query`, [array](language.types.array.md) `$options` = []): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

public function [PDO::query](pdo.query.md)([string](language.types.string.md) `$query`, [?](language.types.null.md)[int](language.types.integer.md) `$fetchMode` = **`null`**): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

public function [PDO::query](pdo.query.md)([string](language.types.string.md) `$query`, [?](language.types.null.md)[int](language.types.integer.md) `$fetchMode` = PDO::FETCH\_COLUMN, [int](language.types.integer.md) `$colno`): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

public function [PDO::query](pdo.query.md)(  
    [string](language.types.string.md) `$query`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$fetchMode` = PDO::FETCH\_CLASS,  
    [string](language.types.string.md) `$classname`,  
    [array](language.types.array.md) `$constructorArgs`  
): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

public function [PDO::query](pdo.query.md)([string](language.types.string.md) `$query`, [?](language.types.null.md)[int](language.types.integer.md) `$fetchMode` = PDO::FETCH\_INTO, [object](language.types.object.md) `$object`): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

public function [PDO::quote](pdo.quote.md)([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$type` = **`PDO::PARAM_STR`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [PDO::rollBack](pdo.rollback.md)(): [bool](language.types.boolean.md)

public function [PDO::setAttribute](pdo.setattribute.md)([int](language.types.integer.md) `$attribute`, [mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`Pdo\Sqlite::DETERMINISTIC`**

**`Pdo\Sqlite::OPEN_READONLY`**

**`Pdo\Sqlite::OPEN_READWRITE`**

**`Pdo\Sqlite::OPEN_CREATE`**

**`Pdo\Sqlite::ATTR_OPEN_FLAGS`**

**`Pdo\Sqlite::ATTR_READONLY_STATEMENT`**

**`Pdo\Sqlite::ATTR_EXTENDED_RESULT_CODES`**

## Índice

- [Pdo\Sqlite::createAggregate](pdo-sqlite.createaggregate.md) — Registra uma função de agregação definida pelo usuário para uso em instruções SQL
- [Pdo\Sqlite::createCollation](pdo-sqlite.createcollation.md) — Registra uma função definida pelo usuário para uso como função de agrupamento em instruções SQL
- [Pdo\Sqlite::createFunction](pdo-sqlite.createfunction.md) — Registra uma função definida pelo usuário para uso em instruções SQL
- [Pdo\Sqlite::loadExtension](pdo-sqlite.loadextension.md) — Carrega extensão
- [Pdo\Sqlite::openBlob](pdo-sqlite.openblob.md) — Abre Blob
- [Pdo\Sqlite::setAuthorizer](pdo-sqlite.setauthorizer.md) — Configures a callback to be used as an authorizer to limit what a statement can do

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
