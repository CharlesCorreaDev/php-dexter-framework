# TableUpdate class

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-tableupdate.php

---

# TableUpdate class

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

Uma instrução para operações de atualização de registros em uma tabela.

## Resumo da classe

class **mysql\_xdevapi\TableUpdate**
implements
[mysql\_xdevapi\Executable](class.mysql-xdevapi-executable.md) {

/\* Métodos \*/

public function **bind**([array](language.types.array.md) `$placeholder_values`): [mysql\_xdevapi\TableUpdate](class.mysql-xdevapi-tableupdate.md)

public function **execute**(): [mysql\_xdevapi\TableUpdate](class.mysql-xdevapi-tableupdate.md)

public function **limit**([int](language.types.integer.md) `$rows`): [mysql\_xdevapi\TableUpdate](class.mysql-xdevapi-tableupdate.md)

public function **orderby**([mixed](language.types.mixed.md) `$orderby_expr`, [mixed](language.types.mixed.md) `...$orderby_exprs`): [mysql\_xdevapi\TableUpdate](class.mysql-xdevapi-tableupdate.md)

public function **set**([string](language.types.string.md) `$table_field`, [string](language.types.string.md) `$expression_or_literal`): [mysql\_xdevapi\TableUpdate](class.mysql-xdevapi-tableupdate.md)

public function **where**([string](language.types.string.md) `$where_expr`): [mysql\_xdevapi\TableUpdate](class.mysql-xdevapi-tableupdate.md)

}

## Índice

- [TableUpdate::bind](mysql-xdevapi-tableupdate.bind.md) — Vincula parâmetros de consulta de atualização
- [TableUpdate::\_\_construct](mysql-xdevapi-tableupdate.construct.md) — Construtor de TableUpdate
- [TableUpdate::execute](mysql-xdevapi-tableupdate.execute.md) — Executa instrução de atualização
- [TableUpdate::limit](mysql-xdevapi-tableupdate.limit.md) — Limita contagem de atualização de linhas
- [TableUpdate::orderby](mysql-xdevapi-tableupdate.orderby.md) — Define critérios de ordenação
- [TableUpdate::set](mysql-xdevapi-tableupdate.set.md) — Adiciona campo a ser atualizado
- [TableUpdate::where](mysql-xdevapi-tableupdate.where.md) — Define filtro de pesquisa

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
