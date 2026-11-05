# Este método retorna uma versão serializada do hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashinthash.savetostring.php

---

# QuickHashIntHash::saveToString

(PECL quickhash >= Unknown)

QuickHashIntHash::saveToString — Este método retorna uma versão serializada do hash

### Descrição

public function **QuickHashIntHash::saveToString**(): [string](language.types.string.md)

Este método retorna uma versão serializada do hash no mesmo formato que
[QuickHashIntHash::loadFromString()](quickhashinthash.loadfromstring.md) pode ler.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Este método retorna uma string contendo um formato serializado do hash.
Cada elemento é armazenado como um valor de quatro bytes na ordem que o
sistema atual utiliza.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntHash::saveToString()****

```
<?php
$hash = new QuickHashIntHash( 1024 );
var_dump( $hash->exists( 4 ) );
var_dump( $hash->add( 4, 34 ) );
var_dump( $hash->exists( 4 ) );
var_dump( $hash->add( 4, 55 ) );

var_dump( $hash->saveToString() );
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
