# Define a cor usada para traçar os contornos dos objetos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.setstrokecolor.php

---

# GmagickDraw::setstrokecolor

(PECL gmagick >= Unknown)

GmagickDraw::setstrokecolor — Define a cor usada para traçar os contornos dos objetos

### Descrição

public function **GmagickDraw::setstrokecolor**([mixed](language.types.mixed.md) `$color`): [GmagickDraw](class.gmagickdraw.md)

Define a cor usada para traçar os contornos dos objetos

### Parâmetros

`color`
:   [GmagickPixel](class.gmagickpixel.md) ou [string](language.types.string.md) representando a cor do traço.

### Valor Retornado

O objeto [GmagickDraw](class.gmagickdraw.md) em caso de sucesso.

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
