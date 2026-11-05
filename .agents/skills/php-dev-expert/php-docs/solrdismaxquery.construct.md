# Construtor da classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.construct.php

---

# SolrDisMaxQuery::\_\_construct

(No version information available, might only be in Git)

SolrDisMaxQuery::\_\_construct — Construtor da classe

### Descrição

public function **SolrDisMaxQuery::\_\_construct**([string](language.types.string.md) `$q` = ?)

O construtor da classe inicializa o objeto e define o parâmetro q se informado.

### Parâmetros

`q`
:   Consulta de pesquisa (parâmetro q)

### Valor Retornado

### Erros/Exceções

Lança uma [SolrIllegalArgumentException](class.solrillegalargumentexception.md) caso um parâmetro inválido tenha sido passado.

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::\_\_construct()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery('lucene');
echo $dismaxQuery;

?>
```

O exemplo acima produzirá:

```
q=lucene&defType=edismax
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
