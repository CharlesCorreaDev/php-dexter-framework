# Define parada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-brush-gradient.setstop.php

---

# UI\Draw\Brush\Gradient::setStop

(UI 2.0.0)

UI\Draw\Brush\Gradient::setStop — Define parada

### Descrição

public function **UI\Draw\Brush\Gradient::setStop**([int](language.types.integer.md) `$index`, [float](language.types.float.md) `$position`, [UI\Draw\Color](class.ui-draw-color.md) `$color`): [bool](language.types.boolean.md)

public function **UI\Draw\Brush\Gradient::setStop**([int](language.types.integer.md) `$index`, [float](language.types.float.md) `$position`, [int](language.types.integer.md) `$color`): [bool](language.types.boolean.md)

### Parâmetros

`index`
:   O índice da parada de gradiente a ser definida.

`position`
:   A posição para a parada de gradiente.

`color`
:   A cor para a parada de gradiente, pode ser UI\Draw\Color ou no formato RRGGBBAA.

### Valor Retornado

Indicação de sucesso.

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
