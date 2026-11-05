# Seleciona os cabeçalhos dos grupos pelo valor máximo de um campo numérico ou consulta de função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrcollapsefunction.setmax.php

---

# SolrCollapseFunction::setMax

(PECL solr >= 2.2.0)

SolrCollapseFunction::setMax — Seleciona os cabeçalhos dos grupos pelo valor máximo de um campo numérico ou consulta de função

### Descrição

public function **SolrCollapseFunction::setMax**([string](language.types.string.md) `$max`): [SolrCollapseFunction](class.solrcollapsefunction.md)

Seleciona os cabeçalhos dos grupos pelo valor máximo de um campo numérico ou consulta de função.

### Parâmetros

`max`

### Valor Retornado

[SolrCollapseFunction](class.solrcollapsefunction.md)

### Examples

**Exemplo #1 Exemplo de **SolrCollapseFunction::setMax()****

```
<?php

$func = new SolrCollapseFunction('field_name');

$func->setMax('sum(cscore(),field(some_field))');

$query = new SolrQuery('*:*');

$query->collapse($func);

?>
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
