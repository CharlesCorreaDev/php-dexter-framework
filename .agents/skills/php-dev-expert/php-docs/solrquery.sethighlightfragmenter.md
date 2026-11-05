# Define um gerador de trecho de texto para texto destacado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.sethighlightfragmenter.php

---

# SolrQuery::setHighlightFragmenter

(PECL solr >= 0.9.2)

SolrQuery::setHighlightFragmenter — Define um gerador de trecho de texto para texto destacado

### Descrição

public function **SolrQuery::setHighlightFragmenter**([string](language.types.string.md) `$fragmenter`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Define um gerador de trecho de texto para texto destacado.

### Parâmetros

`fragmenter`
:   O fragmentador padrão é o "gap". Outra opção é o "regex", que tenta criar fragmentos que se assemelhem a uma determinada expressão regular

`field_override`
:   O nome do campo.

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
