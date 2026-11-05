# Retorna o número de parâmetros em uma consulta preparada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-num-params.php

---

# ibase\_num\_params

(PHP 5, PHP 7 < 7.4.0)

ibase\_num\_params — Retorna o número de parâmetros em uma consulta preparada

### Descrição

function **ibase\_num\_params**([resource](language.types.resource.md) `$query`): [int](language.types.integer.md)

Esta função retorna o número de parâmetros em uma consulta preparada especificada
`query`. Este é o numero de argumentos que devem estar
presentes quando usar a função [ibase\_execute()](function.ibase-execute.md).

### Parâmetros

`query`
:   O manipulador da query preparada.

### Valor Retornado

Retorna o número de parâmetros como um inteiro.

### Veja também

- [ibase\_prepare()](function.ibase-prepare.md) - Prepara uma consulta para ligação de parâmetros e execução posteriores
- [ibase\_param\_info()](function.ibase-param-info.md) - Retorna informação sobre um parâmetro em uma consulta preparada

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
