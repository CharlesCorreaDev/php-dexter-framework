# Remove o campo de frase bigrama (parâmetro pf2)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.removebigramphrasefield.php

---

# SolrDisMaxQuery::removeBigramPhraseField

(No version information available, might only be in Git)

SolrDisMaxQuery::removeBigramPhraseField — Remove o campo de frase bigrama (parâmetro pf2)

### Descrição

public function **SolrDisMaxQuery::removeBigramPhraseField**([string](language.types.string.md) `$field`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Remove um campo de frase bigrama (parâmetro pf2) que foi adicionado anteriormente usando [SolrDisMaxQuery::addBigramPhraseField()](solrdismaxquery.addbigramphrasefield.md).

### Parâmetros

`field`
:   Nome do campo

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::removeBigramPhraseField()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery("lucene");
$dismaxQuery
    ->addBigramPhraseField('cat', 2, 5.1)
    ->addBigramPhraseField('feature', 4.5)
;
echo $dismaxQuery.PHP_EOL;

// remove 'cat' de pf2
$dismaxQuery
    ->removeBigramPhraseField('cat');
echo $dismaxQuery.PHP_EOL;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
q=lucene&defType=edismax&pf2=cat~5.1^2 feature^4.5
q=lucene&defType=edismax&pf2=feature^4.5
```

### Veja também

- [SolrDisMaxQuery::addBigramPhraseField()](solrdismaxquery.addbigramphrasefield.md) - Adiciona um campo de frase bigrama (parâmetro pf2)
- [SolrDisMaxQuery::setBigramPhraseFields()](solrdismaxquery.setbigramphrasefields.md) - Define campos de frase bigrama e seus impulsos (e slops) usando o parâmetro pf2
- [SolrDisMaxQuery::setBigramPhraseSlop()](solrdismaxquery.setbigramphraseslop.md) - Define o slop da frase bigrama (parâmetro ps2)

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
