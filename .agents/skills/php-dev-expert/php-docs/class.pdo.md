# A classe PDO

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.pdo.php

---

# A classe PDO

(PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0)

## Introdução

Representa uma conexão entre o PHP e um servidor de banco de dados.

## Resumo da classe

class ****PDO****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[PARAM\_NULL](pdo.constants.md#pdo.constants.param-null);

public
const
[int](language.types.integer.md)
[PARAM\_BOOL](pdo.constants.md#pdo.constants.param-bool) = 5;

public
const
[int](language.types.integer.md)
[PARAM\_INT](pdo.constants.md#pdo.constants.param-int) = 1;

public
const
[int](language.types.integer.md)
[PARAM\_STR](pdo.constants.md#pdo.constants.param-str) = 2;

public
const
[int](language.types.integer.md)
[PARAM\_LOB](pdo.constants.md#pdo.constants.param-lob) = 3;

public
const
[int](language.types.integer.md)
[PARAM\_STMT](pdo.constants.md#pdo.constants.param-stmt) = 4;

public
const
[int](language.types.integer.md)
[PARAM\_INPUT\_OUTPUT](pdo.constants.md#pdo.constants.param-input-output);

public
const
[int](language.types.integer.md)
[PARAM\_STR\_NATL](pdo.constants.md#pdo.constants.param-str-natl);

public
const
[int](language.types.integer.md)
[PARAM\_STR\_CHAR](pdo.constants.md#pdo.constants.param-str-char);

public
const
[int](language.types.integer.md)
[PARAM\_EVT\_ALLOC](pdo.constants.md#pdo.constants.param-evt-alloc);

public
const
[int](language.types.integer.md)
[PARAM\_EVT\_FREE](pdo.constants.md#pdo.constants.param-evt-free);

public
const
[int](language.types.integer.md)
[PARAM\_EVT\_EXEC\_PRE](pdo.constants.md#pdo.constants.param-evt-exec-pre);

public
const
[int](language.types.integer.md)
[PARAM\_EVT\_EXEC\_POST](pdo.constants.md#pdo.constants.param-evt-exec-post);

public
const
[int](language.types.integer.md)
[PARAM\_EVT\_FETCH\_PRE](pdo.constants.md#pdo.constants.param-evt-fetch-pre);

public
const
[int](language.types.integer.md)
[PARAM\_EVT\_FETCH\_POST](pdo.constants.md#pdo.constants.param-evt-fetch-post);

public
const
[int](language.types.integer.md)
[PARAM\_EVT\_NORMALIZE](pdo.constants.md#pdo.constants.param-evt-normalize);

public
const
[int](language.types.integer.md)
[FETCH\_DEFAULT](pdo.constants.fetch-modes.md#pdo.constants.fetch-default);

public
const
[int](language.types.integer.md)
[FETCH\_LAZY](pdo.constants.fetch-modes.md#pdo.constants.fetch-lazy);

public
const
[int](language.types.integer.md)
[FETCH\_ASSOC](pdo.constants.fetch-modes.md#pdo.constants.fetch-assoc);

public
const
[int](language.types.integer.md)
[FETCH\_NUM](pdo.constants.fetch-modes.md#pdo.constants.fetch-num);

public
const
[int](language.types.integer.md)
[FETCH\_BOTH](pdo.constants.fetch-modes.md#pdo.constants.fetch-both);

public
const
[int](language.types.integer.md)
[FETCH\_OBJ](pdo.constants.fetch-modes.md#pdo.constants.fetch-obj);

public
const
[int](language.types.integer.md)
[FETCH\_BOUND](pdo.constants.fetch-modes.md#pdo.constants.fetch-bound);

public
const
[int](language.types.integer.md)
[FETCH\_COLUMN](pdo.constants.fetch-modes.md#pdo.constants.fetch-column);

public
const
[int](language.types.integer.md)
[FETCH\_CLASS](pdo.constants.fetch-modes.md#pdo.constants.fetch-class);

public
const
[int](language.types.integer.md)
[FETCH\_INTO](pdo.constants.fetch-modes.md#pdo.constants.fetch-into);

public
const
[int](language.types.integer.md)
[FETCH\_FUNC](pdo.constants.fetch-modes.md#pdo.constants.fetch-func);

public
const
[int](language.types.integer.md)
[FETCH\_GROUP](pdo.constants.fetch-modes.md#pdo.constants.fetch-group);

public
const
[int](language.types.integer.md)
[FETCH\_UNIQUE](pdo.constants.fetch-modes.md#pdo.constants.fetch-unique);

public
const
[int](language.types.integer.md)
[FETCH\_KEY\_PAIR](pdo.constants.fetch-modes.md#pdo.constants.fetch-key-pair);

public
const
[int](language.types.integer.md)
[FETCH\_CLASSTYPE](pdo.constants.fetch-modes.md#pdo.constants.fetch-classtype);

public
const
[int](language.types.integer.md)
[FETCH\_SERIALIZE](pdo.constants.fetch-modes.md#pdo.constants.fetch-serialize);

public
const
[int](language.types.integer.md)
[FETCH\_PROPS\_LATE](pdo.constants.fetch-modes.md#pdo.constants.fetch-props-late);

public
const
[int](language.types.integer.md)
[FETCH\_NAMED](pdo.constants.fetch-modes.md#pdo.constants.fetch-named);

public
const
[int](language.types.integer.md)
[ATTR\_AUTOCOMMIT](pdo.constants.md#pdo.constants.attr-autocommit);

public
const
[int](language.types.integer.md)
[ATTR\_PREFETCH](pdo.constants.md#pdo.constants.attr-prefetch);

public
const
[int](language.types.integer.md)
[ATTR\_TIMEOUT](pdo.constants.md#pdo.constants.attr-timeout);

public
const
[int](language.types.integer.md)
[ATTR\_ERRMODE](pdo.constants.md#pdo.constants.attr-errmode);

public
const
[int](language.types.integer.md)
[ATTR\_SERVER\_VERSION](pdo.constants.md#pdo.constants.attr-server-version);

public
const
[int](language.types.integer.md)
[ATTR\_CLIENT\_VERSION](pdo.constants.md#pdo.constants.attr-client-version);

public
const
[int](language.types.integer.md)
[ATTR\_SERVER\_INFO](pdo.constants.md#pdo.constants.attr-server-info);

public
const
[int](language.types.integer.md)
[ATTR\_CONNECTION\_STATUS](pdo.constants.md#pdo.constants.attr-connection-status);

public
const
[int](language.types.integer.md)
[ATTR\_CASE](pdo.constants.md#pdo.constants.attr-case);

public
const
[int](language.types.integer.md)
[ATTR\_CURSOR\_NAME](pdo.constants.md#pdo.constants.attr-cursor-name);

public
const
[int](language.types.integer.md)
[ATTR\_CURSOR](pdo.constants.md#pdo.constants.attr-cursor);

public
const
[int](language.types.integer.md)
[ATTR\_ORACLE\_NULLS](pdo.constants.md#pdo.constants.attr-oracle-nulls);

public
const
[int](language.types.integer.md)
[ATTR\_PERSISTENT](pdo.constants.md#pdo.constants.attr-persistent);

public
const
[int](language.types.integer.md)
[ATTR\_STATEMENT\_CLASS](pdo.constants.md#pdo.constants.attr-statement-class);

public
const
[int](language.types.integer.md)
[ATTR\_FETCH\_TABLE\_NAMES](pdo.constants.md#pdo.constants.attr-fetch-table-names);

public
const
[int](language.types.integer.md)
[ATTR\_FETCH\_CATALOG\_NAMES](pdo.constants.md#pdo.constants.attr-fetch-catalog-names);

public
const
[int](language.types.integer.md)
[ATTR\_DRIVER\_NAME](pdo.constants.md#pdo.constants.attr-driver-name);

public
const
[int](language.types.integer.md)
[ATTR\_STRINGIFY\_FETCHES](pdo.constants.md#pdo.constants.attr-stringify-fetches);

public
const
[int](language.types.integer.md)
[ATTR\_MAX\_COLUMN\_LEN](pdo.constants.md#pdo.constants.attr-max-column-len);

public
const
[int](language.types.integer.md)
[ATTR\_EMULATE\_PREPARES](pdo.constants.md#pdo.constants.attr-emulate-prepares);

public
const
[int](language.types.integer.md)
[ATTR\_DEFAULT\_FETCH\_MODE](pdo.constants.md#pdo.constants.attr-default-fetch-mode);

public
const
[int](language.types.integer.md)
[ATTR\_DEFAULT\_STR\_PARAM](pdo.constants.md#pdo.constants.attr-default-str-param);

public
const
[int](language.types.integer.md)
[ERRMODE\_SILENT](pdo.constants.md#pdo.constants.errmode-silent);

public
const
[int](language.types.integer.md)
[ERRMODE\_WARNING](pdo.constants.md#pdo.constants.errmode-warning);

public
const
[int](language.types.integer.md)
[ERRMODE\_EXCEPTION](pdo.constants.md#pdo.constants.errmode-exception);

public
const
[int](language.types.integer.md)
[CASE\_NATURAL](pdo.constants.md#pdo.constants.case-natural);

public
const
[int](language.types.integer.md)
[CASE\_LOWER](pdo.constants.md#pdo.constants.case-lower);

public
const
[int](language.types.integer.md)
[CASE\_UPPER](pdo.constants.md#pdo.constants.case-upper);

public
const
[int](language.types.integer.md)
[NULL\_NATURAL](pdo.constants.md#pdo.constants.null-natural);

public
const
[int](language.types.integer.md)
[NULL\_EMPTY\_STRING](pdo.constants.md#pdo.constants.null-empty-string);

public
const
[int](language.types.integer.md)
[NULL\_TO\_STRING](pdo.constants.md#pdo.constants.null-to-string);

public
const
[string](language.types.string.md)
[ERR\_NONE](pdo.constants.md#pdo.constants.err-none);

public
const
[int](language.types.integer.md)
[FETCH\_ORI\_NEXT](pdo.constants.md#pdo.constants.fetch-ori-next);

public
const
[int](language.types.integer.md)
[FETCH\_ORI\_PRIOR](pdo.constants.md#pdo.constants.fetch-ori-prior);

public
const
[int](language.types.integer.md)
[FETCH\_ORI\_FIRST](pdo.constants.md#pdo.constants.fetch-ori-first);

public
const
[int](language.types.integer.md)
[FETCH\_ORI\_LAST](pdo.constants.md#pdo.constants.fetch-ori-last);

public
const
[int](language.types.integer.md)
[FETCH\_ORI\_ABS](pdo.constants.md#pdo.constants.fetch-ori-abs);

public
const
[int](language.types.integer.md)
[FETCH\_ORI\_REL](pdo.constants.md#pdo.constants.fetch-ori-rel);

public
const
[int](language.types.integer.md)
[CURSOR\_FWDONLY](pdo.constants.md#pdo.constants.cursor-fwdonly);

public
const
[int](language.types.integer.md)
[CURSOR\_SCROLL](pdo.constants.md#pdo.constants.cursor-scroll);

/\* Métodos \*/

public function [\_\_construct](pdo.construct.md)(  
    [string](language.types.string.md) `$dsn`,  
    [?](language.types.null.md)[string](language.types.string.md) `$username` = **`null`**,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**  
)

public function [beginTransaction](pdo.begintransaction.md)(): [bool](language.types.boolean.md)

public function [commit](pdo.commit.md)(): [bool](language.types.boolean.md)

public static function [connect](pdo.connect.md)(  
    [string](language.types.string.md) `$dsn`,  
    [?](language.types.null.md)[string](language.types.string.md) `$username` = **`null`**,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**,  
    [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**  
): static

public function [errorCode](pdo.errorcode.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [errorInfo](pdo.errorinfo.md)(): [array](language.types.array.md)

public function [exec](pdo.exec.md)([string](language.types.string.md) `$statement`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getAttribute](pdo.getattribute.md)([int](language.types.integer.md) `$attribute`): [mixed](language.types.mixed.md)

public static function [getAvailableDrivers](pdo.getavailabledrivers.md)(): [array](language.types.array.md)

public function [inTransaction](pdo.intransaction.md)(): [bool](language.types.boolean.md)

public function [lastInsertId](pdo.lastinsertid.md)([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [prepare](pdo.prepare.md)([string](language.types.string.md) `$query`, [array](language.types.array.md) `$options` = []): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

public function [query](pdo.query.md)([string](language.types.string.md) `$query`, [?](language.types.null.md)[int](language.types.integer.md) `$fetchMode` = **`null`**): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

public function [query](pdo.query.md)([string](language.types.string.md) `$query`, [?](language.types.null.md)[int](language.types.integer.md) `$fetchMode` = PDO::FETCH\_COLUMN, [int](language.types.integer.md) `$colno`): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

public function [query](pdo.query.md)(  
    [string](language.types.string.md) `$query`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$fetchMode` = PDO::FETCH\_CLASS,  
    [string](language.types.string.md) `$classname`,  
    [array](language.types.array.md) `$constructorArgs`  
): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

public function [query](pdo.query.md)([string](language.types.string.md) `$query`, [?](language.types.null.md)[int](language.types.integer.md) `$fetchMode` = PDO::FETCH\_INTO, [object](language.types.object.md) `$object`): [PDOStatement](class.pdostatement.md)|[false](language.types.singleton.md)

public function [quote](pdo.quote.md)([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$type` = **`PDO::PARAM_STR`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [rollBack](pdo.rollback.md)(): [bool](language.types.boolean.md)

public function [setAttribute](pdo.setattribute.md)([int](language.types.integer.md) `$attribute`, [mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [PDO::beginTransaction](pdo.begintransaction.md) — Inicia uma transação
- [PDO::commit](pdo.commit.md) — Envia uma transação
- [PDO::connect](pdo.connect.md) — Conecta a um banco de dados e retorna uma subclasse PDO para drivers que o suportam
- [PDO::\_\_construct](pdo.construct.md) — Cria uma instância PDO representando uma conexão a um banco de dados
- [PDO::errorCode](pdo.errorcode.md) — Busca o SQLSTATE associado com a última operação no identificador do banco de dados
- [PDO::errorInfo](pdo.errorinfo.md) — Busca informação de erro estendida associada com a última operação no identificador do banco de dados
- [PDO::exec](pdo.exec.md) — Executa uma instrução SQL e retorna o número de linhas afetadas
- [PDO::getAttribute](pdo.getattribute.md) — Recuperar um atributo da conexão com o banco de dados
- [PDO::getAvailableDrivers](pdo.getavailabledrivers.md) — Retorna um array com os drivers PDO disponíveis
- [PDO::inTransaction](pdo.intransaction.md) — Verifica se está dentro de uma transação
- [PDO::lastInsertId](pdo.lastinsertid.md) — Retorna o ID da última linha ou valor de sequência inserido
- [PDO::prepare](pdo.prepare.md) — Prepara uma instrução para execução e retorna um objeto de instrução
- [PDO::query](pdo.query.md) — Prepara e executa uma instrução SQL sem marcadores
- [PDO::quote](pdo.quote.md) — Inclui aspas em uma string para uso em uma consulta
- [PDO::rollBack](pdo.rollback.md) — Reverte uma transação
- [PDO::setAttribute](pdo.setattribute.md) — Define um atributo

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
