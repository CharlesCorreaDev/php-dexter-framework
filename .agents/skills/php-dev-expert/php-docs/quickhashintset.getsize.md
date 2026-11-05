# Retorna o número de elementos no conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashintset.getsize.php

---

# QuickHashIntSet::getSize

(PECL quickhash >= Unknown)

QuickHashIntSet::getSize — Retorna o número de elementos no conjunto

### Descrição

publicfunction **QuickHashIntSet::getSize**(): [int](language.types.integer.md)

Retorna o número de elementos no conjunto.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número de elementos no conjunto.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntSet::getSize()****

```
<?php
$set = new QuickHashIntSet( 8 );
var_dump( $set->add( 2 ) );
var_dump( $set->add( 3 ) );
var_dump( $set->getSize() );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(true)
int(2)
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
