# Retorna mais detalhes sobre o status HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrresponse.gethttpstatusmessage.php

---

# SolrResponse::getHttpStatusMessage

(PECL solr >= 0.9.2)

SolrResponse::getHttpStatusMessage — Retorna mais detalhes sobre o status HTTP

### Descrição

public function **SolrResponse::getHttpStatusMessage**(): [string](language.types.string.md)

Retorna mais detalhes sobre o status HTTP.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna mais detalhes sobre o status HTTP.

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
