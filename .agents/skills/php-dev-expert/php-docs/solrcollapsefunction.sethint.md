# Define dica de colapso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrcollapsefunction.sethint.php

---

# SolrCollapseFunction::setHint

(PECL solr >= 2.2.0)

SolrCollapseFunction::setHint — Define dica de colapso

### Descrição

public function **SolrCollapseFunction::setHint**([string](language.types.string.md) `$hint`): [SolrCollapseFunction](class.solrcollapsefunction.md)

Define dica de colapso.

### Parâmetros

`hint`
:   Atualmente há apenas uma dica disponível "top\_fc", que significa FieldCache de nível superior.

### Valor Retornado

[SolrCollapseFunction](class.solrcollapsefunction.md)

### Examples

**Exemplo #1 Exemplo de **SolrCollapseFunction::setHint()****

```
<?php

/* ... */

?>
```

O exemplo acima produzirá
algo semelhante a:

```
...
```

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
