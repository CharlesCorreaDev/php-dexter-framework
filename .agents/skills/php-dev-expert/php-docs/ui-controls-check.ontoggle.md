# Função de retorno de marcação de caixa de verificação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-check.ontoggle.php

---

# UI\Controls\Check::onToggle

(UI 0.9.9)

UI\Controls\Check::onToggle — Função de retorno de marcação de caixa de verificação

### Descrição

protected function **UI\Controls\Check::onToggle**()

Executada quando o status desta caixa de verificação é alterado.

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
