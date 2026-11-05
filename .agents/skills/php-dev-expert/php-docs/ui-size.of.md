# Coerção de ponto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-size.of.php

---

# UI\Size::of

(UI 1.0.2)

UI\Size::of — Coerção de ponto

### Descrição

public static function **UI\Size::of**([float](language.types.float.md) `$size`): [UI\Size](class.ui-size.md)

public static function **UI\Size::of**([UI\Point](class.ui-point.md) `$point`): [UI\Size](class.ui-size.md)

Retorna um objeto UI\Size onde largura e altura são iguais às fornecidas, na forma de ponto flutuante ou UI\Point.

### Parâmetros

`size`
:   O valor para largura e altura.

`point`
:   O ponto a converter.

### Valor Retornado

A dimensão resultante.

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
