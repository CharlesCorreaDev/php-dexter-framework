# Classe CollectionFind

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-collectionfind.php

---

# Classe CollectionFind

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

## Resumo da classe

class **mysql\_xdevapi\CollectionFind**
implements
[mysql\_xdevapi\Executable](class.mysql-xdevapi-executable.md), [mysql\_xdevapi\CrudOperationBindable](class.mysql-xdevapi-crudoperationbindable.md), [mysql\_xdevapi\CrudOperationLimitable](class.mysql-xdevapi-crudoperationlimitable.md), [mysql\_xdevapi\CrudOperationSortable](class.mysql-xdevapi-crudoperationsortable.md) {

/\* Métodos \*/

public function **bind**([array](language.types.array.md) `$placeholder_values`): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

public function **execute**(): [mysql\_xdevapi\DocResult](class.mysql-xdevapi-docresult.md)

public function **fields**([string](language.types.string.md) `$projection`): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

public function **groupBy**([string](language.types.string.md) `$sort_expr`): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

public function **having**([string](language.types.string.md) `$sort_expr`): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

public function **limit**([int](language.types.integer.md) `$rows`): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

public function **lockExclusive**([int](language.types.integer.md) `$lock_waiting_option` = ?): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

public function **lockShared**([int](language.types.integer.md) `$lock_waiting_option` = ?): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

public function **offset**([int](language.types.integer.md) `$position`): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

public function **sort**([string](language.types.string.md) `$sort_expr`): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

}

## Índice

- [CollectionFind::bind](mysql-xdevapi-collectionfind.bind.md) — Vincula valor a marcador na consulta
- [CollectionFind::\_\_construct](mysql-xdevapi-collectionfind.construct.md) — Construtor de CollectionFind
- [CollectionFind::execute](mysql-xdevapi-collectionfind.execute.md) — Executa a instrução
- [CollectionFind::fields](mysql-xdevapi-collectionfind.fields.md) — Define filtro de campo de documento
- [CollectionFind::groupBy](mysql-xdevapi-collectionfind.groupby.md) — Define critérios de agrupamento
- [CollectionFind::having](mysql-xdevapi-collectionfind.having.md) — Define condição para funções de agregação
- [CollectionFind::limit](mysql-xdevapi-collectionfind.limit.md) — Limita o número de documentos retornados
- [CollectionFind::lockExclusive](mysql-xdevapi-collectionfind.lockexclusive.md) — Executa a operação com EXCLUSIVE LOCK
- [CollectionFind::lockShared](mysql-xdevapi-collectionfind.lockshared.md) — Executa a operação com SHARED LOCK
- [CollectionFind::offset](mysql-xdevapi-collectionfind.offset.md) — Pula um número de elementos a serem retornados
- [CollectionFind::sort](mysql-xdevapi-collectionfind.sort.md) — Define os critérios de ordenação

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
