# Adiciona um campo ao parâmetro campos do usuário (uf)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.adduserfield.php

---

# SolrDisMaxQuery::addUserField

(No version information available, might only be in Git)

SolrDisMaxQuery::addUserField — Adiciona um campo ao parâmetro campos do usuário (uf)

### Descrição

public function **SolrDisMaxQuery::addUserField**([string](language.types.string.md) `$field`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Adiciona um campo ao parâmetro campos do usuário (uf).

### Parâmetros

`field`
:   Nome do campo

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::addUserField()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery('lucene');
$dismaxQuery
->addUserField('cat')
->addUserField('text')
->addUserField('*_dt');

echo $dismaxQuery.PHP_EOL;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
q=lucene&defType=edismax&uf=cat text *_dt
```

### Veja também

- [SolrDisMaxQuery::removeUserField()](solrdismaxquery.removeuserfield.md) - Remove um campo do parâmetro de campos de usuário (uf)
- [SolrDisMaxQuery::setUserFields()](solrdismaxquery.setuserfields.md) - Define parâmetro de campos de usuário (uf)

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
