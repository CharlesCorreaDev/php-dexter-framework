# Retorna um array de parâmetros não codificados em URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrparams.getparams.php

---

# SolrParams::getParams

(PECL solr >= 0.9.2)

SolrParams::getParams — Retorna um array de parâmetros não codificados em URL

### Descrição

final public function **SolrParams::getParams**(): [array](language.types.array.md)

Retorna um array de parâmetros não codificados em URL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array de parâmetros não codificados em URL.

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
