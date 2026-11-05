# Define diretamente o parâmetro de consulta de impulso (bq)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.setboostquery.php

---

# SolrDisMaxQuery::setBoostQuery

(No version information available, might only be in Git)

SolrDisMaxQuery::setBoostQuery — Define diretamente o parâmetro de consulta de impulso (bq)

### Descrição

public function **SolrDisMaxQuery::setBoostQuery**([string](language.types.string.md) `$q`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Define o parâmetro de consulta de impulso.

### Parâmetros

`q`
:   consulta

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::setBoostQuery()****

```
<?php
$dismaxQuery = new SolrDisMaxQuery("lucene");

$dismaxQuery->setBoostQuery('cat:electronics manu:local^2');
echo $dismaxQuery.PHP_EOL;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
q=lucene&defType=edismax&bq=cat:electronics manu:local^2
```

### Veja também

- [SolrDisMaxQuery::addBoostQuery()](solrdismaxquery.addboostquery.md) - Adiciona um campo de consulta de impulso com valor e impulso (parâmetro bq)
- [SolrDisMaxQuery::removeBoostQuery()](solrdismaxquery.removeboostquery.md) - Remove uma consulta de impulso parcial por nome de campo (bq)

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
