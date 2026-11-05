# Retorna a resposta do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrpingresponse.getresponse.php

---

# SolrPingResponse::getResponse

(PECL solr >= 0.9.2)

SolrPingResponse::getResponse — Retorna a resposta do servidor

### Descrição

public function **SolrPingResponse::getResponse**(): [string](language.types.string.md)

Retorna a resposta do servidor. Deve estar vazio porque a solicitação é uma solicitação HEAD.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string vazia.

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
