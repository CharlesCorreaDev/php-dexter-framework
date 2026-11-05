# Ativa o cache para agrupamento de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setgroupcachepercent.php

---

# SolrQuery::setGroupCachePercent

(PECL solr >= 2.2.0)

SolrQuery::setGroupCachePercent — Ativa o cache para agrupamento de resultados

### Descrição

public function **SolrQuery::setGroupCachePercent**([int](language.types.integer.md) `$percent`): [SolrQuery](class.solrquery.md)

Definir esse parâmetro como um número maior que 0 ativa o armazenamento em cache para agrupamento de resultados.
O Agrupamento de Resultados executa duas pesquisas; esta opção armazena em cache a segunda pesquisa. O valor padrão do servidor é 0.
Os testes mostraram que o cache de grupo apenas melhora o tempo de pesquisa com consultas booleanas, coringas e difusas. Para consultas simples, como consultas de termo ou de "correspondência total", o cache de grupo degrada o desempenho.
Parâmetro group.cache.percent.

### Parâmetros

`percent`

### Valor Retornado

### Erros/Exceções

Lança uma [SolrIllegalArgumentException](class.solrillegalargumentexception.md) caso um parâmetro inválido tenha sido passado.

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
- [SolrQuery::setGroupTruncate()](solrquery.setgrouptruncate.md) - Define se as contagens de facetas são baseadas no documento mais relevante de cada grupo que corresponde à consulta
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
