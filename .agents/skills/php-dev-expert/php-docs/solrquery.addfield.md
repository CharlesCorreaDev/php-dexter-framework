# Especifica quais campos retornar no resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.addfield.php

---

# SolrQuery::addField

(PECL solr >= 0.9.2)

SolrQuery::addField — Especifica quais campos retornar no resultado

### Descrição

public function **SolrQuery::addField**([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

Este método é usado para especificar um conjunto de campos a serem retornados, restringindo assim a quantidade de dados retornados na resposta.

Deve ser chamado várias vezes, uma vez para cada nome de campo.

### Parâmetros

`field`
:   O nome do campo

### Valor Retornado

Retorna o objeto SolrQuery atual

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
