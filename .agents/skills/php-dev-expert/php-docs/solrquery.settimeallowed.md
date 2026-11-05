# Define o tempo permitido para a pesquisa terminar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.settimeallowed.php

---

# SolrQuery::setTimeAllowed

(PECL solr >= 0.9.2)

SolrQuery::setTimeAllowed — Define o tempo permitido para a pesquisa terminar

### Descrição

public function **SolrQuery::setTimeAllowed**([int](language.types.integer.md) `$timeAllowed`): [SolrQuery](class.solrquery.md)

Define o tempo permitido para uma pesquisa terminar. Este valor se aplica apenas à pesquisa e não às solicitações em geral. O tempo é em milissegundos. Valores menores ou iguais a zero não implicam restrição de tempo. Resultados parciais poderão ser retornados, se houver.

### Parâmetros

`timeAllowed`
:   O tempo permitido para uma pesquisa terminar.

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
