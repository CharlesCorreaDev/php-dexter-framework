# Constrói um novo leiaute de texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-text-layout.construct.php

---

# UI\Draw\Text\Layout::\_\_construct

(UI 0.9.9)

UI\Draw\Text\Layout::\_\_construct — Constrói um novo leiaute de texto

### Descrição

public function **UI\Draw\Text\Layout::\_\_construct**([string](language.types.string.md) `$text`, [UI\Draw\Text\Font](class.ui-draw-text-font.md) `$font`, [float](language.types.float.md) `$width`)

Constrói um novo leiaute de texto

### Parâmetros

`text`
:   O texto para o leiaute.

`font`
:   A fonte a ser usada praa escrita.

`width`
:   A largura do leiaute.

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
