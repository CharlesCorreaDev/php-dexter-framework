# Define o slop padrão em consultas de frase (parâmetro ps)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.setphraseslop.php

---

# SolrDisMaxQuery::setPhraseSlop

(No version information available, might only be in Git)

SolrDisMaxQuery::setPhraseSlop — Define o slop padrão em consultas de frase (parâmetro ps)

### Descrição

public function **SolrDisMaxQuery::setPhraseSlop**([string](language.types.string.md) `$slop`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Define a quantidade padrão de slop em consultas de frase criadas com os campos "pf", "pf2" e/ou "pf3" (afeta o impulso).
Parâmetro "ps".

### Parâmetros

`slop`

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::setPhraseSlop()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery('lucene');

$dismaxQuery->setPhraseSlop(4);
echo $dismaxQuery.PHP_EOL;

?>
```

O exemplo acima produzirá:

```
q=lucene&defType=edismax&ps=4
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
