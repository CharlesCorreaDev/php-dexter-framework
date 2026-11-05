# Reverte todas as adições/exclusões feitas no índice desde a última confirmação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.rollback.php

---

# SolrClient::rollback

(PECL solr >= 0.9.2)

SolrClient::rollback — Reverte todas as adições/exclusões feitas no índice desde a última confirmação

### Descrição

public function **SolrClient::rollback**(): [SolrUpdateResponse](class.solrupdateresponse.md)

Reverte todas as adições/exclusões feitas no índice desde a última confirmação. Ele não chama nenhum ouvinte de eventos nem cria um novo pesquisador.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um SolrUpdateResponse em caso de sucesso ou lança um SolrClientException em caso de falha.

### Veja também

- [SolrClient::commit()](solrclient.commit.md) - Finaliza todas as adições/exclusões feitas no índice
- [SolrClient::optimize()](solrclient.optimize.md) - Desfragmenta o índice

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
