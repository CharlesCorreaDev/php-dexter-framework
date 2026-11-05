# Adiciona um campo de frase (parâmetro pf)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.addphrasefield.php

---

# SolrDisMaxQuery::addPhraseField

(No version information available, might only be in Git)

SolrDisMaxQuery::addPhraseField — Adiciona um campo de frase (parâmetro pf)

### Descrição

public function **SolrDisMaxQuery::addPhraseField**([string](language.types.string.md) `$field`, [string](language.types.string.md) `$boost`, [string](language.types.string.md) `$slop` = ?): [SolrDisMaxQuery](class.solrdismaxquery.md)

Adiciona um campo de frase (parâmetro pf).

### Parâmetros

`field`
:   nome do campo

`boost`

`slop`

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::addPhraseField()****

```
<?php
$dismaxQuery = new SolrDisMaxQuery("lucene");
$dismaxQuery
    ->addPhraseField('cat', 3, 1)
    ->addPhraseField('third', 4, 2)
    ->addPhraseField('source', 55)
;
echo $dismaxQuery;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
q=lucene&defType=edismax&pf=cat~1^3 third~2^4 source^55
```

### Veja também

- [SolrDisMaxQuery::removePhraseField()](solrdismaxquery.removephrasefield.md) - Remover um campo de frase (parâmetro pf)
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
