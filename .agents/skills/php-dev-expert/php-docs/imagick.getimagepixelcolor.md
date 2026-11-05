# Retorna a cor do pixel especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagepixelcolor.php

---

# Imagick::getImagePixelColor

(PECL imagick 2, PECL imagick 3)

Imagick::getImagePixelColor — Retorna a cor do pixel especificado

### Descrição

public function **Imagick::getImagePixelColor**([int](language.types.integer.md) `$x`, [int](language.types.integer.md) `$y`): [ImagickPixel](class.imagickpixel.md)

Retorna a cor do pixel especificado.

### Parâmetros

`x`
:   A coordenada X do pixel

`y`
:   A coordenada Y do pixel

### Valor Retornado

Retorna uma instância ImagickPixel para a cor nas coordenadas fornecidas.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

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
