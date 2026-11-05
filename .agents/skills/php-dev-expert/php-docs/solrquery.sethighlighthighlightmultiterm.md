# Usa o SpanScorer para destacar termos de frases

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.sethighlighthighlightmultiterm.php

---

# SolrQuery::setHighlightHighlightMultiTerm

(PECL solr >= 0.9.2)

SolrQuery::setHighlightHighlightMultiTerm — Usa o SpanScorer para destacar termos de frases

### Descrição

public function **SolrQuery::setHighlightHighlightMultiTerm**([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

Usa o SpanScorer para destacar termos de frase somente quando eles aparecem na frase de consulta do documento.

### Parâmetros

`flag`
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
