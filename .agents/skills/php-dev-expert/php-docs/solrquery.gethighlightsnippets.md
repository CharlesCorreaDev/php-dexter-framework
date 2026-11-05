# Retorna o número máximo de trechos destacados a serem gerados por campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gethighlightsnippets.php

---

# SolrQuery::getHighlightSnippets

(PECL solr >= 0.9.2)

SolrQuery::getHighlightSnippets — Retorna o número máximo de trechos destacados a serem gerados por campo

### Descrição

public function **SolrQuery::getHighlightSnippets**([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

Retorna o número máximo de trechos destacados a serem gerados por campo. Aceita uma substituição de campo opcional.

### Parâmetros

`field_override`
:   O nome do campo

### Valor Retornado

Retorna um número inteiro em caso de sucesso e **`null`** se não estiver definido.

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
