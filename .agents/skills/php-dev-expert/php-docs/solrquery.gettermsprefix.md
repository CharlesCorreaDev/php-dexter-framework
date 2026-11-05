# Retorna o prefixo do termo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.gettermsprefix.php

---

# SolrQuery::getTermsPrefix

(PECL solr >= 0.9.2)

SolrQuery::getTermsPrefix — Retorna o prefixo do termo

### Descrição

public function **SolrQuery::getTermsPrefix**(): [string](language.types.string.md)

Retorna o prefixo ao qual os termos correspondentes devem ser restritos. Isso restringirá as correspondências apenas aos termos que começam com o prefixo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string em caso de sucesso e **`null`** se não estiver definido.

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
