# Define a cor de preenchimento a ser usada para desenhar objetos preenchidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.setfillcolor.php

---

# GmagickDraw::setfillcolor

(PECL gmagick >= Unknown)

GmagickDraw::setfillcolor — Define a cor de preenchimento a ser usada para desenhar objetos preenchidos

### Descrição

public function **GmagickDraw::setfillcolor**([mixed](language.types.mixed.md) `$color`): [GmagickDraw](class.gmagickdraw.md)

Define a cor de preenchimento a ser usada para desenhar objetos preenchidos

### Parâmetros

`color`
:   [GmagickPixel](class.gmagickpixel.md) ou [string](language.types.string.md) indicando a cor a ser usada para preenchimento.

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
