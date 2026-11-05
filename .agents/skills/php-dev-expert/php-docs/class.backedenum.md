# A interface BackedEnum

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.backedenum.php

---

# A interface BackedEnum

(PHP 8 >= 8.1.0)

## Introdução

A interface **BackedEnum** é aplicada automaticamente pelo motor do PHP a
enumerações lastreadas. Não pode ser implementada por classes definidas pelo usuário.
Enumerações não podem substituir seus métodos, já que as implementações padrões são fornecidas
pelo motor. Está disponível apenas para verificações de tipo.

## Resumo da Interface

interface ****BackedEnum****
extends
[UnitEnum](class.unitenum.md) {

/\* Métodos \*/

public static function [from](backedenum.from.md)([int](language.types.integer.md)|[string](language.types.string.md) `$value`): static

public static function [tryFrom](backedenum.tryfrom.md)([int](language.types.integer.md)|[string](language.types.string.md) `$value`): [?](language.types.null.md)static

/\* Métodos herdados \*/

public static function [UnitEnum::cases](unitenum.cases.md)(): [array](language.types.array.md)

}

## Índice

- [BackedEnum::from](backedenum.from.md) — Mapeia um escalar para uma instância de enumeração
- [BackedEnum::tryFrom](backedenum.tryfrom.md) — Mapeia um escalar para uma instância de enumeração ou nulo

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
