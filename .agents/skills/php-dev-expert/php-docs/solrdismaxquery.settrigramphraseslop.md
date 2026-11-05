# Define slop de frase trigrama (parâmetro ps3)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.settrigramphraseslop.php

---

# SolrDisMaxQuery::setTrigramPhraseSlop

(No version information available, might only be in Git)

SolrDisMaxQuery::setTrigramPhraseSlop — Define slop de frase trigrama (parâmetro ps3)

### Descrição

public function **SolrDisMaxQuery::setTrigramPhraseSlop**([string](language.types.string.md) `$slop`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Define slop de frase trigrama (parâmetro ps3)

### Parâmetros

`slop`
:   Slop de frase

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::setTrigramPhraseSlop()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery('lucene');
$dismaxQuery->setTrigramPhraseSlop(2);
echo $dismaxQuery.PHP_EOL;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
q=lucene&defType=edismax&ps3=2
```

### Veja também

- [SolrDisMaxQuery::addTrigramPhraseField()](solrdismaxquery.addtrigramphrasefield.md) - Adiciona um campo de frase trigrama (parâmetro pf3)
- [SolrDisMaxQuery::removeTrigramPhraseField()](solrdismaxquery.removetrigramphrasefield.md) - Remove um campo de frase trigrama (parâmetro pf3)
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
