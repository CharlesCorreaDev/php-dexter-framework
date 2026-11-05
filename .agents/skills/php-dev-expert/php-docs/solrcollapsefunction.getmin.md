# Retorna o parâmetro "min"

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrcollapsefunction.getmin.php

---

# SolrCollapseFunction::getMin

(PECL solr >= 2.2.0)

SolrCollapseFunction::getMin — Retorna o parâmetro "min"

### Descrição

public function **SolrCollapseFunction::getMin**(): [string](language.types.string.md)

Retorna o parâmetro "min".

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrCollapseFunction::setMin()](solrcollapsefunction.setmin.md) - Define o tamanho inicial das estruturas de dados colapsadas ao recolher apenas em um campo numérico

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
