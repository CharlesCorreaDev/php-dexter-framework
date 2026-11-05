# Troca o analisador de consulta para o EDisMax

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.useedismaxqueryparser.php

---

# SolrDisMaxQuery::useEDisMaxQueryParser

(No version information available, might only be in Git)

SolrDisMaxQuery::useEDisMaxQueryParser — Troca o analisador de consulta para o EDisMax

### Descrição

public function **SolrDisMaxQuery::useEDisMaxQueryParser**(): [SolrDisMaxQuery](class.solrdismaxquery.md)

Troca o analisador de consulta para o EDisMax. Por padrão, o construtor de consultas usa o EDisMax. Se ele foi trocado usado [SolrDisMaxQuery::useDisMaxQueryParser()](solrdismaxquery.usedismaxqueryparser.md), pode ser revertido usando este método.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::useEDisMaxQueryParser()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery();
$dismaxQuery->useEDisMaxQueryParser();
echo $dismaxQuery;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
defType=edismax
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
