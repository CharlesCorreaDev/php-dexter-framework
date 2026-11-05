# Adiciona um campo de consulta com impulso opcional (parâmetro qf)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.addqueryfield.php

---

# SolrDisMaxQuery::addQueryField

(No version information available, might only be in Git)

SolrDisMaxQuery::addQueryField — Adiciona um campo de consulta com impulso opcional (parâmetro qf)

### Descrição

public function **SolrDisMaxQuery::addQueryField**([string](language.types.string.md) `$field`, [string](language.types.string.md) `$boost` = ?): [SolrDisMaxQuery](class.solrdismaxquery.md)

Adiciona um campo de consulta com impulso opcional (parâmetro qf).

### Parâmetros

`field`
:   nome do campo

`boost`
:   Aumenta o impulso. Impulsiona documentos com termos correspondentes.

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::addQueryField()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery("lucene");
$dismaxQuery
    ->addQueryField("location", 4)
    ->addQueryField("price")
    ->addQueryField("sku")
    ->addQueryField("title",3.4)
;
echo $dismaxQuery;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
q=lucene&defType=edismax&qf=location^4 price sku title^3.4
```

### Veja também

- [SolrDisMaxQuery::removeQueryField()](solrdismaxquery.removequeryfield.md) - Remove um campo de consulta (parâmetro qf)

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
