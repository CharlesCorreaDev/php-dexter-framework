# Retorna informação sobre um parâmetro em uma consulta preparada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-param-info.php

---

# ibase\_param\_info

(PHP 5, PHP 7 < 7.4.0)

ibase\_param\_info — Retorna informação sobre um parâmetro em uma consulta preparada

### Descrição

function **ibase\_param\_info**([resource](language.types.resource.md) `$query`, [int](language.types.integer.md) `$param_number`): [array](language.types.array.md)

Retorna um array com informações sobre um parâmetro após a consulta
ter sido preparada.

### Parâmetros

`query`
:   Um manipulador de query preparada do InterBase.

`param_number`
:   O índice do parâmetro.

### Valor Retornado

Retorna um array com as seguintes chaves: `name`,
`alias`, `relation`,
`length` e `type`.

### Veja também

- [ibase\_field\_info()](function.ibase-field-info.md) - Obtém informação sobre um campo
- [ibase\_num\_params()](function.ibase-num-params.md) - Retorna o número de parâmetros em uma consulta preparada

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
