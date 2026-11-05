# Define cor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-text-layout.setcolor.php

---

# UI\Draw\Text\Layout::setColor

(UI 0.9.9)

UI\Draw\Text\Layout::setColor — Define cor

### Descrição

public function **UI\Draw\Text\Layout::setColor**([UI\Draw\Color](class.ui-draw-color.md) `$color`, [int](language.types.integer.md) `$start` = 0, [int](language.types.integer.md) `$end` = ?)

public function **UI\Draw\Text\Layout::setColor**([int](language.types.integer.md) `$color`, [int](language.types.integer.md) `$start` = 0, [int](language.types.integer.md) `$end` = ?)

Define a cor para todo o texto do leiaute ou para parte dele.

### Parâmetros

`color`
:   A cor a ser usada.

`start`
:   O caractere inicial.

`end`
:   O caractere final, o padrão é o final da string.

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
