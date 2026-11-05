# Obtém um documento de chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-clientencryption.getkey.php

---

# MongoDB\Driver\ClientEncryption::getKey

(mongodb >=1.15.0)

MongoDB\Driver\ClientEncryption::getKey — Obtém um documento de chave

### Descrição

final public function **MongoDB\Driver\ClientEncryption::getKey**([MongoDB\BSON\Binary](class.mongodb-bson-binary.md) `$keyId`): [?](language.types.null.md)[object](language.types.object.md)

Encontra um único documento de chave na coleção do cofre de chaves com o UUID
`keyId` fornecido.

### Parâmetros

`keyId`
:   Uma instância [MongoDB\BSON\Binary](class.mongodb-bson-binary.md) com subtipo 4
    (UUID) identificando o documento de chave.

### Valor Retornado

Retorna o documento de chave ou **`null`** se nenhum documento corresponder.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\ConnectionException](class.mongodb-driver-exception-connectionexception.md) se a conexão com o servidor falhar (por outros motivos além da autenticação).
- Lança uma exceção [MongoDB\Driver\Exception\AuthenticationException](class.mongodb-driver-exception-authenticationexception.md) se a autenticação for necessária e falhar.
- Lança [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) em outros erros.

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
