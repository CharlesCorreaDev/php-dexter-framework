# Termina uma sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-session.endsession.php

---

# MongoDB\Driver\Session::endSession

(mongodb >=1.5.0)

MongoDB\Driver\Session::endSession — Termina uma sessão

### Descrição

final public function **MongoDB\Driver\Session::endSession**(): [void](language.types.void.md)

Este método fecha uma sessão existente. Se uma transação foi associada
a esta sessão, a transação será abortada. Após chamar esse
método, as aplicações não deverão invocar outros métodos na sessão.

> **Nota**:
>
> As sessões também são encerradas durante a coleta de lixo. Não deveria ser
> necessário chamar esse método em circunstâncias normais.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Manager::startSession()](mongodb-driver-manager.startsession.md) - Inicia uma nova sessão de cliente para uso com este cliente
- [MongoDB\Driver\Session::abortTransaction()](mongodb-driver-session.aborttransaction.md) - Aborta uma transação
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
