# Alterna o parâmetro echoHandler

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrquery.setechohandler.php

---

# SolrQuery::setEchoHandler

(PECL solr >= 0.9.2)

SolrQuery::setEchoHandler — Alterna o parâmetro echoHandler

### Descrição

public function **SolrQuery::setEchoHandler**([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

Se definido como verdadeiro, o Solr coloca o nome do identificador usado na resposta ao cliente para fins de depuração.

### Parâmetros

`flag`
:   **`true`** ou **`false`**

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
