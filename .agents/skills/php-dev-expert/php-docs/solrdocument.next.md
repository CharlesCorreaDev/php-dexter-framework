# Move o ponteiro interno para o próximo campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdocument.next.php

---

# SolrDocument::next

(PECL solr >= 0.9.2)

SolrDocument::next — Move o ponteiro interno para o próximo campo

### Descrição

public function **SolrDocument::next**(): [void](language.types.void.md)

Move o ponteiro interno para o próximo campo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Este método não tem valor de retorno.

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
