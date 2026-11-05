# Retorna a frequência mínima do documento a ser retornada para que seja incluído

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gettermsmincount.php

---

# SolrQuery::getTermsMinCount

(PECL solr >= 0.9.2)

SolrQuery::getTermsMinCount — Retorna a frequência mínima do documento a ser retornada para que seja incluído

### Descrição

public function **SolrQuery::getTermsMinCount**(): [int](language.types.integer.md)

Retorna a frequência mínima do documento a ser retornada para que seja incluído.

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
