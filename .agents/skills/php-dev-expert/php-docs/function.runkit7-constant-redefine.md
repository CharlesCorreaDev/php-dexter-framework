# Redefine uma constante já definida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.runkit7-constant-redefine.php

---

# runkit7\_constant\_redefine

(PECL runkit7 >= Unknown)

runkit7\_constant\_redefine — Redefine uma constante já definida

### Descrição

function **runkit7\_constant\_redefine**([string](language.types.string.md) `$constant_name`, [mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$new_visibility` = ?): [bool](language.types.boolean.md)

### Parâmetros

`constant_name`
:   Constante a ser redefinida. O nome de uma constante global,
    ou `classname::constname` indicando uma constante de classe.

`value`
:   Valor a ser atribuído à constante.

`new_visibility`
:   A nova visibilidade da constante, para constantes de classe.
    Inalterado por padrão.
    Uma das constantes **`RUNKIT7_ACC_*`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [runkit7\_constant\_add()](function.runkit7-constant-add.md) - Semelhante a define(), mas permite definir também em definições de classe
- [runkit7\_constant\_remove()](function.runkit7-constant-remove.md) - Remove/exclui uma constante já definida

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
