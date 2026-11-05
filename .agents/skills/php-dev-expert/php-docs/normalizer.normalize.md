# Normaliza a entrada fornecida e retorna a string normalizada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/normalizer.normalize.php

---

# Normalizer::normalize

# normalizer\_normalize

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Normalizer::normalize -- normalizer\_normalize — 
Normaliza a entrada fornecida e retorna a string normalizada

### Descrição

Estilo orientado a objetos

public static function **Normalizer::normalize**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$form` = **`Normalizer::FORM_C`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **normalizer\_normalize**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$form` = **`Normalizer::FORM_C`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Normaliza a entrada fornecida e retorna a string normalizada

### Parâmetros

`string`
:   A string de entrada a ser normalizada

`form`
:   Uma das formas de normalização.

### Valor Retornado

A string normalizada ou **`false`** se ocorrer um erro.

### Examples

**Exemplo #1
Exemplo de **normalizer\_normalize()****

```
<?php
$char_A_ring = "\xC3\x85"; // 'LATIN CAPITAL LETTER A WITH RING ABOVE' (U+00C5)
$char_combining_ring_above = "\xCC\x8A";  // 'COMBINING RING ABOVE' (U+030A)

$char_1 = normalizer_normalize( $char_A_ring, Normalizer::FORM_C );
$char_2 = normalizer_normalize( 'A' . $char_combining_ring_above, Normalizer::FORM_C );

echo urlencode($char_1);
echo ' ';
echo urlencode($char_2);
?>
```

**Exemplo #2 Exemplo orientado a objetos**

```
<?php
$char_A_ring = "\xC3\x85"; // 'LATIN CAPITAL LETTER A WITH RING ABOVE' (U+00C5)
$char_combining_ring_above = "\xCC\x8A";  // 'COMBINING RING ABOVE' (U+030A)

$char_1 = Normalizer::normalize( $char_A_ring, Normalizer::FORM_C );
$char_2 = Normalizer::normalize( 'A' . $char_combining_ring_above, Normalizer::FORM_C );

echo urlencode($char_1);
echo ' ';
echo urlencode($char_2);
?>
```

O exemplo acima produzirá:

```
%C3%85 %C3%85
```

### Veja também

- [normalizer\_is\_normalized()](normalizer.isnormalized.md) - Verifica se a string fornecida já está normalizada
  na forma especificada.

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
