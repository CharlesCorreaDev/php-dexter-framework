# Executa a operação com SHARED LOCK

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionfind.lockshared.php

---

# CollectionFind::lockShared

(No version information available, might only be in Git)

CollectionFind::lockShared — Executa a operação com SHARED LOCK

### Descrição

public function **mysql\_xdevapi\CollectionFind::lockShared**([int](language.types.integer.md) `$lock_waiting_option` = ?): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

Permite compartilhar os documentos entre múltiplas transações que estão travando em modo compartilhado.

Outras sessões podem ler as linhas, mas não podem modificá-las até que a transação seja efetivamente executada.

Se quaisquer destas linhas tiverem sido alteradas por outra transação que não tenha sido efetivamente executada,
a consulta irá esperar até que a transação tenha terminado para ser capaz de usar os valores mais recentes.

### Parâmetros

`lock_waiting_option`
:   Parâmetro opcional de espera. Por padrão é **`MYSQLX_LOCK_DEFAULT`**. Valores válidos são estas constantes:

    - **`MYSQLX_LOCK_DEFAULT`**
    - **`MYSQLX_LOCK_NOWAIT`**
    - **`MYSQLX_LOCK_SKIP_LOCKED`**

### Valor Retornado

Um objeto CollectionFind que pode ser usado para processamento adicional.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionFind::lockShared()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$schema     = $session->getSchema("addressbook");
$collection = $schema->createCollection("people");

$session->startTransaction();

$result = $collection
  ->find("age > 50")
  ->lockShared()
  ->execute();

// ... lê o objeto em modo compartilhado

// Completa a transação e destrava o documento
$session->commit();
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
