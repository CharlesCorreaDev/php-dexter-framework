# Este método exclui uma entrada do hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashinthash.delete.php

---

# QuickHashIntHash::delete

(PECL quickhash >= Unknown)

QuickHashIntHash::delete — Este método exclui uma entrada do hash

### Descrição

public function **QuickHashIntHash::delete**([int](language.types.integer.md) `$key`): [bool](language.types.boolean.md)

Este método exclui uma entrada do hash e retorna se a entrada foi
excluída ou não. As estruturas de memória associadas não serão liberadas imediatamente,
mas sim quando o próprio hash for liberado.

Elementos não podem ser excluídos quando o hash é usado em um iterador. O método
não lançará uma exceção, mas simplesmente retornará **`false`** como aconteceria
com qualquer outra falha de exclusão.

### Parâmetros

`key`
:   A chave da entrada a ser excluída.

### Valor Retornado

**`true`** quando a entrada foi excluída e **`false`** se a entrada não foi excluída.

### Examples

**Exemplo #1 Exemplo de **QuickHashIntHash::delete()****

```
<?php
$hash = new QuickHashIntHash( 1024 );
var_dump( $hash->exists( 4 ) );
var_dump( $hash->add( 4, 5 ) );
var_dump( $hash->delete( 4 ) );
var_dump( $hash->exists( 4 ) );
var_dump( $hash->delete( 4 ) );
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
