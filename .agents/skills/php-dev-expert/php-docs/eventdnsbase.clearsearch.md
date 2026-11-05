# Remove todos os sufixos de pesquisa atuais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventdnsbase.clearsearch.php

---

# EventDnsBase::clearSearch

(PECL event >= 1.2.6-beta)

EventDnsBase::clearSearch — Remove todos os sufixos de pesquisa atuais

### Descrição

public
function **EventDnsBase::clearSearch**(): [void](language.types.void.md)

Remove todos os sufixos de pesquisa atuais da base DNS; a função
[EventDnsBase::addSearch()](eventdnsbase.addsearch.md)
adiciona um sufixo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EventDnsBase::addSearch()](eventdnsbase.addsearch.md) - Adiciona um domínio à lista de domínios de pesquisa

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
