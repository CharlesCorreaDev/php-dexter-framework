# Constrói uma nova caixa de giro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-spin.construct.php

---

# UI\Controls\Spin::\_\_construct

(UI 0.9.9)

UI\Controls\Spin::\_\_construct — Constrói uma nova caixa de giro

### Descrição

public function **UI\Controls\Spin::\_\_construct**([int](language.types.integer.md) `$min`, [int](language.types.integer.md) `$max`)

Constrói uma nova caixa de giro com a faixa informada.

### Parâmetros

`min`
:   O mínimo valor permitido.

`max`
:   O máximo valor permitido.

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
