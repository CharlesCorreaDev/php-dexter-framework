# Sinônimo de SolrDocument::clear

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.reset.php

---

# SolrDocument::reset

(PECL solr >= 0.9.2)

SolrDocument::reset — Sinônimo de [SolrDocument::clear()](solrdocument.clear.md)

### Descrição

public function **SolrDocument::reset**(): [bool](language.types.boolean.md)

Este é um sinônimo para SolrDocument::clear().

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
