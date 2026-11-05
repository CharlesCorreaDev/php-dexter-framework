# Cria uma cópia de um SolrDocument

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrinputdocument.clone.php

---

# SolrInputDocument::\_\_clone

(PECL solr >= 0.9.2)

SolrInputDocument::\_\_clone — Cria uma cópia de um SolrDocument

### Descrição

public function **SolrInputDocument::\_\_clone**(): [void](language.types.void.md)

Não deve ser chamado diretamente. É usado para criar uma cópia profunda de um SolrInputDocument.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Cria uma nova instância SolrInputDocument.

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
