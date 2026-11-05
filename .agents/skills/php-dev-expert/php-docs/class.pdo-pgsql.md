# A classe Pdo\Pgsql

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.pdo-pgsql.php

---

# A classe Pdo\Pgsql

(PHP 8 >= 8.4.0)

## Introdução

Uma subclasse [PDO](class.pdo.md) representando uma conexão que usa
o driver PDO PostgreSQL.

Este driver oferece suporte a um analisador de consulta SQL dedicado para o dialeto PostgreSQL.
Ele pode lidar com o seguinte:

- Literais entre aspas simples e duplas, com duplicação como mecanismo de escape
- Literais de string de “escape” estilo C
- Literais de string entre cifrões
- Comentários com dois traços e estilo C (não aninhados).
- Suporte para `??` como sequência de escape para o
  operador `?`.

> **Nota**:
>
> Como este analisador reconhece literais de string entre cifrões, os sinais
> de interrogação dentro deles não são tratados como marcadores de posição de parâmetro e não
> precisam ser escapados. A partir do PHP 8.4.0, escapar sinais de interrogação
> como `??` dentro de uma string entre cifrões foi descontinuado.

## Resumo da classe

namespace **Pdo**;

class ****Pgsql****
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
[ATTR\_DISABLE\_PREPARES](class.pdo-pgsql.md#pdo-pgsql.constants.attr-disable-prepares);

public
const
[int](language.types.integer.md)
[ATTR\_RESULT\_MEMORY\_SIZE](class.pdo-pgsql.md#pdo-pgsql.constants.attr-result-memory-size);

public
const
[int](language.types.integer.md)
[TRANSACTION\_IDLE](class.pdo-pgsql.md#pdo-pgsql.constants.transaction-idle);

public
const
[int](language.types.integer.md)
[TRANSACTION\_ACTIVE](class.pdo-pgsql.md#pdo-pgsql.constants.transaction-active);

public
const
[int](language.types.integer.md)
[TRANSACTION\_INTRANS](class.pdo-pgsql.md#pdo-pgsql.constants.transaction-intrans);

public
const
[int](language.types.integer.md)
[TRANSACTION\_INERROR](class.pdo-pgsql.md#pdo-pgsql.constants.transaction-inerror);

public
const
[int](language.types.integer.md)
[TRANSACTION\_UNKNOWN](class.pdo-pgsql.md#pdo-pgsql.constants.transaction-unknown);

/\* Métodos \*/

public function [copyFromArray](pdo-pgsql.copyfromarray.md)(  
    [string](language.types.string.md) `$tableName`,  
    [array](language.types.array.md)|[Traversable](class.traversable.md) `$rows`,  
    [string](language.types.string.md) `$separator` = "\t",  
    [string](language.types.string.md) `$nullAs` = "\\\\N",  
    [?](language.types.null.md)[string](language.types.string.md) `$fields` = **`null`**  
): [bool](language.types.boolean.md)

public function [copyFromFile](pdo-pgsql.copyfromfile.md)(  
    [string](language.types.string.md) `$tableName`,  
    [string](language.types.string.md) `$filename`,  
    [string](language.types.string.md) `$separator` = "\t",  
    [string](language.types.string.md) `$nullAs` = "\\\\N",  
    [?](language.types.null.md)[string](language.types.string.md) `$fields` = **`null`**  
): [bool](language.types.boolean.md)

public function [copyToArray](pdo-pgsql.copytoarray.md)(  
    [string](language.types.string.md) `$tableName`,  
    [string](language.types.string.md) `$separator` = "\t",  
    [string](language.types.string.md) `$nullAs` = "\\\\N",  
    [?](language.types.null.md)[string](language.types.string.md) `$fields` = **`null`**  
): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [copyToFile](pdo-pgsql.copytofile.md)(  
    [string](language.types.string.md) `$tableName`,  
    [string](language.types.string.md) `$filename`,  
    [string](language.types.string.md) `$separator` = "\t",  
    [string](language.types.string.md) `$nullAs` = "\\\\N",  
    [?](language.types.null.md)[string](language.types.string.md) `$fields` = **`null`**  
): [bool](language.types.boolean.md)

public function [escapeIdentifier](pdo-pgsql.escapeidentifier.md)([string](language.types.string.md) `$input`): [string](language.types.string.md)

public function [getNotify](pdo-pgsql.getnotify.md)([int](language.types.integer.md) `$fetchMode` = **`PDO::FETCH_DEFAULT`**, [int](language.types.integer.md) `$timeoutMilliseconds` = 0): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [getPid](pdo-pgsql.getpid.md)(): [int](language.types.integer.md)

public function [lobCreate](pdo-pgsql.lobcreate.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [lobOpen](pdo-pgsql.lobopen.md)([string](language.types.string.md) `$oid`, [string](language.types.string.md) `$mode` = "rb"): [resource](language.types.resource.md)|[false](language.types.singleton.md)

public function [lobUnlink](pdo-pgsql.lobunlink.md)([string](language.types.string.md) `$oid`): [bool](language.types.boolean.md)

public function [setNoticeCallback](pdo-pgsql.setnoticecallback.md)([?](language.types.null.md)[callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

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

**`Pdo\Pgsql::ATTR_DISABLE_PREPARES`**
:   Envia a consulta e os parâmetros ao servidor juntos em uma única chamada,
    evitando a necessidade de criar uma instrução preparada nomeada separadamente.
    Se a consulta for executada apenas uma vez, isso poderá reduzir a latência,
    evitando uma viagem de ida e volta desnecessária ao servidor.

**`Pdo\Pgsql::ATTR_RESULT_MEMORY_SIZE`**
:   Retorna a quantidade de memória, em bytes, alocada para a instância
    especificada do resultado da consulta [PDOStatement](class.pdostatement.md)
    ou **`null`** se não existirem resultados antes da consulta ser executada.

**`PDO::ATTR_PREFETCH`**
:   A partir do PHP 8.5.0, definir este atributo como `0` habilita
    a busca lenta (linha única): as linhas são recuperadas do servidor uma de cada vez
    à medida que são buscadas, em vez de armazenar em buffer todo o conjunto de resultados na
    memória antes da primeira chamada a [PDOStatement::fetch()](pdostatement.fetch.md).
    Isso reduz o uso de memória para conjuntos grandes de resultados. Qualquer outro valor
    mantém o comportamento padrão de buffer.

    Pode ser definido para cada conexão com [PDO::setAttribute()](pdo.setattribute.md),
    ou por instrução através das opções de driver
    [PDO::prepare()](pdo.prepare.md) ou
    [PDO::query()](pdo.query.md).

    **Cuidado**

    No modo lento, uma conexão pode ter apenas uma instrução ativa por vez.
    A execução de outra instrução descarta silenciosamente quaisquer linhas não
    lidas da anterior; nenhum erro é gerado.

**`Pdo\Pgsql::TRANSACTION_IDLE`**
:   **Aviso**

    Esta constante não tem efeito e foi descontinuada a partir do PHP 8.5.0.

**`Pdo\Pgsql::TRANSACTION_ACTIVE`**
:   **Aviso**

    Esta constante não tem efeito e foi descontinuada a partir do PHP 8.5.0.

**`Pdo\Pgsql::TRANSACTION_INTRANS`**
:   **Aviso**

    Esta constante não tem efeito e foi descontinuada a partir do PHP 8.5.0.

**`Pdo\Pgsql::TRANSACTION_INERROR`**
:   **Aviso**

    Esta constante não tem efeito e foi descontinuada a partir do PHP 8.5.0.

**`Pdo\Pgsql::TRANSACTION_UNKNOWN`**
:   **Aviso**

    Esta constante não tem efeito e foi descontinuada a partir do PHP 8.5.0.

## Índice

- [Pdo\Pgsql::copyFromArray](pdo-pgsql.copyfromarray.md) — Copia dados de um array PHP para uma tabela
- [Pdo\Pgsql::copyFromFile](pdo-pgsql.copyfromfile.md) — Copia dados do arquivo para a tabela
- [Pdo\Pgsql::copyToArray](pdo-pgsql.copytoarray.md) — Copia dados da tabela do banco de dados para o array PHP
- [Pdo\Pgsql::copyToFile](pdo-pgsql.copytofile.md) — Copia dados da tabela para arquivo
- [Pdo\Pgsql::escapeIdentifier](pdo-pgsql.escapeidentifier.md) — Escapa uma string para uso como identificador SQL
- [Pdo\Pgsql::getNotify](pdo-pgsql.getnotify.md) — Recebe notificação assíncrona
- [Pdo\Pgsql::getPid](pdo-pgsql.getpid.md) — Obtém o PID do processo subjacente que trata esta conexão
- [Pdo\Pgsql::lobCreate](pdo-pgsql.lobcreate.md) — Cria um novo objeto grande
- [Pdo\Pgsql::lobOpen](pdo-pgsql.lobopen.md) — Abre um fluxo de objetos grandes existente
- [Pdo\Pgsql::lobUnlink](pdo-pgsql.lobunlink.md) — Exclui o objeto grande
- [Pdo\Pgsql::setNoticeCallback](pdo-pgsql.setnoticecallback.md) — Define um retorno de chamada para lidar com mensagens de alerta e de aviso geradas pelo back-end

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
