# Classe TableDelete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-tabledelete.php

---

# Classe TableDelete

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

Uma instrução para operações de deleção em uma tabela.

## Resumo da classe

class **mysql\_xdevapi\TableDelete**
implements
[mysql\_xdevapi\Executable](class.mysql-xdevapi-executable.md) {

/\* Métodos \*/

public function **bind**([array](language.types.array.md) `$placeholder_values`): [mysql\_xdevapi\TableDelete](class.mysql-xdevapi-tabledelete.md)

public function **execute**(): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

public function **limit**([int](language.types.integer.md) `$rows`): [mysql\_xdevapi\TableDelete](class.mysql-xdevapi-tabledelete.md)

public function **orderby**([string](language.types.string.md) `$orderby_expr`): [mysql\_xdevapi\TableDelete](class.mysql-xdevapi-tabledelete.md)

public function **where**([string](language.types.string.md) `$where_expr`): [mysql\_xdevapi\TableDelete](class.mysql-xdevapi-tabledelete.md)

}

## Índice

- [TableDelete::bind](mysql-xdevapi-tabledelete.bind.md) — Vincula parâmetros na instrução de deleção
- [TableDelete::\_\_construct](mysql-xdevapi-tabledelete.construct.md) — Construtor de TableDelete
- [TableDelete::execute](mysql-xdevapi-tabledelete.execute.md) — Executa a instrução de deleção
- [TableDelete::limit](mysql-xdevapi-tabledelete.limit.md) — Limita as linhas deletadas
- [TableDelete::orderby](mysql-xdevapi-tabledelete.orderby.md) — Define os critérios de ordenação na deleção
- [TableDelete::where](mysql-xdevapi-tabledelete.where.md) — Define condição de pesquisa na deleção

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
