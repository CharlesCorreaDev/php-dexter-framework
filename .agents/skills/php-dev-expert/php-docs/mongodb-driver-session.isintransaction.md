# Retorna se uma transação com vários documentos está em andamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-session.isintransaction.php

---

# MongoDB\Driver\Session::isInTransaction

(mongodb >=1.6.0)

MongoDB\Driver\Session::isInTransaction — Retorna se uma transação com vários documentos está em andamento

### Descrição

final public function **MongoDB\Driver\Session::isInTransaction**(): [bool](language.types.boolean.md)

Retorna se uma transação de vários documentos está em andamento para
esta sessão. Uma transação é considerada “em andamento” se tiver sido
iniciada, mas não tiver sido confirmada ou abortada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se uma transação estiver em andamento para esta sessão
ou **`false`** caso contrário.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Session::getTransactionState()](mongodb-driver-session.gettransactionstate.md) - Retorna o estado atual da transação para esta sessão

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
