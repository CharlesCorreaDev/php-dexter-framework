# Classe CollectionModify

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-collectionmodify.php

---

# Classe CollectionModify

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

## Resumo da classe

class **mysql\_xdevapi\CollectionModify**
implements
[mysql\_xdevapi\Executable](class.mysql-xdevapi-executable.md), [mysql\_xdevapi\CrudOperationBindable](class.mysql-xdevapi-crudoperationbindable.md), [mysql\_xdevapi\CrudOperationLimitable](class.mysql-xdevapi-crudoperationlimitable.md), [mysql\_xdevapi\CrudOperationSkippable](class.mysql-xdevapi-crudoperationskippable.md), [mysql\_xdevapi\CrudOperationSortable](class.mysql-xdevapi-crudoperationsortable.md) {

/\* Métodos \*/

public function **arrayAppend**([string](language.types.string.md) `$collection_field`, [string](language.types.string.md) `$expression_or_literal`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

public function **arrayInsert**([string](language.types.string.md) `$collection_field`, [string](language.types.string.md) `$expression_or_literal`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

public function **bind**([array](language.types.array.md) `$placeholder_values`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

public function **execute**(): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

public function **limit**([int](language.types.integer.md) `$rows`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

public function **patch**([string](language.types.string.md) `$document`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

public function **replace**([string](language.types.string.md) `$collection_field`, [string](language.types.string.md) `$expression_or_literal`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

public function **set**([string](language.types.string.md) `$collection_field`, [string](language.types.string.md) `$expression_or_literal`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

public function **skip**([int](language.types.integer.md) `$position`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

public function **sort**([string](language.types.string.md) `$sort_expr`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

public function **unset**([array](language.types.array.md) `$fields`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

}

## Índice

- [CollectionModify::arrayAppend](mysql-xdevapi-collectionmodify.arrayappend.md) — Anexa elemento a um array de campos
- [CollectionModify::arrayInsert](mysql-xdevapi-collectionmodify.arrayinsert.md) — Insere elemento em um array de campos
- [CollectionModify::bind](mysql-xdevapi-collectionmodify.bind.md) — Vincula valor ao marcador da consulta
- [CollectionModify::\_\_construct](mysql-xdevapi-collectionmodify.construct.md) — Construtor de CollectionModify
- [CollectionModify::execute](mysql-xdevapi-collectionmodify.execute.md) — Executa operação de modificação
- [CollectionModify::limit](mysql-xdevapi-collectionmodify.limit.md) — Limita o número de documentos modificados
- [CollectionModify::patch](mysql-xdevapi-collectionmodify.patch.md) — Corrige documento
- [CollectionModify::replace](mysql-xdevapi-collectionmodify.replace.md) — Substitui campo de documento
- [CollectionModify::set](mysql-xdevapi-collectionmodify.set.md) — Define atributo de documento
- [CollectionModify::skip](mysql-xdevapi-collectionmodify.skip.md) — Pula elementos
- [CollectionModify::sort](mysql-xdevapi-collectionmodify.sort.md) — Define os critérios de ordenação
- [CollectionModify::unset](mysql-xdevapi-collectionmodify.unset.md) — Remove o valor de campos do documento

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
