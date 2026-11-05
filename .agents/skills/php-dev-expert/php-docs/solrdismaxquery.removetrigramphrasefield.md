# Remove um campo de frase trigrama (parâmetro pf3)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.removetrigramphrasefield.php

---

# SolrDisMaxQuery::removeTrigramPhraseField

(No version information available, might only be in Git)

SolrDisMaxQuery::removeTrigramPhraseField — Remove um campo de frase trigrama (parâmetro pf3)

### Descrição

public function **SolrDisMaxQuery::removeTrigramPhraseField**([string](language.types.string.md) `$field`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Remove um campo de frase trigrama (parâmetro pf3).

### Parâmetros

`field`
:   Nome do campo

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::removeTrigramPhraseField()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery('lucene');
$dismaxQuery
->addTrigramPhraseField('cat', 2, 5.1)
->addTrigramPhraseField('feature', 4.5)
;
echo $dismaxQuery.PHP_EOL;
// reverte
$dismaxQuery
->removeTrigramPhraseField('cat');
echo $dismaxQuery.PHP_EOL;

?>
```

O exemplo acima produzirá:

```
q=lucene&defType=%s&pf3=cat~5.1^2 feature^4.5
q=lucene&defType=%s&pf3=feature^4.5
```

### Veja também

- [SolrDisMaxQuery::addTrigramPhraseField()](solrdismaxquery.addtrigramphrasefield.md) - Adiciona um campo de frase trigrama (parâmetro pf3)
- [SolrDisMaxQuery::setTrigramPhraseFields()](solrdismaxquery.settrigramphrasefields.md) - Define diretamente campos de frase trigrama (parâmetro pf3)
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
