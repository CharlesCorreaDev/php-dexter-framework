# Define as verificações que serão executadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/spoofchecker.setchecks.php

---

# Spoofchecker::setChecks

(PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0)

Spoofchecker::setChecks — Define as verificações que serão executadas

### Descrição

public function **Spoofchecker::setChecks**([int](language.types.integer.md) `$checks`): [void](language.types.void.md)

Define as verificações que serão executadas por [SpoofChecker::isSuspicious()](spoofchecker.issuspicious.md).

### Parâmetros

`checks`
:   As verificações que serão executadas por [SpoofChecker::isSuspicious()](spoofchecker.issuspicious.md).
    Uma máscara de bits das constantes
    **`Spoofchecker::SINGLE_SCRIPT_CONFUSABLE`**,
    **`Spoofchecker::MIXED_SCRIPT_CONFUSABLE`**,
    **`Spoofchecker::WHOLE_SCRIPT_CONFUSABLE`**,
    **`Spoofchecker::ANY_CASE`**,
    **`Spoofchecker::SINGLE_SCRIPT`**,
    **`Spoofchecker::INVISIBLE`**, ou
    **`Spoofchecker::CHAR_LIMIT`**.
    O padrão é realizar todas as verificações a partir da ICU 58; antes desta versão,
    **`Spoofchecker::SINGLE_SCRIPT`** era excluída.

### Valor Retornado

Nenhum valor é retornado.

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
