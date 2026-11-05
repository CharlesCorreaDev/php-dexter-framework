# Anexa opção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-radio.append.php

---

# UI\Controls\Radio::append

(UI 0.9.9)

UI\Controls\Radio::append — Anexa opção

### Descrição

public function **UI\Controls\Radio::append**([string](language.types.string.md) `$text`)

Anexa uma nova opção a este conjunto de botões de rádio.

### Parâmetros

`text`
:   O texto (rótulo) para a opção.

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
