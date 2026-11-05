# Obtém limite de junção aguda

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-stroke.getmiterlimit.php

---

# UI\Draw\Stroke::getMiterLimit

(UI 0.9.9)

UI\Draw\Stroke::getMiterLimit — Obtém limite de junção aguda

### Descrição

public function **UI\Draw\Stroke::getMiterLimit**(): [float](language.types.float.md)

Recupera o limite de junção aguda para este traço.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O limite de junção aguda atual.

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
