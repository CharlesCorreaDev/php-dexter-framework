# Define o prompt de comando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.phpdbg-prompt.php

---

# phpdbg\_prompt

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

phpdbg\_prompt — Define o prompt de comando

### Descrição

function **phpdbg\_prompt**([string](language.types.string.md) `$string`): [void](language.types.void.md)

Define o prompt de comando para a `string` fornecida.

### Parâmetros

`string`
:   A string a ser usada como prompt de comando.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [phpdbg\_color()](function.phpdbg-color.md) - Define a cor de certos elementos

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
