# Constrói um novo descritor de fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-text-font-descriptor.construct.php

---

# UI\Draw\Text\Font\Descriptor::\_\_construct

(UI 0.9.9)

UI\Draw\Text\Font\Descriptor::\_\_construct — Constrói um novo descritor de fonte

### Descrição

public function **UI\Draw\Text\Font\Descriptor::\_\_construct**(  
    [string](language.types.string.md) `$family`,  
    [float](language.types.float.md) `$size`,  
    [int](language.types.integer.md) `$weight` = UI\Draw\Text\Font\Weight::Normal,  
    [int](language.types.integer.md) `$italic` = UI\Draw\Text\Font\Italic::Normal,  
    [int](language.types.integer.md) `$stretch` = UI\Draw\Text\Font\Stretch::Normal  
)

Constrói um novo descritor de fonte.

### Parâmetros

`family`
:   O nome de uma família de fontes válida.

`size`
:   A dimensão preferida da fonte.

`weight`
:   Constante de UI\Draw\Text\Font\Weight.

`italic`
:   Constante de UI\Draw\Text\Font\Italic.

`stretch`
:   Constante de UI\Draw\Text\Font\Stretch.

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
