# Especifica um intervalo de registros a serem recuperados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-range.php

---

# yaz\_range

(PHP 4 >= 4.0.1, PECL yaz >= 0.9.0)

yaz\_range — 
Especifica um intervalo de registros a serem recuperados

### Descrição

function **yaz\_range**([resource](language.types.resource.md) `$id`, [int](language.types.integer.md) `$start`, [int](language.types.integer.md) `$number`): [void](language.types.void.md)

Especifica um intervalo de registros a serem recuperados.

Esta função deve ser chamada antes de [yaz\_search()](function.yaz-search.md) ou
[yaz\_present()](function.yaz-present.md).

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

`start`
:   Especifica a posição do primeiro registro a ser recuperado.
    A numeração dos registros varia de 1 a [yaz\_hits()](function.yaz-hits.md).

`number`
:   Especifica o número de registros a serem recuperados.

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
