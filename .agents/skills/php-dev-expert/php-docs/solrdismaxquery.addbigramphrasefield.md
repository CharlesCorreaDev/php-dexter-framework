# Adiciona um campo de frase bigrama (parâmetro pf2)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.addbigramphrasefield.php

---

# SolrDisMaxQuery::addBigramPhraseField

(No version information available, might only be in Git)

SolrDisMaxQuery::addBigramPhraseField — Adiciona um campo de frase bigrama (parâmetro pf2)

### Descrição

public function **SolrDisMaxQuery::addBigramPhraseField**([string](language.types.string.md) `$field`, [string](language.types.string.md) `$boost`, [string](language.types.string.md) `$slop` = ?): [SolrDisMaxQuery](class.solrdismaxquery.md)

Adiciona um campo de frase bigrama (parâmetro pf2).
formato de saída: campo~slop^boost OU campo^boost
Slop é opcional.

### Parâmetros

`field`

`boost`

`slop`

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::addBigramPhraseField()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery("lucene");
$dismaxQuery
    ->addBigramPhraseField('cat', 2, 5.1)
    ->addBigramPhraseField('feature', 4.5)
;
echo $dismaxQuery;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
q=lucene&defType=edismax&pf2=cat~5.1^2 feature^4.5
```

### Veja também

- [SolrDisMaxQuery::removeBigramPhraseField()](solrdismaxquery.removebigramphrasefield.md) - Remove o campo de frase bigrama (parâmetro pf2)
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
