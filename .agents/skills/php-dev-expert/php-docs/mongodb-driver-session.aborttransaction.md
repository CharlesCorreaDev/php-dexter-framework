# Aborta uma transação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-session.aborttransaction.php

---

# MongoDB\Driver\Session::abortTransaction

(mongodb >=1.5.0)

MongoDB\Driver\Session::abortTransaction — Aborta uma transação

### Descrição

final public function **MongoDB\Driver\Session::abortTransaction**(): [void](language.types.void.md)

Encerra a transação de vários documentos e reverte quaisquer alterações de dados
feitas pelas operações da transação. Ou seja, a transação termina
sem salvar nenhuma das alterações feitas pelas operações da transação.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) se a transação não puder ser abortada (por exemplo, uma transação não foi iniciada).

### Veja também

- [MongoDB\Driver\Manager::startSession()](mongodb-driver-manager.startsession.md) - Inicia uma nova sessão de cliente para uso com este cliente
- [MongoDB\Driver\Session::commitTransaction()](mongodb-driver-session.committransaction.md) - Confirma uma transação
- [MongoDB\Driver\Session::startTransaction()](mongodb-driver-session.starttransaction.md) - Inicia uma transação

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
