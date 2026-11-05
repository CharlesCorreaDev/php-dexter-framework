# Define o número máximo de caracteres do campo a retornar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.sethighlightmaxalternatefieldlength.php

---

# SolrQuery::setHighlightMaxAlternateFieldLength

(PECL solr >= 0.9.2)

SolrQuery::setHighlightMaxAlternateFieldLength — Define o número máximo de caracteres do campo a retornar

### Descrição

public function **SolrQuery::setHighlightMaxAlternateFieldLength**([int](language.types.integer.md) `$fieldLength`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

Se SolrQuery::setHighlightAlternateField() receber o valor **`true`**, este parâmetro especifica o número máximo de caracteres do campo a ser retornado

Qualquer valor menor ou igual a 0 significa ilimitado.

### Parâmetros

`fieldLength`
:   O comprimento do campo.

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
