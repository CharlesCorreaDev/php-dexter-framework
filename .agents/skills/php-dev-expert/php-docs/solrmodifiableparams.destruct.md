# Destrutor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrmodifiableparams.destruct.php

---

# SolrModifiableParams::\_\_destruct

(PECL solr >= 0.9.2)

SolrModifiableParams::\_\_destruct — Destrutor

### Descrição

public function **SolrModifiableParams::\_\_destruct**()

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
