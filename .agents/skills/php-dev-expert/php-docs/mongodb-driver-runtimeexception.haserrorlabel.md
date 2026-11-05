# Retorna se um rótulo de erro está associado a uma exceção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-runtimeexception.haserrorlabel.php

---

# MongoDB\Driver\Exception\RuntimeException::hasErrorLabel

(mongodb >= 1.6.0)

MongoDB\Driver\Exception\RuntimeException::hasErrorLabel — Retorna se um rótulo de erro está associado a uma exceção

### Descrição

final public function **MongoDB\Driver\Exception\RuntimeException::hasErrorLabel**([string](language.types.string.md) `$errorLabel`): [bool](language.types.boolean.md)

Retorna se `errorLabel` foi definido para esta
exceção. Os rótulos de erro são definidos pelo servidor ou pela extensão para
indicar situações específicas que podem ser tratadas por uma aplicação. Uma situação
comum pode ser determinar se é necessário repetir com segurança uma transação que
falhou devido a um erro transitório (por exemplo, erro de rede, conflito de transação).
Exemplos de rótulos de erro são `TransientTransactionError`
e `UnknownTransactionCommitResult`.

### Parâmetros

`errorLabel`
:   O nome do `errorLabel` a ser testado.

### Valor Retornado

Se o `errorLabel` fornecido está associado a esta
exceção.

### Veja também

- [MongoDB\Driver\Session::commitTransaction()](mongodb-driver-session.committransaction.md) - Confirma uma transação
- [» Documentação do MongoDB sobre transações](https://www.mongodb.com/docs/manual/core/transactions/)

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
