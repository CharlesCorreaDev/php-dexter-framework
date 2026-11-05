# Constrói uma nova dimensão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-size.construct.php

---

# UI\Size::\_\_construct

(UI 0.9.9)

UI\Size::\_\_construct — Constrói uma nova dimensão

### Descrição

public function **UI\Size::\_\_construct**([float](language.types.float.md) `$width`, [float](language.types.float.md) `$height`)

Constrói uma nova dimensão usando a nova largura e altura.

### Parâmetros

`width`
:   A nova largura.

`height`
:   A nova altura.

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
