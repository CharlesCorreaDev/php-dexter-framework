# Classe RowResult

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-rowresult.php

---

# Classe RowResult

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

## Resumo da classe

class **mysql\_xdevapi\RowResult**
implements
[mysql\_xdevapi\BaseResult](class.mysql-xdevapi-baseresult.md), [Traversable](class.traversable.md) {

/\* Métodos \*/

public function **fetchAll**(): [array](language.types.array.md)

public function **fetchOne**(): [array](language.types.array.md)

public function **getColumnsCount**(): [int](language.types.integer.md)

public function **getColumnNames**(): [array](language.types.array.md)

public function **getColumns**(): [array](language.types.array.md)

public function **getWarnings**(): [array](language.types.array.md)

public function **getWarningsCount**(): [int](language.types.integer.md)

}

## Índice

- [RowResult::\_\_construct](mysql-xdevapi-rowresult.construct.md) — Construtor de RowResult
- [RowResult::fetchAll](mysql-xdevapi-rowresult.fetchall.md) — Obtém todas as linhas do resultado
- [RowResult::fetchOne](mysql-xdevapi-rowresult.fetchone.md) — Obtém linha do resultado
- [RowResult::getColumnsCount](mysql-xdevapi-rowresult.getcolumncount.md) — Obtém a contagem de colunas
- [RowResult::getColumnNames](mysql-xdevapi-rowresult.getcolumnnames.md) — Obtém o nome de todas as colunas
- [RowResult::getColumns](mysql-xdevapi-rowresult.getcolumns.md) — Obtém metadados de coluna
- [RowResult::getWarnings](mysql-xdevapi-rowresult.getwarnings.md) — Obtém os alertas da última operação
- [RowResult::getWarningsCount](mysql-xdevapi-rowresult.getwarningscount.md) — Obtém a contagem de alertas da última operação

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
