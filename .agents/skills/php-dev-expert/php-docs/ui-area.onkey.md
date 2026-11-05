# Função de retorno de tecla

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-area.onkey.php

---

# UI\Area::onKey

(UI 0.9.9)

UI\Area::onKey — Função de retorno de tecla

### Descrição

protected function **UI\Area::onKey**([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$ext`, [int](language.types.integer.md) `$flags`)

Deve ser executado em eventos de teclas.

### Parâmetros

`key`
:   A tecla pressionada.

`ext`
:   O código estendido da tecla pressionada.

`flags`
:   Modificadores de evento.

### Valor Retornado

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
