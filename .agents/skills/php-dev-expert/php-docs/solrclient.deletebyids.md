# Exclui por IDs

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.deletebyids.php

---

# SolrClient::deleteByIds

(PECL solr >= 0.9.2)

SolrClient::deleteByIds — Exclui por IDs

### Descrição

public function **SolrClient::deleteByIds**([array](language.types.array.md) `$ids`): [SolrUpdateResponse](class.solrupdateresponse.md)

Exclui uma coleção de documentos com o conjunto de IDs especificado.

### Parâmetros

`ids`
:   Um array de IDs que representa o campo 'uniqueKey' declarado no esquema para cada documento a ser excluído. Este deve ser uma variável PHP real.

### Valor Retornado

Retorna um [SolrUpdateResponse](class.solrupdateresponse.md) em caso de sucesso e lança uma exceção em caso de falha.

### Erros/Exceções

Lança [SolrClientException](class.solrclientexception.md) se o cliente falhar ou houver problema de conexão.

Lança [SolrServerException](class.solrserverexception.md) se o servidor Solr falhar ao processar a solicitação.

### Veja também

- [SolrClient::deleteById()](solrclient.deletebyid.md) - Exclui por ID
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
