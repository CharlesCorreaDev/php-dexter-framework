# Avança o tempo do cluster para esta sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-session.advanceclustertime.php

---

# MongoDB\Driver\Session::advanceClusterTime

(mongodb >=1.4.0)

MongoDB\Driver\Session::advanceClusterTime — Avança o tempo do cluster para esta sessão

### Descrição

final public function **MongoDB\Driver\Session::advanceClusterTime**([array](language.types.array.md)|[object](language.types.object.md) `$clusterTime`): [void](language.types.void.md)

Avança o tempo do cluster para esta sessão. Se o tempo do cluster for menor
ou igual ao tempo atual do cluster da sessão, esta função não terá ação.

Ao usar este método em conjunto com
[MongoDB\Driver\Session::advanceOperationTime()](mongodb-driver-session.advanceoperationtime.md) para copiar
o cluster e os tempos de operação de outra sessão, é garantido que
as operações nesta sessão serão causalmente consistentes com a última operação na
outra sessão.

### Parâmetros

`clusterTime`
:   O horário do cluster é um documento que contém um timestamp lógico e uma
    assinatura do servidor. Normalmente, esse valor será obtido chamando
    [MongoDB\Driver\Session::getClusterTime()](mongodb-driver-session.getclustertime.md) em outro
    objeto de sessão.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Session::advanceOperationTime()](mongodb-driver-session.advanceoperationtime.md) - Avança o tempo de operação desta sessão
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
