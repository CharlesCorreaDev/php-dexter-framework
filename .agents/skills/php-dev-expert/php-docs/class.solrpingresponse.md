# A classe SolrPingResponse

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.solrpingresponse.php

---

# A classe SolrPingResponse

(PECL solr >= 0.9.2)

## Introdução

Representa uma resposta a uma solicitação de ping ao servidor

## Resumo da classe

final
class **SolrPingResponse**

extends
[SolrResponse](class.solrresponse.md)
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[PARSE\_SOLR\_OBJ](class.solrpingresponse.md#solrpingresponse.constants.parse-solr-obj) = 0;

const
[int](language.types.integer.md)
[PARSE\_SOLR\_DOC](class.solrpingresponse.md#solrpingresponse.constants.parse-solr-doc) = 1;

/\* Propriedades \*/

/\* Métodos \*/

public function [\_\_construct](solrpingresponse.construct.md)()

public function [getResponse](solrpingresponse.getresponse.md)(): [string](language.types.string.md)

public function [\_\_destruct](solrpingresponse.destruct.md)()

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

## Propriedades

http\_status
:   O status HTTP da resposta.

parser\_mode
:   Informa se devem ser analisados os documentos Solr como instâncias SolrObject ou SolrDocument.

success
:   Ocorreu ou não um erro durante a solicitação

http\_status\_message
:   Mensagem detalhada sobre status HTTP

http\_request\_url
:   O URL da solicitação

http\_raw\_request\_headers
:   Uma string de cabeçalhos brutos enviados durante a solicitação

http\_raw\_request
:   A solicitação bruta enviada ao servidor

http\_raw\_response\_headers
:   Cabeçalhos de resposta do servidor Solr

http\_raw\_response
:   A mensagem de resposta do servidor

http\_digested\_response
:   A resposta em formato serializado PHP

## Constantes predefinidas

## Constantes da classe SolrPingResponse

**`SolrPingResponse::PARSE_SOLR_OBJ`**
:   Os documentos devem ser analisados ​​como instâncias SolrObject.

**`SolrPingResponse::PARSE_SOLR_DOC`**
:   Os documentos devem ser analisados ​​como instâncias SolrDocument.

## Índice

- [SolrPingResponse::\_\_construct](solrpingresponse.construct.md) — Construtor
- [SolrPingResponse::\_\_destruct](solrpingresponse.destruct.md) — Destrutor
- [SolrPingResponse::getResponse](solrpingresponse.getresponse.md) — Retorna a resposta do servidor

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
