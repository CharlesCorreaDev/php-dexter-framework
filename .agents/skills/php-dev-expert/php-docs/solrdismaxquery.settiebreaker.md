# Define o parâmetro de desempate (parâmetro tie)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.settiebreaker.php

---

# SolrDisMaxQuery::setTieBreaker

(No version information available, might only be in Git)

SolrDisMaxQuery::setTieBreaker — Define o parâmetro de desempate (parâmetro tie)

### Descrição

public function **SolrDisMaxQuery::setTieBreaker**([string](language.types.string.md) `$tieBreaker`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Define o parâmetro de desempate (parâmetro tie)

### Parâmetros

`tieBreaker`
:   O parâmetro *tie* especifica um valor flutuante (que deve ser algo bem menor que 1) para usar como desempate em consultas DisMax.

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::setTieBreaker()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery();
$dismaxQuery->setTieBreaker(0.1);

echo $dismaxQuery;

?>
```

O exemplo acima produzirá:

```
defType=edismax&tie=0.1
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
