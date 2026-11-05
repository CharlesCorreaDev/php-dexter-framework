# Retorna o número de elementos no hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashstringinthash.getsize.php

---

# QuickHashStringIntHash::getSize

(No version information available, might only be in Git)

QuickHashStringIntHash::getSize — Retorna o número de elementos no hash

### Descrição

public function **QuickHashStringIntHash::getSize**(): [int](language.types.integer.md)

Retorna o número de elementos no hash.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número de elementos no hash.

### Examples

**Exemplo #1 Exemplo de **QuickHashStringIntHash::getSize()****

```
<?php
$hash = new QuickHashStringIntHash( 8 );
var_dump( $hash->add( "dois", 2 ) );
var_dump( $hash->add( "três", 5 ) );
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
