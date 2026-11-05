# Define o slop da frase bigrama (parâmetro ps2)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.setbigramphraseslop.php

---

# SolrDisMaxQuery::setBigramPhraseSlop

(No version information available, might only be in Git)

SolrDisMaxQuery::setBigramPhraseSlop — Define o slop da frase bigrama (parâmetro ps2)

### Descrição

public function **SolrDisMaxQuery::setBigramPhraseSlop**([string](language.types.string.md) `$slop`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Define o slop da frase bigrama (parâmetro ps2). Um slop padrão para campos de frase bigrama.

### Parâmetros

`slop`

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::setBigramPhraseSlop()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery('lucene');

$dismaxQuery->setBigramPhraseSlop(5);
echo $dismaxQuery.PHP_EOL;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
q=lucene&defType=edismax&ps2=5
```

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
