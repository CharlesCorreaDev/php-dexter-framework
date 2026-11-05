# Retorna dica de colapso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrcollapsefunction.gethint.php

---

# SolrCollapseFunction::getHint

(PECL solr >= 2.2.0)

SolrCollapseFunction::getHint — Retorna dica de colapso

### Descrição

public function **SolrCollapseFunction::getHint**(): [string](language.types.string.md)

Retorna dica de colapso.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [SolrCollapseFunction::setHint()](solrcollapsefunction.sethint.md) - Define dica de colapso

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
