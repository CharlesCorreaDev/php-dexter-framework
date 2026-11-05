# Adiciona um nome alternativo a um documento de chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-clientencryption.addkeyaltname.php

---

# MongoDB\Driver\ClientEncryption::addKeyAltName

(mongodb >=1.15.0)

MongoDB\Driver\ClientEncryption::addKeyAltName — Adiciona um nome alternativo a um documento de chave

### Descrição

final public function **MongoDB\Driver\ClientEncryption::addKeyAltName**([MongoDB\BSON\Binary](class.mongodb-bson-binary.md) `$keyId`, [string](language.types.string.md) `$keyAltName`): [?](language.types.null.md)[object](language.types.object.md)

Adiciona `keyAltName` ao conjunto de nomes alternativos para o
documento da chave com o UUID `keyId` fornecido.

### Parâmetros

`keyId`
:   Uma instância [MongoDB\BSON\Binary](class.mongodb-bson-binary.md) com subtipo 4
    (UUID) identificando o documento da chave.

`keyAltName`
:   Nome alternativo a ser adicionado ao documento da chave.

### Valor Retornado

Retorna a versão anterior do documento da chave ou **`null`** se nenhum documento
corresponder.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\ConnectionException](class.mongodb-driver-exception-connectionexception.md) se a conexão com o servidor falhar (por outros motivos além da autenticação).
- Lança uma exceção [MongoDB\Driver\Exception\AuthenticationException](class.mongodb-driver-exception-authenticationexception.md) se a autenticação for necessária e falhar.
- Lança uma [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) em outros erros.

### Veja também

- [MongoDB\Driver\ClientEncryption::getKeyByAltName()](mongodb-driver-clientencryption.getkeybyaltname.md) - Obtém um de documento chave com um nome alternativo
- [MongoDB\Driver\ClientEncryption::removeKeyAltName()](mongodb-driver-clientencryption.removekeyaltname.md) - Remove um nome alternativo de um documento de chave

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
