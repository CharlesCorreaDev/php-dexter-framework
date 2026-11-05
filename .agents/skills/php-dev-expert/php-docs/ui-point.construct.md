# Constrói um novo ponto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-point.construct.php

---

# UI\Point::\_\_construct

(UI 0.9.9)

UI\Point::\_\_construct — Constrói um novo ponto

### Descrição

public function **UI\Point::\_\_construct**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`)

Constrói um novo ponto usando novas coordenadas.

### Parâmetros

`x`
:   A nova coordenada X.

`y`
:   A nova coordenada Y.

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
