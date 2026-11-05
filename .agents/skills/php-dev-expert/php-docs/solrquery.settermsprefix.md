# Restringe correspondências a termos que começam com o prefixo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.settermsprefix.php

---

# SolrQuery::setTermsPrefix

(PECL solr >= 0.9.2)

SolrQuery::setTermsPrefix — Restringe correspondências a termos que começam com o prefixo

### Descrição

public function **SolrQuery::setTermsPrefix**([string](language.types.string.md) `$prefix`): [SolrQuery](class.solrquery.md)

Restringe correspondências a termos que começam com o prefixo.

### Parâmetros

`prefix`
:   Restringe correspondências a termos que começam com o prefixo.

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
