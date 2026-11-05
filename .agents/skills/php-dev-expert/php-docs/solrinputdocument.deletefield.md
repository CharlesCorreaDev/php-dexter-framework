# Remove um campo do documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.deletefield.php

---

# SolrInputDocument::deleteField

(PECL solr >= 0.9.2)

SolrInputDocument::deleteField — Remove um campo do documento

### Descrição

public function **SolrInputDocument::deleteField**([string](language.types.string.md) `$fieldName`): [bool](language.types.boolean.md)

Remove um campo do documento.

### Parâmetros

`fieldName`
:   O nome do campo.

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
