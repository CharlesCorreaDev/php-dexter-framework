# Define a consulta alternativa (parâmetro q.alt)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.setqueryalt.php

---

# SolrDisMaxQuery::setQueryAlt

(No version information available, might only be in Git)

SolrDisMaxQuery::setQueryAlt — Define a consulta alternativa (parâmetro q.alt)

### Descrição

public function **SolrDisMaxQuery::setQueryAlt**([string](language.types.string.md) `$q`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Define a consulta alternativa (parâmetro q.alt).

Quando o parâmetro *q* principal não estiver especificado ou estiver em branco, o parâmetro *q.alt* é usado.

### Parâmetros

`q`
:   String da consulta

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::setQueryAlt()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery();
$dismaxQuery->setQueryAlt('*:*');

?>
```

O exemplo acima produzirá
algo semelhante a:

```
defType=edismax&q.alt=*:*&q=
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
