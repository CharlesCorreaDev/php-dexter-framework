# Recupera o valor de impulso atual do documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.getboost.php

---

# SolrInputDocument::getBoost

(PECL solr >= 0.9.2)

SolrInputDocument::getBoost — Recupera o valor de impulso atual do documento

### Descrição

public function **SolrInputDocument::getBoost**(): [float](language.types.float.md)

Recupera o valor de impulso atual do documento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o valor do impulso em caso de sucesso e **`false`** em caso de falha.

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
