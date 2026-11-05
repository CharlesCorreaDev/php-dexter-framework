# Retorna opções para a transação atualmente em execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-session.gettransactionoptions.php

---

# MongoDB\Driver\Session::getTransactionOptions

(mongodb >=1.7.0)

MongoDB\Driver\Session::getTransactionOptions — Retorna opções para a transação atualmente em execução

### Descrição

final public function **MongoDB\Driver\Session::getTransactionOptions**(): [?](language.types.null.md)[array](language.types.array.md)

Retorna opções para a transação atualmente em execução.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [array](language.types.array.md) contendo opções de transação atuais, ou
**`null`** se nenhuma transação estiver em execução.

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
