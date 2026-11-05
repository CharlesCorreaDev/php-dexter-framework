# Retorna o URL completo para o qual a solicitação foi enviada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrresponse.getrequesturl.php

---

# SolrResponse::getRequestUrl

(PECL solr >= 0.9.2)

SolrResponse::getRequestUrl — Retorna o URL completo para o qual a solicitação foi enviada

### Descrição

public function **SolrResponse::getRequestUrl**(): [string](language.types.string.md)

Retorna o URL completo para o qual a solicitação foi enviada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o URL completo para o qual a solicitação foi enviada.

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
