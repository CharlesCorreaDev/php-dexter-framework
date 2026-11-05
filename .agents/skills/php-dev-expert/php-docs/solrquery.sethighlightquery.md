# Designa uma consulta para destaque (hl.q)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.sethighlightquery.php

---

# SolrQuery::setHighlightQuery

(PECL solr >= 2.7.0)

SolrQuery::setHighlightQuery — Designa uma consulta para destaque (hl.q)

### Descrição

public function **SolrQuery::setHighlightQuery**([string](language.types.string.md) `$q`): [SolrQuery](class.solrquery.md)

Designa uma consulta para destaque.
Este parâmetro permite destacar termos ou campos diferentes daqueles usados ​​para recuperar documentos.

Valor padrão quando não definido: o valor do parâmetro q da solicitação

Referência do parâmetro Solr: hl.q

### Parâmetros

`q`
:   Consulta de destaque

### Valor Retornado

Retorna o objeto [SolrQuery](class.solrquery.md) atual, se o valor de retorno for usado.

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
