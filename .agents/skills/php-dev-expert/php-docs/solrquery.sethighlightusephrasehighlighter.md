# Define se os termos da frase devem ser destacados apenas quando eles aparecem na frase de consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.sethighlightusephrasehighlighter.php

---

# SolrQuery::setHighlightUsePhraseHighlighter

(PECL solr >= 0.9.2)

SolrQuery::setHighlightUsePhraseHighlighter — Define se os termos da frase devem ser destacados apenas quando eles aparecem na frase de consulta

### Descrição

public function **SolrQuery::setHighlightUsePhraseHighlighter**([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

Define se o SpanScorer deve ou não ser usado para destacar termos de frase somente quando eles aparecem na frase de consulta no documento.

### Parâmetros

`value`
:   Informa se o SpanScorer deve ou não ser usado para destacar termos de frase somente quando eles aparecem na frase de consulta no documento.

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
