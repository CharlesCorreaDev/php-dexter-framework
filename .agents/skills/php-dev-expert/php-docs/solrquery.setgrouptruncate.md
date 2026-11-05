# Define se as contagens de facetas são baseadas no documento mais relevante de cada grupo que corresponde à consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setgrouptruncate.php

---

# SolrQuery::setGroupTruncate

(PECL solr >= 2.2.0)

SolrQuery::setGroupTruncate — Define se as contagens de facetas são baseadas no documento mais relevante de cada grupo que corresponde à consulta

### Descrição

public function **SolrQuery::setGroupTruncate**([bool](language.types.boolean.md) `$value`): [SolrQuery](class.solrquery.md)

Se definido para true, as contagens de facetas baseiam-se no documento mais relevante de cada grupo que corresponde à consulta.
O valor padrão do servidor é falso.
Parâmetro group.truncate.

### Parâmetros

`value`

### Valor Retornado

### Veja também

- [SolrQuery::setGroup()](solrquery.setgroup.md) - Ativa/desativa agrupamento de resultados (parâmetro 'group')
- [SolrQuery::addGroupField()](solrquery.addgroupfield.md) - Adiciona um campo para ser usado para agrupar resultados
- [SolrQuery::addGroupFunction()](solrquery.addgroupfunction.md) - Permite agrupar resultados com base nos valores exclusivos de uma consulta de função (parâmetro group.func)
- [SolrQuery::addGroupQuery()](solrquery.addgroupquery.md) - Permite agrupar documentos que correspondem à consulta fornecida
- [SolrQuery::addGroupSortField()](solrquery.addgroupsortfield.md) - Adiciona um campo de classificação de grupo (parâmetro group.sort)
- [SolrQuery::setGroupFacet()](solrquery.setgroupfacet.md) - Define o parâmetro group.facet
- [SolrQuery::setGroupOffset()](solrquery.setgroupoffset.md) - Define o parâmetro group.offset
- [SolrQuery::setGroupLimit()](solrquery.setgrouplimit.md) - Especifica o número de resultados a serem retornados para cada grupo
- [SolrQuery::setGroupMain()](solrquery.setgroupmain.md) - Define se será usado o resultado do primeiro comando de agrupamento de campos como a lista de resultados principal na resposta
- [SolrQuery::setGroupNGroups()](solrquery.setgroupngroups.md) - Define a inclusão do número de grupos que corresponderam à consulta nos resultados
- [SolrQuery::setGroupFormat()](solrquery.setgroupformat.md) - Define o formato do grupo, estrutura de resultado (parâmetro group.format)
- [SolrQuery::setGroupCachePercent()](solrquery.setgroupcachepercent.md) - Ativa o cache para agrupamento de resultados

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
