# Retorna a opção de mapa de campos critografados da criptografia automática para o gerenciador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-manager.getencryptedfieldsmap.php

---

# MongoDB\Driver\Manager::getEncryptedFieldsMap

(mongodb >=1.14.0)

MongoDB\Driver\Manager::getEncryptedFieldsMap — Retorna a opção de mapa de campos critografados da criptografia automática para o gerenciador

### Descrição

final public function **MongoDB\Driver\Manager::getEncryptedFieldsMap**(): [array](language.types.array.md)|[object](language.types.object.md)|[null](language.types.null.md)

Retorna a opção de criptografia automática `encryptedFieldsMap`
para o gerenciador, se especificado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A opção de criptografia automática `encryptedFieldsMap` para o
gerenciador ou **`null`** se não foi especificado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Manager::\_\_construct()](mongodb-driver-manager.construct.md) - Cria um novo gerenciador MongoDB

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
