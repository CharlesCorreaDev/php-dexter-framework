# Sinônimo de SolrInputDocument::clear

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.reset.php

---

# SolrInputDocument::reset

(PECL solr >= 0.9.2)

SolrInputDocument::reset — Sinônimo de [SolrInputDocument::clear()](solrinputdocument.clear.md)

### Descrição

public function **SolrInputDocument::reset**(): [bool](language.types.boolean.md)

Este é um sinônimo de SolrInputDocument::clear().

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
