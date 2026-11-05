# Interface CrudOperationLimitable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mysql-xdevapi-crudoperationlimitable.php

---

# Interface CrudOperationLimitable

(PECL mysql-xdevapi >= 8.0.11)

## Introdução

## Resumo da classe

class **mysql\_xdevapi\CrudOperationLimitable**
{

/\* Métodos \*/

abstract public function **limit**([int](language.types.integer.md) `$rows`): [mysql\_xdevapi\CrudOperationLimitable](class.mysql-xdevapi-crudoperationlimitable.md)

}

## Índice

- [CrudOperationLimitable::limit](mysql-xdevapi-crudoperationlimitable.limit.md) — Define o limite do resultado

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
