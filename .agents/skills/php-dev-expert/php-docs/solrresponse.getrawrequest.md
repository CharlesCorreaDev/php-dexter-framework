# Retorna a solicitação bruta enviada ao servidor Solr

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrresponse.getrawrequest.php

---

# SolrResponse::getRawRequest

(PECL solr >= 0.9.2)

SolrResponse::getRawRequest — Retorna a solicitação bruta enviada ao servidor Solr

### Descrição

public function **SolrResponse::getRawRequest**(): [string](language.types.string.md)

Retorna a solicitação bruta enviada ao servidor Solr.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a solicitação bruta enviada ao servidor Solr.

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
