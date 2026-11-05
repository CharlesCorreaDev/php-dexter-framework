# Classe SqlStatementResult

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-sqlstatementresult.php

---

# Classe SqlStatementResult

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

## Resumo da classe

class **mysql\_xdevapi\SqlStatementResult**
implements
[mysql\_xdevapi\BaseResult](class.mysql-xdevapi-baseresult.md), [Traversable](class.traversable.md) {

/\* Métodos \*/

public function **fetchAll**(): [array](language.types.array.md)

public function **fetchOne**(): [array](language.types.array.md)

public function **getAffectedItemsCount**(): [int](language.types.integer.md)

public function **getColumnsCount**(): [int](language.types.integer.md)

public function **getColumnNames**(): [array](language.types.array.md)

public function **getColumns**(): [Array](language.types.array.md)

public function **getGeneratedIds**(): [array](language.types.array.md)

public function **getLastInsertId**(): [String](language.types.string.md)

public function **getWarnings**(): [array](language.types.array.md)

public function **getWarningCounts**(): [int](language.types.integer.md)

public function **hasData**(): [bool](language.types.boolean.md)

public function **nextResult**(): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

}

## Índice

- [SqlStatementResult::\_\_construct](mysql-xdevapi-sqlstatementresult.construct.md) — Construtor de SqlStatementResult
- [SqlStatementResult::fetchAll](mysql-xdevapi-sqlstatementresult.fetchall.md) — Obtém todas as linhas do resultado
- [SqlStatementResult::fetchOne](mysql-xdevapi-sqlstatementresult.fetchone.md) — Obtém uma única linha
- [SqlStatementResult::getAffectedItemsCount](mysql-xdevapi-sqlstatementresult.getaffecteditemscount.md) — Obtém a contagem de linhas afetadas
- [SqlStatementResult::getColumnsCount](mysql-xdevapi-sqlstatementresult.getcolumncount.md) — Obtém a contagem de colunas
- [SqlStatementResult::getColumnNames](mysql-xdevapi-sqlstatementresult.getcolumnnames.md) — Obtém nomes de colunas
- [SqlStatementResult::getColumns](mysql-xdevapi-sqlstatementresult.getcolumns.md) — Obtém colunas
- [SqlStatementResult::getGeneratedIds](mysql-xdevapi-sqlstatementresult.getgeneratedids.md) — Obtém IDs gerados
- [SqlStatementResult::getLastInsertId](mysql-xdevapi-sqlstatementresult.getlastinsertid.md) — Obtém o ID da última inserção
- [SqlStatementResult::getWarnings](mysql-xdevapi-sqlstatementresult.getwarnings.md) — Obtém alertas da última operação
- [SqlStatementResult::getWarningsCount](mysql-xdevapi-sqlstatementresult.getwarningcount.md) — Obtém contagem de alertas da última operação
- [SqlStatementResult::hasData](mysql-xdevapi-sqlstatementresult.hasdata.md) — Verifica se o resultado tem dados
- [SqlStatementResult::nextResult](mysql-xdevapi-sqlstatementresult.nextresult.md) — Obtém o próximo resultado

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
