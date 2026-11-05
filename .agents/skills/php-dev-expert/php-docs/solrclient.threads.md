# Verifica o status dos threads

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.threads.php

---

# SolrClient::threads

(PECL solr >= 0.9.2)

SolrClient::threads — Verifica o status dos threads

### Descrição

public function **SolrClient::threads**(): [void](language.types.void.md)

Verifica o status dos threads.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um objeto SolrGenericResponse.

### Erros/Exceções

Lança [SolrClientException](class.solrclientexception.md) se o cliente falhar ou houver um problema de conexão.

Lança [SolrServerException](class.solrserverexception.md) se o servidor Solr falhar ao processar a solicitação.

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
