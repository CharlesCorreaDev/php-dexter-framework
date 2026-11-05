# A classe IntlListFormatter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.intllistformatter.php

---

# A classe IntlListFormatter

(No version information available, might only be in Git)

## Introdução

Formata, ordena e pontua uma lista de itens de acordo com regras específicas de localidade.
Requer a ICU 67 ou posterior.

## Resumo da classe

class ****IntlListFormatter****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[TYPE\_AND](class.intllistformatter.md#intllistformatter.constants.type-and);

public
const
[int](language.types.integer.md)
[TYPE\_OR](class.intllistformatter.md#intllistformatter.constants.type-or);

public
const
[int](language.types.integer.md)
[TYPE\_UNITS](class.intllistformatter.md#intllistformatter.constants.type-units);

public
const
[int](language.types.integer.md)
[WIDTH\_WIDE](class.intllistformatter.md#intllistformatter.constants.width-wide);

public
const
[int](language.types.integer.md)
[WIDTH\_SHORT](class.intllistformatter.md#intllistformatter.constants.width-short);

public
const
[int](language.types.integer.md)
[WIDTH\_NARROW](class.intllistformatter.md#intllistformatter.constants.width-narrow);

/\* Métodos \*/

public function [\_\_construct](intllistformatter.construct.md)([string](language.types.string.md) `$locale`, [int](language.types.integer.md) `$type` = **`IntlListFormatter::TYPE_AND`**, [int](language.types.integer.md) `$width` = **`IntlListFormatter::WIDTH_WIDE`**)

public function [format](intllistformatter.format.md)([array](language.types.array.md) `$list`): [string](language.types.string.md)|[false](language.types.singleton.md)

}

## Constantes predefinidas

**`IntlListFormatter::TYPE_AND`**
:   Formata uma lista usando conjunção (ex.: "A, B e C").

**`IntlListFormatter::TYPE_OR`**
:   Formata uma lista usando disjunção (ex.: "A, B ou C").

**`IntlListFormatter::TYPE_UNITS`**
:   Formata uma lista de unidades (ex.: "3 ft, 7 in").

**`IntlListFormatter::WIDTH_WIDE`**
:   Usa o formato de lista mais amplo (mais prolixo), typicamente com conjunções soletradas inteiramente.

**`IntlListFormatter::WIDTH_SHORT`**
:   Usa um formato de lista curto, tipicamente usando abreviações.

**`IntlListFormatter::WIDTH_NARROW`**
:   Usa o formato de lista mais enxuto, com pontuação mínima.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | A classe foi adicionada. |

## Índice

- [IntlListFormatter::\_\_construct](intllistformatter.construct.md) — Cria uma instância de IntlListFormatter
- [IntlListFormatter::format](intllistformatter.format.md) — Formata uma lista de itens

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
