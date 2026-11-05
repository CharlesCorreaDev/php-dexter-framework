# Remover um campo de frase (parâmetro pf)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.removephrasefield.php

---

# SolrDisMaxQuery::removePhraseField

(No version information available, might only be in Git)

SolrDisMaxQuery::removePhraseField — Remover um campo de frase (parâmetro pf)

### Descrição

public function **SolrDisMaxQuery::removePhraseField**([string](language.types.string.md) `$field`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Remove um campo de frase (parâmetro pf) que foi adicionado anteriormente usando SolrDisMaxQuery::addPhraseField.

### Parâmetros

`field`
:   Nome do campo

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::removePhraseField()****

```
<?php
$dismaxQuery = new SolrDisMaxQuery('lucene');
$dismaxQuery
    ->addPhraseField('first', 3, 1)
    ->addPhraseField('second', 4, 1)
    ->addPhraseField('cat', 55);
echo $dismaxQuery . PHP_EOL;
echo $dismaxQuery->removePhraseField('second');
?>
```

O exemplo acima produzirá
algo semelhante a:

```
q=lucene&defType=edismax&pf=first~1^3 second~1^4 cat^55
q=lucene&defType=edismax&pf=first~1^3 cat^55
```

### Veja também

- [SolrDisMaxQuery::addPhraseField()](solrdismaxquery.addphrasefield.md) - Adiciona um campo de frase (parâmetro pf)
- [SolrDisMaxQuery::setPhraseFields()](solrdismaxquery.setphrasefields.md) - Define campos de frase e seus impulsos (e slops) usando o parâmetro pf2

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
