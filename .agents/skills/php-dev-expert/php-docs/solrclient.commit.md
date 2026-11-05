# Finaliza todas as adições/exclusões feitas no índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.commit.php

---

# SolrClient::commit

(PECL solr >= 0.9.2)

SolrClient::commit — Finaliza todas as adições/exclusões feitas no índice

### Descrição

public function **SolrClient::commit**([bool](language.types.boolean.md) `$softCommit` = **`false`**, [bool](language.types.boolean.md) `$waitSearcher` = **`true`**, [bool](language.types.boolean.md) `$expungeDeletes` = **`false`**): [SolrUpdateResponse](class.solrupdateresponse.md)

Este método finaliza todas as adições/exclusões feitas no índice.

### Parâmetros

`softCommit`
:   Isto irá atualizar a 'visão' do índice de uma forma mais eficiente, mas sem garantias "no disco". (Sol4.0+)

    Uma confirmação 'soft' é muito mais rápida, pois apenas torna visíveis as alterações do índice e não sincroniza arquivos de índice nem grava um novo descritor de índice.
    Se a JVM travar ou houver perda de energia, as alterações ocorridas após a última confirmação 'hard' serão perdidas.
    As coleções de pesquisa que têm requisitos quase em tempo real (que desejam que as alterações no índice sejam rapidamente visíveis para as pesquisas) desejarão fazer confirmações 'soft' com frequência, e confirmações 'hard' com menos frequência.

`waitSearcher`
:   Bloqueia até que um novo buscador seja aberto e cadastrado como buscador de consulta principal, tornando as alterações visíveis.

`expungeDeletes`
:   Mescla segmentos sem as exclusões. (Solr1.4+)

### Valor Retornado

Retorna um objeto [SolrUpdateResponse](class.solrupdateresponse.md) em caso de sucesso ou lança uma exceção em caso de falha.

### Erros/Exceções

Lança [SolrClientException](class.solrclientexception.md) se o cliente falhar ou houver problema de conexão.

Lança [SolrServerException](class.solrserverexception.md) se o servidor Solr falhar ao processar a solicitação.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL solr 1.1.0, PECL solr 2.0.0 | $maxSegments removido |
| PECL solr 2.0.0b | API alterada: SolrClient::commit ([ int $maxSegments = 0 [, bool $softCommit = false [, bool $waitSearcher = true[, bool $expungeDeletes = false ]]] ) |
| PECL solr 0.9.2 | Assinatura: SolrClient::commit ([ int $maxSegments = 1 [, bool $waitFlush = true [, bool $waitSearcher = true ]]] ). $waitFlush: Bloqueia até que as alterações no índice sejam gravadas em disco. |

### Notas

**Aviso**

PECL Solr >= 2.0 somente suporta Solr Server >= 4.0

### Veja também

- [SolrClient::optimize()](solrclient.optimize.md) - Desfragmenta o índice
- [SolrClient::rollback()](solrclient.rollback.md) - Reverte todas as adições/exclusões feitas no índice desde a última confirmação

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
