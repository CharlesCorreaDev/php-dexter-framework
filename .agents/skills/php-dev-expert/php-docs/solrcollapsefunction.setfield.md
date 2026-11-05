# Define o campo para ser colapsado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrcollapsefunction.setfield.php

---

# SolrCollapseFunction::setField

(PECL solr >= 2.2.0)

SolrCollapseFunction::setField — Define o campo para ser colapsado

### Descrição

public function **SolrCollapseFunction::setField**([string](language.types.string.md) `$fieldName`): [SolrCollapseFunction](class.solrcollapsefunction.md)

O nome do campo a ser colapsado.
Para colapsar um resultado. O tipo de campo deve ser String, Int ou Float de valor único.

### Parâmetros

`fieldName`

### Valor Retornado

[SolrCollapseFunction](class.solrcollapsefunction.md)

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
