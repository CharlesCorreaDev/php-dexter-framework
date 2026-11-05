# Recupera um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.offsetget.php

---

# SolrDocument::offsetGet

(PECL solr >= 0.9.2)

SolrDocument::offsetGet — Recupera um campo

### Descrição

public function **SolrDocument::offsetGet**([string](language.types.string.md) `$fieldName`): [SolrDocumentField](class.solrdocumentfield.md)

Isso é usado para recuperar o campo quando o objeto é tratado como um array.

### Parâmetros

`fieldName`
:   O nome do campo.

### Valor Retornado

Retorna um objeto SolrDocumentField.

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
