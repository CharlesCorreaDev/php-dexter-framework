# Retorna um SolrObject representando a resposta XML do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrresponse.getresponse.php

---

# SolrResponse::getResponse

(PECL solr >= 0.9.2)

SolrResponse::getResponse — Retorna um SolrObject representando a resposta XML do servidor

### Descrição

public function **SolrResponse::getResponse**(): [SolrObject](class.solrobject.md)

Retorna um SolrObject representando a resposta XML do servidor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um SolrObject representando a resposta XML do servidor.

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
