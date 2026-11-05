# Define limite de junção aguda

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-stroke.setmiterlimit.php

---

# UI\Draw\Stroke::setMiterLimit

(UI 0.9.9)

UI\Draw\Stroke::setMiterLimit — Define limite de junção aguda

### Descrição

public function **UI\Draw\Stroke::setMiterLimit**([float](language.types.float.md) `$limit`)

Define o limite de junção aguda para este traço.

### Parâmetros

`limit`
:   O novo limite.

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
