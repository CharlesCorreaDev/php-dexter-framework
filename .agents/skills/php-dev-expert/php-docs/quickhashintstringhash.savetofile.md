# Este método armazena um hash na memória no disco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashintstringhash.savetofile.php

---

# QuickHashIntStringHash::saveToFile

(PECL quickhash >= Unknown)

QuickHashIntStringHash::saveToFile — Este método armazena um hash na memória no disco

### Descrição

public function **QuickHashIntStringHash::saveToFile**([string](language.types.string.md) `$filename`): [void](language.types.void.md)

Este método armazena um hash existente em um arquivo no disco, no mesmo formato
que loadFromFile() pode ler.

### Parâmetros

`filename`
:   O nome do arquivo para armazenar o hash.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntStringHash::saveToFile()****

```
<?php
$hash = new QuickHashIntStringHash( 1024 );
var_dump( $hash->exists( 4 ) );
var_dump( $hash->add( 4, "quarenta e três" ) );
var_dump( $hash->exists( 4 ) );
var_dump( $hash->add( 4, "cinquenta e dois" ) );

$hash->saveToFile( '/tmp/test.string.hash' );
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
