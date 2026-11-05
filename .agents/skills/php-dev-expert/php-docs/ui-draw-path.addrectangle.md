# Desenha um retângulo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-path.addrectangle.php

---

# UI\Draw\Path::addRectangle

(UI 0.9.9)

UI\Draw\Path::addRectangle — Desenha um retângulo

### Descrição

public function **UI\Draw\Path::addRectangle**([UI\Point](class.ui-point.md) `$point`, [UI\Size](class.ui-size.md) `$size`)

Mapeia um caminho de um retângulo com a dimensão informada, no ponto especificado.

### Parâmetros

`point`
:   O ponto de início da forma.

`size`
:   A dimensão do retângulo.

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
