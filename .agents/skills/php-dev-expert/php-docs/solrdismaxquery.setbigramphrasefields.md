# Define campos de frase bigrama e seus impulsos (e slops) usando o parâmetro pf2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.setbigramphrasefields.php

---

# SolrDisMaxQuery::setBigramPhraseFields

(No version information available, might only be in Git)

SolrDisMaxQuery::setBigramPhraseFields — Define campos de frase bigrama e seus impulsos (e slops) usando o parâmetro pf2

### Descrição

public function **SolrDisMaxQuery::setBigramPhraseFields**([string](language.types.string.md) `$fields`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Define campos de frase bigrama e seus impulsos (e slops).

### Parâmetros

`fields`
:   Boosts de campos (slops)

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::setBigramPhraseFields()****

```
<?php
$dismaxQuery = new SolrDisMaxQuery("lucene");
$dismaxQuery->setBigramPhraseFields("cat~5.1^2 feature^4.5");
echo $dismaxQuery.PHP_EOL;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
q=lucene&defType=edismax&pf2=cat~5.1^2 feature^4.5
```

### Veja também

- [SolrDisMaxQuery::setBigramPhraseSlop()](solrdismaxquery.setbigramphraseslop.md) - Define o slop da frase bigrama (parâmetro ps2)
- **SolrDisMaxQuery::addBigramPhraseFields()**
- [SolrDisMaxQuery::removeBigramPhraseField()](solrdismaxquery.removebigramphrasefield.md) - Remove o campo de frase bigrama (parâmetro pf2)
- [SolrDisMaxQuery::setTrigramPhraseFields()](solrdismaxquery.settrigramphrasefields.md) - Define diretamente campos de frase trigrama (parâmetro pf3)

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
