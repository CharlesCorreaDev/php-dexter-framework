# Retorna o estado atual da transação para esta sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-session.gettransactionstate.php

---

# MongoDB\Driver\Session::getTransactionState

(mongodb >=1.7.0)

MongoDB\Driver\Session::getTransactionState — Retorna o estado atual da transação para esta sessão

### Descrição

final public function **MongoDB\Driver\Session::getTransactionState**(): [string](language.types.string.md)

Retorna o estado da transação para esta sessão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o estado atual da transação para esta sessão.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Session::isInTransaction()](mongodb-driver-session.isintransaction.md) - Retorna se uma transação com vários documentos está em andamento
- [MongoDB\Driver\Session::getTransactionOptions()](mongodb-driver-session.gettransactionoptions.md) - Retorna opções para a transação atualmente em execução

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
