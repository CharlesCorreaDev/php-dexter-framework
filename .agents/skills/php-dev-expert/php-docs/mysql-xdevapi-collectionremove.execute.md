# Executa operação de remoção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionremove.execute.php

---

# CollectionRemove::execute

(No version information available, might only be in Git)

CollectionRemove::execute — Executa operação de remoção

### Descrição

public function **mysql\_xdevapi\CollectionRemove::execute**(): [mysql\_xdevapi\Result](class.mysql-xdevapi-result.md)

O método de execução precisa ser chamado para disparar o envio da requisição de operação CRUD do cliente para o servidor MySQL.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Objeto Result.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionRemove::execute()****

```
<?php

$res = $coll->remove('true')->sort('age desc')->limit(2)->execute();

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
