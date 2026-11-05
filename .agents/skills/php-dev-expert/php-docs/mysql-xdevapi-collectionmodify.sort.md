# Define os critérios de ordenação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionmodify.sort.php

---

# CollectionModify::sort

(No version information available, might only be in Git)

CollectionModify::sort — Define os critérios de ordenação

### Descrição

public function **mysql\_xdevapi\CollectionModify::sort**([string](language.types.string.md) `$sort_expr`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

Ordena o conjunto de resultados pelo campo selecionado no argumento sort\_expr. As ordens
permitidas são ASC (ascendente) ou DESC (descendente). Esta operação é equivalente à 'ORDER BY' do SQL
e segue o mesmo conjunto de regras.

### Parâmetros

`sort_expr`
:   Uma ou mais expressões podem ser informadas. A avaliação é da
    esquerda para a direita e cada expressão precisa ser separada por uma vírgula.

### Valor Retornado

Objeto CollectionModify que pode ser usado para processamentos adicionais.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionModify::sort()****

```
<?php

$res = $coll->modify('true')->sort('name desc', 'age asc')->limit(4)->set('Married', 'NO')->execute();

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
