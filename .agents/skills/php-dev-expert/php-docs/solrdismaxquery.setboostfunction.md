# Define uma função de impulso (parâmetro bf)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.setboostfunction.php

---

# SolrDisMaxQuery::setBoostFunction

(No version information available, might only be in Git)

SolrDisMaxQuery::setBoostFunction — Define uma função de impulso (parâmetro bf)

### Descrição

public function **SolrDisMaxQuery::setBoostFunction**([string](language.types.string.md) `$function`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Define uma função de impulso (parâmetro bf)

Funções (com impulsos opcionais) que serão incluídas na
consulta do usuário para influenciar a pontuação. Qualquer função suportada nativamente
pelo Solr pode ser usada, juntamente com um valor de impulso. por exemplo:

recip(rord(meu\_campo),1,2,3)^1.5

### Parâmetros

`function`

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::setBoostFunction()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery('lucene');

$boostRecentDocsFunction = "recip(ms(NOW,mydatefield),3.16e-11,1,1)";
$dismaxQuery->setBoostFunction($boostRecentDocsFunction);

echo $dismaxQuery.PHP_EOL;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
q=lucene&defType=edismax&bf=recip(ms(NOW,mydatefield),3.16e-11,1,1)
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
