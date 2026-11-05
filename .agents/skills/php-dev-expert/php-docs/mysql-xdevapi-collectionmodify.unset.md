# Remove o valor de campos do documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionmodify.unset.php

---

# CollectionModify::unset

(No version information available, might only be in Git)

CollectionModify::unset — Remove o valor de campos do documento

### Descrição

public function **mysql\_xdevapi\CollectionModify::unset**([array](language.types.array.md) `$fields`): [mysql\_xdevapi\CollectionModify](class.mysql-xdevapi-collectionmodify.md)

Remove atributos de documentos em uma coleção.

### Parâmetros

`fields`
:   Os atributos a remover dos documentos em uma coleção.

### Valor Retornado

Objeto CollectionModify que pode ser usado para processamento adicional.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionModify::unset()****

```
<?php

$res = $coll->modify('job like :job_name')->unset(["age", "name"])->bind(['job_name' => 'Plumber'])->execute();

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
