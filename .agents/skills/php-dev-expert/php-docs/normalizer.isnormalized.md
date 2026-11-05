# Verifica se a string fornecida já está normalizada
   na forma especificada.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/normalizer.isnormalized.php

---

# Normalizer::isNormalized

# normalizer\_is\_normalized

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Normalizer::isNormalized -- normalizer\_is\_normalized — 
Verifica se a string fornecida já está normalizada
na forma especificada.

### Descrição

Estilo orientado a objetos

public static function **Normalizer::isNormalized**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$form` = **`Normalizer::FORM_C`**): [bool](language.types.boolean.md)

Estilo procedural

function **normalizer\_is\_normalized**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$form` = **`Normalizer::FORM_C`**): [bool](language.types.boolean.md)

Verifica se a string fornecida já está normalizada
na forma especificada.

### Parâmetros

`string`
:   A string de entrada para verificar a normalização

`form`
:   Uma das formas de normalização.

### Valor Retornado

**`true`** se a string estiver normalizada, **`false`** caso contrário ou se houver um erro

### Examples

**Exemplo #1
Exemplo de **normalizer\_is\_normalized()****

```
<?php
$char_A_ring = "\xC3\x85"; // 'LATIN CAPITAL LETTER A WITH RING ABOVE' (U+00C5)
$char_combining_ring_above = "\xCC\x8A";  // 'COMBINING RING ABOVE' (U+030A)

$char_orig = 'A' . $char_combining_ring_above;
$char_norm = normalizer_normalize( 'A' . $char_combining_ring_above, Normalizer::FORM_C );

echo ( normalizer_is_normalized($char_orig, Normalizer::FORM_C) ) ? "normalized" : "not normalized";
echo '; ';
echo ( normalizer_is_normalized($char_norm, Normalizer::FORM_C) ) ? "normalized" : "not normalized";
?>
```

**Exemplo #2 Exemplo orientado a objetos**

```
<?php
$char_A_ring = "\xC3\x85"; // 'LATIN CAPITAL LETTER A WITH RING ABOVE' (U+00C5)
$char_combining_ring_above = "\xCC\x8A";  // 'COMBINING RING ABOVE' (U+030A)

$char_orig = 'A' . $char_combining_ring_above;
$char_norm = Normalizer::normalize( 'A' . $char_combining_ring_above, Normalizer::FORM_C );

echo ( Normalizer::isNormalized($char_orig, Normalizer::FORM_C) ) ? "normalized" : "not normalized";
echo '; ';
echo ( Normalizer::isNormalized($char_norm, Normalizer::FORM_C) ) ? "normalized" : "not normalized";
?>
```

O exemplo acima produzirá:

```
not normalized; normalized
```

### Veja também

- [normalizer\_normalize()](normalizer.normalize.md) - Normaliza a entrada fornecida e retorna a string normalizada

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
