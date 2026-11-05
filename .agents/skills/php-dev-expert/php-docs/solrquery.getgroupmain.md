# Retorna o valor group.main

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getgroupmain.php

---

# SolrQuery::getGroupMain

(PECL solr >= 2.2.0)

SolrQuery::getGroupMain — Retorna o valor group.main

### Descrição

public function **SolrQuery::getGroupMain**(): [bool](language.types.boolean.md)

Retorna o valor group.main.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrQuery::setGroupMain()](solrquery.setgroupmain.md) - Define se será usado o resultado do primeiro comando de agrupamento de campos como a lista de resultados principal na resposta

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
