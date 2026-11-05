# Cria um novo objeto QuickHashStringIntHash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashstringinthash.construct.php

---

# QuickHashStringIntHash::\_\_construct

(No version information available, might only be in Git)

QuickHashStringIntHash::\_\_construct — Cria um novo objeto QuickHashStringIntHash

### Descrição

public function **QuickHashStringIntHash::\_\_construct**([int](language.types.integer.md) `$size`, [int](language.types.integer.md) `$options` = 0)

Este construtor cria um novo [QuickHashStringIntHash](class.quickhashstringinthash.md). O tamanho é a quantidade de
listas de buckets a serem criadas. Quanto mais listas houver, menos colisões irão
ocorrer. Opções também são suportadas.

### Parâmetros

`size`
:   A quantidade de listas de buckets a serem configuradas. O número informado será
    automaticamente arredondado para a próxima potência de dois. Também é
    automaticamente limitado de `64` a `4194304`.

`options`
:   As opções que podem ser passadas são:
    **`QuickHashStringIntHash::CHECK_FOR_DUPES`**, que garante que nenhuma entrada
    duplicada seja adicionada ao hash e
    **`QuickHashStringIntHash::DO_NOT_USE_ZEND_ALLOC`** para não usar o gerenciador de memória
    interno do PHP.

### Valor Retornado

Retorna um novo [QuickHashStringIntHash](class.quickhashstringinthash.md).

### Examples

**Exemplo #1 Exemplo de **QuickHashStringIntHash::\_\_construct()****

```
<?php
var_dump( new QuickHashStringIntHash( 1024 ) );
var_dump( new QuickHashStringIntHash( 1024, QuickHashStringIntHash::CHECK_FOR_DUPES ) );
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
