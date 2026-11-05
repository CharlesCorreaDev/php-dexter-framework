# Retorna os dados de depuração da última tentativa de conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.getdebug.php

---

# SolrClient::getDebug

(PECL solr >= 0.9.7)

SolrClient::getDebug — Retorna os dados de depuração da última tentativa de conexão

### Descrição

public function **SolrClient::getDebug**(): [string](language.types.string.md)

Retorna os dados de depuração da última tentativa de conexão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string em caso de sucesso e nulo se não houver nada para retornar.

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
