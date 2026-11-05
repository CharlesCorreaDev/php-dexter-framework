# Define o nível de restrição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/spoofchecker.setrestrictionlevel.php

---

# Spoofchecker::setRestrictionLevel

(PHP 7 >= 7.3.0, PHP 8)

Spoofchecker::setRestrictionLevel — Define o nível de restrição

### Descrição

public function **Spoofchecker::setRestrictionLevel**([int](language.types.integer.md) `$level`): [void](language.types.void.md)

Define o nível de restrição de [SpoofChecker::isSuspicious()](spoofchecker.issuspicious.md).

### Parâmetros

`level`
:   O nível de restrição de [SpoofChecker::isSuspicious()](spoofchecker.issuspicious.md).
    Uma das constantes
    **`Spoofchecker::ASCII`**,
    **`Spoofchecker::SINGLE_SCRIPT_RESTRICTIVE`**,
    **`Spoofchecker::HIGHLY_RESTRICTIVE`**,
    **`Spoofchecker::MODERATELY_RESTRICTIVE`**,
    **`Spoofchecker::MINIMALLY_RESTRICTIVE`** ou
    **`Spoofchecker::UNRESTRICTIVE`**.
    O padrão é **`Spoofchecker::HIGHLY_RESTRICTIVE`**.

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
