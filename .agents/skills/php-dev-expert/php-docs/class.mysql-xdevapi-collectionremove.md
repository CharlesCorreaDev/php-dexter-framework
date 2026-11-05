# Classe CollectionRemove

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-collectionremove.php

---

# Classe CollectionRemove

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

## Resumo da classe

class **mysql\_xdevapi\CollectionRemove**
implements
[mysql\_xdevapi\Executable](class.mysql-xdevapi-executable.md), [mysql\_xdevapi\CrudOperationBindable](class.mysql-xdevapi-crudoperationbindable.md), [mysql\_xdevapi\CrudOperationLimitable](class.mysql-xdevapi-crudoperationlimitable.md), [mysql\_xdevapi\CrudOperationSortable](class.mysql-xdevapi-crudoperationsortable.md) {

/\* Métodos \*/

public function **bind**([array](language.types.array.md) `$placeholder_values`): [mysql\_xdevapi\CollectionRemove](class.mysql-xdevapi-collectionremove.md)

public function **execute**(): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

public function **limit**([int](language.types.integer.md) `$rows`): [mysql\_xdevapi\CollectionRemove](class.mysql-xdevapi-collectionremove.md)

public function **sort**([string](language.types.string.md) `$sort_expr`): [mysql\_xdevapi\CollectionRemove](class.mysql-xdevapi-collectionremove.md)

}

## Índice

- [CollectionRemove::bind](mysql-xdevapi-collectionremove.bind.md) — Vincula valor ao marcador
- [CollectionRemove::\_\_construct](mysql-xdevapi-collectionremove.construct.md) — Construtor de CollectionRemove
- [CollectionRemove::execute](mysql-xdevapi-collectionremove.execute.md) — Executa operação de remoção
- [CollectionRemove::limit](mysql-xdevapi-collectionremove.limit.md) — Limita o número de documentos a remover
- [CollectionRemove::sort](mysql-xdevapi-collectionremove.sort.md) — Define os critérios de ordenação

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
