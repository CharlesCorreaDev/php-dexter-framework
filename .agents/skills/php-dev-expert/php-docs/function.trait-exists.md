# Verifica se a trait existe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trait-exists.php

---

# trait\_exists

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

trait\_exists — Verifica se a trait existe

### Descrição

function **trait\_exists**([string](language.types.string.md) `$trait`, [bool](language.types.boolean.md) `$autoload` = **`true`**): [bool](language.types.boolean.md)

### Parâmetros

`trait`
:   Nome da trait para verificação

`autoload`
:   Se deve-se [carregar automaticamente](language.oop5.autoload.md) a trait
    caso não tenha sido caregada.

### Valor Retornado

Retorna **`true`** se a Trait existir, **`false`** caso não exista.

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
