# Remove uma consulta de impulso parcial por nome de campo (bq)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.removeboostquery.php

---

# SolrDisMaxQuery::removeBoostQuery

(No version information available, might only be in Git)

SolrDisMaxQuery::removeBoostQuery — Remove uma consulta de impulso parcial por nome de campo (bq)

### Descrição

public function **SolrDisMaxQuery::removeBoostQuery**([string](language.types.string.md) `$field`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Remove uma consulta de impulso parcial da consulta existente, somente se [SolrDisMaxQuery::addBoostQuery()](solrdismaxquery.addboostquery.md) foi usado.

### Parâmetros

`field`
:   Nome do campo

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::removeBoostQuery()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery("lucene");
$dismaxQuery
    ->addBoostQuery('cat', 'electronics', 5.1)
    ->addBoostQuery('cat', 'hard drive')
;
echo $dismaxQuery.PHP_EOL;
// agora remove uma parte da consulta com o campo 'cat'
$dismaxQuery
->removeBoostQuery('cat');
echo $dismaxQuery . PHP_EOL;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
q=lucene&defType=edismax&bq=cat:electronics^5.1 cat:hard drive
q=lucene&defType=edismax&bq=cat:hard drive
```

### Veja também

- [SolrDisMaxQuery::addBoostQuery()](solrdismaxquery.addboostquery.md) - Adiciona um campo de consulta de impulso com valor e impulso (parâmetro bq)
- [SolrDisMaxQuery::setBoostQuery()](solrdismaxquery.setboostquery.md) - Define diretamente o parâmetro de consulta de impulso (bq)

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
