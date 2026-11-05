# Retorna o parâmetro de tamanho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrcollapsefunction.getsize.php

---

# SolrCollapseFunction::getSize

(PECL solr >= 2.2.0)

SolrCollapseFunction::getSize — Retorna o parâmetro de tamanho

### Descrição

public function **SolrCollapseFunction::getSize**(): [int](language.types.integer.md)

Obtém o tamanho inicial das estruturas de dados colapsados ao recolher apenas um campo numérico.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrCollapseFunction::setSize()](solrcollapsefunction.setsize.md) - Define o tamanho inicial das estruturas de dados colapsadas ao colapsar apenas em um campo numérico

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
