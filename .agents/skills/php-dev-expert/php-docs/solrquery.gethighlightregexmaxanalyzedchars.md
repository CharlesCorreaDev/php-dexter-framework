# Retorna o número máximo de caracteres de um campo ao usar o fragmentador de expressão regular

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gethighlightregexmaxanalyzedchars.php

---

# SolrQuery::getHighlightRegexMaxAnalyzedChars

(PECL solr >= 0.9.2)

SolrQuery::getHighlightRegexMaxAnalyzedChars — Retorna o número máximo de caracteres de um campo ao usar o fragmentador de expressão regular

### Descrição

public function **SolrQuery::getHighlightRegexMaxAnalyzedChars**(): [int](language.types.integer.md)

Retorna o número máximo de caracteres de um campo ao usar o fragmentador de expressão regular.

### Parâmetros

Esta função não possui parâmetros.

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
