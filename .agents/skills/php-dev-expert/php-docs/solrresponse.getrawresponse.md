# Retorna a resposta bruta do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrresponse.getrawresponse.php

---

# SolrResponse::getRawResponse

(PECL solr >= 0.9.2)

SolrResponse::getRawResponse — Retorna a resposta bruta do servidor

### Descrição

public function **SolrResponse::getRawResponse**(): [string](language.types.string.md)

Retorna a resposta bruta do servidor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a resposta bruta do servidor.

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
