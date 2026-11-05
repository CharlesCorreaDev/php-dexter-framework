# Executa operação de modificação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionmodify.execute.php

---

# CollectionModify::execute

(No version information available, might only be in Git)

CollectionModify::execute — Executa operação de modificação

### Descrição

public function **mysql\_xdevapi\CollectionModify::execute**(): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

O método de execução é requerido para enviar a requisição de operação CRUD
ao servidor MySQL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto Result que pode ser usado para verificar o status da operação,
como o número de linhas afetadas.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionModify::execute()****

```
<?php

/* ... */

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
