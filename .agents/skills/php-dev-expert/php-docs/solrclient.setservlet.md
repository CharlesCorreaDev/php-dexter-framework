# Altera o tipo de servlet especificado para um novo valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.setservlet.php

---

# SolrClient::setServlet

(PECL solr >= 0.9.2)

SolrClient::setServlet — Altera o tipo de servlet especificado para um novo valor

### Descrição

public function **SolrClient::setServlet**([int](language.types.integer.md) `$type`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Altera o tipo de servlet especificado para um novo valor.

### Parâmetros

`type`
:   Um dos seguintes constantes:

    ```
    - SolrClient::SEARCH_SERVLET_TYPE
     - SolrClient::UPDATE_SERVLET_TYPE
     - SolrClient::THREADS_SERVLET_TYPE
     - SolrClient::PING_SERVLET_TYPE
     - SolrClient::TERMS_SERVLET_TYPE
    ```

`value`
:   O novo valor para o servlet

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
