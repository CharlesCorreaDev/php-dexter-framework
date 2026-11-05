# Retorna o campo que está sendo colapsado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrcollapsefunction.getfield.php

---

# SolrCollapseFunction::getField

(PECL solr >= 2.2.0)

SolrCollapseFunction::getField — Retorna o campo que está sendo colapsado

### Descrição

public function **SolrCollapseFunction::getField**(): [string](language.types.string.md)

Retorna o campo que está sendo colapsado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrCollapseFunction::setField()](solrcollapsefunction.setfield.md) - Define o campo para ser colapsado

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
