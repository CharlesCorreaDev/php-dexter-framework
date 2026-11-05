# Define o parâmetro 'ndots' para pesquisas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventdnsbase.setsearchndots.php

---

# EventDnsBase::setSearchNdots

(PECL event >= 1.2.6-beta)

EventDnsBase::setSearchNdots — Define o parâmetro 'ndots' para pesquisas

### Descrição

public
function **EventDnsBase::setSearchNdots**(
[int](language.types.integer.md) `$ndots`
): [bool](language.types.boolean.md)

Define o parâmetro
`'ndots'`
para pesquisas. Define o número de pontos que, quando encontrados em um
nome, faz com que a primeira consulta fique sem nenhum domínio de pesquisa.

### Parâmetros

`ndots`
:   O número de pontos.

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
