# A classe SolrResponse

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.solrresponse.php

---

# A classe SolrResponse

(PECL solr >= 0.9.2)

## Introdução

Representa uma resposta do servidor Solr.

## Resumo da classe

abstract
class **SolrResponse**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[PARSE\_SOLR\_OBJ](class.solrresponse.md#solrresponse.constants.parse-solr-obj) = 0;

const
[int](language.types.integer.md)
[PARSE\_SOLR\_DOC](class.solrresponse.md#solrresponse.constants.parse-solr-doc) = 1;

/\* Propriedades \*/

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

public function [getDigestedResponse](solrresponse.getdigestedresponse.md)(): [string](language.types.string.md)

public function [getHttpStatus](solrresponse.gethttpstatus.md)(): [int](language.types.integer.md)

public function [getHttpStatusMessage](solrresponse.gethttpstatusmessage.md)(): [string](language.types.string.md)

public function [getRawRequest](solrresponse.getrawrequest.md)(): [string](language.types.string.md)

public function [getRawRequestHeaders](solrresponse.getrawrequestheaders.md)(): [string](language.types.string.md)

public function [getRawResponse](solrresponse.getrawresponse.md)(): [string](language.types.string.md)

public function [getRawResponseHeaders](solrresponse.getrawresponseheaders.md)(): [string](language.types.string.md)

public function [getRequestUrl](solrresponse.getrequesturl.md)(): [string](language.types.string.md)

public function [getResponse](solrresponse.getresponse.md)(): [SolrObject](class.solrobject.md)

public function [setParseMode](solrresponse.setparsemode.md)([int](language.types.integer.md) `$parser_mode` = 0): [bool](language.types.boolean.md)

public function [success](solrresponse.success.md)(): [bool](language.types.boolean.md)

}

## Propriedades

http\_status
:   O status HTTP da resposta.

parser\_mode
:   Informa se devem ser analisados os documentos Solr como instâncias SolrObject ou SolrDocument.

success
:   Ocorreu ou não um erro durante a solicitação.

http\_status\_message
:   Mensagem detalhada sobre status HTTP.

http\_request\_url
:   O URL da solicitação.

http\_raw\_request\_headers
:   Uma string de cabeçalhos brutos enviados durante a solicitação.

http\_raw\_request
:   A solicitação bruta enviada ao servidor.

http\_raw\_response\_headers
:   Cabeçalhos de resposta do servidor Solr.

http\_raw\_response
:   A mensagem de resposta do servidor.

http\_digested\_response
:   A resposta em formato serializado PHP.

## Constantes predefinidas

## Constantes da classe SolrResponse

**`SolrResponse::PARSE_SOLR_OBJ`**
:   Os documentos devem ser analisados ​​como instâncias SolrObject.

**`SolrResponse::PARSE_SOLR_DOC`**
:   Os documentos devem ser analisados ​​como instâncias SolrDocument.

## Índice

- [SolrResponse::getDigestedResponse](solrresponse.getdigestedresponse.md) — Retorna a resposta XML como dados PHP serializados
- [SolrResponse::getHttpStatus](solrresponse.gethttpstatus.md) — Retorna o status HTTP da resposta
- [SolrResponse::getHttpStatusMessage](solrresponse.gethttpstatusmessage.md) — Retorna mais detalhes sobre o status HTTP
- [SolrResponse::getRawRequest](solrresponse.getrawrequest.md) — Retorna a solicitação bruta enviada ao servidor Solr
- [SolrResponse::getRawRequestHeaders](solrresponse.getrawrequestheaders.md) — Retorna os cabeçalhos de solicitação brutos enviados ao servidor Solr
- [SolrResponse::getRawResponse](solrresponse.getrawresponse.md) — Retorna a resposta bruta do servidor
- [SolrResponse::getRawResponseHeaders](solrresponse.getrawresponseheaders.md) — Retorna os cabeçalhos de resposta brutos do servidor
- [SolrResponse::getRequestUrl](solrresponse.getrequesturl.md) — Retorna o URL completo para o qual a solicitação foi enviada
- [SolrResponse::getResponse](solrresponse.getresponse.md) — Retorna um SolrObject representando a resposta XML do servidor
- [SolrResponse::setParseMode](solrresponse.setparsemode.md) — Define o modo de análise
- [SolrResponse::success](solrresponse.success.md) — Informa se a requisição foi bem-sucedida

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
