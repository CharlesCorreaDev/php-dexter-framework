# Este método recupera um valor do hash por sua chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashintstringhash.get.php

---

# QuickHashIntStringHash::get

(PECL quickhash >= Unknown)

QuickHashIntStringHash::get — Este método recupera um valor do hash por sua chave

### Descrição

public function **QuickHashIntStringHash::get**([int](language.types.integer.md) `$key`): [mixed](language.types.mixed.md)

Este método recupera um valor do hash por sua chave.

### Parâmetros

`key`
:   A chave da entrada a ser recuperada.

### Valor Retornado

O valor se a chave existir, ou **`null`** se a chave não fizer parte do hash.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntStringHash::get()****

```
<?php
$hash = new QuickHashIntStringHash( 8 );
var_dump( $hash->get( 1 ) );

var_dump( $hash->add( 2, "dois" ) );
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
string(4) "dois"
bool(true)
string(1) "5"
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
