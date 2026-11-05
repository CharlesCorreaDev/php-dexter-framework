# Este método exclui uma entrada do conjunto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashintset.delete.php

---

# QuickHashIntSet::delete

(PECL quickhash >= Unknown)

QuickHashIntSet::delete — Este método exclui uma entrada do conjunto

### Descrição

public function **QuickHashIntSet::delete**([int](language.types.integer.md) `$key`): [bool](language.types.boolean.md)

Este método exclui uma entrada do conjunto e retorna se a entrada foi
excluída ou não. As estruturas de memória associadas não serão liberadas imediatamente,
mas sim quando o próprio conjunto for liberado.

### Parâmetros

`key`
:   A chave da entrada a ser excluída.

### Valor Retornado

**`true`** quando a entrada foi excluída e **`false`** se a entrada não foi excluída.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntSet::delete()****

```
<?php
$set = new QuickHashIntSet( 1024 );
var_dump( $set->exists( 4 ) );
var_dump( $set->add( 4 ) );
var_dump( $set->delete( 4 ) );
var_dump( $set->exists( 4 ) );
var_dump( $set->delete( 4 ) );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(false)
bool(true)
bool(true)
bool(false)
bool(false)
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
