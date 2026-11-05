# Descritor de fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-draw-text-font-descriptor.php

---

# Descritor de fonte

(UI 0.9.9)

## Introdução

Descreve uma fonte.

## Resumo da classe

class **UI\Draw\Text\Font\Descriptor**
{

/\* Constructor \*/

public function [\_\_construct](ui-draw-text-font-descriptor.construct.md)(  
    [string](language.types.string.md) `$family`,  
    [float](language.types.float.md) `$size`,  
    [int](language.types.integer.md) `$weight` = UI\Draw\Text\Font\Weight::Normal,  
    [int](language.types.integer.md) `$italic` = UI\Draw\Text\Font\Italic::Normal,  
    [int](language.types.integer.md) `$stretch` = UI\Draw\Text\Font\Stretch::Normal  
)

/\* Métodos \*/

public function [getFamily](ui-draw-text-font-descriptor.getfamily.md)(): [string](language.types.string.md)

public function [getItalic](ui-draw-text-font-descriptor.getitalic.md)(): [int](language.types.integer.md)

public function [getSize](ui-draw-text-font-descriptor.getsize.md)(): [float](language.types.float.md)

public function [getStretch](ui-draw-text-font-descriptor.getstretch.md)(): [int](language.types.integer.md)

public function [getWeight](ui-draw-text-font-descriptor.getweight.md)(): [int](language.types.integer.md)

}

## Índice

- [UI\Draw\Text\Font\Descriptor::\_\_construct](ui-draw-text-font-descriptor.construct.md) — Constrói um novo descritor de fonte
- [UI\Draw\Text\Font\Descriptor::getFamily](ui-draw-text-font-descriptor.getfamily.md) — Obtém família de fonte
- [UI\Draw\Text\Font\Descriptor::getItalic](ui-draw-text-font-descriptor.getitalic.md) — Detecção de estilo
- [UI\Draw\Text\Font\Descriptor::getSize](ui-draw-text-font-descriptor.getsize.md) — Detecção de dimensão
- [UI\Draw\Text\Font\Descriptor::getStretch](ui-draw-text-font-descriptor.getstretch.md) — Detecção de estilo
- [UI\Draw\Text\Font\Descriptor::getWeight](ui-draw-text-font-descriptor.getweight.md) — Detecção de peso

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
