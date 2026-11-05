# Executa a operação com EXCLUSIVE LOCK

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-collectionfind.lockexclusive.php

---

# CollectionFind::lockExclusive

(No version information available, might only be in Git)

CollectionFind::lockExclusive — Executa a operação com EXCLUSIVE LOCK

### Descrição

public function **mysql\_xdevapi\CollectionFind::lockExclusive**([int](language.types.integer.md) `$lock_waiting_option` = ?): [mysql\_xdevapi\CollectionFind](class.mysql-xdevapi-collectionfind.md)

Trava o documento de forma exclusiva.
Enquanto o documento estiver travado,
outras transações não podem atualizá-lo,
use `SELECT ... LOCK IN SHARE MODE`,
ou leia os dados em certos níveis de isolamento de transação.
Leituras consistentes ignoram qualquer trava definida em registros que existem na visualização de leitura.

Para evitar problemas de concorrência, faz sentido usar esta função com o método
**mysql\_xdevapi\Collection::modify()** Essencialmente, esta função usa travas de registros para serializar
acesso a eles.

### Parâmetros

`lock_waiting_option`
:   Parâmetro opcional de espera. Por padrão é **`MYSQLX_LOCK_DEFAULT`**. Valores válidos são estas constantes:

    - **`MYSQLX_LOCK_DEFAULT`**
    - **`MYSQLX_LOCK_NOWAIT`**
    - **`MYSQLX_LOCK_SKIP_LOCKED`**

### Valor Retornado

Retorna um objeto CollectionFind que pode ser usado para processamento adicional.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\CollectionFind::lockExclusive()****

```
<?php
$session = mysql_xdevapi\getSession("mysqlx://user:password@localhost");

$schema     = $session->getSchema("addressbook");
$collection = $schema->createCollection("people");

$session->startTransaction();

$result = $collection
  ->find("age > 50")
  ->lockExclusive()
  ->execute();

// ... faz uma operação com o objeto

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
