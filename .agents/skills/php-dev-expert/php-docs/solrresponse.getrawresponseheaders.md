# Retorna os cabeçalhos de resposta brutos do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrresponse.getrawresponseheaders.php

---

# SolrResponse::getRawResponseHeaders

(PECL solr >= 0.9.2)

SolrResponse::getRawResponseHeaders — Retorna os cabeçalhos de resposta brutos do servidor

### Descrição

public function **SolrResponse::getRawResponseHeaders**(): [string](language.types.string.md)

Retorna os cabeçalhos de resposta brutos do servidor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna os cabeçalhos de resposta brutos do servidor.

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
