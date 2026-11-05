# Define o limite do resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-crudoperationlimitable.limit.php

---

# CrudOperationLimitable::limit

(No version information available, might only be in Git)

CrudOperationLimitable::limit — Define o limite do resultado

### Descrição

abstract public function **mysql\_xdevapi\CrudOperationLimitable::limit**([int](language.types.integer.md) `$rows`): [mysql\_xdevapi\CrudOperationLimitable](class.mysql-xdevapi-crudoperationlimitable.md)

Define o número máximo de registros ou documentos a retornar.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`rows`
:   O número máximo de registros ou documentos.

### Valor Retornado

Um objeto CrudOperationLimitable.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CrudOperationLimitable::limit()****

```
<?php

$res = $coll->find()->fields(['name as n','age as a','job as j'])->groupBy('j')->limit(11)->execute();
$res = $table->update()->set('age',69)->where('age > 15 and age < 22')->limit(4)->orderby(['age asc','name desc'])->execute();

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
