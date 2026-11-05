# Reverte uma transação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pdo.rollback.php

---

# PDO::rollBack

(PHP 5 >= 5.1.0, PHP 7, PHP 8, PECL pdo >= 0.1.0)

PDO::rollBack — 
Reverte uma transação

### Descrição

public function **PDO::rollBack**(): [bool](language.types.boolean.md)

Reverte a transação atual, iniciada por
[PDO::beginTransaction()](pdo.begintransaction.md).

Se o banco de dados foi definido para o modo de confirmação automática, esta função restaurará
o modo de confirmação automática após a reversão da transação.

Alguns bancos de dados, incluindo MySQL, emitem automaticamente um COMMIT
implícito quando uma instrução DDL (linguagem de definição de banco de dados), como
DROP TABLE ou CREATE TABLE, é emitida em uma transação. O COMMIT
implícito impedirá que quaisquer outras alterações sejam revertidas dentro
do limite da transação.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Lança uma exceção [PDOException](class.pdoexception.md) se não houver transação ativa.

> **Nota**:
>
> Uma exceção será lançada mesmo quando o atributo **`PDO::ATTR_ERRMODE`** não for **`PDO::ERRMODE_EXCEPTION`**.

### Examples

**Exemplo #1 Revertendo uma transação**

O exemplo a seguir inicia uma transação e emite duas instruções
que modificam o banco de dados antes de reverter as alterações. No MySQL,
entretanto, a instrução DROP TABLE confirma automaticamente a
transação de forma que nenhuma das alterações na transação é
revertida.

```
<?php
/* Inicia uma transação, desligando a auto-confirmação */
$dbh->beginTransaction();

/* Altera esquema e dados do bando */
$sth = $dbh->exec("DROP TABLE fruta");
$sth = $dbh->exec("UPDATE sobremesa
    SET nome = 'hamburger'");

/* Reconhece o erro e reverte as alterações */
$dbh->rollBack();

/* A conexão do banco agora está de volta no modo de auto-confirmação */
?>
```

### Veja também

- [PDO::beginTransaction()](pdo.begintransaction.md) - Inicia uma transação
- [PDO::commit()](pdo.commit.md) - Envia uma transação
- [Transações e auto-confirmação](pdo.transactions.md)

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
