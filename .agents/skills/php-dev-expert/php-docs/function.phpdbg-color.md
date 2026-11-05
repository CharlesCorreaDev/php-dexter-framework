# Define a cor de certos elementos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.phpdbg-color.php

---

# phpdbg\_color

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

phpdbg\_color — Define a cor de certos elementos

### Descrição

function **phpdbg\_color**([int](language.types.integer.md) `$element`, [string](language.types.string.md) `$color`): [void](language.types.void.md)

Define a cor informada no parâmetro `color` para o elemento do parâmetro `element`.

### Parâmetros

`element`
:   Uma das constantes **`PHPDBG_COLOR_*`**.

`color`
:   Uma string com o nome da cor. Um dos valores `white` (branca), `red` (vermelha),
    `green` (verde), `yellow` (amarela), `blue` (azul),
    `purple` (roxa), `cyan` (ciano) ou `black` (preta),
    opcionalmente com um traço `-bold` (negrito) ou `-underline` (sublinhado),
    por exemplo, `white-bold` ou `green-underline`.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [phpdbg\_prompt()](function.phpdbg-prompt.md) - Define o prompt de comando

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
