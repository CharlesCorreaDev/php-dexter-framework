# A classe SQLite3Result

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.sqlite3result.php

---

# A classe SQLite3Result

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

## Introdução

Uma classe que manipula conjuntos de resultados para a extensão SQLite 3.

## Resumo da classe

class ****SQLite3Result****
{

/\* Métodos \*/

private function [\_\_construct](sqlite3result.construct.md)()

public function [columnName](sqlite3result.columnname.md)([int](language.types.integer.md) `$column`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [columnType](sqlite3result.columntype.md)([int](language.types.integer.md) `$column`): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [fetchArray](sqlite3result.fetcharray.md)([int](language.types.integer.md) `$mode` = **`SQLITE3_BOTH`**): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [finalize](sqlite3result.finalize.md)(): [true](language.types.singleton.md)

public function [numColumns](sqlite3result.numcolumns.md)(): [int](language.types.integer.md)

public function [reset](sqlite3result.reset.md)(): [bool](language.types.boolean.md)

}

## Índice

- [SQLite3Result::columnName](sqlite3result.columnname.md) — Retorna o nome da enésima coluna
- [SQLite3Result::columnType](sqlite3result.columntype.md) — Retorna o tipo da enésima coluna
- [SQLite3Result::\_\_construct](sqlite3result.construct.md) — Constrói um SQLite3Result
- [SQLite3Result::fetchArray](sqlite3result.fetcharray.md) — Obtém uma linha de resultado como um array associativo, numericamente indexado ou ambos
- [SQLite3Result::finalize](sqlite3result.finalize.md) — Fecha o conjunto de resultados
- [SQLite3Result::numColumns](sqlite3result.numcolumns.md) — Retorna o número de colunas no conjunto de resultados
- [SQLite3Result::reset](sqlite3result.reset.md) — Reinicia o conjunto de resultados de volta para a primeira linha

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
