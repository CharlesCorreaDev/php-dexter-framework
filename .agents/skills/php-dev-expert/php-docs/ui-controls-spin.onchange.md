# Manipulador de alteração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-spin.onchange.php

---

# UI\Controls\Spin::onChange

(UI 0.9.9)

UI\Controls\Spin::onChange — Manipulador de alteração

### Descrição

protected function **UI\Controls\Spin::onChange**()

Executado quando o valor nesta caixa de giro é alterado.

### Parâmetros

Esta função não possui parâmetros.

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
