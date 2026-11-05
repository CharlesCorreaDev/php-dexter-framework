# Define parâmetro de campos de usuário (uf)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/solrdismaxquery.setuserfields.php

---

# SolrDisMaxQuery::setUserFields

(No version information available, might only be in Git)

SolrDisMaxQuery::setUserFields — Define parâmetro de campos de usuário (uf)

### Descrição

public function **SolrDisMaxQuery::setUserFields**([string](language.types.string.md) `$fields`): [SolrDisMaxQuery](class.solrdismaxquery.md)

Define parâmetro de campos de usuário (uf)

Campos de usuário: Especifica quais campos de esquema o usuário final poderá consultar.

### Parâmetros

`fields`
:   Nomes de campos separados por espaço

    Este parâmetro oferece suporte a coringas.

### Valor Retornado

[SolrDisMaxQuery](class.solrdismaxquery.md)

### Examples

**Exemplo #1 Exemplo de **SolrDisMaxQuery::setUserFields()****

```
<?php

$dismaxQuery = new SolrDisMaxQuery('lucene');
$dismaxQuery->setUserFields('campo1 campo2 *_txt');
echo $dismaxQuery.PHP_EOL;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
q=lucene&defType=edismax&uf=campo1 campo2 *_txt
```

### Veja também

- [SolrDisMaxQuery::addUserField()](solrdismaxquery.adduserfield.md) - Adiciona um campo ao parâmetro campos do usuário (uf)
- [SolrDisMaxQuery::removeUserField()](solrdismaxquery.removeuserfield.md) - Remove um campo do parâmetro de campos de usuário (uf)

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
