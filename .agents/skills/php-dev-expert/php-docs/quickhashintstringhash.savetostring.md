# Este método retorna uma versão serializada do hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashintstringhash.savetostring.php

---

# QuickHashIntStringHash::saveToString

(PECL quickhash >= Unknown)

QuickHashIntStringHash::saveToString — Este método retorna uma versão serializada do hash

### Descrição

public function **QuickHashIntStringHash::saveToString**(): [string](language.types.string.md)

Este método retorna uma versão serializada do hash no mesmo formato que
[QuickHashIntStringHash::loadFromString()](quickhashintstringhash.loadfromstring.md) pode ler.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Este método retorna uma string contendo um formato serializado do hash.
Cada elemento é armazenado como um valor de quatro bytes na ordem de bytes que o
sistema atual utiliza.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntStringHash::saveToString()****

```
<?php
$hash = new QuickHashIntStringHash( 1024 );
var_dump( $hash->exists( 4 ) );
var_dump( $hash->add( 4, "trinta e quatro" ) );
var_dump( $hash->exists( 4 ) );
var_dump( $hash->add( 5, "cinquenta e cinco" ) );

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
