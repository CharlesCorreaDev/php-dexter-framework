# A classe IntlDatePatternGenerator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.intldatepatterngenerator.php

---

# A classe IntlDatePatternGenerator

(PHP 8 >= 8.1.0)

## Introdução

Gera strings de padrão de formatação para data e/ou horário dependentes de localidade, adequadas para uso em [IntlDateFormatter](class.intldateformatter.md).

## Resumo da classe

class ****IntlDatePatternGenerator****
{

/\* Métodos \*/

public function [\_\_construct](intldatepatterngenerator.create.md)([?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**)

public static function [create](intldatepatterngenerator.create.md)([?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlDatePatternGenerator](class.intldatepatterngenerator.md)

public function [getBestPattern](intldatepatterngenerator.getbestpattern.md)([string](language.types.string.md) `$skeleton`): [string](language.types.string.md)|[false](language.types.singleton.md)

}

## Índice

- [IntlDatePatternGenerator::create](intldatepatterngenerator.create.md) — Cria uma nova instância de IntlDatePatternGenerator
- [IntlDatePatternGenerator::getBestPattern](intldatepatterngenerator.getbestpattern.md) — Determina o formato de data/horário mais adequado

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
