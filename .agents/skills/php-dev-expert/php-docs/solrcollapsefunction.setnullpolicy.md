# Define a política para NULL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrcollapsefunction.setnullpolicy.php

---

# SolrCollapseFunction::setNullPolicy

(PECL solr >= 2.2.0)

SolrCollapseFunction::setNullPolicy — Define a política para NULL

### Descrição

public function **SolrCollapseFunction::setNullPolicy**([string](language.types.string.md) `$nullPolicy`): [SolrCollapseFunction](class.solrcollapsefunction.md)

Define a política de NULL. Uma das 3 políticas definidas como constantes de classe deve ser aprovada.
Aceita políticas para ignorar, expandir ou colapsar.

### Parâmetros

`nullPolicy`

### Valor Retornado

[SolrCollapseFunction](class.solrcollapsefunction.md)

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
