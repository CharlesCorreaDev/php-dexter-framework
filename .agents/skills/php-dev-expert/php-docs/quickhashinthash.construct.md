# Cria um novo objeto QuickHashIntHash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashinthash.construct.php

---

# QuickHashIntHash::\_\_construct

(PECL quickhash >= Unknown)

QuickHashIntHash::\_\_construct — Cria um novo objeto QuickHashIntHash

### Descrição

public function **QuickHashIntHash::\_\_construct**([int](language.types.integer.md) `$size`, [int](language.types.integer.md) `$options` = ?)

Este construtor cria um novo [QuickHashIntHash](class.quickhashinthash.md). O tamanho é a quantidade de
listas de buckets a serem criadas. Quanto mais listas houver, menos colisões irão
existir. Opções também são suportadas.

### Parâmetros

`size`
:   A quantidade de listas de buckets a serem configuradas. O número informado será
    automaticamente arredondado para a próxima potência de dois. Também é
    automaticamente limitado de `64` a `4194304`.

`options`
:   As opções que podem ser passadas são: **`QuickHashIntHash::CHECK_FOR_DUPES`**,
    que garante que nenhuma entrada duplicada seja adicionada ao hash;
    **`QuickHashIntHash::DO_NOT_USE_ZEND_ALLOC`** para não usar o gerenciador de memória interna do PHP,
    bem como uma das seguintes opções: **`QuickHashIntHash::HASHER_NO_HASH`**,
    **`QuickHashIntHash::HASHER_JENKINS1`** ou **`QuickHashIntHash::HASHER_JENKINS2`**.
    Estas três últimas configuram qual algoritmo de hash usar. Todas as opções
    podem ser combinadas usando máscaras de bits.

### Valor Retornado

Retorna um novo objeto [QuickHashIntHash](class.quickhashinthash.md).

### Examples

**Exemplo #1 Exemplo de **QuickHashIntHash::\_\_construct()****

```
<?php
var_dump( new QuickHashIntHash( 1024 ) );
var_dump( new QuickHashIntHash( 1024, QuickHashIntHash::CHECK_FOR_DUPES ) );
var_dump(
    new QuickHashIntHash(
        1024,
        QuickHashIntHash::DO_NOT_USE_ZEND_ALLOC | QuickHashIntHash::HASHER_JENKINS2
    )
);
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
