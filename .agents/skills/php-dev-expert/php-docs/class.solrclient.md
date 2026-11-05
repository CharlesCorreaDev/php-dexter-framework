# A classe SolrClient

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.solrclient.php

---

# A classe SolrClient

(PECL solr >= 0.9.2)

## Introdução

Usada para enviar solicitações a um servidor Solr. Atualmente, a clonagem e a serialização de instâncias SolrClient não são suportadas.

## Resumo da classe

final
class **SolrClient**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[SEARCH\_SERVLET\_TYPE](class.solrclient.md#solrclient.constants.search-servlet-type) = 1;

const
[int](language.types.integer.md)
[UPDATE\_SERVLET\_TYPE](class.solrclient.md#solrclient.constants.update-servlet-type) = 2;

const
[int](language.types.integer.md)
[THREADS\_SERVLET\_TYPE](class.solrclient.md#solrclient.constants.threads-servlet-type) = 4;

const
[int](language.types.integer.md)
[PING\_SERVLET\_TYPE](class.solrclient.md#solrclient.constants.ping-servlet-type) = 8;

const
[int](language.types.integer.md)
[TERMS\_SERVLET\_TYPE](class.solrclient.md#solrclient.constants.terms-servlet-type) = 16;

const
[int](language.types.integer.md)
[SYSTEM\_SERVLET\_TYPE](class.solrclient.md#solrclient.constants.system-servlet-type) = 32;

const
[string](language.types.string.md)
[DEFAULT\_SEARCH\_SERVLET](class.solrclient.md#solrclient.constants.default-search-servlet) = select;

const
[string](language.types.string.md)
[DEFAULT\_UPDATE\_SERVLET](class.solrclient.md#solrclient.constants.default-update-servlet) = update;

const
[string](language.types.string.md)
[DEFAULT\_THREADS\_SERVLET](class.solrclient.md#solrclient.constants.default-threads-servlet) = admin/threads;

const
[string](language.types.string.md)
[DEFAULT\_PING\_SERVLET](class.solrclient.md#solrclient.constants.default-ping-servlet) = admin/ping;

const
[string](language.types.string.md)
[DEFAULT\_TERMS\_SERVLET](class.solrclient.md#solrclient.constants.default-terms-servlet) = terms;

const
[string](language.types.string.md)
[DEFAULT\_SYSTEM\_SERVLET](class.solrclient.md#solrclient.constants.default-system-servlet) = admin/system;

/\* Métodos \*/

public function [\_\_construct](solrclient.construct.md)([array](language.types.array.md) `$clientOptions`)

public function [addDocument](solrclient.adddocument.md)([SolrInputDocument](class.solrinputdocument.md) `$doc`, [bool](language.types.boolean.md) `$overwrite` = **`true`**, [int](language.types.integer.md) `$commitWithin` = 0): [SolrUpdateResponse](class.solrupdateresponse.md)

public function [addDocuments](solrclient.adddocuments.md)([array](language.types.array.md) `$docs`, [bool](language.types.boolean.md) `$overwrite` = **`true`**, [int](language.types.integer.md) `$commitWithin` = 0): [void](language.types.void.md)

public function [commit](solrclient.commit.md)([bool](language.types.boolean.md) `$softCommit` = **`false`**, [bool](language.types.boolean.md) `$waitSearcher` = **`true`**, [bool](language.types.boolean.md) `$expungeDeletes` = **`false`**): [SolrUpdateResponse](class.solrupdateresponse.md)

public function [deleteById](solrclient.deletebyid.md)([string](language.types.string.md) `$id`): [SolrUpdateResponse](class.solrupdateresponse.md)

public function [deleteByIds](solrclient.deletebyids.md)([array](language.types.array.md) `$ids`): [SolrUpdateResponse](class.solrupdateresponse.md)

public function [deleteByQueries](solrclient.deletebyqueries.md)([array](language.types.array.md) `$queries`): [SolrUpdateResponse](class.solrupdateresponse.md)

public function [deleteByQuery](solrclient.deletebyquery.md)([string](language.types.string.md) `$query`): [SolrUpdateResponse](class.solrupdateresponse.md)

public function [getById](solrclient.getbyid.md)([string](language.types.string.md) `$id`): [SolrQueryResponse](class.solrqueryresponse.md)

public function [getByIds](solrclient.getbyids.md)([array](language.types.array.md) `$ids`): [SolrQueryResponse](class.solrqueryresponse.md)

public function [getDebug](solrclient.getdebug.md)(): [string](language.types.string.md)

public function [getOptions](solrclient.getoptions.md)(): [array](language.types.array.md)

public function [optimize](solrclient.optimize.md)([int](language.types.integer.md) `$maxSegments` = 1, [bool](language.types.boolean.md) `$softCommit` = **`true`**, [bool](language.types.boolean.md) `$waitSearcher` = **`true`**): [SolrUpdateResponse](class.solrupdateresponse.md)

public function [ping](solrclient.ping.md)(): [SolrPingResponse](class.solrpingresponse.md)

public function [query](solrclient.query.md)([SolrParams](class.solrparams.md) `$query`): [SolrQueryResponse](class.solrqueryresponse.md)

public function [request](solrclient.request.md)([string](language.types.string.md) `$raw_request`): [SolrUpdateResponse](class.solrupdateresponse.md)

public function [rollback](solrclient.rollback.md)(): [SolrUpdateResponse](class.solrupdateresponse.md)

public function [setResponseWriter](solrclient.setresponsewriter.md)([string](language.types.string.md) `$responseWriter`): [void](language.types.void.md)

public function [setServlet](solrclient.setservlet.md)([int](language.types.integer.md) `$type`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

public function [system](solrclient.system.md)(): [void](language.types.void.md)

public function [threads](solrclient.threads.md)(): [void](language.types.void.md)

public function [\_\_destruct](solrclient.destruct.md)()

}

## Constantes predefinidas

**`SolrClient::SEARCH_SERVLET_TYPE`**
:   Usada ao atualizar o servlet de pesquisa.

**`SolrClient::UPDATE_SERVLET_TYPE`**
:   Usada ao atualizar o servlet de atualização.

**`SolrClient::THREADS_SERVLET_TYPE`**
:   Usada ao atualizar o servlet de threads.

**`SolrClient::PING_SERVLET_TYPE`**
:   Usada ao atualizar o servlet de ping.

**`SolrClient::TERMS_SERVLET_TYPE`**
:   Usada ao atualizar o servlet de termos.

**`SolrClient::SYSTEM_SERVLET_TYPE`**
:   Usada ao recuperar informações do sistema a partir do servlet do sistema.

**`SolrClient::DEFAULT_SEARCH_SERVLET`**
:   Este é o valor inicial do servlet de pesquisa.

**`SolrClient::DEFAULT_UPDATE_SERVLET`**
:   Este é o valor inicial do servlet de atualização.

**`SolrClient::DEFAULT_THREADS_SERVLET`**
:   Este é o valor inicial para o servlet de threads.

**`SolrClient::DEFAULT_PING_SERVLET`**
:   Este é o valor inicial do servlet de ping.

**`SolrClient::DEFAULT_TERMS_SERVLET`**
:   Este é o valor inicial para o servlet de termos usado para o TermsComponent.

**`SolrClient::DEFAULT_SYSTEM_SERVLET`**
:   Este é o valor inicial do servlet do sistema usado para obter informações do Servidor Solr.

## Índice

- [SolrClient::addDocument](solrclient.adddocument.md) — Adiciona um documento ao índice
- [SolrClient::addDocuments](solrclient.adddocuments.md) — Adiciona uma coleção de instâncias SolrInputDocument ao índice
- [SolrClient::commit](solrclient.commit.md) — Finaliza todas as adições/exclusões feitas no índice
- [SolrClient::\_\_construct](solrclient.construct.md) — Construtor para o objeto SolrClient
- [SolrClient::deleteById](solrclient.deletebyid.md) — Exclui por ID
- [SolrClient::deleteByIds](solrclient.deletebyids.md) — Exclui por IDs
- [SolrClient::deleteByQueries](solrclient.deletebyqueries.md) — Remove todos os documentos que correspondem a qualquer uma das consultas
- [SolrClient::deleteByQuery](solrclient.deletebyquery.md) — Exclui todos os documentos que correspondem à consulta fornecida
- [SolrClient::\_\_destruct](solrclient.destruct.md) — Destrutor para SolrClient
- [SolrClient::getById](solrclient.getbyid.md) — Obtém documento por ID usando Realtime Get (RTG) do Solr
- [SolrClient::getByIds](solrclient.getbyids.md) — Obtém documentos por seus IDs usando Realtime Get (RTG) do Solr
- [SolrClient::getDebug](solrclient.getdebug.md) — Retorna os dados de depuração da última tentativa de conexão
- [SolrClient::getOptions](solrclient.getoptions.md) — Retorna as opções do cliente definidas internamente
- [SolrClient::optimize](solrclient.optimize.md) — Desfragmenta o índice
- [SolrClient::ping](solrclient.ping.md) — Verifica se o servidor Solr ainda está ativo
- [SolrClient::query](solrclient.query.md) — Envia uma consulta ao servidor
- [SolrClient::request](solrclient.request.md) — Envia uma solicitação de atualização bruta
- [SolrClient::rollback](solrclient.rollback.md) — Reverte todas as adições/exclusões feitas no índice desde a última confirmação
- [SolrClient::setResponseWriter](solrclient.setresponsewriter.md) — Define o gravador de resposta usado para preparar a resposta do Solr
- [SolrClient::setServlet](solrclient.setservlet.md) — Altera o tipo de servlet especificado para um novo valor
- [SolrClient::system](solrclient.system.md) — Recupera informações do servidor Solr
- [SolrClient::threads](solrclient.threads.md) — Verifica o status dos threads

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
