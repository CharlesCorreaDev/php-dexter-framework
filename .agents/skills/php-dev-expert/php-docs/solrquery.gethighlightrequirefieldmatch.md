# Retorna se um campo só será destacado se a consulta corresponder a esse campo específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gethighlightrequirefieldmatch.php

---

# SolrQuery::getHighlightRequireFieldMatch

(PECL solr >= 0.9.2)

SolrQuery::getHighlightRequireFieldMatch — Retorna se um campo só será destacado se a consulta corresponder a esse campo específico

### Descrição

public function **SolrQuery::getHighlightRequireFieldMatch**(): [bool](language.types.boolean.md)

Retorna se um campo só será destacado se a consulta corresponder a esse campo específico.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um booleano em caso de sucesso e **`null`** se não estiver definido.

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
