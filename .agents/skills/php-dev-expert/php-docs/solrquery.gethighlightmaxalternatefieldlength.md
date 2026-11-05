# Retorna o número máximo de caracteres do campo a ser retornado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gethighlightmaxalternatefieldlength.php

---

# SolrQuery::getHighlightMaxAlternateFieldLength

(PECL solr >= 0.9.2)

SolrQuery::getHighlightMaxAlternateFieldLength — Retorna o número máximo de caracteres do campo a ser retornado

### Descrição

public function **SolrQuery::getHighlightMaxAlternateFieldLength**([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

Retorna o número máximo de caracteres do campo a ser retornado.

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
