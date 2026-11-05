# Exclui por ID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.deletebyid.php

---

# SolrClient::deleteById

(PECL solr >= 0.9.2)

SolrClient::deleteById — Exclui por ID

### Descrição

public function **SolrClient::deleteById**([string](language.types.string.md) `$id`): [SolrUpdateResponse](class.solrupdateresponse.md)

Exclui o documento com o ID especificado, onde ID é o valor do campo 'uniqueKey' declarado no esquema.

### Parâmetros

`id`
:   O valor do campo 'uniqueKey' declarado no esquema

### Valor Retornado

Retorna um [SolrUpdateResponse](class.solrupdateresponse.md) em caso de sucesso e lança uma exceção em caso de falha.

### Erros/Exceções

Lança [SolrClientException](class.solrclientexception.md) se o cliente falhar ou houver problema de conexão.

Lança [SolrServerException](class.solrserverexception.md) se o servidor Solr falhar ao processar a solicitação.

### Veja também

- [SolrClient::deleteByIds()](solrclient.deletebyids.md) - Exclui por IDs
- [SolrClient::deleteByQuery()](solrclient.deletebyquery.md) - Exclui todos os documentos que correspondem à consulta fornecida
- [SolrClient::deleteByQueries()](solrclient.deletebyqueries.md) - Remove todos os documentos que correspondem a qualquer uma das consultas

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
