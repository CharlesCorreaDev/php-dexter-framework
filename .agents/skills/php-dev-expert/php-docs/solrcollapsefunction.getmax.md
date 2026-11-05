# Retorna o parâmetro "max"

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrcollapsefunction.getmax.php

---

# SolrCollapseFunction::getMax

(PECL solr >= 2.2.0)

SolrCollapseFunction::getMax — Retorna o parâmetro "max"

### Descrição

public function **SolrCollapseFunction::getMax**(): [string](language.types.string.md)

Retorna o parâmetro "max".

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrCollapseFunction::setMax()](solrcollapsefunction.setmax.md) - Seleciona os cabeçalhos dos grupos pelo valor máximo de um campo numérico ou consulta de função

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
