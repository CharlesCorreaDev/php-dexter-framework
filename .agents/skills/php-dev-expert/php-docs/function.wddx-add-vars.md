# Adiciona variáveis a um pacote WDDX com o IP especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wddx-add-vars.php

---

# wddx\_add\_vars

(PHP 4, PHP 5, PHP 7)

wddx\_add\_vars — Adiciona variáveis a um pacote WDDX com o IP especificado

**Aviso**

Esta função foi
*REMOVIDA* a partir do PHP 7.4.0.

### Descrição

function **wddx\_add\_vars**([resource](language.types.resource.md) `$packet_id`, [mixed](language.types.mixed.md) `$var_name`, [mixed](language.types.mixed.md) `...$var_names`): [bool](language.types.boolean.md)

Serializa as variáveis passadas e adiciona o resultado ao pacote escolhido.

### Parâmetros

Essa função recebe um número variável de parâmetros.

`packet_id`
:   Um pacote WDDX, retornado por [wddx\_packet\_start()](function.wddx-packet-start.md).

`var_name`
:   Pode ser uma string com o nome de uma variável ou um array contendo
    strings com nomes de variáveis ou contendo outro array, recursivamente.

`var_names`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
