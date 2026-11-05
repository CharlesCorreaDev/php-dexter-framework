# Este método atualiza uma entrada no hash com um novo valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashstringinthash.update.php

---

# QuickHashStringIntHash::update

(No version information available, might only be in Git)

QuickHashStringIntHash::update — Este método atualiza uma entrada no hash com um novo valor

### Descrição

public function **QuickHashStringIntHash::update**([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

Este método atualiza uma entrada com um novo valor e retorna se a entrada foi
atualizada. Se houver chaves duplicadas, apenas o primeiro elemento encontrado receberá
um valor atualizado. Use QuickHashStringIntHash::CHECK\_FOR\_DUPES durante a criação do hash
para evitar que chaves duplicadas façam parte do hash.

### Parâmetros

`key`
:   A chave da entrada a ser atualizada.

`value`
:   O novo valor para a entrada. Se uma string não for passada, ela será
    convertida para uma string automaticamente, se possível.

### Valor Retornado

**`true`** quando a entrada foi encontrada e atualizada, e **`false`** se a entrada
ainda não fazia parte do hash.

### Examples

**Exemplo #1 Exemplo de **QuickHashStringIntHash::update()****

```
<?php
$hash = new QuickHashStringIntHash( 1024 );

$hash->add( 'seis', 314159265 );
$hash->add( "bastante", 314159265 );

echo $hash->get( 'seis' ), "\n";
echo $hash->get( 'bastante' ), "\n";

var_dump( $hash->update( 'bastante', 314159266 ) );
var_dump( $hash->update( "bastante mais um", 314159999 ) );

echo $hash->get( 'seis' ), "\n";
echo $hash->get( 'bastante' ), "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
314159265
314159265
bool(true)
bool(false)
314159265
314159266
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
