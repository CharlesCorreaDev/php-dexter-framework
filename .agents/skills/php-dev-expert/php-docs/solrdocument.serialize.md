# Usado para serialização personalizada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.serialize.php

---

# SolrDocument::serialize

(PECL solr >= 0.9.2)

SolrDocument::serialize — Usado para serialização personalizada

### Descrição

public function **SolrDocument::serialize**(): [string](language.types.string.md)

Usado para serialização personalizada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string que representa o documento Solr serializado.

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
