# Desfragmenta o índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.optimize.php

---

# SolrClient::optimize

(PECL solr >= 0.9.2)

SolrClient::optimize — Desfragmenta o índice

### Descrição

public function **SolrClient::optimize**([int](language.types.integer.md) `$maxSegments` = 1, [bool](language.types.boolean.md) `$softCommit` = **`true`**, [bool](language.types.boolean.md) `$waitSearcher` = **`true`**): [SolrUpdateResponse](class.solrupdateresponse.md)

Desfragmenta o índice para um desempenho de pesquisa mais rápido.

### Parâmetros

`maxSegments`
:   Otimiza até no máximo esse número de segmentos. Desde o Solr 1.3.

`softCommit`
:   Isto irá atualizar a 'visão' do índice de uma forma mais eficiente, mas sem garantias "no disco". (Sol4.0+)

`waitSearcher`
:   Bloqueia até que um novo buscador seja aberto e cadastrado como buscador de consulta principal, tornando as alterações visíveis.

### Valor Retornado

Retorna um SolrUpdateResponse em caso de sucesso ou lança uma exceção em caso de falha.

### Erros/Exceções

Lança [SolrClientException](class.solrclientexception.md) se o cliente falhar ou houver problema de conexão.

Lança [SolrServerException](class.solrserverexception.md) se o servidor Solr falhar ao processar a solicitação.

### Notas

**Aviso**

PECL Solr >= 2.0 só suporta Solr Server >= 4.0

Antes do PECL Solr 2.0, este método costumava aceitar estes argumentos "int $maxSegments, bool $waitFlush, bool $waitSearcher".

### Veja também

- [SolrClient::commit()](solrclient.commit.md) - Finaliza todas as adições/exclusões feitas no índice
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
