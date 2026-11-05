# Retorna a frequência máxima do documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gettermsmaxcount.php

---

# SolrQuery::getTermsMaxCount

(PECL solr >= 0.9.2)

SolrQuery::getTermsMaxCount — Retorna a frequência máxima do documento

### Descrição

public function **SolrQuery::getTermsMaxCount**(): [int](language.types.integer.md)

Retorna a frequência máxima do documento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um número inteiro em caso de sucesso e **`null`** se não estiver definido.

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
