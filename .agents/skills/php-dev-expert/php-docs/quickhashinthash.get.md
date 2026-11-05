# Este método recupera um valor do hash por sua chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashinthash.get.php

---

# QuickHashIntHash::get

(PECL quickhash >= Unknown)

QuickHashIntHash::get — Este método recupera um valor do hash por sua chave

### Descrição

public function **QuickHashIntHash::get**([int](language.types.integer.md) `$key`): [int](language.types.integer.md)

Este método recupera um valor do hash por sua chave.

### Parâmetros

`key`
:   A chave da entrada a ser recuperada.

### Valor Retornado

O valor se a chave existir, ou **`null`** se a chave não fizer parte do hash.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntHash::get()****

```
<?php
$hash = new QuickHashIntHash( 8 );
var_dump( $hash->get( 1 ) );

var_dump( $hash->add( 2 ) );
var_dump( $hash->get( 2 ) );

var_dump( $hash->add( 3, 5 ) );
var_dump( $hash->get( 3 ) );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(false)
bool(true)
int(1)
bool(true)
int(5)
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
