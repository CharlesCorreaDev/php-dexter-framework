# Destrutor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocumentfield.destruct.php

---

# SolrDocumentField::\_\_destruct

(PECL solr >= 0.9.2)

SolrDocumentField::\_\_destruct — Destrutor

### Descrição

public function **SolrDocumentField::\_\_destruct**()

Destrutor.

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
