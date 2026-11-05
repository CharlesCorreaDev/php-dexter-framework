# Redefine o documento de entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.clear.php

---

# SolrInputDocument::clear

(PECL solr >= 0.9.2)

SolrInputDocument::clear — Redefine o documento de entrada

### Descrição

public function **SolrInputDocument::clear**(): [bool](language.types.boolean.md)

Redefine o documento eliminando todos os campos e redefine o impulso do documento para zero.

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
