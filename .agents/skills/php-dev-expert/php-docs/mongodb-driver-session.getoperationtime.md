# Retorna o tempo de operação desta sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-session.getoperationtime.php

---

# MongoDB\Driver\Session::getOperationTime

(mongodb >=1.4.0)

MongoDB\Driver\Session::getOperationTime — Retorna o tempo de operação desta sessão

### Descrição

final public function **MongoDB\Driver\Session::getOperationTime**(): [?](language.types.null.md)[MongoDB\BSON\Timestamp](class.mongodb-bson-timestamp.md)

Retorna o tempo de operação desta sessão. Se a sessão não tiver sido usada
para nenhuma operação e
[MongoDB\Driver\Session::advanceOperationTime()](mongodb-driver-session.advanceoperationtime.md) não tiver
sido chamado, o tempo de operação será **`null`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o tempo de operação desta sessão, ou **`null`** se a sessão não
tiver tempo de operação.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Session::advanceOperationTime()](mongodb-driver-session.advanceoperationtime.md) - Avança o tempo de operação desta sessão

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
