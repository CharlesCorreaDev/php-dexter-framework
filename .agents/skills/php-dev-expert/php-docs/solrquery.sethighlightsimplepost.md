# Define o texto que aparece após um termo destacado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.sethighlightsimplepost.php

---

# SolrQuery::setHighlightSimplePost

(PECL solr >= 0.9.2)

SolrQuery::setHighlightSimplePost — Define o texto que aparece após um termo destacado

### Descrição

public function **SolrQuery::setHighlightSimplePost**([string](language.types.string.md) `$simplePost`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Define o texto que aparece após um termo destacado.

### Parâmetros

`simplePost`
:   Define o texto que aparece após um termo destacado.

    ```
    O padrão é </em>
    ```

`field_override`
:   O nome do campo.

### Valor Retornado

Retorna uma instância de [SolrQuery](class.solrquery.md).

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
