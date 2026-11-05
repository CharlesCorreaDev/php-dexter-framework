# Cria uma nova instância de IntlDatePatternGenerator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldatepatterngenerator.create.php

---

# IntlDatePatternGenerator::create

# IntlDatePatternGenerator::\_\_construct

(PHP 8 >= 8.1.0)

IntlDatePatternGenerator::create -- IntlDatePatternGenerator::\_\_construct — Cria uma nova instância de IntlDatePatternGenerator

### Descrição

public static function **IntlDatePatternGenerator::create**([?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlDatePatternGenerator](class.intldatepatterngenerator.md)

public function **IntlDatePatternGenerator::\_\_construct**([?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**)

Cria uma nova instância de [IntlDatePatternGenerator](class.intldatepatterngenerator.md).

### Parâmetros

`locale`
:   A localidade.
    Se **`null`** for passado, usa a configuração ini [intl.default\_locale](intl.configuration.md#ini.intl.default-locale).

### Valor Retornado

Retorna uma instância de [IntlDatePatternGenerator](class.intldatepatterngenerator.md) em caso de sucesso ou **`null`** em caso de falha.

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
