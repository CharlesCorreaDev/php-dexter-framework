# Retorna um array de parâmetros codificados em URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrparams.getpreparedparams.php

---

# SolrParams::getPreparedParams

(PECL solr >= 0.9.2)

SolrParams::getPreparedParams — Retorna um array de parâmetros codificados em URL

### Descrição

final public function **SolrParams::getPreparedParams**(): [array](language.types.array.md)

Retorna um array de parâmetros codificados em URL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array de parâmetros codificados em URL.

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
