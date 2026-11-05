# Descriptografa um valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-clientencryption.decrypt.php

---

# MongoDB\Driver\ClientEncryption::decrypt

(mongodb >=1.7.0)

MongoDB\Driver\ClientEncryption::decrypt — Descriptografa um valor

### Descrição

final public function **MongoDB\Driver\ClientEncryption::decrypt**([MongoDB\BSON\Binary](class.mongodb-bson-binary.md) `$value`): [mixed](language.types.mixed.md)

Descriptografa o valor.

### Parâmetros

`value`
:   Uma instância [MongoDB\BSON\Binary](class.mongodb-bson-binary.md) com subtipo 6
    contendo o valor criptografado.

### Valor Retornado

Retorna o valor descriptografado conforme foi passado para
[MongoDB\Driver\ClientEncryption::encrypt()](mongodb-driver-clientencryption.encrypt.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança [MongoDB\Driver\Exception\EncryptionException](class.mongodb-driver-exception-encryptionexception.md) se ocorrer um erro ao descriptografar o valor

### Veja também

- [MongoDB\Driver\ClientEncryption::encrypt()](mongodb-driver-clientencryption.encrypt.md) - Criptografa um valor

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
