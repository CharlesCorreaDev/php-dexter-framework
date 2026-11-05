# Retorna o tempo do cluster para esta sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-session.getclustertime.php

---

# MongoDB\Driver\Session::getClusterTime

(mongodb >=1.4.0)

MongoDB\Driver\Session::getClusterTime — Retorna o tempo do cluster para esta sessão

### Descrição

final public function **MongoDB\Driver\Session::getClusterTime**(): [?](language.types.null.md)[object](language.types.object.md)

Retorna o tempo do cluster para esta sessão. Se a sessão não tiver sido usada
para nenhuma operação e
[MongoDB\Driver\Session::advanceClusterTime()](mongodb-driver-session.advanceclustertime.md) não tiver
sido chamado, o tempo do cluster será **`null`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o tempo do cluster para esta sessão, ou **`null`** se a sessão não
tiver tempo de cluster.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Session::advanceClusterTime()](mongodb-driver-session.advanceclustertime.md) - Avança o tempo do cluster para esta sessão

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
