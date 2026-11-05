# Semelhante a define(), mas permite definir também em definições de classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.runkit7-constant-add.php

---

# runkit7\_constant\_add

(PECL runkit7 >= Unknown)

runkit7\_constant\_add — 
Semelhante a define(), mas permite definir também em definições de classe

### Descrição

function **runkit7\_constant\_add**([string](language.types.string.md) `$constant_name`, [mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$newVisibility` = ?): [bool](language.types.boolean.md)

### Parâmetros

`constant_name`
:   Nome da constante a ser declarada. Uma string para indicar uma constante global,
    ou `classname::constname` para indicar uma constante de classe.

`value`
:   Valor NULL, Bool, Long, Double, String, Array ou Resource para armazenar na nova constante.

`newVisibility`
:   Visibilidade da constante, para constantes de classe. Pública por padrão.
    Uma das constantes **`RUNKIT7_ACC_*`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [define()](function.define.md) - Define uma constante com nome
- [runkit7\_constant\_redefine()](function.runkit7-constant-redefine.md) - Redefine uma constante já definida
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
