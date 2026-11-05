# Redefine o ponteiro interno para o início

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.rewind.php

---

# SolrDocument::rewind

(PECL solr >= 0.9.2)

SolrDocument::rewind — Redefine o ponteiro interno para o início

### Descrição

public function **SolrDocument::rewind**(): [void](language.types.void.md)

Redefine o ponteiro interno para o início.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Este método não tem valor de retorno.

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
