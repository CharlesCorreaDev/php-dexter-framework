# Retorna um SolrInputDocument equivalente ao objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.getinputdocument.php

---

# SolrDocument::getInputDocument

(PECL solr >= 0.9.2)

SolrDocument::getInputDocument — Retorna um SolrInputDocument equivalente ao objeto

### Descrição

public function **SolrDocument::getInputDocument**(): [SolrInputDocument](class.solrinputdocument.md)

Retorna um SolrInputDocument equivalente ao objeto. Isto é útil para reenviar/atualizar um documento recuperado de uma consulta.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um SolrInputDocument em caso de sucesso e **`null`** em caso de falha.

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
