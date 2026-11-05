# Classe TableSelect

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-tableselect.php

---

# Classe TableSelect

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

Uma instrução para operações de recuperação de registros em uma tabela.

## Resumo da classe

class **mysql\_xdevapi\TableSelect**
implements
[mysql\_xdevapi\Executable](class.mysql-xdevapi-executable.md) {

/\* Métodos \*/

public function **bind**([array](language.types.array.md) `$placeholder_values`): [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md)

public function **execute**(): [mysql\_xdevapi\RowResult](class.mysql-xdevapi-rowresult.md)

public function **groupBy**([mixed](language.types.mixed.md) `$sort_expr`): [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md)

public function **having**([string](language.types.string.md) `$sort_expr`): [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md)

public function **limit**([int](language.types.integer.md) `$rows`): [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md)

public function **lockExclusive**([int](language.types.integer.md) `$lock_waiting_option` = ?): [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md)

public function **lockShared**([int](language.types.integer.md) `$lock_waiting_option` = ?): [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md)

public function **offset**([int](language.types.integer.md) `$position`): [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md)

public function **orderby**([mixed](language.types.mixed.md) `$sort_expr`, [mixed](language.types.mixed.md) `...$sort_exprs`): [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md)

public function **where**([string](language.types.string.md) `$where_expr`): [mysql\_xdevapi\TableSelect](class.mysql-xdevapi-tableselect.md)

}

## Índice

- [TableSelect::bind](mysql-xdevapi-tableselect.bind.md) — Vincula parâmetros de consulta de seleção
- [TableSelect::\_\_construct](mysql-xdevapi-tableselect.construct.md) — Construtor TableSelect
- [TableSelect::execute](mysql-xdevapi-tableselect.execute.md) — Executa instrução de seleção
- [TableSelect::groupBy](mysql-xdevapi-tableselect.groupby.md) — Define critérios de agrupamento de seleção
- [TableSelect::having](mysql-xdevapi-tableselect.having.md) — Definir condição para função de agregação na seleção
- [TableSelect::limit](mysql-xdevapi-tableselect.limit.md) — Limita as linhas selecionadas
- [TableSelect::lockExclusive](mysql-xdevapi-tableselect.lockexclusive.md) — Executa EXCLUSIVE LOCK
- [TableSelect::lockShared](mysql-xdevapi-tableselect.lockshared.md) — Executa SHARED LOCK
- [TableSelect::offset](mysql-xdevapi-tableselect.offset.md) — Define o deslocamento limite
- [TableSelect::orderby](mysql-xdevapi-tableselect.orderby.md) — Define critérios de ordenamento na seleção
- [TableSelect::where](mysql-xdevapi-tableselect.where.md) — Define condição de pesquisa na seleção

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
