# Coerção de dimensão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-point.at.php

---

# UI\Point::at

(UI 1.0.2)

UI\Point::at — Coerção de dimensão

### Descrição

public static function **UI\Point::at**([float](language.types.float.md) `$point`): [UI\Point](class.ui-point.md)

public static function **UI\Point::at**([UI\Size](class.ui-size.md) `$size`): [UI\Point](class.ui-point.md)

Retorna um objeto UI\Point onde x e y são iguais aos informados, na forma de ponto flutuante ou UI\Size.

### Parâmetros

`point`
:   Os valores para x e y.

`size`
:   A dimensão a ser convertida.

### Valor Retornado

O ponto resultante.

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
