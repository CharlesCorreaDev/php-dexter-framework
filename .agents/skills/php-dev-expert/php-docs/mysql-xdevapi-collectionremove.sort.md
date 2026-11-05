# Define os critérios de ordenação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionremove.sort.php

---

# CollectionRemove::sort

(No version information available, might only be in Git)

CollectionRemove::sort — Define os critérios de ordenação

### Descrição

public function **mysql\_xdevapi\CollectionRemove::sort**([string](language.types.string.md) `$sort_expr`): [mysql\_xdevapi\CollectionRemove](class.mysql-xdevapi-collectionremove.md)

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

Um objeto CollectionRemove que pode ser usado para executar o comando, ou para processamentos adicionais.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionRemove::sort()****

```
<?php

$res = $coll->remove('true')->sort('age desc')->limit(2)->execute();

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
