# Obtém um de documento chave com um nome alternativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-clientencryption.getkeybyaltname.php

---

# MongoDB\Driver\ClientEncryption::getKeyByAltName

(mongodb >=1.15.0)

MongoDB\Driver\ClientEncryption::getKeyByAltName — Obtém um de documento chave com um nome alternativo

### Descrição

final public function **MongoDB\Driver\ClientEncryption::getKeyByAltName**([string](language.types.string.md) `$keyAltName`): [?](language.types.null.md)[object](language.types.object.md)

Encontra um único documento de chave na coleção do cofre de chaves com o
nome alternativo fornecido em `keyAltName`.

### Parâmetros

`keyAltName`
:   Nome alternativo para o documento de chave.

### Valor Retornado

Retorna o documento de chave ou **`null`** se nenhum documento corresponder.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\ConnectionException](class.mongodb-driver-exception-connectionexception.md) se a conexão com o servidor falhar (por outros motivos além da autenticação).
- Lança uma exceção [MongoDB\Driver\Exception\AuthenticationException](class.mongodb-driver-exception-authenticationexception.md) se a autenticação for necessária e falhar.
- Lança [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) em outros erros.

### Veja também

- [MongoDB\Driver\ClientEncryption::addKeyAltName()](mongodb-driver-clientencryption.addkeyaltname.md) - Adiciona um nome alternativo a um documento de chave
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
