# A classe MongoDB\Driver\ClientEncryption

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-clientencryption.php

---

# A classe MongoDB\Driver\ClientEncryption

(mongodb >=1.7.0)

## Introdução

A classe **MongoDB\Driver\ClientEncryption** lida com
a criação de chaves de dados para criptografia no lado do cliente e também com
criptografia e descriptografia manuais de valores.

## Resumo da classe

final

class **MongoDB\Driver\ClientEncryption**
{

/\* Constantes \*/

const
[string](language.types.string.md)
[AEAD\_AES\_256\_CBC\_HMAC\_SHA\_512\_DETERMINISTIC](class.mongodb-driver-clientencryption.md#mongodb-driver-clientencryption.constants.deterministic) = AEAD\_AES\_256\_CBC\_HMAC\_SHA\_512-Deterministic;

const
[string](language.types.string.md)
[AEAD\_AES\_256\_CBC\_HMAC\_SHA\_512\_RANDOM](class.mongodb-driver-clientencryption.md#mongodb-driver-clientencryption.constants.random) = AEAD\_AES\_256\_CBC\_HMAC\_SHA\_512-Random;

const
[string](language.types.string.md)
[ALGORITHM\_INDEXED](class.mongodb-driver-clientencryption.md#mongodb-driver-clientencryption.constants.algorithm-indexed) = Indexed;

const
[string](language.types.string.md)
[ALGORITHM\_UNINDEXED](class.mongodb-driver-clientencryption.md#mongodb-driver-clientencryption.constants.algorithm-unindexed) = Unindexed;

const
[string](language.types.string.md)
[ALGORITHM\_RANGE](class.mongodb-driver-clientencryption.md#mongodb-driver-clientencryption.constants.algorithm-range) = Range;

const
[string](language.types.string.md)
[QUERY\_TYPE\_EQUALITY](class.mongodb-driver-clientencryption.md#mongodb-driver-clientencryption.constants.query-type-equality) = equality;

const
[string](language.types.string.md)
[QUERY\_TYPE\_RANGE](class.mongodb-driver-clientencryption.md#mongodb-driver-clientencryption.constants.query-type-range) = range;

/\* Métodos \*/

final public function [addKeyAltName](mongodb-driver-clientencryption.addkeyaltname.md)([MongoDB\BSON\Binary](class.mongodb-bson-binary.md) `$keyId`, [string](language.types.string.md) `$keyAltName`): [?](language.types.null.md)[object](language.types.object.md)

final public function [\_\_construct](mongodb-driver-clientencryption.construct.md)([array](language.types.array.md) `$options`)

final public function [createDataKey](mongodb-driver-clientencryption.createdatakey.md)([string](language.types.string.md) `$kmsProvider`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\BSON\Binary](class.mongodb-bson-binary.md)

final public function [decrypt](mongodb-driver-clientencryption.decrypt.md)([MongoDB\BSON\Binary](class.mongodb-bson-binary.md) `$value`): [mixed](language.types.mixed.md)

final public function [deleteKey](mongodb-driver-clientencryption.deletekey.md)([MongoDB\BSON\Binary](class.mongodb-bson-binary.md) `$keyId`): [object](language.types.object.md)

final public function [encrypt](mongodb-driver-clientencryption.encrypt.md)([mixed](language.types.mixed.md) `$value`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\BSON\Binary](class.mongodb-bson-binary.md)

final public function [encryptExpression](mongodb-driver-clientencryption.encryptexpression.md)([array](language.types.array.md)|[object](language.types.object.md) `$expr`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [object](language.types.object.md)

final public function [getKey](mongodb-driver-clientencryption.getkey.md)([MongoDB\BSON\Binary](class.mongodb-bson-binary.md) `$keyId`): [?](language.types.null.md)[object](language.types.object.md)

final public function [getKeyByAltName](mongodb-driver-clientencryption.getkeybyaltname.md)([string](language.types.string.md) `$keyAltName`): [?](language.types.null.md)[object](language.types.object.md)

final public function [getKeys](mongodb-driver-clientencryption.getkeys.md)(): [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

final public function [removeKeyAltName](mongodb-driver-clientencryption.removekeyaltname.md)([MongoDB\BSON\Binary](class.mongodb-bson-binary.md) `$keyId`, [string](language.types.string.md) `$keyAltName`): [?](language.types.null.md)[object](language.types.object.md)

final public function [rewrapManyDataKey](mongodb-driver-clientencryption.rewrapmanydatakey.md)([array](language.types.array.md)|[object](language.types.object.md) `$filter`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [object](language.types.object.md)

}

## Constantes predefinidas

**`MongoDB\Driver\ClientEncryption::AEAD_AES_256_CBC_HMAC_SHA_512_DETERMINISTIC`**
:   Especifica um algoritmo para [» criptografia determinística](https://www.mongodb.com/docs/manual/core/csfle/fundamentals/encryption-algorithms/#deterministic-encryption), que é adequado para consultas.

**`MongoDB\Driver\ClientEncryption::AEAD_AES_256_CBC_HMAC_SHA_512_RANDOM`**
:   Especifica um algoritmo para [» criptografia aleatorizada](https://www.mongodb.com/docs/manual/core/csfle/fundamentals/encryption-algorithms/#randomized-encryption)

**`MongoDB\Driver\ClientEncryption::ALGORITHM_INDEXED`**
:   Especifica um algoritmo para uma carga criptografada e indexada, que pode ser usada com criptografia consultável.

    Para inserir ou consultado com uma carga criptografada e indexada, a classe [MongoDB\Driver\Manager](class.mongodb-driver-manager.md) precisa ser configurada com a opção `"autoEncryption"` do driver. A opção de autocriptografia `"bypassQueryAnalysis"` pode ser **`true`**. A opção de autocriptografia `"bypassAutoEncryption"` precisa ser **`false`**.

**`MongoDB\Driver\ClientEncryption::ALGORITHM_UNINDEXED`**
:   Especifica um algoritmo para uma carga criptografada e não indexada.

**`MongoDB\Driver\ClientEncryption::ALGORITHM_RANGE`**
:   Especifica um algoritmo para uma carga criptografada por intervalo, que pode ser usada
    com criptgrafia consultável.

    Para consultar com uma carga criptografada por intervalo, a classe
    [MongoDB\Driver\Manager](class.mongodb-driver-manager.md) precisa ser configurada com a opção de driver
    `"autoEncryption"`. A
    opção de criptografia automática `"bypassQueryAnalysis"` pode ser
    **`true`**. A opção de criptografia automática `"bypassAutoEncryption"`
    deve ser **`false`**.

    > **Nota**:
    >
    > A extensão ainda não oferece suporte a consultas de intervalo para tipos de campo Decimal128 BSON.

**`MongoDB\Driver\ClientEncryption::QUERY_TYPE_EQUALITY`**
:   Especifica um tipo de consulta de igualdade, que é usada em conjunto com
    **`MongoDB\Driver\ClientEncryption::ALGORITHM_INDEXED`**.

**`MongoDB\Driver\ClientEncryption::QUERY_TYPE_RANGE`**
:   Especifica um tipo de consulta de intervalo, que é usada em conjunto com
    **`MongoDB\Driver\ClientEncryption::ALGORITHM_RANGE`**.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Removidas as constantes **`MongoDB\Driver\ClientEncryption::ALGORITHM_RANGE_PREVIEW`** e **`MongoDB\Driver\ClientEncryption::QUERY_TYPE_RANGE_PREVIEW`**. |
| PECL mongodb 1.20.0 | Adicionadas **`MongoDB\Driver\ClientEncryption::ALGORITHM_RANGE`** e **`MongoDB\Driver\ClientEncryption::QUERY_TYPE_RANGE`**.  Descontinuadas **`MongoDB\Driver\ClientEncryption::ALGORITHM_RANGE_PREVIEW`** e **`MongoDB\Driver\ClientEncryption::QUERY_TYPE_RANGE_PREVIEW`**. |
| PECL mongodb 1.16.0 | Adicionadas **`MongoDB\Driver\ClientEncryption::ALGORITHM_RANGE_PREVIEW`** e **`MongoDB\Driver\ClientEncryption::QUERY_TYPE_RANGE_PREVIEW`**. |
| PECL mongodb 1.14.0 | Adicionadas **`MongoDB\Driver\ClientEncryption::ALGORITHM_INDEXED`**, **`MongoDB\Driver\ClientEncryption::ALGORITHM_UNINDEXED`**, e **`MongoDB\Driver\ClientEncryption::QUERY_TYPE_EQUALITY`**. |

## Veja também

- [MongoDB\Driver\Manager::createClientEncryption()](mongodb-driver-manager.createclientencryption.md)

## Índice

- [MongoDB\Driver\ClientEncryption::addKeyAltName](mongodb-driver-clientencryption.addkeyaltname.md) — Adiciona um nome alternativo a um documento de chave
- [MongoDB\Driver\ClientEncryption::\_\_construct](mongodb-driver-clientencryption.construct.md) — Cria um novo objeto ClientEncryption
- [MongoDB\Driver\ClientEncryption::createDataKey](mongodb-driver-clientencryption.createdatakey.md) — Cria um documento de chave
- [MongoDB\Driver\ClientEncryption::decrypt](mongodb-driver-clientencryption.decrypt.md) — Descriptografa um valor
- [MongoDB\Driver\ClientEncryption::deleteKey](mongodb-driver-clientencryption.deletekey.md) — Exclui um documento de chave
- [MongoDB\Driver\ClientEncryption::encrypt](mongodb-driver-clientencryption.encrypt.md) — Criptografa um valor
- [MongoDB\Driver\ClientEncryption::encryptExpression](mongodb-driver-clientencryption.encryptexpression.md) — Criptografa uma expressão de correspondência ou de agregação
- [MongoDB\Driver\ClientEncryption::getKey](mongodb-driver-clientencryption.getkey.md) — Obtém um documento de chave
- [MongoDB\Driver\ClientEncryption::getKeyByAltName](mongodb-driver-clientencryption.getkeybyaltname.md) — Obtém um de documento chave com um nome alternativo
- [MongoDB\Driver\ClientEncryption::getKeys](mongodb-driver-clientencryption.getkeys.md) — Obtém todos os documentos de chave
- [MongoDB\Driver\ClientEncryption::removeKeyAltName](mongodb-driver-clientencryption.removekeyaltname.md) — Remove um nome alternativo de um documento de chave
- [MongoDB\Driver\ClientEncryption::rewrapManyDataKey](mongodb-driver-clientencryption.rewrapmanydatakey.md) — Reencapsula chaves de dados

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
