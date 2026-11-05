# Remove um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.offsetunset.php

---

# SolrDocument::offsetUnset

(PECL solr >= 0.9.2)

SolrDocument::offsetUnset — Remove um campo

### Descrição

public function **SolrDocument::offsetUnset**([string](language.types.string.md) `$fieldName`): [void](language.types.void.md)

Remove um campo do documento.

### Parâmetros

`fieldName`
:   O nome do campo.

### Valor Retornado

Nenhum valor de retorno.

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
