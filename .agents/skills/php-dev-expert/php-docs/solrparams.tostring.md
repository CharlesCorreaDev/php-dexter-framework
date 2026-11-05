# Retorna todos os parâmetros do par nome-valor no objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrparams.tostring.php

---

# SolrParams::toString

(PECL solr >= 0.9.2)

SolrParams::toString — Retorna todos os parâmetros do par nome-valor no objeto

### Descrição

final public function **SolrParams::toString**([bool](language.types.boolean.md) `$url_encode` = **`false`**): [string](language.types.string.md)

Retorna todos os parâmetros do par nome-valor no objeto.

### Parâmetros

`url_encode`
:   Informa se devem ser retornados valores codificados em URL.

### Valor Retornado

Retorna uma string em caso de sucesso ou **`false`** em caso de falha.

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
