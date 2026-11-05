# Exclui um documento de chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-clientencryption.deletekey.php

---

# MongoDB\Driver\ClientEncryption::deleteKey

(mongodb >=1.15.0)

MongoDB\Driver\ClientEncryption::deleteKey — Exclui um documento de chave

### Descrição

final public function **MongoDB\Driver\ClientEncryption::deleteKey**([MongoDB\BSON\Binary](class.mongodb-bson-binary.md) `$keyId`): [object](language.types.object.md)

Remove o documento de chave com o UUID `keyId` fornecido
da coleção de cofres de chaves.

### Parâmetros

`keyId`
:   Uma instância [MongoDB\BSON\Binary](class.mongodb-bson-binary.md) com subtipo 4
    (UUID) identificando o documento chave.

### Valor Retornado

Retorna o resultado da operação interna `deleteOne` na
coleção de cofres de chaves.

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
