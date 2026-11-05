# Cria uma cópia de um objeto SolrDocument

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.clone.php

---

# SolrDocument::\_\_clone

(PECL solr >= 0.9.2)

SolrDocument::\_\_clone — Cria uma cópia de um objeto SolrDocument

### Descrição

public function **SolrDocument::\_\_clone**(): [void](language.types.void.md)

Cria uma cópia de um objeto SolrDocument. Não deve ser chamado diretamente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum.

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
