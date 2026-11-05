# Detecção de preenchimento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-box.ispadded.php

---

# UI\Controls\Box::isPadded

(UI 0.9.9)

UI\Controls\Box::isPadded — Detecção de preenchimento

### Descrição

public function **UI\Controls\Box::isPadded**(): [bool](language.types.boolean.md)

Detecta se o preenchimento está habilitado nesta caixa.

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
