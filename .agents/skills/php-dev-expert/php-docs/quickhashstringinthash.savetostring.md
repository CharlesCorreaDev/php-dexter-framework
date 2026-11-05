# Este método retorna uma versão serializada do hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashstringinthash.savetostring.php

---

# QuickHashStringIntHash::saveToString

(No version information available, might only be in Git)

QuickHashStringIntHash::saveToString — Este método retorna uma versão serializada do hash

### Descrição

public function **QuickHashStringIntHash::saveToString**(): [string](language.types.string.md)

Este método retorna uma versão serializada do hash no mesmo formato que
[QuickHashStringIntHash::loadFromString()](quickhashstringinthash.loadfromstring.md) consegue ler.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Este método retorna um formato serializado de um hash existente, no mesmo formato
que [QuickHashStringIntHash::loadFromString()](quickhashstringinthash.loadfromstring.md) pode ler.

### Examples

**Exemplo #1 Exemplo de **QuickHashStringIntHash::saveToString()****

```
<?php
$hash = new QuickHashStringIntHash( 1024 );
var_dump( $hash->add( "quarenta e três", 42 ) );
var_dump( $hash->add( "cinquenta e dois", 52 ) );

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
