# Usado para serialização personalizada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrparams.serialize.php

---

# SolrParams::serialize

(PECL solr >= 0.9.2)

SolrParams::serialize — Usado para serialização personalizada

### Descrição

final public function **SolrParams::serialize**(): [string](language.types.string.md)

Usado para serialização personalizada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o objeto serializado.

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
