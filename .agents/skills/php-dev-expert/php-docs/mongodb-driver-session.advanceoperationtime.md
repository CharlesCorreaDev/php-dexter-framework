# Avança o tempo de operação desta sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-session.advanceoperationtime.php

---

# MongoDB\Driver\Session::advanceOperationTime

(mongodb >=1.4.0)

MongoDB\Driver\Session::advanceOperationTime — Avança o tempo de operação desta sessão

### Descrição

final public function **MongoDB\Driver\Session::advanceOperationTime**([MongoDB\BSON\TimestampInterface](class.mongodb-bson-timestampinterface.md) `$operationTime`): [void](language.types.void.md)

Avança o tempo de operação desta sessão. Se o tempo de operação for menor
ou igual ao tempo de operação atual da sessão, esta função
não terá ação.

Ao usar este método em conjunto com
[MongoDB\Driver\Session::advanceClusterTime()](mongodb-driver-session.advanceclustertime.md) para copiar
os tempos de operação e cluster de outra sessão, é garantido que
as operações nesta sessão sejam causalmente consistentes com a última operação
na outra sessão.

### Parâmetros

`operationTime`
:   O tempo de operação é um timestamp lógico. Normalmente, esse valor será
    obtido chamando
    [MongoDB\Driver\Session::getOperationTime()](mongodb-driver-session.getoperationtime.md) em
    outro objeto de sessão.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Session::advanceClusterTime()](mongodb-driver-session.advanceclustertime.md) - Avança o tempo do cluster para esta sessão
- [MongoDB\Driver\Session::getClusterTime()](mongodb-driver-session.getclustertime.md) - Retorna o tempo do cluster para esta sessão

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
