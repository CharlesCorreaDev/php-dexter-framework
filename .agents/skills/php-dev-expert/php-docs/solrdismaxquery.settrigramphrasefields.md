# Define diretamente campos de frase trigrama (parâmetro pf3)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.settrigramphrasefields.php

---

# SolrDisMaxQuery::setTrigramPhraseFields

(No version information available, might only be in Git)

SolrDisMaxQuery::setTrigramPhraseFields — Define diretamente campos de frase trigrama (parâmetro pf3)

### Descrição

public function **SolrDisMaxQuery::setTrigramPhraseFields**([string](language.types.string.md) `$fields`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Define diretamente campos de frase trigrama (parâmetro pf3)

### Parâmetros

`fields`
:   Campos de frase trigrama

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::setTrigramPhraseFields()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery('lucene');
$dismaxQuery->setTrigramPhraseFields('cat~5.1^2 feature^4.5');
echo $dismaxQuery.PHP_EOL;

?>
```

O exemplo acima produzirá:

```
q=lucene&defType=edismax&pf3=cat~5.1^2 feature^4.5
```

### Veja também

- [SolrDisMaxQuery::addTrigramPhraseField()](solrdismaxquery.addtrigramphrasefield.md) - Adiciona um campo de frase trigrama (parâmetro pf3)
- [SolrDisMaxQuery::removeTrigramPhraseField()](solrdismaxquery.removetrigramphrasefield.md) - Remove um campo de frase trigrama (parâmetro pf3)
- [SolrDisMaxQuery::setTrigramPhraseSlop()](solrdismaxquery.settrigramphraseslop.md) - Define slop de frase trigrama (parâmetro ps3)

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
