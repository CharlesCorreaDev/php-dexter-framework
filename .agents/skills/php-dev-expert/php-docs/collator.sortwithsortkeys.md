# Ordena um array usando agrupador e chaves de ordenação especificados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/collator.sortwithsortkeys.php

---

# Collator::sortWithSortKeys

# collator\_sort\_with\_sort\_keys

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Collator::sortWithSortKeys -- collator\_sort\_with\_sort\_keys — Ordena um array usando agrupador e chaves de ordenação especificados

### Descrição

Estilo orientado a objetos

public function **Collator::sortWithSortKeys**([array](language.types.array.md) `&$array`): [bool](language.types.boolean.md)

Estilo procedural

function **collator\_sort\_with\_sort\_keys**([Collator](class.collator.md) `$object`, [array](language.types.array.md) `&$array`): [bool](language.types.boolean.md)

Similar à função [collator\_sort()](collator.sort.md)
mas usa chaves de ordenação ICU produzidas por ucol\_getSortKey() para ganhar mais velocidade
em arrays grandes.

### Parâmetros

`object`
:   Objeto [Collator](class.collator.md).

`array`
:   Array de strings a ordenar

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **collator\_sort\_with\_sort\_keys()****

```
<?php
$arr  = array( 'Köpfe', 'Kypper', 'Kopfe' );
$coll = collator_create( 'sv' );

collator_sort_with_sort_keys( $coll, $arr );
var_export( $arr );
?>
```

O exemplo acima produzirá:

```
array (
  0 => 'Kopfe',
  1 => 'Kypper',
  2 => 'Köpfe',
)
```

### Veja também

- [Constantes Collator](class.collator.md#intl.collator-constants)
- [collator\_sort()](collator.sort.md) - Ordena um array usando o agrupador especificado
- [collator\_asort()](collator.asort.md) - Ordena array mantendo associação de índice

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
