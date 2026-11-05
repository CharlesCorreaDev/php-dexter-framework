# Ativa ou desativa o componente de estatísticas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setstats.php

---

# SolrQuery::setStats

(PECL solr >= 0.9.2)

SolrQuery::setStats — Ativa ou desativa o componente de estatísticas

### Descrição

public function **SolrQuery::setStats**([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

Ativa ou desativa o componente de estatísticas.

### Parâmetros

`flag`
:   **`true`** ativa o componente de estatísticas e **`false`** desabilita.

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
