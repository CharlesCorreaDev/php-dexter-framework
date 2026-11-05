# Extensões de Motor de Busca

> **Fonte / Source:** https://www.php.net/manual/pt_BR/refs.search.php

---

# Extensões de Motor de Busca

- [Solr](book.solr.md) — Apache Solr
  - [Instalação/Configuração](solr.setup.md)
  - [Constantes predefinidas](solr.constants.md)
  - [Funções de Solr](ref.solr.md)
  - [Examples](solr.examples.md)
  - [SolrUtils](class.solrutils.md) — A classe SolrUtils
  - [SolrInputDocument](class.solrinputdocument.md) — A classe SolrInputDocument
  - [SolrDocument](class.solrdocument.md) — A classe SolrDocument
  - [SolrDocumentField](class.solrdocumentfield.md) — A classe SolrDocumentField
  - [SolrObject](class.solrobject.md) — A classe SolrObject
  - [SolrClient](class.solrclient.md) — A classe SolrClient
  - [SolrResponse](class.solrresponse.md) — A classe SolrResponse
  - [SolrQueryResponse](class.solrqueryresponse.md) — A classe SolrQueryResponse
  - [SolrUpdateResponse](class.solrupdateresponse.md) — A classe SolrUpdateResponse
  - [SolrPingResponse](class.solrpingresponse.md) — A classe SolrPingResponse
  - [SolrGenericResponse](class.solrgenericresponse.md) — A classe SolrGenericResponse
  - [SolrParams](class.solrparams.md) — A classe SolrParams
  - [SolrModifiableParams](class.solrmodifiableparams.md) — A classe SolrModifiableParams
  - [SolrQuery](class.solrquery.md) — A classe SolrQuery
  - [SolrDisMaxQuery](class.solrdismaxquery.md) — A classe SolrDisMaxQuery
  - [SolrCollapseFunction](class.solrcollapsefunction.md) — A classe SolrCollapseFunction
  - [SolrException](class.solrexception.md) — A classe SolrException
  - [SolrClientException](class.solrclientexception.md) — A classe SolrClientException
  - [SolrServerException](class.solrserverexception.md) — A classe SolrServerException
  - [SolrIllegalArgumentException](class.solrillegalargumentexception.md) — A classe SolrIllegalArgumentException
  - [SolrIllegalOperationException](class.solrillegaloperationexception.md) — A classe SolrIllegalOperationException
  - [SolrMissingMandatoryParameterException](class.solrmissingmandatoryparameterexception.md) — A classe SolrMissingMandatoryParameterException

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
