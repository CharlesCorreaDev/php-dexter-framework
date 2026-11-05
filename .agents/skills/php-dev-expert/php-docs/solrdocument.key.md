# Recupera a chave atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.key.php

---

# SolrDocument::key

(PECL solr >= 0.9.2)

SolrDocument::key — Recupera a chave atual

### Descrição

public function **SolrDocument::key**(): [string](language.types.string.md)

Recupera a chave atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a chave atual.

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
