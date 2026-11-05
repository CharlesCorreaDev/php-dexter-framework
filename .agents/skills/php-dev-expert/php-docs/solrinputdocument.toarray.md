# Retorna uma representação de array do documento de entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.toarray.php

---

# SolrInputDocument::toArray

(PECL solr >= 0.9.2)

SolrInputDocument::toArray — Retorna uma representação de array do documento de entrada

### Descrição

public function **SolrInputDocument::toArray**(): [array](language.types.array.md)

Retorna uma representação de array do documento de entrada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array contendo os campos. Retorna **`false`** em caso de falha.

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
