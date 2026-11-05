# Adiciona um campo de frase trigrama (parâmetro pf3)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.addtrigramphrasefield.php

---

# SolrDisMaxQuery::addTrigramPhraseField

(No version information available, might only be in Git)

SolrDisMaxQuery::addTrigramPhraseField — Adiciona um campo de frase trigrama (parâmetro pf3)

### Descrição

public function **SolrDisMaxQuery::addTrigramPhraseField**([string](language.types.string.md) `$field`, [string](language.types.string.md) `$boost`, [string](language.types.string.md) `$slop` = ?): [SolrDisMaxQuery](class.solrdismaxquery.md)

Adiciona um campo de frase trigrama (parâmetro pf3).

### Parâmetros

`field`
:   Nome do campo

`boost`
:   Impulso do campo

`slop`
:   Slop do campo

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::addTrigramPhraseField()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery('lucene');
$dismaxQuery
->addTrigramPhraseField('cat', 2, 5.1)
->addTrigramPhraseField('feature', 4.5)
;
echo $dismaxQuery.PHP_EOL;

?>
```

O exemplo acima produzirá:

```
q=lucene&defType=%s&pf3=cat~5.1^2 feature^4.5
```

### Veja também

- [SolrDisMaxQuery::removeTrigramPhraseField()](solrdismaxquery.removetrigramphrasefield.md) - Remove um campo de frase trigrama (parâmetro pf3)
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
