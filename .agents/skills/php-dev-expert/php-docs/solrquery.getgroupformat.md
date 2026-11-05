# Retorna o valor group.format

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getgroupformat.php

---

# SolrQuery::getGroupFormat

(PECL solr >= 2.2.0)

SolrQuery::getGroupFormat — Retorna o valor group.format

### Descrição

public function **SolrQuery::getGroupFormat**(): [string](language.types.string.md)

Retorna o valor group.format.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrQuery::setGroupFormat()](solrquery.setgroupformat.md) - Define o formato do grupo, estrutura de resultado (parâmetro group.format)

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
