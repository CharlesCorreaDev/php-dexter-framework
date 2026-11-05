# Constrói uma nova caixa de verificação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-check.construct.php

---

# UI\Controls\Check::\_\_construct

(UI 0.9.9)

UI\Controls\Check::\_\_construct — Constrói uma nova caixa de verificação

### Descrição

public function **UI\Controls\Check::\_\_construct**([string](language.types.string.md) `$text`)

Constrói uma nova caixa de verificação.

### Parâmetros

`text`
:   O texto (rótulo) da caixa de verificação.

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
