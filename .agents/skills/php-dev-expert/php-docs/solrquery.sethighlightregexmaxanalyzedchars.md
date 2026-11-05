# Especifica o número máximo de caracteres a serem analisados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.sethighlightregexmaxanalyzedchars.php

---

# SolrQuery::setHighlightRegexMaxAnalyzedChars

(PECL solr >= 0.9.2)

SolrQuery::setHighlightRegexMaxAnalyzedChars — Especifica o número máximo de caracteres a serem analisados

### Descrição

public function **SolrQuery::setHighlightRegexMaxAnalyzedChars**([int](language.types.integer.md) `$maxAnalyzedChars`): [SolrQuery](class.solrquery.md)

Especifica o número máximo de caracteres a serem analisados ​​em um campo ao usar o fragmentador de expressão regular.

### Parâmetros

`maxAnalyzedChars`
:   O número máximo de caracteres a serem analisados ​​em um campo ao usar o fragmentador de expressão regular.

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
