# Informa se o agrupamento está habilitado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getgroup.php

---

# SolrQuery::getGroup

(PECL solr >= 2.2.0)

SolrQuery::getGroup — Informa se o agrupamento está habilitado

### Descrição

public function **SolrQuery::getGroup**(): [bool](language.types.boolean.md)

Retorna true se o agrupamento estiver habilitado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrQuery::setGroup()](solrquery.setgroup.md) - Ativa/desativa agrupamento de resultados (parâmetro 'group')

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
