# Obtém alertas da última operação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-sqlstatementresult.getwarnings.php

---

# SqlStatementResult::getWarnings

(No version information available, might only be in Git)

SqlStatementResult::getWarnings — Obtém alertas da última operação

### Descrição

public function **mysql\_xdevapi\SqlStatementResult::getWarnings**(): [array](language.types.array.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array de objetos Warning da última operação. Cada objeto
define uma mensagem de erro ('message'), nível de erro ('level') e código de erro ('code'). Um array
vazio é retornado se nenhum erro estiver presente.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\SqlStatementResult::getWarnings()****

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
