# Define campos de frase e seus impulsos (e slops) usando o parâmetro pf2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.setphrasefields.php

---

# SolrDisMaxQuery::setPhraseFields

(No version information available, might only be in Git)

SolrDisMaxQuery::setPhraseFields — Define campos de frase e seus impulsos (e slops) usando o parâmetro pf2

### Descrição

public function **SolrDisMaxQuery::setPhraseFields**([string](language.types.string.md) `$fields`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Define campos de frase (pf) e seus impulsos (e slops)

### Parâmetros

`fields`
:   Campos, impulsos [, slops]

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::setPhraseFields()****

```
<?php
$dismaxQuery = new SolrDisMaxQuery("lucene");
$dismaxQuery->setPhraseFields("cat~5.1^2 feature^4.5");
echo $dismaxQuery.PHP_EOL;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
q=lucene&defType=edismax&pf=cat~5.1^2 feature^4.5
```

### Veja também

- **SolrDisMaxQuery::addPhraseFields()**
- [SolrDisMaxQuery::removePhraseField()](solrdismaxquery.removephrasefield.md) - Remover um campo de frase (parâmetro pf)

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
