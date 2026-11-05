# Recupera um campo por nome

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.getfield.php

---

# SolrDocument::getField

(PECL solr >= 0.9.2)

SolrDocument::getField — Recupera um campo por nome

### Descrição

public function **SolrDocument::getField**([string](language.types.string.md) `$fieldName`): [SolrDocumentField](class.solrdocumentfield.md)

Recupera um campo por nome.

### Parâmetros

`fieldName`
:   Nome do campo.

### Valor Retornado

Retorna um SolrDocumentField em caso de sucesso e **`false`** em caso de falha.

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
