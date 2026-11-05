# Recupera um campo por nome

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.getfield.php

---

# SolrInputDocument::getField

(PECL solr >= 0.9.2)

SolrInputDocument::getField — Recupera um campo por nome

### Descrição

public function **SolrInputDocument::getField**([string](language.types.string.md) `$fieldName`): [SolrDocumentField](class.solrdocumentfield.md)

Recupera um campo no documento.

### Parâmetros

`fieldName`
:   O nome do campo.

### Valor Retornado

Retorna um objeto SolrDocumentField em caso de sucesso e **`false`** em caso de falha.

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
