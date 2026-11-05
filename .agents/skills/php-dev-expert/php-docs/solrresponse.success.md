# Informa se a requisição foi bem-sucedida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrresponse.success.php

---

# SolrResponse::success

(PECL solr >= 0.9.2)

SolrResponse::success — Informa se a requisição foi bem-sucedida

### Descrição

public function **SolrResponse::success**(): [bool](language.types.boolean.md)

Usado para verificar se a solicitação ao servidor foi bem-sucedida.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a requisição for bem sucedida e **`false`** se não for.

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
