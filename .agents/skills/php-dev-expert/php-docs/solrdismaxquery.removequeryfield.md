# Remove um campo de consulta (parâmetro qf)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.removequeryfield.php

---

# SolrDisMaxQuery::removeQueryField

(No version information available, might only be in Git)

SolrDisMaxQuery::removeQueryField — Remove um campo de consulta (parâmetro qf)

### Descrição

public function **SolrDisMaxQuery::removeQueryField**([string](language.types.string.md) `$field`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Remove um campo de consulta (parâmetro qf) da lista de campos adicionados por [SolrDisMaxQuery::addQueryField()](solrdismaxquery.addqueryfield.md).

qf: Ao construir DisjunctionMaxQueries a partir da consulta do usuário, especifica os campos para pesquisa e impulsos para esses campos.

### Parâmetros

`field`
:   Nome do campo

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::removeQueryField()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery('lucene');
$dismaxQuery
    ->addQueryField('first', 3)
    ->addQueryField('second', 0.2)
    ->addQueryField('cat');
echo $dismaxQuery . PHP_EOL;
// remove o campo 'second'
echo $dismaxQuery->removeQueryField('second');
?>
```

O exemplo acima produzirá
algo semelhante a:

```
q=lucene&defType=edismax&qf=first^3 second^0.2 cat
q=lucene&defType=edismax&qf=first^3 cat
```

### Veja também

- [SolrDisMaxQuery::addQueryField()](solrdismaxquery.addqueryfield.md) - Adiciona um campo de consulta com impulso opcional (parâmetro qf)

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
