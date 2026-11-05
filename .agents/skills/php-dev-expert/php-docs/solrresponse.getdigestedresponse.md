# Retorna a resposta XML como dados PHP serializados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrresponse.getdigestedresponse.php

---

# SolrResponse::getDigestedResponse

(PECL solr >= 0.9.2)

SolrResponse::getDigestedResponse — Retorna a resposta XML como dados PHP serializados

### Descrição

public function **SolrResponse::getDigestedResponse**(): [string](language.types.string.md)

Retorna a resposta XML como dados PHP serializados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a resposta XML como dados PHP serializados.

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
