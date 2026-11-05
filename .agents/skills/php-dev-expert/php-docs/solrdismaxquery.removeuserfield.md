# Remove um campo do parâmetro de campos de usuário (uf)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.removeuserfield.php

---

# SolrDisMaxQuery::removeUserField

(No version information available, might only be in Git)

SolrDisMaxQuery::removeUserField — Remove um campo do parâmetro de campos de usuário (uf)

### Descrição

public function **SolrDisMaxQuery::removeUserField**([string](language.types.string.md) `$field`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Remove um campo do parâmetro de campos de usuário (uf).

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`field`
:   Nome do campo.

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::removeUserField()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery('lucene');
$dismaxQuery
->addUserField('cat')
->addUserField('text')
->addUserField('*_dt')
;
echo $dismaxQuery.PHP_EOL;

// remove o campo de nome 'text'
$dismaxQuery
->removeUserField('text');
echo $dismaxQuery.PHP_EOL;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
q=lucene&defType=%s&uf=cat text *_dt
q=lucene&defType=%s&uf=cat *_dt
```

### Veja também

- [SolrDisMaxQuery::addUserField()](solrdismaxquery.adduserfield.md) - Adiciona um campo ao parâmetro campos do usuário (uf)
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
