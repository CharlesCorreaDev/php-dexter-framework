# Ordena resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-crudoperationsortable.sort.php

---

# CrudOperationSortable::sort

(No version information available, might only be in Git)

CrudOperationSortable::sort — Ordena resultados

### Descrição

abstract public function **mysql\_xdevapi\CrudOperationSortable::sort**([string](language.types.string.md) `$sort_expr`): [mysql\_xdevapi\CrudOperationSortable](class.mysql-xdevapi-crudoperationsortable.md)

Ordena o conjunto de resultados pelo campo selecionado no argumento sort\_expr. As ordens
permitidas são ASC (ascendente) ou DESC (descendente). Esta operação é equivalente à 'ORDER BY' do SQL
e segue o mesmo conjunto de regras.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`sort_expr`
:   Uma ou mais expressões podem ser informadas. A avaliação é da
    esquerda para a direita e cada expressão precisa ser separada por uma vírgula.

### Valor Retornado

Um objeto CrudOperationSortable.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CrudOperationSortable::sort()****

```
<?php

$res = $coll->find('job like \'Cavia\'')->sort('age desc', '_id desc')->execute();

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
