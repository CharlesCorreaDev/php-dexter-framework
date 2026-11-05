# Especifica o número de caracteres em um documento para procurar trechos adequados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.sethighlightmaxanalyzedchars.php

---

# SolrQuery::setHighlightMaxAnalyzedChars

(PECL solr >= 0.9.2)

SolrQuery::setHighlightMaxAnalyzedChars — Especifica o número de caracteres em um documento para procurar trechos adequados

### Descrição

public function **SolrQuery::setHighlightMaxAnalyzedChars**([int](language.types.integer.md) `$value`): [SolrQuery](class.solrquery.md)

Especifica o número de caracteres em um documento para procurar trechos adequados.

### Parâmetros

`value`
:   O número de caracteres em um documento para procurar trechos adequados.

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
