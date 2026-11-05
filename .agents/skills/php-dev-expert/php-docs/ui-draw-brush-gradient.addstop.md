# Adiciona parada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-brush-gradient.addstop.php

---

# UI\Draw\Brush\Gradient::addStop

(UI 2.0.0)

UI\Draw\Brush\Gradient::addStop — Adiciona parada

### Descrição

public function **UI\Draw\Brush\Gradient::addStop**([float](language.types.float.md) `$position`, [UI\Draw\Color](class.ui-draw-color.md) `$color`): [int](language.types.integer.md)

public function **UI\Draw\Brush\Gradient::addStop**([float](language.types.float.md) `$position`, [int](language.types.integer.md) `$color`): [int](language.types.integer.md)

Adiciona uma parada de gradiente com a cor informada e na posição especificada.

### Parâmetros

`position`
:   A posição para a nova parada de gradiente.

`color`
:   A cor para a nova parada de gradiente, pode ser UI\Draw\Color ou no formato RRGGBBAA.

### Valor Retornado

Número total de paradas de gradiente.

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
