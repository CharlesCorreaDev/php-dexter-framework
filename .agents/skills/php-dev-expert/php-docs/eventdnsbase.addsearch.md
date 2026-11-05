# Adiciona um domínio à lista de domínios de pesquisa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventdnsbase.addsearch.php

---

# EventDnsBase::addSearch

(PECL event >= 1.2.6-beta)

EventDnsBase::addSearch — Adiciona um domínio à lista de domínios de pesquisa

### Descrição

public
function **EventDnsBase::addSearch**(
[string](language.types.string.md) `$domain`
): [void](language.types.void.md)

Adiciona um domínio à lista de domínios de pesquisa.

### Parâmetros

`domain`
:   Domínio de pesquisa.

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
