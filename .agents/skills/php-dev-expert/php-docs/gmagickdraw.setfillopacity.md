# Define a opacidade de preenchimento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagickdraw.setfillopacity.php

---

# GmagickDraw::setfillopacity

(PECL gmagick >= Unknown)

GmagickDraw::setfillopacity — Define a opacidade de preenchimento

### Descrição

public function **GmagickDraw::setfillopacity**([float](language.types.float.md) `$fill_opacity`): [GmagickDraw](class.gmagickdraw.md)

Define a opacidade a ser usada ao desenhar usando a cor ou textura de preenchimento. Definir como 1.0 tornará o
preenchimento totalmente opaco.

### Parâmetros

`fill_opacity`
:   Opacidade de preenchimento.

### Valor Retornado

O objeto [GmagickDraw](class.gmagickdraw.md).

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
