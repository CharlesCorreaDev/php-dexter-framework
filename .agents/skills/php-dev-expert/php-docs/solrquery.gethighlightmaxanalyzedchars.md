# Retorna o número máximo de caracteres em um documento para procurar trechos adequados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gethighlightmaxanalyzedchars.php

---

# SolrQuery::getHighlightMaxAnalyzedChars

(PECL solr >= 0.9.2)

SolrQuery::getHighlightMaxAnalyzedChars — Retorna o número máximo de caracteres em um documento para procurar trechos adequados

### Descrição

public function **SolrQuery::getHighlightMaxAnalyzedChars**(): [int](language.types.integer.md)

Retorna o número máximo de caracteres em um documento para procurar trechos adequados.

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
