# Retorna as opções do cliente definidas internamente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrclient.getoptions.php

---

# SolrClient::getOptions

(PECL solr >= 0.9.6)

SolrClient::getOptions — Retorna as opções do cliente definidas internamente

### Descrição

public function **SolrClient::getOptions**(): [array](language.types.array.md)

Retorna as opções do cliente definidas internamente. Muito útil para depuração. Os valores retornados são somente leitura e só podem ser definidos quando o objeto é instanciado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array contendo todas as opções para o objeto SolrClient definido internamente.

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
