# Retorna os cabeçalhos de solicitação brutos enviados ao servidor Solr

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrresponse.getrawrequestheaders.php

---

# SolrResponse::getRawRequestHeaders

(PECL solr >= 0.9.2)

SolrResponse::getRawRequestHeaders — Retorna os cabeçalhos de solicitação brutos enviados ao servidor Solr

### Descrição

public function **SolrResponse::getRawRequestHeaders**(): [string](language.types.string.md)

Retorna os cabeçalhos de solicitação brutos enviados ao servidor Solr.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna os cabeçalhos de solicitação brutos enviados ao servidor Solr.

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
