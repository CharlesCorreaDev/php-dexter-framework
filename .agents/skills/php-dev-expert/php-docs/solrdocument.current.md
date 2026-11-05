# Recupera o campo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.current.php

---

# SolrDocument::current

(PECL solr >= 0.9.2)

SolrDocument::current — Recupera o campo atual

### Descrição

public function **SolrDocument::current**(): [SolrDocumentField](class.solrdocumentfield.md)

Recupera o campo atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o campo.

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
