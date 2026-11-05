# Retorna o número de campos neste documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.getfieldcount.php

---

# SolrDocument::getFieldCount

(PECL solr >= 0.9.2)

SolrDocument::getFieldCount — Retorna o número de campos neste documento

### Descrição

public function **SolrDocument::getFieldCount**(): [int](language.types.integer.md)

Retorna o número de campos neste documento. Os campos com vários valores são contados apenas uma vez.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um número inteiro em caso de sucesso e **`false`** em caso de falha.

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
