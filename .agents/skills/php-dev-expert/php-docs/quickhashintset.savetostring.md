# Este método retorna uma versão serializada do conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashintset.savetostring.php

---

# QuickHashIntSet::saveToString

(PECL quickhash >= Unknown)

QuickHashIntSet::saveToString — Este método retorna uma versão serializada do conjunto

### Descrição

public function **QuickHashIntSet::saveToString**(): [string](language.types.string.md)

Este método retorna uma versão serializada do conjunto no mesmo formato que
[QuickHashIntSet::loadFromString()](quickhashintset.loadfromstring.md) pode ler.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Este método retorna uma string contendo um formato serializado do conjunto.
Cada elemento é armazenado como um valor de quatro bytes na ordem de bytes que o
sistema atual utiliza.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntSet::saveToString()****

```
<?php
$set = new QuickHashIntSet( 1024 );
var_dump( $set->exists( 4 ) );
var_dump( $set->add( 4 ) );
var_dump( $set->exists( 4 ) );
var_dump( $set->add( 4 ) );

var_dump( $set->saveToString() );
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
