# A classe PDOStatement

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.pdostatement.php

---

# A classe PDOStatement

(PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 1.0.0)

## Introdução

Representa uma instrução preparada e, após a execução da instrução, um
conjunto de resultados associado.

## Resumo da classe

class ****PDOStatement****
implements
[IteratorAggregate](class.iteratoraggregate.md) {

/\* Propriedades \*/

public
[string](language.types.string.md)
[$queryString](class.pdostatement.md#pdostatement.props.querystring);

/\* Métodos \*/

public function [bindColumn](pdostatement.bindcolumn.md)(  
    [string](language.types.string.md)|[int](language.types.integer.md) `$column`,  
    [mixed](language.types.mixed.md) `&$var`,  
    [int](language.types.integer.md) `$type` = **`PDO::PARAM_STR`**,  
    [int](language.types.integer.md) `$maxLength` = 0,  
    [mixed](language.types.mixed.md) `$driverOptions` = **`null`**  
): [bool](language.types.boolean.md)

public function [bindParam](pdostatement.bindparam.md)(  
    [string](language.types.string.md)|[int](language.types.integer.md) `$param`,  
    [mixed](language.types.mixed.md) `&$var`,  
    [int](language.types.integer.md) `$type` = **`PDO::PARAM_STR`**,  
    [int](language.types.integer.md) `$maxLength` = 0,  
    [mixed](language.types.mixed.md) `$driverOptions` = **`null`**  
): [bool](language.types.boolean.md)

public function [bindValue](pdostatement.bindvalue.md)([string](language.types.string.md)|[int](language.types.integer.md) `$param`, [mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$type` = **`PDO::PARAM_STR`**): [bool](language.types.boolean.md)

public function [closeCursor](pdostatement.closecursor.md)(): [bool](language.types.boolean.md)

public function [columnCount](pdostatement.columncount.md)(): [int](language.types.integer.md)

public function [debugDumpParams](pdostatement.debugdumpparams.md)(): [?](language.types.null.md)[bool](language.types.boolean.md)

public function [errorCode](pdostatement.errorcode.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [errorInfo](pdostatement.errorinfo.md)(): [array](language.types.array.md)

public function [execute](pdostatement.execute.md)([?](language.types.null.md)[array](language.types.array.md) `$params` = **`null`**): [bool](language.types.boolean.md)

public function [fetch](pdostatement.fetch.md)([int](language.types.integer.md) `$mode` = **`PDO::FETCH_DEFAULT`**, [int](language.types.integer.md) `$cursorOrientation` = **`PDO::FETCH_ORI_NEXT`**, [int](language.types.integer.md) `$cursorOffset` = 0): [mixed](language.types.mixed.md)

public function [fetchAll](pdostatement.fetchall.md)([int](language.types.integer.md) `$mode` = PDO::FETCH\_DEFAULT): [array](language.types.array.md)

public function [fetchAll](pdostatement.fetchall.md)([int](language.types.integer.md) `$mode` = PDO::FETCH\_COLUMN, [int](language.types.integer.md) `$column`): [array](language.types.array.md)

public function [fetchAll](pdostatement.fetchall.md)([int](language.types.integer.md) `$mode` = PDO::FETCH\_CLASS, [string](language.types.string.md) `$class`, [?](language.types.null.md)[array](language.types.array.md) `$constructorArgs`): [array](language.types.array.md)

public function [fetchAll](pdostatement.fetchall.md)([int](language.types.integer.md) `$mode` = PDO::FETCH\_FUNC, [callable](language.types.callable.md) `$callback`): [array](language.types.array.md)

public function [fetchColumn](pdostatement.fetchcolumn.md)([int](language.types.integer.md) `$column` = 0): [mixed](language.types.mixed.md)

public function [fetchObject](pdostatement.fetchobject.md)([?](language.types.null.md)[string](language.types.string.md) `$class` = "stdClass", [array](language.types.array.md) `$constructorArgs` = []): [object](language.types.object.md)|[false](language.types.singleton.md)

public function [getAttribute](pdostatement.getattribute.md)([int](language.types.integer.md) `$name`): [mixed](language.types.mixed.md)

public function [getColumnMeta](pdostatement.getcolumnmeta.md)([int](language.types.integer.md) `$column`): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [getIterator](pdostatement.getiterator.md)(): [Iterator](class.iterator.md)

public function [nextRowset](pdostatement.nextrowset.md)(): [bool](language.types.boolean.md)

public function [rowCount](pdostatement.rowcount.md)(): [int](language.types.integer.md)

public function [setAttribute](pdostatement.setattribute.md)([int](language.types.integer.md) `$attribute`, [mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

public function [setFetchMode](pdostatement.setfetchmode.md)([int](language.types.integer.md) `$mode`): [true](language.types.singleton.md)

public function [setFetchMode](pdostatement.setfetchmode.md)([int](language.types.integer.md) `$mode` = PDO::FETCH\_COLUMN, [int](language.types.integer.md) `$colno`): [true](language.types.singleton.md)

public function [setFetchMode](pdostatement.setfetchmode.md)([int](language.types.integer.md) `$mode` = PDO::FETCH\_CLASS, [string](language.types.string.md) `$class`, [?](language.types.null.md)[array](language.types.array.md) `$constructorArgs` = **`null`**): [true](language.types.singleton.md)

public function [setFetchMode](pdostatement.setfetchmode.md)([int](language.types.integer.md) `$mode` = PDO::FETCH\_INTO, [object](language.types.object.md) `$object`): [true](language.types.singleton.md)

}

## Propriedades

queryString
:   String de consulta usada.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **PDOStatement** agora implementa [IteratorAggregate](class.iteratoraggregate.md) em vez de [Traversable](class.traversable.md). |

## Índice

- [PDOStatement::bindColumn](pdostatement.bindcolumn.md) — Vincula uma coluna a uma variável PHP
- [PDOStatement::bindParam](pdostatement.bindparam.md) — Vincula um parâmetro ao nome de variável especificado
- [PDOStatement::bindValue](pdostatement.bindvalue.md) — Vincula um valor a um parâmetro
- [PDOStatement::closeCursor](pdostatement.closecursor.md) — Fecha o cursor, permitindo que a instrução seja executada novamente
- [PDOStatement::columnCount](pdostatement.columncount.md) — Retorna o número de colunas no conjunto de resultados
- [PDOStatement::debugDumpParams](pdostatement.debugdumpparams.md) — Despeja uma instrução preparada SQL
- [PDOStatement::errorCode](pdostatement.errorcode.md) — Busca o SQLSTATE associado com a última operação no objeto da instrução
- [PDOStatement::errorInfo](pdostatement.errorinfo.md) — Busca informação de erro estendida associada com a última operação no identificador da instrução
- [PDOStatement::execute](pdostatement.execute.md) — Executa ums instrução preparada
- [PDOStatement::fetch](pdostatement.fetch.md) — Busca a próxima linha de um resultado
- [PDOStatement::fetchAll](pdostatement.fetchall.md) — Busca as linhas remanescentes de um conjunto de resultados
- [PDOStatement::fetchColumn](pdostatement.fetchcolumn.md) — Retorna uma única coluna do próximo registro de um resultado
- [PDOStatement::fetchObject](pdostatement.fetchobject.md) — Busca o próximo registro e retorna-o como um objeto
- [PDOStatement::getAttribute](pdostatement.getattribute.md) — Recupera um atributo da instrução
- [PDOStatement::getColumnMeta](pdostatement.getcolumnmeta.md) — Retorna metadados para uma coluna no resultado
- [PDOStatement::getIterator](pdostatement.getiterator.md) — Obtém o iterador do conjunto de resultados
- [PDOStatement::nextRowset](pdostatement.nextrowset.md) — Avança para o próximo conjunto de registros em um identificados de instrução com múltiplos conjuntos de registros
- [PDOStatement::rowCount](pdostatement.rowcount.md) — Retorna o número de registros afetados pela última instrução SQL
- [PDOStatement::setAttribute](pdostatement.setattribute.md) — Define um atributo na instrução
- [PDOStatement::setFetchMode](pdostatement.setfetchmode.md) — Define o modo de carga de dados para esta instrução

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
