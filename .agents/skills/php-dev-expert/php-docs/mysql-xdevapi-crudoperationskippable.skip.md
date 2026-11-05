# Número de operações a pular

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-crudoperationskippable.skip.php

---

# CrudOperationSkippable::skip

(No version information available, might only be in Git)

CrudOperationSkippable::skip — Número de operações a pular

### Descrição

abstract public function **mysql\_xdevapi\CrudOperationSkippable::skip**([int](language.types.integer.md) `$skip`): [mysql\_xdevapi\CrudOperationSkippable](class.mysql-xdevapi-crudoperationskippable.md)

Pula este número de registros na operação retornada.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`skip`
:   Número de elementos a pular.

### Valor Retornado

Um objeto CrudOperationSkippable.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CrudOperationSkippable::skip()****

```
<?php

$res = $coll->find('job like \'Programmatore\'')->limit(1)->skip(3)->sort('age asc')->execute();

?>
```

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
