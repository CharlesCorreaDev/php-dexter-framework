# Define a correspondência mínima "Deveria" (mm)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.setminimummatch.php

---

# SolrDisMaxQuery::setMinimumMatch

(No version information available, might only be in Git)

SolrDisMaxQuery::setMinimumMatch — Define a correspondência mínima "Deveria" (mm)

### Descrição

public function **SolrDisMaxQuery::setMinimumMatch**([string](language.types.string.md) `$value`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Define a correspondência mínima "Deveria" (mm). Se o operador padrão da consulta for AND, então mm=100%, se o operador padrão da consulta (q.op) for OR, então mm=0%.

### Parâmetros

`value`
:   Valor/expressão de correspondência mínima.

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::setMinimumMatch()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery("lucene");
// 75% das cláusulas da consulta devem corresponder
$dismaxQuery->setMinimumMatch("75%");
echo $dismaxQuery . PHP_EOL;

?>
```

O exemplo acima produzirá:

```
q=lucene&defType=edismax&mm=75%
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
