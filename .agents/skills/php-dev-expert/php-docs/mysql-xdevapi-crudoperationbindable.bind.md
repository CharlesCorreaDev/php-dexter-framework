# Vincula valor ao marcador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-crudoperationbindable.bind.php

---

# CrudOperationBindable::bind

(No version information available, might only be in Git)

CrudOperationBindable::bind — Vincula valor ao marcador

### Descrição

abstract public function **mysql\_xdevapi\CrudOperationBindable::bind**([array](language.types.array.md) `$placeholder_values`): [mysql\_xdevapi\CrudOperationBindable](class.mysql-xdevapi-crudoperationbindable.md)

Vincula um valor a um marcador específico.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`placeholder_values`
:   Os nomes dos marcadores e os valores a vincular.

### Valor Retornado

Um objeto CrudOperationBindable.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CrudOperationBindable::bind()****

```
<?php

$res = $coll->modify('name like :name')->arrayInsert('job[0]', 'Calciatore')->bind(['name' => 'ENTITY'])->execute();
$res = $table->delete()->orderby('age desc')->where('age < 20 and age > 12 and name != :name')->bind(['name' => 'Tierney'])->limit(2)->execute();

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
