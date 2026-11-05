# Retorna o estado do parâmetro hl.usePhraseHighlighter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gethighlightusephrasehighlighter.php

---

# SolrQuery::getHighlightUsePhraseHighlighter

(PECL solr >= 0.9.2)

SolrQuery::getHighlightUsePhraseHighlighter — Retorna o estado do parâmetro hl.usePhraseHighlighter

### Descrição

public function **SolrQuery::getHighlightUsePhraseHighlighter**(): [bool](language.types.boolean.md)

Retorna se o SpanScorer deve ou não ser usado para destacar termos de frase somente quando eles aparecem na frase de consulta no documento.

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
