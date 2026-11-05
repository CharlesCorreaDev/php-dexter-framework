# Ordena array mantendo associação de índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/collator.asort.php

---

# Collator::asort

# collator\_asort

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Collator::asort -- collator\_asort — Ordena array mantendo associação de índice

### Descrição

Estilo orientado a objetos

public function **Collator::asort**([array](language.types.array.md) `&$array`, [int](language.types.integer.md) `$flags` = **`Collator::SORT_REGULAR`**): [bool](language.types.boolean.md)

Estilo procedural

function **collator\_asort**([Collator](class.collator.md) `$object`, [array](language.types.array.md) `&$array`, [int](language.types.integer.md) `$flags` = **`Collator::SORT_REGULAR`**): [bool](language.types.boolean.md)

Esta função ordena um array de forma que seus índices mantenham as
correlações com os elementos aos quais estão associados. Isto é usado
principalmente ao ordenar arrays associativos onde a ordem real dos elementos é
significativa. Elementos dos arrays terão a ordenação conforme as regras
atuais da localidade.

Equivalente à função padrão do PHP
[asort()](function.asort.md).

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

    O valor padrão de `flags` é
    **`Collator::SORT_REGULAR`**.
    Também é usado se um valor inválido de `flags` tiver sido especificado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **collator\_asort()****

```
<?php
$coll = collator_create( 'en_US' );
$arr = array(
     'a' => '100',
     'b' => '50',
     'c' => '7'
);
collator_asort( $coll, $arr, Collator::SORT_NUMERIC );
var_export( $arr );

collator_asort( $coll, $arr, Collator::SORT_STRING );
var_export( $arr );
?>
```

O exemplo acima produzirá:

```
array (
  'c' => '7',
  'b' => '50',
  'a' => '100',
)array (
  'a' => '100',
  'b' => '50',
  'c' => '7',
)
```

### Veja também

- [Constantes de Collator](class.collator.md#intl.collator-constants)
- [collator\_sort()](collator.sort.md) - Ordena um array usando o agrupador especificado
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
