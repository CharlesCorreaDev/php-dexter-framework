# Classe Reflection

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.reflection.php

---

# Classe Reflection

(PHP 5, PHP 7, PHP 8)

## Introdução

Classe de reflexão.

## Resumo da classe

class ****Reflection****
{

/\* Métodos \*/

public static function [export](reflection.export.md)([Reflector](class.reflector.md) `$reflector`, [bool](language.types.boolean.md) `$return` = **`false`**): [string](language.types.string.md)

public static function [getModifierNames](reflection.getmodifiernames.md)([int](language.types.integer.md) `$modifiers`): [array](language.types.array.md)

}

## Índice

- [Reflection::export](reflection.export.md) — Exports
- [Reflection::getModifierNames](reflection.getmodifiernames.md) — Obtém os nomes dos modificadores

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
