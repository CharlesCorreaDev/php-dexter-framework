# Recupera informações do servidor Solr

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.system.php

---

# SolrClient::system

(PECL solr >= 2.0.0)

SolrClient::system — Recupera informações do servidor Solr

### Descrição

public function **SolrClient::system**(): [void](language.types.void.md)

Recupera informações do servidor Solr.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um objeto [SolrGenericResponse](class.solrgenericresponse.md) em caso de sucesso.

### Erros/Exceções

Lança [SolrClientException](class.solrclientexception.md) se o cliente falhar ou houver um problema de conexão.

Lança [SolrServerException](class.solrserverexception.md) se o servidor Solr falhou ao atender à consulta.

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
