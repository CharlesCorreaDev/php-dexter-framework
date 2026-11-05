# Define um campo a ser usado para similaridade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.addmltfield.php

---

# SolrQuery::addMltField

(PECL solr >= 0.9.2)

SolrQuery::addMltField — Define um campo a ser usado para similaridade

### Descrição

public function **SolrQuery::addMltField**([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

Mapeia para mlt.fl. Ele especifica que um campo deve ser usado para similaridade.

### Parâmetros

`field`
:   O nome do campo

### Valor Retornado

Retorna o objeto SolrQuery atual, se o valor de retorno for usado.

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
