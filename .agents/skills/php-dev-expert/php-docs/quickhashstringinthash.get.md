# Este método recupera um valor do hash por sua chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashstringinthash.get.php

---

# QuickHashStringIntHash::get

(No version information available, might only be in Git)

QuickHashStringIntHash::get — Este método recupera um valor do hash por sua chave

### Descrição

public function **QuickHashStringIntHash::get**([string](language.types.string.md) `$key`): [mixed](language.types.mixed.md)

Este método recupera um valor do hash por sua chave.

### Parâmetros

`key`
:   A chave da entrada a ser recuperada.

### Valor Retornado

O valor se a chave existir, ou **`null`** se a chave não fizer parte do hash.

### Examples

**Exemplo #1 Exemplo de **QuickHashStringIntHash::get()****

```
<?php
$hash = new QuickHashStringIntHash( 8 );
var_dump( $hash->get( "um" ) );

var_dump( $hash->add( "dois", 2 ) );
var_dump( $hash->get( "dois" ) );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(false)
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
