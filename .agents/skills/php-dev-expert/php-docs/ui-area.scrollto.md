# Rolagem da áre

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-area.scrollto.php

---

# UI\Area::scrollTo

(UI 0.9.9)

UI\Area::scrollTo — Rolagem da áre

### Descrição

public function **UI\Area::scrollTo**([UI\Point](class.ui-point.md) `$point`, [UI\Size](class.ui-size.md) `$size`)

Rola pela área.

### Parâmetros

`point`
:   O ponto até o qual a área será rolada.

`size`
:   A dimensão do painel de rolagem.

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
