# Confirma uma transação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-session.committransaction.php

---

# MongoDB\Driver\Session::commitTransaction

(mongodb >=1.5.0)

MongoDB\Driver\Session::commitTransaction — Confirma uma transação

### Descrição

final public function **MongoDB\Driver\Session::commitTransaction**(): [void](language.types.void.md)

Salva as alterações feitas pelas operações na transação multidocumento
e finaliza a transação. Até a confirmação, nenhuma das alterações de dados feitas
dentro da transação será visível fora da transação.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma
  [MongoDB\Driver\Exception\CommandException](class.mongodb-driver-exception-commandexception.md) se o
  servidor não conseguiu confirmar a transação (por exemplo, devido a conflitos, problemas
  de rede). Caso o
  [MongoDB\Driver\Exception\CommandException::getResultDocument()](mongodb-driver-commandexception.getresultdocument.md) da exceção
  tenha um elemento `"errorLabels"` e este array contenha um
  valor `"TransientTransactionError"` ou
  `"UnknownTransactionCommitResult"`, é seguro tentar novamente
  a transação *inteira*. Em versões mais recentes da
  extensão,
  [MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()](mongodb-driver-runtimeexception.haserrorlabel.md)
  deve ser usado para testar esta situação.
- Lança uma
  [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) se a
  transação não puder ser confirmada (por exemplo, uma transação não
  foi iniciada).

### Veja também

- [MongoDB\Driver\Manager::startSession()](mongodb-driver-manager.startsession.md) - Inicia uma nova sessão de cliente para uso com este cliente
- [MongoDB\Driver\Session::abortTransaction()](mongodb-driver-session.aborttransaction.md) - Aborta uma transação
- [MongoDB\Driver\Session::startTransaction()](mongodb-driver-session.starttransaction.md) - Inicia uma transação
- [MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()](mongodb-driver-runtimeexception.haserrorlabel.md) - Retorna se um rótulo de erro está associado a uma exceção

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
