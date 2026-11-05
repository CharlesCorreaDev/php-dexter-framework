# Este método armazena um conjunto na memória do disco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashintset.savetofile.php

---

# QuickHashIntSet::saveToFile

(PECL quickhash >= Unknown)

QuickHashIntSet::saveToFile — Este método armazena um conjunto na memória do disco

### Descrição

public function **QuickHashIntSet::saveToFile**([string](language.types.string.md) `$filename`): [void](language.types.void.md)

Este método armazena um conjunto existente em um arquivo no disco, no mesmo formato
que [QuickHashIntSet::loadFromFile()](quickhashintset.loadfromfile.md) pode ler.

### Parâmetros

`filename`
:   O nome do arquivo para armazenar o hash.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntSet::saveToFile()****

```
<?php
$set = new QuickHashIntSet( 1024 );
var_dump( $set->exists( 4 ) );
var_dump( $set->add( 4 ) );
var_dump( $set->exists( 4 ) );
var_dump( $set->add( 4 ) );

$set->saveToFile( '/tmp/test.set' );
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
