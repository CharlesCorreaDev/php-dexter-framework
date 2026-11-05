# Ordena um array usando o agrupador especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/collator.sort.php

---

# Collator::sort

# collator\_sort

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Collator::sort -- collator\_sort — Ordena um array usando o agrupador especificado

### Descrição

Estilo orientado a objetos

public function **Collator::sort**([array](language.types.array.md) `&$array`, [int](language.types.integer.md) `$flags` = **`Collator::SORT_REGULAR`**): [bool](language.types.boolean.md)

Estilo procedural

function **collator\_sort**([Collator](class.collator.md) `$object`, [array](language.types.array.md) `&$array`, [int](language.types.integer.md) `$flags` = **`Collator::SORT_REGULAR`**): [bool](language.types.boolean.md)

Esta função ordena um array conforme as regras da localidade atual.

Equivalente à função padrão do PHP
[sort()](function.sort.md) .

### Parâmetros

`object`
:   Objeto [Collator](class.collator.md).

`array`
:   Array de strings a ordenar.

`flags`
:   Tipo de ordenação opcional, um dos seguintes:

    - **`Collator::SORT_REGULAR`**
      - compara os itens normalmente (não altera os tipos)
    - **`Collator::SORT_NUMERIC`**
      - compara os itens numericamente
    - **`Collator::SORT_STRING`**
      - compara os itens como strings

    O tipo de ordenação padrão é **`Collator::SORT_REGULAR`**.
    Também é usado se um valor inválido de `flags` tiver sido especificado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **collator\_sort()****

```
<?php
$coll = collator_create( 'en_US' );
$arr  = array( 'at', 'às', 'as' );

var_export( $arr );
collator_sort( $coll, $arr );
var_export( $arr );
?>
```

O exemplo acima produzirá:

```
array (
  0 => 'at',
  1 => 'às',
  2 => 'as',
)array (
  0 => 'as',
  1 => 'às',
  2 => 'at',
)
```

### Veja também

- [Constantes de Collator](class.collator.md#intl.collator-constants)
- [collator\_asort()](collator.asort.md) - Ordena array mantendo associação de índice
- [collator\_sort\_with\_sort\_keys()](collator.sortwithsortkeys.md) - Ordena um array usando agrupador e chaves de ordenação especificados

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
