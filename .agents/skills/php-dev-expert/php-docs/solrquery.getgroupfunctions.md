# Retorna funções de grupo (valores de parâmetro group.func)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.getgroupfunctions.php

---

# SolrQuery::getGroupFunctions

(PECL solr >= 2.2.0)

SolrQuery::getGroupFunctions — Retorna funções de grupo (valores de parâmetro group.func)

### Descrição

public function **SolrQuery::getGroupFunctions**(): [array](language.types.array.md)

Retorna funções de grupo (valores do parâmetro group.func).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrQuery::addGroupFunction()](solrquery.addgroupfunction.md) - Permite agrupar resultados com base nos valores exclusivos de uma consulta de função (parâmetro group.func)

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
