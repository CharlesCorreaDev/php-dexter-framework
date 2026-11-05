# Retorna política para NULL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrcollapsefunction.getnullpolicy.php

---

# SolrCollapseFunction::getNullPolicy

(PECL solr >= 2.2.0)

SolrCollapseFunction::getNullPolicy — Retorna política para NULL

### Descrição

public function **SolrCollapseFunction::getNullPolicy**(): [string](language.types.string.md)

Retorna política de valor nulo usada, ou nulo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrCollapseFunction::setNullPolicy()](solrcollapsefunction.setnullpolicy.md) - Define a política para NULL

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
