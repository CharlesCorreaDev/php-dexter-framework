# Especifica a quantidade de slop permitida em consultas de frase explicitamente incluídas na string de consulta do usuário (parâmetro qf)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.setqueryphraseslop.php

---

# SolrDisMaxQuery::setQueryPhraseSlop

(No version information available, might only be in Git)

SolrDisMaxQuery::setQueryPhraseSlop — Especifica a quantidade de slop permitida em consultas de frase explicitamente incluídas na string de consulta do usuário (parâmetro qf)

### Descrição

public function **SolrDisMaxQuery::setQueryPhraseSlop**([string](language.types.string.md) `$slop`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Slop da frase de consulta é a quantidade de slop permitida em consultas de frase explicitamente incluídas na string de consulta do usuário com o parâmetro *qf*.

Slop refere-se ao número de posições que um token precisa ser movido em relação a outro token para corresponder a uma frase especificada em uma consulta.

### Parâmetros

`slop`
:   Quantidade de slop

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::setQueryPhraseSlop()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery();
$dismaxQuery->setQueryPhraseSlop(3);
echo $dismaxQuery;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
defType=edismax&qs=3
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
