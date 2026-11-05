# Retorna o fator de desvio do tamanho ideal do fragmento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gethighlightregexslop.php

---

# SolrQuery::getHighlightRegexSlop

(PECL solr >= 0.9.2)

SolrQuery::getHighlightRegexSlop — Retorna o fator de desvio do tamanho ideal do fragmento

### Descrição

public function **SolrQuery::getHighlightRegexSlop**(): [float](language.types.float.md)

Retorna o fator pelo qual o fragmentador de expressão regular pode desviar-se do tamanho ideal do fragmento para acomodar a expressão regular.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [float](language.types.float.md) em caso de sucesso e **`null`** se não estiver definido.

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
