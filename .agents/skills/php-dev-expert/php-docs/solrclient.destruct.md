# Destrutor para SolrClient

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.destruct.php

---

# SolrClient::\_\_destruct

(PECL solr >= 0.9.2)

SolrClient::\_\_destruct — Destrutor para SolrClient

### Descrição

public function **SolrClient::\_\_destruct**()

Destrutor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum.

### Veja também

- [SolrClient::\_\_construct()](solrclient.construct.md) - Construtor para o objeto SolrClient

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
