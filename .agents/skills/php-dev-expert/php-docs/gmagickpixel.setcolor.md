# Define a cor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickpixel.setcolor.php

---

# GmagickPixel::setcolor

(PECL gmagick >= Unknown)

GmagickPixel::setcolor — Define a cor

### Descrição

public function **GmagickPixel::setcolor**([string](language.types.string.md) `$color`): [GmagickPixel](class.gmagickpixel.md)

Define a cor descrita pelo objeto [GmagickPixel](class.gmagickpixel.md), com uma string (por exemplo, "blue", "#0000ff", "rgb(0,0,255)", "cmyk(100,100,100,10)" etc.).

### Parâmetros

`color`
:   A definição de cor a ser usada para inicializar o objeto [GmagickPixel](class.gmagickpixel.md).

### Valor Retornado

O objeto [GmagickPixel](class.gmagickpixel.md).

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
