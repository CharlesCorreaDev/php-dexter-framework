# Retorna o número de elementos no hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashintstringhash.getsize.php

---

# QuickHashIntStringHash::getSize

(PECL quickhash >= Unknown)

QuickHashIntStringHash::getSize — Retorna o número de elementos no hash

### Descrição

public function **QuickHashIntStringHash::getSize**(): [int](language.types.integer.md)

Retorna o número de elementos no hash.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número de elementos no hash.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntStringHash::getSize()****

```
<?php
$hash = new QuickHashIntStringHash( 8 );
var_dump( $hash->add( 2, "dois" ) );
var_dump( $hash->add( 3, 5 ) );
var_dump( $hash->getSize() );
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
