# Remove/exclui uma constante já definida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.runkit7-constant-remove.php

---

# runkit7\_constant\_remove

(PECL runkit7 >= Unknown)

runkit7\_constant\_remove — 
Remove/exclui uma constante já definida

### Descrição

function **runkit7\_constant\_remove**([string](language.types.string.md) `$constant_name`): [bool](language.types.boolean.md)

### Parâmetros

`constant_name`
:   Nome da constante a ser removida. Pode ser o nome de uma constante global,
    ou `classname::constname`, indicando uma constante de classe.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [define()](function.define.md) - Define uma constante com nome
- [runkit7\_constant\_add()](function.runkit7-constant-add.md) - Semelhante a define(), mas permite definir também em definições de classe
- [runkit7\_constant\_redefine()](function.runkit7-constant-redefine.md) - Redefine uma constante já definida

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
