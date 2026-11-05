# Criptografa um valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-clientencryption.encrypt.php

---

# MongoDB\Driver\ClientEncryption::encrypt

(mongodb >=1.7.0)

MongoDB\Driver\ClientEncryption::encrypt — Criptografa um valor

### Descrição

final public function **MongoDB\Driver\ClientEncryption::encrypt**([mixed](language.types.mixed.md) `$value`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\BSON\Binary](class.mongodb-bson-binary.md)

Criptografa o valor.

### Parâmetros

`value`
:   O valor a ser criptografado. Qualquer valor que possa ser inserido no MongoDB pode
    ser criptografado usando este método.

`options`
:   **Opções de criptografia**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | algorithm | [string](language.types.string.md) | O algoritmo de criptografia a ser usado. Esta opção é obrigatória. Especifique uma das seguintes [constantes ClientEncryption](class.mongodb-driver-clientencryption.md#mongodb-driver-clientencryption.constants):  - **`MongoDB\Driver\ClientEncryption::AEAD_AES_256_CBC_HMAC_SHA_512_DETERMINISTIC`** - **`MongoDB\Driver\ClientEncryption::AEAD_AES_256_CBC_HMAC_SHA_512_RANDOM`** - **`MongoDB\Driver\ClientEncryption::ALGORITHM_INDEXED`** - **`MongoDB\Driver\ClientEncryption::ALGORITHM_UNINDEXED`** - **`MongoDB\Driver\ClientEncryption::ALGORITHM_RANGE`** |
    | contentionFactor | [int](language.types.integer.md) | O fator de contenção para avaliar consultas com cargas indexadas e criptografadas.  Esta opção só se aplica e só pode ser especificada quando `algorithm` for **`MongoDB\Driver\ClientEncryption::ALGORITHM_INDEXED`** ou **`MongoDB\Driver\ClientEncryption::ALGORITHM_RANGE`**. |
    | keyAltName | [string](language.types.string.md) | Identifica um documento de coleção de cofres de chaves por `keyAltName`. Esta opção é mutuamente exclusiva com `keyId` e exatamente uma é necessária. |
    | keyId | [MongoDB\BSON\Binary](class.mongodb-bson-binary.md) | Identifica uma chave de dados por `_id`. O valor é um UUID (subtipo binário 4). Esta opção é mutuamente exclusiva com `keyAltName` e exatamente uma é necessária. |
    | queryType | [string](language.types.string.md) | O tipo de consulta para avaliar consultas com cargas indexadas e criptografadas. Especifique uma das seguintes [constantes ClientEncryption](class.mongodb-driver-clientencryption.md#mongodb-driver-clientencryption.constants):  - **`MongoDB\Driver\ClientEncryption::QUERY_TYPE_EQUALITY`** - **`MongoDB\Driver\ClientEncryption::QUERY_TYPE_RANGE`**  Esta opção só se aplica e só pode ser especificada quando `algorithm` for **`MongoDB\Driver\ClientEncryption::ALGORITHM_INDEXED`** ou **`MongoDB\Driver\ClientEncryption::ALGORITHM_RANGE`**. |
    | rangeOpts | [array](language.types.array.md) | Opções de índice para um campo de criptografia consultável compatível com consultas "range". As opções abaixo devem corresponder aos valores definidos nos `encryptedFields` da coleção de destino. Para tipos de campo double e decimal128 BSON, `min`, `max` e `precision` devem ser todos definidos ou nenhum definido.  **Opções de índice de intervalo**  | Opção | Tipo | Descrição | | --- | --- | --- | | min | [mixed](language.types.mixed.md) | Obrigatória se `precision` for definida. O valor BSON mínimo do intervalo. | | max | [mixed](language.types.mixed.md) | Obrigatória se `precision` for definida. O valor BSON máximo do intervalo. | | sparsity | [int](language.types.integer.md) | Opcional. Inteiro de 64 bits positivo. | | precision | [int](language.types.integer.md) | Opcional. Inteiro positivo de 32 bits que especifica a precisão a ser usada para criptografia explícita. Só pode ser definida para tipos de campo double ou decimal128 BSON. | | trimFactor | [int](language.types.integer.md) | Opcional. Inteiro positivo de 32 bits. | |

### Valor Retornado

Retorna o valor criptografado como
objeto [MongoDB\BSON\Binary](class.mongodb-bson-binary.md) com subtipo 6.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança [MongoDB\Driver\Exception\EncryptionException](class.mongodb-driver-exception-encryptionexception.md) se ocorrer um erro ao criptografar o valor

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.20.0 | Adicionada a opção de intervalo `"trimFactor"`. A opção de intervalo `"sparsity"` agora é opcional. |
| PECL mongodb 1.16.0 | Adicionada a opção `"rangeOpts"`. |
| PECL mongodb 1.14.0 | Adicionadas as opções `"contentionFactor"` e `"queryType"`. |

### Veja também

- [MongoDB\Driver\ClientEncryption::decrypt()](mongodb-driver-clientencryption.decrypt.md) - Descriptografa um valor
- [MongoDB\Driver\ClientEncryption::encryptExpression()](mongodb-driver-clientencryption.encryptexpression.md) - Criptografa uma expressão de correspondência ou de agregação

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
