# Retorna se o destaque deve ou não ser ativado para consultas de intervalo/coringa/difusa/prefixo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gethighlighthighlightmultiterm.php

---

# SolrQuery::getHighlightHighlightMultiTerm

(PECL solr >= 0.9.2)

SolrQuery::getHighlightHighlightMultiTerm — Retorna se o destaque deve ou não ser ativado para consultas de intervalo/coringa/difusa/prefixo

### Descrição

public function **SolrQuery::getHighlightHighlightMultiTerm**(): [bool](language.types.boolean.md)

Retorna se o destaque deve ou não ser ativado para consultas de intervalo, coringas, difusas ou de prefixo.

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
