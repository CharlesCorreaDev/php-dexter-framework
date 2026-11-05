# Este método armazena um hash na memória no disco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashstringinthash.savetofile.php

---

# QuickHashStringIntHash::saveToFile

(No version information available, might only be in Git)

QuickHashStringIntHash::saveToFile — Este método armazena um hash na memória no disco

### Descrição

public function **QuickHashStringIntHash::saveToFile**([string](language.types.string.md) `$filename`): [void](language.types.void.md)

Este método armazena um hash existente em um arquivo no disco, no mesmo formato
que loadFromFile() pode ler.

### Parâmetros

`filename`
:   O nome do arquivo para armazenar o hash.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **QuickHashStringIntHash::saveToFile()****

```
<?php
$hash = new QuickHashStringIntHash( 1024 );
var_dump( $hash->add( "quarenta e três", 42 ) );
var_dump( $hash->add( "cinquenta e dois", 52 ) );

$hash->saveToFile( '/tmp/test.hash.string' );
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
