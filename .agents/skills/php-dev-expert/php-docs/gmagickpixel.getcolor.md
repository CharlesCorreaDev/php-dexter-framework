# Retorna a cor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickpixel.getcolor.php

---

# GmagickPixel::getcolor

(PECL gmagick >= Unknown)

GmagickPixel::getcolor — Retorna a cor

### Descrição

public function **GmagickPixel::getcolor**([bool](language.types.boolean.md) `$as_array` = **`false`**, [bool](language.types.boolean.md) `$normalize_array` = **`false`**): [mixed](language.types.mixed.md)

Retorna a cor descrita pelo objeto [GmagickPixel](class.gmagickpixel.md), como uma [string](language.types.string.md) ou um [array](language.types.array.md). Se a cor tiver um canal de opacidade definido, ele será fornecido como o quarto valor da lista.

### Parâmetros

`as_array`
:   **`true`** para indicar o retorno de [array](language.types.array.md) em vez de [string](language.types.string.md).

`normalize_array`
:   **`true`** para normalizar os valores de cores.

### Valor Retornado

Uma [string](language.types.string.md) ou um [array](language.types.array.md) de valores de canal, cada um normalizado se **`true`** for informado no parâmetro `normalize_array`. Lança uma **GmagickPixelException** em caso de erro.

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
