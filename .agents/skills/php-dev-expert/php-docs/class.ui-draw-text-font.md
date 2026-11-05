# Representa uma fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-draw-text-font.php

---

# Representa uma fonte

(UI 0.9.9)

## Introdução

Carrega uma fonte descrita.

## Resumo da classe

class **UI\Draw\Text\Font**
{

/\* Constructor \*/

public function [\_\_construct](ui-draw-text-font.construct.md)([UI\Draw\Text\Font\Descriptor](class.ui-draw-text-font-descriptor.md) `$descriptor`)

/\* Métodos \*/

public function [getAscent](ui-draw-text-font.getascent.md)(): [float](language.types.float.md)

public function [getDescent](ui-draw-text-font.getdescent.md)(): [float](language.types.float.md)

public function [getLeading](ui-draw-text-font.getleading.md)(): [float](language.types.float.md)

public function [getUnderlinePosition](ui-draw-text-font.getunderlineposition.md)(): [float](language.types.float.md)

public function [getUnderlineThickness](ui-draw-text-font.getunderlinethickness.md)(): [float](language.types.float.md)

}

## Índice

- [UI\Draw\Text\Font::\_\_construct](ui-draw-text-font.construct.md) — Constrói uma nova fonte
- [UI\Draw\Text\Font::getAscent](ui-draw-text-font.getascent.md) — Medidas de fonte
- [UI\Draw\Text\Font::getDescent](ui-draw-text-font.getdescent.md) — Medidas de fonte
- [UI\Draw\Text\Font::getLeading](ui-draw-text-font.getleading.md) — Medidas de fonte
- [UI\Draw\Text\Font::getUnderlinePosition](ui-draw-text-font.getunderlineposition.md) — Medidas de fonte
- [UI\Draw\Text\Font::getUnderlineThickness](ui-draw-text-font.getunderlinethickness.md) — Medidas de fonte

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
