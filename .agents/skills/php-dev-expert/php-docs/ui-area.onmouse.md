# Função de retorno de mouse

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-area.onmouse.php

---

# UI\Area::onMouse

(UI 0.9.9)

UI\Area::onMouse — Função de retorno de mouse

### Descrição

protected function **UI\Area::onMouse**([UI\Point](class.ui-point.md) `$areaPoint`, [UI\Size](class.ui-size.md) `$areaSize`, [int](language.types.integer.md) `$flags`)

Deve ser executado em eventos de mouse.

### Parâmetros

`areaPoint`
:   A coordenada do evento.

`areaSize`
:   A dimensão da área do evento.

`flags`
:   Modificadores de evento.

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
