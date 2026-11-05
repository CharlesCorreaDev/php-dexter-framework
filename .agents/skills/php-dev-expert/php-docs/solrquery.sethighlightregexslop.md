# Define o fator pelo qual o fragmentador de expressão regular pode se desviar do tamanho ideal do fragmento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.sethighlightregexslop.php

---

# SolrQuery::setHighlightRegexSlop

(PECL solr >= 0.9.2)

SolrQuery::setHighlightRegexSlop — Define o fator pelo qual o fragmentador de expressão regular pode se desviar do tamanho ideal do fragmento

### Descrição

public function **SolrQuery::setHighlightRegexSlop**([float](language.types.float.md) `$factor`): [SolrQuery](class.solrquery.md)

O fator pelo qual o fragmentador de expressão regular pode se desviar do tamanho ideal do fragmento (especificado por SolrQuery::setHighlightFragsize) para acomodar a expressão regular.

### Parâmetros

`factor`
:   O fator pelo qual o fragmentador de expressão regular pode se desviar do tamanho ideal.

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
