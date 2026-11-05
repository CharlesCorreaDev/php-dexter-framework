# Mapeia para mlt.qf

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.addmltqueryfield.php

---

# SolrQuery::addMltQueryField

(PECL solr >= 0.9.2)

SolrQuery::addMltQueryField — Mapeia para mlt.qf

### Descrição

public function **SolrQuery::addMltQueryField**([string](language.types.string.md) `$field`, [float](language.types.float.md) `$boost`): [SolrQuery](class.solrquery.md)

Mapeia para mlt.qf. É usado para especificar campos de consulta e seus impulsos.

### Parâmetros

`field`
:   O nome do campo

`boost`
:   Seu valor de impulso

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
