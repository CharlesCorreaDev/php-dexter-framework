# Adiciona um campo de consulta de impulso com valor e impulso (parâmetro bq)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.addboostquery.php

---

# SolrDisMaxQuery::addBoostQuery

(No version information available, might only be in Git)

SolrDisMaxQuery::addBoostQuery — Adiciona um campo de consulta de impulso com valor e impulso (parâmetro bq)

### Descrição

public function **SolrDisMaxQuery::addBoostQuery**([string](language.types.string.md) `$field`, [string](language.types.string.md) `$value`, [string](language.types.string.md) `$boost` = ?): [SolrDisMaxQuery](class.solrdismaxquery.md)

Adiciona um campo de consulta de impulso com valor [e impulso] (parâmetro bq).

### Parâmetros

`field`

`value`

`boost`

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::addBoostQuery()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery("lucene");
$dismaxQuery
    ->addBoostQuery('cat', 'clothing', 2)
    ->addBoostQuery('cat', 'electronics', 5.1)
;
echo $dismaxQuery.PHP_EOL;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
q=lucene&defType=edismax&bq=cat:clothing^2 cat:electronics^5.1
```

### Veja também

- [SolrDisMaxQuery::removeBoostQuery()](solrdismaxquery.removeboostquery.md) - Remove uma consulta de impulso parcial por nome de campo (bq)
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
