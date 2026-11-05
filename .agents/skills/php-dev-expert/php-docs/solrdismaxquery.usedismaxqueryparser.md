# Troca o analisador de consulta para o DisMax

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.usedismaxqueryparser.php

---

# SolrDisMaxQuery::useDisMaxQueryParser

(No version information available, might only be in Git)

SolrDisMaxQuery::useDisMaxQueryParser — Troca o analisador de consulta para o DisMax

### Descrição

public function **SolrDisMaxQuery::useDisMaxQueryParser**(): [SolrDisMaxQuery](class.solrdismaxquery.md)

Troca o analisador de consulta para o DisMax.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::useDisMaxQueryParser()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery();
$dismaxQuery->useDisMaxQueryParser();
echo $dismaxQuery;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
defType=dismax
```

### Veja também

- **SolrDisMaxQuery::useDisMaxQueryParser()**

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
