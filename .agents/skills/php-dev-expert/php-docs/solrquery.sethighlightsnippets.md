# Define o número máximo de trechos destacados a serem gerados por campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.sethighlightsnippets.php

---

# SolrQuery::setHighlightSnippets

(PECL solr >= 0.9.2)

SolrQuery::setHighlightSnippets — Define o número máximo de trechos destacados a serem gerados por campo

### Descrição

public function **SolrQuery::setHighlightSnippets**([int](language.types.integer.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Define o número máximo de trechos destacados a serem gerados por campo.

### Parâmetros

`value`
:   O número máximo de trechos destacados a serem gerados por campo.

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
