# Remove todos os documentos que correspondem a qualquer uma das consultas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.deletebyqueries.php

---

# SolrClient::deleteByQueries

(PECL solr >= 0.9.2)

SolrClient::deleteByQueries — Remove todos os documentos que correspondem a qualquer uma das consultas

### Descrição

public function **SolrClient::deleteByQueries**([array](language.types.array.md) `$queries`): [SolrUpdateResponse](class.solrupdateresponse.md)

Remove todos os documentos que correspondem a qualquer uma das consultas.

### Parâmetros

`queries`
:   O array de consultas. Este deve ser uma variável PHP real.

### Valor Retornado

Retorna um SolrUpdateResponse em caso de sucesso e lança um SolrClientException em caso de falha.

### Erros/Exceções

Lança [SolrClientException](class.solrclientexception.md) se o cliente falhar ou houver problema de conexão.

Lança [SolrServerException](class.solrserverexception.md) se o servidor Solr falhar ao processar a solicitação.

### Veja também

- [SolrClient::deleteById()](solrclient.deletebyid.md) - Exclui por ID
- [SolrClient::deleteByIds()](solrclient.deletebyids.md) - Exclui por IDs
- [SolrClient::deleteByQuery()](solrclient.deletebyquery.md) - Exclui todos os documentos que correspondem à consulta fornecida

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
