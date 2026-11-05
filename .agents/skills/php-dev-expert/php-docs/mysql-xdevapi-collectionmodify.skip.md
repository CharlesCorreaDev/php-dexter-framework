# Pula elementos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionmodify.skip.php

---

# CollectionModify::skip

(No version information available, might only be in Git)

CollectionModify::skip — Pula elementos

### Descrição

public function **mysql\_xdevapi\CollectionModify::skip**([int](language.types.integer.md) `$position`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

Pula os primeiros N elementos que seriam de outra forma retornados por uma operação de pesquisa.
Se o número de elementos pulados for maior que o tamanho do conjunto de resultados,
a operação de pesquisa retorna um conjunto vazio.

### Parâmetros

`position`
:   Número de elementos a pular.

### Valor Retornado

Um objeto CollectionModify para uso em processamento adicional.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionModify::skip()****

```
<?php

$coll->modify('age > :age')->sort('age desc')->unset(['age'])->bind(['age' => 20])->limit(4)->skip(1)->execute();

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
