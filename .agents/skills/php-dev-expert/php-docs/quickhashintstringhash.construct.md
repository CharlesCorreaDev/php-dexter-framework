# Cria um novo objeto QuickHashIntStringHash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/quickhashintstringhash.construct.php

---

# QuickHashIntStringHash::\_\_construct

(PECL quickhash >= Unknown)

QuickHashIntStringHash::\_\_construct — Cria um novo objeto QuickHashIntStringHash

### Descrição

public function **QuickHashIntStringHash::\_\_construct**([int](language.types.integer.md) `$size`, [int](language.types.integer.md) `$options` = 0)

Este construtor cria um novo [QuickHashIntStringHash](class.quickhashintstringhash.md). O tamanho é a quantidade de
listas de buckets a serem criadas. Quanto mais listas houver, menos colisões irão
ocorrer. Opções também são suportadas.

### Parâmetros

`size`
:   A quantidade de listas de buckets a serem configuradas. O número informado será
    automaticamente arredondado para a próxima potência de dois. Também é
    automaticamente limitado de `64` a `4194304`.

`options`
:   As opções que podem ser passadas são: **`QuickHashIntStringHash::CHECK_FOR_DUPES`**,
    que garante que nenhuma entrada duplicada seja adicionada ao hash;
    **`QuickHashIntStringHash::DO_NOT_USE_ZEND_ALLOC`** para não usar o gerenciador de memória interna do PHP,
    bem como uma das seguintes opções: **`QuickHashIntStringHash::HASHER_NO_HASH`**,
    **`QuickHashIntStringHash::HASHER_JENKINS1`** ou **`QuickHashIntStringHash::HASHER_JENKINS2`**.
    Essas três últimas configuram qual algoritmo de hash usar. Todas as opções
    podem ser combinadas usando máscaras de bits.

### Valor Retornado

Retorna um novo [QuickHashIntStringHash](class.quickhashintstringhash.md).

### Examples

**Exemplo #1 Exemplo de **QuickHashIntStringHash::\_\_construct()****

```
<?php
var_dump( new QuickHashIntStringHash( 1024 ) );
var_dump( new QuickHashIntStringHash( 1024, QuickHashIntStringHash::CHECK_FOR_DUPES ) );
var_dump(
    new QuickHashIntStringHash(
        1024,
        QuickHashIntStringHash::DO_NOT_USE_ZEND_ALLOC | QuickHashIntStringHash::HASHER_JENKINS2
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
