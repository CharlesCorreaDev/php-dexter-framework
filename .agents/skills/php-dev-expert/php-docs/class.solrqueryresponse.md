# A classe SolrQueryResponse

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.solrqueryresponse.php

---

# A classe SolrQueryResponse

(PECL solr >= 0.9.2)

## Introdução

Representa uma resposta a uma solicitação de consulta.

## Resumo da classe

final
class **SolrQueryResponse**

extends
[SolrResponse](class.solrresponse.md)
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[PARSE\_SOLR\_OBJ](class.solrqueryresponse.md#solrqueryresponse.constants.parse-solr-obj) = 0;

const
[int](language.types.integer.md)
[PARSE\_SOLR\_DOC](class.solrqueryresponse.md#solrqueryresponse.constants.parse-solr-doc) = 1;

/\* Propriedades herdadas \*/

const
[int](language.types.integer.md)
[SolrResponse::PARSE\_SOLR\_OBJ](class.solrresponse.md#solrresponse.constants.parse-solr-obj) = 0;

const
[int](language.types.integer.md)
[SolrResponse::PARSE\_SOLR\_DOC](class.solrresponse.md#solrresponse.constants.parse-solr-doc) = 1;

protected
[int](language.types.integer.md)
[$http\_status](class.solrresponse.md#solrresponse.props.http-status);

protected
[int](language.types.integer.md)
[$parser\_mode](class.solrresponse.md#solrresponse.props.parser-mode);

protected
[bool](language.types.boolean.md)
[$success](class.solrresponse.md#solrresponse.props.success);

protected
[string](language.types.string.md)
[$http\_status\_message](class.solrresponse.md#solrresponse.props.http-status-message);

protected
[string](language.types.string.md)
[$http\_request\_url](class.solrresponse.md#solrresponse.props.http-request-url);

protected
[string](language.types.string.md)
[$http\_raw\_request\_headers](class.solrresponse.md#solrresponse.props.http-raw-request-headers);

protected
[string](language.types.string.md)
[$http\_raw\_request](class.solrresponse.md#solrresponse.props.http-raw-request);

protected
[string](language.types.string.md)
[$http\_raw\_response\_headers](class.solrresponse.md#solrresponse.props.http-raw-response-headers);

protected
[string](language.types.string.md)
[$http\_raw\_response](class.solrresponse.md#solrresponse.props.http-raw-response);

protected
[string](language.types.string.md)
[$http\_digested\_response](class.solrresponse.md#solrresponse.props.http-digested-response);

/\* Métodos \*/

public function [\_\_construct](solrqueryresponse.construct.md)()

public function [\_\_destruct](solrqueryresponse.destruct.md)()

/\* Métodos herdados \*/

public function [SolrResponse::getDigestedResponse](solrresponse.getdigestedresponse.md)(): [string](language.types.string.md)

public function [SolrResponse::getHttpStatus](solrresponse.gethttpstatus.md)(): [int](language.types.integer.md)

public function [SolrResponse::getHttpStatusMessage](solrresponse.gethttpstatusmessage.md)(): [string](language.types.string.md)

public function [SolrResponse::getRawRequest](solrresponse.getrawrequest.md)(): [string](language.types.string.md)

public function [SolrResponse::getRawRequestHeaders](solrresponse.getrawrequestheaders.md)(): [string](language.types.string.md)

public function [SolrResponse::getRawResponse](solrresponse.getrawresponse.md)(): [string](language.types.string.md)

public function [SolrResponse::getRawResponseHeaders](solrresponse.getrawresponseheaders.md)(): [string](language.types.string.md)

public function [SolrResponse::getRequestUrl](solrresponse.getrequesturl.md)(): [string](language.types.string.md)

public function [SolrResponse::getResponse](solrresponse.getresponse.md)(): [SolrObject](class.solrobject.md)

public function [SolrResponse::setParseMode](solrresponse.setparsemode.md)([int](language.types.integer.md) `$parser_mode` = 0): [bool](language.types.boolean.md)

public function [SolrResponse::success](solrresponse.success.md)(): [bool](language.types.boolean.md)

}

## Constantes predefinidas

## Constantes da classe SolrQueryResponse

**`SolrQueryResponse::PARSE_SOLR_OBJ`**
:   Os documentos devem ser analisados ​​como instâncias SolrObject.

**`SolrQueryResponse::PARSE_SOLR_DOC`**
:   Os documentos devem ser analisados ​​como instâncias SolrDocument.

## Índice

- [SolrQueryResponse::\_\_construct](solrqueryresponse.construct.md) — Construtor
- [SolrQueryResponse::\_\_destruct](solrqueryresponse.destruct.md) — Destrutor

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
