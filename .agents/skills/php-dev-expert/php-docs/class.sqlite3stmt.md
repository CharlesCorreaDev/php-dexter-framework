# A classe SQLite3Stmt

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.sqlite3stmt.php

---

# A classe SQLite3Stmt

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

## Introdução

Uma classe que lida com declarações preparadas para a extensão SQLite 3.

## Resumo da classe

class ****SQLite3Stmt****
{

/\* Métodos \*/

private function [\_\_construct](sqlite3stmt.construct.md)([SQLite3](class.sqlite3.md) `$sqlite3`, [string](language.types.string.md) `$query`)

public function [bindParam](sqlite3stmt.bindparam.md)([string](language.types.string.md)|[int](language.types.integer.md) `$param`, [mixed](language.types.mixed.md) `&$var`, [int](language.types.integer.md) `$type` = **`SQLITE3_TEXT`**): [bool](language.types.boolean.md)

public function [bindValue](sqlite3stmt.bindvalue.md)([string](language.types.string.md)|[int](language.types.integer.md) `$param`, [mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$type` = **`SQLITE3_TEXT`**): [bool](language.types.boolean.md)

public function [busy](sqlite3stmt.busy.md)(): [bool](language.types.boolean.md)

public function [clear](sqlite3stmt.clear.md)(): [bool](language.types.boolean.md)

public function [close](sqlite3stmt.close.md)(): [true](language.types.singleton.md)

public function [execute](sqlite3stmt.execute.md)(): [SQLite3Result](class.sqlite3result.md)|[false](language.types.singleton.md)

public function [explain](sqlite3stmt.explain.md)(): [int](language.types.integer.md)

public function [getSQL](sqlite3stmt.getsql.md)([bool](language.types.boolean.md) `$expand` = **`false`**): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [paramCount](sqlite3stmt.paramcount.md)(): [int](language.types.integer.md)

public function [readOnly](sqlite3stmt.readonly.md)(): [bool](language.types.boolean.md)

public function [reset](sqlite3stmt.reset.md)(): [bool](language.types.boolean.md)

public function [setExplain](sqlite3stmt.setexplain.md)([int](language.types.integer.md) `$mode`): [bool](language.types.boolean.md)

}

## Índice

- [SQLite3Stmt::bindParam](sqlite3stmt.bindparam.md) — Vincula um parâmetro a uma variável de instrução
- [SQLite3Stmt::bindValue](sqlite3stmt.bindvalue.md) — Vincula o valor de um parâmetro a uma variável de instrução
- [SQLite3Stmt::busy](sqlite3stmt.busy.md) — Returns whether the statement has been fetched but not yet completed
- [SQLite3Stmt::clear](sqlite3stmt.clear.md) — Limpa todos os parâmetros vinculados atuais
- [SQLite3Stmt::close](sqlite3stmt.close.md) — Fecha a declaração preparada
- [SQLite3Stmt::\_\_construct](sqlite3stmt.construct.md) — Constrói um objeto SQLite3Stmt
- [SQLite3Stmt::execute](sqlite3stmt.execute.md) — Executa uma declaração preparada e retorna um objeto de conjunto de resultados
- [SQLite3Stmt::explain](sqlite3stmt.explain.md) — Returns the explain mode of the statement
- [SQLite3Stmt::getSQL](sqlite3stmt.getsql.md) — Obtém o SQL da instrução
- [SQLite3Stmt::paramCount](sqlite3stmt.paramcount.md) — Retorna o número de parâmetros dentro da declaração preparada
- [SQLite3Stmt::readOnly](sqlite3stmt.readonly.md) — Retorna se uma declaração é definitivamente somente leitura
- [SQLite3Stmt::reset](sqlite3stmt.reset.md) — Reseta a declaração preparada
- [SQLite3Stmt::setExplain](sqlite3stmt.setexplain.md) — Changes the explain mode of the statement

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
