# Cria um novo objeto QuickHashIntSet

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashintset.construct.php

---

# QuickHashIntSet::\_\_construct

(PECL quickhash >= Unknown)

QuickHashIntSet::\_\_construct — Cria um novo objeto QuickHashIntSet

### Descrição

public function **QuickHashIntSet::\_\_construct**([int](language.types.integer.md) `$size`, [int](language.types.integer.md) `$options` = ?)

Este construtor cria um novo [QuickHashIntSet](class.quickhashintset.md). O tamanho é a quantidade de
listas de buckets a serem criadas. Quanto mais listas houver, menos colisões irão
ocorrer. Opções também são suportadas.

### Parâmetros

`size`
:   A quantidade de listas de buckets a serem configuradas. O número informado será
    automaticamente arredondado para a próxima potência de dois. Também é
    automaticamente limitado de `4` a `4194304`.

`options`
:   As opções que podem ser passadas são: **`QuickHashIntSet::CHECK_FOR_DUPES`**,
    que garante que nenhuma entrada duplicada seja adicionada ao conjunto;
    **`QuickHashIntSet::DO_NOT_USE_ZEND_ALLOC`** para não usar o gerenciador de memória interna do PHP,
    bem como uma das seguintes: **`QuickHashIntSet::HASHER_NO_HASH`**,
    **`QuickHashIntSet::HASHER_JENKINS1`** ou **`QuickHashIntSet::HASHER_JENKINS2`**.
    Estas três últimas configuram qual algoritmo de hash deve ser usado. Todas as opções
    podem ser combinadas usando máscaras de bits.

### Valor Retornado

Retorna um novo objeto [QuickHashIntSet](class.quickhashintset.md).

### Examples

**Exemplo #1 Exemplo de **QuickHashIntSet::\_\_construct()****

```
<?php
var_dump( new QuickHashIntSet( 1024 ) );
var_dump( new QuickHashIntSet( 1024, QuickHashIntSet::CHECK_FOR_DUPES ) );
var_dump(
    new QuickHashIntSet(
        1024,
        QuickHashIntSet::DO_NOT_USE_ZEND_ALLOC | QuickHashIntSet::HASHER_JENKINS2
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
