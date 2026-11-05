# Retorna o status HTTP da resposta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrresponse.gethttpstatus.php

---

# SolrResponse::getHttpStatus

(PECL solr >= 0.9.2)

SolrResponse::getHttpStatus — Retorna o status HTTP da resposta

### Descrição

public function **SolrResponse::getHttpStatus**(): [int](language.types.integer.md)

Retorna o status HTTP da resposta.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o status HTTP da resposta.

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
