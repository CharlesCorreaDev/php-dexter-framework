# Árvore de Classes de Exceção do MongoDB

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb.exceptions.tree.php

---

# Árvore de Classes de Exceção do MongoDB

A hierarquia de classes para exceções do MongoDB é modelada a partir das
[Exceções SPL](spl.exceptions.md). As classes base estendem
sua contraparte SPL e todas as classes de exceção na extensão implementam
a interface [MongoDB\Driver\Exception\Exception](class.mongodb-driver-exception-exception.md).

- [MongoDB\Driver\Exception\LogicException](class.mongodb-driver-exception-logicexception.md) (extends [LogicException](class.logicexception.md))
- [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) (extends [InvalidArgumentException](class.invalidargumentexception.md))
- [MongoDB\Driver\Exception\UnexpectedValueException](class.mongodb-driver-exception-unexpectedvalueexception.md) (extends [UnexpectedValueException](class.unexpectedvalueexception.md))
- [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) (extends [RuntimeException](class.runtimeexception.md))

  - [MongoDB\Driver\Exception\ConnectionException](class.mongodb-driver-exception-connectionexception.md)

    - [MongoDB\Driver\Exception\AuthenticationException](class.mongodb-driver-exception-authenticationexception.md)
    - [MongoDB\Driver\Exception\ConnectionTimeoutException](class.mongodb-driver-exception-connectiontimeoutexception.md)
    - [MongoDB\Driver\Exception\SSLConnectionException](class.mongodb-driver-exception-sslconnectionexception.md) (descontinuada)
  - [MongoDB\Driver\Exception\EncryptionException](class.mongodb-driver-exception-encryptionexception.md)
  - [MongoDB\Driver\Exception\ServerException](class.mongodb-driver-exception-serverexception.md)

    - [MongoDB\Driver\Exception\BulkWriteCommandException](class.mongodb-driver-exception-bulkwritecommandexception.md)
    - [MongoDB\Driver\Exception\CommandException](class.mongodb-driver-exception-commandexception.md)
    - [MongoDB\Driver\Exception\ExecutionTimeoutException](class.mongodb-driver-exception-executiontimeoutexception.md)
    - [MongoDB\Driver\Exception\WriteException](class.mongodb-driver-exception-writeexception.md) (descontinuada)

      - [MongoDB\Driver\Exception\BulkWriteException](class.mongodb-driver-exception-bulkwriteexception.md)

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
